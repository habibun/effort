<?php
/**
 * Created by PhpStorm.
 * User: habibun
 * Date: 8/30/15
 * Time: 10:05 AM
 */

function draw($n)
{
    if ($n == 1) {
        $zero = 0;
        $one = strlen($n);
//    echo $nLenght;
        for ($i= 0; $i < $n; $n--) {
            echo '<pre>' . $zero . $zero. $n. $zero. $zero.  '</pre>';
        }
    }
    if ($n == 3) {

    }

    if ($n == 5) {

    }
}

draw(1);