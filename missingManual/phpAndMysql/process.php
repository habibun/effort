<html>
<head>
</head>
<body>
<?php
require 'database_connection.php';
$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
$facebook_url = str_replace("facebook.org", "facebook.com", trim($_REQUEST['facebook_url']));
$position = strpos($facebook_url, "facebook.com");
if ($position === false) {
    $facebook_url = "http://www.facebook.com/" . $facebook_url;
}

$twitter_handle = trim($_REQUEST['twitter_handle']);
$twitter_url = "http://www.twitter.com/";
$position = strpos($twitter_handle, "@");
if ($position === false) {
    $twitter_url = $twitter_url . $twitter_handle;
} else {
    $twitter_url = $twitter_url . substr($twitter_handle, $position + 1);
}

$insert_sql = "INSERT INTO php_and_mysql_users(first_name,last_name,email,facebook_url,twitter_handle) VALUES
('{$first_name}','{$last_name}','{$email}','{$facebook_url}','{$twitter_url}')";

$result = mysql_query($insert_sql) or die(mysql_error());
if ($result) {
    echo 'data inserted successfully';
}
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
