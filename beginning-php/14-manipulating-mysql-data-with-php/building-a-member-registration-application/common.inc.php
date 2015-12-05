<?php

require_once( "config.php" );
require_once( "Member.class.php" );
require_once( "LogEntry.class.php" );


function displayPageHeader( $pageTitle ) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title><?php echo $pageTitle?></title>
    <link rel="stylesheet" type="text/css" href="../common.css" />
    <style type="text/css">
      th { text-align: left; background-color: #bbb; }
      th, td { padding: 0.4em; }
      tr.alt td { background: #ddd; }
      .error { background: #d33; color: white; padding: 0.2em; }
    </style>
  </head>
  <body>

    <h1><?php echo $pageTitle?></h1>
<?php
}

function displayPageFooter() {
?>
  </body>
</html>
<?php
}

function validateField($fieldName, $missingFields){
    if(in_array($fieldName, $missingFields)){
        echo 'class="error"';
    }
}

function setChecked(DataObject $obj, $fieldName, $fieldValue){
    if($obj->getValue($fieldName) == $fieldValue){
        echo 'checked="checked"';
    }
}

function setSelected(DataObject $obj, $fieldName, $fieldValue){
    if($obj->getValue($fieldName) == $fieldValue){
        echo 'selected="selected"';
    }
}



?>
