<?php

require_once '../scripts/app_config.php';
require_once '../scripts/database_connection.php';

// Build the SELECT statement
$select_users =
  "SELECT user_id, first_name, last_name, email " .
  "  FROM users";

// Run the query
$result = mysql_query($select_users);

// See if there's a message to display
if (isset($_REQUEST['success_message'])) {
  $msg = $_REQUEST['success_message'];
}
?>

<html>
 <head>
  <link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
    function delete_user(user_id) {
      if (confirm("Are you sure you want to delete this user?" +
                  "\nThere's really no going back!")) {
        window.location = "delete_user.php?user_id=" + user_id;
      }
    }

<?php if (isset($msg)) { ?>
    window.onload = function() {
      alert("<?php echo $msg ?>");
    }
<?php } ?>
  </script>
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
