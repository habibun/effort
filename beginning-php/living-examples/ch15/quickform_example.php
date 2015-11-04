<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Simple HTML_QuickForm Example</title>
  </head>
  <body>
    <h1>Simple HTML_QuickForm Example</h1>
<?php
require_once( "HTML/QuickForm.php" );
$form = new HTML_QuickForm( "", "post", "", "", null, true );
$form->addElement( "text", "username", "Username" );
$password = $form->addElement( "password", "password", "Password" );
$password->setValue( "" );
$buttons = array();
$buttons[] = HTML_QuickForm::createElement( "submit", "submitButton", "Send Details" );
$buttons[] = HTML_QuickForm::createElement( "reset", "resetButton", "Reset Form" );
$form->addGroup( $buttons, null, null, "&nbsp;" );

if ( $form->isSubmitted() ) {
  echo "<p>Thanks for your details!</p>";
} else {
  echo $form->toHtml();
}
?>
  </body>
</html>
