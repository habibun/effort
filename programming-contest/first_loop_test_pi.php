<?php

function abcd()
{
    $n = 5;
    $s = 1;
    $m = 1;
    for ($i = 1; $i <= $n; $i++) {
        if ($m <= $n) {
            for ($zero = 1; $zero <= ($n - $s)/2; $zero++) {
                echo("0");
            }
            for ($j = 1; $j <= $s; $j++) {
                echo(1);
            }
            for ($zero = 1; $zero <= ($n - $s)/2; $zero++) {
                echo("0");
            }
            $m = $m + 2;
            $s = $s + 2;
        } else {
            if ($s > $n) {
                $s = $n-2;
            }
            for ($zero = 1; $zero <= ($m - $n)/2; $zero++) {
                echo("0");
            }
            for ($j = 1; $j <= $s; $j++) {
                echo(1);
            }
            for ($zero = 1; $zero <= ($m - $n)/2; $zero++) {
                echo(0);
            }

            $m = $m + 2;
            $s = $s - 2;
        }

        echo "<br>";
    }
}
abcd();
