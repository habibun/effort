<?php

function myErrorHandler( $errno, $errstr, $errfile, $errline, $errcontext ) {

  $levels = array (
    E_WARNING => "Warning",
    E_NOTICE => "Notice",
    E_USER_ERROR => "Error",
    E_USER_WARNING => "Warning",
    E_USER_NOTICE => "Notice",
    E_STRICT => "Strict warning",
    E_RECOVERABLE_ERROR => "Recoverable error",
    E_DEPRECATED => "Deprecated feature",
    E_USER_DEPRECATED => "Deprecated feature"
  );

  $message = date( "Y-m-d H:i:s - " );
  $message .= $levels[$errno] . ": $errstr in $errfile, line $errline\n\n";
  $message .= "Variables:\n";
  $message .= print_r( $errcontext, true ) . "\n\n";

  if ( $errno == E_WARNING or $errno == E_USER_WARNING ) {
      error_log( $message, 1, "joe@example.com" );
  } else {
      error_log( $message, 3, "/home/joe/non_serious_errors.log" );
  }
}

set_error_handler( "myErrorHandler" );
trigger_error( "Simulated warning", E_USER_WARNING );
trigger_error( "Simulated notice", E_USER_NOTICE );

?>

