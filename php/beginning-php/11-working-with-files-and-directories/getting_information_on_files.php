<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/6/15
 * Time: 12:51 PM
 */
error_reporting(-1);
ini_set('display_errors', 'On');
/**
 * you can use file_exists() to discover whether a file exists before attempting to open it.
 */

//to check if file exists
$filePath = $_SERVER['DOCUMENT_ROOT'] . "/common-files/myFile.txt";

//to check file size
$fileSize = $_SERVER['DOCUMENT_ROOT'] . "/common-files/myFile.txt";


if (file_exists($filePath)) {
    echo "The file $filePath exists";
} else {
    echo "The file $filePath does not exist";
}

echo "<br/>" . filesize($fileSize) . " bytes";

/**
 * Time-Related Properties
 */

$lastAccessed = fileatime($filePath);
echo "<br/>" . date("d-m-Y h:i:s:a", $lastAccessed);

$lastChanged = filectime($filePath);
echo '<br />' . date("d-m-Y h:i:s:a", $lastChanged);

$lastModified = filemtime($filePath);
echo "<br />" . date("d-m-Y h:i:s:a", $lastModified);


/**
 * Retrieving a Filename from a Path
 */
$fileName = basename($filePath);
echo "<br/>" . $fileName;

//You can specify a directory path instead, in which case the rightmost directory name is returned
$dir = $_SERVER["DOCUMENT_ROOT"] . "/common-files/";
echo "<br/>" . basename($dir);

/*
 * If you don’t want the filename extension, or suffix, you can strip that off too by supplying the suffix as a
second argument to basename().
 */
$fileName = basename($filePath, ".txt");
echo "<br/>" . $fileName;