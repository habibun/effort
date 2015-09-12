<?php

if ( isset( $_POST["submitButton"] ) ) {
  switch ( $_POST["store"] ) {
    case ".com":
      header( "Location: http://www.amazon.com/" );
      break;
    case ".ca":
      header( "Location: http://www.amazon.ca/" );
      break;
    case ".co.uk":
      header( "Location: http://www.amazon.co.uk/" );
      break;
  }
} else {
  displayForm();
}

function displayForm() {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Amazon Store Selector</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Amazon Store Selector</h1>
    <form action="" method="post">
      <div style="width: 35em;">
        <label for="store">Choose your Amazon store:</label>
        <select name="store" id="store" size="1">
          <option value=".com">Amazon.com</option>
          <option value=".ca">Amazon.ca</option>
          <option value=".co.uk">Amazon.co.uk</option>
        </select>
        <div style="clear: both;">
          <input type="submit" name="submitButton" id="submitButton" value="Visit Store" />
        </div>
      </div>
    </form>
<?php
}
?>
  </body>
</html>
