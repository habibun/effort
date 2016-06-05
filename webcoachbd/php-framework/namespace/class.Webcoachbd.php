<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/18/16
 * Time: 9:07 PM
 */
namespace Framework;

class Webcoachbd {
    public $title = "default value";
    public function getTutorial($name) {
        echo "Webcoachbd provide massive tutorial on" . $name;
    }
}