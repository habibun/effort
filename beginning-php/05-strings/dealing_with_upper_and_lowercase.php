<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/16/15
 * Time: 10:38 PM
 */

/**
 * To convert a string to all lowercase, use strtolower() . This function takes a string to convert, and
returns a converted copy of the string
 */
$myString = "Hello, world!";
echo strtolower( $myString ); // Displays ‘hello, world!’

/**
 * Similarly, you can use strtoupper() to convert a string to all uppercase:
 */
$myString = "Hello, world!";
echo strtoupper( $myString ); // Displays ‘HELLO, WORLD!’

/**
 * ucfirst() makes just the first letter of a string uppercase:
 */
$myString = "hello, world!";
echo ucfirst( $myString ); // Displays ‘Hello, world!’

/**
 * lcfirst() –– introduced in PHP 5.3 — makes the first letter of a string lowercase:
 */
$myString = "Hello, World!";
echo lcfirst( $myString ); // Displays ‘hello, World!’

/**
 * Finally, ucwords() makes the first letter of each word in a string uppercase:
 */
$myString = "hello, world!";
echo ucwords( $myString ); // Displays ‘Hello, World!’

/**
 *  For example, there’s a case-insensitive version of strstr(), called stristr() :
 */
$myString = "Hello, world!";
// Displays "Found"
if ( stristr( $myString, "hello" ) )
echo "Found";
else
echo "Not found";
