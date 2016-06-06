<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/16/16
 * Time: 11:34 PM
 */

/**
 * Interface Moveable
 */
interface Moveable {

    public function move();
}


class Man implements Moveable {

    public function move() {
        echo "A man can move<br/>";
    }
}


class Vehicle implements Moveable {

    public function move() {
        echo "A Vehicle also can move";
    }
}

$mans = new Man();
$mans->move();
$machine = new Vehicle();
$machine->move();




/**
 * Multiple interface in one class
 */
interface Moveable2 {

    public function move();
}

interface Test2 {

    public function testMove();
}

class Man2 implements Moveable2, Test2{

    public function move() {
        echo "A man can move<br/>";
    }

    public function testMove() {
        echo "Multiple Interface multiple inheritence<br/>";
    }
}

class Vehicle2 implements Moveable2 {

    public function move() {
        echo "A Vehicle also can move";
    }
}

$mans = new Man2();
$mans->move();
$mans->testMove();
$machine = new Vehicle2();
$machine->move();
