<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/6/15
 * Time: 8:35 PM
 */

/**
 * Declaring Properties
 */
//By the way, you can also initialize properties at the time that you declare them, much like you can with variables:
class MyClass
{
    public $widgetsSold = 123;
}

/**
 * Accessing Properties
 */
//Defining and Using Object Properties
class Car2
{
    public $color;
    public $manufacturer;
}

$beetle = new Car2();
$beetle->color = "red";
$beetle->manufacturer = "Volkswagen";

$mustang = new Car2();
$mustang->color = "green";
$mustang->manufacturer = "Ford";

//echo "The bettle color is $beetle->color\n";
//echo "mustang manufacture is $mustang->manufacturer\n";

//print_r($beetle);
//print_r($mustang);

/**
 * Static Properties
 */
class CarWithStatic
{
    public $color;
    public $manufacturer;
    static public $numberSold = 123;
}

carWithStatic::$numberSold++;
//echo carWithStatic::$numberSold = 120;

/**
 * Class Constants
 */
class CarWithConstant
{
    const HATCHBACK = 1;
    const STATION_WAGON = 2;
    const SUV = 3;

    public $model;
    public $color;
    public $manufacturer;
    public $type;
}

$myCarWithConstant = new CarWithConstant();
$myCarWithConstant->model = "Dodge Caliber";
$myCarWithConstant->color = "blue";
$myCarWithConstant->manufacturer = "Chrysler";
$myCarWithConstant->type = CarWithConstant::HATCHBACK;

echo "This my car model is a ";

switch ($myCarWithConstant->type) {
    case $myCarWithConstant::HATCHBACK:
        echo "hatchback";
        break;
    case $myCarWithConstant::STATION_WAGON:
        echo "station wagon";
        break;
    case $myCarWithConstant::SUV:
        echo "SUV";
        break;
}