<?php

require_once 'database_connection.php';

if (!isset($_SERVER['PHP_AUTH_USER']) ||
    !isset($_SERVER['PHP_AUTH_PW'])) {
  header('HTTP/1.1 401 Unauthorized');
  header('WWW-Authenticate: Basic realm="The Social Site"');
  exit("You need a valid username and password to be here. " .
       "Move along, nothing to see.");
}

// Look up the user-provided credentials
$query = sprintf("SELECT user_id, username FROM users " .
                 " WHERE username = '%s' AND " .
                 "       password = '%s';",
            mysql_real_escape_string(trim($_SERVER['PHP_AUTH_USER'])),
            mysql_real_escape_string(
              crypt(trim($_SERVER['PHP_AUTH_PW']),
                    $_SERVER['PHP_AUTH_USER'])));

$results = mysql_query($query);

if (mysql_num_rows($results) == 1) {
  $result = mysql_fetch_array($results);
  $current_user_id = $result['user_id'];
  $current_username = $result['username'];
} else {
  header('HTTP/1.1 401 Unauthorized');
  header('WWW-Authenticate: Basic realm="The Social Site"');
  exit("You need a valid username and password to be here. " .
       "Move along, nothing to see.");
}

?>
