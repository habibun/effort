<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/20/15
 * Time: 10:01 PM
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Membership Form</title>
    <link rel="stylesheet" type="text/css" href="../living-examples/ch09/common.css"/>
</head>
<body>
<?php
if (isset($_POST["step"]) and $_POST["step"] >= 1 and $_POST["step"] <= 3) {
    call_user_func("processStep" . (int)$_POST["step"]);
} else {
    displayStep1();
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

function processStep1()
{
    displayStep2();
}

function processStep2()
{
    if (isset($_POST["submitButton"]) and $_POST["submitButton"] == "< Back") {
        displayStep1();
    } else {
        displayStep3();
    }
}

function processStep3()
{
    if (isset($_POST["submitButton"]) and $_POST["submitButton"] == "< Back") {
        displayStep2();
    } else {
        displayThanks();
    }
}

function displayStep1()
{
    ?>
    <h1>Member Signup: Step 1</h1>
    <form action="" method="post">
        <div style="width: 30em;">
            <input type="hidden" name="step" value="1"/>
            <input type="hidden" name="gender" value="<?php setValue("gender") ?>"/>
            <input type="hidden" name="favoriteWidget" value="<?php setValue("favoriteWidget") ?>"/>
            <input type="hidden" name="newsletter" value="<?php setValue("newsletter") ?>"/>
            <input type="hidden" name="comments" value="<?php setValue("comments") ?>"/>
            <label for="firstName">First name</label>
            <input type="text" name="firstName" id="firstName" value="<?php setValue("firstName") ?>"/>
            <label for="lastName">Last name</label>
            <input type="text" name="lastName" id="lastName" value="<?php setValue("lastName") ?>"/>

            <div style="clear: both;">
                <input type="submit" name="submitButton" id="nextButton" value="Next &gt;"/>
            </div>
        </div>
    </form>
    <?php
}

function displayStep2()
{
    ?>
    <h1>Member Signup: Step 2</h1>
    <form action="" method="post">
        <div style="width: 30em;">
            <input type="hidden" name="step" value="2"/>
            <input type="hidden" name="firstName" value="<?php setValue("firstName") ?>"/>
            <input type="hidden" name="lastName" value="<?php setValue("lastName") ?>"/>
            <input type="hidden" name="newsletter" value="<?php setValue("newsletter") ?>"/>
            <input type="hidden" name="comments" value="<?php setValue("comments") ?>"/>
            <label>Your gender:</label>
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

            <div style="clear: both;">
                <input type="submit" name="submitButton" id="nextButton" value="Next &gt;"/>
                <input type="submit" name="submitButton" id="backButton" value="&lt; Back" style="margin-right: 20px;"/>
            </div>
        </div>
    </form>
    <?php
}

function displayStep3()
{
    ?>
    <h1>Member Signup: Step 3</h1>
    <form action="" method="post">
        <div style="width: 30em;">
            <input type="hidden" name="step" value="3"/>
            <input type="hidden" name="firstName" value="<?php setValue("firstName") ?>"/>
            <input type="hidden" name="lastName" value="<?php setValue("lastName") ?>"/>
            <input type="hidden" name="gender" value="<?php setValue("gender") ?>"/>
            <input type="hidden" name="favoriteWidget" value="<?php setValue("favoriteWidget") ?>"/>
            <label for="newsletter">Do you want to receive our newsletter?
            </label>
            <input type="checkbox" name="newsletter" id="newsletter"
                   value="yes"<?php setChecked("newsletter", "yes") ?> />
            <label for="comments">Any comments?</label>
            <textarea name="comments" id="comments" rows="4" cols="50"><?php setValue("comments") ?></textarea>

            <div style="clear: both;">
                <input type="submit" name="submitButton" id="nextButton" value="Next &gt;"/>
                <input type="submit" name="submitButton" id="backButton" value="&lt; Back" style="margin-right: 20px;"/>
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

