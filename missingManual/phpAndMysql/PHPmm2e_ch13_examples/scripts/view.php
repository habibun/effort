<?php

require_once 'app_config.php';

define("SUCCESS_MESSAGE", "success");
define("ERROR_MESSAGE", "error");

function page_start($title, $javascript = NULL,
                    $success_message = NULL, $error_message = NULL) {
  display_head($title, $javascript);
  display_title($title, $success_message, $error_message);
}

function display_head($page_title = "", $embedded_javascript = NULL) {
  echo <<<EOD
<html>
 <head>
  <title>{$page_title}</title>
  <link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
  <link href="../css/jquery.validate.password.css" rel="stylesheet"
        type="text/css" />
  <script type="text/javascript" src="../js/jquery-1.8.1.min.js"></script>
  <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
  <script type="text/javascript" 
          src="../js/jquery.validate.password.js"></script>
EOD;
  if (!is_null($embedded_javascript)) {
    echo "<script type='text/javascript'>" .
         $embedded_javascript .
         "</script>";
  }
  echo " </head>";
}

function display_title($title, $success_msg = NULL, $error_msg = NULL) {
echo <<<EOD
 <body>
  <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
  <div id="example">$title</div>
  <div id="menu">
    <ul>
      <li><a href="index.html">Home</a></li>
EOD;
  if (isset($_COOKIE['user_id'])) {
    echo "<li><a href='show_user.php'>My Profile</a>";
    echo "<li><a href='signout.php'>Sign Out</a></li>";
  } else {
    echo "<li><a href='signin.php'>Sign In</a></li>";
  }
echo <<<EOD
    </ul>
  </div>
EOD;
  display_messages($success_msg, $error_msg); 
}

function display_messages($success_msg = NULL, $error_msg = NULL) {
  echo "<div id='messages'>\n";
  if (!is_null($success_msg) && (strlen($error_msg) > 0)) {
    display_message($success_msg, SUCCESS_MESSAGE);
  }
  if (!is_null($error_msg) && (strlen($error_msg) > 0)) {
    display_message($error_msg, ERROR_MESSAGE);
  }
  echo "</div>\n\n";
}

function display_message($msg, $msg_type) {
  echo " <div class='{$msg_type}'>\n";
  echo "  <p>{$msg}</p>\n";
  echo " </div>\n";
}

?>
