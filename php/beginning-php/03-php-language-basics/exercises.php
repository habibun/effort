<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/9/15
 * Time: 7:54 PM
 */

/**
 * 1.
Write a script that creates a variable and assigns an integer value to it, then adds 1 to the variable ’s
value three times, using a different operator each time. Display the final result to the user.
 */
$var = 1;
$var  = 1 + 1;  //using arithmetic operator
$var += 1;      //using  combined assignment operator
$var ++;        //using incrementing / decrementing operator
echo $var;

/**
 * 2.
Write a script that creates two variables and assigns a different integer value to each variable.
Now make your script test whether the first value is
a.equal to the second value
b.greater than the second value
c.less than or equal to the second value
d.not equal to the second value

and output the result of each test to the user.
 */
$varNumber1 = 3;
$varNumber2 = 5;

$result = $varNumber1 == $varNumber2;   //equal
$result = $varNumber1 > $varNumber2;    //greater than
$result = $varNumber1 <= $varNumber2;   //less than or equal to
echo $result = $varNumber1 != $varNumber2;  //not equal to
