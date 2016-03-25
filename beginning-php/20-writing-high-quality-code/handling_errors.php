<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 3/20/16
 * Time: 9:45 PM
 */

ini_set("display_errors", 1);

/**
 * Triggering Errors
 */
/*
 * To trigger an error from within your script, call the trigger_error() function, passing in the error
message that you want to generate:
 */
//trigger_error("Houston, we've had a problem.");
//trigger_error("Houston, we've had a bigger problem.", E_USER_WARNING);
//trigger_error("Houston, we've had a bigger problem.", E_USER_ERROR);
//echo "test";

/*
 * Consider the following function to calculate the number of widgets sold per day:
 */
/*function calcWidgetsPerDay1($totalWidgets, $totalDays){
    return ($totalWidgets / $totalDays);
}*/

//echo calcWidgetsPerDay(10, 0);

/*
 * This message isn't very informative. Consider the following version rewritten using trigger_error():
 */

/*function calcWidgetsPerDay2($totalWidgets, $totalDays){
    if($totalDays == 0){
        trigger_error("calcWidgetsPerDay(): The total days cannot be zero", E_USER_WARNING);
        return false;
    } else {
        return ($totalWidgets / $totalDays);
    }
}*/

//echo calcWidgetsPerDay2(10, 0);


/*
 * Passing a value of 1 causes the message to be sent via email. Specify the email address to send to as the
third parameter. You can optionally specify additional mail headers in a fourth parameter:
 */
//error_log( "Houston, we've had a problem.", 1, "joe@example.com", "Cc: bill@example.com" );


/*
 * Pass a value of 3 to send the message to a custom log file:
 */
//error_log( "Houston, we've had a problem.\n", 3, "/home/joe/custom_errors .log" );


/**
 * Letting Your Script Handle Errors
 */

/*function calcWidgetsPerDay($totalWidgets, $totalDays){
    if($totalDays == 0){
        trigger_error("calcWidgetsPerDay(): The total days cannot be zero", E_USER_WARNING);
        return false;
    } else{
        return ($totalWidgets / $totalDays);
    }
}*/

/*function paranoidHandler($errno, $errstr, $errfile, $errline, $errcontext){
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

    $message = date("Y-m-d H:i:s - ");
    $message .= $levels[$errno] . ": $errstr in $errfile, line $errline\n\n";
    $message .= "Variables:\n";
    $message .= print_r($errcontext, true) . "\n\n";
    error_log($message, 3, "/home/jony/paranoid_errors.log");
    die("There was a problem, so I've stopped running. Please try again.");
}*/

/*set_error_handler("paranoidHandler");
echo calcWidgetsPerDay(10, 0);
echo "This will never be printed<br />";*/

/*class WarpDrive{
    public function setWarpFactor($factor){
        if($factor >=1 && $factor <= 9 ){
            echo "Wrap factor $factor<br />";
            return true;
        } else {
            return false;
        }
    }
}

class ChiefEngineer {
    public function doWarp($factor){
        $wd = new WarpDrive();
        return $wd->setWarpFactor($factor);
    }
}

class Captain{
    public function newWarpOrder($factor){
        $ce = new ChiefEngineer();
        return $ce->doWarp($factor);
    }
}

$c = new Captain();
if(!$c->newWarpOrder(10))
    echo "She cannot go any faster!<br />";*/

/**
 * Throwing Exceptions
 */
//throw new Exception("Oops, something went wrong");

/**
 * Flying Through the Universe
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Warping Through Space</title>
<link rel="stylesheet" type="text/css" href="common.css" />
</head>
<body>
<h1>Warping Through Space</h1>
<?php
class InputException  extends Exception{
    private $_invalidWarpFactor;

    public function __construct($message, $code, $factor)
    {
        parent::__construct($message, $code);
        $this->_invalidWarpFactor = $factor;
    }

    public function getInvalidWarpFactor()
    {
        return $this->_invalidWarpFactor;
    }
}

class FuelException extends Exception{
    private $_remainingFuel;

    public function __construct($message, $code, $remainingFuel)
    {
        parent::__construct($message, $code);

        $this->_remainingFuel = $remainingFuel;
    }

    public function getRemainingFuel()
    {
        return $this->_remainingFuel;
    }
}

class WarpDrive {
    static private $_dilithiumLevel = 10;
    public function setWarpFactor( $factor ) {
        if ( $factor < 1 ) {
            throw new InputException( "Warp factor needs to be at least 1", 1, $factor );
} elseif ( $factor > 9 ) {
            throw new InputException( "Warp factor exceeds drivespecifications", 2, $factor );
} elseif ( WarpDrive::$_dilithiumLevel < $factor ) {
            throw new FuelException( "Insufficient fuel", 3, WarpDrive::$_dilithiumLevel );
} else {
            WarpDrive::$_dilithiumLevel -= $factor;
            echo "<p>Now traveling at warp factor $factor</p>";
}
    }
}


class ChiefEngineer {
    public function doWarp($factor){
        $wd = new WarpDrive;
        $wd->setWarpFactor($factor);
    }
}

class Captain{
    public function newWarpOrder($factor)
    {
        $ce = new ChiefEngineer;

        try{
            $ce->doWarp($factor);
        } catch(InputException $e){
            echo "<p>Captain's log: Warp factor " . $e->getInvalidWarpFactor(). "? I must be losing my mind...</p>";
        } catch(FuelException $e){
            echo "<p>Captain's log: I am getting fuel problem from the warp engine. It says: '" .$e->getMessage();
            echo "'. We have " . $e->getRemainingFuel() . " dilithium left. I guess we're not going anywhere.</p>";
        } catch(Exception $e){
            echo "<p>Captain's log: Something else happened, I don't know what. The message is ‘" . $e->getMessage() . "'.</p>";

        }
    }
}

$c = new Captain;
$c->newWarpOrder(5);
$c->newWarpOrder(-1);
$c->newWarpOrder(12);
$c->newWarpOrder(4);
$c->newWarpOrder(9);
?>

</body>
</html>
