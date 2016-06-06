Here’s a simple example that prompts the user
for his address and contact details, then generates a signature file suitable for including in an email
message:

#!/usr/bin/php
<?php
echo "Welcome to the signature file generator.\n";
echo "Please enter your full name: ";
$name = trim( fgets( STDIN ) );
echo "Please enter your street address: ";
$address = trim( fgets( STDIN ) );
echo "Please enter your city: ";
$city = trim( fgets( STDIN ) );
echo "Please enter your state: ";
$state = trim( fgets( STDIN ) );
echo "Please enter your zip code: ";
$zip = trim( fgets( STDIN ) );
echo "Please enter your phone number: ";
$phone = trim( fgets( STDIN ) );
echo "Please enter your email address: ";
$email = trim( fgets( STDIN ) );
echo "Please enter a name for this signature: ";
$sig = trim( fgets( STDIN ) );
$data = "\n--\n$name\n$address\n$city, $state $zip\n$phone\n$email\n";
$sigfile = fopen( $sig, "w" ) or die( "Could not open file for writing\n" );
fwrite( $sigfile, $data ) or die( "Failed writing data\n" );
fclose( $sigfile );
echo "Your signature file is ready now.\n";
?>
