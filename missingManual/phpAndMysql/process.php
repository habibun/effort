<html>
<head>
</head>
<body>
<?php
require 'database_connection.php';
$query_text = $_REQUEST['query'];
$result = mysql_query($query_text);

if (!$result) {
    die("<p>Error in executing the SQL query " . $query_text . ": " .
        mysql_error() . "</p>");
}

$return_rows = true;
if (preg_match("/^\s *(CREATE|INSERT|UPDATE|DELETE|DROP)/i",
    $query_text)) {
    $return_rows = false;
}

if ($return_rows) {
    // We have rows to show from the query
    echo "<p>Results from your query:</p>";
    echo "<ul>";
    while ($row = mysql_fetch_row($result)) {
        echo "<li>{$row[0]}</li>";
    }
    echo "</ul>";
} else {
    // No rows. Just report if the query ran or not
    echo "<p>Your query was processed successfully.</p>";
    echo "<p>{$query_text}</p>";

}
?>
</body>
</html>
