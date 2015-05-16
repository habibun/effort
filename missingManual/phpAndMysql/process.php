<?php

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$facebook_url2 = trim($_REQUEST['facebook_url']);
$facebook_url = str_replace('facebook.org/','http://facebook.com/',$facebook_url2);
$position = strpos($facebook_url, 'facebook.com');
if ($position === false) {
    $facebook_url = 'http://facebook.com/' . $facebook_url;
}
$twitter_handle = $_REQUEST['twitter_handle'];
$twitter_url = "http://www.twitter.com/";
$tposition = strpos($twitter_handle, '@');
if ($tposition === false) {
    $twitter_url = $twitter_url . $twitter_handle;
}else{
    $twitter_url = $twitter_url.substr($twitter_handle, $tposition +1);
}

?>

<html>
<head>
</head>
<body>
<p>
    Name: <?php echo $first_name . ' ' .$last_name; ?><br />
    Last Name: <?php echo $last_name; ?><br />
    E-Mail Address: <?php echo $email; ?><br />
    <a href="<?php echo $facebook_url; ?>" target="_blank">Your Facebook page</a> <br />
    <a href="<?php echo $twitter_url; ?>" target="_blank">Check out your Twitter feed</a><br />
</p>
</body>
</html>
