<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/25/15
 * Time: 8:43 PM
 */

//counts the vowels in a string.
$string = "This weekend, I'm going shopping for a pet chicken.";
$vowels = 0;
for($i = 0; $j= strlen($string), $i < $j; $i++){
    if(strstr('aeiouAEIOU',$string[$i])){
        $vowels++;
    }
}
print $vowels;

//The Look and Say sequence
function lookandsay($s) {
// initialize the return value to the empty string
    $r = '';
// $m holds the character we're counting, initialize to the first
// character in the string
    $m = $s[0];
// $n is the number of $m's we've seen, initialize to 1
    $n = 1;
    for ($i = 1, $j = strlen($s); $i < $j; $i++) {
// if this character is the same as the last one
        if ($s[$i] == $m) {
// increment the count of this character
            $n++;
        } else {
// otherwise, add the count and character to the return value
            $r .= $n.$m;
// set the character we're looking for to the current one
            $m = $s[$i];
// and reset the count to 1
            $n = 1;
        }
    }
// return the built up string as well as the last count and character
    return $r.$n.$m;
}
for ($i = 0, $s = 1; $i < 10; $i++) {
    $s = lookandsay($s);
    print "$s\n";
}
