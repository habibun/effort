<?php
/**
 * Created by PhpStorm.
 * User: habibun
 * Date: 10/1/15
 * Time: 3:02 PM
 */

// the backslash(\)
$string = "this is a [templateVar]";

preg_match_all("/[\[\]]/",$string, $matches);

foreach($matches[0] as $value)
{
//    echo $value;
}

//  the . dot, or full stop
$string = 'sox at noon taxes';

//dot matches any character except a line break such as \r and \n
preg_match_all("/s.x/", $string, $matches);

foreach ($matches as $value)
{
//    echo $value;
}

//Now let’s see if we can match a new line character, for our example we will use \n.
$string = 'sox'."\n".'at'."\n".'noon'."\n".'taxes'."\n";
//echo nl2br($string);
//echo preg_match_all("/\s/", $string, $matches);

//asterix * character
