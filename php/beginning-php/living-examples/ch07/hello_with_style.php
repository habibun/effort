<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Saying hello with style</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Saying hello with style</h1>

<?php

function helloWithStyle( $font, $size=1.5 ) {
 echo "<p style=\"font-family: $font; font-size: {$size}em;\">Hello, world!</p>";
}

helloWithStyle( "Helvetica", 2 );
helloWithStyle( "Times", 3 );
helloWithStyle( "Courier" );

?>

  </body>
</html>
