<?php
require_once( "../common.inc.php" );
checkLogin();
displayPageHeader( "Our current reading list", true );
?>

<dl>
  <dt>Moby Dick</dt>
  <dd>by Herman Melville</dd>
  <dt>Down and Out in Paris and London</dt>
  <dd>by George Orwell</dd>
  <dt>The Grapes of Wrath</dt>
  <dd>by John Steinbeck</dd>
</dl>

<p><a href="index.php">Members' area home page</a></p>

<?php displayPageFooter(); ?>
