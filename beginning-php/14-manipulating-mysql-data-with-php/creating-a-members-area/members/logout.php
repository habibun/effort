<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/5/15
 * Time: 1:09 PM
 */

require_once( "../common.inc.php" );

session_start();
$_SESSION["member"] = "";
displayPageHeader( "Logged out", true );
?>
<p>Thank you, you are now logged out. <a href="login.php">Login
        again</a>.</p>
<?php
displayPageFooter();
?>
