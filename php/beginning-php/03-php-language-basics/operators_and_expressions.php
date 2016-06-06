<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/8/15
 * Time: 7:49 PM
 */

//Operator in php can be grouped into ten types, as follow
/**
 * Operator type:
 *
 * 1.Arithmetic
 * 2.Assignment
 * 3.Bitwise
 * 4.Comparison
 * 5.Error Control
 * 6.Execution
 * 7.Incrementing / Decrementing
 * 8.Logical
 * 9.String
 * 10.Array
 */

/**
 * Arithmetic operator:
 *
 * 1.Addition(+)
 * 2.Subtraction(-)
 * 3.Multiplication(*)
 * 4.Division(/)
 * 5.Modulus(%)
 */

/**
 * Assignment operator
 */
$test_var = 23;
$first_number = 1;
$second_number = 2;

$first_number += $second_number;
//rather than:
$first_number = $first_number + $second_number;

/**
 * Bitwise operator
 */

/**
 * Comparison operator
 *  equal(==)
 *  not equal(!=)
 *  identical(===)
 *  not identical(!==)
 *  less than(<)
 *  greater than(>)
 *  less than equal(<=)
 *  greater than equal(=>)
 */
$x = 23;
echo ($x < 24) . "<br />";
//Displays 1 (true)
echo ($x < "24") . "<br />";
//Displays 1 (true) because
//PHP converts the string to an integer
echo ($x == 23) . "<br />";
//Displays 1 (true)
echo ($x === 23) . "<br />";
//Displays 1 (true)
echo ($x === "23") . "<br />";
//Displays "" (false) because
// are not the same data type $x and "23"
echo ($x >= 23) . "<br />";
 //Displays 1 (true)
echo ($x >= 24) . "<br />";
 //Displays "" (false)

/**
 * Incrementing / Decrementing operator:
 */
++$x;   //Adds one to $x and then returns the result
$x++;   //Returns $x and then adds one to it
--$x;   //Subtracts one from $x and then returns the result
$x--;   //Returns $x and then subtracts one from it

$x = 5;
echo ++$x;  // Displays "6" (and $x now contains 6)

$x = 5;
echo $x++;  // Displays "5" (and $x now contains 6)

/**
 * Logical operator:
 * and(&&)
 * and
 * or(||)
 * or
 * xor
 * not(!)
 */
$x = 2;
$y = 3;
echo ( ($x > 1) && ($x < 5) ) . "<br />";   // Displays 1 (true)
echo ( ($x == 2) or ($y == 0) ) . "<br />"; // Displays 1 (true)
echo ( ($x == 2) xor ($y == 3) ) . "<br />"; // Displays "" (false) because both
// expressions are true
echo ( !($x == 5 ) ) . "<br />";    // Displays 1 (true) because
// $x does not equal 5

/**
 * String operator:
 */
echo "Shaken, " . "not stirred";    // Displays "Shaken, not stirred"

$x = $x . $y;
$x .= $y;

/**
 * Understanding Operator Precedence
 */
3 + 4 * 5;
( 3 + 4 ) * 5;

$x = false || true; // $x is true
$x = false or true; // $x is false