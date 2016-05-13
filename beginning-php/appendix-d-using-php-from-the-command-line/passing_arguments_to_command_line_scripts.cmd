How can your PHP script read these arguments? The answer lies in the $argv and $argc predefined
variables. The $argv array contains a list of all the arguments passed to the script, and the $argc
variable contains the number of arguments passed (that is, the length of the $argv array). So your
hello.php script could simply display the contents of $argc and $argv as follows:

#!/usr/bin/php
<?php
echo "Number of arguments: $argc\n\n";
echo "Argument list:\n\n";
print_r($argv);
?>






Here’s an enhanced hello.php script. This script loops through $argv and separates the argument
names from the argument values, removing the initial “--” from the argument names, and storing the
resulting values in an $arguments array, keyed by argument name. It then queries the $arguments
array to display the output to the user:

#!/usr/bin/php
<?php
$arguments = array();
foreach ( $argv as $arg ) {
list( $argName, $argValue ) = split ( "=", $arg );
$argName = preg_replace ( "/^--/", "", $argName );
$arguments[$argName] = $argValue;
}
echo "Hello, " . $arguments["name"] . "! ";
echo "Your pet is called " . $arguments["pet"] . ".\n";
?>
