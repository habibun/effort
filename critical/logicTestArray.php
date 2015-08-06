<?php

function test(array $inputs)
{
    //your codes go here

// solution number 1
/*    if (in_array(2, $inputs) && !in_array(3, $inputs)) {
        return false;
    }

    return true;*/



//solution number 2

/*    foreach ($inputs as $k => $v) {
        if ($v == 2) {
            foreach ($inputs as $value) {
                if ($value == 3) {
                    return true;
                }
            }
            return false;
        }
    }

    return true;*/


//solution number 3

    if (in_array(2, $inputs)) {
        if (in_array(3, $inputs)) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }

}


$inputs = array(
    array(
        'values' => array(1,2,3,4),
        'result' => true,
    ),
    array(
        'values' => array(1,1,2,2),
        'result' => false,
    ),
    array(
        'values' => array(1,3,3,4),
        'result' => true,
    ),
    array(
        'values' => array(),
        'result' => true,
    ),
    array(
        'values' => array(2,2,2,3),
        'result' => true,
    ),
    array(
        'values' => array(2),
        'result' => false
    )
);

//print_r($inputs[0]['values']);

$passed = $error = 0;

foreach($inputs as $i)
{
    $res = test($i['values']);
    if($res === $i['result'])
        $passed++;
    else
        $error++;
}

echo 'Passed: '.$passed.', Failed: '.$error.PHP_EOL;