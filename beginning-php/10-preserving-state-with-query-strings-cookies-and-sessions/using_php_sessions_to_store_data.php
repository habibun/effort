<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/28/15
 * Time: 8:18 PM
 */

/**
 * Creating a Session
 */
session_start();

/**
 * Reading and Writing Session Data
 */
//so you might store the user's first name using
$_SESSION['firstName'] = "John";

//echo $_SESSION['firstName'];

//you can store any king of data in sessions, including arrays and objects:
$userDetails = array("firstName" => "John","lastName" => "Smith", "age" => 34);

$_SESSION['userDetails'] = $userDetails;
?>

<?php
/**
 * However, if storing objects make sure you include your class definitions (or class definition files) before
trying to retrieve the objects from the $_SESSION array, so that the PHP engine can correctly identify the
objects when they’re retrieved:
 */
session_start();

class WebUser2 {
    public $firstName;
    public $lastName;
}

if(isset($_SESSION['user'])){
    //Make sure the WebUser class is defined by this point
    print_r($_SESSION['user']);
}else{
    echo "Creating user...";
    $user = new WebUser2();
    $user->firstName = "John";
    $user->lastName = "Smith";
    $_SESSION['user'] = $user;
}
?>
<?php
/**
 *  Create a Simple Shopping Cart
 */

session_start();

class Product2{
    private $productId;
    private $productName;
    private $price;

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

    public function getProductName()
    {
        return $this->productName;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$products = array(
    1 => new Product2(1,"SuperWidget",19.99),
    2 => new Product2(2,"MegaWidget", 29.99),
    3 => new Product2(3,"WonderWidget", 39.99)
);

if(!isset($_SESSION["cart"])) $_SESSION["cart"] = array();

if(isset($_GET["action"]) and $_GET["action"] == "addItem"){
    addItem();
}elseif(isset($_GET["action"]) and $_GET["action"] == "removeItem"){
    removeItem();
}else{
    displayCart();
}

function addItem()
{
    global $products;
    if (isset($_GET["productId"]) and $_GET["productId"] >= 1 and $_GET["productId"] <= 3){
        $productId = (int) $_GET["productId"];


    }
}


