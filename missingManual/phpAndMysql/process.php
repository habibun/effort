<html>
<head>
</head>
<body>
    <?php
        require 'app_config.php';
        mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD) or die("<p>Error connecting to database: " . mysql_error() . "</p>");
        echo "<p>Connected to MySQL!</p>";

        mysql_select_db(DATABASE_NAME) or die('<p>Error selecting the database'. DATABASE_NAME . mysql_error().'</p>');
        echo '<p>Connected to MySQL, using database effort.</p>';

        $result = mysql_query('show tables;');

    if (!$result) {
        die("<p>Error in listing tables: " . mysql_error() . "</p>");
    }

//    print_r ($result);
    echo '<p>Tables in database: '.'</p>';
    echo '<ul>';
    while ($row = mysql_fetch_array($result)) {
        echo "<li>Table: {$row[0]}</li>";
    }
    echo '</ul>';
    ?>
</body>
</html>
