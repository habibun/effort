<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 3/26/16
 * Time: 9:00 PM
 */
ini_set("display_errors", "1");
/**
 * 1.
Write an error handler, myErrorHandler(), that emails any E_WARNING or E_USER_WARNING
messages to your email address, and logs other errors in a non_serious_errors.log file. Test
your handler with code that generates both an E_USER_WARNING and an E_USER_NOTICE error.
 */
?>
<?php

/*function myErrorHandler( $errno, $errstr, $errfile, $errline, $errcontext ) {

    $levels = array (
        E_WARNING => "Warning",
        E_NOTICE => "Notice",
        E_USER_ERROR => "Error",
        E_USER_WARNING => "Warning",
        E_USER_NOTICE => "Notice",
        E_STRICT => "Strict warning",
        E_RECOVERABLE_ERROR => "Recoverable error",
        E_DEPRECATED => "Deprecated feature",
        E_USER_DEPRECATED => "Deprecated feature"
    );

    $message = date( "Y-m-d H:i:s - " );
    $message .= $levels[$errno] . ": $errstr in $errfile, line $errline\n\n";
    $message .= "Variables:\n";
    $message .= print_r( $errcontext, true ) . "\n\n";

    if ( $errno == E_WARNING or $errno == E_USER_WARNING ) {
        error_log( $message, 1, "joe@example.com" );
    } else {
        error_log( $message, 3, "/home/joe/non_serious_errors.log" );
    }
}

set_error_handler( "myErrorHandler" );
trigger_error( "Simulated warning", E_USER_WARNING );
trigger_error( "Simulated notice", E_USER_NOTICE );*/
?>

<?php
/**
 * 2.
Create a PHPUnit test case that tests all aspects of the Circle class defined in inheritance.php
in Chapter 8.
 */
?>
<?php
require "/home/jony/Projects/effort/vendor/autoload.php";
require "/home/jony/Projects/effort/beginning-php/living-examples/ch08/inheritance.php";

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

