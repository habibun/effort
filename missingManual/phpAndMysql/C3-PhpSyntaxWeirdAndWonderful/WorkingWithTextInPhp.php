<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 16/5/2015
 * Time: 2:48 PM
 */

//str_replace — Replace all occurrences of the search string with the replacement string
$text = 'my name is habibun';
$result = str_replace('habibun', 'jony', $text);
//echo $result;


//trim — Strip whitespace (or other characters) from the beginning and end of a string
$space = " this is a test ";
$space = trim($space);
//echo $space;


//strpos — Find the position of the first occurrence of a substring in a string

/*The strpos()  function, like most functions in PHP, can return two totally different things: a number
indicating a position within the search string, or the value false.
*/
$str = "my name is jony";
$str = strpos($str, 'jony');
//echo $str;

//substr — Return part of a string
$subs = substr("jony",2);

$jony = 'jony';
$rony = 0;
$subs = substr($jony, $rony+1);
echo $subs;