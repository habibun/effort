<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/3/15
 * Time: 9:12 PM
 */

/**
 * 1.
 * Write a function that takes an array argument, and returns a string containing XHTML markup for
 * a definition list where each key of the array is a term, and each corresponding value is a definition.
 * (Hint: An XHTML definition list element consists of <dl> ... </dl> tags. Inside these tags,
 * terms are marked up using <dt> ... </dt> tags, and definitions using <dd> ... < /dd> tags.)
 */

$myArray = array(
    'book' => 'this is my book',
    'pen' => 'this is my pen'
);

function termAndDefinition($arr)
{
    echo "<dl>Definition list";
    foreach ($arr as $key => $value) {
        echo "<dt>$key</dt>" . "<dd>$value</dd>";
    }
    echo "</dl>";
}

//termAndDefinition($myArray);


/**
 * 2.
 * A factorial of any given integer, n, is the product of all positive integers between 1 and n inclu-
 * sive. So the factorial of 4 is 1 × 2 × 3 × 4 = 24, and the factorial of 5 is 1 × 2 × 3 × 4 × 5 = 120. This
 * can be expressed recursively as follows:
 * ❑
 * If n == 0, return 1. (This is the base case)
 * ❑
 * If n > 0, compute the factorial of n–1, multiply it by n, and return the result
 * Write a PHP script that uses a recursive function to display the factorials of the integers 0 to 10.
 */
$iterations = 10;

function factorial($n)
{
    if ($n == 0) return 1;

    if ($n > 0) {
        return factorial($n - 1) * $n;
    }
}

for ($i = 0; $i <= $iterations; $i++) {
    echo "$i = " . factorial($i) . "<br>";
}