<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 3/17/16
 * Time: 8:50 PM
 */

/**
 * Including Files
 */
function animalSpeak($animal){
    $sounds = array("cat" => "meow", "dog" => "woof", "mouse" => "squeak");

    if(array_key_exists($animal, $sounds)){
        return $sounds[$animal];
    } else{
        return false;
    }
}