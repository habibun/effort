<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Creating a Minefield</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Creating a Minefield</h1>

<?php

$fieldSize = 20;
$numMines = 10;
$minefield = array();

// Initialize the minefield

for ( $x=0; $x<$fieldSize; $x++ ) {
  $minefield[$x] = array();
  for ( $y=0; $y<$fieldSize; $y++ ) {
    $minefield[$x][$y] = false;
  }
}

// Add the mines

for ( $i=1; $i<=$numMines; $i++ ) {

  do {
    $mineX = rand( 0, 19 );
    $mineY = rand( 0, 19 );
  } while ( $minefield[$mineX][$mineY] );

  $minefield[$mineX][$mineY] = true;
}


// Display the minefield

echo "<pre>";
for ( $y=0; $y<$fieldSize; $y++ ) {
  for ( $x=0; $x<$fieldSize; $x++ ) {
    echo ( $minefield[$x][$y] ) ? "* " : ". ";
  }
  echo "\n";
}
echo "</pre>";

?>

  </body>
</html>
