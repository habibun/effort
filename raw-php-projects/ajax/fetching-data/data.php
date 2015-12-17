<?php
// DB Confiqurations
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'effort';

// Creating Connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

//  Getting form data
$eid = $_POST["eid"];

// Writing select Query
$sql = "select * from employee where eid=$eid";

// Executing Query on Database
$result = mysqli_query($conn, $sql);

//checking Row Count
$rowcount = mysqli_num_rows($result);
if ($rowcount) {
    echo "<table border='1' >
<tr>
<td align=center> <b>Employee ID</b></td>
<td align=center><b>Employee Name</b></td>
<td align=center><b>Address</b></td>
<td align=center><b>Designation</b></td></td>
<td align=center><b>Salary</b></td>";

    while ($data = mysqli_fetch_row($result)) {
        echo "<tr>";
        echo "<td align=center>$data[0]</td>";
        echo "<td align=center>$data[1]</td>";
        echo "<td align=center>$data[2]</td>";
        echo "<td align=center>$data[3]</td>";
        echo "<td align=center>$data[4]</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Invalid Employee ID";
}
?>