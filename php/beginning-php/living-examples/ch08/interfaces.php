<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Creating and Using an Interface</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Creating and Using an Interface</h1>

<?php

interface Sellable {
  public function addStock( $numItems );
  public function sellItem();
  public function getStockLevel();
}

class Television implements Sellable {
  private $_screenSize;
  private $_stockLevel;

  public function getScreenSize() {
    return $this->_screenSize;
  }

  public function setScreenSize( $screenSize ) {
    $this->_screenSize = $screenSize;
  }

  public function addStock( $numItems ) {
    $this->_stockLevel += $numItems;
  }

  public function sellItem() {
    if ( $this->_stockLevel > 0 ) {
      $this->_stockLevel--;
      return true;
    } else {
      return false;
    }
  }

  public function getStockLevel() {
    return $this->_stockLevel;
  }
}

class TennisBall implements Sellable {
  private $_color;
  private $_ballsLeft;

  public function getColor() {
    return $this->_color;
  }

  public function setColor( $color ) {
    $this->_color = $color;
  }

  public function addStock( $numItems ) {
    $this->_ballsLeft += $numItems;
  }

  public function sellItem() {
    if ( $this->_ballsLeft > 0 ) {
      $this->_ballsLeft--;
      return true;
    } else {
      return false;
    }
  }

  public function getStockLevel() {
    return $this->_ballsLeft;
  }
}

class StoreManager {
  private $_productList = array();

  public function addProduct( Sellable $product ) {
    $this->_productList[] = $product;
  }

  public function stockUp() {
    foreach ( $this->_productList as $product ) {
      $product->addStock( 100 );
    }
  }
}

$tv = new Television;
$tv->setScreenSize( 42 );
$ball = new TennisBall;
$ball->setColor( "yellow" );
$manager = new StoreManager();
$manager->addProduct( $tv );
$manager->addProduct( $ball );
$manager->stockUp();
echo "<p>There are ". $tv->getStockLevel() . " " . $tv->getScreenSize();
echo "-inch televisions and " . $ball->getStockLevel() . " " . $ball->getColor();
echo " tennis balls in stock.</p>";
echo "<p>Selling a television...</p>";
$tv->sellItem();
echo "<p>Selling two tennis balls...</p>";
$ball->sellItem();
$ball->sellItem();
echo "<p>There are now ". $tv->getStockLevel() . " " . $tv->getScreenSize();
echo "-inch televisions and " . $ball->getStockLevel() . " " . $ball->getColor();
echo " tennis balls in stock.</p>";
?>

  </body>
</html>
