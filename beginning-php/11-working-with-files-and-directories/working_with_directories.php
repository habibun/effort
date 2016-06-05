<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/10/15
 * Time: 9:09 PM
 */
error_reporting(-1);
ini_set('display_errors', 'On');

//a directory handle
//$handle = opendir($_SERVER["DOCUMENT_ROOT"]."/assets");


//close a directory
//closedir($handle);

/*
 * The readdir() function expects a directory handle for an opened directory, and returns the filename
of the next entry in the directory:
 */
//$filename = readdir( $handle );


/**
 * List Directory Entries
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Listing the contents of a directory</title>
    <link rel="stylesheet" type="text/css" href="/beginning-php/living-examples/ch11/common.css"/>
</head>
<body>
<!--<h1>Listing the contents of a directory</h1>-->
<?php
//$dirPath = $_SERVER["DOCUMENT_ROOT"]."/assets";

//if(!($handle = opendir($dirPath))) die ("Cannot open the directory.");
?>
<!--<p>--><?php //echo $dirPath ?><!-- contains the following files and folders:</p>-->
<ul>
    <?php
    /*while ( $file = readdir( $handle ) ) {
        if ( $file != "." && $file != ".." ) echo "<li>$file</li>";
    }*/
    /*
     * You can see that the returned filenames are not sorted in any way. To sort them, first read the entries into an array:
     */
    /*$fileNames = array();

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
    }*/
    ?>
</ul>
</body>
</html>
<?php
/**
 * Other Directory Functions
 */
/*
❑
rewinddir() — Moves the directory pointer back to the start of the list of entries
❑
chdir() — Changes the current directory
❑
mkdir() — Creates a directory
❑
rmdir() — Deletes a directory
❑
dirname() — Returns the directory portion of a path

 */

/**
 * Resetting the Directory Pointer
 */
//rewinddir($handle);

/**
 * Changing the Current Directory
 */
//The chdir() function call changes the current directory to a new directory:
//chdir( "/home/jony/myfolder" );

/**
 * The current directory is the directory where PHP first looks for files. If you specify a path that isn’t an
 * absolute or relative path, PHP looks for the file inside the current directory. So the following code
 */
//chdir( $_SERVER["DOCUMENT_ROOT"]."/assets/myFolder" );
//$handle = fopen("myFile.txt","r");
//echo fread($handle,10);

//opens the same myFile.txt file as:
//$handle = fopen( $_SERVER["DOCUMENT_ROOT"]."/assets/myFolder/myFile.txt","r" );


//The current directory is also used as the base directory for relative file paths. For example:
//chdir( $_SERVER["DOCUMENT_ROOT"]."/assets/myFolder" );
//$handle = fopen( "../myFile.txt","r" ); // Looks for myFile.txt in /home/joe

//You can retrieve the current directory by calling getcwd():
//echo getcwd();


/**
 * Creating Directories
 */
//To create a new directory, call the mkdir() function, passing in the path of the directory you want to create:
//mkdir( $_SERVER["DOCUMENT_ROOT"]."/assets/newfolder" );

//You can also set permissions for the directory at the time you create it by passing the mode as the second argument.
//mkdir( $_SERVER["DOCUMENT_ROOT"]."/assets/newfolder", 0777 );

/**
 * Deleting Directories
 */
/*
 * The rmdir() function removes a given directory. The directory must be empty, and you need
appropriate permissions to remove it. For example:
 */
//rmdir( $_SERVER["DOCUMENT_ROOT"]."/assets/newfolder" );

/**
 * Getting the Directory Path
 */

$path = $_SERVER["DOCUMENT_ROOT"] . "common-files/myFolder/myFile.txt";
//dirname return the directory path of a given path.
$directoryPath = dirname($path);
//echo $directoryPath;
//basename return the filename portion
$filename = basename($path);
//echo $filename;

/**
 * Working with Directory Objects
 */
// first create a Directory object by calling the dir() function with the name of the directory you want to work with, as follows:
$dir = dir($_SERVER["DOCUMENT_ROOT"] . "/common-files");

/*
 * The Directory object provides two properties: handle and path. These refer to the directory handle
and the path to the directory, respectively:
 */
//echo $dir->handle."<br />";
//echo $dir->path."<br />";

/**
 *  For example, you
 * can rewrite the dir_list.php script from earlier in the chapter using a Directory object:
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Listing the contents of a directory</title>
    <link rel="stylesheet" type="text/css" href="common.css"/>
</head>
<body>
<!--<h1>Listing the contents of a directory</h1>-->
<?php
$dirPath = $_SERVER["DOCUMENT_ROOT"] . "/common-files/";
$dir = dir($dirPath);
?>
<!--<p>--><?php //echo $dirPath ?><!-- contains the following files and folders:</p>-->
<ul>
    <?php
    /*    while ( $file = $dir->read() ) {
            if ( $file != "." && $file != ".." ) echo "<li>$file</li>";
    }
        $dir->close();
        */ ?>
</ul>
</body>
</html>

<?php
/**
 * Telling a File from a Directory
 */
//Here’s a simple example that determines if a file called myfile is a file or a directory:
//$filename = "myFile";
$filename = $_SERVER["DOCUMENT_ROOT"] . "/common-files/myFile.txt";

if (is_dir($filename)) {
//    echo "$filename is a directory.";
} elseif (is_file($filename)) {
//    echo "$filename is a file.";
} else {
//    echo "$filename is neither a directory nor a file.";
}
/**
 * Traversing a Directory Hierarchy
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Listing the contents of a directory</title>
    <link rel="stylesheet" type="text/css" href="../living-examples/ch11/common.css"/>
</head>
<body>
<h1>Listing the contents of a directory</h1>
<?php
$dirPath = "/home/jony/Desktop";

function traverseDir($dir)
{
    echo "<h2>Listing $dir ...</h2>";
    if (!($handle = opendir($dir))) die("Cannot open $dir.");

    $files = array();
    while ($file = readdir($handle)) {
        if ($file != "." && $file != "..") {
            if (is_dir($dir . "/" . $file)) $file .= "/";
            $files[] = $file;
        }
    }

    sort($files);
    echo "<ul>";
    foreach ($files as $file) echo "<li>$file</li>";
    echo "</ul>";

    foreach ($files as $file) {
        if (substr($file, -1) == "/") traverseDir("$dir/" . substr($file,
                0, -1));
    }
    closedir($handle);
}

traverseDir($dirPath);
?>
</body>
</html>