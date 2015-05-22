<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 22/5/2015
 * Time: 12:33 PM
 */

// Redirect the user to the page that displays user information
header("Location: show_user.php");

# // Redirect the user to the page that displays user information with user_id
header("Location: show_user.php?user_id=" . mysql_insert_id());
exit();


//a function to get the ID of the last row inserted into a database table with an AUTO_INCREMENT column
mysql_insert_id();

#You know that each occurrence of Enter is represented by \r or \n or some combination of the two
$bio            = preg_replace("/[\r\n]+/", "</p><p>", $row['bio']);
