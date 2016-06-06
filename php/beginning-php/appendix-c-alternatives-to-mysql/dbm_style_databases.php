<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 4/1/16
 * Time: 11:15 AM
 */

$conn = dba_open( "/home/jony/Projects/effort/common-files/products.db", "n", "db4" );
if ( !$conn ) {
    die ("Couldn't open database");
}
dba_replace( 123, "The MegaWidget", $conn );
if ( dba_exists( 123, $conn )) {
    echo dba_fetch( 123, $conn );
    // displays "The MegaWidget"
}
dba_close( $conn );
