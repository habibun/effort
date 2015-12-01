<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/1/15
 * Time: 10:36 PM
 */
?>

<?php
require_once(
"common.inc.php");
require_once(
"config.php");
require_once(
"Member.class.php");
require_once(
"LogEntry.class.php");
$memberId = isset($_GET["memberId"]) ? (int)$_GET["memberId"] : 0;
if (!$member = Member2::getMember($memberId)) {
    displayPageHeader("Error");
    echo "<div>Member not found.</div>";
    displayPageFooter();
    exit;
}
$logEntries = LogEntry2::getLogEntries($memberId);
displayPageHeader("View member: " . $member->getValueEncoded("firstName") . " " . $member->getValueEncoded("lastName"));
?>
<dl style="width: 30em;">
    <dt>Username</dt>
    <dd><?php echo $member->getValueEncoded("username") ?></dd>
    <dt>First name</dt>
    <dd><?php echo $member->getValueEncoded("firstName") ?></dd>
    <dt>Last name</dt>
    <dd><?php echo $member->getValueEncoded("lastName") ?></dd>
    <dt>Joined on</dt>
    <dd><?php echo $member->getValueEncoded("joinDate") ?></dd>
    <dt>Gender</dt>
    <dd><?php echo $member->getGenderString() ?></dd>
    <dt>Favorite genre</dt>
    <dd><?php echo $member->getFavoriteGenreString() ?></dd>
    <dt>Email address</dt>
    <dd><?php echo $member->getValueEncoded("emailAddress") ?></dd>
    <dt>Other interests</dt>
    <dd><?php echo $member->getValueEncoded("otherInterests") ?></dd>
</dl>
<h2>Access log</h2>
<table cellspacing="0" style="width: 30em; border: 1px solid #666;">
    <tr>
        <th>Web page</th>
        <th>Number of visits</th>
        <th>Last visit</th>
    </tr>
    <?php
    $rowCount = 0;
    foreach ($logEntries as $logEntry) {
        $rowCount++;
        ?>
        <tr<?php if ($rowCount % 2 == 0) echo ' class="alt"' ?>>
            <td><?php echo $logEntry->getValueEncoded("pageUrl") ?></td>
            <td><?php echo $logEntry->getValueEncoded("numVisits") ?></td>
            <td><?php echo $logEntry->getValueEncoded("lastAccess") ?></td>
        </tr>
        <?php
    }
    ?>
</table>
<div style="width: 30em; margin-top: 20px; text-align: center;">
    <a href="javascript:history.go(-1)">Back</a>
</div>
<?php
displayPageFooter();
?>

