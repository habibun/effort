<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>How many days old are you?</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
    <style type="text/css">
      .error { background: #d33; color: white; padding: 0.2em; margin: 0.2em 0 0.2em 0; font-size: 0.9em; }
      fieldset { border: none; }
      ol {list-style-type: none; }
      input, select, textarea { float: none; margin: 1em 0 0 0; width: auto; }
      div.element { float: right; width: 57%; }
      div.element label { display: inline; float: none; }
      select { margin-right: 0.5em; }
      span.required { display: none; }
    </style>
  </head>
  <body>
    <h1>How many days old are you?</h1>
<?php
require_once( "HTML/QuickForm.php" );
require_once( "HTML/QuickForm/Renderer/Tableless.php" );
$form = new HTML_QuickForm( "form", "get", "days_old.php", "", array( "style" => "width: 30em;" ), true );
$form->removeAttribute( "name" );
$form->setRequiredNote( "" );
$options = array( format => "MdY", "minYear" => 1902, "maxYear" => date("Y") );
$form->addElement( "date", "dateOfBirth", "Your date of birth", $options );
$form->addElement( "submit", "calculateButton", "Calculate" );
$form->addGroupRule( "dateOfBirth", "Please enter your date of birth", "required" );
$form->addRule( "dateOfBirth", "Please enter a valid date", "callback", "checkDateOfBirth" );

if ( $form->isSubmitted() and $form->validate() ) {
  $form->process( "calculateDays" );
}

$renderer = new HTML_QuickForm_Renderer_Tableless();
$form->accept( $renderer );
echo $renderer->toHtml();

function checkDateOfBirth( $value ) {
  return checkdate( $value["M"], $value["d"], $value["Y"] );
}

function calculateDays( $values ) {
  $currentDate = mktime();
  $dateOfBirth = mktime( 0, 0, 0, $values["dateOfBirth"]["M"], $values["dateOfBirth"]["d"], $values["dateOfBirth"]["Y"] );
  $secondsOld = $currentDate - $dateOfBirth;
  $daysOld = (int) ( $secondsOld / 60 / 60 / 24 );
  echo "<p>You were born on " . date( "l, F jS, Y", $dateOfBirth ) . ".</p>";
  echo "<p>You are " . number_format( $daysOld ) . " day" . ( $daysOld != 1 ? "s" : "" ) . " old!</p>";
}

?>
  </body>
</html>
