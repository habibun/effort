<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/23/16
 * Time: 1:08 PM
 */

/**
 * 1.
Write a PHP function that accepts a four-digit year and a month number (1–12), and returns the
number of weekdays (Monday–Friday) in the given month. Use this function to calculate the
number of weekdays in March 1997 and display the result.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Number of weekdays in a month</title>
    <link rel="stylesheet" type="text/css" href="/beginning-php/living-examples/ch16/common.css" />
</head>
<body>
<!--<h1>Number of weekdays in a month</h1>-->
<?php
/*echo idate('w', time()); //Day of the week (0 on Sunday)

    function weekdaysInMonth($year, $month){
        $date = mktime(0,0,0, $month, 1, $year);
        $daysInMonth = idate("t", $date); //Days in current month
        $weekdays = 0;

        for($d = 0; $d <= $daysInMonth; $d++){
            $date = mktime(0, 0, 0, $month, $d, $year);
            $dayOfWeek = idate("w", $date);
            if($dayOfWeek != 0 && $dayOfWeek != 6) $weekdays++;
        }
        return $weekdays;
    }
    $weekdays = weekdaysInMonth( 1997, 3 );
    echo "<p>March 1997 contained $weekdays weekdays.</p>";*/
?>
</body>
</html>

<?php
/**
 * 2.
 * Modify the contact.php contact form script in this chapter to allow a visitor to send an email
to anyone, not just the site owner. Include additional functionality to allow the visitor to copy
the email to an optional carbon copy (CC) recipient. (Incidentally, such a script is easily
exploitable by spammers, and therefore shouldn't be placed on a publicly accessible Web site.)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Send an Email Message</title>
    <link rel="stylesheet" type="text/css" href="/beginning-php/living-examples/ch16/common.css" />
    <style type="text/css">
        .error { background: #d33; color: white; padding: 0.2em; margin: 0.2em 0 0.2em 0;
            font-size: 0.9em; }
        fieldset { border: none; padding: 0; }
        ol {list-style-type: none; padding: 0; margin: 0; }
        input, select, textarea { float: none; margin: 1em 0 0 0; width: auto; }
        div.element { float: right; width: 57%; }
        div.element label { display: inline; float: none; }
        select { margin-right: 0.5em; }
        span.required { display: none; }
    </style>
</head>
<body>
<h1>Send an Email Message</h1>
<?php
require_once( "HTML/QuickForm.php" );
require_once( "HTML/QuickForm/Renderer/Tableless.php" );
$form = new HTML_QuickForm( "form", "post", "exercises.php", "", array( "style" =>
"width: 30em;" ), true );
$form->removeAttribute( "name" );
$form->setRequiredNote( "" );
$form->addElement( "text", "firstName", "First name" );
$form->addElement( "text", "lastName", "Last name" );
$form->addElement( "text", "emailAddress", "Email address" );
$form->addElement( "text", "toEmailAddress", "To" );
$form->addElement( "text", "ccEmailAddress", "CC (optional)" );
$form->addElement( "text", "subject", "Message subject" );
$form->addElement( "textarea", "message", "Message", array( "rows" => 10, "cols" =>
50 ) );
$form->addElement( "submit", "sendButton", "Send Message" );
$form->addRule( "firstName", "Please enter your first name", "required" );
$form->addRule( "firstName", "The First Name field can contain only letters,
digits, spaces, apostrophes, and hyphens", "regex", "/^[ \'\-a-zA-Z0-9]+$/" );
$form->addRule( "lastName", "Please enter your last name", "required" );
$form->addRule( "lastName", "The Last Name field can contain only letters, digits,
spaces, apostrophes, and hyphens", "regex", "/^[ \'\-a-zA-Z0-9]+$/" );
$form->addRule( "emailAddress", "Please enter an email address", "required" );
$form->addRule( "emailAddress", "Please enter a valid email address", "email" );
$form->addRule( "toEmailAddress", "Please enter an email address", "required" );
$form->addRule( "toEmailAddress", "Please enter a valid email address", "email" );
$form->addRule( "ccEmailAddress", "Please enter a valid email address", "email" );
$form->addRule( "subject", "Please enter a message subject", "required" );
$form->addRule( "subject", "Your subject can contain only letters, digits, spaces,
apostrophes, commas, periods, and hyphens", "regex", "/^[ \'\,\.\-a-zA-Z0-9]+$/" );
$form->addRule( "message", "Please enter your message", "required" );
if ( $form->isSubmitted() and $form->validate() ) {
$form->process( "sendMessage" );
} else {
echo "<p>Please fill in all the fields below (CC field is optional), then click
Send Message to send your email.</p>";
$renderer = new HTML_QuickForm_Renderer_Tableless();
$form->accept( $renderer );
echo $renderer->toHtml();
}
function sendMessage( $values ) {
$headers = "From: " . $values["firstName"] . " " . $values["lastName"] . " <" .
$values["emailAddress"] . ">\r\n";
if ( $values["ccEmailAddress"] ) $headers .= "Cc: " . $values["ccEmailAddress"] .
"\r\n";
if ( mail( $values["toEmailAddress"], $values["subject"], $values["message"],
$headers ) ) {
    echo "<p>Your message has been sent.</p>";
}
else
{
echo '<p>Sorry, your message could not be sent.</p>';
echo '<p>Please <a href="javascript:history.go(-1)">go back</a> to the form,
check the fields and try again.</p>';
}
}
?>
</body>
</html>

