<?php

require '../../scripts/database_connection.php';

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
  $bio            = preg_replace("/[\r\n]+/", "</p><p>", $row['bio']);
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

<html>
 <head>
  <link href="../../css/phpMM.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
  <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
  <div id="example">User Profile</div>

  <div id="content">
    <div class="user_profile">
      <h1><?php echo "{$first_name} {$last_name}"; ?></h1>
      <p><img src="<?php echo $user_image; ?>" class="user_pic" />
        <?php echo $bio; ?></p>
      <p class="contact_info">Get in touch with <?php echo $first_name; ?>:</p>
      <ul>
        <li>...by emailing them at
          <a href="<?php echo $email; ?>"><?php echo $email; ?></a></li>
        <li>...by
          <a href="<?php echo $facebook_url; ?>">checking them out 
             on Facebook</a></li>
        <li>...by <a href="<?php echo $twitter_url; ?>">following them 
             on Twitter</a></li>
      </ul>
    </div>
  </div>
  <div id="footer"></div>
 </body>
</html>
