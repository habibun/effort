<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/25/15
 * Time: 11:00 PM
 */

/**
 * reversing a string by byte
 */
print strrev('this is not a palindrome.');

/**
 * reversing a string by word
 */
$s = 'Once upon a time there was a turtle.';

//break the string up into words
$words = explode(' ',$s);

//reverse the array of words
$words = array_reverse($words);

//rebuild the string
$s = implode(' ',$words);
print $s;

/**
 * Concisely reversing a string by word
 */
$reversed_s = implode(' ',array_reverse(explode(' ',$s)));