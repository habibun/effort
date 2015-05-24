<?php

//required file
require 'database_connection.php';
require_once 'app_config.php';

//addition variable
$uploadPath = '';
$userPic = 'user_pic';

//potential php upload error
$phpErrors = [
    1 => 'Maximum file size in php.ini exceeded',
    2 => 'Maximum file size in HTML form exceeded',
    3 => 'Only part of the file was uploaded',
    4 => 'No file was selected to upload.'
];

//get input from all field
$firstName = $_REQUEST['first_name'];
$lastName = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$facebookUrl = $_REQUEST['facebook_url'];
$twitterUrl = $_REQUEST['twitter_handle'];
$bio = $_REQUEST['bio'];

//make sure we didn't have a error uploading the image
($_FILES[$userPic]['error'] == 0);


//is the file the result of the valid upload
is_uploaded_file($_FILES[$userPic]['tmp_name']);


//is this actually a image file
getimagesize($_FILES[$userPic]['tmp_name']);

//name the file uniquely
$now = time();
while(file_exists( $fileName = $uploadPath.$_FILES[$userPic]['name'])){
    $now++;
}

//finally move the file to it's permanent location
move_uploaded_file($_FILES[$userPic]['tmp_name'],$fileName);

//query for insert
$insetData = "insert into php_and_mysql_users (first_name, last_name, email, facebook_url, twitter_handle, bio, user_pic_path)
 VALUES ('{$firstName}','{$lastName}','{$email}','{$facebookUrl}','{$twitterUrl}','{$bio}','{$fileName}')";

//insert data into the database
mysql_query($insetData) or die (mysql_error());

header('Location: show_user.php?user_id='.mysql_insert_id());
?>