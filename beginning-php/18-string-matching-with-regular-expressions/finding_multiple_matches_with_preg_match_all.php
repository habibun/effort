<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 2/5/16
 * Time: 10:54 PM
 */

/*
 * preg_match_all() returns the total number of matches in the string:
 */
//$text = "Call Mary on 499 012 3456, John on 876 543 2101, or Karen: 777 111 2345";
//echo preg_match_all("/\b\d{3} \d{3} \d{4}\b/", $text, $matches);

/*
 * preg_match_all() stores all matches in the array passed to it as the third argument. The matches are
stored in the first element of the array (with an index of zero), as a nested array:
 */
//$scores = "John: 143 points, Anna: 175 points, and Nicole: 119 points";
//preg_match_all( "/\w+\:\s\d+ points/", $scores, $matches );
//echo $matches[0][0] . "<br />"; // Displays "John: 143 points"
//echo $matches[0][1] . "<br />"; // Displays "Anna: 175 points"
//echo $matches[0][2] . "<br />"; // Displays "Nicole: 119 points"

/*
 * If your expression contains subpatterns, the text matches from these subpatterns are stored in
subsequent array elements. Consider the following example:
 */
//$scores = "John: 143 points, Anna: 175 points, and Nicole: 119 points";
//preg_match_all( "/(\w+)\:\s(\d+) points/", $scores, $matches );
//echo $matches[0][0] . "<br />"; // Displays "John: 143 points"
//echo $matches[0][1] . "<br />"; // Displays "Anna: 175 points"
//echo $matches[0][2] . "<br />"; // Displays "Nicole: 119 points"


//echo $matches[1][0] . " scored " . $matches[2][0] . "<br />";
//echo $matches[1][1] . " scored " . $matches[2][1] . "<br />";
//echo $matches[1][2] . " scored " . $matches[2][2] . "<br />";


/*
 * If you prefer, you can have preg_match_all() swap the indices around so that the first index
represents the match number and the second index represents the subpattern number. (You might find
the array easier to work with this way around.) To do this, pass the flag PREG_SET_ORDER as the fourth
argument to preg_match_all():
 */
//$scores = "John: 143 points, Anna: 175 points, and Nicole: 119 points";preg_match_all( "/(\w+)\:\s(\d+) points/", $scores, $matches, PREG_SET_ORDER);
//echo $matches[0][0] . "<br />"; // Displays "John: 143 points"
//echo $matches[1][0] . "<br />"; // Displays "Anna: 175 points"
//echo $matches[2][0] . "<br />"; // Displays "Nicole: 119 points"


//echo $matches[0][1] . " scored " . $matches[0][2] . "<br />";
//echo $matches[1][1] . " scored " . $matches[1][2] . "<br />";
//echo $matches[2][1] . " scored " . $matches[2][2] . "<br />";

/*
 * As with preg_match(), you an also pass the PREG_OFFSET_CAPTURE flag to access the position of each
match (or subpattern match) in the target string
 */
//$scores = "John: 143 points, Anna: 175 points, and Nicole: 119 points";
//preg_match_all( "/(\w+)\:\s(\d+) points/", $scores, $matches, PREG_OFFSET_CAPTURE );
//
//
//echo $matches[0][0][0] . " (position: " . $matches[0][0][1] . ")<br />";
//echo $matches[0][1][0] . " (position: " . $matches[0][1][1] . ")<br />";
//echo $matches[0][2][0] . " (position: " . $matches[0][2][1] . ")<br />";


/*
 * You can combine PREG_SET_ORDER and PREG_OFFSET_CAPTURE as follows:
 */
/*
 * In this case, the top level of the matches array will contain the match number, the second level will
contain the subpattern number, and the third level will contain the matched text and offset.
 */
//preg_match_all( "/(\w+)\:\s(\d+) points/", $scores, $matches, PREG_SET_ORDER | PREG_OFFSET_CAPTURE );
?>

<!-- Find All Links in a Web Page -->
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
if ( !preg_match( '|^http(s)?\://|', $url ) ) $url = "http://$url";
    $html = file_get_contents( $url );
preg_match_all( "/<a\s*href=['\"](.+?)['\"].*?>/i", $html, $matches );
echo '<div style="clear: both;"> </div>';
echo "<h2>Linked URLs found at " . htmlspecialchars( $url ) . ":</h2>";
echo "<ul>";
    for ( $i = 0; $i < count( $matches[1] ); $i++ ) {
    echo "<li>" . htmlspecialchars( $matches[1][$i] ) . "</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>


