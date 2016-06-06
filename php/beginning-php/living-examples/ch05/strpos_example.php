<?php

$myString = "Hello, world!";
$pos = 0;
while ( ( $pos = strpos( $myString, "l", $pos ) ) !== false ) {
  echo "The letter 'l' was found at position: $pos<br/>";
  $pos++;
}

?>

