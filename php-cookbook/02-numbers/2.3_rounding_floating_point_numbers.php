<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/2/15
 * Time: 9:08 PM
 */

/**
 * to round a number to the closest integer,use round()
 */
$number = round(2.4);
printf("2.4 rounds to the float %s", $number);

/**
 * To round up, use ceil():
 */
$number = ceil(2.4);
printf("2.4 rounds up to the float %s", $number);

/**
 * To round down, use floor():
 */
$number = floor(2.4);
printf("2.4 rounds down to the float %s", $number);

/**
 * If a number falls exactly between two integers, PHP rounds away from 0:
 */
$number = round(2.5);
printf("Rounding a positive number rounds up: %s\n", $number);

$number = round(-2.5);
printf("Rounding a negative number rounds down: %s\n", $number);


/**
 * perhaps you are calculating the total price for the items in a user’s shopping cart
 */
$cart = 54.23;
$tax = $cart * .05;
$total = $cart + $tax;
$final = round($total, 2);
print "Tax calculation uses all the digits it needs: $total, but ";
print "round() trims it to two decimal places: $final";

