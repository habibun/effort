<?php
class human {//{this is starting bracket 1 for this class
    public $p=0;

    function _construct()
    {
        $p=15;
        echo $p;
    }

}//{ this is ending bracket 2 for this class human
$akash= new human();//call constructor automatically when create object
//do not need to call seperately construct
?>