<?php
$iWidth = 200;
$iHeight = 200;
$myImage = imagecreate( $iWidth, $iHeight );
$white = imagecolorallocate( $myImage, 255, 255, 255 );
$red = imagecolorallocate( $myImage, 255, 0, 0 );
$green = imagecolorallocate( $myImage, 0, 255, 0 );
$diskTotal = disk_total_space( "/" );
$diskFree = disk_free_space( "/" );
$usedDegrees = intval( ( ( $diskTotal - $diskFree ) / $diskTotal ) * 360 );

imagefilledarc( $myImage, $iWidth / 2, $iHeight / 2, $iWidth - 2, $iHeight - 2, 0,
  $usedDegrees, $red, IMG_ARC_EDGED );

imagefilledarc( $myImage, $iWidth / 2, $iHeight / 2, $iWidth - 2, $iHeight - 2,
  $usedDegrees, 360, $green, IMG_ARC_EDGED );

header( "Content-type: image/png" );
imagepng( $myImage );
imagedestroy( $myImage );
?>

