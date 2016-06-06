<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/31/15
 * Time: 8:58 PM
 */

/**
 * Downloadable CSV file
 */
$db = new PDO('sqlite:/usr/local/data/sales.db');
$query = $db->query('SELECT region, start, end, amount FROM sales', PDO::FETCH_NUM);
$sales_data = $db->fetchAll();
// Open filehandle for fputcsv()
$output = fopen('php://output','w') or die("Can't open php://output");
$total = 0;
// Tell browser to expect a CSV file
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="sales.csv"');
// Print header row
fputcsv($output,array('Region','Start Date','End Date','Amount'));
// Print each data row and increment $total
foreach ($sales_data as $sales_line) {
    fputcsv($output, $sales_line);
    $total += $sales_line[3];
}
// Print total row and close file handle
fputcsv($output,array('All Regions','--','--',$total));
fclose($output) or die("Can't close php://output");

/**
 * Example 1-39. Dynamic CSV or HTML
 */
$db = new PDO('sqlite:/usr/local/data/sales.db');
$query = $db->query('SELECT region, start, end, amount FROM sales', PDO::FETCH_NUM);
$sales_data = $db->fetchAll();
$total = 0;
$column_headers = array('Region','Start Date','End Date','Amount');
// Decide what format to use
$format = $_GET['format'] == 'csv' ? 'csv' : 'html';
// Print format-appropriate beginning
if ($format == 'csv') {
    $output = fopen('php://output','w') or die("Can't open php://output");
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="sales.csv"');
    fputcsv($output,$column_headers);
} else {
    echo '<table><tr><th>';
    echo implode('</th><th>', $column_headers);
    echo '</th></tr>';
}
foreach ($sales_data as $sales_line) {
// Print format-appropriate line
    if ($format == 'csv') {
        fputcsv($output, $sales_line);
    } else {
        echo '<tr><td>' . implode('</td><td>', $sales_line) . '</td></tr>';
    }
    $total += $sales_line[3];
}
$total_line = array('All Regions','--','--',$total);
// Print format-appropriate footer
if ($format == 'csv') {
    fputcsv($output,$total_line);
    fclose($output) or die("Can't close php://output");
} else {
    echo '<tr><td>' . implode('</td><td>', $total_line) . '</td></tr>';
    echo '</table>';
}
