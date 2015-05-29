<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 29/5/2015
 * Time: 12:55 PM
 */

// See if there's a message to display
if (isset($_REQUEST['success_message'])) {
    $msg = $_REQUEST['success_message'];
}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript">
        //php works within script tag
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
</body>
</html>

