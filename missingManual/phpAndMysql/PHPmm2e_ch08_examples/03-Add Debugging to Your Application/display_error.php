<?php

error_reporting(E_ALL);

echo "Hello, {$first_name}\n\n";
$query = "SELECT * FROM users WHERE first_name = {$first_name}";
echo "{$query}\n\n";

?>
