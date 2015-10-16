<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/16/15
 * Time: 9:45 PM
 */
//include php file using require once inside another
require_once('classes/Person');
$p = new Person4();

//auto load
function __autoload($className)
{
    $className = str_replace("..", "", $className);
    require_once("classes/$className");
}
