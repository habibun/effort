<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 4/1/16
 * Time: 10:49 AM
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Fruit</title>
<link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
<h1>Fruit</h1>
<?php
$dsn = "pgsql:host=localhost;dbname=mydatabase";
$username = "postgres";
$password = "mypass";
try {
    $conn = new PDO( $dsn, $username, $password );
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $e ) {
    echo "Connection failed: " . $e->getMessage();
}
$sql = "SELECT * FROM fruit";
echo "<ul>";
try {
    $rows = $conn->query( $sql );
    foreach ( $rows as $row ) {
        echo "<li>A " . $row["name"] . " is " . $row["color"] . "</li>";
}
} catch ( PDOException $e ) {
    echo "Query failed: " . $e->getMessage();
}
echo "</ul>";
$conn = null;
?>
</body>
</html>
