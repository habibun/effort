<html>
<head>
</head>
<body>
    <?php
    foreach ($_REQUEST as $key => $value) {
        echo '<p>'.$key .':'. $value . '</p>';
    }
    ?>
</body>
</html>
