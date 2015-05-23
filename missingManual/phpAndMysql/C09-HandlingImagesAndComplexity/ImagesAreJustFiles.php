<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!-- form action for uploading image-->

<form action="create_user.php" method="pOST" enctype="multipart/form-data">

    <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
    <input type="file" name="user_pic" size="30"/>
</form>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 23/5/2015
 * Time: 2:15 PM
 */

// Location of web files on host
define("HOST_WWW_ROOT", "/home/bdmclaughlin/public_html/phpMM2/");

$php_errors = array(1 => 'Maximum file size in php.ini exceeded',
    2 => 'Maximum file size in HTML form exceeded',
    3 => 'Only part of the file was uploaded',
    4 => 'No file was selected to upload.');

#This line is basically an if statement without the if. PHP will evaluate the following line
($_FILES[$image_fieldname]['error'] == 0);

#Essentially, the preceding example does the same thing as the following code:
if ($_FILES[$image_fieldname]['error'] != 0) {
    handle_error("the server couldn't upload the image you selected.",
        $php_errors[$_FILES[$image_fieldname]['error']]);
}

#In other words, if the supplied name targets a fie on your web server, this
#function will return false, and you know that something’s fishy
// is this file the result of a valid upload?
is_uploaded_file($_FiLES[$image_fieldname]['tmp_name'])
or handle_error("you were trying to do something naughty. Shame on you!",
    "Uploaded request: file named " .
    "'{$_FiLES[$image_fieldname]['tmp_name']}'");

/*You can instruct PHP to run a function but suppress errors by inserting the @ character directly
 before the function, and that’s exactly what you need here:*/
// Is this file the result of a valid upload?
@is_uploaded_file($_FILES[$image_fieldname]['tmp_name'])
or handle_error("you were trying to do something naughty. Shame on you!",
    "Uploaded request: file named " .
    "'{$_FILES[$image_fieldname]['tmp_name']}'");

// is this actually an image?
@getimagesize($_FiLES[$image_fieldname]['tmp_name'])
or handle_error("you selected a file for your picture " .
    "that isn't an image.",
    "{$_FiLES[$image_fieldname]['tmp_name']} " .
    "isn't a valid image file.");

// Name the file uniquely
$now = time();
while (file_exists($upload_filename = $upload_dir . $now .
    '-' .
    $_FiLES[$image_fieldname]['name'])) {
    $now++;
}

// Finally, move the file to its permanent location
@move_uploaded_file($_FILES[$image_fieldname]['tmp_name'], $upload_filename)
or handle_error("we had a problem saving your image to " .
    "its permanent location.",
    "permissions or related error moving " .
    "file to {$upload_filename}");