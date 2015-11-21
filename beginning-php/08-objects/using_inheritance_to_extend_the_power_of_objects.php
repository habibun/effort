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
class Fruit2
{

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

class Grape2 extends Fruit2
{

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
class Banana extends Fruit2
{

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
 * Classes and Methods
 */
//lock down class

final class HandsOffThisClass2
{

    public $someProperty = 123;

    public function someMethod()
    {
        echo "A method";
    }
}

/*class childClass2 extends HandsOffThisClass2{

}*/


//lock down method
class ParentClass2
{

    public $someProperty = 123;

    public final function handsOffThisMethod()
    {
        echo "A method";
    }
}

class ChildClass3 extends ParentClass2
{

    /*    public function handsOffThisMethod()
        {
            echo "this is a test";
        }*/
}


/**
 * Using Abstract Classes and Methods
 */
class ShapeInfo2
{

    private $_shape;

    public function setShape($shape)
    {
        $this->_shape = $shape;
    }

    public function showInfo()
    {
        echo "The shape color is " . $this->_shape->getColor();
        echo ", and it's area is " . $this->_shape->getArea() . ".</p>";
    }
}

//Here’s how you might use ShapeInfo to display the color and size of a square:
$squareObj2 = new Square2();
$squareObj2->setColor('green');
$squareObj2->makeHollow();
$squareObj2->setSideLength(3);


$infoObj = new ShapeInfo2();
$infoObj->setShape($squareObj2);

//$infoObj->showInfo();

class Rectangle2 extends Shape2
{

    private $_width = 0;
    private $_height = 0;

    public function getWidth()
    {
        return $this->_width;
    }

    public function setWidth($width)
    {
        $this->_width = $width;
    }

    public function getHeight()
    {
        return $this->_height;
    }

    public function setHeight($height)
    {
        $this->_height = $height;
    }
}

$rectangle2Obj = new Rectangle2();
$rectangle2Obj->setColor('yellow');
$rectangle2Obj->fill();
$rectangle2Obj->setWidth(4);
$rectangle2Obj->setHeight(5);

$info = new ShapeInfo2();
$info->setShape($rectangle2Obj);

//$info->showInfo();

abstract class shape6
{

    private $_color = "black";
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

    abstract public function getArea();
}

class Rectangle6 extends Shape6
{

    private $_width = 0;
    private $_height = 0;

    public function getWidth()
    {
        return $this->_width;
    }

    public function setWidth($width)
    {
        $this->_width = $width;
    }

    public function getHeight()
    {
        return $this->_height;
    }

    public function setHeight($height)
    {
        $this->_height = $height;
    }

    public function getArea()
    {
        return $this->_width * $this->_height;
    }
}

$rectangle6Obj = new Rectangle6();
$rectangle6Obj->setColor('yellow');
$rectangle6Obj->fill();
$rectangle6Obj->setWidth(4);
$rectangle6Obj->setHeight(5);

$info2 = new ShapeInfo2();
$info2->setShape($rectangle6Obj);
//$info2->showInfo();

/**
 * Working with Interfaces
 */
//create and use an interface
interface Sellable2
{

    public function addStock($numItems);

    public function sellItem();

    public function getStockLevel();
}

class Television2 implements Sellable2
{
    private $_screenSize;
    private $_stockLevel;

    public function getScreenSize()
    {
        return $this->_screenSize;
    }

    public function setScreenSize($screenSize)
    {
        $this->_screenSize = $screenSize;
    }

    public function addStock($numItems)
    {
        $this->_stockLevel += $numItems;
    }

    public function sellItem()
    {
        if ($this->_stockLevel > 0) {
            $this->_stockLevel--;
            return true;
        } else {
            return false;
        }
    }

    public function getStockLevel()
    {
        return $this->_stockLevel;
    }
}

class TenisBall2 implements Sellable2
{

    private $_color;
    private $_ballsLeft;

    public function getColor()
    {
        return $this->_color;
    }

    public function setColor($color)
    {
        $this->_color = $color;
    }

    public function addStock($numItems)
    {
        $this->_ballsLeft += $numItems;
    }

    public function sellItem()
    {
        if ($this->_ballsLeft > 0) {
            $this->_ballsLeft--;
            return true;
        } else {
            return false;
        }
    }

    public function getStockLevel()
    {
        return $this->_ballsLeft;
    }
}

class StoreManager2
{

    private $_productList = array();

    public function addProduct(Sellable2 $product)
    {
        $this->_productList[] = $product;
    }

    public function stockUp()
    {
        foreach ($this->_productList as $product) {
            $product->addStock(100);
        }
    }
}

$tv = new Television2();
$tv->setScreenSize(42);

$ball = new TenisBall2();
$ball->setColor('yellow');

$manager = new StoreManager2();
$manager->addProduct($tv);
$manager->addProduct($ball);
$manager->stockUp();

echo "tv stock " . $tv->getStockLevel() . "\n";
echo "tv screen " . $tv->getScreenSize() . "\n";

echo "ball stock " . $ball->getStockLevel() . "\n";
echo "ball color " . $ball->getColor() . "\n";

echo "selling a television....";
$tv->sellItem();

echo "selling two tennis balls...";
$ball->sellItem();
$ball->sellItem();

echo "<p>There are now " . $tv->getStockLevel() . " " . $tv->getScreenSize();
echo "-inch televisions and " . $ball->getStockLevel() . " " .
    $ball->getColor();
echo " tennis balls in stock.</p>";
