<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/29/15
 * Time: 9:05 PM
 */

/**
 * Parsing fixed-width records with substr( )
 */
$fp = fopen('fixed-width-records.txt','r',true) or die ("can't open file");
while ($s = fgets($fp,1024)) {
    $fields[1] = substr($s,0,25); // first field: first 25 characters of the line
    $fields[2] = substr($s,25,15); // second field: next 15 characters of the line
    $fields[3] = substr($s,40,4); // third field: next 4 characters of the line
    $fields = array_map('rtrim', $fields); // strip the trailing whitespace
// a function to do something with the fields
    process_fields($fields);
}
fclose($fp) or die("can't close file");

/**
 * Parsing fixed-width records with unpack( )
 */
function fixed_width_unpack($format_string,$data) {
    $r = array();
    for ($i = 0, $j = count($data); $i < $j; $i++) {
        $r[$i] = unpack($format_string,$data[$i]);
    }
    return $r;
}

/**
 * fixed_width_substr( )
 */
function fixed_width_substr($fields,$data) {
    $r = array();
    for ($i = 0, $j = count($data); $i < $j; $i++) {
        $line_pos = 0;
        foreach($fields as $field_name => $field_length) {
            $r[$i][$field_name] = rtrim(substr($data[$i],$line_pos,$field_length));
            $line_pos += $field_length;
        }
    }
    return $r;
}
$book_fields = array('title' => 25,
    'author' => 15,
    'publication_year' => 4);
$book_array = fixed_width_substr($book_fields,$booklist);

/**
 * fixed_width_unpack( )
 */
function fixed_width_unpack2($format_string,$data) {
    $r = array();
    for ($i = 0, $j = count($data); $i < $j; $i++) {
        $r[$i] = unpack($format_string,$data[$i]);
    }
    return $r;
}

/**
 * for example:
 */
$book_array = fixed_width_unpack('A25title/A15author/A4publication_year',
    $books);
print "<table>\n";
// print a header row
print '<tr><td>';
print join('</td><td>',array_keys($book_array[0]));
print "</td></tr>\n";
// print each data row
foreach ($book_array as $row) {
    print '<tr><td>';
    print join('</td><td>',array_values($row));
    print "</td></tr>\n";
}
print "</table>\n";
