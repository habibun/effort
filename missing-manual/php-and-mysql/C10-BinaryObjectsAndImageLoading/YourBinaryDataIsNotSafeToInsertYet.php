<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 24/5/2015
 * Time: 10:26 PM
 */
//The mysql_real_escape_string function escapes any special characters in the string you hand it
$insert_sql = "INSERT INTO users (first_name, last_name, email, " .
    "bio, facebook_url, twitter_handle) " .
    "VALUES ('{mysql_real_escape_string($first_name)}', " .
    "'{mysql_real_escape_string($last_name)}', " .
    "'{mysql_real_escape_string($email)}', " .
    "'{mysql_real_escape_string($bio)}', " .
    "'{mysql_real_escape_string($facebook_url)}', " .
    "'{mysql_real_escape_string($twitter_handle)}');";

//The sprintf function puts everything together and returns a string


//Suppose $first_name is “John” and $last_name is “Wayne.” Running a script with these two lines would give you:
//Hello there, John Wayne

/*
The sprintf function replaces the fist %s with the fist value after the string, which
is $first_name. Then, it replaces the second %s with the second value after the string,
$last_name. Finally, the entire string with the values inserted—is assigned to $hello
*/

//using sprintf
$insert_sql = sprintf("iNSERT iNTO users " .
    "(first_name, last_name, email, " .
    "bio, facebook_url, twitter_handle) " .
    "VALUES ('%s', '%s', '%s', '%s', '%s', '%s');",
    mysql_real_escape_string($first_name),
    mysql_real_escape_string($last_name),
    mysql_real_escape_string($email),
    mysql_real_escape_string($bio),
    mysql_real_escape_string($facebook_url),
    mysql_real_escape_string($twitter_handle));

//another sprintf
$insert_image_sql = sprintf("iNSERT iNTO images " .
    "(filename, mime_type, " .
    "file_size, image_data) " .
    "VALUES ('%s', '%s', %d, '%s');",
    mysql_real_escape_string($image_filename),
    mysql_real_escape_string($image_mime_type),
    mysql_real_escape_string($image_size),
    mysql_real_escape_string($image_data));

// %d means to sprintf: replace that type specifir with a decimal number
