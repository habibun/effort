<?php

/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/16/15
 * Time: 11:25 PM
 */
class Person7
{
    public $age;
}

$harry = new Person7();
$harry->age = 28;
$harryString = serialize($harry);
//echo $harryString."\n";

$harryObj = unserialize($harryString);

//print_r($harryObj);

class User2
{
    public $username;
    public $password;
    public $loginsToday;

    public function __sleep()
    {
        return array("username", "password");
    }
}

$user = new User2();
$user->username = "harry";
$user->password = "monkey";
$user->loginsToday = 3;

//print_r($user);

$userString = serialize($user);
//echo $userString;

$userObj = unserialize($userString);
//print_r($userObj);

/**
 * use built in get_object_vars() function to get an associative array of all the properties in the object
 */
class User3
{
    public $username;
    public $password;
    public $loginsToday;

    public function __sleep()
    {
        return array_keys(get_object_vars($this));
    }
}

$user = new User3();
$user->username = "harry";
$user->password = "monkey";
$user->loginsToday = 3;

//print_r($user);

$userString = serialize($user);
//echo $userString;

/**
 * Finally, here's an example that shows the __wakeup() method in action:
 */
class User
{
    public function __wakeup()
    {
        echo "Yawn... what's for breakfast?<br />";
    }
}

$user = new User;
$userString = serialize($user);
$obj = unserialize($userString);
// Displays "Yawn... what's for breakfast?"
