<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/28/15
 * Time: 7:58 PM
 */

/*
 * However, sometimes it’s useful to be able to store the name of a function in a string
variable, and use that variable instead of the function name when calling a function
 */
$squareRoot = "sqrt";
//echo "The square root of 9 is: ". $squareRoot(9)."<br/>";
//echo "All done!<br/>";

/*
 * This example is fairly trivial, but it shows how the concept works. Here’s a slightly more complex
example:
 */
$trigFunctions = array("sin", "cos", "tan");
$degrees = 30;

foreach($trigFunctions as $trigFunction){
    echo "$trigFunction($degrees) = ". $trigFunction(deg2rad($degrees)). "<br/>";
}
