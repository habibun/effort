<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/4/15
 * Time: 10:03 AM
 */

$dsn = "mysql:dbname=effort";
$username = "root";
$password = "";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed " . $e->getMessage();
}

$id = 8;

$sql = "DELETE from members where id = :id";

try {
    $st = $conn->prepare($sql);
    $st->bindValue(":id", $id, PDO::PARAM_INT);
    $st->execute();
} catch (PDOException $e) {
    echo "Query failed " . $e->getMessage();
}