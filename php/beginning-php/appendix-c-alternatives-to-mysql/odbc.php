<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 4/1/16
 * Time: 12:32 PM
 */

$dsn = "odbc:driver={SQL Server};server=localhost;database=mydatabase";
$username = "myusername";
$password = "mypassword";
// Open connection to SQL Server database
try {
    $conn = new PDO( $dsn, $username, $password );
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $e ) {
    echo "Connection failed: " . $e->getMessage();
}
// Add a product
$sql = "INSERT INTO products ( id, productname ) VALUES ( :id, :productname )";
$st = $conn->prepare( $sql );
$st->bindValue( ":id", 123, PDO::PARAM_INT );
$st->bindValue( ":productname", "WonderWidget", PDO::PARAM_STR );
$st->execute();
// Retrieve the product
$sql = "SELECT * FROM products WHERE id=:id";
$st->bindValue( ":id", 123, PDO::PARAM_INT );
$st->execute();
$product = $st->fetch();
// Displays "WonderWidget"
echo "Product name: " . $product["productname"] . "<br />";
