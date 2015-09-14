<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/14/15
 * Time: 8:56 PM
 */

/**
 * Searching Strings with strstr()
 */
$myString = "Hello, world!";
echo strstr($myString,'wor'). '<br />'; // Displays ‘world!’
echo (strstr($myString, 'xyz')? 'Yes' : 'No');

/**
 * If you
pass in a value of true, strstr() instead returns the portion from the start of the string to the character
before the found text:
 */
$myString = "Hello, world!";
echo strstr( $myString, "wor", true ); // Displays ‘Hello, ‘

/**
 * Locating text with strpos() and strrpos()
 */
$myString = "Hello, world!";
echo strpos( $myString, "wor" ); // Displays ‘7’
echo strpos( $myString, "xyz" ); // Displays ‘’ (false)

//the following code will incorrectly display not found
$myString = "Hello, world!";
if ( !strpos( $myString, "Hel" ) ) echo "Not found";

//The following code works correctly:
$myString = "Hello, world!";
if ( strpos( $myString, "Hel" ) === false ) echo "Not found";

/**
 * strpos() can take an optional third argument: an index position within the string to start the search.
Here’s an example:
 */
$myString = "Hello, world!";
echo strpos( $myString, "o" ) . "<br/>";
 // Displays ‘4’
echo strpos( $myString, "o", 5 ) . "<br/>"; // Displays ‘8’

/**
 * to repeatedly find all occurrences of the search text within the string — for example:
 */
$myString = "Hello, world!";
$pos = 0;

while( ($pos = strpos($myString,'l',$pos)) !== false){
    echo "The letter l was found at position: $pos<br />";
    $pos++;
}