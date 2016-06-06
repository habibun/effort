<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Hit counter</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>

    <h1>A simple hit counter</h1>

<?php

$counterFile = "./count.dat";

if ( !file_exists( $counterFile ) ) {
  if ( !( $handle = fopen( $counterFile, "w" ) ) ) {
    die( "Cannot create the counter file." );
  } else {
    fwrite( $handle, "0" );
    fclose( $handle );
  }
}

if ( !( $handle = fopen( $counterFile, "r" ) ) ) {
  die( "Cannot read the counter file." );
}

$counter = (int) fread( $handle, 20 );
fclose( $handle );

$counter++;
echo "<p>You're visitor No. $counter.</p>";

if ( !( $handle = fopen( $counterFile, "w" ) ) ){
  die( "Cannot open the counter file for writing." );
}

fwrite( $handle, $counter );
fclose( $handle );

?>

  </body>
</html>
