<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>A simple Calculator class</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>

    <h2>A simple Calculator class</h2>

<?php

class Calculator {
  private $_val1, $_val2;

  public function __construct( $val1, $val2 ) {
    $this->_val1 = $val1;
    $this->_val2 = $val2;
  }

  public function add() {
    return $this->_val1 + $this->_val2;
  }

  public function subtract() {
    return $this->_val1 - $this->_val2;
  }

  public function multiply() {
    return $this->_val1 * $this->_val2;
  }

  public function divide() {
    return $this->_val1 / $this->_val2;
  }
}

$calc = new Calculator( 3, 4 );
echo "<p>3 + 4 = " . $calc->add() . "</p>";
echo "<p>3 - 4 = " . $calc->subtract() . "</p>";
echo "<p>3 * 4 = " . $calc->multiply() . "</p>";
echo "<p>3 / 4 = " . $calc->divide() . "</p>";

?>

  </body>
</html>
