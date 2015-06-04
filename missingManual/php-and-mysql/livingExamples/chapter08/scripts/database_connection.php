<?php
  require 'app_config.php';

  mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD)
    or handle_error("There was a problem connecting to the database " .
              "that holds the information we need to get you connected.",
              mysql_error());

  mysql_select_db(DATABASE_NAME)
    or handle_error("There's a configuration problem with our database.",
                     mysql_error());
?>
