<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/31/15
 * Time: 8:37 PM
 */

/**
 * Use pack() to store binary data in a string:
 */
$packed = pack('S4',1974,106,28225,32725);

/**
 * Use unpack() to extract binary data from a string:
 */
//$nums = unpack('S4',$packed);
//print_r($nums);

/**
 * In unpack(), format characters and their count can be followed by a string to be used
as an array key. For example:
 */
//$nums = unpack('S4num',$packed);
//print_r($nums);

/**
 * Multiple format characters must be separated with / in unpack():
 */
//$nums = unpack('S1a/S1b/S1c/S1d',$packed);
//print_r($nums);

/**
 * You can convert between data types with unpack(). This example fills the array $as
cii with the ASCII values of each character in $s:
 */
$s = 'platypus';
$ascii = unpack('c*',$s);
print_r($ascii);



