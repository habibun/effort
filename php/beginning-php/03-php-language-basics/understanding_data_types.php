<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/7/15
 * Time: 9:44 PM
 */

//data type
//scalar = string,integer,float,boolean
//compound = array,object
//special = resource,null

//testing the type of a variable
/*$test_var; // Declares the $test_var variable without initializing it
echo gettype( $test_var ) . "<br />"; // Displays "NULL"
$test_var = 15;
echo gettype( $test_var ) . "<br />"; // Displays "integer"
$test_var = 8.23;
echo gettype( $test_var ) . "<br />"; // Displays "double"
$test_var = "Hello, world!";
echo gettype( $test_var ) . "<br />"; // Displays "string"*/


//You can also test a variable for a specific data type using PHP’s type testing functions:
/**
Function:
is_int( value )
is_float( value )
is_string( value )
is_bool( value )
is_array( value )
is_object( value )
is_resource( value )
is_null( value )
 *
 *
Description:
Returns true if value is an integer
Returns true if value is a float
Returns true if value is a string
Returns true if value is a Boolean
Returns true if value is an array
Returns true if value is an object
Returns true if value is a resource
Returns true if value is null

 */

/**
 * Here’s some example code that converts a variable to various different types using settype():
 */
$test_var = 8.23;
echo $test_var . "<br />";
settype( $test_var, "string" );
echo $test_var . "<br />";
settype( $test_var, "integer" );
echo $test_var . "<br />";
settype( $test_var, "float" );
echo $test_var . "<br />";
settype( $test_var, "boolean" );
echo $test_var . "<br />";
// Displays "8.23"
// Displays "8.23"
// Displays "8"
// Displays "8"
// Displays "1"

/**
 * Changing Type by Casting
 */
$test_var = 8.23;
echo $test_var . "<br />";
echo (string) $test_var . "<br />";
echo (int) $test_var . "<br />";
echo (float) $test_var . "<br />";
echo (boolean) $test_var . "<br />";
//Displays "8.23"
//Displays "8.23"
//Displays "8"
//Displays "8.23"
//Displays "1"

/**
 * You can also cast a value to an integer, floating-point, or string value using three PHP functions:
Function:
intval( value )
floatval( value )
strval( value )

Description:
Returns value cast to an integer
Returns value cast to a float
Returns value cast to a string

 */
