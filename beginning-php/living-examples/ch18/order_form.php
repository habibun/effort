<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Validating Order Form Fields</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>

    <h1>Validating Order Form Fields</h1>

<?php

if ( isset( $_POST["submitted"] ) ) {
  processForm();
} else {
  displayForm();
}

function displayForm() {
?>
    <h2>Please enter your order details below then click Send Order:</h2>
    <form action="" method="post" style="width: 30em;">
      <div>
        <input type="hidden" name="submitted" value="1" />
        <label for="emailAddress">Your Email Address:</label>
        <input type="text" name="emailAddress" id="emailAddress" value="" />
        <label for="phoneNumber">Your Phone Number:</label>
        <input type="text" name="phoneNumber" id="phoneNumber" value="" />
        <label for="productCodes">Product Codes to Order:</label>
        <input type="text" name="productCodes" id="productCodes" value="" />
        <label> </label>
        <input type="submit" name="submitButton" value="Send Order" />
      </div>
    </form>
    <div style="clear: both;"> </div>
    <p>(Separate product codes by commas. Codes are SW, MW, WW followed by 2 digits.)</p>
<?php
}

function processForm() {
  $errorMessages = array();

  $emailAddressPattern = "/
    ^                     # Start of string

    \w+((-|\.)\w+)*       # Some word characters optionally separated by - or .

    \@

    [A-Za-z\d]+           # Domain name: some alphanumeric characters
    ((-|\.)[A-Za-z\d]+)*  # followed 0 or more times by (- or . and more alphanums)
    \.[A-Za-z\d]+         # followed by a final dot and some alphanumerics

    $                     # End of string
    /x";

  $phoneNumberPattern = "/
    ^                     # Start of string

    (                     # Optional area code followed by optional separator:
      \(\d{3}\)[-. ]?     # Code with parentheses
      |                   # or
      \d{3}[-. ]?         # Code without parentheses
    )?

    \d{3}                 # Prefix
    [-.]                  # Hyphen or dot separator
    \d{4}                 # Line number

    $                     # End of string
    /x";

  $productCodePattern = "/^(SW|MW|WW)(\d{2})$/i";

  if ( !preg_match( $emailAddressPattern, $_POST["emailAddress"] ) ) $errorMessages[] = "Invalid email address";
  if ( !preg_match( $phoneNumberPattern, $_POST["phoneNumber"] ) ) $errorMessages[] = "Invalid phone number";

  if ( $errorMessages) {
    echo "<p>There was a problem with the form you sent:</p><ul>";
    foreach ( $errorMessages as $errorMessage ) echo "<li>$errorMessage</li>";
    echo '<p>Please <a href="javascript:history.go(-1)">go back</a> and try again.</p>';
  } else {
    echo "<p>Thanks for your order! You ordered the following items:</p><ul>";
    $productCodes = preg_split( "/\W+/", $_POST["productCodes"], -1, PREG_SPLIT_NO_EMPTY );
    $products = preg_replace_callback( $productCodePattern, "expandProductCodes", $productCodes );
    foreach ( $products as $product ) echo "<li>$product</li>";
    echo "</ul>";
  }

}

function expandProductCodes( $matches ) {
  $productCodes = array(
    "SW" => "SuperWidget",
    "MW" => "MegaWidget",
    "WW" => "WonderWidget"
  );

  return $productCodes[$matches[1]] . " model #" . $matches[2];
}

?>
  </body>
</html>
