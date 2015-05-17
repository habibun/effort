<?php

// Set up debug mode
define("DEBUG_MODE", true);

// Site root
define("SITE_ROOT", "/phpMM2/");

// Location of web files on host
define("HOST_WWW_ROOT", "/home4/yellowta/public_html/phpMM2/");

// Database connection constants
define("DATABASE_HOST", "your.database.host");
define("DATABASE_USERNAME", "your-username");
define("DATABASE_PASSWORD", "your-password");
define("DATABASE_NAME", "your-database-name");

function debug_print($message) {
  if (DEBUG_MODE) {
    echo $message;
  }
}

function handle_error($user_error_message, $system_error_message) {
  header("Location: " . SITE_ROOT . "scripts/show_error.php?" .
         "error_message={$user_error_message}&" . 
         "system_error_message={$system_error_message}");
  exit();
}

function get_web_path($file_system_path) {
  return str_replace($_SERVER['DOCUMENT_ROOT'], '', $file_system_path);
}
?>
