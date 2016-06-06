<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/12/15
 * Time: 11:52 AM
 */

/**
 * 1.
 * Download and install the Numbers_Roman PEAR package, and use it to write a script that
 * displays the integers 1 to 100 as Roman numbers.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>1 to 100 in Roman numerals</title>
    <link rel="stylesheet" type="text/css" href="common.css"/>
</head>
<body>
<h1>1 to 100 in Roman numerals</h1>
<p>
    <?php
    require_once("Numbers/Roman.php");
    for ($i = 1; $i <= 100; $i++) {
        echo Numbers_Roman::toNumeral($i, true, true) . "<br />";
    }
    ?>
</p>
</body>
</html>

<?php
/**
 * 2.
 * Use Numbers_Roman and HTML_QuickForm to write a Roman-to-Arabic number converter.
 * The user can enter a number in either Roman or Arabic format and then click a Convert
 * button. The script then displays the number in the alternate format.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Roman numerals converter</title>
</head>
<body>
<h1>Roman numerals converter</h1>
<?php
require_once("HTML/QuickForm.php");
require_once("Numbers/Roman.php");
$form = new HTML_QuickForm("convertForm", "get", "", "", null, true);
$form->removeAttribute("name");
$form->addElement("text", "number", "Number (in Arabic or Roman format)");
$form->addElement("submit", "convertButton", "Convert");
$form->addRule("number", "Please enter a number", "required");
if ($form->isSubmitted() and $form->validate()) {
    $form->process("convertNumber");
}
echo $form->toHtml();
function convertNumber($values)
{
    $originalNumber = $values["number"];
    if (is_numeric($originalNumber)) {
        $numerals = "Roman";
        $originalNumber = (int)$originalNumber;
        $convertedNumber = Numbers_Roman::toNumeral($originalNumber, true, true);
    } else {
        $numerals = "Arabic";
        $originalNumber = preg_replace("/[^IVXLCDM]/i", "", $originalNumber);
        $convertedNumber = Numbers_Roman::toNumber($originalNumber);
    }
    echo "<p>$originalNumber in $numerals numerals is: $convertedNumber.</p>";
}

?>
</body>
</html>
