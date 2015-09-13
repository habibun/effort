<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/12/15
 * Time: 11:10 PM
 */

/**
 * creating a string variable using single quotation mark
 */
$myString = 'hello';

/**
 * creating a string variable using double quotation mark
 */
$myString = "hello";

/**
 * Here are some examples to make these differences clear:
 */
$myString = 'world';
echo "Hello, $myString!<br/>"; // Displays "Hello, world!"
echo 'Hello, $myString!<br/>'; // Displays "Hello, $myString!"
echo "<pre>Hi\tthere!</pre>"; // Displays "Hi   there!"
echo '<pre>Hi\tthere!</pre>'; // Displays "Hi\tthere!"

/**
 * including more complex expression within strings
 */
$favoriteAnimal = "cat";
echo "My favorite animals are {$favoriteAnimal}s";

/**
 * You can also place the opening curly bracket after the $ symbol, which has the same effect:
 */
echo "My favorite animals are ${favoriteAnimal}s";

/**
 * You can use this curly bracket syntax to insert more complex variable values, such as array element
values and object properties
 */
$myArray["age"] = 34;
echo "My age is {$myArray["age"]}"; // Displays "My age is 34"

/**
 * if you don't want to use curly brackets you can always create the string by concatenating the
values together:
 */
$myArray["age"] = 34;
echo "My age is " . $myArray["age"]; // Displays "My age is 34"

/**
Using Your Own Delimiters
 */
//here is an example of heredoc syntax
$religion = 'Hebrew';

$myString = <<<END_TEXT
"'I am a $religion,' he cries - and then - 'I fear the Lord the God of
Heaven who hath made the sea and the dry land!'"
END_TEXT;
echo "<pre>$myString</pre>";

//Here's the same example using nowdoc syntax instead:
$religion = 'Hebrew';
$myString = <<<'END_TEXT'
"'I am a $religion,' he cries - and then - 'I fear the Lord the God of
Heaven who hath made the sea and the dry land!'"
END_TEXT;
echo "<pre>$myString</pre>";

/**
 * Other way to create string
 */
$myString = $yourString;
$myString = "how " . "are " . "you?";
$myString = ( $x > 100 ) ? "Big number" : "Small number";

/**
 * Finding the length of a string
 */
$myString = "hello";
echo strlen( $myString ) . "<br />"; // Displays 5
echo strlen( "goodbye" ) . "<br />"; // Displays 7

/**
 * Another useful related function is str_word_count(), which returns the number of words in a string.
 */
echo str_word_count( "Hello, world!" ); // Displays 2

/**
 * Accessing Characters within a String
 */
$myString = "Hello, world!";
echo $myString[0] . "<br />"; // Displays 'H'
echo $myString[7] . "<br />"; // Displays 'w'
$myString[12] = '?';
echo $myString . "<br />"; // Displays 'Hello, world?'


/**
 * If you need to extract a sequence of characters from a string, you can use PHP’s substr() function
 */
$myString = "Hello, world!";
echo substr( $myString, 0, 5 ) . "<br/>"; //Displays 'Hello'
echo substr( $myString, 7 ) . "<br/>"; //Displays 'world!'
echo substr( $myString, -1 ) . "<br/>"; //Displays '!'
echo substr( $myString, -5, -1 ) . "<br/>"; //Displays 'orld'
