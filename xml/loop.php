<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/12/14
 * Time: 8:16 PM
 */
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");
$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
    print $item->nodeName . " = " . $item->nodeValue . "<br />";
}
?>