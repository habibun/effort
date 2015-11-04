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

/**
 * Car simulation example
 *
 * This script demonstrates how to use OOP to create a simple
 * simulation of a car.
 *
 * @author Matt Doyle
 * @version 1.0
 * @package CarSimulator
 */

/**
 * Represents a real-world automobile
 *
 * This class represents an automobile. The automobile can have
 * a specified color, manufacturer, and model. Methods are provided
 * to accelerate and slow down the car, as well as retrieve the
 * car's current speed.
 *
 * @package CarSimulator
 */
class Car {

  /**
  * @var string The car's color
  */
  public $color;

  /**
  * @var string The car's manufacturer
  */
  public $manufacturer;

  /**
  * @var string The model of the car
  */
  public $model;

  /**
  * @var string The current speed of the car
  * @access private
  */
  private $_speed = 0;

  /**
  * Speeds up the car
  *
  * Accelerates the car by 10mph, up to a maximum speed of 100mph.
  *
  * @return boolean True if the car was successfully accelerated; false otherwise
  */
  public function accelerate() {
    if ( $this->_speed >= 100 ) return false;
    $this->_speed += 10;
    return true;
  }

  /**
  * Slows down the car
  *
  * Decelerates the car by 10mph, down to a minimum speed of 0mph.
  *
  * @return boolean True if the car was successfully decelerated; false otherwise
  */
  public function brake() {
    if ( $this->_speed <= 0 ) return false;
    $this->_speed -= 10;
    return true;
  }

  /**
  * Returns the car's speed
  *
  * Returns the current speed of the vehicle, in miles per hour
  *
  * @return int The car's speed in mph
  */
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
