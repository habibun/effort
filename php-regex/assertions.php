<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/24/15
 * Time: 11:00 PM
 */

/**
 * Ignore Case, case insensitive
 */
 // create a string
 $string = 'abcdefghijklmnopqrstuvwxyz0123456789';

 // try to match our pattern
 if(preg_match("/^ABC/i", $string))
 {
     // echo this is it matches
     echo 'The string begins with abc';
 }
 else
 {
     // if not match is found echo this line
     echo 'No match found';
 }

// to be continue
