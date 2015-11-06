<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>1 to 100 in Roman numerals</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>

    <h1>1 to 100 in Roman numerals</h1>
    <p>
<?php

require_once( "Numbers/Roman.php" );

for ( $i=1; $i<=100; $i++ ) {
  echo Numbers_Roman::toNumeral( $i, true, true ) . "<br />";
}
?>
    </p>

  </body>
</html>
