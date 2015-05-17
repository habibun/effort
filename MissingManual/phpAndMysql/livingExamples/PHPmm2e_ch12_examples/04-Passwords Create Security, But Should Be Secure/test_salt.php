<?php

$input = "secret_string";
$salt = "salt";
$first_output = crypt($input, $salt);
$second_output = crypt($input, $salt);

echo "First output is {$first_output}\n\n";
echo "Second output is {$second_output}\n\n";

?>
