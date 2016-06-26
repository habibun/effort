<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/26/16
 * Time: 11:01 PM
 */

/* Program to implement Bubble Sort Algorithm */

$data = array(2,5,1,3,4);
$dataLength = count($data);

$i = 0;

for($i = 0; $i < $dataLength; $i++){
    for ($j = $i + 1; $j < $dataLength; $j++) {
        if ($data[$i] > $data[$j]) {
            $temp = $data[$i];
            $data[$i] = $data[$j];
            $data[$j] = $temp;
        }
    }

    for ($k = 0; $k < $dataLength; $k++) {
        echo $data[$k];
    }
    echo "\n";
}
/*
for ($k = 0; $k < $dataLength; $k++) {
    echo $data[$k];
}*/
