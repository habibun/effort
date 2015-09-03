<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/1/15
 * Time: 8:13 PM
 */

$delta = 0.00001;

$a = 1.00000001;
$b = 1.00000000;
if (abs($a - $b) < $delta) {
    print '$a and $b are equal enough.';
}
