<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/26/15
 * Time: 12:42 PM
 */

/**
 * start - 1.
 * Imagine that two arrays containing book and author information have been pulled from
 * a database:
 */
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens", "Milton", "Orwell");

$books = array(
    array(
        "title" => "The Hobbit",
        "authorId" => 2,
        "pubYear" => 1937
    ),
    array(
        "title" => "The Grapes of Wrath",
        "authorId" => 0,
        "pubYear" => 1939
    ),
    array(
        "title" => "A Tale of Two Cities",
        "authorId" => 3,
        "pubYear" => 1859
    ),
    array(
        "title" => "Paradise Lost",
        "authorId" => 4,
        "pubYear" => 1667
    ),
    array(
        "title" => "Animal Farm",
        "authorId" => 5,
        "pubYear" => 1945
    ),
    array(
        "title" => "The Trial",
        "authorId" => 1,
        "pubYear" => 1925
    ),
);

/**
 * Instead of containing author names as strings, the $books array contains numeric indices
 * (keyed on "authorId") pointing to the respective elements of the $authors array. Write a
 * script to add an "authorName" element to each associative array within the $books array that
 * contains the author name string pulled from the $authors array. Display the resulting $books
 * array in a Web page.
 * end -1
 */

foreach ($books as &$book) {
    $book["authorName"] = $authors[$book["authorId"]];
}
//print_r( $books );


/**
 * 2
 * Imagine you are writing a version of the computer game Minesweeper. Use arrays to create and
 * store a minefield on a 20 x 20 grid. Place ten mines randomly on the grid, then display the grid,
 * using asterisks (*) for the mines and periods (.) for the empty squares. (Hint: To return a ran-
 * dom number between 0 and 19 inclusive, use rand( 0, 19 ).)
 */
$fieldSize = 20;
$numMines = 10;
$minefield = array();

//initialize the minefield
for ($x = 0; $x < $fieldSize; $x++) {
    $minefield[$x] = array();
    for ($y = 0; $y < $fieldSize; $y++) {
        $minefield[$x][$y] = false;
    }
}

//add the mines
for ($i = 1; $i <= $numMines; $i++) {
    do {
        $mineX = rand(0, 19);
        $mineY = rand(0, 19);
    } while ($minefield[$mineX][$mineY]);

    $minefield[$mineX][$mineY] = true;
}

//display the minefield
echo "<pre>";
for ($y = 0; $y < $fieldSize; $y++) {
    for ($x = 0; $x < $fieldSize; $x++) {
        echo ($minefield[$x][$y]) ? "* " : ". ";
    }
    echo "\n";
}
echo "</pre>";