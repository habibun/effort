<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/31/15
 * Time: 11:29 PM
 */

/**
 * Use is_numeric() to discover whether a variable contains a number:
 */
/*foreach ([5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200']
         as $maybeNumber) {
    $isItNumeric = is_numeric($maybeNumber);
    $actualType = gettype($maybeNumber);
    print "Is the $actualType $maybeNumber numeric? ";
    if (is_numeric($maybeNumber)) {
        print "yes";
    } else {
        print "no";
    }
    print "\n";
}*/

/**
 * To strip the thousands separators from your number before calling is_numeric(), use str_replace():
 */
$number = "5,100";

//this is numeric() call return false
$withCommas = is_numeric($number);

//this is numeric() call return true
$witOutCommas = is_numeric(str_replace(',','',$number));

