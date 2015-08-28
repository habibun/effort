<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/28/15
 * Time: 11:11 AM
 */

$filename = '../../common-files/sales.csv';
$fp = fopen($filename, 'r') or die("can't open file");

print "<table>\n";
while($csv_line = fgetcsv($fp)){
    print "<tr>";
    for($i = 0, $j = count($csv_line); $i < $j; $i++){
        print '<td>'.htmlentities($csv_line[$i]).'</td>';
    }
    print '</tr>';
}
print "</table>\n";
fclose($fp) or die("can't close file");