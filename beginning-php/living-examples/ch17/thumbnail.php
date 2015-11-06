<?php
$mainImage = imagecreatefromjpeg( "lucky.jpg" );

$mainWidth = imagesx( $mainImage );
$mainHeight = imagesy( $mainImage );

$thumbWidth = intval( $mainWidth / 4 );
$thumbHeight = intval( $mainHeight / 4 );

$myThumbnail = imagecreatetruecolor( $thumbWidth, $thumbHeight );

imagecopyresampled( $myThumbnail, $mainImage, 0, 0, 0, 0, $thumbWidth,
$thumbHeight, $mainWidth, $mainHeight );

header( "Content-type: image/jpeg" );
imagejpeg( $myThumbnail );
imagedestroy( $myThumbnail );
imagedestroy( $mainImage );
?>
