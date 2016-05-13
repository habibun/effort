<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 5/18/16
 * Time: 9:21 PM
 */

/**
 * no design pattern followed here
 * raw php
 */
include "common-libs.php";
include "config.php";
mysql_connect($hostname, $username, $password);
mysql_select_db($database);
?>
<?php include "header.php"; ?>
    <h1>Home Page</h1>
<?php
$sql = "SELECT * FROM news";
$result = mysql_query($sql);
?>
    <table>
        <?php
        while ($row = mysql_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['date_created']; ?></td>
                <td><?php echo $row['title']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
<?php include "footer.php"; ?>