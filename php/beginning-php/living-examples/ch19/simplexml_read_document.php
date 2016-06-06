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
$stockList = simplexml_load_file( "./stock_list.xml", "SimpleXMLElement", LIBXML_NOCDATA );

// Display the object
echo htmlspecialchars( print_r( $stockList, true ) );

?>
    </pre>
  </body>
</html>
