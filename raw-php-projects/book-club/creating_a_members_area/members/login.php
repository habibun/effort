<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/5/15
 * Time: 12:50 PM
 */

require_once("../common.inc.php");
session_start();
if (isset($_POST["action"]) and $_POST["action"] == "login") {
    processForm();
} else {
    displayForm(array(), array(), new Member(array()));
}
function displayForm($errorMessages, $missingFields, $member)
{
    displayPageHeader("Login to the book club members' area", true);
    if ($errorMessages) {
        foreach ($errorMessages as $errorMessage) {
            echo $errorMessage;
        }
    } else {
        ?>
        <p>To access the members' area, pleas enter your username and password
            below then click Login.</p>
    <?php } ?>
    <form action="login.php" method="post" style="margin-bottom: 50px;">
        <div style="width: 30em;">
            <input type="hidden" name="action" value="login"/>
            <label for="username"<?php validateField("username", $missingFields) ?>>Username</label>
            <input type="text" name="username" id="username" value="<?php
            echo $member->getValueEncoded("username") ?>"/>
            <label for="password"<?php if ($missingFields) echo ' class="error"' ?>>Password</label>
            <input type="password" name="password" id="password" value=""/>

            <div style="clear: both;">
                <input type="submit" name="submitButton" id="submitButton"
                       value="Login"/>
            </div>
        </div>
    </form>
    <?php
    displayPageFooter();
}

function processForm()
{
    $requiredFields = array("username", "password");
    $missingFields = array();
    $errorMessages = array();
    $member = new Member(array(
        "username" => isset($_POST["username"]) ? preg_replace("/[^ \-\_a-zA-Z0-9]/", "", $_POST["username"]) : "",
        "password" => isset($_POST["password"]) ? preg_replace("/[^ \-\_a-zA-Z0-9]/", "", $_POST["password"]) : "",
    ));
    foreach ($requiredFields as $requiredField) {
        if (!$member->getValue($requiredField)) {
            $missingFields[] = $requiredField;
        }
    }
    if ($missingFields) {
        $errorMessages[] = '<p class="error">There were some missing fields in
the form you submitted. Please complete the fields highlighted below and
    click Login to resend the form.</p>';
    } elseif (!$loggedInMember = $member->authenticate()) {
        $errorMessages[] = '<p class="error">Sorry, we could not log you in with
those details. Please check your username and password, and try again.</p>';
    }
    if ($errorMessages) {
        displayForm($errorMessages, $missingFields, $member);
    } else {
        $_SESSION["member"] = $loggedInMember;
        displayThanks();
    }
}

function displayThanks()
{
    displayPageHeader("Thanks for logging in!", true);
    ?>
    <p>Thank you for logging in. Please proceed to the <a href="index.php">members' area</a>.</p>
    <?php
    displayPageFooter();
}

?>
