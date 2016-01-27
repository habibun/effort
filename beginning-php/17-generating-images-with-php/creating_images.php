<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/30/16
 * Time: 12:39 PM
 */

/**
 * Creating a New Image
 */
//$myImage = imagecreate( 200, 150 );

/**
 * Allocating Colors
 */
//$myGreen = imagecolorallocate( $myImage, 51, 153, 51 );


/**
 * Outputting Images
 */
//imagejpeg( $myImage, "myimage.jpeg" );

/* You also need to send an appropriate HTTP header so that the browser knows how to handle the
image. For example, to display the image as a JPEG use:
 */
//header( "Content-type: image/jpeg" );
//imagejpeg( $myImage );

//To display it as a GIF use:
//header( "Content-type: image/gif" );
//imagegif( $myImage );

//Finally, to display an image in PNG format use:
//header( "Content-type: image/png" );
//imagepng( $myImage );

/*imagejpeg() takes an optional third argument that specifies the compression level, or quality, of the
final image. */
//header( "Content-type: image/jpeg" );
//imagejpeg( $myImage, null, 50 );

/**
 * When you’ve finished with an image, you should remove it from memory in order to free up the
memory for other purposes.
 */
//imagedestroy( $myImage );


/**
 * Drawing in an Image
 */

/**
 * Drawing Individual Pixels
 */
//imagesetpixel( $myImage, 120, 60, $myBlack );

/**
 * Drawing Lines
 */
/*$myImage = imagecreate( 200, 100 );
$myGray = imagecolorallocate( $myImage, 204, 204, 204 );
$myBlack = imagecolorallocate( $myImage, 0, 0, 0 );
imageline( $myImage, 15, 35, 120, 60, $myBlack );
header( "Content-type: image/png" );
imagepng( $myImage );
imagedestroy( $myImage );*/


/**
 * Drawing Rectangles
 */
/*$myImage = imagecreate( 200, 100 );
$myGray = imagecolorallocate( $myImage, 204, 204, 204 );
$myBlack = imagecolorallocate( $myImage, 0, 0, 0 );
imageline( $myImage, 15, 35, 120, 60, $myBlack );
imagerectangle( $myImage, 15, 35, 120, 60, $myBlack );
header( "Content-type: image/png" );
imagepng( $myImage );
imagedestroy( $myImage );*/


/**
 * Drawing Circles and Ellipses
 */
/*$myImage = imagecreate( 200, 100 );
$myGray = imagecolorallocate( $myImage, 204, 204, 204 );
$myBlack = imagecolorallocate( $myImage, 0, 0, 0 );
imageellipse( $myImage, 90, 60, 160, 50, $myBlack );
//imageellipse( $myImage, 90, 60, 70, 70, $myBlack );
header( "Content-type: image/png" );
imagepng( $myImage );
imagedestroy( $myImage );*/

/**
 * Drawing an Arc
 */
/*$myImage = imagecreate( 200, 100 );
$myGray = imagecolorallocate( $myImage, 204, 204, 204 );
$myBlack = imagecolorallocate( $myImage, 0, 0, 0 );
imagearc( $myImage, 90, 60, 160, 50, 45, 200, $myBlack );
header( "Content-type: image/png" );
imagepng( $myImage );
imagedestroy( $myImage );*/

/**
 * Drawing Polygons
 */
/*$myImage = imagecreate( 200, 100 );
$myGray = imagecolorallocate( $myImage, 204, 204, 204 );
$myBlack = imagecolorallocate( $myImage, 0, 0, 0 );
$myPoints = array( 20, 20, 185, 55, 70, 80 );
imagepolygon( $myImage, $myPoints, 3, $myBlack );
header( "Content-type: image/png" );
imagepng( $myImage );
imagedestroy( $myImage );*/


/**
 * Draw a Rectangle with Rounded Corners
 */

function roundedRectangle( $image, $x1, $y1, $x2, $y2, $curveDepth, $color )
{
    // Draw the four sides
    imageline( $image, ($x1 + $curveDepth), $y1, ($x2 - $curveDepth), $y1, $color );
    imageline( $image, ($x1 + $curveDepth), $y2, ($x2 - $curveDepth), $y2, $color );
    imageline( $image, $x1, ($y1 + $curveDepth), $x1, ($y2 - $curveDepth), $color );
    imageline( $image, $x2, ($y1 + $curveDepth), $x2, ($y2 - $curveDepth), $color );

    // Draw the four corners
    imagearc( $image, ($x1 + $curveDepth), ($y1 + $curveDepth), (2 * $curveDepth), (2 * $curveDepth), 180, 270, $color );
    imagearc( $image, ($x2 -$curveDepth), ($y1 + $curveDepth), (2 * $curveDepth), (2 * $curveDepth), 270, 360, $color );
    imagearc( $image, ($x2 - $curveDepth), ($y2 - $curveDepth), (2 * $curveDepth), (2 * $curveDepth), 0, 90, $color );
    imagearc( $image, ($x1 + $curveDepth), ($y2 - $curveDepth), (2 * $curveDepth), (2 * $curveDepth), 90, 180, $color );
}
// An example rectangle
$myImage = imagecreate( 200,100 );
$myGray = imagecolorallocate( $myImage, 204, 204, 204 );
$myBlack = imagecolorallocate( $myImage, 0, 0, 0 );
roundedRectangle( $myImage, 20, 10, 180, 90, 20, $myBlack );
header( "Content-type: image/png" );
imagepng( $myImage );
imagedestroy( $myImage );
