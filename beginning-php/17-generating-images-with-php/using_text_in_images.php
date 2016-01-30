<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 2/29/16
 * Time: 8:22 PM
 */

/**
 *  Display System Fonts
 */
$textImage = imagecreate( 200, 100 );
$white = imagecolorallocate( $textImage, 255, 255, 255 );
$black = imagecolorallocate( $textImage, 0, 0, 0 );
$yOffset = 0;
for ( $i = 1; $i <= 5; $i++ ) {
    imagestring( $textImage, $i, 5, $yOffset, "This is system font $i", $black
);
$yOffset += imagefontheight( $i );
}
header( "Content-type: image/png" );
imagepng( $textImage );
imagedestroy( $textImage );



/**
 *  Draw Text with a TrueType Font
 */
$textImage = imagecreate( 200, 120 );
$white = imagecolorallocate( $textImage, 255, 255, 255 );
$black = imagecolorallocate( $textImage, 0, 0, 0 );
imagefttext( $textImage, 16, 0, 10, 50, $black, "/usr/share/fonts/truetype/ttf-bitstream-vera/Vera.ttf", "Vera, 16 pixels" );
header( "Content-type: image/png" );
imagepng( $textImage );
imagedestroy( $textImage );


