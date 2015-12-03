<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/1/15
 * Time: 12:46 AM
 */

$dsn = "mysql:dbname=effort";
$username = "root";
$password = "";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = "INSERT INTO members VALUES ( 8, 'derek', password('mypass'), 'Derek',
'Winter', '2008-06-25', 'm', 'crime', 'derek@example.com', 'Watching TV,
motor racing' )";

try {
    $conn->query($sql);
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}



/**
 * Remember that, although using prepared statements and placeholders gives you some protection against
 * SQL injection attacks
 */

$dsn = "mysql:dbname=effort";
$username = "root";
$password = "";
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$id = 8;
$username = "derek";
$password = "mypass";
$firstName = "Derek";
$lastName = "Winter";
$joinDate = "2008-06-25";
$gender = "m";
$favoriteGenre = "crime";
$emailAddress = "derek@example.com";
$otherInterests = "Watching TV, motor racing";
$sql = "INSERT INTO members VALUES ( :id, :username, password(:password),
:firstName, :lastName, :joinDate, :gender, :favoriteGenre, :emailAddress,
:otherInterests )";
try {
    $st = $conn->prepare($sql);
    $st->bindValue(":id", $id, PDO::PARAM_INT);
    $st->bindValue(":username", $username, PDO::PARAM_STR);
    $st->bindValue(":password", $password, PDO::PARAM_STR);
    $st->bindValue(":firstName", $firstName, PDO::PARAM_STR);
    $st->bindValue(":lastName", $lastName, PDO::PARAM_STR);
    $st->bindValue(":joinDate", $joinDate, PDO::PARAM_STR);
    $st->bindValue(":gender", $gender, PDO::PARAM_STR);
    $st->bindValue(":favoriteGenre", $favoriteGenre, PDO::PARAM_STR);
    $st->bindValue(":emailAddress", $emailAddress, PDO::PARAM_STR);
    $st->bindValue(":otherInterests", $otherInterests, PDO::PARAM_STR);
    $st->execute();
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
