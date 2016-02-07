<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 2/11/16
 * Time: 8:40 PM
 */

/*
 * This code searches for the word "in" within the strings in the $text array, and produces the
following output:
 */
$text = array(
"His three whales are as good whales as were ever published in",
"Wapping, at any rate; and his stump as unquestionable a stump",
"as any you will find in the western clearings."
);
$results = preg_grep( "/\bin\b/", $text );
echo "<pre>";
print_r( $results );
echo "</pre>";

/*
 * If you’d prefer to get a list of elements that don’ t match the pattern, pass the PREG_GREP_INVERT flag as
the third argument to preg_grep():
 */
$text = array(
"His three whales are as good whales as were ever published in",
"Wapping, at any rate; and his stump as unquestionable a stump",
"as any you will find in the western clearings."
);
$results = preg_grep( "/\bin\b/", $text, PREG_GREP_INVERT );
echo "<pre>";
print_r( $results );
echo "</pre>";
