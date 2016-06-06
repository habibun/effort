<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/29/15
 * Time: 9:41 PM
 */

/**
 * Use explode() if what separates the pieces is a constant string:
 */
$words = explode(' ','My sentence is not very complicated');

/**
 * Use preg_split() if you need a Perl-compatible regular expression to describe the separator:
 */
$words = preg_split('/\d\. /','my day: 1. get up 2. get dressed 3. eat toast');
$lines = preg_split('/[\n\r]+/',$_POST['textarea']);

/**
 * Use the /i flag to preg_split() for case-insensitive separator matching:
 */
$words = preg_split('/ x /i','31 inches x 22 inches X 9 inches');


/**
 *
 */
$dwarves = 'dopey,sleepy,happy,grumpy,sneezy,bashful,doc';
$dwarf_array = explode(',',$dwarves);


/**
 *
 */
$math = "3 + 2 / 7 - 9";
$stack = preg_split('/ *([+\-\/*]) */',$math,-1,PREG_SPLIT_DELIM_CAPTURE);
print_r($stack);
