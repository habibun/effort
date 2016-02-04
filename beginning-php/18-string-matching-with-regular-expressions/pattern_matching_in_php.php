<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 2/6/16
 * Time: 4:02 PM
 */

//For example, to match the word “world” anywhere in the string “Hello, world!” you can write:
//echo preg_match("/world/", "Hello, world!"); //Display 1


//To match “world” only at the start of the string, you’d write:
//echo preg_match("/^world/", "Hello, world!");

//To access the text that was matched, pass an array variable as the third argument:
//echo preg_match("/world/", "Hello, world!", $match);
//echo $match[0];

/* To find out the position of the match, pass PREG_OFFSET_CAPTURE as the fourth argument.
 The array
then contains a nested array whose first element is the matched text and whose second element is the
position:
*/
//echo preg_match("/world/", "Hello, world!", $match, PREG_OFFSET_CAPTURE);
//echo $match[0][0];
//echo $match[0][1];

/*
 * Finally, to start the search from a particular position in the target string, pass the position as the fifth
argument:
 */
echo preg_match("/world/", "Hello, world",$match, 0, 8);
