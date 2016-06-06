<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/12/15
 * Time: 8:02 PM
 */

/**
 * 1.
Write a script that counts from 1 to 10 in steps of 1. For each number, display whether that
number is an odd or even number, and also display a message if the number is a prime number.
Display this information within an HTML table.
 */

for($i = 1; $i <= 10; $i++){
    $evenOdd = ($i % 2 == 0)? "even" : "odd";
    switch($i){
        case 2:
        case 3:
        case 5:
        case 7:
            $prime = "prime";
            break;
        default:
            $prime = null;
            break;
    }

    echo $i. "-" .$evenOdd;
    if ( !is_null($prime) ) {
        echo '+'.$prime;
    }
    echo "\n";
}

/**
 * 2.
Modify the homing pigeon simulator to simulate two different pigeons on the same map, both
flying to the same home point. The simulation ends when both pigeons have arrived home.
 */