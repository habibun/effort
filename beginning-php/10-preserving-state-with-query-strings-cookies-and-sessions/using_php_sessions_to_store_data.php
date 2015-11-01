<?php
/**
 * Created by PhpStorm.
 * User: jony/**
 * Date: 11/01/15
 * Time: 8:36 PM
 */
//The location of the temporary files are specified by the session.save_path directive in the PHP configuration file
//echo ini_get( "session.save_path" );


/**
 * Creating a Session
 */
//session_start();

/**
 * Reading and Writing Session Data
 */
$_SESSION["firstName"] = "John";
//echo $_SESSION["firstName"];

//You can store any type of data in sessions, including arrays and objects:

/**
 * array type data in session
 */
$userDetails = array("firstName" => "John", "lastName" => "Smith", "age" => 34);

$_SESSION["userDetails"] = $userDetails;
foreach($_SESSION["userDetails"] as $key => $value)
//    echo $key." = ".$value."</br>";
//print_r($_SESSION["userDetails"]);

/**
 * object type data in session
 */
session_start();

class WebUser2 {
    public $firstName;
    public $lastName;
}

if(isset($_SESSION["user"])){
    $user = new WebUser2();
//    print_r($_SESSION["user"]);
    echo $_SESSION["user"]["firstName"];
}else{
    echo "Creating user...";
    $user = new WebUser2();
    $user->firstName = "john";
    $user->lastName = "Smith";
    $_SESSION["user"] = $user;
    echo $_SESSION["user"]["firstName"];
}