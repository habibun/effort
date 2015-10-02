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

// Define my cat's color
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
//    global $myGlobal;
//    $myGlobal = "Hello there!";
}

function hello3(){
    global $myGlobal;
//    echo "$myGlobal <br />";
}

setup();
hello3();

// you can also declare more than one global variable at once on the same line — just separate the variables using commas:
function myFunction() {
    global $oneGlobal, $anotherGlobal;
}


/*
 *  you can also access global variables using the $GLOBALS array. This array is a special type of
variable called a superglobal, which means you can access it from anywhere without using the global
statement
 */
$myGlobal = "Hello there!";

function hello4(){
//    echo  $GLOBALS['myGlobal'];
}

hello4();

/**
 * Using Static Variables to Preserve Values
 */
//declare a local variable as static
static $var = 0;

//So when might you use static variables? Here's a situation where a local variable isn't much use:
function nextNumber(){
    $counter = 0;
    return ++$counter;
}

//echo nextNumber();
//echo nextNumber();
//echo nextNumber();

//However, by making a small change to turn $counter into a static variable, the script produces the expected output:

function nextNumberWithStatic(){
    static $counter = 0;
    return ++$counter;
}

//echo nextNumberWithStatic();
//echo nextNumberWithStatic();
//echo nextNumberWithStatic();

/**
 * Creating Anonymous Functions
 */
//Here's a trivial example that creates an anonymous function dynamically based on the value of a variable:
$mode = "+";

$processNumbers = create_function('$a, $b', "return \$a $mode \$b;");

//echo $processNumbers(2,3);


/*
 * Sorting words by length
 */
$myText = <<<END_TEXT
But think not that this famous town has
only harpooneers, cannibals, and
bumpkins to show her visitors. Not at
all. Still New Bedford is a queer place.
Had it not been for us whalemen, that
tract of land would this day perhaps
have been in as howling condition as the
coast of Labrador.
END_TEXT;

echo "<h2>The text:</h2>";
echo "<div style=\"width: 30em;\">$myText</div>";

$myText = preg_replace( "/[\,\.]/", "", $myText );
$words = array_unique( preg_split( "/[ \n\r\t]+/", $myText ) );
usort( $words, create_function( '$a, $b', 'return strlen($a) - strlen($b);' ) );

echo "<h2>The sorted words:</h2>";
echo "<div style=\"width: 30em;\">";

foreach ( $words as $word ) {
    echo "$word ";
}

echo "</div>";

/*
 * By the way, you don’t have to use an anonymous function in this situation. The preceding line of code
could be written as:
 */
function sortByLength( $a, $b ) {
    return strlen( $a ) - strlen( $b );
}
usort( $words, "sortByLength" );