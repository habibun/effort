<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/10/15
 * Time: 8:12 PM
 */

error_reporting(-1);
ini_set('display_errors', 'On');

/**
 * copy a file
 */
//copy($_SERVER["DOCUMENT_ROOT"]."/common-files/copyme.txt",$_SERVER["DOCUMENT_ROOT"]."/common-files/copied.txt");

/**
 * rename a file
 */
//rename($_SERVER["DOCUMENT_ROOT"]."/common-files/address.dat",$_SERVER["DOCUMENT_ROOT"]."/common-files/address.backup");

/**
 * move a file
 */
//rename($_SERVER["DOCUMENT_ROOT"]."/common-files/move.txt","/home/jony/move.txt");

/**
 *  delete a file
 */
unlink($_SERVER["DOCUMENT_ROOT"] . "/common-files/trash.txt");

