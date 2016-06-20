<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/20/16
 * Time: 11:18 PM
 */

/* Program to implement Insertion Sort Algorithm */

echo "\nEnter the number of elements:";
$handle = fopen("php://stdin", "r");
$n = fgets($handle);

echo "\nEnter $n integers:";

$a[0] = -32768;

for ($i = 1; $i <= $n; $i++) {
    $a[$i];
}

for ($k = 2; $k <= $n; $k++) {
    $temp = $a[$k];
    $loc = $k - 1;
    while($temp < $a[$loc]){
        $a[$loc + 1] = $a[$loc];
        $loc--;
    }
    $a[$loc + 1] = $temp;
}
echo "\n\nSorted elements are....\n";
for ($i = 1; $i <= $n; $i++) {
    echo "\t$a[$i]";
}