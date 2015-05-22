<?php
  mysql_connect("localhost",
                "root", "")
    or die("<p>Error connecting to database: " . 
           mysql_error() . "</p>");

  echo "<p>Connected to MySQL!</p>";
  
  mysql_select_db("effort")
    or die("<p>Error selecting the database your-database-name: " .
           mysql_error() . "</p>");

  echo "<p>Connected to MySQL, using database your-database-name.</p>";
  
  $result = mysql_query("SHOW TABLES;");

  if (!$result) {
    die("<p>Error in listing tables: " . mysql_error() . "</p>");
  }

  echo "<p>Tables in database:</p>";
  echo "<ul>";
  while ($row = mysql_fetch_row($result)) {
    echo "<li>Table: {$row[0]}</li>";
  }
  echo "</ul>";
?>