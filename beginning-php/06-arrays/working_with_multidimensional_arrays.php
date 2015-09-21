<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/21/15
 * Time: 12:15 AM
 */

/**
 * creating a multidimensional array
 */
$myBooks = array(
    array(
        "title" => "The Grapes of Wrath",
        "author" => "John Steinbeck",
        "pubYear" => 1939
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

print_r($myBooks);