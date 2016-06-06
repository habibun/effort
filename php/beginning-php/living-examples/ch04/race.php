<?php

$startTime = microtime( true );

for ( $num = 1; microtime( true ) < $startTime + 0.0001; $num = $num * 2 ) {
  echo "Current number: $num<br />";
}

echo "Out of time!";

?>
