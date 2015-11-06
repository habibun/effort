<?php
$myImage = imagecreatefromjpeg( "lucky.jpg" );
header( "Content-type: image/jpeg" );
imagejpeg( $myImage );
imagedestroy( $myImage );
?>

