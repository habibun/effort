<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/24/15
 * Time: 5:58 PM
 */

/**
 * Sorting arrays
 */

//Sorting Indexed arrays with sort and rsort
$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );
sort($authors);
rsort($authors);
//print_r($authors);

//Sorting Associative arrays with asort and arsort
$myBook = array( "title" => "Bleak House", "author" => "Dickens", "year" => 1853 );
asort( $myBook );
arsort( $myBook );
//print_r( $myBook );

//sorting associative array keys with ksort and krsort
$myBook = array( "title" => "Bleak House", "author" => "Dickens", "year" => 1853 );
ksort($myBook);
krsort($myBook);
//print_r($myBook);


//multi-sorting with array_multisort
$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );
$titles = array( "The Grapes of Wrath", "The Trial", "The Hobbit", "A Tale of Two Cities" );
$pubYears = array( 1939, 1925, 1937, 1859 );

array_multisort($authors, $titles, $pubYears);
//array_multisort( $titles, $authors, $pubYears );

//print_r($authors);
//print_r($titles);
//print_r($pubYears);


//The following code illustrates how array_multisort() sorts a two-dimensional array
$myBooks = array(
    array(
        "title" => "The Grapes of Wrath",
        "author" => "John Steinbeck",
        "pubYear" => 1939
    ),
    array(
        "title" => "Travels With Charley",
        "author" => "John Steinbeck",
        "pubYear" => 1962
    ),
    array(
        "title" => "The Trial",
        "author" => "Franz Kafka",
        "pubYear" => 1925
    ),
    array(
        "title" => "The Hobbit",
        "author" => "J. R. R. Tolkien",
        "pubYear" => 1937
    ),
    array(
        "title" => "A Tale of Two Cities",
        "author" => "Charles Dickens",
        "pubYear" => 1859
    ),
);

array_multisort($myBooks);
//print_r($myBooks);


/**
 * Adding and removing array elements
 */
//adding and removing elements at the start and end

//add element at the start
$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );
//echo array_unshift($authors,"Hardy","Melville");
//print_r($authors);

//remove the first elements
//echo array_shift($authors);
//print_r($authors);

//adding element at the end
$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );
//echo array_push($authors, "Hardy", "Melville");
//print_r($authors);

/*
 *  if you include an array as one of the
values to add, the array is added to the original array as an element, turning the original array into a
multidimensional array:
 */
$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );
$newAuthors = array( "Hardy", "Melville" );
//echo array_push( $authors, $newAuthors ) . "<br/>"; // Displays "5"
//print_r($authors);

//remove the last element of an array
$myBook = array( "title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939 );
//echo array_pop($myBook);
//print_r($myBook);

/**
 * Adding and removing element in the middle
 */
//adding two new elements to the middle
$authors = array( "Steinbeck", "Kafka", "Tolkien" );
$arrayToAdd = array( "Melville", "Hardy" );
//array_splice( $authors, 2, 0, $arrayToAdd );
//print_r($authors);

//replacing two elements with a new element
$authors = array( "Steinbeck", "Kafka", "Tolkien" );
$arrayToAdd = array( "Bronte" );
//array_splice($authors, 1, 2, $arrayToAdd);
//print_r($authors);

//removing the last two elements
$authors = array( "Steinbeck", "Kafka", "Tolkien" );
//array_splice($authors,1);
//print_r($authors);

//inserting a string instead of an array
$authors = array( "Steinbeck", "Kafka", "Tolkien" );
//array_splice($authors,1,0,"Orwell");
//print_r($authors);

/**
 * Merging Arrays Together
 */
$authors = array( "Steinbeck", "Kafka" );
$moreAuthors = array( "Tolkien", "Milton" );
//$merge = array_merge($authors, $moreAuthors);
//print_r($merge);

/*
 *A nice feature of array_merge() is that it preserves the keys of associative arrays, so you can use it to
add new key/value pairs to an associative array:
 */
$myBook = array( "title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939 );
$myBook = array_merge( $myBook, array( "numPages" => 464 ) );
// Displays "Array ( [title] => The Grapes of Wrath [author] => John Steinbeck [pubYear] => 1939 [numPages] => 464 )"
//print_r ( $myBook );

/*
 * If you add a key/value pair using a string key that already exists in the array, the original element gets
overwritten. This makes array_merge() handy for updating associative arrays:
 */

$myBook = array( "title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939 );
$myBook = array_merge( $myBook, array( "title" => "East of Eden", "pubYear" => 1952 ) );
//print_r ( $myBook );


/*
 * However, an element with the same numeric key doesn’t get overwritten; instead the new element is
added to the end of the array and given a new index:
 */
$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );
$authors = array_merge( $authors, array( 0 => "Milton" ) );
//print_r ( $authors );


/*
 * You can also use array_merge() to reindex a single numerically indexed array, simply by passing the
array. This is useful if you want to ensure that all the elements of an indexed array are consecutively
indexed:
 */
$authors = array( 34 => "Steinbeck", 12 => "Kafka", 65 => "Tolkien", 47 => "Dickens" );
//print_r( array_merge( $authors ) );

/**
 * Converting Between Arrays and Strings
 */
//string to array
$fruitString = "apple,pear,banana,strawberry,peach";
$fruitArray = explode(",",$fruitString);
//print_r($fruitArray);

/*
 * You can limit the number of elements in the returned array with a third parameter, in which case the last
array element contains the whole rest of the string:
 */
$fruitString = "apple,pear,banana,strawberry,peach";
$fruitArray = explode(",",$fruitString,3);
//print_r($fruitArray);

/*
 * Alternatively, specify a negative third parameter to exclude that many components at the end of the
string from the array. For example, using –3 in the example just shown creates an array containing just
"apple" and "pear". (The three components "banana", "strawberry", and "peach" are ignored.)
 */
$fruitString = "apple,pear,banana,strawberry,peach";
$fruitArray = explode(',',$fruitString,-3);
//print_r($fruitArray);

//array to string
$fruitArray = array( "apple", "pear", "banana", "strawberry", "peach" );
$fruitString = implode( ",", $fruitArray );
// Displays "apple,pear,banana,strawberry,peach"
//echo $fruitString;

/**
 * Converting an Array to a List of Variables
 */
$myBook = array( "The Grapes of Wrath", "John Steinbeck", 1939 );
list($title, $author, $pubYear) = $myBook;
//echo $title;
//echo $author;
//echo $pubYear;

$myBook = array( "title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939 );
while( list($key, $value ) = each($myBook)){
    echo "<dt>$key</dt>";
    echo "<dt>$value</dt>";
}

