<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 6/20/16
 * Time: 11:18 PM
 */

/* Program to implement Insertion Sort Algorithm */

$data = array(2,1,8,5,4);

$length = count($data);

for ($i = 1; $i<$length; $i++){

    $j = $i;

    while($data[$j]<$data[$j-1]  && $j>0){
        $temp = $data[$j];
        $data[$j] = $data[$j-1];
        $data[$j-1] = $temp;
        $j--;
    }

    /*for ($k = 0; $k < $length; $k++){
        echo $data[$k],"\n";
    }*/
}

for($i=0;$i<$length; $i++){
    echo $data[$i];
}

