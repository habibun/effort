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
