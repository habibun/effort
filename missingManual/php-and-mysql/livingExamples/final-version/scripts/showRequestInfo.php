<html>
 <head>
  <link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
  <div id="header"><h1>PHP & MySQL: The Missing Manual</h1></div>
  <div id="example">Example 3-2</div>

  <div id="content">
    <p>Here's a record of everything in the $_REQUEST array:</p>
    <?php
      foreach($_REQUEST as $key => $value) {
        echo "<p>For " . $key . ", the value is '" . $value . "'.</p>";
      }
    ?>
  </div>

  <div id="footer"></div>
 </body>
</html>
