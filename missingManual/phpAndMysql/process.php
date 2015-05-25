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

//query for insert
$insert_sql = sprintf("iNSERT iNTO users " .
    "(first_name, last_name, email, " .
    "bio, facebook_url, twitter_handle) " .
    "VALUES ('%s', '%s', '%s', '%s', '%s', '%s');",
    mysql_real_escape_string($first_name),
    mysql_real_escape_string($last_name),
    mysql_real_escape_string($email),
    mysql_real_escape_string($bio),
    mysql_real_escape_string($facebook_url),
    mysql_real_escape_string($twitter_handle));

//insert data into the database
mysql_query($insert_sql) or die (mysql_error());

// insert the image into the images table
$image = $_FILES['$image_fieldname'];
$image_filename = $image['name'];
$image_info = getimagesize($image['tmp_name']);
$image_mime_type = $image_info['mime'];
$image_size = $image['size'];
$image_data = file_get_contents($image['tmp_name']);

$insert_image_sql = sprintf("iNSERT iNTO images " .
    "(filename, mime_type, " .
    "file_size, image_data) " .
    "VALUES ('%s', '%s', %d, '%s');",
    mysql_real_escape_string($image_filename),
    mysql_real_escape_string($image_mime_type),
    mysql_real_escape_string($image_size),
    mysql_real_escape_string($image_data));

mysql_query($insert_image_sql);

header('Location: show_user.php?user_id='.mysql_insert_id());
?>