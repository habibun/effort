<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/26/15
 * Time: 8:36 PM
 */

/**
 * Here's an example that uses setcookie() to create a cookie storing the user 's font size preference (3 in this case):
 */
//setcookie( "fontSize", 3, time() + 60 * 60 * 24 * 365, "/", ".example.com", false, true );


/**
 *  Note that the expires argument is zero, so the cookie will disappear when the user
 * closes her browser. In addition the domain argument is an empty string, which means the browser will
 * only send the cookie back to the exact Web server that created it:
 */
//setcookie( "pageViews", 7, 0, "/", "", false, true );

/**
 * You can also update an existing cookie simply by calling setcookie() with the cookie name and
 * the new value. Note that you still need to supply the path and expires arguments when updating the
 * cookie:
 */
//setcookie( "pageViews", 8, 0, "/", "", false, true );


/**
 * Accessing Cookies in Your Scripts
 */
//So to display the pageViews cookie set in the previous example, you could use:
//echo $_COOKIE["pageViews"]; // Displays "8"

/**
 * Removing Cookies
 */

/**
 * To delete a cookie, you call setcookie() with the cookie name and any value (such as an empty
 * string), and pass in an expires argument that is in the past. This immediately expires the cookie on the
 * browser, ensuring that it is deleted. You should also pass exactly the same path, domain, and other fields
 * that you used when you first created the cookie to ensure that the correct cookie is deleted:
 */
//setcookie( "fontSize", "", time() - 3600, "/", ".example.com", false, true );
?>


<?php
/**
 * Example
 *
 * Remember User Information
 */

if (isset($_POST['sendInfo'])) {
    storeInfo();
} elseif (isset($_GET['action']) and $_GET['action'] == 'forget') {
    forgetInfo();
} else {
    displayForm();
}

function storeInfo()
{
    $firstName = (isset($_POST['firstName']) ? $_POST['firstName'] : "");
    $location = (isset($_POST['location']) ? $_POST['location'] : "");

    setcookie('firstName', $firstName, time() + 60 * 60 * 24 * 365, "", "", false, true);
    setcookie('location', $location, time() + 60 * 60 * 24 * 365, "", "", false, true);

    header("location: working_with_cookies.php");
}

function forgetInfo()
{
    setcookie('firstName', "", time() - 3600, "", "", false, true);
    setcookie('location', "", time() - 3600, "", "", false, true);

    header("Location: working_with_cookies.php");
}

function displayForm(){
$firstName = (isset($_COOKIE['firstName']) ? $_COOKIE['firstName'] : "");
$location = (isset($_COOKIE['location']) ? $_COOKIE['location'] : "");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Remembering user information with cookies</title>
    <link rel="stylesheet" type="text/css" href="../living-examples/ch10/common.css"/>
</head>
<body>
<h2>Remembering user information with cookies</h2>
<?php
if ($firstName || $location) {
    ?>
    <p>Hi,<?php echo $firstName; ?>
        <?php echo " in " . $location; ?>
    </p>
    <p>Here's a little nursery rhyme I know:</p>
    <p><em>Hey diddle diddle,<br/>
            The cat played the fiddle,<br/>
            The cow jumped over the moon.<br/>
            The little dog laughed to see such sport,<br/>
            And the dish ran away with the spoon.</em></p>
    <p><a href="working_with_cookies.php?action=forget">Forget about me!</a></p>
    <?php
} else {
    ?>
    <form action="working_with_cookies.php" method="post">
        <div style="width: 30em;">
            <label for="firstName">What's your first name?</label>
            <input type="text" name="firstName" id="firstName" value=""/>
            <label for="location">Where do you live?</label>
            <input type="text" name="location" id="location" value=""/>

            <div style="clear: both;">
                <input type="submit" name="sendInfo" value="Send Info"/>
            </div>
        </div>
    </form>
    <?php
}
?>
<?php
}
?>
</body>
</html>

