<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 18/5/2015
 * Time: 12:01 AM
 */

//create constant use all uppercase to look different than variable
//You can’t use the {  and } inside your quotes to print out constants
define(DATABASE_HOST, 'localhost');

//require stop execution when not found the file(recommended)
require '../app_config.php';

//require don't stop execution when not found this file
include '../app_config.php';

