<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 24/5/2015
 * Time: 8:51 PM
 */
// insert the image into the images table
$image = $_FiLES[$image_fieldname];
$image_filename = $image['name'];
$image_info = getimagesize($image['tmp_name']);
$image_mime_type = $image_info['mime'];
$image_size = $image['size'];
$image_data = file_get_contents($image['tmp_name']);
$insert_image_sql = "iNSERT iNTO images " .
    "(filename, mime_type, file_size, image_data) " .
    "VALUES ('{$image_filename}', '{$image_mime_type}', " .
    "'{$image_size}', '{$image_data}');";
mysql_query($insert_image_sql);