<input type="file" name="photo" value=""/>

<!--
 you can add a hidden form field called MAX_
FILE_SIZE that specifies the maximum allowed size (in bytes) of an uploaded file
-->
<input type="hidden" name="MAX_FILE_SIZE" value="10000"/>
<input type="file" name="fileSelectField" id="fileSelectField" value=""/>

<?php
//If the user uploaded a file using this field, its details would be accessible via the following PHP array element:
$_FILES["photo"];

//you can find out the uploaded file’s filename like this:
$filename = $_FILES["photo"]["name"];

//Of course, you can also check the size of an uploaded file manually and reject it if it’s too large:
if ($_FILES["photo"]["size"] > 10000) die("File too big!");

/**
 * Storing and Using an Uploaded File
 */
if (move_uploaded_file($_FILES["photo"]["tmp_name"], "/home/matt/photos/
photo.jpg")) {
    echo "Your file was successfully uploaded.";
} else {
    echo "There was a problem uploading your file - please try again.";
}

?>

<!-- Create a File Upload Script -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Uploading a Photo</title>
    <link rel="stylesheet" type="text/css" href="../living-examples/ch09/common.css"/>
</head>
<body>
<?php
//
error_reporting(-1);
ini_set('display_errors', 'On');

if (isset($_POST['sendPhoto'])) {
    processForm();
} else {
    displayForm();
}

function processForm()
{
    if (isset($_FILES['photo']) and $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
        if ($_FILES['photo']['type'] != 'image/jpeg') {
            echo "<p>JPEG photos only, thanks!</p>";
        } elseif (!move_uploaded_file($_FILES['photo']['tmp_name'], '/var/www/effort/common-files/' . basename($_FILES['photo']['name']))) {
            echo '<p>Sorry, there was a problem uploading that photo.</p>' . $_FILES['photo']['error'];
        } else {
            displayThanks();
        }
    } else {
        switch ($_FILES['photo']['error']) {
            case UPLOAD_ERR_INI_SIZE:
                $message = 'The photo is larger than the server allows.';
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $message = 'The photo is larger than the script allows';
                break;
            case UPLOAD_ERR_NO_FILE:
                $message = 'No file was uploaded. Make sure you choose a file to upload.';
                break;
            default:
                $message = 'Please contact your service administrator for help.';
        }
        echo '<p>Sorry, there was a problem uploading that photo.' . $message . '</p>';
    }
}

function displayForm()
{
    ?>
    <h1>Uploading a Photo</h1>
    <p>Please enter your name and choose a photo to upload, then click
        Send Photo.</p>
    <form action="" method="post" enctype="multipart/form-data">
        <div style="width: 30em;">
            <input type="hidden" name="MAX_FILE_SIZE" value="500000"/>
            <label for="visitorName">Your name</label>
            <input type="text" name="visitorName" id="visitorName" value=""/>
            <label for="photo">Your photo</label>
            <input type="file" name="photo" id="photo" value=""/>

            <div style="clear: both;">
                <input type="submit" name="sendPhoto" value="Send Photo"/>
            </div>
        </div>
    </form>
    <?php
}

function displayThanks()
{
    ?>
    <h1>Thank You</h1>
    <p>Thanks for uploading your photo<?php if ($_POST["visitorName"]) echo ", " . $_POST["visitorName"] ?>!</p>
    <p>Here’s your photo:</p>
    <p><img src="../../common-files/<?php echo $_FILES["photo"]["name"] ?>" alt="Photo"/></p>

    <?php
}

?>
</body>
</html>


