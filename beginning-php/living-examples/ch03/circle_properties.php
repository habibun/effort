<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/10/15
 * Time: 8:48 PM
 */

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