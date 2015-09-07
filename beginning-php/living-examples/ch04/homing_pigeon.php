<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Homing Pigeon Simulator</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
    <style type="text/css">
      div.map { float: left; text-align: center; border: 1px solid #666; background-color: #fcfcfc; margin: 5px; padding: 1em; }
      span.home, span.pigeon { font-weight: bold; }
      span.empty { color: #666; }
    </style>
  </head>
  <body>

<?php

$mapSize = 10;

// Position the home and the pigeon

do {
  $homeX = rand ( 0, $mapSize-1 );
  $homeY = rand ( 0, $mapSize-1 );
  $pigeonX = rand ( 0, $mapSize-1 );
  $pigeonY = rand ( 0, $mapSize-1 );
} while ( ( abs( $homeX - $pigeonX ) < $mapSize/2 ) && ( abs( $homeY - $pigeonY ) < $mapSize/2 ) );

do {

  // Move the pigeon closer to home

  if ( $pigeonX < $homeX )
    $pigeonX++;
  elseif ( $pigeonX > $homeX )
    $pigeonX--;

  if ( $pigeonY < $homeY )
    $pigeonY++;
  elseif ( $pigeonY > $homeY )
    $pigeonY--;

  // Display the current map

  echo '<div class="map" style="width: ' . $mapSize . 'em;"><pre>';

  for ( $y = 0; $y < $mapSize; $y++ ) {

    for ( $x = 0; $x < $mapSize; $x++ ) {

      if ( $x == $homeX && $y == $homeY ) {
        echo '<span class="home">+</span>'; // Home
      } elseif ( $x == $pigeonX && $y == $pigeonY ) {
        echo '<span class="pigeon">%</span>'; // Pigeon
      } else {
        echo '<span class="empty">.</span>'; // Empty square
      }

      echo ( $x != $mapSize - 1 ) ? " " : "";
    }

    echo "\n";
  }

  echo "</pre></div>\n";

} while ( $pigeonX != $homeX || $pigeonY != $homeY );

?>

  </body>
</html>
