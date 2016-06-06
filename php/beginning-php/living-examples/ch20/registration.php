<?php

if ( isset( $_POST["submitButton"] ) ) {
  processForm();
} else {
  displayForm( array() );
}

function validateField( $fieldName, $missingFields ) {
  if ( in_array( $fieldName, $missingFields ) ) {
    return ' class="error"';
  }
}

function setValue( $fieldName ) {
  if ( isset( $_POST[$fieldName] ) ) {
    return htmlspecialchars( $_POST[$fieldName] );
  }
}

function setChecked( $fieldName, $fieldValue ) {
  if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
    return ' checked="checked"';
  }
}

function setSelected( $fieldName, $fieldValue ) {
  if ( isset( $_POST[$fieldName] ) and $_POST[$fieldName] == $fieldValue ) {
    return ' selected="selected"';
  }
}

function processForm( ) {
  $requiredFields = array( "firstName", "lastName", "password1", "password2", "gender" );
  $missingFields = array();

  foreach ( $requiredFields as $requiredField ) {
    if ( !isset( $_POST[$requiredField] ) or !$_POST[$requiredField] ) {
      $missingFields[] = $requiredField;
    }
  }

  if ( $missingFields ) {
    displayForm( $missingFields );
  } else {
    displayThanks();
  }
}

function displayForm( $missingFields ) {
  $results = array (
    "pageTitle" => "Membership Form",
    "scriptUrl" => "registration.php",
    "missingFields" => $missingFields,
    "firstNameAttrs" => validateField( "firstName", $missingFields ),
    "firstNameValue" => setValue( "firstName" ),
    "lastNameAttrs" => validateField( "lastName", $missingFields ),
    "lastNameValue" => setValue( "lastName" ),
    "genderAttrs" => validateField( "gender", $missingFields ),
    "genderMChecked" => setChecked( "gender", "M" ),
    "genderFChecked" => setChecked( "gender", "F" ),
    "favoriteWidgetOptions" => array(
      "superWidget" => setSelected( "favoriteWidget", "superWidget" ),
      "megaWidget" => setSelected( "favoriteWidget", "megaWidget" ),
      "wonderWidget" => setSelected( "favoriteWidget", "wonderWidget" ),
    ),
    "newsletterChecked" => setChecked( "newsletter", "yes" ),
    "commentsValue" => setValue( "comments" )
  );

  require( "templates/registration_form.php" );
}

function displayThanks() {
  $results = array (
    "pageTitle" => "Thank You"
  );

  require( "templates/thanks.php" );
}
?>

