<?php

$doc = new DOMDocument();
$proc = new XSLTProcessor();

$doc->load( "./stock_list_to_xhtml.xslt" );
$proc->importStyleSheet( $doc );

$doc->load( "./stock_list.xml" );
echo $proc->transformToXML( $doc );

?>
