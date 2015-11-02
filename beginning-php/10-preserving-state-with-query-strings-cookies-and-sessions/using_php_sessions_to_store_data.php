<?php
/**
 * Created by PhpStorm.
 * User: jony/**
 * Date: 11/01/15
 * Time: 8:36 PM
 */
error_reporting(-1);
ini_set('display_errors', 'On');


//The location of the temporary files are specified by the session.save_path directive in the PHP configuration file
//echo ini_get( "session.save_path" );


/**
 * Creating a Session
 */
//session_start();

/**
 * Reading and Writing Session Data
 */
//$_SESSION["firstName"] = "John";
//echo $_SESSION["firstName"];

//You can store any type of data in sessions, including arrays and objects:

/**
 * array type data in session
 */
//$userDetails = array("firstName" => "John", "lastName" => "Smith", "age" => 34);

//$_SESSION["userDetails"] = $userDetails;
//foreach($_SESSION["userDetails"] as $key => $value)
//    echo $key." = ".$value."</br>";
//print_r($_SESSION["userDetails"]);

/**
 * object type data in session
 */
//session_start();

/*class WebUser2 {
    public $firstName;
    public $lastName;
}*/

/*if ( isset( $_SESSION["user"] ) ) {
// Make sure the WebUser class is defined by this point
    print_r( $_SESSION["user"] );
} else {
    echo "Creating user...";
$user = new WebUser2;
$user->firstName = "John";
$user->lastName = "Smith";
$_SESSION["user"] = $user;
}*/

/**
 *  Create a Simple Shopping Cart
 */
/*session_start();

class Product2{
    public $productId;
    public $productName;
    public $price;

    public function __construct($productId, $productName, $price)
    {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->productId;
    }

    public function getName()
    {
        return $this->productName;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$products = array(
    1 => new Product2(1, "SuperWidget", 19.99),
    2 => new Product2(2, "MegaWidget", 29.99),
    3 => new Product2(3, "WonderWidget", 39.99)
);

if(!isset($_SESSION["cart"])) $_SESSION["cart"] = array();

if(isset($_GET["action"]) and $_GET["action"] == "addItem"){
    addItem();
}elseif(isset($_GET["action"]) and $_GET["action"] == "removeItem"){
    removeItem();
}else{
    displayCart();
}

function addItem() {
    global $products;
    if ( isset( $_GET["productId"] ) and $_GET["productId"] >= 1 and $_GET["productId"] <= 3 ) {
        $productId = (int) $_GET["productId"];
        if ( !isset( $_SESSION["cart"][$productId] ) ) {
                $_SESSION["cart"][$productId] = $products[$productId];
        }
    }
    session_write_close();
    header( "Location: using_php_sessions_to_store_data.php" );
}
function removeItem() {
    global $products;
    if ( isset( $_GET["productId"] ) and $_GET["productId"] >= 1 and $_GET["productId"] <= 3 ) {
        $productId = (int) $_GET["productId"];
        if ( isset( $_SESSION["cart"][$productId] ) ) {
                    unset( $_SESSION["cart"][$productId] );
        }
    }
    session_write_close();
    header( "Location: using_php_sessions_to_store_data.php" );
}
function displayCart() {
global $products;
*/ ?><!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>A shopping cart using sessions</title>
    <link rel="stylesheet" type="text/css" href="../living-examples/ch10/common.css" />
</head>
<body>
<h1>Your shopping cart</h1>
<dl>
    <?php
/*    $totalPrice = 0;
    foreach ( $_SESSION["cart"] as $product ) {
        $totalPrice += $product->getPrice();
    */ ?>
    <dt><?php /*echo $product->getName() */ ?></dt>
    <dd>$<?php /*echo number_format( $product->getPrice(), 2 ) */ ?>
        <a href="using_php_sessions_to_store_data.php?action=removeItem&productId=<?php /*echo $product->getId() */ ?>">Remove</a>
    </dd>
    <?php /*} */ ?>
    <dt>Cart Total:</dt>
    <dd><strong>$<?php /*echo number_format( $totalPrice, 2 ) */ ?></strong></dd>
</dl>
<h1>Product list</h1>
<dl>
    <?php /*foreach ( $products as $product ) { */ ?>
        <dt><?php /*echo $product->getName() */ ?></dt>
        <dd>$<?php /*echo number_format( $product->getPrice(), 2 ) */ ?>
            <a href="using_php_sessions_to_store_data.php?action=addItem&amp;productId=<?php /*echo $product->getId() */ ?>">Add Item</a></dd>
    <?php /*} */ ?>
</dl>
<?php
/*}
*/ ?>
</body>
</html>

--><?php
/**
 * Destroying a Session
 */
//To destroy a session, you can simply call the built-in session_destroy() function:
//session_destroy();

//make sure all the session data has been erased, you should also initialize the $_SESSION array;
//$_SESSION = array();
//session_destroy();

//you should also destroy the session cookie:
//if ( isset( $_COOKIE[session_name()] ) ) {
//    setcookie( session_name(), "", time()-3600, "/" );
//}
//$_SESSION = array();
//session_destroy();
?>
<?php
/**
 * Passing Session IDs in Query Strings
 */

//This means that you can code the links in your pages to include the session ID, if available:
?>
<?php session_start() ?>
<a href="using_php_sessions_to_store_data.php?<?php echo SID; ?>">Home page</a>

<?php
//If the session ID was successfully stored in a browser cookie, the preceding code will output:
?>
<a href="using_php_sessions_to_store_data.php?">Home page</a>

<?php
/**
 * Changing Session Behavior
 */
ini_set("session.cookie_lifetime", 1200);     // Set session timeout to 20 minutes
