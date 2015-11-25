<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/25/15
 * Time: 7:42 PM
 */

/**
 * Making a Connection
 */

//$dsn = "mysql:host=localhost;dbname=effort";
$dsn = "mysql:dbname=effort";

$username = "root";
$password = '';
//$conn = new PDO($dsn, $username, $password);

//close the connection
//$conn = null;

/**
 * Handling Errors
 */
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


/**
 * Reading Data
 */
//to send sql statements to the mysql server
//$conn->query($sql);

//assigning the result of $conn->query to a variable
//$rows = $conn->query($sql);


//each row is an associative array containing all the field names and values for that row in the table

$sql = "SELECT * FROM fruit";
$rows = $conn->query($sql);
foreach ($rows as $row) {
    echo "name = " . $row["name"] . "<br />";
    echo "color = " . $row["color"] . "<br />";
}

/**
 * Read a Database Table with PHP
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Fruit</title>
    <link rel="stylesheet" type="text/css" href="/beginning-php/living-examples/ch12/common.css"/>
</head>
<body>
<h1>Fruit</h1>
<?php
$dsn = "mysql:dbname=effort";
$username = "root";
$password = "";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM fruit";

echo "<ul>";
try {
    $rows = $conn->query($sql);
    foreach ($rows as $row) {
        echo "<li>A " . $row["name"] . " is " . $row["color"] . "</li>";
    }
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
echo "</ul>";
$conn = null;
echo $_SERVER["DOCUMENT_ROOT"];
//echo $_SERVER["DOCUMENT_ROOT"]."/beginning-php/living-examples/ch12/common.css";
?>
</body>
</html>

