<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Overriding Methods in the Parent Class</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Overriding Methods in the Parent Class</h1>

<?php

class Fruit {
  public function peel() {
    echo "<p>I'm peeling the fruit...</p>";
  }

  public function slice() {
    echo "<p>I'm slicing the fruit...</p>";
  }

  public function eat() {
    echo "<p>I'm eating the fruit. Yummy!</p>";
  }

  public function consume() {
    $this->peel();
    $this->slice();
    $this->eat();
  }
}

class Grape extends Fruit {
  public function peel() {
    echo "<p>No need to peel a grape!</p>";
  }

  public function slice() {
    echo "<p>No need to slice a grape!</p>";
  }
}

echo "<h2>Consuming an apple...</h2>";
$apple = new Fruit;
$apple->consume();

echo "<h2>Consuming a grape...</h2>";
$grape = new Grape;
$grape->consume();

?>

  </body>
</html>
