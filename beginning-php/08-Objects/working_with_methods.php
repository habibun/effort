<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/7/15
 * Time: 8:54 PM
 */

/**
 * creating a method
 */
class MyClass2
{
    public function aMethod()
    {
        return;
    }
}

/**
 * Calling Methods
 */
class MyClassW
{
    public function a2method()
    {
        echo "Hello world!";
    }
}

$obj2 = new MyClassW();
//$obj2->a2method();

/**
 * Adding Parameters and Returning Values
 */
class MyClass23
{
    public function aMethodWithParam($param1, $param2)
    {
        return true;
    }
}

/**
 * Accessing Object Properties from Methods
 */
class MyClassAc
{
    public $greeting = 'Hello, world!';

    public function hello()
    {
        echo $this->greeting;
    }
}

$myobj = new MyClassAc();
//$myobj->hello();

// you can also use $this to call an object’s method from within another method of the same object:

class MyClassMet
{

    public function getHello()
    {
        return 'Hello, world!';
    }

    public function hello()
    {
        echo $this->getHello();
    }
}

$obje = new MyClassMet();
//$obje->hello();

//car simulator

class Car5
{
    public $color;
    public $manufacturer;
    public $model;
    private $_speed = 0;

    public function accelerate()
    {
        if ($this->_speed >= 100) return false;
        $this->_speed += 10;
        return true;
    }

    public function brake()
    {
        if ($this->_speed <= 0) return false;
        $this->_speed -= 10;
        return true;
    }

    public function getSpeed()
    {
        return $this->_speed;
    }
}

$siCar = new Car5();

//echo "starting my car..............\n";

while ($siCar->accelerate()) {
//    echo "current speed {$siCar->getSpeed()}\n";
}

//echo "top speed! slowing down\n";

while ($siCar->brake()) {
//    echo "current speed {$siCar->getSpeed()}\n";
}


/**
 * Static Methods
 */
class Miles
{
    public static function calcMpg($miles, $gallon)
    {
        return ($miles / $gallon);
    }
}

//echo miles::calcMpg(168,6);

/*
 * If you need to access a static method or property, or a class constant, from within a method of the same
class, you can use the same syntax as you would outside the class:
 */

class Same
{

    const MYCONST = 123;
    public static $staticVar = 456;

    public function myMethod()
    {
        echo "MYCONST = " . Same::MYCONST . ',';
        echo "\$staticVar = " . Same::$staticVar . "<br />";
    }
}

$sameObj = new Same();
//$sameObj->myMethod();

//you can also use the self keyworld (much as you use $this with objects):

class MySelf
{
    public static function calcMpg($miles, $gallons)
    {
        return ($miles / $gallons);
    }

    public static function displayMpg($miles, $gallons)
    {
        echo "This cars MPG is " . self::calcMpg($miles, $gallons);
    }
}

//mySelf::displayMpg(168,6);


/**
 * Using Hints to Check Method Arguments
 */
class Car
{
    public $color;
}

class Garage
{
    public function paint(Car $car, $color)
    {
        $car->color = $color;
    }
}

$carObj = new Car();
$garageObj = new Garage();
$carObj->color = 'blue';
$garageObj->paint($carObj, 'green');
//echo $carObj->color;

$cat = "Lucky";
$garage = new Garage;
//$garage->paint( $cat, "red" ); // Error!

/**
 * Making Your Classes Self-Contained with Encapsulation
 */
class Account
{
    private $_totalBalance = 0;

    public function makeDeposit($amount)
    {
        $this->_totalBalance += $amount;
    }

    public function makeWithdrawal($amount)
    {
        if ($this->_totalBalance > $amount) {
            $this->_totalBalance -= $amount;
        } else {
            die("Insufficient funds<br/>");
        }
    }

    public function getTotalBalance()
    {
        return $this->_totalBalance;
    }

}

$accountObj = new Account();
$accountObj->makeDeposit(500);
//$accountObj->makeWithdrawal(100);
$accountObj->makeWithdrawal(600);
echo $accountObj->getTotalBalance();
