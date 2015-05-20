<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 19/5/2015
 * Time: 8:07 PM
 */
//In PHP, if you want to search by using regular expressions, you use the preg_match function
$string_to_search = "Martin OMC-28LJ";
$regex = "/OM/";
$num_matches = preg_match($regex, $string_to_search);

//echo $num_matches;

/*if ($num_matches > 0) {
    echo 'Found a match!';
}else{
    echo 'No match. Sorry.';
}*/

//regular expression begin and end with a forward slash
$regex = "/OM/";

//regular expression case sensitive

//preg match never return anything other than 0 or 1.
//It returns 0 if there are no matches, and 1 upon the fist match, and then it simply stops searching

/*
If you want to fid all the matches, you can use preg_match_all.
Thus, preg_match("/Mr/", "Mr. Mranity") will return 1,
but preg_match_all("/Mr/", "Mr. Mranity") will return 2.
*/


//Search for One String...Or Another

/*First, though, notice the wrinkle: the backslash (\). This is escaping the period, because that period usually means in a regular expression, “match any single character.”
But in this case, you want to match an actual period. So, \.  will match a period, and
nothing but a period.*/

$se = "Mr. Smith"."Dr. Smith";
 $regex2 = "/(Mr|Dr)\. Smith/";
$re = preg_match_all($regex2,$se);
echo  $re;
if ($re > 0) {
    echo 'Found a match!';
}else{
    echo 'No match. Sorry.';
}


/*2. Then, the if condition: it begins with preg_match.
There’s no need to use preg_match_all, because you only care if the search
strings are found at all, not if they’re found more than once.
*/


//trim remove whitespace form start and end
trim(' jony');

/*just add the carat (^) to the beginning of your
search string, which basically says, “at the beginning.”
*/
$query_text = $_REQUEST['query'];

if (preg_match("/^(CREATE|INSERT|UPDATE|DELETE|DROP)/",
    trim(strtoupper($query_text)))) {
    $return_rows = false;
}

//(i)for ignoring case sensitivity
$return_rows = true;
if (preg_match("/^(CREATE|INSERT|UPDATE|DELETE|DROP)/i",
    trim($query_text))) {
    $return_rows = false;
}

/*That one little carat character makes all the difference. You can do the same thing
at the end of the search string by using the $ character, as demonstrated here:*/
/*just add the carat (^) to the beginning of your
search string, which basically says, “at the beginning.”*/

// Does NOT match
echo "Matches: " . preg_match("/^(Mr|Dr). Smith$/","Dr. Smith ") . "\n";

// Matches
echo "Matches: " . preg_match("/^(Mr|Dr). Smith$/","Dr. Smith") . "\n";

/*But, that requires a space. How can you say that more than one space is okay? That’s
when you need + (plus) character. The + character says, “The thing that came just
before me can appear any number of times.”*/

echo "Matches: " . preg_match("/^ (MR|DR). sMiTH$/i",
        " Dr. Smith") . "\n";
// Does NOT match
echo "Matches: " . preg_match("/^ (MR|DR). sMiTH$/i",
        " Dr. Smith") . "\n";
// Matches
echo "Matches: " . preg_match("/^ +(MR|DR). sMiTH$/i",
        " Dr. Smith") . "\n";

/*Uh oh! Apparently “any number of spaces” for + really means “any non-zero number
of spaces.” If you are okay with nothing or any number of characters, use *
*/

// Does NOT match
echo "Matches: " . preg_match("/^ +(MR|DR). sMiTH$/i",
        "Dr. Smith") . "\n";


// Matches
echo "Matches: " . preg_match("/^ *(MR|DR). sMiTH$/i",
        "Dr. Smith") . "\n";

/*
 * These are all just varying flavors of new lines. \n is called the line feed character, and \r is called
a carriage return. In general, Windows uses \r\n, Unix and Linux use \n, and Macs (in particular, older, pre-OS
X Macs) use \r.
*/


/*You could do something like (\r|\n| )*, which is using the |  to represent “or” again,
and then the * applies to the entire group. But when you’re dealing with just single
characters, you can skip the |  and just put all the allowed characters into a set, which
is indicated by square brackets ([  and ] ), as demonstrated here:*/

$return_rows = true;
if (preg_match("/^[ \t\r\n]*(CREATE|INSERT|UPDATE|DELETE|DROP)/i",
    $query_text)) {
    $return_rows = false;
}

/*This code handles spaces, the two flvors of new lines, and tosses in \t for tab
characters. No matter how many leading spaces, tabs, or new lines there are, your
regular expression is happy to handle them. In fact, this sort of whitespace matching
is so common that regular expressions can use \s as an abbreviation for [ \t\r\n] .
And, you can simplify things even further:*/

$return_rows = true;
if (preg_match("/^\s*(CREATE|INSERT|UPDATE|DELETE|DROP)/i",
    $query_text)) {
    $return_rows = false;
}


