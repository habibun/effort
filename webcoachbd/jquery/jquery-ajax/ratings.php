<?php
$ip = $_SERVER['REMOTE_ADDR'];
$db = mysql_connect('localhost','root','');
mysql_select_db('effort',$db);
$query = 'INSERT INTO ratings(product_id,rating,client_ip) VALUES("'.$_GET['id'].'","'.$_GET['r'].'","'.$ip.'")';
$result = mysql_query($query);
?>
