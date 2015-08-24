<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/24/15
 * Time: 8:51 PM
 */

//Using substr( ) with positive $start and $length
print substr('watch out for that tree',6,5);

//Using substr( ) with positive start and no length
print substr('watch out for that tree',17);

//Using substr( ) with length past the end of the string
print substr('watch out for that tree',20,5);

//Using substr( ) with negative start
print substr('watch out for that tree',-6);
print substr('watch out for that tree',-17,5);

// Using substr( ) with negative length
print substr('watch out for that tree',15,-2);
print substr('watch out for that tree',-4,-1);




if(isset($_GET['username'])){
    $username = substr($_GET['username'],0,8);
    echo $username;
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">
    <input type="submit" name="submit">
</form>
</body>
</html>

