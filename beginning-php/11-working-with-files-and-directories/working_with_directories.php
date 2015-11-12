<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/10/15
 * Time: 9:09 PM
 */

//a directory handle
$handle = opendir($_SERVER["DOCUMENT_ROOT"]."/common-files");


//close a directory
closedir($handle);

/*
 * The readdir() function expects a directory handle for an opened directory, and returns the filename
of the next entry in the directory:
 */
$filename = readdir( $handle );


/**
 * List Directory Entries
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Listing the contents of a directory</title>
    <link rel="stylesheet" type="text/css" href="/beginning-php/living-examples/ch11/common.css" />
</head>
<body>
<h1>Listing the contents of a directory</h1>
<?php
$dirPath = $_SERVER["DOCUMENT_ROOT"]."/common-files";

if(!($handle = opendir($dirPath))) die ("Cannot open the directory.");
?>
<p><?php echo $dirPath ?> contains the following files and folders:</p>
<ul>
    <?php
    /*while($file = readdir($handle)){
         echo "<li>$file</li>";
    }*/
/*
 * You can see that the returned filenames are not sorted in any way. To sort them, first read the entries
into an array:
 */
    $fileNames = array();

    while($file = readdir($handle)){
        $fileNames[] = $file;
    }

    closedir($handle);
    sort($fileNames);

    foreach($fileNames as $file){

        //solution first
        if($file != "." && $file != ".."){
            echo "<li>$file</li>";
        }
        //end solution first

        //solution second
        if($file == "." || $file == "..") {
            unset($file);
            continue;
        }
        echo "<li>$file</li>";
        //end solution second
    }
?>
    </ul>
</body>
</html>