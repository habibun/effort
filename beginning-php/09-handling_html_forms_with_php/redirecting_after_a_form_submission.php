<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/23/15
 * Time: 3:57 PM
 */
?>
<?php
if (isset($_POST["submitButton"])) {
// (deal with the submitted fields here)
    header("Location: ../../common-files/thanks.html");
    exit;
} else {
    displayForm();
}
function displayForm()
{
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Membership Form</title>
        <link rel="stylesheet" type="text/css" href="../living-examples/ch09/common.css"/>
    </head>
    <body>
    <h1>Membership Form</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div style="width: 30em;">
            <label for="firstName">First name</label>
            <input type="text" name="firstName" id="firstName" value=""/>
            <label for="lastName">Last name</label>
            <input type="text" name="lastName" id="lastName" value=""/>

            <div style="clear: both;">
                <input type="submit" name="submitButton" id="submitButton" value=
                "Send Details"/>
            </div>
        </div>
    </form>
    </body>
    </html>
    <?php
}

?>

