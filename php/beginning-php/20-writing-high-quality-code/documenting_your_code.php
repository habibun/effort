<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 3/19/16
 * Time: 11:52 AM
 */

/**
 * Writing Good Comments
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);


#  The following is an example of bad commenting
/*for ( $i=0; $i < count( $users ); $i++ ) { // Loop from 0 to count($users) - 1
    $users[$i]->insert(); // Call the insert() method for the user
}*/


/*
 * All these comments do is reiterate what is obvious from reading the code itself; they don’t add extra
meaning to the code. The following comment would be much more useful:
 */
// Insert all the users into the database
/*for ( $i=0; $i < count( $users ); $i++ ) {
    $users[$i]->insert();
}*/


/*
By adding horizontal and vertical space around the comments, and aligning the two inline comments,
the code becomes much more readable.
 */

// Retrieve all users
//$users = User::getAll();

/*
Add all the users to the database.
Each user’s modification time is updated
before the user is added.
*/

/*for ( $i=0; $i < count( $users ); $i++ ) {
    $users[$i]->updateModDate();    // Set the modification time
    $users[$i]->insert();   // Insert the user
}*/


/**
 * Using phpDocumentor to Generate External Documentation
 */

/*
 * Within your PHP scripts, you add comments for parsing by phpDocumentor in the form of
documentation blocks, or DocBlocks. A DocBlock has the following format:
 */

/**
 * Here’s a comment line.
 * Here’s another comment line.
 */

/*
 * For example, place a DocBlock before a function (or method) definition to describe the function:
 */
/**
 * Returns HTML markup to render the supplied text in bold type.
 */
function makeBold( $text ) {
    return "<b>$text</b>";
}

/*
 * Within a DocBlock you can use various tags to fine-tune the resulting documentation. Tags begin with
an @ (at) symbol. For example, you can use the @param tag to supply more information about a
function’s parameter:
 */

/**
 * Returns HTML markup to render the supplied text in bold type.
 *
 * @param string $text The text to make bold
 *
 * @return string
 */

function makeBold2( $text ) {
    return "<b>$text</b>";
}

/**
 * Take phpDocumentor for a Spin
 */
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>A Simple Car Simulator</title>
        <link rel="stylesheet" type="text/css" href="common.css" />
    </head>
    <body>
    <h1>A Simple Car Simulator</h1>
<?php
/**
 * Car simulation example
 *
 * This script demonstrates how to use OOP to create a simple
 * simulation of a car.
 * @author Matt Doyle
 * @version 1.0
 * @package CarSimulator
 */
/**
 * Represents a real-world automobile
 *
 * This class represents an automobile. The automobile can have
 * a specified color, manufacturer, and model. Methods are provided
 * to accelerate and slow down the car, as well as retrieve the
 * car’s current speed.
 *
 * @package CarSimulator
 */
class Car {
    /**
     * @var string The car’s color
     */
    public $color;
    /**
     * @var string The car’s manufacturer
     */
    public $manufacturer;
    /**
     * @var string The model of the car
     */
    public $model;
    /**
     * @var string The current speed of the car
     * @access private
     */
    private $_speed = 0;
    /**
     * Speeds up the car
     *
     * Accelerates the car by 10mph, up to a maximum speed of 100mph.
     *
     * @return boolean True if the car was successfully accelerated; false
    otherwise
     */
    public function accelerate() {
        if ( $this->_speed >= 100 ) return false;
        $this->_speed += 10;
        return true;
    }
    /**
     * Slows down the car
     *
     * Decelerates the car by 10mph, down to a minimum speed of 0mph.
     *
     * @return boolean True if the car was successfully decelerated; false
    otherwise
     */
    public function brake() {
        if ( $this->_speed <= 0 ) return false;
        $this->_speed -= 10;
        return true;
    }
    /**
     * Returns the car’s speed
     *
     * Returns the current speed of the vehicle, in miles per hour
     *
     * @return int The car’s speed in mph
     */
    public function getSpeed() {
        return $this->_speed;
    }
}
$myCar = new Car();
$myCar->color = "red";
$myCar->manufacturer = "Volkswagen";
$myCar->model = "Beetle";
echo "<p>I’m driving a $myCar->color $myCar->manufacturer $myCar->model.
</p>";
echo "<p>Stepping on the gas...<br />";
while ( $myCar->accelerate() ) {
    echo "Current speed: " . $myCar->getSpeed() . " mph<br />";
}
echo "</p><p>Top speed! Slowing down...<br />";
while ( $myCar->brake() ) {
    echo "Current speed: " . $myCar->getSpeed() . " mph<br />";
}
echo "</p><p>Stopped!</p>";
?>
    </body>
</html>

