<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 30/5/2015
 * Time: 3:14 PM
 */

/**
 *
 * Passwords Create Security, But Should Be Secure
 *
 * crypt($password);
 */

/**
 * test salt
 */

$input = "secret_string";
$salt = "salt";
$first_output = crypt($input, $salt);
$second_output = crypt($input, $salt);

echo "First output is {$first_output}\n\n";
echo "Second output is {$second_output}\n\n";