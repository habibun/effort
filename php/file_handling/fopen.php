<?php
//the open() function.txt is used to open files in PHP.

//the first parameter of this function.txt contains the name of the file to be
//and the second parameter specifies in which mode the file should be opened:


$file = fopen("../uses_file/welcome.txt","r")
or exit("Unable to open file!");
;
?>
