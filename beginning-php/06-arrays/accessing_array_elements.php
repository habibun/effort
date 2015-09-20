<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/19/15
 * Time: 11:15 AM
 */

/**
 * Accessing indexed array
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$myAuthor = $authors[0];    // $myAuthor contains "Steinbeck"
$anotherAuthor = $authors[1];   // $anotherAuthor contains "Kafka"


/**
 * Accessing associative array
 */
$myBook = array("title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939);
$myTitle = $myBook["title"];    // $myTitle contains "The Grapes of Wrath"
$myAuthor = $myBook["author"];  // $myAuthor contains "Steinbeck"


/*
 * You don’t have to use literal values within the square brackets; you can use any expression, as long as it
evaluates to an integer or string as appropriate:
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$pos = 2;
//echo $authors[$pos + 1]; // Displays "Dickens"

/**
 * Changing Elements
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$authors[2] = "Melville";

/*
 * What if you wanted to add a fifth author? You can just create a new element with an index of 4,
as follows:
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$authors[4] = "Orwell";

/*
 * There’s an even easier way to add a new element to an array — simply use square brackets with
no index:
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$authors[] = "Orwell";

/*
 * In fact, you can create an array from scratch simply by creating its elements using the square bracket
syntax. The following three examples all produce exactly the same array:
 */
// Creating an array using the array() construct
$authors1 = array("Steinbeck", "Kafka", "Tolkien", "Dickens");

// Creating the same array using [] and numeric indices
$authors2[0] = "Steinbeck";
$authors2[1] = "Kafka";
$authors2[2] = "Tolkien";
$authors2[3] = "Dickens";

// Creating the same array using the empty [] syntax
$authors3[] = "Steinbeck";
$authors3[] = "Kafka";
$authors3[] = "Tolkien";
$authors3[] = "Dickens";

/*
 * If in doubt, always initialize your array variables when you first create them, even if you’re not creating
any array elements at that point. You can do this easily by using the array() construct with an empty list
 */
$authors = array();
//This creates an array with no elements (an empty array). You can then go ahead and add elements later:

$authors[] = "Steinbeck";
$authors[] = "Kafka";
$authors[] = "Tolkien";
$authors[] = "Dickens";

// Creating an associative array using the array() construct
$myBook = array("title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939);

//creating an associative array using the square bracket syntax
$myBook = array();
$myBook["title"] = "The Grapes of Wrath";
$myBook["author"] = "John Steinbeck";
$myBook["pubYear"] = 1939;

//Changing elements of associative arrays works in a similar fashion to indexed arrays:
$myBook["title"] = "East of Eden";
$myBook["pubYear"] = 1952;

/**
 * Outputting an Entire Array with print_r()
 */

//Using print_r() is easy — just pass it the array you want to output:
//print_r( $array );

/*
 * If you’d rather store the output of print_r() in a string, rather than displaying it in a browser, pass a
second true argument to the function:
 */
$city = array('dhaka', 'rajshahi', 'khulna');
$arrayStructure = print_r($city, true);
//echo $arrayStructure; // Displays the contents of $array

/**
 * Extracting a Range of Elements with array_slice()
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$authorsSlice = array_slice($authors, 1, 2);
//print_r($authorsSlice);

//in associative array
$myBook = array("title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939);
$myBookSlice = array_slice($myBook, 1, 2);
//print_r($myBookSlice);// Displays "Array ( [author] => John Steinbeck [pubYear] => 1939 )";

/*
 * By the way, if you leave out the third argument to array_slice(), the function extracts all elements
from the start position to the end of the array:
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$authorsSlice = array_slice($authors, 1);
// Displays "Array ( [0] => Kafka [1] => Tolkien [2] => Dickens )";
//print_r( $authorsSlice );

/*
 * Earlier you learned that array_slice() doesn’t preserve the indices of elements taken from an indexed
array. If you want to preserve the indices, you can pass a fourth argument, true, to array_slice():
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");

// Displays "Array ( [0] => Tolkien [1] => Dickens )";
//print_r( array_slice( $authors, 2, 2 ) );

// Displays "Array ( [2] => Tolkien [3] => Dickens )";
//print_r( array_slice( $authors, 2, 2, true ) );

/**
 * Counting Elements in an Array
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$myBook = array("title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939);

//echo count( $authors ) . "<br/>"; // Displays "4"
//echo count( $myBook ) . "<br/>"; // Displays "3"

//You might want to use count() to retrieve the last element of an indexed array:
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$lastIndex = count($authors) - 1;
//echo $authors[$lastIndex];  //display dickens

// it doesn’t necessarily mean that the last element has an index of 3!
// Create a sparse indexed array
$authors = array(0 => "Steinbeck", 1 => "Kafka", 2 => "Tolkien", 47 => "Dickens");
$lastIndex = count($authors) - 1;
//echo $authors[$lastIndex]; // Generates an "Undefined offset" notice

/**
 * Stepping Through an Array
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
//echo "current ".current($authors)."\n";
//echo "key ".key($authors)."\n";
//echo "next ".next($authors)."\n";
//echo "reset ".reset($authors)."\n";
//echo "prev ".prev($authors)."\n";
//echo "end ".end($authors)."\n";

//to access last index
$authors = array(0 => "Steinbeck", 1 => "Kafka", 2 => "Tolkien", 47 => "Dickens");
//echo end( $authors ); // Displays "Dickens"

//if last element value is false
$authors = array(0 => "Steinbeck", 1 => "Kafka", 2 => "Tolkien", 47 => "Dickens", 50 => false);
echo "last element is " . end($authors);

//each function
$myBook = array("title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939);
$element = each($myBook);
//echo "Key: " . $element[0] . "<br/>";
//echo "Value: " . $element[1] . "<br/>";
//echo "Key: " . $element["author"] . "<br/>";
//echo "Value: " . $element["value"] . "<br/>";

//Here’s how to use each() to retrieve an array element with a value of false:
$myArray = array(false);
$element = each($myArray);
$key = $element["key"]; // $key now equals 0
$val = $element["value"]; // $val now equals false

$myBook = array("title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939);
while ($element = each($myBook)) {
//    echo "<dt>" . $element["key"] . "</dt>";
//    echo "<dd>" . $element["value"] . "</dd>";
}
