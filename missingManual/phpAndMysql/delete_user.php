<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 29/5/2015
 * Time: 12:26 AM
 */

require_once 'app_config.php';
require_once 'database_connection.php';

$user_id = $_REQUEST['user_id'];

$deleteUser = 'delete from php_and_mysql_users where user_id = '.$user_id;

$doDelete = mysql_query($deleteUser);

header('Location: show_users.php');