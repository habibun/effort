<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/11/15
 * Time: 8:00 PM
 */
//create a parent class and child classes
class Shape2
{
    private $_color = 'black';
    private $_filled = false;

    public function getColor()
    {
        return $this->_color;
    }

    public function setColor($color)
    {
        $this->_color = $color;
    }

    public function isFilled()
    {
        return $this->_filled;
    }

    public function fill()
    {
        $this->_filled = true;
    }

    public function makeHollow()
    {
        $this->_filled = false;
    }
}

class Circle2 extends Shape2
{
    private $_radious = 0;

    public function getRadius()
    {
        return $this->_radious;
    }

    public function setRadius($radius)
    {
        $this->_radious = $radius;
    }

    public function getArea()
    {
        return M_PI * pow($this->_radious, 2);
    }
}

class Square2 extends Shape2
{
    private $_sideLength = 0;

    public function getSideLength()
    {
        return $this->_sideLength;
    }

    public function setSideLength($length)
    {
        $this->_sideLength = $length;
    }

    public function getArea()
    {
        return pow($this->_sideLength, 2);
    }
}

$circleObj = new Circle2();
$circleObj->setColor('red');
$circleObj->fill();
$circleObj->setRadius(4);
echo "<h2>Circle</h2>";
echo "My circle has a radius of " . $circleObj->getRadius();
echo "It is " . $circleObj->getColor() . "and it is " . $circleObj->isFilled() ? "filled" : "hollow";
echo "The area of my circle is: " . $circleObj->getArea();

$squareObj = new Square2();
$squareObj->setColor('green');
$squareObj->makeHollow();
$squareObj->setSideLength(3);
echo "<h2>Square</h2>";
echo "My square has a side length of" . $squareObj->getSideLength();
echo "It is " . $squareObj->getColor() . "and it is " . $squareObj->isFilled() ? "filled" : "hollow";
echo "The area of square is " . $squareObj->getArea();
