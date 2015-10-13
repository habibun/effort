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
//echo "<h2>Circle</h2>";
//echo "My circle has a radius of " . $circleObj->getRadius();
//echo "It is " . $circleObj->getColor() . "and it is " . $circleObj->isFilled() ? "filled" : "hollow";
//echo "The area of my circle is: " . $circleObj->getArea();

$squareObj = new Square2();
$squareObj->setColor('green');
$squareObj->makeHollow();
$squareObj->setSideLength(3);
//echo "<h2>Square</h2>";
//echo "My square has a side length of" . $squareObj->getSideLength();
//echo "It is " . $squareObj->getColor() . "and it is " . $squareObj->isFilled() ? "filled" : "hollow";
//echo "The area of square is " . $squareObj->getArea();

/**
 * Overriding method in the parent class
 */

class Fruit2{

    public function peel()
    {
        echo "<p>I'm peeling the fruit...</p>";
    }

    public function slice()
    {
        echo "<p>I'm slicing the fruit...</p>";
    }

    public function eat()
    {
        echo "<p>I'm eating the fruit. Yummy!</p>";
    }

    public function consume()
    {
        $this->peel();
        $this->slice();
        $this->eat();
    }
}

class Grape2 extends Fruit2{

    public function peel()
    {
        echo "No need to peel a grape!";
    }

    public function slice()
    {
        echo "No need to slice a grape!";
    }
}

//echo "Consuming an apple...";
//$apple = new Fruit2();
//$apple->consume();

//echo "Consuming an grape...";
//$grape = new Grape2();
//$grape->consume();

/**
 * Preserving the Functionality of the Parent Class
 */

class Banana extends Fruit2{

    public function consume()
    {
        echo "<p>I'm breaking off a banana...</p>";
        parent::consume();
    }
}

//$banana = new Banana();
//$banana->consume();

/**
 * Blocking Inheritance and Overrides with Final
Classes and Methods
 */

//lock down class

final class HandsOffThisClass2{

    public $someProperty = 123;

    public function someMethod()
    {
        echo "A method";
    }
}

/*class childClass2 extends HandsOffThisClass2{

}*/


//lock down method
class ParentClass2 {

    public $someProperty = 123;

    public final function handsOffThisMethod()
    {
        echo "A method";
    }
}

class ChildClass3 extends ParentClass2{

/*    public function handsOffThisMethod()
    {
        echo "this is a test";
    }*/
}


/**
 * Using Abstract Classes and Methods
 */