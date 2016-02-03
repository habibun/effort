<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 2/3/16
 * Time: 9:08 PM
 */

/**
 * 1.
Create a PHP script that opens an image file, adds a one-pixel black border to the image, and
outputs the resulting image to the browser.
 */
/*$myImage = imagecreatefromjpeg( "hook.jpg" );
$black = imagecolorallocate( $myImage, 0, 0, 0 );
$width = imagesx( $myImage );
$height = imagesy( $myImage );
imagerectangle( $myImage, 0, 0, $width-1, $height-1, $black );
header( "Content-type: image/jpeg" );
imagejpeg( $myImage );
imagedestroy( $myImage );*/


/**
 * 2.
 * Using the disk_total_space() and disk_free_space() functions, show how much disk
space you have used on your Web server ’s hard drive in a graphical way.
 */
/*$iWidth = 500;
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
imagedestroy( $myImage );*/

/* the alternative solution */
$iWidth = 200;
$iHeight = 200;
$myImage = imagecreate( $iWidth, $iHeight );
$white = imagecolorallocate( $myImage, 255, 255, 255 );
$red = imagecolorallocate( $myImage, 255, 0, 0 );
$green = imagecolorallocate( $myImage, 0, 255, 0 );
$diskTotal = disk_total_space( "/" );
$diskFree = disk_free_space( "/" );
$usedDegrees = intval( ( ( $diskTotal - $diskFree ) / $diskTotal ) * 360 );
imagefilledarc( $myImage, $iWidth / 2, $iHeight / 2, $iWidth - 2, $iHeight -
    2, 0, $usedDegrees, $red, IMG_ARC_EDGED );
imagefilledarc( $myImage, $iWidth / 2, $iHeight / 2, $iWidth - 2, $iHeight - 2,
    $usedDegrees, 360, $green, IMG_ARC_EDGED );
header( "Content-type: image/png" );
imagepng( $myImage );
imagedestroy( $myImage );
