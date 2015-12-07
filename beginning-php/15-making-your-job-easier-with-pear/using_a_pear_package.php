<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/7/15
 * Time: 7:55 PM
 */

/*
For example, the Net_UserAgent_Detect package is accessed by including the file Net/UserAgent/Detect.php:
require_once( "Net/UserAgent/Detect.php" );
You can then create a new Net_UserAgent_Detect object with:
$detect = new Net_UserAgent_Detect();
Generally speaking, to get the path to the package file, replace any underscores (_) in the package name
with slashes (/) and add .php to the end.
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Browser Information</title>
    <link rel="stylesheet" type="text/css" href="common.css"/>
</head>
<body>
<h1>Browser Information</h1>
<?php
require_once("Net/UserAgent/Detect.php");
$detect = new Net_UserAgent_Detect();
echo "<p>You are running " . $detect->getBrowserString();
echo ". Your operating system is " . $detect->getOSString() . ".</p>";
?>
</body>
</html>
