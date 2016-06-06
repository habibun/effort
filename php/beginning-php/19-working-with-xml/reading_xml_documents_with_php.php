<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Parsing an XML File</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
<h1>Parsing an XML File</h1>
    <pre>

<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 2/23/16
 * Time: 7:49 PM
 */

/**
 * Creating a New Parser
 */
//$parser = xml_parser_create();

/**
 * Creating Event Handlers
 */

/*
  Start element handler:
  Processes the start of an XML element, displaying the
  element name as well as any attributes
*/

function startElementHandler( $parser, $element, $attributes )
{
    echo "Start of element: \"$element\"";
    if ( $attributes ) echo ", attributes: ";
    foreach ( $attributes as $name => $value ) echo "$name=\"$value\" ";
    echo "\n";
}

/*
  End element handler:
  Processes the end of an XML element, displaying the
  element name
*/

function endElementHandler( $parser, $element )
{
    echo "End of element: \"$element\"\n";
}

/*
  Character data handler:
  Processes XML character data, displaying the data
*/

function characterDataHandler( $parser, $data )
{
    if ( trim( $data ) ) echo "  Character data: \"" . htmlspecialchars( $data ) . "\"\n";
}

/*
  Error handler:
  Called if there was a parse error. Retrieves and
  returns information about the error.
*/

function parseError( $parser )
{
    $error = xml_error_string( xml_get_error_code( $parser ) );
    $errorLine = xml_get_current_line_number( $parser );
    $errorColumn = xml_get_current_column_number( $parser );
    return "<b>Error: $error at line $errorLine column $errorColumn</b>";
}

// Create the parser and set options
$parser = xml_parser_create();
xml_parser_set_option( $parser, XML_OPTION_CASE_FOLDING, false );

// Register the event handlers with the parser
xml_set_element_handler( $parser, "startElementHandler", "endElementHandler" );
xml_set_character_data_handler( $parser, "characterDataHandler" );

// Read and parse the XML document
$xml = file_get_contents( "what_is_xml.xml" );
xml_parse( $parser, $xml ) or die( parseError( $parser ) );
xml_parser_free( $parser );
?>
    </pre>
</body>
</html>
