<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/12/14
 * Time: 9:11 PM
 */
$xml = simplexml_load_file("test.xml");
echo $xml->getName() . "<br />";
foreach ($xml->children() as $child) {
    echo $child->getName() . ": " . $child . "<br />";
}
?>