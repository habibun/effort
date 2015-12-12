<?php

require_once( "common.inc.php" );
require_once( "HTML/QuickForm.php" );
require_once( "HTML/QuickForm/Renderer/Tableless.php" );

$form = new HTML_QuickForm( "", "post", "register.php", "", array( "style" => "width: 30em;" ), true );
$form->removeAttribute( "name" );
addElements( $form );
addRules( $form );
$form->setRequiredNote( "" );

if ( $form->isSubmitted() and $form->validate() ) {
  $form->process( "processForm" );
  displayThanks();
} else {
  displayPageHeader( "Sign up for the book club!" );
?>
    <p>Thanks for choosing to join our book club.</p>
    <p>To register, please fill in your details below and click Send Details.</p>
    <p>Fields marked with an asterisk (*) are required.</p>
<?php
  $renderer = new HTML_QuickForm_Renderer_Tableless();
  $form->accept( $renderer );
  echo $renderer->toHtml();
  displayPageFooter();
}

function addElements( $form ) {
  $form->addElement( "text", "username", "Choose a username" );
  $password1 = $form->addElement( "password", "password1", "Choose a password" );
  $password1->setValue( "" );
  $password2 = $form->addElement( "password", "password2", "Retype password" );
  $password2->setValue( "" );
  $form->addElement( "text", "emailAddress", "Email address" );
  $form->addElement( "text", "firstName", "First name" );
  $form->addElement( "text", "lastName", "Last name" );
  $genderOptions = array();
  $genderOptions[] = HTML_QuickForm::createElement( "radio", null, null, " Male", "m" );
  $genderOptions[] = HTML_QuickForm::createElement( "radio", null, null, " Female", "f" );
  $form->addGroup( $genderOptions, "gender", "Your gender", " " );
  $member = new Member( array() );
  $form->addElement( "select", "favoriteGenre", "What's your favorite genre?", $member->getGenres() );
  $form->addElement( "textarea", "otherInterests", "What are your other interests?", array( "rows" => 4, "cols" => 50 ) );
  $buttons = array();
  $buttons[] = HTML_QuickForm::createElement( "submit", "submitButton", "Send Details" );
  $buttons[] = HTML_QuickForm::createElement( "reset", "resetButton", "Reset Form" );
  $form->addGroup( $buttons, null, null, "&nbsp;" );
}

function addRules( $form ) {
  $form->addRule( "username", "Please enter a username", "required" );
  $form->addRule( "username", "The username can contain only letters and digits", "alphanumeric" );
  $form->addRule( "password1", "Please enter a password", "required" );
  $form->addRule( "password1", "The password can contain only letters and digits", "alphanumeric" );
  $form->addRule( "password2", "Please retype your password", "required" );
  $form->addRule( "password2", "The password can contain only letters and digits", "alphanumeric" );
  $form->addRule( array( "password1", "password2" ), "Please make sure you enter your password correctly in both password fields.", "compare" );
  $form->addRule( "emailAddress", "Please enter an email address", "required" );
  $form->addRule( "emailAddress", "Please enter a valid email address", "email" );
  $form->addRule( "firstName", "Please enter your first name", "required" );
  $form->addRule( "firstName", "The First Name field can contain only letters, digits, spaces, apostrophes, and hyphens", "regex", "/^[ \'\-a-zA-Z0-9]+$/" );
  $form->addRule( "lastName", "Please enter your last name", "required" );
  $form->addRule( "lastName", "The Last Name field can contain only letters, digits, spaces, apostrophes, and hyphens", "regex", "/^[ \'\-a-zA-Z0-9]+$/" );
  $form->addRule( "gender", "Please select your gender", "required" );
  $form->addRule( "gender", "The Gender field can contain only 'm' or 'f'", "regex", "/^[mf]$/" );
  $member = new Member( array() );
  $form->addRule( "favoriteGenre", "The Favorite Genre field can contain only allowed genre values", "regex", "/^(" . implode( "|", array_keys( $member->getGenres() ) ) . ")$/" );
  $form->addRule( "otherInterests", "The Other Interests field can contain only letters, digits, spaces, apostrophes, commas, periods, and hyphens", "regex", "/^[ \'\,\.\-a-zA-Z0-9]+$/" );
  $form->addRule( "username", "A member with that username already exists in the database. Please choose another username.", "callback", "checkDuplicateUsername" );
  $form->addRule( "emailAddress", "A member with that email address already exists in the database. Please choose another email address, or contact the webmaster to retrieve your password.", "callback", "checkDuplicateEmailAddress" );
}

function checkDuplicateUsername( $value ) {
  return !(boolean) Member::getByUsername( $value );
}

function checkDuplicateEmailAddress( $value ) {
  return !(boolean) Member::getByEmailAddress( $value );
}

function processForm( $values ) {
  $values["password"] = $values["password1"];
  $values["joinDate"] = date( "Y-m-d" );
  $member = new Member( $values );
  $member->insert();
}

function displayThanks() {
  displayPageHeader( "Thanks for registering!" );
?>
    <p>Thank you, you are now a registered member of the book club.</p>
<?php
  displayPageFooter();
}
?>
