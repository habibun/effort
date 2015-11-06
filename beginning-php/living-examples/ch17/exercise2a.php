<?php
$iWidth = 500;
$iHeight = 50;

$myImage = imagecreate( $iWidth, $iHeight );
$white = imagecolorallocate( $myImage, 255, 255, 255 );
$black = imagecolorallocate( $myImage, 0, 0, 0 );

$red = imagecolorallocate( $myImage, 255, 0, 0 );
$green = imagecolorallocate( $myImage, 0, 255, 0 );

$diskTotal = disk_total_space( "/" );
$diskFree = disk_free_space( "/" );

imagerectangle( $myImage, 0, 0, $iWidth - 1, $iHeight - 1, $black );

$threshold = intval( ( ( $diskTotal - $diskFree ) / $diskTotal )
  * ( $iWidth-2 ) ) + 1;


imagefilledrectangle( $myImage, 1, 1, $threshold, ( $iHeight-2 ), $red );

imagefilledrectangle( $myImage, ( $threshold + 1 ), 1, ( $iWidth - 2 ),
  $iHeight-2, $green );

header( "Content-type: image/png" );
imagepng( $myImage );
imagedestroy( $myImage );
?>

