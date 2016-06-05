<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/14/16
 * Time: 10:28 PM
 */
class WebcoachbdProduct{
    public $tutorial = "HTML to SEO";
    private $resource = "forum images";
    protected $profile = "users profile";
    public function codeTester(){
        echo $this->tutorial."<br/>";
        echo $this->resource."<br/>";
        echo $this->profile."<br/>";
    }
}
$productObject = new WebcoachbdProduct();
$productObject->codeTester();
echo $productObject->tutorial;
?>
