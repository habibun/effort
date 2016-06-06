<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 3/17/16
 * Time: 8:50 PM
 */

/**
 * Including Files
 */
namespace WritingModularCode;

error_reporting(E_ALL);
ini_set('display_errors', 1);

//include ("../../assets/animal_functions.php");
//echo animalSpeak("mouse");

//require( "../../assets/animal_functions.php" );
//echo animalSpeak( "cat" ) . "<br />";



/**
 * Including a File Only Once
 */

/**
 * Now, animal_functions.php will be included only once (in mouse.php), therefore the
animalSpeak() function will be declared only once
 */
//include_once( "../../assets/animal_functions.php" );
//echo animalSpeak( "mouse" ) ."<br />";


/**
 * Working with Include Paths
 */
//set_include_path( ".:/home/joe/lib" );
//echo get_include_path();


/*
 * This means that any other library files (such as PEAR
 * packages) can still be found. To do this, you can use the following code:
 */
set_include_path( get_include_path() . PATH_SEPARATOR . "/home/joe/lib" );
//echo get_include_path();



// If you ever need to reset the include path back to its default setting, simply call
restore_include_path();

//echo realpath(dirname(__FILE__)."/../"); // up one level
//echo $_SERVER["DOCUMENT_ROOT"];


/**
 * Dynamic Includes
 */
/*
 * For example, sometimes it’s useful to include different files based on a condition:
 */
$queryType = "";
if ( $queryType == "animal" ) {
    include( "animal_functions.php" );
} else {
    include( "plant_functions.php" );
}

/*
 * You could even use the value of a variable to determine which file to include.
 */
include( $queryType . "_functions.php" );


/**
 * Using Namespaces to Avoid Clashes
 */

/*
 * To create a namespace in PHP, you use the namespace keyword followed by the namespace name:
 */
//namespace MyLibrary;


/*
 * For example, the
following code declares the Checkout namespace inside the MyStore namespace:
 */
//namespace MyStore\Checkout;


/*
 * To use a namespaced class, function, or constant from within an unrelated namespace, you need to
add a backslash to the start of the namespace name, so that PHP knows you’re not trying to use relative
notation:
 */

//namespace AnotherNamespace;
//require "checkout.php";
//\MyStore\Checkout\display( $_SESSION["cart"] );


/*
 * To get around this problem, you can use a namespace alias, which works much like a symbolic link in
UNIX file systems. To create an alias you write:
 */
//use namespace as alias;


/*
 * Once you’ve created an alias, you can use it in place of the full namespace name. For example:
 */
//require "checkout.php";
//use MyWebsite\MyStore\FrontEnd\Checkout as MyCheckout;
//MyCheckout\display( $_SESSION["cart"] );


/*
 * You can leave out the as statement (and the name that follows), in which case the use statement uses the
last portion of the namespace name as the alias. So the following two lines of code are equivalent:
 */
//use MyWebsite\MyStore\FrontEnd\Checkout;
//use MyWebsite\MyStore\FrontEnd\Checkout as Checkout;


/*
 * As well as functions, you can also use namespaces with classes and constants. The following
checkout.php script defines both a constant and a class within the Checkout namespace:
 */
//namespace Checkout;
//const DEFAULT_COUNTRY = "US";
//class AddressBook
//{
//    function addEntry()
//    {
//        echo "Address added";
//}
//}
//
//require "checkout.php";
//echo Checkout\DEFAULT_COUNTRY . "<br />";
//$ab = new Checkout\AddressBook();
//$ab->addEntry();
