<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/6/15
 * Time: 7:30 PM
 */

/**
 * Opening a File with fopen()
 */
/*
 * The first argument
passed to fopen() specifies the name of the file you want to open, and the second argument specifies
the mode, or how the file is to be used. For example
 */
$handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/common-files/myFile.txt", "r");
echo $handle;

//to open a file in binary mode use
$handle2 = fopen($_SERVER["DOCUMENT_ROOT"] . "/common-files/myFile.txt", "rb");

echo '<a href= "/assets/myFile.txt">test</a>';

// It’s good practice to use some form of error -checking procedure so that if an error occurs
if (!($handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/common-files/myFile.txt", "r"))) die("Cannot open the file");

/**
 * Closing a File with fclose()
 */
/*
 * Once you’ve finished working with a file, it needs to be closed. You can do this using fclose(), passing
in the open file’s handle as a single argument, like this:
 */
fclose($handle);
