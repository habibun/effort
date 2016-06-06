<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Testing the Numbers 1-10</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Testing the Numbers 1-10</h1>

    <table border="1">
      <tr>
        <th>Number</th>
        <th>Odd or Even?</th>
        <th>Prime?</th>
      </tr>
<?php

for ( $i = 1; $i <= 10; $i++ ) {
  $oddEven = ( $i % 2 == 0 ) ? "Even" : "Odd";
  switch ( $i ) {
    case 2:
    case 3:
    case 5:
    case 7:
      $prime = "Yes";
      break;
    default:
      $prime = "No";
      break;
  }
?>
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $oddEven?></td>
        <td><?php echo $prime?></td>
      </tr>
<?php
}
?>
    </table>
  </body>
</html>
