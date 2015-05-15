<?php

  require_once '../scripts/app_config.php';

  if (!mysql_connect(DATABASE_HOST, 
                     DATABASE_USERNAME, "foo")) {
    handle_error("There was a problem connecting to the database " .
                 "that holds the information we need to get you connected.",
                 mysql_error());
  }

  echo "<p>Connected to MySQL!</p>";

  if (!mysql_select_db(DATABASE_NAME)) {
    handle_error("There's a configuration problem with our database.", 
                 mysql_error());
  }

  echo "<p>Connected to MySQL, using database " . DATABASE_NAME . ".</p>";

  $result = mysql_query("SHOW TABLES;");

  if (!$result) {

    handle_error("There's a problem looking up information in our database.",
                 "Error in listing tables: " . mysql_error());
  }

  echo "<p>Tables in database:</p>";
  echo "<ul>";
  while ($row = mysql_fetch_row($result)) {
    echo "<li>Table: {$row[0]}</li>";
  }
  echo "</ul>";

?>
