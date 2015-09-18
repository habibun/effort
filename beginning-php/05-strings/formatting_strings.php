<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/16/15
 * Time: 11:08 PM
 */

/**
 * General-Purpose Formatting with printf() and sprintf()
 */

// Displays "Pi rounded to a whole number is: 3"
printf("Pi rounded to a whole number is: %d", M_PI);

//Here's another example that uses multiple conversion specifications:
// Displays "2 times 3 is 6."
printf("%d times %d is %d.", 2, 3, 2 * 3);

/**
 *Specifying Signs
 */
//To change printf() 's behavior so that it always displays a sign symbol, use the sign specifier, +, in front of the type specifier
printf("%d<br/>", 123);    //Displays "123"
printf("%d<br/>", -123);   // Displays "-123"
printf("%+d<br/>", 123);   //Displays "+123"
printf("%+d<br/>", -123);  //Displays "-123"

/**
 * Padding the Output
 */
/*
For example, the following code displays various numbers, using leading zeros where necessary to
ensure the result is always six digits long:
 */
printf("%06d<br/>", 123); // Displays "000123"
printf("%06d<br/>", 4567);    // Displays "004567"
printf("%06d<br/>", 123456);  // Displays "123456"

//The padding specifier can add characters where required, but it never truncates the output. So printf
printf("%06d", 12345678); //displays "12345678", not "345678".

//This example pads various strings using leading spaces to ensure that they're right-aligned:
print "<pre>";
printf("% 15s\n", "Hi");
printf("% 15s\n", "Hello");
printf("% 15s\n", "Hello, world!");
print "</pre>";

//You're not limited to zeros and spaces. To use your own padding character, insert an apostrophe ( ' ) followed by the character instead of the zero or space:
printf("%'#8s", "Hi"); // Displays "######Hi"

//If you want to add padding to the right rather than the left — so that the result is left-aligned rather than
//right-aligned — add a minus (–) symbol between the padding character and the width specifier:
printf("%'#-8s", "Hi"); // Displays "Hi######"

/**
 * Specifying Number Precision
 */
// To add a precision specifier, insert a period
//( . ), followed by the number of decimal places to use, before the type specifier:
printf("%f< br />", 123.4567);
// Displays "123.456700" (default precision)
printf("%.2f<br />", 123.4567);
//Displays "123.46"
printf("%.0f<br />", 123.4567);
//Displays "123"
printf("%.10f<br />", 123.4567);
//Displays "123.4567000000"


/*
You can use a padding specifier with a precision specifier, in which case the entire number is padded to
the required length (including the digits after the decimal point, as well as the decimal point itself):
 */
echo "<pre>";
printf("%.2f<br />", 123.4567);   // Displays "123.46"
printf("%012.2f<br />", 123.4567); // Displays "000000123.46"
printf("%12.4f<br />", 123.4567); // Displays "123.4567"
echo "</pre>";

//By the way, if you use a precision specifier when formatting a string, printf() truncates the string to that many characters:
printf("%.8s\n", "Hello, world!");    // Displays "Hello, w"

/**
 *Swapping Arguments
 */
$mailbox = "Inbox";
$totalMessages = 36;
$unreadMessages = 4;
printf(file_get_contents("template.txt"), $totalMessages, $mailbox,
    $unreadMessages);

/**
 * Storing the Result Instead of Printing It
 */
$username = "Matt";
$mailbox = "Inbox";
$totalMessages = 36;
$unreadMessages = 4;
$messageCount = sprintf(file_get_contents("template.txt"), $totalMessages,
    $mailbox, $unreadMessages);

echo $username;
echo $messageCount;

/**
 *Trimming Strings with trim(), ltrim(), and rtrim()
 */
$myString = "
 What a lot of space!
 ";
echo "<pre>";
echo "|" . trim($myString) . "|\n"; // Displays "|What a lot of space!|"
echo "|" . ltrim($myString) . "|\n"; // Displays "|What a lot of space!|";
echo "|" . rtrim($myString) . "|\n"; // Displays "|What a lot of space!|";
echo "</pre>";

