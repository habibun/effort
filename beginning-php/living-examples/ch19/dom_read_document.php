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
$doc->load( "./stock_list.xml" );

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
