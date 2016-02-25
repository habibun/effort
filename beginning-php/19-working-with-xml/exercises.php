<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 3/16/16
 * Time: 10:06 PM
 */

/**
 * 1.
As you probably realize by now, with the DOM there’s often more than one way to do the same
thing. Rewrite the “Changing Nodes and Attributes” example in this chapter to access the
unitPrice child node directly using the item element’s childNodes property, rather than
looping using firstChild and nextSibling. (Hint: childNodes is of type DOM NodeList, and
DOMNodeList objects have a length property containing the number of nodes in the list.)
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
$doc->load( "what_is_xml.xml" );
$doc->formatOutput = true;

// Get the stockList root element
$stockListElements = $doc->getElementsByTagName( "stockList" );
$stockList = $stockListElements->item(0);

// Get the "beetroot" item element
$itemElements = $doc->getElementsByTagName( "item" );
$beetroot = $itemElements->item(1);

// Change the element's "type" attribute
$beetroot->setAttribute( "type", "rootVegetable" );

// Change the unit price of beetroot
$children = $beetroot->childNodes;
for ( $i=0; $i<$children->length; $i++ ) {
    if ( $children->item($i)->tagName == "unitPrice" ) {
        $children->item($i)->firstChild->replaceData( 0, 10, "0.79" );
        break;
    }
}

// Output the XML document, encoding markup characters as needed
print htmlspecialchars( $doc->saveXML() );

?>
    </pre>
</body>
</html>

<?php
/**
 * 2.
One common use of XML is to generate RSS news feeds that can then be read by any RSS-aware
application, whether on the Web or the desktop. Using SimpleXML, write a simple RSS reader
PHP script that can read an RSS 2.0 XML feed, such as the following example, and display its
contents. The script should display the feed title, description, and last updated date/time
(lastBuildDate), and then display a list of all the news items in the feed. For each item,
display the title (linked to the URL, link, for the full story), the publication date, the descrip-
tion, and a “Read more . . . ” link at the end of the description.
<?xml version=”1.0”?>
<rss version=”2.0”>
<channel>
<title>Kitty News</title>
<link>http://kitty-news.example.com/</link>
<description>Everything you wanted to know about my cat Lucky.</
description>
<pubDate>Tue, 05 Aug 2008 09:00:00 GMT</pubDate>
<lastBuildDate>Tue, 05 Aug 2008 13:12:18 GMT</lastBuildDate>
<docs>http://blogs.law.harvard.edu/tech/rss</docs>
<item>
<title>Another Mouse!</title>
<link>http://kitty-news.example.com/another-mouse/</link>
<description><![CDATA[Lucky caught another mouse today! She is quite the
mouser.]]></description>
<pubDate>Mon, 04 Aug 2008 14:32:11 GMT</pubDate>
</item>
<item>
<title>A Hard Day in the Armchair</title>
<link>http://kitty-news.example.com/a-hard-day-in-the-armchair/</link>
<description><![CDATA[After yesterday’s frenzy of activity, Lucky
took it easy today and spent the whole day in the armchair.]]></description>
<pubDate>Sun, 03 Aug 2008 17:59:42 GMT</pubDate>
</item>
<item>
<title>A Mouse for Breakfast</title>
<link>http://kitty-news.example.com/a-mouse-for-breakfast/</link>
<description><![CDATA[Clever Lucky caught a big juicy mouse for
breakfast this morning. She looks very contented right now.]]></description>
<pubDate>Sat, 02 Aug 2008 11:01:08 GMT</pubDate>
</item>
</channel>
</rss>
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>An XML Feed Reader using the SimpleXML Extension</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>An XML Feed Reader using the SimpleXML Extension</h1>

<?php

// Read the XML document into a SimpleXMLElement object
$rss = simplexml_load_file( "./rss_feed.xml", "SimpleXMLElement", LIBXML_NOCDATA );

// Display the feed details

print "<h2>" . $rss->channel->title. "</h2>\n";
print "<p>" . $rss->channel->description . "</p>\n";
print "<p><em>Last updated: " . $rss->channel->lastBuildDate . "</em></p><hr />\n";

// Display each news item in turn

print "<ul>\n";

foreach ( $rss->channel->item as $item )
{
    print "<li>\n";
    print "<h3 style=\"margin: 0;\"><a href=\"$item->link\">$item->title</a></h3>\n";
    print "<h4 style=\"margin: 0;\"><em>$item->pubDate</em></h4>\n";
    print "<p>$item->description <a href=\"$item->link\">Read more...</a></p>\n";
    print "</li>\n";
}

print "</ul>\n";

?>
</body>
</html>
