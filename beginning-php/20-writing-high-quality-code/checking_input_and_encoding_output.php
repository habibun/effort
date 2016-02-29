<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 3/19/16
 * Time: 10:04 PM
 */

/*
 * Here's a simple example of an insecure PHP script called search.php:
 */
$searchQuery = $_GET['search'];
echo "You searched for: $searchQuery";
// (display search results here)


/**
 * Checking Input
 */

/*
* This technique is known as whitelisting because you only accept characters that match a whitelist (in this
case, letters and digits).
*/
$searchQuery = $_GET['search'];
if (!preg_match("/^[a-zA-Z0-9]*$/", $searchQuery)) {
    echo "Invalid input: please use only letters and digits";
    exit;
}
echo "You searched for: " . $searchQuery;
// (display search results here)


/*
 * Alternatively, you can use blacklisting, where you reject characters that are on a
blacklist:
 */
if (preg_match("/[<>&%]/", $searchQuery)) {
    echo "Invalid input: please don't use &lt; &gt;, &amp; or %";
    exit;
}


/*
* An alternative to validating input is filtering. With this approach, rather than checking that user input
doesn't contain malicious data (and rejecting it if it does), you simply remove any malicious data from
the input, and proceed as normal:
*/
$searchQuery = $_GET['search'];
$searchQuery = preg_replace("/[^a-zA-Z0-9]/", "", $searchQuery);
echo "You searched for: " . $searchQuery;
// (display search results here)


/*
 * A variation on filtering is to use casting to ensure that the input is of the required type:
 */
$pageStart = (int)$_GET["pageStart"];


/**
 * Encoding Output
 */

/*
 * HTML, you can use PHP's htmlspecialchars() function to replace unsafe characters with their
encoded equivalents:
 */
$searchQuery = $_GET['search'];
echo "You searched for: " . htmlspecialchars($searchQuery);
// (display search results here)
