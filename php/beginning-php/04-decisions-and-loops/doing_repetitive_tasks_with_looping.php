<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/10/15
 * Time: 8:56 PM
 */

/**
 * here is a simple example of a while loop.
 */
$widgetLeft = 10;

while ($widgetLeft > 0) {
    echo "Selling a widget... ";
    $widgetLeft--;
    echo "done. There are $widgetLeft widget left.<br />";
}
echo "We're right out of widgets!";

/**
 * here an example of do...while loop
 */
$width = 1;
$length = 1;
do {
    $width++;
    $length++;
    $area = $width * $length;
} while ($area < 100);
echo "The smallest square over 1000 sq ft in area is $width ft x $length ft.";


/**
 * Neater Looping with the for Statement
 */
for ($i = 0; $i <= 10; $i++) {
    echo "I've counted to: $i<br>";
}
echo "All done!";

/**
 * it is perfectly possible to write any for loop using a while statement instead.
 */
$i = 0;
while ($i <= 10) {
    echo "I’ve counted to: $i<br />";
    $i++;
}
echo "All done!";

/**
 * escaping form loops with the break statement
 */
$count = 0;

while (true) {
    $count++;
    echo "I've counted to: $count<br />";
    if ($count == 10) {
        break;
    }
}

/**
 * another example using for loop
 */
$randomNumber = rand(1, 1000);
for ($i = 1; $i <= 1000; $i++) {
    if ($i == $randomNumber) {
        echo "Hooray! I guessed the random number. It was: $i<br />";
        break;
    }
}

/**
 * Skipping Loop Iterations with the continue Statement
 */
for ($i = 1; $i <= 10; $i++) {
    if ($i == 4) {
        continue;
    }
    echo "I’ve counted to: $i<br />";
}
echo "All done!";

/**
 * Creating Nested Loops
 */
for ($tens = 0; $tens < 10; $tens++) {
    for ($units = 0; $units < 10; $units++) {
        echo $tens . $units . "<br />";
    }
}

/**
 * When using the break statement with nested loops, you can pass an optional numeric argument to indicate
 * how many levels of nesting to break out of. For example:
 */
// Break out of the inner loop when $units == 5
for ($tens = 0; $tens < 10; $tens++) {
    for ($units = 0; $units < 10; $units++) {
        if ($units == 5) {
            break 1;
        }
        echo $tens . $units . "<br />";
    }
}
// Break out of the outer loop when $units == 5
for ($tens = 0; $tens < 10; $tens++) {
    for ($units = 0; $units < 10; $units++) {
        if ($units == 5) {
            break 2;
        }
        echo $tens . $units . "<br />";
    }
}
