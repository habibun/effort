<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Send an Email Message</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
    <style type="text/css">
      .error { background: #d33; color: white; padding: 0.2em; margin: 0.2em 0 0.2em 0; font-size: 0.9em; }
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
$form = new HTML_QuickForm( "form", "post", "exercise2.php", "", array( "style" => "width: 30em;" ), true );
$form->removeAttribute( "name" );
$form->setRequiredNote( "" );
$form->addElement( "text", "firstName", "First name" );
$form->addElement( "text", "lastName", "Last name" );
$form->addElement( "text", "emailAddress", "Email address" );
$form->addElement( "text", "toEmailAddress", "To" );
$form->addElement( "text", "ccEmailAddress", "CC (optional)" );
$form->addElement( "text", "subject", "Message subject" );
$form->addElement( "textarea", "message", "Message", array( "rows" => 10, "cols" => 50 ) );
$form->addElement( "submit", "sendButton", "Send Message" );
$form->addRule( "firstName", "Please enter your first name", "required" );
$form->addRule( "firstName", "The First Name field can contain only letters, digits, spaces, apostrophes, and hyphens", "regex", "/^[ \'\-a-zA-Z0-9]+$/" );
$form->addRule( "lastName", "Please enter your last name", "required" );
$form->addRule( "lastName", "The Last Name field can contain only letters, digits, spaces, apostrophes, and hyphens", "regex", "/^[ \'\-a-zA-Z0-9]+$/" );
$form->addRule( "emailAddress", "Please enter an email address", "required" );
$form->addRule( "emailAddress", "Please enter a valid email address", "email" );
$form->addRule( "toEmailAddress", "Please enter an email address", "required" );
$form->addRule( "toEmailAddress", "Please enter a valid email address", "email" );
$form->addRule( "ccEmailAddress", "Please enter a valid email address", "email" );
$form->addRule( "subject", "Please enter a message subject", "required" );
$form->addRule( "subject", "Your subject can contain only letters, digits, spaces, apostrophes, commas, periods, and hyphens", "regex", "/^[ \'\,\.\-a-zA-Z0-9]+$/" );
$form->addRule( "message", "Please enter your message", "required" );

if ( $form->isSubmitted() and $form->validate() ) {
  $form->process( "sendMessage" );
} else {
  echo "<p>Please fill in all the fields below (CC field is optional), then click Send Message to send your email.</p>";
  $renderer = new HTML_QuickForm_Renderer_Tableless();
  $form->accept( $renderer );
  echo $renderer->toHtml();
}

function sendMessage( $values ) {
  $headers = "From: " . $values["firstName"] . " " . $values["lastName"] . " <" . $values["emailAddress"] . ">\r\n";
  if ( $values["ccEmailAddress"] ) $headers .= "Cc: " . $values["ccEmailAddress"] . "\r\n";

  if ( mail( $values["toEmailAddress"], $values["subject"], $values["message"], $headers ) ) {
    echo "<p>Your message has been sent.</p>";
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
