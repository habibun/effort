<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 2/6/16
 * Time: 5:50 PM
 */

/**
 * Matching Literal Characters
 */

//These nineteen special characters are:
// . \ + * ? [ ^ ] $ ( ) { } = ! < > | :

/* If you want to include any character from this list literally within your expression, you need to escape it
by placing a backslash (\) in front of it, like so: */

//echo preg_match( "/love\?/", "What time is love?" ); // Displays "1"

//In addition, if you use your delimiter character within your expression, you need to escape it:
//echo preg_match("/http\:\/\//","http://www.example.com");

//Slashes are commonly used as regular expression delimiters, but you can use any symbol you like
//echo preg_match("|http\://|","http://www.example.com");

/*
 * Luckily, PHP provides a handy function called preg_quote() that takes a string and returns the same
string with any special regular expression characters quoted:
 */
//echo preg_quote("$3.99");
//echo preg_quote("$3.99", "/");


/*
 * If you want to escape your delimiter character also, pass it as the second argument to preg_quote():
 */
//echo preg_quote("http://", "/");


/**
 * Matching Types of Characters using Character Classes
 */
/*
 * By placing a set of characters in square brackets, you can search for a single character that matches
any one of the characters in the set. For example, the following expression matches "a", "b", "c",
"1", "2", or "3":
 */
//echo preg_match("/[abc123]/", "b");

/*
 * You can specify ranges of characters using the hyphen (-) symbol. The following example matches the
same set of characters as the previous example:
 */
//echo preg_match("/[a-c1-3]/", "b");

/*
 * so you can match any letter of digit using:
 */
//echo preg_match("/[a-zA-Z0-9]/", "b");

/*
 * To negate the sense of a character class — that is, to match a character that is not one of the characters in
the set — place a caret (^) symbol at the start of the list:
 */
//echo preg_match("/[abc]/", "e");
//echo preg_match("/[^abc]/","e");

/*
 * So to match a digit character anywhere in the target string you could use either of the following two
expressions:
 */
//echo preg_match("/[0-9]/", "a");
//echo preg_match("/\d/", "0");

/*
 * Incidentally, you can also use a shorthand character class within a longhand class. The following
expression matches the letter "e" or "p", or any digit, in the target string:
 */
//echo preg_match("/[ep\d]/", "e");


/*
 * here are some examples;
 */
//echo preg_match("/\d[A-Z]/","3D");
//echo preg_match("/\d[A-Z]/","CD");
//echo preg_match("/\S\S\S/","6&c");
//echo preg_match("/\S\S\S/","6 c");

/*
 * to match any character at all, use a dot(.):
 */
//echo preg_match("/He.../","Hello");


/**
 * Matching Multiple Characters
 */
/*
 * Say you wanted to search a string for a date in the format mmm/dd/yy or mmm/dd/yyyy (for example,
jul/15/06 or jul/15/2006). That’s three lowercase letters, followed by slash, followed by one or two
digits, followed by a slash, followed by between two and four digits. This regular expression will do
the job:
 */
//echo preg_match("/[a-z]{3}\/\d{1,2}\/\d{2,4}/","jul/15/2006");

/**
 * Greedy and Non-Greedy Matching
 */
/*
 * When you use quantifiers to match multiple characters, the quantifiers are greedy by default. This means
that they will try to match the largest number of characters possible. Consider the following code:
 */
//echo preg_match("/P.*r/", "Peter Piper", $matches);
//echo $matches[0];

/*
 * You can change a quantifier to be non-greedy. This causes it to match the smallest number of characters
possible. To make a quantifier non-greedy, place a question mark (?) after the quantifier. For example, to
match the smallest possible number of digits use:
 */
//preg_match("/P.*?r/", "Peter Piper", $matches);
//echo $matches[0];

/**
 * Using Subpatterns to Group Patterns
 */
/*
 * By placing a portion of your regular expression’s rules in parentheses, you can group those rules into a
subpattern. A major benefit of doing this is that you can use quantifiers (such as * and ?) to match the
whole subpattern a certain number of times. For example:
 */
//echo preg_match("/(row,? )+your boat/","row, row, row your boat");

