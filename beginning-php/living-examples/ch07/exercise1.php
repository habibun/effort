<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>A function to create a definition list</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>

    <h2>A function to create a definition list</h2>

<?php

$iterations = 10;

function defList( $contents ) {
  $markup = "<dl>\n";

  foreach ( $contents as $key => $value ) {
    $markup .= "  <dt>$key</dt><dd>$value</dd>\n";
  }

  $markup .= "</dl>\n";
  return $markup;
}

$myBook = array( "title" => "The Grapes of Wrath",
                 "author" => "John Steinbeck",
                 "pubYear" => 1939 );

echo defList( $myBook );

?>

  </body>
</html>
