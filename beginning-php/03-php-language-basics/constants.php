<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/8/15
 * Time: 11:35 PM
 */

define("MY_CONSTANT","19"); //my constant always has the string value "19"
echo MY_CONSTANT;

/**
 * Calculate the Properties of a Circle
 */
$radius = 4;
$diameter = $radius * 2;
$circumference = M_PI * $diameter;
$area = M_PI * pow( $radius, 2 );
echo "This circle has...<br />";
echo "A radius of " . $radius . "<br />";
echo "A diameter of " . $diameter . "<br />";
echo "A circumference of " . $circumference . "<br />";
echo "An area of " . $area . "<br />";
?>
