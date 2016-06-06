<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/2/15
 * Time: 8:06 PM
 */

/**
 * 1.
 * Write an SQL query to calculate the total number of page views made by all male visitors to the
 * book club Web site, as well as the total page views from all female visitors.
 */
/*
    SELECT m.gender, sum( al.numVisits ) AS totalPageViews FROM members m,accessLog al WHERE m.id = al.memberId GROUP BY m.gender;
 */


/**
 *2.
 * Referring back to the member viewer application you created in this chapter, modify the Member
 * class’s getMembers() method to allow an optional fourth parameter, $interest. When this
 * parameter is specified, the method should only return members whose otherInterests fields
 * contain the string supplied in $interest.
 */

/*public static function getMembers($startRow, $numRows, $order, $interest = "")
{
    $conn = parent::connect();
    $interestClause = $interest ? " WHERE otherInterests LIKE :interest" : "";
    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM " . TBL_MEMBERS . "$interestClause ORDER BY $order LIMIT :startRow, :numRows";
    try {
        $st = $conn->prepare($sql);
        $st->bindValue(":startRow", $startRow, PDO::PARAM_INT);
        $st->bindValue(":numRows", $numRows, PDO::PARAM_INT);
        if ($interest) $st->bindValue(":interest", "%$interest%", PDO::PARAM_STR);
        $st->execute();
        $members = array();
        foreach ($st->fetchAll() AS $row) {
            $members[] = new Member($row);
        }
        $st = $conn->query("SELECT found_rows() as totalRows");
        $row = $st->fetch();
        parent::disconnect($conn);
        return array($members, $row["totalRows"]);
    } catch (PDOException $e) {
        parent::disconnect($conn);
        die("Query failed: " . $e->getMessage());
    }
}*/

