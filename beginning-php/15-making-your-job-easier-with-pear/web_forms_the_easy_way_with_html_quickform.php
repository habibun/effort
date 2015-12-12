<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/8/15
 * Time: 9:39 PM
 */

/**
 * Here’s a simple example script that uses HTML_QuickForm to create a login form (without any validation
 * or filtering):
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Simple HTML_QuickForm Example</title>
</head>
<body>
<h1>Simple HTML_QuickForm Example</h1>
<?php
require_once("HTML/QuickForm.php");
$form = new HTML_QuickForm("", "post", "", "", null, true);
$form->addElement("text", "username", "Username");
$password = $form->addElement("password", "password", "Password");
$password->setValue("");
$buttons = array();
$buttons[] = HTML_QuickForm::createElement("submit", "submitButton", "Send
Details");
$buttons[] = HTML_QuickForm::createElement("reset", "resetButton", "Reset
Form");
$form->addGroup($buttons, null, null, "&nbsp;");
if ($form->isSubmitted()) {
    echo "<p>Thanks for your details!</p>";
} else {
    echo $form->toHtml();
}
?>
</body>
</html>

<?php
/**
 * If the package is still in beta, you can install it by specifying the channel explicitly, as follows:
 * $ pear install --alldeps channel://pear.php.net/HTML_QuickForm_Renderer_Tableless-0.6.1
 *
 */


/**
 * A Registration Form using HTML_QuickForm
 * -> see living-example->ch15-> book_club_2
 */
?>

