<?php

require_once '../scripts/database_connection.php';
require_once '../scripts/view.php';

$error_message = $_REQUEST['error_message'];

// If the user is logged in, the user_id cookie will be set
if (!isset($_COOKIE['user_id'])) {

  // See if a login form was submitted with a username for login
  if (isset($_POST['username'])) {
    // Try and log the user in
    $username = mysql_real_escape_string(trim($_REQUEST['username']));
    $password = mysql_real_escape_string(trim($_REQUEST['password']));

    // Look up the user
    $query = sprintf("SELECT user_id, username FROM users " .
                     " WHERE username = '%s' AND " .
                     "       password = '%s';",
                     $username, crypt($password, $username));

    $results = mysql_query($query);

    if (mysql_num_rows($results) == 1) {
      $result = mysql_fetch_array($results);
      $user_id = $result['user_id'];
      setcookie('user_id', $user_id);
      setcookie('username', $result['username']);
      header("Location: show_user.php");
      exit();
    } else {
      // If user not found, issue an error 
      $error_message = "Your username/password combination was invalid.";
    }
  }

  // Still in the "not signed in" part of the if
  // Start the page, and pass along any error message set earlier
  page_start("Sign In", NULL, NULL, $error_message);
?>

<html>
  <div id="content">
    <h1>Sign In to the Club</h1>
    <form id="signin_form" 
          action="<?php echo $_SERVER['PHP_SELF']; ?>"
          method="POST">
      <fieldset>
        <label for="username">Username:</label>
        <input type="text"  name="username" id="username" size="20" 
               value="<?php if (isset($username)) echo $username; ?>" />
        <br />
        <label for="password">Password:</label>
        <input type="password"  name="password" id="password" size="20" />
      </fieldset>
      <br />
      <fieldset class="center">
        <input type="submit" value="Sign In" />
      </fieldset>
    </form>
  </div>
  <div id="footer"></div>
 </body>
</html>

<?php
} else {
  // Now handle the case where they're logged in
  header("Location: show_user.php");
  exit();
}
?>
