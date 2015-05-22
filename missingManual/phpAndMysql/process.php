<html>
<head>
</head>
<body>
<?php
require 'database_connection.php';
$user_id = 6;
$select_query = "SELECT * FROM php_and_mysql_users WHERE user_id = " . $user_id;

$result = mysql_query($select_query);


    $row = mysql_fetch_array($result);
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $facebook_url = $row['facebook_url'];
    $twitter_url = $row['twitter_url'];





?>
<div id="content">
    <p>Here's a record of what information you submitted:</p>
    <p>
        Name: <?php echo $first_name . " " . $last_name; ?><br />
        E-Mail Address: <?php echo $email; ?><br />
        <a href="<?php echo $facebook_url; ?>">Your Facebook page</a>
        <br />
        <a href="<?php echo $twitter_url; ?>">Check out your Twitter feed</a>
        <br />
    </p>
</div>
</body>
</html>
