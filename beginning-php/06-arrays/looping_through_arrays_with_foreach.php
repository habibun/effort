<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/20/15
 * Time: 9:33 PM
 */

/**
 * using foreach loop through values
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");

foreach ($authors as $value) {
//    echo $value . "\n";
}

/**
 * using foreach to loop through keys and values
 */
$myBook = array("title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939);

foreach ($myBook as $key => $value) {
//    echo $key . "=>" . $value."\n";
}

/**
 * altering array values with foreach
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");

foreach ($authors as $value) {
    if ($value == "Tolkien") {
        $value = "Hardy";
    }

//     echo $value . " ";
}
//print_r($authors);


//Here’s the previous example rewritten to use references:
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");

foreach ($authors as &$value) {
    if ($value == "Tolkien") {
        $value = "Hardy";
    }
    echo $value . "\n";
}
unset($value);

print_r($authors);