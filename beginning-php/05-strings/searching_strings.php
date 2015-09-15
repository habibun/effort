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
echo (strstr($myString, 'xyz')? 'Yes' : 'No');  //Displays 'No'

/*
If you pass in a value of true, strstr() instead returns the portion
from the start of the string to the character before the found text:
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
if ( !strpos( $myString, "Hel" ) )
    echo "Not found";

//The following code works correctly:
$myString = "Hello, world!";
if ( strpos( $myString, "Hel" ) === false )
    echo "Not found";

/*
strpos() can take an optional third argument: an index position within the string to start the search.
 */
$myString = "Hello, world!";
echo strpos( $myString, "o" ) . "<br/>"; // Displays ‘4’
echo strpos( $myString, "o", 5 ) . "<br/>"; // Displays ‘8’

// to repeatedly find all occurrences of the search text within the string — for example:
$myString = "Hello, world!";
$pos = 0;

while( ($pos = strpos($myString,'l',$pos)) !== false){
    echo "The letter l was found at position: $pos<br />";
    $pos++;
}

/**
 * strrpos find the last match in the string, rather than the first.
 */
$myString = "Hello, world!";
echo strpos( $myString, "o" ) . "<br />"; // Displays ‘4’
echo strrpos( $myString, "o" ) . "<br />"; // Displays ‘8’

/**
 * Finding the Number of Occurrences with substr_count()
 */
$myString = "I say, nay, nay, and thrice nay!";
echo substr_count($myString, 'nay');    //Displays 3

/*
You can also pass an optional third argument to specify the index position to start searching, and an
optional fourth argument to indicate how many characters the function should search before giving up.
Here are some examples that use these third and fourth arguments:
*/
$myString = "I say, nay, nay, and thrice nay!";
echo substr_count( $myString, "nay", 9 ) . "<br />";    // Displays ‘2’
echo substr_count( $myString, "nay", 9, 6 ) . "<br />";     // Displays ‘1’

/**
 * Searching for a Set of Characters with strpbrk()
 */
$myString = "Hello, world!";
echo strpbrk( $myString, "abcdef" ); // Displays ‘ello, world!’
echo strpbrk( $myString, "xyz" ); // Displays ‘’ (false)

$username = "matt@example.com";
if ( strpbrk( $username, "@!" ) )
    echo "@ and ! are not allowed in usernames";
