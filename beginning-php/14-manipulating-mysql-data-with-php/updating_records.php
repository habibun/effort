<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/4/15
 * Time: 9:33 AM
 */

$dsn = "mysql:dbname=effort";
$username = "root";
$password = "";

try{
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo "Connection failed " .$e->getMessage();
}

$id = 8;
$newEmailAddress = "derek.winter@example.com";

$sql = "UPDATE members set emailAddress = :emailAddress WHERE id = :id";

try{
    $st = $conn->prepare($sql);
    $st->bindValue(":id", $id, PDO::PARAM_INT);
    $st->bindValue(":emailAddress", $newEmailAddress, PDO::PARAM_STR);
    $st->execute();
} catch (PDOException $e){
    echo "Query failed " . $e->getMessage();
}