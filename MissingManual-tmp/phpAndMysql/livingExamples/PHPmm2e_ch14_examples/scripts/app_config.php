<?php

// Set up debug mode
define("DEBUG_MODE", true);

// Site root
define("SITE_ROOT", "/phpMM2/");

// Location of web files on host
define("HOST_WWW_ROOT", "/home4/yellowta/public_html/phpMM2/");

// Database connection constants
define("DATABASE_HOST", "localhost");
define("DATABASE_USERNAME", "yellowta_brett");
define("DATABASE_PASSWORD", "8~3Myh9?J_mI");
define("DATABASE_NAME", "yellowta_phpmm2");

function debug_print($message) {
  if (DEBUG_MODE) {
    echo $message;
  }
}

function handle_error($user_error_message, $system_error_message) {
  session_start();
  $_SESSION['error_message'] = $user_error_message;
  $_SESSION['system_error_message'] = $system_error_message;
  header("Location: " . SITE_ROOT . "scripts/show_error.php"); 
  exit();
}

function get_web_path($file_system_path) {
  return str_replace($_SERVER['DOCUMENT_ROOT'], '', $file_system_path);
}
?>
