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

/*That one little carat character makes all the diffrence. You can do the same thing
at the end of the search string by using the $ character, as demonstrated here:*/

// Does NOT match
echo "Matches: " . preg_match("/^(Mr|Dr). Smith$/","Dr. Smith ") . "\n";

// Matches
echo "Matches: " . preg_match("/^(Mr|Dr). Smith$/","Dr. Smith") . "\n";

