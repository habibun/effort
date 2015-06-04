<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 16/5/2015
 * Time: 9:32 PM
 */

//numeric array
$fruit[0] = 'mango';
$fruit[1] = 'coconut';
//echo $fruit[1];

//associative array
$info['firstName'] = 'habibun';
$info['lastName'] = 'noby';
echo $info['firstName'];

//the $_REQUEST variable is an array


//foreach
foreach ($_REQUEST as $value) {
    echo '<p>'.$value.'</p>';
}

//foreach with key value
foreach ($_REQUEST as $key => $value) {
    echo '<p>' . $key . ':' . $value;
}