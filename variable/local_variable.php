<?php
$number=10;//this is a global variable
function calculation()
{
    $number=45;//this is a local variable
    $another_number=55;
    $roll=$number+$another_number;
    echo $roll;
}
echo "the \$number variable value outside the function.txt is $number.";
echo "and function.txt into function.txt is ";
calculation();
?>