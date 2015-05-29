<?php


require_once 'app_config.php';
require_once 'database_connection.php';

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
