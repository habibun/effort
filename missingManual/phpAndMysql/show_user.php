<?php

require_once 'database_connection.php';

// Build the SELECT statement
$select_query = "SELECT first_name,last_name,email FROM php_and_mysql_users";

$result = mysql_query($select_query);

while ($row = mysql_fetch_array($result)) {

    echo '<pre>'.$row[0].'</pre>';
}
