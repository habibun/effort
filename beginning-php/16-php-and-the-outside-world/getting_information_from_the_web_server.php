<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/27/16
 * Time: 7:52 PM
 */

echo "Your IP address is: " . $_SERVER["REMOTE_ADDR"];
echo "The request method used to access the script: " . $_SERVER["REQUEST_METHOD"];


/* The following simple script outputs all of the values in the $_SERVER superglobal array: */
print_r($_SERVER);