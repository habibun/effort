<?php


require_once 'app_config.php';
require_once 'database_connection.php';
require_once 'view.php';

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

if(isset($_REQUEST['confirm_message'])){
    $msg = $_REQUEST['confirm_message'];
}


$getAllUser = 'SELECT user_id, first_name, last_name FROM php_and_mysql_users';

$showResult = mysql_query($getAllUser);

while ($row = mysql_fetch_array($showResult)) {
    $user_row = sprintf( '<ul>
                <li>'.$row['first_name'].' '.$row['last_name'].' '.
        '<a href="javascript:deleteUser(%d)">delete</a>'.'</li></ul>',$row['user_id']);
    echo $user_row;
}
?>
<html>
<head>
    <title>show all user</title>
    <script>
        function deleteUser(user_id) {
            if(confirm('are you sure?'))
            {
                window.location = "delete_user.php?user_id=" + user_id;
            }
        }

        <?php if(isset($msg)){?>
        window.onload = function(){
            alert("<?php echo $msg; ?> ");
         }

<?php } ?>


    </script>


</head>
<body>

</body>
</html>
