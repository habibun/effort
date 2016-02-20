<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 2/24/16
 * Time: 8:30 PM
 */

/**
 * Read an XML Document using the DOM
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Reading an XML File with the DOM Extension</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
<h1>Reading an XML File with the DOM Extension</h1>
    <pre>

<?php

// Read the XML document into a DOMDocument object
$doc = new DOMDocument();
//$doc->load( "what_is_xml.xml" );

// Traverse the document
traverseDocument( $doc );

/*
  Traverses each node of the DOM document recursively
*/

function traverseDocument( $node )
{
    switch ( $node->nodeType )
    {
        case XML_ELEMENT_NODE:
            echo "Found element: \"$node->tagName\"";

            if ( $node->hasAttributes() ) {
                echo " with attributes: ";
                foreach ( $node->attributes as $attribute ) {
                    echo "$attribute->name=\"$attribute->value\" ";
                }
            }

            echo "\n";
            break;

        case XML_TEXT_NODE:
            if ( trim($node->wholeText) ) {
                echo "Found text node: \"$node->wholeText\"\n";
            }
            break;

        case XML_CDATA_SECTION_NODE:
            if ( trim($node->data) ) {
                echo "Found character data node: \"" .
                    htmlspecialchars($node->data) . "\"\n";
            }
            break;
    }

    if ( $node->hasChildNodes() ) {
        foreach ( $node->childNodes as $child ) {
            traverseDocument( $child );
        }
    }
}

?>
    </pre>
</body>
</html>

<?php
/**
 * Creating an XML Document using the DOM
 */
 ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Creating an XML File with the DOM Extension</title>
        <link rel="stylesheet" type="text/css" href="common.css" />
    </head>
    <body>
    <h1>Creating an XML File with the DOM Extension</h1>
<pre>
<?php
// Create a DOMDocument object and set nice formatting
$doc = new DOMDocument( "1.0", "UTF-8" );
$doc->formatOutput = true;
// Create the root "stockList" element
$stockList = $doc->createElement( "stockList" );
$doc->appendChild( $stockList );
// Create the first "item" element (apple)
$item = $doc->createElement( "item" );
$item->setAttribute( "type", "fruit" );
$stockList->appendChild( $item );
// Create the item’s "name" child element
$name = $doc->createElement( "name", "apple" );
$item->appendChild( $name );
// Create the item’s "unitPrice" child element
$unitPrice = $doc->createElement( "unitPrice", "0.99" );
$item->appendChild( $unitPrice );
// Create the item’s "quantity" child element
$quantity = $doc->createElement( "quantity", "412" );
$item->appendChild( $quantity );
// Create the item’s "description" child element
$description = $doc->createElement( "description" );
$item->appendChild( $description );
$cdata = $doc->createCDATASection( "Apples are >>>yummy<<<" );
$description->appendChild( $cdata );
// Create the second "item" element (beetroot)
$item = $doc->createElement( "item" );
$item->setAttribute( "type", "vegetable" );
$stockList->appendChild( $item );
// Create the item’s "name" child element
$name = $doc->createElement( "name", "beetroot" );
$item->appendChild( $name );
// Create the item’s "unitPrice" child element
$unitPrice = $doc->createElement( "unitPrice", "1.39" );
$item->appendChild( $unitPrice );
// Create the item’s "quantity" child element
$quantity = $doc->createElement( "quantity", "67" );
$item->appendChild( $quantity );
// Create the item’s "description" child element
$description = $doc->createElement( "description" );
$item->appendChild( $description );
$cdata = $doc->createCDATASection( "Beetroots are lovely & purple" );
$description->appendChild( $cdata );
// Output the XML document, encoding markup characters as needed
echo htmlspecialchars( $doc->saveXML() );
?>
</pre>
    </body>
    </html>
<?php
/**
 * Manipulating XML Documents using the DOM
 */

 /**
  * Adding Elements to an Existing Document
  */
  ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Adding an Element to an XML File with the DOM Extension</title>
        <link rel="stylesheet" type="text/css" href="common.css" />
    </head>
    <body>
    <h1>Adding an Element to an XML File with the DOM Extension</h1>
