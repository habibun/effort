<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>A Simple Car Simulator</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>A Simple Car Simulator</h1>

<?php

class Car {
  public $color;
  public $manufacturer;
  public $model;
  private $_speed = 0;

  public function accelerate() {
    if ( $this->_speed >= 100 ) return false;
    $this->_speed += 10;
    return true;
  }

  public function brake() {
    if ( $this->_speed <= 0 ) return false;
    $this->_speed -= 10;
    return true;
  }

  public function getSpeed() {
    return $this->_speed;
  }

}

$myCar = new Car();
$myCar->color = "red";
$myCar->manufacturer = "Volkswagen";
$myCar->model = "Beetle";

echo "<p>I'm driving a $myCar->color $myCar->manufacturer $myCar->model.</p>";

echo "<p>Stepping on the gas...<br />";

while ( $myCar->accelerate() ) {
  echo "Current speed: " . $myCar->getSpeed() . " mph<br />";
}

echo "</p><p>Top speed! Slowing down...<br />";

while ( $myCar->brake() ) {
  echo "Current speed: " . $myCar->getSpeed() . " mph<br />";
}

echo "</p><p>Stopped!</p>";

?>

  </body>
</html>
