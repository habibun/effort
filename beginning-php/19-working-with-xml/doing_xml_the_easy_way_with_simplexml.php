<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 3/14/16
 * Time: 8:44 PM
 */

/**
 * Reading an XML Document
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Reading an XML File with the SimpleXML Extension</title>
<link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
<h1>Reading an XML File with the SimpleXML Extension</h1>
<pre>
<?php
// Read the XML document into a SimpleXMLElement object
$stockList = simplexml_load_file( "./stock_list.xml", "SimpleXMLElement",
LIBXML_NOCDATA );
// Display the object
echo htmlspecialchars( print_r( $stockList, true ) );
?>
</pre>
</body>
</html>

<?php
/**
 * Creating an XML Document
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Creating an XML File with the SimpleXML Extension</title>
<link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
<h1>Creating an XML File with the SimpleXML Extension</h1>
<pre>
<?php
// Create the root "stockList" element
$stockList = new SimpleXMLElement( "<stockList/>" );
// Create the first "item" element (apple)
$item = $stockList->addChild( "item" );
$item->addAttribute( "type", "fruit" );
// Create the item’s "name" child element
$item->addChild( "name", "apple" );
// Create the item’s "unitPrice" child element
$item->addChild( "unitPrice", "0.99" );
// Create the item’s "quantity" child element
$item->addChild( "quantity", "412" );
// Create the item’s "description" child element
$item->addChild( "description", "Apples are &gt;&gt;&gt;yummy&lt;&lt;&lt;" );
// Create the second "item" element (beetroot)
$item = $stockList->addChild( "item" );
$item->addAttribute( "type", "vegetable" );
// Create the item’s "name" child element
$item->addChild( "name", "beetroot" );
// Create the item’s "unitPrice" child element
$item->addChild( "unitPrice", "1.39" );
// Create the item’s "quantity" child element
$item->addChild( "quantity", "67" );
// Create the item’s "description" child element
$item->addChild( "description", "Beetroots are lovely &amp; purple" );
// Output the XML document, encoding markup characters as needed
echo htmlspecialchars( $stockList->asXML() );
?>
</pre>
</body>
</html>


<?php
/**
 * Converting Between SimpleXML and DOM Objects
 */
 // Create the item’s "description" child element
$itemDOM = dom_import_simplexml( $item );
$description = $itemDOM->ownerDocument->createElement( "description" );
$itemDOM->appendChild( $description );
$cdata = $itemDOM->ownerDocument->createCDATASection( "Apples are
>>>yummy<<<" );
$description->appendChild( $cdata );

?>