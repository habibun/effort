<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Stepping Through an Array</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Stepping Through an Array</h1>

<?php

$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );

echo "<p>The array: " . print_r( $authors, true ) . "</p>";

echo "<p>The current element is: " . current( $authors ) . ".</p>";
echo "<p>The next element is: " . next( $authors ) . ".</p>";
echo "<p>...and its index is: " . key( $authors ) . ".</p>";
echo "<p>The next element is: " . next( $authors ) . ".</p>";
echo "<p>The previous element is: " . prev( $authors ) . ".</p>";
echo "<p>The first element is: " . reset( $authors ) . ".</p>";
echo "<p>The last element is: " . end( $authors ) . ".</p>";
echo "<p>The previous element is: " . prev( $authors ) . ".</p>";

?>

  </body>
</html>
