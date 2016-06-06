<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/3/15
 * Time: 3:42 PM
 */

//Creating the Fibonacci Sequence with Recursion
$iterations = 10;

function fibonacci($n)
{
    if (($n == 0) || ($n == 1)) return $n;
    return fibonacci($n - 2) + fibonacci($n - 1);
}

for ($i = 0; $i <= $iterations; $i++) {
    echo "F{$i} = " . fibonacci($i) . "\n";
}