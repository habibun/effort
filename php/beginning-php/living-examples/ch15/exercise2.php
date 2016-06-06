<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Roman numerals converter</title>
  </head>
  <body>
    <h1>Roman numerals converter</h1>
<?php
require_once( "HTML/QuickForm.php" );
require_once( "Numbers/Roman.php" );
$form = new HTML_QuickForm( "convertForm", "get", "", "", null, true );
$form->removeAttribute( "name" );
$form->addElement( "text", "number", "Number (in Arabic or Roman format)" );
$form->addElement( "submit", "convertButton", "Convert" );
$form->addRule( "number", "Please enter a number", "required" );

if ( $form->isSubmitted() and $form->validate() ) {
  $form->process( "convertNumber" );
}

echo $form->toHtml();

function convertNumber( $values ) {
  $originalNumber = $values["number"];

  if ( is_numeric( $originalNumber ) ) {
    $numerals = "Roman";
    $originalNumber = (int) $originalNumber;
    $convertedNumber = Numbers_Roman::toNumeral( $originalNumber, true, true );
  } else {
    $numerals = "Arabic";
    $originalNumber = preg_replace ( "/[^IVXLCDM]/i", "", $originalNumber );
    $convertedNumber = Numbers_Roman::toNumber( $originalNumber );
  }
    
  echo "<p>$originalNumber in $numerals numerals is: $convertedNumber.</p>";  
}

?>
  </body>
</html>
