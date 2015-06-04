<?php

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$facebook_url = $_REQUEST['facebook_url'];
$twitter_handle = $_REQUEST['twitter_handle'];

?>

<html>
 <head>
  <link href="../../css/phpMM.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
  <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div> 
  <div id="example">Example 3-1</div>

  <div id="content">
    <p>Here's a record of what information you submitted:</p>
    <p>
      First Name: <?php echo $first_name; ?><br />
      Last Name: <?php echo $last_name; ?><br />
      E-Mail Address: <?php echo $email; ?><br />
      Facebook URL: <?php echo $facebook_url; ?><br />
      Twitter Handle: <?php echo $twitter_handle; ?><br />
    </p>
  </div>

  <div id="footer"></div>
 </body>
</html>
