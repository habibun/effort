<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 16/5/2015
 * Time: 12:54 AM
 */
echo "Hello there. So I hear you're learning to be a PHP programmer!\n";
echo "Why don't you type in your name for me:\n";
$name = trim(fgets(STDIN));
echo "\nThanks, " . $name . ", it's really nice to meet you.\n\n";
?>