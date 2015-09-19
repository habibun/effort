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
$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );
$myAuthor = $authors[0];    // $myAuthor contains "Steinbeck"
$anotherAuthor = $authors[1];   // $anotherAuthor contains "Kafka"


/**
 * Accessing associative array
 */
$myBook = array( "title" => "The Grapes of Wrath", "author" => "John Steinbeck", "pubYear" => 1939 );
$myTitle = $myBook["title"];    // $myTitle contains "The Grapes of Wrath"
$myAuthor = $myBook["author"];  // $myAuthor contains "Steinbeck"


/*
 * You don’t have to use literal values within the square brackets; you can use any expression, as long as it
evaluates to an integer or string as appropriate:
 */
$authors = array( "Steinbeck", "Kafka", "Tolkien", "Dickens" );
$pos = 2;
echo $authors[$pos + 1]; // Displays "Dickens"
