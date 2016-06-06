<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Number of weekdays in a month</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>

    <h1>Number of weekdays in a month</h1>
<?php

function weekdaysInMonth( $year, $month ) {
  $date = mktime( 0, 0, 0, $month, 1, $year );
  $daysInMonth = idate( "t", $date );
  $weekdays = 0;

  for ( $d = 1; $d <= $daysInMonth; $d++ ) {
    $date = mktime( 0, 0, 0, $month, $d, $year );
    $dayOfWeek = idate( "w", $date );
    if ( $dayOfWeek !=0 && $dayOfWeek != 6 ) $weekdays++;
  }

  return $weekdays;
}

$weekdays = weekdaysInMonth( 1997, 3 );
echo "<p>March 1997 contained $weekdays weekdays.</p>";
?>
  </body>
</html>
