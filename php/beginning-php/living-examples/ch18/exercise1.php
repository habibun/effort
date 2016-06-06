<?php
$url = "http://www.example.com/hello/there.html";
preg_match( "|(http(s)?\://)?(www.)?([a-zA-Z0-9\-\.]+)|", $url, $matches );
echo "Domain name: " . $matches[4]; // Displays "Domain name: example.com"
?>