<pre>
<?php
// Load the XML file
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->load( "./stock_list.xml" );
$doc->formatOutput = true;
// Get the stockList root element
$stockListElements = $doc->getElementsByTagName( "stockList" );
$stockList = $stockListElements->item( 0 );
// Create a new "item" element and add it to the stockList
$item = $doc->createElement( "item" );
$item->setAttribute( "type", "vegetable" );
$stockList->appendChild( $item );
// Create the item’s "name" child element
$name = $doc->createElement( "name", "carrot" );
$item->appendChild( $name );
// Create the item’s "unitPrice" child element
$unitPrice = $doc->createElement( "unitPrice", "0.79" );
$item->appendChild( $unitPrice );
// Create the item’s "quantity" child element
$quantity = $doc->createElement( "quantity", "31" );
$item->appendChild( $quantity );
// Create the item’s "description" child element
$description = $doc->createElement( "description" );
$item->appendChild( $description );
$cdata = $doc->createCDATASection( "Carrots are crunchy" );
$description->appendChild( $cdata );
// Output the XML document, encoding markup characters as needed
echo htmlspecialchars( $doc->saveXML() );
?>
</pre>
    </body>
    </html>

<?php
/**
 * Removing Elements from a Document
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Removing an Element from an XML File with the DOM Extension</
title>
<link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
<h1>Removing an Element from an XML File with the DOM Extension</h1>
<pre>
<?php
// Load the XML file
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->load( "./stock_list.xml" );
$doc->formatOutput = true;
// Get the stockList root element
$stockListElements = $doc->getElementsByTagName( "stockList" );
$stockList = $stockListElements->item( 0 );
// Get the "beetroot" item element
$itemElements = $doc->getElementsByTagName( "item" );
$beetroot = $itemElements->item( 1 );
// Remove this element from the stockList
$stockList->removeChild( $beetroot );
// Output the XML document, encoding markup characters as needed
echo htmlspecialchars( $doc->saveXML() );
?>
</pre>
</body>
</html>

<?php
/**
 * Changing Nodes and Attributes
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Changing Content in an XML File with the DOM Extension</title>
<link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
<h1>Changing Content in an XML File with the DOM Extension</h1>
<pre>
<?php
// Load the XML file
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->load( "./stock_list.xml" );
$doc->formatOutput = true;
// Get the stockList root element
$stockListElements = $doc->getElementsByTagName( "stockList" );
$stockList = $stockListElements->item( 0 );
// Get the "beetroot" item element
$itemElements = $doc->getElementsByTagName( "item" );
$beetroot = $itemElements->item( 1 );
// Change the element’s "type" attribute
$beetroot->setAttribute( "type", "rootVegetable" );
// Change the unit price of beetroot
if ( $child = $beetroot->firstChild ) {
    do {
        if ( $child->tagName == "unitPrice" ) {
            $child->firstChild->replaceData( 0, 10, "0.79" );
break;
}
} while ( $child = $child->nextSibling );
}
// Output the XML document, encoding markup characters as needed
echo htmlspecialchars( $doc->saveXML() );
?>
</pre>
</body>
</html>

<?php
/**
 * Moving Elements Around
 */
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Changing Content in an XML File with the DOM Extension</title>
        <link rel="stylesheet" type="text/css" href="common.css" />
    </head>
    <body>
    <h1>Changing Content in an XML File with the DOM Extension</h1>
<pre>
<?php
// Load the XML file
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->load( "./stock_list.xml" );
$doc->formatOutput = true;
// Get the stockList root element
$stockListElements = $doc->getElementsByTagName( "stockList" );
$stockList = $stockListElements->item( 0 );
// Get the "apple" and "beetroot" item elements
$itemElements = $doc->getElementsByTagName( "item" );
$apple = $itemElements->item( 0 );
$beetroot = $itemElements->item( 1 );
// Move "beetroot" to the start of the list of items
$stockList->insertBefore( $beetroot, $apple );
// Output the XML document, encoding markup characters as needed
echo htmlspecialchars( $doc->saveXML() );
?>
</pre>
    </body>
    </html>

