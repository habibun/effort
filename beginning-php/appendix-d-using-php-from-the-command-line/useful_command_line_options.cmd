You can pass these options on the command line after the php or php.exe. For example:

php -d display_errors=Off myscript.php




If you’ve made your script executable with a shebang line, place the options in the shebang instead:

#!/usr/bin/php -d display_errors=Off
<?php
// Script code here
?>
