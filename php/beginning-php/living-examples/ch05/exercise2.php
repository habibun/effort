<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Emulating str_pad()</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Emulating str_pad()</h1>

<?php

$myString = "Hello, world!";
$desiredLength = 20;

echo "<pre>Original string: '$myString'</pre>";

while ( strlen( $myString ) < 20 ) {
  $myString .= " ";
}

echo "<pre>Padded string:   '$myString'</pre>";
?>

  </body>
</html>
