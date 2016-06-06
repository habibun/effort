<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/17/15
 * Time: 12:29 PM
 */

/**
 * to find out the class of an object, you can use php built in function get_class() function
 */
class MyClass7
{

}

$myClassObj = new MyClass7();
echo get_class($myClassObj);

/**
 * however, often it's more useful to know if an object is descended from a given class
 */
class Fruit4
{

}

class SoftFruit2 extends Fruit4
{

}

class HardFruit2 extends Fruit4
{

}

function eatSomeFruit2(array $fruitToEat)
{
    foreach ($fruitToEat as $itemOfFruit) {
        if (get_class($itemOfFruit) == "SoftFruit2" || get_class($itemOfFruit) == "HardFruit2") {
            echo "Eating the fruit - yummy!";
        }
    }
}

$banana = new SoftFruit2();
$apple = new HardFruit2();
//eatSomeFruit2(array($banana,$apple));

/**
 * so you can rewrite the preceding eatSomePoint() function in more elegant fashion
 */

function eatSomeFruit3(array $fruitToEat)
{
    foreach ($fruitToEat as $itemOfFruit) {
        if ($itemOfFruit instanceof Fruit4) {
            echo "Eating the fruit - yummy!";
        }
    }
}

$banana = new SoftFruit2();
$apple = new HardFruit2();
eatSomeFruit2(array($banana, $apple));