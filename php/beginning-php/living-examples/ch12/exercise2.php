<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Book Club Members Under 25</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>

    <h1>Book Club Members Under 25</h1>

<?php
$dsn = "mysql:dbname=mydatabase";
$username = "root";
$password = "mypass";

try {
  $conn = new PDO( $dsn, $username, $password );
  $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch ( PDOException $e ) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM members WHERE age < 25";

echo "<table><tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Joined</th></tr>";

try {
  $rows = $conn->query( $sql );
  foreach ( $rows as $row ) {
    echo "<tr><td>" . $row["firstName"] . "</td><td>" . $row["lastName"] . "</td><td>" . $row["age"] .
    "</td><td>" . $row["joinDate"] . "</td></tr>";
  }
} catch ( PDOException $e ) {
  echo "Query failed: " . $e->getMessage();
}

echo "</table>";
$conn = null;
  
?>
  </body>
</html>
