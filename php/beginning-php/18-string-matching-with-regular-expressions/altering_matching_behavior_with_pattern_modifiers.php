<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 2/12/16
 * Time: 9:09 PM
 */

/*
 * For example, you can make an expression case insensitive by adding i after the closing delimiter of the
expression:
 */
//$text = "Hello, world!";
//echo preg_match( "/hello/", $text ) . "<br />";     // Displays "0"
//echo preg_match( "/hello/i", $text ) . "<br />";    // Displays "1"

/*
 * The following example shows how the m modifier works. The first expression attempts to match the
characters "world!" followed by the end of the string. Because "world!" is not at the end of the target
string, the match fails. However, the second expression uses the m modifier. This causes the $ character to
match the newline after "world!":
 */
//$text = "Hello, world!\nHow are you today?\n";
//echo preg_match( "/world!$/", $text ) . "<br />";// Displays "0"
//echo preg_match( "/world!$/m", $text ) . "<br />";// Displays "1"

/*
 * By adding the x modifier to your expression you can split the expression over multiple lines and add
comments — very handy for complex expressions:
 */
/*$text = "Andy scored 184 points, Rachel attained 198 points and Bert scored 112 points.";
$pattern = "/
(Andy|Rachel|Bert)\ # Only match people we know about
(scored|attained)\ # Two words, same meaning
(\d+)   # The number of points scored
/x";
preg_match_all( $pattern, $text, $matches );
for ( $i = 0; $i < count( $matches[0] ); $i++ ) {
    echo $matches[1][$i] . ": " . $matches[3][$i] . "<br />";
}*/

/*
 * Finally, here’s an example that uses the e modifier. This is the same example used in the
preg_replace_callback() section earlier in the chapter, rewritten to use e instead:
 */
/*$text = "Our high-quality mouse mat is just $3.99,
while our keyboard covers sell for $4.99 and our
screen protectors for only $5.99.";
echo preg_replace( "/\\$(\d+\.\d{2})/e", "'$' . ($1 + 1)", $text );*/


/*
 * You can combine several modifiers at once — just add the modifier letters one after the other:
 */
//$text = "Hello, World!\nHow are you today?\n";
//echo preg_match( "/world!$/im", $text ) . "<br />"; // Displays "1"
