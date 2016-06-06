<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/5/15
 * Time: 9:41 AM
 */

/**
 * use for loop
 */
$start = 3;
$end = 7;

for($i = $start; $i <= $end; $i++){
    printf("%d squared is %d\n",$i,$i * $i);
}

/**
 * you can increment using values other than 1.
 */
$start = 3;
$end = 7;

for($i = $start; $i <= $end; $i +=2){
    printf("The odd number %d squared is %d\n",$i ,$i * $i);
}

/**
 * if you want to preserve the numbers for use beyond iteration, use the range() method:
 */
$numbers = range(3, 7);
foreach ($numbers as $n) {
    printf("%d squared is %d\n", $n, $n * $n);
}
foreach ($numbers as $n) {
    printf("%d cubed is %d\n", $n, $n * $n * $n);
}

/**
 * range() can also be used to retrieve character sequences:
 */
print_r(range('l','p'));

/**
 * produce a list of square
 */
function squares($start, $stop) {
    if ($start < $stop) {
        for ($i = $start; $i <= $stop; $i++) {
            yield $i => $i * $i;
        }
    }
    else {
        for ($i = $stop; $i >= $start; $i--) {
            yield $i => $i * $i;
        }
    }
}
foreach (squares(3, 15) as $n => $square) {
    printf("%d squared is %d\n", $n, $square);
}

