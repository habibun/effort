<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Browser Information</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Browser Information</h1>

<?php

require_once( "Net/UserAgent/Detect.php" );

$detect = new Net_UserAgent_Detect();
echo "<p>You are running " . $detect->getBrowserString();
echo ". Your operating system is " . $detect->getOSString() . ".</p>";
?>

  </body>
</html>
