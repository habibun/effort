<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Timing script execution</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>

    <h1>Timing script execution</h1>
<?php

// Start timing
$startTime = microtime( true );

// Perform the operation
for ( $i=0; $i<10; $i++ ) {
  echo "<p>Hello, world!</p>";
}

// Stop timing
$endTime = microtime( true );
$elapsedTime = $endTime - $startTime;
printf( "<p>The operation took %0.6f seconds to execute.</p>", $elapsedTime );

?>
  </body>
</html>
