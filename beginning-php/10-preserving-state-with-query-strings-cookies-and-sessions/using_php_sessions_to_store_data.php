<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/28/15
 * Time: 8:18 PM
 */

/**
 * Creating a Session
 */
session_start();

/**
 * Reading and Writing Session Data
 */
//so you might store the user's first name using
$_SESSION['firstName'] = "John";

//echo $_SESSION['firstName'];

//you can store any king of data in sessions, including arrays and objects:
$userDetails = array("firstName" => "John","lastName" => "Smith", "age" => 34);

$_SESSION['userDetails'] = $userDetails;
?>

<?php
/**
 * However, if storing objects make sure you include your class definitions (or class definition files) before
trying to retrieve the objects from the $_SESSION array, so that the PHP engine can correctly identify the
objects when they’re retrieved:
 */
session_start();

class WebUser2 {
    public $firstName;
    public $lastName;
}

if(isset($_SESSION['user'])){
    //Make sure the WebUser class is defined by this point
    print_r($_SESSION['user']);
}else{
    echo "Creating user...";
    $user = new WebUser2();
    $user->firstName = "John";
    $user->lastName = "Smith";
    $_SESSION['user'] = $user;
}
?>
