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

class InputException extends Exception {
  private $_invalidWarpFactor;

  public function __construct( $message, $code, $factor ) {
    parent::__construct( $message, $code );
    $this->_invalidWarpFactor = $factor;
  }

  public function getInvalidWarpFactor() {
    return $this->_invalidWarpFactor;
  }
}

class FuelException extends Exception {
  private $_remainingFuel;

  public function __construct( $message, $code, $remainingFuel ) {
    parent::__construct( $message, $code );
    $this->_remainingFuel = $remainingFuel;
  }

  public function getRemainingFuel() {
    return $this->_remainingFuel;
  }
}

class WarpDrive {
  static private $_dilithiumLevel = 10;

  public function setWarpFactor( $factor ) {

    if ( $factor < 1 ) {
      throw new InputException( "Warp factor needs to be at least 1", 1, $factor );
    } elseif ( $factor > 9 ) {
      throw new InputException( "Warp factor exceeds drive specifications", 2, $factor );
    } elseif ( WarpDrive::$_dilithiumLevel < $factor ) {
      throw new FuelException( "Insufficient fuel", 3, WarpDrive::$_dilithiumLevel );
    } else {
      WarpDrive::$_dilithiumLevel -= $factor;
      echo "<p>Now traveling at warp factor $factor</p>";
    }
  }
   
}

class ChiefEngineer {
  public function doWarp( $factor ) {
    $wd = new WarpDrive;
    $wd->setWarpFactor( $factor );
  }
}

class Captain {
  public function newWarpOrder( $factor ) {
    $ce = new ChiefEngineer;

    try {
      $ce->doWarp( $factor );
    } catch ( InputException $e ) {
      echo "<p>Captain's log: Warp factor " . $e->getInvalidWarpFactor() . "? I must be losing my mind...</p>";
    } catch ( FuelException $e ) {
      echo "<p>Captain's log: I'm getting a fuel problem from the warp engine. It says: '" . $e->getMessage();
      echo "'. We have " . $e->getRemainingFuel() . " dilithium left. I guess we're not going anywhere.</p>";
    } catch ( Exception $e ) {
      echo "<p>Captain's log: Something else happened, I don't know what. The message is '" . $e->getMessage() . "'.</p>";
    }
  }
}


$c = new Captain;
$c->newWarpOrder( 5 );
$c->newWarpOrder( -1 );
$c->newWarpOrder( 12 );
$c->newWarpOrder( 4 );
$c->newWarpOrder( 9 );

?>

  </body>
</html>
