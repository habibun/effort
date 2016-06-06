<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Sending an HTML email message</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Sending an HTML email message</h1>
<?php

$message = <<<END_HTML
<html>
  <body>
    <h1 style="color: #AA3333;">Thank You</h1>
    <p>Thank you for contacting <a href="http://www.example.com/">The Widget Company</a>. We'll be in touch shortly.</p>
  </body>
</html>
END_HTML;

  $headers = "From: The Widget Company <widgets@example.com>\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $recipient = "John Smith <johnsmith@example.com>";
  $subject = "Thank you for contacting us";
  mail( $recipient, $subject, $message, $headers );

?>
  </body>
</html>
