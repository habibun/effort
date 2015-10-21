<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/20/15
 * Time: 8:41 PM
 */

/**
 * need to know function setChecked
 */
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Membership Form</title>
    <link rel="stylesheet" type="text/css" href="../living-examples/ch09/common.css"/>
    <style type="text/css">
        .error {
            background: #d33;
            color: white;
            padding: 0.2em;
        }
    </style>
</head>
<body>
<?php
if (isset($_POST["submitButton"])) {
    processForm();
} else {
    displayForm(array());
}
function validateField($fieldName, $missingFields)
{
    if (in_array($fieldName, $missingFields)) {
        echo ' class="error"';
    }
}

function setValue($fieldName)
{
    if (isset($_POST[$fieldName])) {
        echo $_POST[$fieldName];
    }
}

function setChecked($fieldName, $fieldValue)
{
    if (isset($_POST[$fieldName]) and $_POST[$fieldName] == $fieldValue) {
        echo ' checked="checked"';
    }
}

function setSelected($fieldName, $fieldValue)
{
    if (isset($_POST[$fieldName]) and $_POST[$fieldName] == $fieldValue) {
        echo ' selected="selected"';
    }
}

function processForm()
{
    $requiredFields = array("firstName", "lastName", "password1", "password2", "gender");
    $missingFields = array();
    foreach ($requiredFields as $requiredField) {
        if (!isset($_POST[$requiredField]) or !$_POST[$requiredField]) {
            $missingFields[] = $requiredField;
        }
    }
    if ($missingFields) {
        displayForm($missingFields);
    } else {
        displayThanks();
    }
}

function displayForm($missingFields)
{
    ?>
    <h1>Membership Form</h1>
    <?php if ($missingFields) { ?>
    <p class="error">There were some problems with the form you submitted.
        Please complete the fields highlighted below and click Send Details to
        resend the form.</p>
<?php } else { ?>
    <p>Thanks for choosing to join The Widget Club. To register, please
        fill in your details below and click Send Details. Fields marked with an
        asterisk (*) are required.</p>
<?php } ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div style="width: 30em;">
            <label for="firstName"<?php validateField("firstName", $missingFields) ?>>First name *</label>
            <input type="text" name="firstName" id="firstName" value="<?php setValue("firstName") ?>"/>

            <label for="lastName"<?php validateField("lastName", $missingFields) ?>>Last name *</label>
            <input type="text" name="lastName" id="lastName" value="<?php setValue("lastName") ?>"/>

            <label for="password1"<?php if ($missingFields) echo ' class="error"' ?>>Choose a password *</label>
            <input type="password" name="password1" id="password1" value=""/>

            <label for="password2"<?php if ($missingFields) echo ' class="error"' ?>>Retype password *</label>
            <input type="password" name="password2" id="password2" value=""/>

            <label<?php validateField("gender", $missingFields) ?>>Your gender: *</label>
            <label for="genderMale">Male</label>
            <input type="radio" name="gender" id="genderMale" value="M"<?php setChecked("gender", "M") ?>/>
            <label for="genderFemale">Female</label>
            <input type="radio" name="gender" id="genderFemale" value="F"<?php setChecked("gender", "F") ?> />

            <label for="favoriteWidget">What's your favorite widget? *</label>
            <select name="favoriteWidget" id="favoriteWidget" size="1">
                <option value="superWidget"<?php setSelected("favoriteWidget", "superWidget") ?>>The SuperWidget
                </option>
                <option value="megaWidget"<?php setSelected("favoriteWidget", "megaWidget") ?>>The MegaWidget</option>
                <option value="wonderWidget"<?php setSelected("favoriteWidget", "wonderWidget") ?>>The WonderWidget
                </option>
            </select>

            <label for="newsletter">Do you want to receive our newsletter?</label>
            <input type="checkbox" name="newsletter" id="newsletter"
                   value="yes"<?php setChecked("newsletter", "yes") ?> />
            <label for="comments">Any comments?</label>

            <textarea name="comments" id="comments" rows="4" cols="50">
                <?php setValue("comments") ?>
            </textarea>

            <div style="clear: both;">
                <input type="submit" name="submitButton" id="submitButton" value="Send Details"/>
                <input type="reset" name="resetButton" id="resetButton" value="Reset Form" style="margin-right: 20px;"/>
            </div>
        </div>
    </form>
    <?php
}

function displayThanks()
{
    ?>
    <h1>Thank You</h1>
    <p>Thank you, your application has been received.</p>
    <?php
}

?>
</body>
</html>

