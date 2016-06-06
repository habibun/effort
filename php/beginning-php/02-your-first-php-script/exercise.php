<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/7/15
 * Time: 9:15 PM
 */

/**
 * 1.
Enhance the hello_with_time.php script to display the current date as well as the time.
Comment your code for readability. (Hint: With the date() function, you can use M to display
the month name, j to display the day of the month, and Y to display the year.)
 */
//get the current time
$currentTime = date('g:i:s a');

//get the current date
$currentDate = date('j-M-Y');

echo $currentTime."<br>".$currentDate;