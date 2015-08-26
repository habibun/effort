<?php

    // Database connection constants
    define("DATABASE_HOST", "localhost");
    define("DATABASE_USERNAME", "root");
    define("DATABASE_PASSWORD", "");
    define("DATABASE_NAME", "effort");

  mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
    or die("<p>Error connecting to database: " . 
           mysql_error() . "</p>");

  echo "<p>Connected to MySQL!</p>";

  $db = mysql_select_db(DATABASE_NAME)
    or die("<p>Error selecting the database " . 
           DATABASE_NAME . mysql_error() . "</p>");            

  echo "<p>Connected to MySQL, using database " . 
       DATABASE_NAME . ".</p>";
?>
