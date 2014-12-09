<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/5/14
 * Time: 11:34 AM
 */
$line = "Webcoachbd is a informative site about web development";
if(preg_match("/\bwebcoachbd\b/i",$line)){
    echo "match found";
}else{
    echo "match not found";
}
?>