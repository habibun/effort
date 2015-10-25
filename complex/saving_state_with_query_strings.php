<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/24/15
 * Time: 7:22 PM
 */

/**
 * Building Query Strings
 */
$firstName = "John";
$age = "34";
//$queryString = "firstName=$firstName&age=$age";

//Note that the ampersand (&) character needs to be encoded as &amp; inside XHTML markup.
$queryString = "firstName=$firstName&amp;age=$age";

//echo '<a href="../../common-files/moreinfo.php?'.$queryString.'">find out more info on this page</a>';


/**
 * So you can use urlencode() to encode any data that contain reserved characters.
 */
$firstName = "John";
$homePage = "http://www.example.com";
$favoriteSport = "Ice Hockey";
$queryString = "firstName=" .urlencode($firstName). "&amp;homepage=".urlencode($homePage)."&amp;favoriteSport=".urlencode($favoriteSport);
//echo '<a href="../../common-files/moreinfo.php?' . $queryString . '">find out more info on this page</p>';


/**
 * query string using built-in http_built_query function
 */

$fields = array(
    $firstName => "John",
    $homePage => "http://www.example.com",
    $favoriteSport => "Ice Hockey"
);

//echo '<a href= "../../common-files/moreinfo.php?'.htmlspecialchars(http_build_query($fields)).'">find out more info on this page</p>';

/**
 * Accessing Data in Query Strings
 */
$firstName = $_GET["firstName"];
$homePage = $_GET["homePage"];
$favoriteSport = $_GET["favoriteSport"];
?>

<!--  Square Numbers with Pagination -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Number squaring</title>
    <link rel="stylesheet" type="text/css" href="../living-examples/ch09/common.css" />
    <style type="text/css">
        th { text-align: left; background-color: #999; }
        th, td { padding: 0.4em; }
        tr.alt td { background: #ddd; }
    </style>
</head>
<body>
<?php
define( "PAGE_SIZE", 10 );
$start = 0;

if ( isset( $_GET["start"] ) and $_GET["start"] >= 0 and $_GET["start"] <= 1000000 ) {
    $start = (int) $_GET["start"];
}

$end = $start + PAGE_SIZE - 1;
?>
<h2>Number squaring</h2>

<p>Displaying the squares of the numbers <?php echo $start; ?> to <?php echo $end; ?></p>

<table cellspacing="0" border="0" style="width: 20em; border: 1px solid #666">
    <tr>
        <th>n</th>
        <th>n<sup>2</sup></th>
    </tr>
    <?php
    for ( $i=$start; $i <= $end; $i++ )
    {
        ?>
        <tr<?php if ( $i % 2 != 0 ) echo ' class="alt"' ?>>
            <td><?php echo $i?></td>
            <td><?php echo pow( $i, 2 )?></td>
        </tr>
        <?php
    }
    ?>
</table>

<p>
    <?php if ($start > 0){
    ?>
        <a href="saving_state_with_query_strings.php?start=<?php echo $start - PAGE_SIZE; ?>">&lt; Previous Page</a> |
    <?php
    }
    ?>
    <a href="saving_state_with_query_strings.php?start=<?php echo $start + PAGE_SIZE; ?>">Next Page &gt;</a>
</p>
</body>
</html>


