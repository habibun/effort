<?php

require_once( "../ch08/inheritance.php" );
require_once( "PHPUnit/Framework.php" );
require_once( "PHPUnit/TextUI/TestRunner.php" );
 
class CircleTest extends PHPUnit_Framework_TestCase
{
  public function testColor()
  {
    $circle = new Circle();
    $circle->setColor( "red" );
    $this->assertEquals( "red", $circle->getColor() );
  }

  public function testFill()
  {
    $circle = new Circle();
    $circle->fill();
    $this->assertTrue( $circle->isFilled() );
  }

  public function testHollow()
  {
    $circle = new Circle();
    $circle->makeHollow();
    $this->assertFalse( $circle->isFilled() );
  }

  public function testRadius()
  {
    $circle = new Circle();
    $circle->setRadius( 10 );
    $this->assertEquals( 10, $circle->getRadius() );
  }

  public function testArea()
  {
    $circle = new Circle();
    $circle->setRadius( 10 );
    $this->assertEquals( M_PI * pow( 10, 2 ), $circle->getArea() );
  }
}


$testSuite = new PHPUnit_Framework_TestSuite();
$testSuite->addTest( new CircleTest( "testColor" ) );
$testSuite->addTest( new CircleTest( "testFill" ) );
$testSuite->addTest( new CircleTest( "testHollow" ) );
$testSuite->addTest( new CircleTest( "testRadius" ) );
$testSuite->addTest( new CircleTest( "testArea" ) );

PHPUnit_TextUI_TestRunner::run( $testSuite );

?>

