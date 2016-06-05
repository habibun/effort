<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/13/16
 * Time: 10:55 PM
 */

/**
 * properties
 */
class WebcoachbdProduct{
    public $title = "default value";
    public $length;
}

/**
 * Method
 */

class WebcoachbdProduct2{
    public $title = " OOPHP";
    public $length;
    public function getTutorial($name = NULL){
        echo "Webcoachbd provide massive tutorial on". $this->title = $name."<br/>";
    }

}
$productObject = new WebcoachbdProduct();
$productObject->title = " Joomla";
echo $productObject->title."<br/>";
$productObject->getTutorial(' OOP');