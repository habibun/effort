<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Fibonacci sequence using recursion</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
    <style type="text/css">
      th { text-align: left; background-color: #999; }
      th, td { padding: 0.4em; }
      tr.alt td { background: #ddd; }
    </style>
  </head>
  <body>

    <h2>Fibonacci sequence using recursion</h2>

    <table cellspacing="0" border="0" style="width: 20em; border: 1px solid #666;">
      <tr>
        <th>Sequence #</th>
        <th>Value</th>
      </tr>
<?php

$iterations = 10;

function fibonacci( $n ) {
  if ( ( $n == 0 ) || ( $n == 1 ) ) return $n;
  return fibonacci( $n-2 ) + fibonacci( $n-1 );
}

for ( $i=0; $i <= $iterations; $i++ )
{
?>
      <tr<?php if ( $i % 2 != 0 ) echo ' class="alt"' ?>>
        <td>F<sub><?php echo $i?></sub></td>
        <td><?php echo fibonacci( $i )?></td>
      </tr>
<?php
}
?>
    </table>
  </body>
</html>
