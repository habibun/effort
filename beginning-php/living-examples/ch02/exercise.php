<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Hello</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>
<?php 

// Get the current time in a readable format
$currentTime = date( "g:i:s a" );

// Get the current date in a readable format
$currentDate = date( "M j, Y" );

// Display greeting, time and date to the visitor

echo "Hello, world! The current time is $currentTime on $currentDate"; 
?>
    </h1>
  </body>
</html>

