<?php
echo "DOCUMENT ROOT: {$_SERVER['DOCUMENT_ROOT']}";
$image_sample_path =
  "/home4/yellowta/public_html/phpMM2/" .
  "uploads/profile_pics/1346084332-370584_8323673_927214073_n.jpg";
$web_image_path = str_replace($_SERVER['DOCUMENT_ROOT'], 
                              '', $image_sample_path);
echo "<br /><br />CONVERTED PATH: {$web_image_path}";
?>
