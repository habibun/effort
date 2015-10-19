<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/29/06
 * Time: 6:11 AM
 */
?>

start php scripts

<?php
echo $_POST["firstName"];

//you can use request
echo $_REQUEST['firstName'];

//check for the presence of a submitted form
if (isset($_POST['firstName'])) {
    echo $_POST['firstName'];
}

?>
<h1>Thank You</h1>
<p>Thank you for registering. Here is the information you submitted:</p>
<dl>
    <dt>First name</dt>
    <dd><?php echo $_POST["firstName"] ?></dd>
    <dt>Last name</dt>
    <dd><?php echo $_POST["lastName"] ?></dd>
    <dt>Password</dt>
    <dd><?php echo $_POST["password1"] ?></dd>
    <dt>Retyped password</dt>
    <dd><?php echo $_POST["password2"] ?></dd>
    <dt>Gender</dt>
    <dd><?php echo $_POST["gender"] ?></dd>
    <dt>Favorite widget</dt>
    <dd><?php echo $_POST["favoriteWidget"] ?></dd>
    <dt>Do you want to receive our newsletter?</dt>
    <dd><?php echo $_POST["newsletter"] ?></dd>
    <dt>Comments</dt>
    <dd><?php echo $_POST["comments"] ?></dd>
</dl>

end php script

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Membership Form</title>
    <link rel="stylesheet" type="text/
css" href="../living-examples/ch09/common.css"/>
</head>
<body>
<h1>Membership Form</h1>

<p>Thanks for choosing to join The Widget Club. To register, please fill
    in your details below and click Send Details.</p>

<form action="capturing_form_data_with_php.php" method="post">
    <div style="width: 30em;">
        <label for="firstName">First name</label>
        <input type="text" name="firstName" id="firstName" value=""/>
        <label for="lastName">Last name</label>
        <input type="text" name="lastName" id="lastName" value=""/>
        <label
            for="password1">Choose a password</label>
        <input
            type="password" name="password1" id="password1" value=""/>
        <label
            for="password2">Retype password</label>
        <input
            type="password" name="password2" id="password2" value=""/>
        <label
            for="genderMale">Are you male...</label>
        <input
            type="radio" name="gender" id="genderMale" value="M"/>
        <label
            for="genderFemale">...or female?</label>
        <input
            type="radio" name="gender" id="genderFemale" value="F"/>
        <label for="favoriteWidget">What’s your favorite widget?</label>
        <select name="favoriteWidget" id="favoriteWidget" size="1">
            <option value="superWidget">The SuperWidget</option>
            <option value="megaWidget">The MegaWidget</option>
            <option value="wonderWidget">The WonderWidget</option>
        </select>
        <label for="newsletter">Do you want to receive our newsletter?</label>
        <input type="checkbox" name="newsletter" id="newsletter" value="yes"/>
        <label for="comments">Any comments?</label>
<textarea name="comments" id="comments" rows="4"
          cols="50"> </textarea>

        <div style="clear: both;">
            <input type="submit" name="submitButton" id="submitButton"
                   value="Send Details"/>
            <input type="reset" name="resetButton" id="resetButton"
                   value="Reset Form" style="margin-right: 20px;"/>
        </div>
    </div>
</form>
</body>
</html>


