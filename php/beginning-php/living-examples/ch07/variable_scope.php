<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Understanding variable scope</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Understanding variable scope</h1>

<?php

function helloWithVariables() {
  $hello = "Hello, ";
  $world = "world!";
  return $hello . $world;
}

echo helloWithVariables() . "<br/>";
echo "The value of \$hello is: '$hello'<br/>";
echo "The value of \$world is: '$world'<br/>";

?>

  </body>
</html>
