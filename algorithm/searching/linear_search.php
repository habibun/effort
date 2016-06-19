<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/18/16
 * Time: 11:30 PM
 */

$data = array(45,78,35,90,26,45,32,25,80,100);

$n = count($data);
$loc = 0;

echo "Enter which number do you want to search?:";
$handle = fopen("php://stdin", "r");
$item = fgets($handle);

$data[$n] = $item;

while($data[$loc] != $item){
    $loc++;
}

if($loc < $n)
    echo "The number is in the array.";

else
    echo "The number is not in the array.";