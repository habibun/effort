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

// Create the item's "name" child element
$item->addChild( "name", "apple" );

// Create the item's "unitPrice" child element
$item->addChild( "unitPrice", "0.99" );

// Create the item's "quantity" child element
$item->addChild( "quantity", "412" );

// Create the item's "description" child element
$item->addChild( "description", "Apples are &gt;&gt;&gt;yummy&lt;&lt;&lt;" );

// Create the second "item" element (beetroot)
$item = $stockList->addChild( "item" );
$item->addAttribute( "type", "vegetable" );

// Create the item's "name" child element
$item->addChild( "name", "beetroot" );

// Create the item's "unitPrice" child element
$item->addChild( "unitPrice", "1.39" );

// Create the item's "quantity" child element
$item->addChild( "quantity", "67" );

// Create the item's "description" child element
$item->addChild( "description", "Beetroots are lovely &amp; purple" );

// Output the XML document, encoding markup characters as needed
print htmlspecialchars( $stockList->asXML() );

?>
    </pre>
  </body>
</html>
