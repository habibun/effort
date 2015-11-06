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

// Create the item's "name" child element
$name = $doc->createElement( "name", "apple" );
$item->appendChild( $name );

// Create the item's "unitPrice" child element
$unitPrice = $doc->createElement( "unitPrice", "0.99" );
$item->appendChild( $unitPrice );

// Create the item's "quantity" child element
$quantity = $doc->createElement( "quantity", "412" );
$item->appendChild( $quantity );

// Create the item's "description" child element
$description = $doc->createElement( "description" );
$item->appendChild( $description );
$cdata = $doc->createCDATASection( "Apples are >>>yummy<<<" );
$description->appendChild( $cdata );

// Create the second "item" element (beetroot)
$item = $doc->createElement( "item" );
$item->setAttribute( "type", "vegetable" );
$stockList->appendChild( $item );

// Create the item's "name" child element
$name = $doc->createElement( "name", "beetroot" );
$item->appendChild( $name );

// Create the item's "unitPrice" child element
$unitPrice = $doc->createElement( "unitPrice", "1.39" );
$item->appendChild( $unitPrice );

// Create the item's "quantity" child element
$quantity = $doc->createElement( "quantity", "67" );
$item->appendChild( $quantity );

// Create the item's "description" child element
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
