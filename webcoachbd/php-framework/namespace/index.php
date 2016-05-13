<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/18/16
 * Time: 9:09 PM
 */

require_once 'class.TestDemo.php';
require_once 'class.Webcoachbd.php';

$objWeb = new OOPHP\Webcoachbd();
$objWeb->getTutorial(' OOPHP');

$objFrm = new Framework\Webcoachbd();
$objFrm->getTutorial(' Framework');

/**
 * Use Multiple namespace in single file
 */
namespace Framework {
    class Webcoachbd2 {
        public $title = "default value";
        public function getTutorial($name) {
            echo "Webcoachbd provide massive tutorial on" . $name;
        }
    }
}
namespace OOPHP {
    class Webcoachbd2 {
        public $title = "different value";
        public function getTutorial($name) {
            echo "Webcoachbd provide massive tutorial on" . $name . "<br/>";
        }
    }
}
