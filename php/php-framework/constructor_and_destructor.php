<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/14/16
 * Time: 12:12 AM
 */

/**
 * Constructor Method
 */
class WebcoachbdProduct{
    public $title;
    public $number;
    public function __construct($theTitle,$theNumber){
        $this->title = $theTitle;
        $this->number = $theNumber;
    }
    public function getTutorial(){
        echo "Webcoachbd provide ".$this->number." tutorial on ". $this->title ."<br/>";
    }

}
$productObject = new WebcoachbdProduct("OOPHP", 50);
$productObject->getTutorial();


/**
 * Destructor Method
 */
class WebcoachbdProduct2{
    public function __construct(){
        echo "Constructor called first"."<br/>";
    }
    public function __destruct(){
        echo "Finally distructor called";
    }


}
$productObject = new WebcoachbdProduct2();
?>

