<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 18/5/2015
 * Time: 9:09 PM
 */
require 'app_config.php';
mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
    or handle_error('there is a probke',mysql_error());

mysql_select_db(DATABASE_NAME)
    or die("<p>Error selecting the database " . DATABASE_NAME . mysql_error() . "</p>");

?>