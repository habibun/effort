<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/6/15
 * Time: 8:37 PM
 */

/**
 * 1.
 * Write an SQL query that returns a list of favorite genres in the book club’s members table
 * ordered by popularity, most popular first.
 */

/*
    select favoriteGenre, count(favoriteGenre) as popularity FROM members GROUP BY favoriteGenre order BY popularity DESC;
 */

/**
 * 2.
 * Add a Clear Access Log button to your member editor script, view_member.php, that deletes all
 * records in the accessLog table pertaining to the member being viewed.
 */

/*
 * see book_club for details
 */
?>


<?php

require_once("common.inc.php");
require_once("config.php");
require_once("Member.class.php");
require_once("LogEntry.class.php");

$memberId = isset($_REQUEST["memberId"]) ? (int)$_REQUEST["memberId"] : 0;

if (!$member = Member::getMember($memberId)) {
    displayPageHeader("Error");
    echo "<div>Member not found.</div>";
    displayPageFooter();
    exit;
}

if (isset($_POST["action"]) and $_POST["action"] == "Save Changes") {
    saveMember();
} elseif (isset($_POST["action"]) and $_POST["action"] == "Delete Member") {
    deleteMember();
} elseif (isset($_POST["action"]) and $_POST["action"] == "Clear Access Log") {
    clearLog();
} else {
    displayForm(array(), array(), $member);
}

