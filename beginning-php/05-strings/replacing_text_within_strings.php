<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/15/15
 * Time: 10:46 PM
 */

/**my
 * Replacing All Occurrences using str_replace()
 */
$myString = "It was the best of times, it was the worst of times,";

echo str_replace('times','bananas', $myString);
// Displays "It was the best of bananas, it was the worst of bananas,"


/*
 If you want to know how many times the search string was replaced, pass in a variable as an optional
fourth argument. After the function runs, this variable holds the number of replacements:
 */
$myString = "It was the best of times, it was the worst of times,";

// Displays "It was the best of bananas, it was the worst of bananas,"
echo str_replace( "times", "bananas", $myString, $num ) . "<br/>";

// Displays "The text was replaced 2 times."
echo "The text was replaced $num times.<br/>";


/**
 * Replacing a Portion of a String with substr_replace()
 */
$myString = "It was the best of times, it was the worst of times,";
// Displays "It was the bananas"
echo substr_replace( $myString, "bananas", 11 ) . "<br/>";

/*
If you don’t want to replace all the text from the start point to the end of the string, you can specify an
optional fourth argument containing the number of characters to replace:
 */
$myString = "It was the best of times, it was the worst of times,";
// Displays "It was the best of bananas, it was the worst of times,"
echo substr_replace( $myString, "bananas", 19, 5 ) . "<br/>";

//Pass a negative fourth argument to replace up to that many characters from the end of the string:
$myString = "It was the best of times, it was the worst of times,";
// Displays "It was the best of bananas the worst of times,"
echo substr_replace( $myString, "bananas", 19, -20 ) . "<br/>";

//You can also pass a zero value to insert the replacement text into the string rather than replacing characters:
$myString = "It was the best of times, it was the worst of times,";
// Displays "It really was the best of times, it was the worst of times,"
echo substr_replace( $myString, "really ", 3, 0 ) . "<br/>";

/**
 * Translating Characters with strtr()
 */
$myString = "Here’s a little string";
// Displays "Here-s+a+little+string"
echo strtr( $myString, " ‘", "+-" ) . "<br/>";
