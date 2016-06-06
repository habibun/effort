<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/29/06
 * Time: 6:07 AM
 */

/*
 * Most of the time this isn’t a problem, but sometimes you want your function to work on the original
information, rather than on a copy. Consider the following example:
 */

function resetCounter($c){
    $c = 0;
}
$counter = 0;

$counter++;
$counter++;
$counter++;

//echo $counter;
//resetCounter($counter);
//echo $counter;

//here is a simple example that creates a reference to a variable:
$myVar =123;
$myRef = &$myVar;
$myRef++;

//echo $myRef;
//echo $myVar;

/**
 * Passing References to Your Own Functions
 */

//you can fix the earlier counter example by using a reference
function counterResetR(&$c){
    $c = 0;
}
$counter2 = 0;
$counter2++;
$counter2++;
$counter2++;
//echo $counter2;
counterResetR($counter2);
//echo $counter2;

/**
 * Returning References from Your Own Functions
 */

//here is an example that shows return-by-reference
$myNumber = 5;

function &getMyNumber(){
    global $myNumber;
    return $myNumber;
}

$numberReference = &getMyNumber();
$numberReference++;

//echo $myNumber;
//echo $numberReference;


function normalGetNumber(){
    global $myNumber;
    return $myNumber;
}

$test = normalGetNumber();
$test++;
echo $test;
echo $myNumber;