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
