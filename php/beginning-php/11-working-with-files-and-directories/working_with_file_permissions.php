<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/9/15
 * Time: 8:55 PM
 */

/**
 * Changing Permissions
 */
/*
 * To change a file’s permissions with chmod(), pass it the filename and the new mode to use.
For example, to set a file’s mode to 644, use:
 */
$per = chmod($_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt",0644);

//Here are some commonly used examples to make the concept of file modes clearer:

// Owner can read and write the file; everyone else can just read it:
$read = chmod( $_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt", 0644 );
// Everyone can read and write the file:
$write = chmod( $_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt", 0666 );
// Everyone can read and execute the file, but only the owner can write to it:
$writeOnly = chmod( $_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt", 0755 );
// Only the owner can access the file, and they can only read and write to it:
$access = chmod( $_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt", 0600 );

/**
 * Checking File Permissions
 */
$myFile = $_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt";

if ( is_readable( $_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt" )) {
    echo "I can read myfile.txt";
}

if ( is_writable( $_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt" )) {
    echo "I can write to myfile.txt";
}
if ( is_executable( $_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt" )) {
    echo "I can execute myfile.txt";
}

/*
 * You can also use the fileperms() function to return an integer representing the permissions that are set
on a file or directory. For example, to print the octal value of the permissions on a file you might use:
 */
echo substr( sprintf( "%o", fileperms( $_SERVER["DOCUMENT_ROOT"]."/common-files/myFile.txt") ), -4 );
 // Displays "0644"
