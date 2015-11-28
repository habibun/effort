<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/25/15
 * Time: 11:48 PM
 */

/**
 * 1.
 * Write out an SQL statement that creates a table called members in your mydatabase database to
 * store information about the members of a book club. Store the following data for each person:
 * first name, last name, age, and the date they joined the club. Create more SQL statements to
 * insert five imaginary people into this table:
 * ❑
 * Jo Scrivener, aged 31, joined September 3, 2006
 * ❑
 * Marty Pareene, aged 19, joined January 7, 2007
 * ❑
 * Nick Blakeley, aged 23, joined August 19, 2007
 * ❑
 * Bill Swan, aged 20, joined June 11, 2007
 * ❑
 * Jane Field, aged 36, joined March 3, 2006
 */
/*
 USE effort;
CREATE TABLE members (
  id
  SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  firstName
  VARCHAR(30) NOT NULL,
  lastName
  VARCHAR(30) NOT NULL,
  age
  TINYINT UNSIGNED NOT NULL,
  joinDate
  DATE NOT NULL,
  PRIMARY KEY (id)
);
INSERT INTO members ( firstName,
                      lastName, age, joinDate ) VALUES ( 'Jo',
                                                         'Scrivener', 31, '2006-09-03' );
INSERT INTO members ( firstName,
                      lastName, age, joinDate ) VALUES ( 'Marty',
                                                         'Pareene', 19, '2007-01-07' );
INSERT INTO members ( firstName,
                      lastName, age, joinDate ) VALUES ( 'Nick',
                                                         'Blakeley', 23, '2007-08-19' );
INSERT INTO members ( firstName,
                      lastName, age, joinDate ) VALUES ( 'Bill',
                                                         'Swan', 20, '2007-06-11' );
INSERT INTO members ( firstName,
                      lastName, age, joinDate ) VALUES ( 'Jane',
                                                         'Field', 36, '2006-03-03' );

 */

/**
 * 2.
 * Write a PHP script to query the table you created in Exercise 1, displaying the details of all club
 * members under 25 years of age.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Book Club Members Under 25</title>
    <link rel="stylesheet" type="text/css" href="common.css"/>
</head>
<body>
<h1>Book Club Members Under 25</h1>
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
$sql = "SELECT * FROM members WHERE age < 25";
echo "<table><tr><th>First Name</th><th>Last Name</th><th>Age</th><th>Joined
</th></tr>";
try {
    $rows = $conn->query($sql);
    foreach ($rows as $row) {
        echo "<tr><td>" . $row["firstName"] . "</td><td>" . $row["lastName"] . "</
td><td>" . $row["age"] . "</td><td>" . $row["joinDate"] . "</td></tr>";
    }
} catch (PDOException $e) {
    echo "Query failed: " . $e->getMessage();
}
echo "</table>";
$conn = null;
?>
</body>
</html>

