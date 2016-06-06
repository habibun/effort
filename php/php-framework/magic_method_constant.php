<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/17/16
 * Time: 10:03 PM
 */

/**
 * ProductMagic Method
 */
class WebcoachbdProduct {

    public $title = "default value";
    private $_prod = array();

    public function __get($magic) {
        if (is_numeric($this->_prod[$magic])) {
            return FALSE;
        } else {
            return $this->_prod[$magic];
        }
    }

    public function __set($magic, $value) {
        $this->_prod[$magic] = $value;
    }
}

$productObject = new WebcoachbdProduct();
echo $productObject->title . '<br/>';
$productObject->testProperty = 'Bangladesh';
echo $productObject->testProperty;


/**
 * __toString() method
 */
class WebcoachbdProduct2 {

    public $title = "default value";
    public $length;

    public function getTutorial($name) {
        echo "Webcoachbd provide massive tutorial on" . $name;
    }
    public function __toString() {
        return $this->title;
    }
}

$productObject = new WebcoachbdProduct2();
echo $productObject;


/**
 * Class Constant
 */

class WebcoachbdProduct3 {

    public $title = "default value";
    const PI  = "3.1416";

    public function getTutorial($name) {
        echo "Webcoachbd provide massive tutorial on" . $name;
    }
}

$productObject = new WebcoachbdProduct3();
echo $productObject::PI;
?>
