<html>
<head>
</head>
<body>
    <?php
        mysql_connect("localhost", "root", "") or die("<p>Error connecting to database: " . mysql_error() . "</p>");
        echo "<p>Connected to MySQL!</p>";

        mysql_select_db('effort') or die('<p>Error selecting the database effort: '.mysql_error().'</p>');
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
