<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/28/15
 * Time: 1:52 AM
 */

/**
 * Generating comma-separated data
 */
$sales = array( array('Northeast','2005-01-01','2005-02-01',12.54),
    array('Northwest','2005-01-01','2005-02-01',546.33),
    array('Southeast','2005-01-01','2005-02-01',93.26),
    array('Southwest','2005-01-01','2005-02-01',945.21),
    array('All Regions','--','--',1597.34) );
$filename = '../../common-files/sales.csv';
$fh = fopen($filename,'w') or die("Can't open $filename");
foreach ($sales as $sales_line) {
    if (fputcsv($fh, $sales_line) === false) {
        die("Can't write CSV line");
    }
}
fclose($fh) or die("Can't close $filename");

/**
 * Printing comma-separated data
 */
$sales = array( array('Northeast','2005-01-01','2005-02-01',12.54),
    array('Northwest','2005-01-01','2005-02-01',546.33),
    array('Southeast','2005-01-01','2005-02-01',93.26),
    array('Southwest','2005-01-01','2005-02-01',945.21),
    array('All Regions','--','--',1597.34) );

$fh = fopen('php://output','w');
foreach ($sales as $sales_line) {
    if (fputcsv($fh, $sales_line) === false) {
        die("Can't write CSV line");
    }
}
fclose($fh);

/**
 * Putting comma-separated data into a string
 */
$sales = array( array('Northeast','2005-01-01','2005-02-01',12.54),
    array('Northwest','2005-01-01','2005-02-01',546.33),
    array('Southeast','2005-01-01','2005-02-01',93.26),
    array('Southwest','2005-01-01','2005-02-01',945.21),
    array('All Regions','--','--',1597.34) );

ob_start();
$fh = fopen('php://output','w') or die("Can't open php://output");
foreach ($sales as $sales_line) {
    if (fputcsv($fh, $sales_line) === false) {
        die("Can't write CSV line");
    }
}
fclose($fh) or die("Can't close php://output");
$output = ob_get_contents();
ob_end_clean();
