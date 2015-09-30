<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/28/15
 * Time: 8:23 PM
 */

/**
 * defining function
 */
function myFunc(){

}

//here is trivial example
function hello(){
    echo "Hello world!<br/>";
}

//hello();

/**
 * defining parameters
 */
//To specify parameters for your function, insert one or more variable names between the parentheses, as follows:
function myFuncWithParam($oneParameter, $anotherParameter){

}

//example
function helloWithStyle($font, $size){
//    echo "<p style= \"font-family: $font; font-size: {$size}em;\">Hello, world!</p>";
}
helloWithStyle( "Helvetica", 2 );
helloWithStyle( "Times", 3 );
helloWithStyle( "Courier", 1.5 );

/**
 * Optional Parameters and Default Values
 */
//create a function with optional parameter
function myFunc2($optionalParameter = defaultValue){

}

//example
function helloWithStyleDefaultParams($font, $size = 1.5){
//    echo "<p style= \"font-family: $font; font-size: {$size}em;\">Hello, world!</p>";
}

helloWithStyleDefaultParams( "Helvetica", 2 );
helloWithStyleDefaultParams( "Times", 3 );
helloWithStyleDefaultParams( "Courier" );


/**
 * Returning Values from Your Functions
 */
//to get your function return a value

function myFuncReturn(){
//    return value;
}

//The following example script shows how to define and use a function that returns a value:
function makeBolt($text){
    return "<b>$text</b>";
}

$normalText = "this is normal text";
$boldText = makeBolt("this is bold text");

//echo "<p>".$normalText."</p>";
//echo "<p>".$boldText."</p>";


//As a matter of fact, you can use the return statement without including a value to return:
function myFuncReturnNothing(){
    return;
}

/**
 * Understanding Variable Scope
 */
function helloWithVariables(){
    $hello = "Hello";
    $world = "world";

    return $hello.$world;
}

//echo "The value of \$hello is: '$hello'<br/>";

//Consider the following example:
function describeMyDog(){
    $color = "brown";
    echo "My dog is $color<br/>";
}

// Define my cat’s color
$color = "black";


// Display info about my dog and cat
//describeMyDog();
//echo "My cat is $color<br/>";

/**
 * Working with Global Variables
 */
/*$myGlobal = "Hello there!";

function hello2(){
    global $myGlobal;
    echo $myGlobal;
}

hello2();*/

//take a look at the following script
function setup(){
    global $myGlobal;
    $myGlobal = "Hello there!";
}

function hello3(){
    global $myGlobal;
    echo "$myGlobal <br />";
}

setup();
hello3();

// you can also declare more than one global variable at once on the same line — just separate the variables using commas:
function myFunction() {
    global $oneGlobal, $anotherGlobal;
}
