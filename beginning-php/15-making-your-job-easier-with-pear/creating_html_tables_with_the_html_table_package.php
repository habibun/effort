<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/8/15
 * Time: 7:16 PM
 */

/**
 * Displaying Fibonacci Numbers with HTML_Table
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Fibonacci sequence using HTML_Table</title>
    <link rel="stylesheet" type="text/css" href="common.css"/>
    <style type="text/css">
        th {
            text-align: left;
            background-color: #999;
        }

        th, td {
            padding: 0.4em;
        }

        tr.alt td {
            background: #ddd;
        }
    </style>
</head>
<body>
<h2>Fibonacci sequence using HTML_Table</h2>
<?php
require_once("HTML/Table.php");
$attrs = array("cellspacing" => 0, "border" => 0, "style" => "width: 20em; border: 1px solid #666;");
$table = new HTML_Table($attrs);
$table->addRow(array("Sequence #", "Value"), null, "th");
$iterations = 10;
$num1 = 0;
$num2 = 1;
$table->addRow(array("F<sub>0</sub>", "0"));
$table->addRow(array("F<sub>1</sub>", "1"));
for ($i = 2; $i <= $iterations; $i++) {
    $sum = $num1 + $num2;
    $num1 = $num2;
    $num2 = $sum;
    $table->addRow(array("F<sub>$i</sub>", $num2));
}
$attrs = array("class" => "alt");
$table->altRowAttributes(1, null, $attrs, true);
echo $table->toHtml();
?>
</body>
</html>

