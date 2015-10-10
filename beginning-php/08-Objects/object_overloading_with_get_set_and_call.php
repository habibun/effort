<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/10/15
 * Time: 9:15 AM
 */

/**
 * Overloading Property Accesses with __get() and __set()
 */
//get method
class Car
{
    public function __get($propertyName)
    {
//        echo "The value of '$propertyName' was requested<br />";
        return "blue";
    }
}

$carObj = new Car();
$x = $carObj->color;
$y = $carObj->mYcolor;

//echo "The car's color is $x<br/>";
//echo "The car's color is $y<br/>";


//set method
class Car10
{
    public function __set($propertyName, $propertyValue)
    {
        //do whatever needs to be done to set the property value
    }
}


//Using __get() and __set()
class Car9
{
    public $manufacturer;
    public $model;
    public $color;
    private $_extraData = array();

    public function __get($propertyName)
    {
        if (array_key_exists($propertyName, $this->_extraData)) {
            return $this->_extraData[$propertyName];
        } else {
            return null;
        }
    }

    public function __set($propertyName, $propertyValue)
    {
        $this->_extraData[$propertyName] = $propertyValue;
    }
}

$car9Obj = new Car9();
$car9Obj->manufacturer = "Volkswagen";
$car9Obj->model = "Beetle";
$car9Obj->color = "red";
$car9Obj->engineSize = 1.8;
$car9Obj->otherColors = array("green", "blue", "purple");

//echo "My car's manufacturer is ". $car9Obj->manufacturer."\n";
//echo "My car's engine size is ". $car9Obj->engineSize."\n";
//echo "My car's fuel type size is ". $car9Obj->fuelType."\n";
//echo "The \$car9Obj Object:" . print_r($car9Obj);


/**
 *Overloading Method Calls with __call()
 */
//create a wrapper string class
class CleaverString
{
    private $_theString = "";
    public static $_allowedFunctions = array("strlen", "strtoupper", "strpos");


    public function setString($stringVal)
    {
        $this->_theString = $stringVal;
    }

    public function getString()
    {
        return $this->_theString;
    }


    public function __call($methodName, $arguments)
    {
        if (in_array($methodName, CleaverString::$_allowedFunctions)) {
            array_unshift($arguments, $this->_theString);
            return call_user_func_array($methodName, $arguments);
        } else {
            die ("<p>Method ‘CleverString::$methodName’ doesn’t exist</p>");
        }
    }

}

$cleaverStringObj = new CleaverString();
$cleaverStringObj->setString("Hello!");
//echo "The string is ". $cleaverStringObj->getString();
//echo "The length of the string is ". $cleaverStringObj->strlen();
//echo "The string in uppercase letter is: " . $cleaverStringObj->strtoupper();
//echo "The letter occurs at position: ". $cleaverStringObj->strpos("e");
//$cleaverStringObj->madeUpMethod();

/**
 * Other Overloading Methods
 */
class Myclass
{

    //isset function
    public function __isset($propertyName)
    {
        //all properties beginning with "test" are "set"
        return (substr($propertyName, 0, 4) == "test") ? true : false;
    }

    //unset function
    public function __unset($propertyName)
    {
        echo "Unsetting property '$propertyName'\n";
    }

    //call static

    public static function __callStatic($methodName, $arguments)
    {
        echo "Static method '$methodName' called with the arguments: ";
        foreach ($arguments as $arg) {
            echo $arg . "\n";
        }
    }
}

//test isset
$testObj = new MyClass();
//echo (isset($testObj->banana)) ?  "true" : "false\n" ;
//echo isset($testObj->testBanana) ? "true" : "false";


//unsetting property
unset($testObj->banana);

//test call static
Myclass::randomModel("apple", "peach", "strawberry");