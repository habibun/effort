<?php
  require '../../scripts/database_connection.php';
  
  $query_text = $_REQUEST['query'];
  $result = mysql_query($query_text);

  if (!$result) {
    die("<p>Error in executing the SQL query " . $query_text . ": " .
        mysql_error() . "</p>");
  }
  
  $return_rows = false;
  $uppercase_query_text = strtoupper($query_text);
  $location = strpos($uppercase_query_text, "CREATE");
  if ($location === false) {
    $location = strpos($uppercase_query_text, "INSERT");
    if ($location === false) {
      $location = strpos($uppercase_query_text, "UPDATE");
      if ($location === false) {
        $location = strpos($uppercase_query_text, "DELETE");
        if ($location === false) {
          $location = strpos($uppercase_query_text, "DROP");
          if ($location === false) {
            // If we got here, it's not a CREATE, INSERT, UPDATE,
            //   DELETE, or DROP query. It should return rows.
            $return_rows = true;
          }
        }
      }
    }
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