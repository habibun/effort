<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Car Test Suite Example</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Car Test Suite Example</h1>
    <pre>

<?php

require_once( "PHPUnit/Framework.php" );
require_once( "PHPUnit/TextUI/TestRunner.php" );

class Car {
  public $color;
  public $manufacturer;
  public $model;
  private $_speed = 0;

  public function accelerate() {
    if ( $this->_speed >= 100 ) return false;
    $this->_speed += 10;
    return true;
  }

  public function brake() {
    if ( $this->_speed <= 0 ) return false;
    $this->_speed -= 10;
    return true;
  }

  public function getSpeed() {
    return $this->_speed;
  }
}
 
class CarTest extends PHPUnit_Framework_TestCase
{
  public function testInitialSpeedIsZero()
  {
    $car = new Car();
    $this->assertEquals( 0, $car->getSpeed() );
  }

  public function testAccelerate()
  {
    $car = new Car();
    $car->accelerate();
    $this->assertEquals( 10, $car->getSpeed() );
  }

  public function testMaxSpeed()
  {
    $car = new Car();
    for ( $i=0; $i < 10; $i ++ ) {
      $car->accelerate();
    }

    $this->assertEquals( 100, $car->getSpeed() );
    $car->accelerate();
    $this->assertEquals( 100, $car->getSpeed() );
  }
}


$testSuite = new PHPUnit_Framework_TestSuite();
$testSuite->addTest( new CarTest( "testInitialSpeedIsZero" ) );
$testSuite->addTest( new CarTest( "testAccelerate" ) );
$testSuite->addTest( new CarTest( "testMaxSpeed" ) );

PHPUnit_TextUI_TestRunner::run( $testSuite );

?>
    </pre>
  </body>
</html>

