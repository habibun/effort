<?php

require_once '../scripts/app_config.php';
require_once '../scripts/database_connection.php';

// Build the SELECT statement
$select_users =
  "SELECT user_id, first_name, last_name, email " .
  "  FROM users";

// Run the query
$result = mysql_query($select_users);
?>

<html>
 <head>
  <link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
  <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
  <div id="example">Current Users</div>

  <div id="content">
   <ul>
     <?php
       while ($user = mysql_fetch_array($result)) {
         $user_row = sprintf(
           "<li><a href='show_user.php?user_id=%d'>%s %s</a> " .
           "(<a href='mailto:%s'>%s</a>) " .
           "<a href='delete_user.php?user_id=%d'><img " .
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
