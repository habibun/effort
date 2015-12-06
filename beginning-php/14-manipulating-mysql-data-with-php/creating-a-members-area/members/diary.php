<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/5/15
 * Time: 1:13 PM
 */

require_once( "../common.inc.php" );
checkLogin();
displayPageHeader( "Upcoming events", true );
?>
<dl>
    <dt>September 23</dt>
    <dd>Book reading by Billy Pierce</dd>
    <dt>October 3 </dt>
    <dd>Club outing to Yellowstone</dd>
    <dt>October 17</dt>
    <dd>Book signing by Valerie Wordsworth at the local bookstore</dd>
</dl>
<p><a href="index.php">Members’ area home page</a></p>
<?php displayPageFooter(); ?>
