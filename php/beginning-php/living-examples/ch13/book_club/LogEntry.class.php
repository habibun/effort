<?php

require_once "DataObject.class.php";

class LogEntry extends DataObject {

  protected $data = array(
    "memberId" => "",
    "pageUrl" => "",
    "numVisits" => "",
    "lastAccess" => ""
  );

  public static function getLogEntries( $memberId ) {
    $conn = parent::connect();
    $sql = "SELECT * FROM " . TBL_ACCESS_LOG . " WHERE memberId = :memberId ORDER BY lastAccess DESC";

    try {
      $st = $conn->prepare( $sql );
      $st->bindValue( ":memberId", $memberId, PDO::PARAM_INT );
      $st->execute();
      $logEntries = array();
      foreach ( $st->fetchAll() as $row ) {
        $logEntries[] = new LogEntry( $row );
      }
      parent::disconnect( $conn );
      return $logEntries;
    } catch ( PDOException $e ) {
      parent::disconnect( $conn );
      die( "Query failed: " . $e->getMessage() );
    }
  }
}

?>
