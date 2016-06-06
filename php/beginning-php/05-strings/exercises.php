<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/18/15
 * Time: 6:47 PM
 */

/**
 * 1.
 * Using the printf() function, write a single line of code that takes a month (from 1 to 12), a day
 * (from 1 to 31), and a four-digit year, and displays the resulting date, formatted in mm/dd/yyyy
 * format. Don’t forget to add a zero in front of the month or day if it’s less than 10.
 */
printf("%02d/%02d/%d", 3, 24, 2008); // Displays "03/24/2008"

/**
 * 2.
 * Write a script that emulates the function call str_pad( $myString, $desiredLength).
 * In other words, take a string, and add space characters to the right of it until the string reaches
 * the desired length. Display both the original and padded string in the page.
 */

$myString = "Hello world!";
$desiredLength = 20;

echo "original string $myString";

while (strlen($myString) < 20) {
    $myString .= " ";
}
echo "<pre> $myString</pre>";
