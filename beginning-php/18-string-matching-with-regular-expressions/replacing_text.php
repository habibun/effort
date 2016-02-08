<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 2/11/16
 * Time: 9:24 PM
 */

/**
 * Replacing Text with preg_replace()
 */
//$text = "The wholesale price is $89.50.";
//echo preg_match("/\\$\d+\.\d{2}/", $text);
//echo preg_replace("/\\$\d+.\d{2}/", "[CENSORED]", $text);

/*
 *  You can also use backreferences
within the replacement string — simply write a dollar ($ ) symbol followed by the backreference number:
 */
$text = "Author: Steinbeck, John";
// Displays "Author: John Steinbeck"
//echo preg_replace( "/(\w+), (\w+)/", "$2 $1", $text );

/*
 * If you want to include the entire matched text in the replacement string, use $0 (a dollar followed
by zero):
 */
//$text = "Mouse mat: $3.99";
// Displays "Mouse mat: Only $3.99"
//echo preg_replace( "/\\$\d+\.\d{2}/", "Only $0", $text );


/*
 * You can also pass an array of target strings for preg_replace() to work on, much like using
preg_grep(). If you do this, preg_replace() returns the array of strings with any matched text
replaced by the replacement text:
 */
/*$text = array(
"Mouse mat: $3.99",
"Keyboard cover: $4.99",
"Screen protector: $5.99"
);
$newText = preg_replace( "/\\$\d+\.\d{2}/", "Only $0", $text );
echo "<pre>";
print_r( $newText );
echo "</pre>";*/

/*
 * You can pass an array of regular expression
strings to the function, and it will match and replace each expression in turn with the replacement string:
 */
/*$text = "The wholesale price is $89.50. " .
"The product will be released on Jan 16, 2010.";
$patterns = array(
"/\\$\d+\.\d{2}/",
"/\w{3} \d{1,2}, \d{4}/"
);
echo preg_replace( $patterns, "[CENSORED]", $text );*/

/*
 * If you also pass an array of replacement strings, the matched text from each expression in the
expressions array is replaced by the corresponding string in the replacements array:
 */
/*$text = "The wholesale price is $89.50. " .
"The product will be released on Jan 16, 2010.";
$patterns = array(
"/\\$\d+\.\d{2}/",
"/\w{3} \d{1,2}, \d{4}/"
);

$replacements = array(
"[PRICE CENSORED]",
"[DATE CENSORED]"
);
echo preg_replace( $patterns, $replacements, $text );*/

/*
 * If your replacements array contains fewer elements than your expressions array, matched text for any
expression without a corresponding replacement is replaced with an empty string. For example:
 */

/*$text = "The wholesale price is $89.50. " .
"The product will be released on Jan 16, 2010.";
$patterns = array(
"/\\$\d+\.\d{2}/",
"/\w{3} \d{1,2}, \d{4}/"
);
$replacements = array(
"[PRICE CENSORED]"
);

echo preg_replace( $patterns, $replacements, $text );*/

/*
 * preg_replace() supports two more optional arguments. The first argument, an integer, lets you restrict
how many times the pattern (or patterns) is replaced in the target string (or strings):
 */
// Displays "71%, 83%"
//echo preg_replace( "/\d+\%(,| )*/", "", "14%, 59%, 71%, 83%", 2 );

/*
 * The second optional argument is a variable to hold the number of replacements performed. (If you want
to use this argument but you don’t want to limit the number of replacements, pass –1 for the previous
argument.)
 */
//preg_replace( "/\%/", " percent", "14%, 59%, 71%, 83%", -1, $count );
//echo $count; // Displays "4"

/**
 * Replacing Text using a Callback Function
 */
/*
 *  Say you have a large amount of sales copy that mentions prices of various products in
your online store, and you want to increase all your product prices by a dollar.
 */
$text = "Our high-quality mouse mat is just $3.99,
while our keyboard covers sell for $4.99 and our
screen protectors for only $5.99.";
function addADollar( $matches ) {
    return "$" . ( $matches[1] + 1 );
}
echo preg_replace_callback( "/\\$(\d+\.\d{2})/", "addADollar", $text );
