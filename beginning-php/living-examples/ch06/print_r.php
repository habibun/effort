<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Outputting Arrays with print_r()</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Outputting Arrays with print_r()</h1>

<?php

$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );

$myBook = array( "title" => "The Grapes of Wrath",
                 "author" => "John Steinbeck",
                 "pubYear" => 1939 );

echo '<h2>$authors:</h2><pre>';
print_r ( $authors );
echo '</pre><h2>$myBook:</h2><pre>';
print_r ( $myBook );
echo "</pre>";

?>

  </body>
</html>
