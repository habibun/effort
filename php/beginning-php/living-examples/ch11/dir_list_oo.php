<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Listing the contents of a directory</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Listing the contents of a directory</h1>

<?php

$dirPath = "/home/matt/images";
$dir = dir( $dirPath );

?>
    <p><?php echo $dirPath ?> contains the following files and folders:</p>
    <ul>
<?php

while ( $file = $dir->read() ) {
  if ( $file != "." && $file != ".." ) echo "<li>$file</li>";
}

$dir->close();

?>
    </ul>
  </body>
</html>

