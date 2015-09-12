<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Sorting by author, pubYear title</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Sorting by author, pubYear, title</h1>

<?php

$myBooks = array(
  array(
    "author" => "John Steinbeck",
    "pubYear" => 1939,
    "title" => "The Grapes of Wrath"
  ),
  array(
    "author" => "John Steinbeck",
    "pubYear" => 1962,
    "title" => "Travels With Charley"
  ),
  array(
    "author" => "Franz Kafka",
    "pubYear" => 1925,
    "title" => "The Trial"
  ),
  array(
    "author" => "J. R. R. Tolkien",
    "pubYear" => 1937,
    "title" => "The Hobbit"
  ),
  array(
    "author" => "Charles Dickens",
    "pubYear" => 1859,
    "title" => "A Tale of Two Cities"
  ),
);

array_multisort( $myBooks );
echo "<pre>";
print_r( $myBooks );
echo "</pre>";

  ?>

  </body>
</html>
