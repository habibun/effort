<?php
//it is used to remove php and html tags into string

$text = '<p>Test paragraph.</p><! --  Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
// Test paragraph. Other text
// Allow <p> and <a>
echo strip_tags($text, '<p><a>' );
// <p>Test paragraph.</p> <a href="#fragment">Other text</a>
?>