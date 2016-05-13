<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/17/16
 * Time: 12:25 AM
 */

//require_once 'class.WebcoachbdProduct.php';
//require_once 'class.UserLogin.php';

/**
 * class autoloading
 */
function __autoload($class_name){
    require_once 'class.' . $class_name . '.php';
}

/**
 * if class file in another folder
 */
/*function __autoload($class_name){
    require_once 'test/class.' . $class_name . '.php';
}*/

$productObject = new WebcoachbdProduct();
$productObject->getTutorial(' OOP');