//Here's an example that strips line numbers, colons, and spaces from the start of each line of verse:
$milton1 = "1: The mind is its own place, and in it self\n";
$milton2 = "2: Can make a Heav'n of Hell, a Hell of Heav'n.\n";
$milton3 = "3: What matter where, if I be still the same,\n";

echo "<pre>";
echo ltrim($milton1, "0..9: ");
echo ltrim($milton2, "0..9: ");
echo ltrim($milton3, "0..9: ");
echo "</pre>";

/**
 * Padding Strings with str_ pad()
 */
//To use str_pad(), pass the string to be padded, and the desired width of the final string. The function
//returns the string padded on the right using space characters (by default):

echo '<pre>"';
echo str_pad("Hello, world!", 20); // Displays "Hello, world!
echo '"</pre>';

//To pad using characters other than space, pass a string to use as an optional third argument
// Displays "Hello, world!*******"
echo str_pad("Hello, world!", 20, "*") . "\n";
// Displays "Hello, world!1231231"
echo str_pad("Hello, world!", 20, "123") . "\n";

//The following example adds padding to both the left and right of a string:
// Displays "***Hello, world!****"
echo str_pad("Hello, world!", 20, "*", STR_PAD_BOTH) . "\n";

/**
 * Wrapping Lines of Text with wordwrap()
 */
$myString = "But think not that this famous town has only harpooneers,
cannibals, and bumpkins to show her visitors. Not at all. Still New Bedford
is a queer place. Had it not been for us whalemen, that tract of land would
this day perhaps have been in as howling condition as the coast of
Labrador.";

echo "<pre>";
echo wordwrap($myString);
echo "</pre>";

/*
By default, wordwrap() makes sure each line is no longer than 75 characters, but you can change this by
passing an optional second argument:
*/
$myString = "But think not that this famous town has only harpooneers,
cannibals, and bumpkins to show her visitors. Not at all. Still New Bedford
is a queer place. Had it not been for us whalemen, that tract of land would
this day perhaps have been in as howling condition as the coast of
Labrador.";

echo "<pre>";
echo wordwrap($myString, 40);
echo "</pre>";

/*
 If you'd rather split lines using a different character or characters than the newline character, pass the
character(s) you'd like to use as an optional third argument. For example, by splitting the lines with the
HTML line break element <br />, the example script no longer needs to enclose the output in
<pre>...</pre> tags:
 */
$myString = "But think not that this famous town has only harpooneers,
cannibals, and bumpkins to show her visitors. Not at all. Still New Bedford
is a queer place. Had it not been for us whalemen, that tract of land would
this day perhaps have been in as howling condition as the coast of
Labrador.";

echo wordwrap($myString, 40, "<br />");

/*
 * You can also pass an optional fourth argument to wordwrap() . If this argument is true (the default is
false ), the function always wraps the string to the specified line width, even if this means splitting
words that are longer than the line width. Here's an example:
 */
$myString = "This string has averylongwordindeed.";
echo wordwrap($myString, 10, "<br />");
echo "<br /><br />";
echo wordwrap($myString, 10, "<br />", true);

/**
 * Formatting Numbers with number_format()
 */
echo number_format(1234567.89); // Displays "1,234,568"

/*
 * Note that this rounds to the nearest whole number. If you'd rather include some decimal places, specify
the number of places as a second, optional argument:
 */
echo number_format(1234567.89, 1); // Displays "1,234,567.9"

/*
 * Finally, you can change the characters used for the decimal point and thousands separator by passing
two more optional arguments. For example, the following code formats the number using the French
convention of a comma for the decimal point and a space for the thousands separator:
 */
echo number_format(1234567.89, 2, ",", " "); // Displays "1 234 567,89"

/*
 * You can pass empty strings for either of these two parameters, so you can format a number with no
thousands separators if you like:
 */
echo number_format(1234567.89, 2, ".", ""); // Displays "1234567.89"
