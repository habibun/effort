<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/24/15
 * Time: 12:43 AM
 */

//using strpos
if(strpos($_POST['email'],'@') === false){
    print 'There was no @ in the e-mail address!';
}