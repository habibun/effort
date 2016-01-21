<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/20/16
 * Time: 8:58 PM
 */

/**
 * For example, the following code sends a short email entitled "Hello", with a message body of "Hi Jim,
how are you?", to jim@example.com:
 */
mail( "jim@example.com", "Hello", "Hi Jim, how are you?" );


/**
 * You can also include the recipient's real name in the recipient string, provided you follow it with the
recipient's email address in angle brackets. For example:
 */
mail( "Jim Smith <jim@example.com>", "Hello", "Hi Jim, how are you?" );

/**
 * Lines of text in an email message body should not exceed 70 characters in length. To ensure that your
lines are of the correct length you can use PHP's wordwrap() function:
 */
$message = '';
$message = wordwrap( $message, 70 );


/**
 * Specifying the Sender Address and Adding Headers
 */
mail( "Jim Smith <jim@example.com>", "Hello", $message, "From: Bob Jones <bob@example.com>" );


/**
 *  Just make sure you separate each header by both a carriage return (\r) and line feed (\n) character; this is required
by the specification for Internet email messages
 */

$extraHeaders = "From: Bob Jones <bob@example.com>\r\n" .
"Cc: Anna James <anna@example.com>\r\n" .
"X-Priority: 1 (Highest)\r\n" .
"X-Mailer: Matt's PHP Script";
mail( "Jim Smith <jim@example.com>", "Hello", $message, $extraHeaders );


/**
 * Controlling the Return Path Email Address
 */
mail( "Jim Smith <jim@example.com>", "Hello", $message, "From: Bob Jones
<bob@example.com>", "-f bob@example.com" );



/**
 * Here's a very simple HTML email message:
 */
$message = <<<END_HTML
<html>
<body>
<h1 style="color: #AA3333;">Thank You</h1>
<p>Thank you for contacting <a href="http://www.example.com/">The Widget
Company</a>. We'll be in touch shortly.</p>
</body>
</html>
END_HTML;

//So to send the HTML email just shown, you could write:
$headers = "From: The Widget Company <widgets@example.com>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$recipient = "John Smith <johnsmith@example.com>";
$subject = "Thank you for contacting us";
mail( $recipient, $subject, $message, $headers );
?>

/**
 * Try It Out Create a Contact Form Script
 */

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="/beginning-php/living-examples/ch16/common.css" />
<style type="text/css">
.error { background: #d33; color: white; padding: 0.2em; margin:
    0.2em 0 0.2em 0; font-size: 0.9em; }
fieldset { border: none; padding: 0; }
ol {list-style-type: none; padding: 0; margin: 0; }
input, select, textarea { float: none; margin: 1em 0 0 0; width:
auto; }
div.element { float: right; width: 57%; }
div.element label { display: inline; float: none; }
select { margin-right: 0.5em; }
span.required { display: none; }
</style>
</head>
<body>
<h1>Contact Us</h1>
<?php
require_once( "HTML/QuickForm.php" );
require_once( "HTML/QuickForm/Renderer/Tableless.php" );
define( "OWNER_FIRST_NAME", "Michael" );
define( "OWNER_LAST_NAME", "Brown" );
define( "OWNER_EMAIL_ADDRESS", "michael@example.com" );
$form = new HTML_QuickForm( "form", "get", "sending_email.php", "", array( "style" => "width: 30em;" ), true );
$form->removeAttribute( "name" );
$form->setRequiredNote( "" );
$form->addElement( "text", "firstName", "First name" );
$form->addElement( "text", "lastName", "Last name" );
$form->addElement( "text", "emailAddress", "Email address" );
$form->addElement( "text", "subject", "Message subject" );
$form->addElement( "textarea", "message", "Message", array( "rows" => 10, "cols" => 50 ) );
$form->addElement( "submit", "sendButton", "Send Message" );
$form->addRule( "firstName", "Please enter your first name", "required" );
$form->addRule( "firstName", "The First Name field can contain only letters,digits, spaces, apostrophes, and hyphens", "regex", "/^[ \'\-a-zA-Z0-9]+$/" );
$form->addRule( "lastName", "Please enter your last name", "required" );
$form->addRule( "lastName", "The Last Name field can contain only letters,digits, spaces, apostrophes, and hyphens", "regex", "/^[ \'\-a-zA-Z0-9]+$/" );
$form->addRule( "emailAddress", "Please enter an email address", "required" );
$form->addRule( "emailAddress", "Please enter a valid email address", "email" );
$form->addRule( "subject", "Please enter a message subject", "required" );
$form->addRule( "subject", "Your subject can contain only letters, digits,spaces, apostrophes, commas, periods, and hyphens", "regex", "/^[ \'\,\.\-a-zA-Z0-9]+$/" );
$form->addRule( "message", "Please enter your message", "required" );
if ( $form->isSubmitted() and $form->validate() ) {
    $form->process( "sendMessage" );
} else {
    echo "<p>Please fill in all the fields below, then click Send Message to
send us an email.</p>";
$renderer = new HTML_QuickForm_Renderer_Tableless();
$form->accept( $renderer );
echo $renderer->toHtml();
}
function sendMessage( $values ) {
    $recipient = OWNER_FIRST_NAME . " " . OWNER_LAST_NAME . " <" . OWNER_EMAIL_ADDRESS . ">";
    $headers = "From: " . $values["firstName"] . " " . $values["lastName"] . " <" . $values["emailAddress"] . ">";
if ( mail( $recipient, $values["subject"], $values["message"], $headers ) ) {
        echo "<p>Thanks for your message! Someone will be in touch shortly.</p>";
}
else
{
    echo '<p>Sorry, your message could not be sent.</p>';
echo '<p>Please <a href="javascript:history.go(-1)">go back</a> to the form, check the fields and try again.</p>';
}
}
?>
</body>
</html>