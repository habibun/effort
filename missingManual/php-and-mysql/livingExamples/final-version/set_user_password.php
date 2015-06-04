<?

require_once 'scripts/database_connection.php';

$user_id = 21;
$username = "jwadley";
$password = "chung_moo";

$update_sql = sprintf("UPDATE users " .
                      "   SET password = '%s', " .
                      "       username = '%s' " .
                      " WHERE user_id = %d",
                      mysql_real_escape_string(crypt($password, $username)),
                      mysql_real_escape_string($username),
                      $user_id);

echo $update_sql . "\n\n";

mysql_query($update_sql)
  or die(mysql_error());

?>
