<?php
$doc = new DOMDocument();
$proc = new XSLTProcessor();
$doc->load( "../../working_with_xsl_and_xslt.xslt" );
$proc->importStyleSheet( $doc );
$doc->load( "what_is_xml.xml.xml" );
echo $proc->transformToXML( $doc );
?>
