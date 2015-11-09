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
$handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/common-files/myFile.txt", "r");

//This code reads the first ten characters from data.txt and assigns them to $data as a string.
$data = fread($handle, 10);

//echo $data;

$one_char = fgetc($handle);
//echo $one_char;

/*
You can use the fwrite() function to write data to a file. It requires two arguments: a file handle and a
string to write to the file. The function writes the contents of the string to the file, returning the number
of characters written (or false if there’s an error)
 */

$handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/common-files/myFile.txt", "w");
fwrite($handle, "ABCxyz");
fwrite($handle, " new text");

//the following code writes the first four characters of "abcdefghij" (that is,"abcd") to the file:
fwrite($handle, "abcdefghij", 4);

/**
 *  A Simple Hit Counter
 */
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Hit counter</title>
        <link rel="stylesheet" type="text/css" href="../living-examples/ch11/common.css"/>
    </head>
    <body>
    <!--<h1>A simple hit counter</h1>-->
    <?php
    $counterFile = $_SERVER["DOCUMENT_ROOT"] . "/common-files/count.dat";
    if (!file_exists($counterFile)) {
        if (!($handle = fopen($counterFile, "w"))) {
            die("Cannot create the counter file.");
        } else {
            fwrite($handle, 0);
            fclose($handle);
        }
    }

    if (!($handle = fopen($counterFile, "r"))) {
        die("Cannot read the counter file.");
    }

    $counter = (int)fread($handle, 20);
    fclose($handle);

    $counter++;

    //    echo "<p>You are visitor No. $counter.";
    if (!($handle = fopen($counterFile, "w"))) {
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

$handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/common-files/hello_world.txt", "r");
$hello = fread($handle, 1);
//echo $hello.$lineBreak;
//echo feof($handle).$lineBreak;

$five_more_chars = fread($handle, 5);
//echo $five_more_chars.$lineBreak;
//echo feof($handle);
fclose($handle);

//feof() is useful with fread() or fgetc() in a while loop when you don’t know how long the file is:
$handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/common-files/hello_world.txt", "r");
$text = "";
while (!feof($handle)) {
    $text .= fread($handle, 3);
    // Read 3 chars at a time
}
//echo $text . "<br />";
// Displays "Hello, world!"
fclose($handle);

/**
 * Reading One Line at a Time
 */
$handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/common-files/milton.txt", "r");
$lineNumber = 1;
while ($line = fgets($handle)) {
//    echo $lineNumber++ . ": $line<br/>";
}
fclose($handle);

/**
 * Reading CSV Files
 */
$handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/common-files/people.csv", "r");
while ($record = fgetcsv($handle, 1000)) {
//    echo "Name: {$record[0]} {$record[1]}, Age: {$record[2]}<br />";
}

/**
 * Reading and Writing Entire Files
 */
/*
 * file() reads the contents of a file into an array, with each element containing a line from the file. It
takes just one argument — a string containing the name of the file to read — and returns the array
containing the lines of the file:
 */
$lines = file($_SERVER["DOCUMENT_ROOT"] . "/common-files/myFile.txt");
//echo $lines[0];

/*
 *  For example, the following code looks for a file in the include path and, when found, reads
the file, ignoring any empty lines in the file:
 */
$lines = file($_SERVER["DOCUMENT_ROOT"] . "/common-files/myFile.txt", FILE_USE_INCLUDE_PATH | FILE_SKIP_EMPTY_LINES);
//print_r($lines);

//As with fopen(), you can also use file() to fetch files on a remote host:
$lines = file("https://www.google.com.bd/?gws_rd=cr&ei=0HY_VsDMAcHmuQSo3pegAQ");
//foreach ( $lines as $line ) echo $line . "<br />";

/*
 * A related function is file_get_contents(). This does a similar job to file(), but it returns the
file contents as a single string, rather than an array of lines. The end-of-line characters are included in
the string:
 */
$fileContents = file_get_contents("https://www.google.com.bd/?gws_rd=cr&ei=0HY_VsDMAcHmuQSo3pegAQ");
//echo $fileContents;

/*
 *  For example, the following code reads 23
characters from myfile.txt, starting at character 17:
 */
$fileContents = file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/common-files/myFile.txt", null, null, 17, 23);

/*
 * file_put_contents() is the complement to file_get_contents(). As you’d imagine, it takes a
string and writes it to a file:
 */

$myString = "this is my string";
$numChars = file_put_contents($_SERVER["DOCUMENT_ROOT"] . "/common-files/myFile.txt", $myString | FILE_APPEND);

/*
 * fpassthru() and readfile() both take a file and output its unmodified contents straight to the Web
browser. fpassthru() requires the handle of an open file to work with:
 */
$numChars = fpassthru($handle);

//readfile() instead works on an unopened file:

$numChars = readfile($_SERVER["DOCUMENT_ROOT"] . "/common-files/myFile.txt");
//echo $numChars;

/**
 * Random Access to File Data
 */
$handle = fopen($_SERVER["DOCUMENT_ROOT"] . "/common-files/hello_world.txt", "r");
fseek($handle, 7);
echo fread($handle, 5);
fclose($handle);

//The following two lines of code both do the same thing:
fseek($handle, 0);
rewind($handle);

/*
 * The ftell() function takes a file handle and returns the current offset (in characters) of the
corresponding file pointer from the start of the file. For example:
 */
$offset = ftell($handle);
