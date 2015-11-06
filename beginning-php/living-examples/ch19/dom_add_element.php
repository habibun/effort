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

// Create the item's "name" child element
$name = $doc->createElement( "name", "carrot" );
$item->appendChild( $name );

// Create the item's "unitPrice" child element
$unitPrice = $doc->createElement( "unitPrice", "0.79" );
$item->appendChild( $unitPrice );

// Create the item's "quantity" child element
$quantity = $doc->createElement( "quantity", "31" );
$item->appendChild( $quantity );

// Create the item's "description" child element
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
