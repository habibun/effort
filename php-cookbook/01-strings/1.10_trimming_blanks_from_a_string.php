<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/27/15
 * Time: 9:05 PM
 */

//trim() from both the beginning and end of a string
$zipcode = trim($_GET['zipcode']);

//rtrim() from the end of a string
$no_linefeed = rtrim($_GET['text']);

//The ltrim() function removes whitespace from the beginning of a string
$name = ltrim($_GET['name']);

/**
 * The trim() functions can also remove user-specified characters from strings. Pass the
* characters you want to remove as a second argument. You can indicate a range of char‐
* acters with two dots between the first and last characters in the range:
 */
// Remove numerals and space from the beginning of the line
print ltrim('10 PRINT A$',' 0..9');
// Remove semicolon from the end of the line
print rtrim('SELECT * FROM turtles;',';');

?>
