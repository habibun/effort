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
class MyClass2{
    public function aMethod(){
        return;
    }
}

/**
 * Calling Methods
 */
class MyClassW{
    public function a2method(){
        echo "Hello world!";
    }
}

$obj2 = new MyClassW();
//$obj2->a2method();

/**
 * Adding Parameters and Returning Values
 */
class MyClass23{
    public function aMethodWithParam($param1, $param2){
        return true;
    }
}

/**
 * Accessing Object Properties from Methods
 */
class MyClassAc{
    public $greeting = 'Hello, world!';

    public function hello(){
        echo $this->greeting;
    }
}

$myobj = new MyClassAc();
//$myobj->hello();

// you can also use $this to call an object’s method from within another method of the same object:

class MyClassMet{

    public function getHello(){
        return 'Hello, world!';
    }

    public function hello()
    {
        echo $this->getHello();
    }
}

$obje = new MyClassMet();
$obje->hello();
