<?php
// DB Confiqurations
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'effort';

// Creating Connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

//  Getting form data
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$gender = $_POST["gender"];

// Writing Inserting Query
$sql = "INSERT INTO student
(firstname , lastname , email,gender) VALUES ('$fname','$lname','$email','$gender')";

// Executing query on database
if (mysqli_query($conn, $sql)) {
    echo "Data Submitted successfully";
} else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
}
?>