/*
 * A side-effect of using subpatterns is that you can retrieve the individual subpattern matches in the
matches array passed to preg_match(). The first element of the array contains the entire matched text
as usual, and each subsequent element contains any matched subpatterns:
 */
//echo preg_match( "/(\d+\/\d+\/\d+) (\d+\:\d+.+)/", "7/18/2004 9:34AM", $matches );
//echo $matches[0] . "<br />";    // Displays "7/18/2004 9:34AM"
//echo $matches[1] . "<br />";    // Displays "7/18/2004"
//echo $matches[2] . "<br />";    // Displays "9:34AM"


/**
 * Referring to Previous Subpattern Matches
 */
//$myPets = "favoritePet=Lucky, Rover=dog, Lucky=cat";
//preg_match( '/favoritePet\=(\w+).*\1\=(\w+)/', $myPets, $matches );
//echo "My favorite pet is a " . $matches[2] . " called " . $matches[1] . ".";


/**
 * Matching Alternative Patterns
 */
/*
 * Regular expressions let you combine patterns (and subpatterns) with the | (vertical bar) character to
create alternatives. This is a bit like using the || (or) operator; if any of the patterns combined with the |
character match, the overall pattern matches.
 */

/*
 * The following pattern matches if the target string contains any one of the abbreviated days of the week
(mon–sun):
 */

//$day = "wed";
//echo preg_match( "/mon|tue|wed|thu|fri|sat|sun/", $day );   // Displays "1"

/*
 * You can also use alternatives within subpatterns, which is very handy. Here’s the earlier "date detection"
example, rewritten to be more precise:
 */
//echo preg_match( "/(jan|feb|mar|apr|may|jun|jul|aug|sep|oct|nov|dec)" ."\/\d{1,2}\/\d{2,4}/", "jul/15/2006" ); // Displays "1"


/**
 * Using Anchors to Match at Specified Positions
 */

/*
 *  say you wanted to make sure that a string started with one or more digits followed by a colon.
You might try this:
 */
//echo preg_match("/\d+\:/", "12: The String");   //Displays "1"

/*
 * The caret (^) symbol specifies that the rest of the pattern will only match at the start of the string.
 */
//echo preg_match("/^\d+/", "12: The String");
//echo preg_match("/^\d+/", "Die Hard 2: Die Harder");

/*
 * Similarly, you can use the dollar ($) symbol to anchor a pattern to the end of the string:
 */
//echo preg_match( "/\[(G|PG|PG-13|R|NC-17)\]$/", "The Sting [PG]" );     //Displays "1"
//echo preg_match( "/\[(G|PG|PG-13|R|NC-17)\]$/", "[PG] Amadeus" );       //Displays "0"


/*
 * By combining the two anchors, you can ensure that a string contains only the desired pattern,
nothing more:
 */
//echo preg_match("/^Hello, \w+$/", "Hello, world");
//echo preg_match("/^Hello, \w+$/", "Hello, world!");

/*
 *  \b and \B are handy when searching text for complete words:
*/
//    echo preg_match( "/over/", "My hovercraft is full of eels" );   //Displays "1"
//    echo preg_match( "/\bover\b/", "My hovercraft is full of eels" );   //Displays "0"
//    echo preg_match( "/\bover\b/", "One flew over the cuckoo’s nest" );     //Displays "1"
/*
When using \b, the beginning or end of the string is also considered a word boundary:
*/
//echo preg_match( "/\bover\b/", "over and under" );  // Displays "1"


/*
 * By using the \b anchor, along with alternatives within a subexpression, it’s possible to enhance the
earlier "date detection" example further, so that it matches only two- or four -digit years (and not three-
digit years):
 */
//echo preg_match( "/\b(jan|feb|mar|apr|may|jun|jul|aug|sep|oct|nov|dec)" ."\/\d{1,2}\/(\d{2}|\d{4})\b/", "jul/15/2006" ); // Displays "1"
//echo preg_match( "/\b(jan|feb|mar|apr|may|jun|jul|aug|sep|oct|nov|dec)" ."\/\d{1,2}\/(\d{2}|\d{4})\b/", "jul/15/206" ); // Displays "0"


