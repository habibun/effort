<?php

$orginalLength = 4;

for($i=0; $orginalLength > strlen($i); $i++ ){
    if(strlen($i) <= 2)continue;
    echo $i.'<br>';
}