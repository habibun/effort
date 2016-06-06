<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/16/16
 * Time: 12:08 AM
 */

/**
 * self keyword not override parent method
 */
class Cat {
    public static function run() {
        echo 'Cat runs';
    }
    public static function tester() {
        self::run();
    }
}
class Leopard extends Cat {
    public static function run() {
        echo 'Leopard runs faster than cat';
    }
}
Leopard::tester();


/**
 * another example using self keyword
 */
class User {
    static protected $r = 'normal user';
    public static function tester() {
        echo self::$r;
    }
}
class Agent extends User {
    static protected $r = 'This is agent';
}
Agent::tester();

/**
 * In php 5.3.0 implements a feature Late Static Bindings
 * to solve this above overriding problem
 */
class User2 {
    static protected $r = 'normal user';
    public static function tester() {
        echo static::$r;
    }
}
class Agent2 extends User2 {
    static protected $r = 'This is agent';
}
Agent2::tester();