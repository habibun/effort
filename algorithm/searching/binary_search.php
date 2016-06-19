<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/20/16
 * Time: 12:22 AM
 */

$data = array(12, 23, 34, 45, 56, 76, 89, 98, 100, 145);
define("SIZE", 10);

$item;
$beg = 0;
$end = SIZE -1 ;
$mid;

$mid = (int)(($beg + $end) / 2);
start:

echo "\nEnter which number do you search ? ";
$handle = fopen("php://stdin", "r");
$item = fgets($handle);

while($beg < $end && $item != $data[$mid]){
    if($item < $data[$mid]){
        $end = $mid - 1;
    } else {
        $beg = $mid + 1;
    }
    $mid = (int)(($beg + $end) / 2);
}

if($data[$mid] == $item){
    printf("\nThe item is in the array at location : %d", $mid);
} else {
    echo "\nThe item is not in the array";
}

echo "\n\nDo you want to continue(y/n):";
$handle = fopen("php://stdin", "r");
$ch = fgets($handle);

if($ch == 'y' || $ch == 'Y'){
    goto start;
} else {
    exit(0);
}

