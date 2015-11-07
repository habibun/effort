<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/6/15
 * Time: 10:22 PM
 */
$lineBreak = "<br/>";
/**
 * Reading and Writing Strings of Characters
 */
$handle = fopen($_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt","r");

//This code reads the first ten characters from data.txt and assigns them to $data as a string.
$data = fread($handle,10);

//echo $data;

$one_char = fgetc($handle);
//echo $one_char;

/*
You can use the fwrite() function to write data to a file. It requires two arguments: a file handle and a
string to write to the file. The function writes the contents of the string to the file, returning the number
of characters written (or false if there’s an error)
 */

$handle = fopen($_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt","w");
fwrite($handle,"ABCxyz");
fwrite($handle," new text");

//the following code writes the first four characters of "abcdefghij" (that is,"abcd") to the file:
fwrite( $handle, "abcdefghij", 4 );

/**
 *  A Simple Hit Counter
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Hit counter</title>
<link rel="stylesheet" type="text/css" href="../living-examples/ch11/common.css" />
</head>
<body>
<!--<h1>A simple hit counter</h1>-->
<?php
    $counterFile = $_SERVER["DOCUMENT_ROOT"]."/common-files/count.dat";
    if(!file_exists($counterFile)){
        if(!($handle = fopen($counterFile, "w"))){
            die("Cannot create the counter file.");
        }else{
            fwrite($handle, 0);
            fclose($handle);
        }
    }

    if(!($handle = fopen($counterFile, "r"))){
        die("Cannot read the counter file.");
    }

    $counter = (int) fread($handle, 20);
    fclose($handle);

    $counter++;

//    echo "<p>You are visitor No. $counter.";
    if(!($handle = fopen($counterFile, "w"))){
        die("Cannot open the counter file for writing.");
    }
    fwrite($handle, $counter);
    fclose($handle);
?>
</body>
</html>

<?php
/**
 * Testing for the End of a File
 */

 $handle = fopen($_SERVER["DOCUMENT_ROOT"]."/common-files/hello_world.txt","r");
$hello = fread($handle, 1);
//echo $hello.$lineBreak;
//echo feof($handle).$lineBreak;

$five_more_chars = fread($handle, 5);
//echo $five_more_chars.$lineBreak;
//echo feof($handle);
fclose($handle);

//feof() is useful with fread() or fgetc() in a while loop when you don’t know how long the file is:
$handle = fopen($_SERVER["DOCUMENT_ROOT"]."/common-files/hello_world.txt","r");
$text = "";
while ( !feof( $handle ) ) {
    $text .= fread( $handle, 3 );
    // Read 3 chars at a time
}
echo $text . "<br />";
 // Displays "Hello, world!"
fclose( $handle );

/**
 * Reading One Line at a Time
 */

