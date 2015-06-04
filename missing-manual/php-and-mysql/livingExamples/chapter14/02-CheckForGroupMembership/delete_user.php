<?php

require_once '../scripts/app_config.php';
require_once '../scripts/authorize.php';
require_once '../scripts/database_connection.php';

// Only Administrators can access this page
authorize_user(array("Administrators"));

// Get the user ID of the user to delete
$user_id = $_REQUEST['user_id'];

// Build the DELETE statement
$delete_query = sprintf("DELETE FROM php_and_mysql_users WHERE user_id = %d", $user_id);

// Delete the user from the database
mysql_query($delete_query);

// Redirect to show_users to re-show users (without this deleted one)
$msg = "The user you specified has been deleted.";
header("Location: show_users.php?success_message={$msg}");
exit();
?>