function displayForm($errorMessages, $missingFields, $member)
{
    $logEntries = LogEntry::getLogEntries($member->getValue("id"));
    displayPageHeader("View member: " . $member->getValueEncoded("firstName") . " " . $member->getValueEncoded("lastName"));

    if ($errorMessages) {
        foreach ($errorMessages as $errorMessage) {
            echo $errorMessage;
        }
    }

    $start = isset($_REQUEST["start"]) ? (int)$_REQUEST["start"] : 0;
    $order = isset($_REQUEST["order"]) ? preg_replace("/[^ a-zA-Z]/", "", $_REQUEST["order"]) : "username";
    ?>
    <form action="exercise2.php" method="post" style="margin-bottom: 50px;">
        <div style="width: 30em;">
            <input type="hidden" name="memberId" id="memberId" value="<?php echo $member->getValueEncoded("id") ?>"/>
            <input type="hidden" name="start" id="start" value="<?php echo $start ?>"/>
            <input type="hidden" name="order" id="order" value="<?php echo $order ?>"/>

            <label for="username"<?php validateField("username", $missingFields) ?>>Username *</label>
            <input type="text" name="username" id="username"
                   value="<?php echo $member->getValueEncoded("username") ?>"/>
            <label for="password">New password</label>
            <input type="password" name="password" id="password" value=""/>
            <label for="emailAddress"<?php validateField("emailAddress", $missingFields) ?>>Email address *</label>
            <input type="text" name="emailAddress" id="emailAddress"
                   value="<?php echo $member->getValueEncoded("emailAddress") ?>"/>
            <label for="firstName"<?php validateField("firstName", $missingFields) ?>>First name *</label>
            <input type="text" name="firstName" id="firstName"
                   value="<?php echo $member->getValueEncoded("firstName") ?>"/>
            <label for="lastName"<?php validateField("lastName", $missingFields) ?>>Last name *</label>
            <input type="text" name="lastName" id="lastName"
                   value="<?php echo $member->getValueEncoded("lastName") ?>"/>
            <label for="joinDate"<?php validateField("joinDate", $missingFields) ?>>Joined on *</label>
            <input type="text" name="joinDate" id="joinDate"
                   value="<?php echo $member->getValueEncoded("joinDate") ?>"/>
            <label<?php validateField("gender", $missingFields) ?>>Gender *</label>
            <label for="genderMale">Male</label>
            <input type="radio" name="gender" id="genderMale" value="m"<?php setChecked($member, "gender", "m") ?>/>
            <label for="genderFemale">Female</label>
            <input type="radio" name="gender" id="genderFemale" value="f"<?php setChecked($member, "gender", "f") ?> />
            <label for="favoriteGenre">Favorite genre</label>
            <select name="favoriteGenre" id="favoriteGenre" size="1">
                <?php foreach ($member->getGenres() as $value => $label) { ?>
                    <option
                        value="<?php echo $value ?>"<?php setSelected($member, "favoriteGenre", $value) ?>><?php echo $label ?></option>
                <?php } ?>
            </select>
            <label for="otherInterests">Other interests</label>
            <textarea name="otherInterests" id="otherInterests" rows="4"
                      cols="50"><?php echo $member->getValueEncoded("otherInterests") ?></textarea>

            <div style="clear: both;">
                <input type="submit" name="action" id="saveButton" value="Save Changes"/>
                <input type="submit" name="action" id="deleteButton" value="Delete Member" style="margin-right: 20px;"/>
                <input type="submit" name="action" id="clearLogButton" value="Clear Access Log"
                       style="margin-right: 20px;"/>
            </div>
        </div>
    </form>

    <h2>Access log</h2>

    <table cellspacing="0" style="width: 30em; border: 1px solid #666;">
        <tr>
            <th>Web page</th>
            <th>Number of visits</th>
            <th>Last visit</th>
        </tr>
        <?php
        $rowCount = 0;

        foreach ($logEntries as $logEntry) {
            $rowCount++;
            ?>
            <tr<?php if ($rowCount % 2 == 0) echo ' class="alt"' ?>>
                <td><?php echo $logEntry->getValueEncoded("pageUrl") ?></td>
                <td><?php echo $logEntry->getValueEncoded("numVisits") ?></td>
                <td><?php echo $logEntry->getValueEncoded("lastAccess") ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <div style="width: 30em; margin-top: 20px; text-align: center;">
        <a href="view_members.php?start=<?php echo $start ?>&amp;order=<?php echo $order ?>">Back</a>
    </div>

    <?php
    displayPageFooter();
}

function saveMember()
{
    $requiredFields = array("username", "emailAddress", "firstName", "lastName", "joinDate", "gender");
    $missingFields = array();
    $errorMessages = array();

    $member = new Member(array(
        "id" => isset($_POST["memberId"]) ? (int)$_POST["memberId"] : "",
        "username" => isset($_POST["username"]) ? preg_replace("/[^a-zA-Z0-9]/", "", $_POST["username"]) : "",
        "password" => isset($_POST["password"]) ? preg_replace("/[^a-zA-Z0-9]/", "", $_POST["password"]) : "",
        "emailAddress" => isset($_POST["emailAddress"]) ? preg_replace("/[^ \@\.\-\_a-zA-Z0-9]/", "", $_POST["emailAddress"]) : "",
        "firstName" => isset($_POST["firstName"]) ? preg_replace("/[^ \'\-a-zA-Z0-9]/", "", $_POST["firstName"]) : "",
        "lastName" => isset($_POST["lastName"]) ? preg_replace("/[^ \'\-a-zA-Z0-9]/", "", $_POST["lastName"]) : "",
        "joinDate" => isset($_POST["joinDate"]) ? preg_replace("/[^\-0-9]/", "", $_POST["joinDate"]) : "",
        "gender" => isset($_POST["gender"]) ? preg_replace("/[^mf]/", "", $_POST["gender"]) : "",
        "favoriteGenre" => isset($_POST["favoriteGenre"]) ? preg_replace("/[^a-zA-Z]/", "", $_POST["favoriteGenre"]) : "",
        "otherInterests" => isset($_POST["otherInterests"]) ? preg_replace("/[^ \'\,\.\-a-zA-Z0-9]/", "", $_POST["otherInterests"]) : ""
    ));

    foreach ($requiredFields as $requiredField) {
        if (!$member->getValue($requiredField)) {
            $missingFields[] = $requiredField;
        }
    }

    if ($missingFields) {
        $errorMessages[] = '<p class="error">There were some missing fields in the form you submitted. Please complete the fields highlighted below and click Send Details to resend the form.</p>';
    }

    if ($existingMember = Member::getByUsername($member->getValue("username")) and $existingMember->getValue("id") != $member->getValue("id")) {
        $errorMessages[] = '<p class="error">A member with that username already exists in the database. Please choose another username.</p>';
    }

    if ($existingMember = Member::getByEmailAddress($member->getValue("emailAddress")) and $existingMember->getValue("id") != $member->getValue("id")) {
        $errorMessages[] = '<p class="error">A member with that email address already exists in the database. Please choose another email address.</p>';
    }

    if ($errorMessages) {
        displayForm($errorMessages, $missingFields, $member);
    } else {
        $member->update();
        displaySuccess();
    }
}

function deleteMember()
{
    $member = new Member(array(
        "id" => isset($_POST["memberId"]) ? (int)$_POST["memberId"] : "",
    ));
    LogEntry::deleteAllForMember($member->getValue("id"));
    $member->delete();
    displaySuccess();
}

function clearLog()
{
    $id = isset($_POST["memberId"]) ? (int)$_POST["memberId"] : "";
    LogEntry::deleteAllForMember($id);
    displaySuccess();
}

function displaySuccess()
{
    $start = isset($_REQUEST["start"]) ? (int)$_REQUEST["start"] : 0;
    $order = isset($_REQUEST["order"]) ? preg_replace("/[^ a-zA-Z]/", "", $_REQUEST["order"]) : "username";
    displayPageHeader("Changes saved");
    ?>
    <p>Your changes have been saved. <a
            href="view_members.php?start=<?php echo $start ?>&amp;order=<?php echo $order ?>">Return to member list</a>
    </p>
    <?php
    displayPageFooter();
}

?>


