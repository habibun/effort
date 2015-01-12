<?php
//Strip whitespace (or other characters) from the beginning and end of a string
$str = " Hello World! ";
echo "Without trim: " . $str;
echo "<br>";
echo "With trim: " . trim($str);
?>