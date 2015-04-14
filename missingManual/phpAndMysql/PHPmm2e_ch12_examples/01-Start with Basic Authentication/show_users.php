<?php

require_once '../scripts/app_config.php';
require_once '../scripts/database_connection.php';
require_once '../scripts/view.php';

define(VALID_USERNAME, "admin");
define(VALID_PASSWORD, "super_secret");

if (!isset($_SERVER['PHP_AUTH_USER']) ||
    !isset($_SERVER['PHP_AUTH_PW']) ||
    ($_SERVER['PHP_AUTH_USER'] != VALID_USERNAME) ||
    ($_SERVER['PHP_AUTH_PW'] != VALID_PASSWORD)) {
  header('HTTP/1.1 401 Unauthorized');
  header('WWW-Authenticate: Basic realm="The Social Site"');
  exit("You need a valid username and password to be here. " .
       "Move along, nothing to see.");
}

// Build the SELECT statement
$select_users =
  "SELECT user_id, first_name, last_name, email " .
  "  FROM users";

// Run the query
$result = mysql_query($select_users);

// Display the view to users
  $delete_user_script = <<<EOD
function delete_user(user_id) {
  if (confirm("Are you sure you want to delete this user? " +
              "There's really no going back!")) {
    window.location = "delete_user.php?user_id=" + user_id;
  }
}
EOD;
  page_start("Current Users", $delete_user_script,
             $_REQUEST['success_message'], $_REQUEST['error_message']);
?>

  <div id="content">
   <ul>
     <?php
       while ($user = mysql_fetch_array($result)) {
         $user_row = sprintf(
           "<li><a href='show_user.php?user_id=%d'>%s %s</a> " .
           "(<a href='mailto:%s'>%s</a>) " .
           "<a href='javascript:delete_user(%d);'><img " .
              "class='delete_user' src='../images/delete.png' " .
              "width='15' /></a></li>",
           $user['user_id'], $user['first_name'], $user['last_name'],
           $user['email'], $user['email'], $user['user_id']);
         echo $user_row;
       }
     ?>
   </ul>
  </div>
  <div id="footer"></div>
 </body>
</html>
