<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 17/5/2015
 * Time: 9:59 PM
 */
//connect mysql
mysql_connect('localhost','root','') or die('<p>Error connecting to database: ' . mysql_error() . '</p>');

//connect database
mysql_select_db('effort') or die('<p>Error selecting the database effort: '.mysql_error().'</p>');

//for query
$result = mysql_query('show tables;');

//mysql function return false when there is a problem error handling
if ($result === false) {
    die("<p>Error in listing tables: " . mysql_error() . "</p>");
}

//even better to check false
if (!$result) {
    die("<p>Error in listing tables: " . mysql_error() . "</p>");
}

//process the result
while ($row = mysql_fetch_row($result)) {
    echo "<li>Table: {$row[0]}</li>";
    /*note:
    constantly ending a string and adding a variable,
    you can just wrap a variable inside of { and }, and PHP will print the value of that
    variable instead of “$row[0]”
    */
}

//print the value of that variable using this way
while ($row = mysql_fetch_row($result)) {
    echo "<li>Table: " . $row[0] . "</li>";
}