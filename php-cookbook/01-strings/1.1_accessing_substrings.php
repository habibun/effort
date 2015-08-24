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
 * Time: 12:43 AM
 */

//using strpos method
if(isset($_POST['submit'])){
    if(strpos($_POST['email'],'@') === false){
        print 'There was no @ in the e-mail address!';
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate>
    <label for="email">Email: </label>
    <input type="email" name="email" id="email">
    <input type="submit" name="submit">
</form>
</body>
</html>


