<?php
// Database connection constants
define("DATABASE_HOST", "xcv");
define("DATABASE_USERNAME", "root");
define("DATABASE_PASSWORD", "");
define("DATABASE_NAME", "effort");

// Set up debug mode
define('DEBUG_MODE',true);

// Site root



function printDebug($message){
    if (DEBUG_MODE) {
        echo $message;
    }
}
function handle_error($user_error_message, $system_error_message) {
    header("Location: ". "show_error.php?" .
        "error_message={$user_error_message}&" .
        "system_error_message={$system_error_message}");
    exit();
}
?>