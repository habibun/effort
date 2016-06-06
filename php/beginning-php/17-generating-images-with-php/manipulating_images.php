<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/27/16
 * Time: 11:18 PM
 */

/**
 * Opening an Existing Image
 */
// Display a JPEG
/*$myImage = imagecreatefromjpeg("sunny_bright_day.jpg");
header( "Content-type: image/jpeg" );
imagejpeg( $myImage );
imagedestroy( $myImage );*/

/**
 * Applying a Watermark
 */

$myImage = imagecreatefromjpeg( "lucky.jpg" );
$myCopyright = imagecreatefrompng( "copyright.png" );
$destWidth = imagesx( $myImage );
$destHeight = imagesy( $myImage );
$srcWidth = imagesx( $myCopyright );
$srcHeight = imagesy( $myCopyright );
$destX = ($destWidth - $srcWidth) / 2;
$destY = ($destHeight - $srcHeight) / 2;
imagecopy( $myImage, $myCopyright, $destX, $destY, 0, 0, $srcWidth, $srcHeight );
header( "Content-type: image/jpeg" );
imagejpeg( $myImage );
imagedestroy( $myImage );
imagedestroy( $myCopyright );



/**
 * Working with Transparency
 */

$myImage = imagecreatefromjpeg( "lucky.jpg" );
$myCopyright = imagecreatefrompng( "copyright.png" );
$destWidth = imagesx( $myImage );
$destHeight = imagesy( $myImage );
$srcWidth = imagesx( $myCopyright );
$srcHeight = imagesy( $myCopyright );
$destX = ($destWidth - $srcWidth) / 2;
$destY = ($destHeight - $srcHeight) / 2;

// to retrieve the color index of the white color in the image
$white = imagecolorexact( $myCopyright, 255, 255, 255 );

//So you can go ahead and use the imagecolorexact() function to return the color index of the white.
imagecolortransparent( $myCopyright, $white );

imagecopy( $myImage, $myCopyright, $destX, $destY, 0, 0, $srcWidth, $srcHeight );
header( "Content-type: image/jpeg" );
imagejpeg( $myImage );
imagedestroy( $myImage );
imagedestroy( $myCopyright );

/**
 * Working with Opacity
 */
$myImage = imagecreatefromjpeg( "lucky.jpg" );
$myCopyright = imagecreatefrompng( "copyright.png" );
$destWidth = imagesx( $myImage );
$destHeight = imagesy( $myImage );
$srcWidth = imagesx( $myCopyright );
$srcHeight = imagesy( $myCopyright );
$destX = ($destWidth - $srcWidth) / 2;
$destY = ($destHeight - $srcHeight) / 2;

// to retrieve the color index of the white color in the image
$white = imagecolorexact( $myCopyright, 255, 255, 255 );

//So you can go ahead and use the imagecolorexact() function to return the color index of the white.
imagecolortransparent( $myCopyright, $white );

//imagecopy( $myImage, $myCopyright, $destX, $destY, 0, 0, $srcWidth, $srcHeight );
/*To make the watermark less obvious, you can use the imagecopymerge() function to give the copied
image a degree of transparency*/
imagecopymerge( $myImage, $myCopyright, $destX, $destY, 0, 0, $srcWidth, $srcHeight, 50 );

header( "Content-type: image/jpeg" );
imagejpeg( $myImage );
imagedestroy( $myImage );
imagedestroy( $myCopyright );

/**
 * Creating Thumbnails
 */
$mainImage = imagecreatefromjpeg( "lucky.jpg" );
$mainWidth = imagesx( $mainImage );
$mainHeight = imagesy( $mainImage );
$thumbWidth = intval( $mainWidth / 4 );
$thumbHeight = intval( $mainHeight / 4 );
$myThumbnail = imagecreatetruecolor( $thumbWidth, $thumbHeight );
imagecopyresampled( $myThumbnail, $mainImage, 0, 0, 0, 0, $thumbWidth, $thumbHeight, $mainWidth, $mainHeight );
header( "Content-type: image/jpeg" );
imagejpeg( $myThumbnail );
imagedestroy( $myThumbnail );
imagedestroy( $mainImage );

