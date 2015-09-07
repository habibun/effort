<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Homing Pigeons Simulator</title>
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

// Position the home and the pigeons

do {
  $homeX = rand ( 0, $mapSize-1 );
  $homeY = rand ( 0, $mapSize-1 );
  $pigeon1X = rand ( 0, $mapSize-1 );
  $pigeon1Y = rand ( 0, $mapSize-1 );
  $pigeon2X = rand ( 0, $mapSize-1 );
  $pigeon2Y = rand ( 0, $mapSize-1 );
} while ( ( ( abs( $homeX - $pigeon1X ) < $mapSize/2 ) && ( abs( $homeY - $pigeon1Y ) < $mapSize/2 ) ) || ( ( abs( $homeX - $pigeon2X ) < $mapSize/2 ) && ( abs( $homeY - $pigeon2Y ) < $mapSize/2 ) )  );

do {

  // Move the pigeons closer to home

  if ( $pigeon1X < $homeX )
    $pigeon1X++;
  elseif ( $pigeon1X > $homeX )
    $pigeon1X--;
  if ( $pigeon1Y < $homeY )
    $pigeon1Y++;
  elseif ( $pigeon1Y > $homeY )
    $pigeon1Y--;

  if ( $pigeon2X < $homeX )
    $pigeon2X++;
  elseif ( $pigeon2X > $homeX )
    $pigeon2X--;
  if ( $pigeon2Y < $homeY )
    $pigeon2Y++;
  elseif ( $pigeon2Y > $homeY )
    $pigeon2Y--;


  // Display the current map

  echo '<div class="map" style="width: ' . $mapSize . 'em;"><pre>';

  for ( $y = 0; $y < $mapSize; $y++ ) {

    for ( $x = 0; $x < $mapSize; $x++ ) {

      if ( $x == $homeX && $y == $homeY ) {
        echo '<span class="home">+</span>'; // Home
      } elseif ( ( $x == $pigeon1X && $y == $pigeon1Y ) || ( $x == $pigeon2X && $y == $pigeon2Y ) )  {
        echo '<span class="pigeon">%</span>'; // Pigeon
      } else {
        echo '<span class="empty">.</span>'; // Empty square
      }

      echo ( $x != $mapSize - 1 ) ? " " : "";
    }

    echo "\n";
  }

  echo "</pre></div>\n";

} while ( $pigeon1X != $homeX || $pigeon1Y != $homeY || $pigeon2X != $homeX || $pigeon2Y != $homeY );

?>

  </body>
</html>
