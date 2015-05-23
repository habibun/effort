<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 23/5/2015
 * Time: 12:12 AM
 */

// Set up debug mode
define("DEBUG_MODE", true);


// Database connection constants
function debug_print($message) {
    if (DEBUG_MODE) {
        echo $message;
    }
}

/*The require_once line checks whether the specifid script has already been included
(through include or require). It only includes the script if hasn’t already been loaded.*/

// database_connection.php and any other utility scripts
require_once '../scripts/app_config.php';