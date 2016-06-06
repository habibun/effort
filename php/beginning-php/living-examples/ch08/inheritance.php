<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Creating Shape Classes using Inheritance</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Creating Shape Classes using Inheritance</h1>

<?php

class Shape {
  private $_color = "black";
  private $_filled = false;

  public function getColor() {
    return $this->_color;
  }

  public function setColor( $color ) {
    $this->_color = $color;
  }

  public function isFilled() {
    return $this->_filled;
  }

  public function fill() {
    $this->_filled = true;
  }

  public function makeHollow() {
    $this->_filled = false;
  }
}

class Circle extends Shape {
  private $_radius = 0;

  public function getRadius() {
    return $this->_radius;
  }

  public function setRadius( $radius ) {
    $this->_radius = $radius;
  }

  public function getArea() {
    return M_PI * pow( $this->_radius, 2 );
  }
}

class Square extends Shape {
  private $_sideLength = 0;

  public function getSideLength() {
    return $this->_sideLength;
  }

  public function setSideLength( $length ) {
    $this->_sideLength = $length;
  }

  public function getArea() {
    return pow( $this->_sideLength, 2 );
  }
}


$myCircle = new Circle;
$myCircle->setColor( "red" );
$myCircle->fill();
$myCircle->setRadius( 4 );
echo "<h2>My Circle</h2>";
echo "<p>My circle has a radius of " . $myCircle->getRadius() . ".</p>";
echo "<p>It is " . $myCircle->getColor() . " and it is " . ( $myCircle->isFilled() ? "filled" : "hollow" ) . ".</p>";
echo "<p>The area of my circle is: " . $myCircle->getArea() . ".</p>";

$mySquare = new Square;
$mySquare->setColor( "green" );
$mySquare->makeHollow();
$mySquare->setSideLength( 3 );
echo "<h2>My Square</h2>";
echo "<p>My square has a side length of " . $mySquare->getSideLength() . ".</p>";
echo "<p>It is " . $mySquare->getColor() . " and it is " . ( $mySquare->isFilled() ? "filled" : "hollow" ) . ".</p>";
echo "<p>The area of my square is: " . $mySquare->getArea() . ".</p>";

?>

  </body>
</html>
