<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Adding Author Names</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Adding Author Names</h1>

<?php
$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens", "Milton", "Orwell" );

$books = array(
  array(
    "title" => "The Hobbit",
    "authorId" => 2,
    "pubYear" => 1937
  ),
  array(
    "title" => "The Grapes of Wrath",
    "authorId" => 0,
    "pubYear" => 1939
  ),
  array(
    "title" => "A Tale of Two Cities",
    "authorId" => 3,
    "pubYear" => 1859
  ),
  array(
    "title" => "Paradise Lost",
    "authorId" => 4,
    "pubYear" => 1667
  ),
  array(
    "title" => "Animal Farm",
    "authorId" => 5,
    "pubYear" => 1945
  ),
  array(
    "title" => "The Trial",
    "authorId" => 1,
    "pubYear" => 1925
  ),
);

foreach ( $books as &$book ) {
  $book["authorName"] = $authors[$book["authorId"]];
}

echo "<pre>";
print_r( $books );
echo "</pre>";

?>

  </body>
</html>
