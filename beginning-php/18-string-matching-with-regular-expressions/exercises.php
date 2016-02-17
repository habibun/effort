<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 2/15/16
 * Time: 10:04 PM
 */

/**
 * 1.
Write a regular expression that extracts the domain name portion of a Web URL (excluding
the "www." subdomain if supplied). The protocol portion of the URL should be optional.
For example, the expression should extract the domain name "example.com" from any of the
following URLs:
❑ http://www.example.com/
❑ http://www.example.com/hello/there.html
❑ http://example.com/hello/there.html
❑ www.example.com/hello/there.html
❑ https://www.example.com
 */

$url = "http://www.example.com/hello/there.html";
preg_match( "|(http(s)?\://)?(www.)?([a-zA-Z0-9\-\.]+)|", $url, $matches );
echo "Domain name: " . $matches[4]; // Displays "Domain name: example.com"


/**
 * 2.
 * Enhance the find_links.php script created earlier in the chapter to display not just the URL of
each link, but also the link text (the text between the <a> and </a> tags).
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Find Linked URLs in a Web Page</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>

<h1>Find Linked URLs in a Web Page</h1>

<?php

displayForm();

if ( isset( $_POST["submitted"] ) ) {
    processForm();
}

function displayForm() {
    ?>
    <h2>Enter a URL to scan:</h2>
    <form action="" method="post" style="width: 30em;">
        <div>
            <input type="hidden" name="submitted" value="1" />
            <label for="url">URL:</label>
            <input type="text" name="url" id="url" value="" />
            <label> </label>
            <input type="submit" name="submitButton" value="Find Links" />
        </div>
    </form>
    <?php
}

function processForm() {
    $url = $_POST["url"];
    if ( !preg_match( '|^http(s)?://|', $url ) ) $url = "http://$url";
    $html = file_get_contents( $url );
    preg_match_all( "/<a\s*href=['\"](.+?)['\"].*?>(.*?)<\/a>/i", $html, $matches );

    echo '<div style="clear: both;"> </div>';
    echo "<h2>Linked URLs found at " . htmlspecialchars( $url ) . ":</h2>";
    echo "<table><tr><th>URL</th><th>Link text</th>";

    for ( $i = 0; $i < count( $matches[1] ); $i++ ) {
        echo "<tr><td>" . htmlspecialchars( $matches[1][$i] ) . "</td>";
        echo "<td>" . htmlspecialchars( $matches[2][$i] ) . "</td></tr>";
    }

    echo "</table>";
}

?>
</body>
</html>
