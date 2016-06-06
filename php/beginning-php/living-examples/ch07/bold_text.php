<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Normal and bold text</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Normal and bold text</h1>

<?php

function makeBold( $text ) {
 return "<b>$text</b>";
}

$normalText = "This is normal text.";
$boldText = makeBold( "This is bold text." );
echo "<p>$normalText</p>";
echo "<p>$boldText</p>";

?>

  </body>
</html>
