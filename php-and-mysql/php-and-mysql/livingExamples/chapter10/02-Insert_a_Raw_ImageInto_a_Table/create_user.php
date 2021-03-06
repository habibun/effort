<?php

require_once '../scripts/app_config.php';
require_once '../scripts/database_connection.php';

$upload_dir = HOST_WWW_ROOT . "uploads/profile_pics/";
$image_fieldname = "user_pic";

// Potential PHP upload errors
$php_errors = array(1 => 'Maximum file size in php.ini exceeded',
                    2 => 'Maximum file size in HTML form exceeded',
                    3 => 'Only part of the file was uploaded',
                    4 => 'No file was selected to upload.');

$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
$bio = trim($_REQUEST['bio']);
$facebook_url = str_replace("facebook.org", "facebook.com", 
                            trim($_REQUEST['facebook_url']));
$position = strpos($facebook_url, "facebook.com");
if ($position === false) {
  $facebook_url = "http://www.facebook.com/" . $facebook_url;
}

$twitter_handle = trim($_REQUEST['twitter_handle']);
$twitter_url = "http://www.twitter.com/";
$position = strpos($twitter_handle, "@");
if ($position === false) {
  $twitter_url = $twitter_url . $twitter_handle;
} else {
  $twitter_url = $twitter_url . substr($twitter_handle, $position + 1);
}

// Make sure we didn't have an error uploading the image
($_FILES[$image_fieldname]['error'] == 0)
  or handle_error("the server couldn't upload the image you selected.",
                  $php_errors[$_FILES[$image_fieldname]['error']]);

// Is this file the result of a valid upload?
@is_uploaded_file($_FILES[$image_fieldname]['tmp_name'])
  or handle_error("you were trying to do something naughty. Shame on you!",
                  "Uploaded request: file named " .
                  "'{$_FILES[$image_fieldname]['tmp_name']}'");

// Is this actually an image?
@getimagesize($_FILES[$image_fieldname]['tmp_name'])
  or handle_error("you selected a file for your picture " .
                  "that isn't an image.",
                  "{$_FILES[$image_fieldname]['tmp_name']} " .
                  "isn't a valid image file.");

// Name the file uniquely
$now = time();
while (file_exists($upload_filename = $upload_dir . $now .
                                     '-' .
                                     $_FILES[$image_fieldname]['name'])) {
    $now++;
}

$insert_sql = "INSERT INTO users (first_name, last_name, email, bio," .
                                 "facebook_url, twitter_handle)" .
              "VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$bio}', " .
                      "'{$facebook_url}', '{$twitter_handle}');";

// Insert the user into the database
mysql_query($insert_sql)
  or die(mysql_error());

// Insert the image into the images table
$image = $_FILES[$image_fieldname];
$image_filename = $image['name'];
$image_info = getimagesize($image['tmp_name']);
$image_mime_type = $image_info['mime'];
$image_size = $image['size'];
$image_data = file_get_contents($image['tmp_name']);

$insert_image_sql = "INSERT INTO images " .
                            "(filename, mime_type, file_size, image_data) " .
                    "VALUES ('{$image_filename}', '{$image_mime_type}', " .
                            "'{$image_size}', '{$image_data}');";

mysql_query($insert_image_sql);

// Redirect the user to the page that displays user information
header("Location: show_user.php?user_id=" . mysql_insert_id());
exit();
?>
