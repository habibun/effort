<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 21/5/2015
 * Time: 10:31 PM
 */


// Get the user ID of the user to show
$user_id = $_REQUEST['user_id'];

// Build the SELECT statement
$select_query = "SELECT * FROM users WHERE user_id = " . $user_id;

// Run the query
$result = mysql_query($select_query);
if ($result) {
    $row = mysql_fetch_array($result);
    $first_name     = $row['first_name'];
    $last_name      = $row['last_name'];
    $bio       = $row['bio'];
    $email          = $row['email'];
    $facebook_url   = $row['facebook_url'];
    $twitter_handle = $row['twitter_handle'];

    // Turn $twitter_handle into a URL
    $twitter_url = "http://www.twitter.com/" .
        substr($twitter_handle, $position + 1);

    // To be added later
    $user_image = "../../images/missing_user.png";
} else {
    die("Error locating user with ID {$user_id}");
}

?>
