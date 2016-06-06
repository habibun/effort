<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/26/15
 * Time: 12:08 AM
 */

function str_rand($length = 32, $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'){
    if(!is_int($length) || $length < 0){
        return false;
    }
    $characters_length = strlen($characters) -1 ;
    $string = '';
    for ($i = $length; $i > 0; $i--){
        $string .= $characters[mt_rand(0, $characters_length)];
    }
    return $string;
}

print str_rand(16, '.-');