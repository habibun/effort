<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/5/15
 * Time: 1:11 PM
 */

require_once( "../common.inc.php" );
checkLogin();
displayPageHeader( "Welcome to the Members' Area", true );
?>
<p>Welcome, <?php echo $_SESSION["member"]->getValue( "firstName" ) ?>!
    Please choose an option below:</p>
    <ul>
        <li><a
                href="diary.php">Upcoming events</a></li>
        <li><a
                href="books.php">Current reading list</a></li>
        <li><a
                href="contact.php">Contact the book club</a></li>
        <li><a
                href="logout.php">Logout</a></li>
    </ul>
<?php displayPageFooter(); ?>
