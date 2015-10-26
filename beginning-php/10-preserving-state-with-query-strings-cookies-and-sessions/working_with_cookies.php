<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/26/15
 * Time: 8:36 PM
 */

/**
 * Here’s an example that uses setcookie() to create a cookie storing the user ’s font size preference (3 in this case):
 */
setcookie( "fontSize", 3, time() + 60 * 60 * 24 * 365, "/", ".example.com", false, true );


