<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 21/5/2015
 * Time: 8:37 PM
 */

//insert data
$insert_sql = "INSERT INTO php_and_mysql_users(first_name,last_name,email,facebook_url,twitter_handle) VALUES
('{$first_name}','{$last_name}','{$email}','{$facebook_url}','{$twitter_url}')";

$result = mysql_query($insert_sql) or die(mysql_error());