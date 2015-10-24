<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 10/23/15
 * Time: 7:24 PM
 */
?>
<?php
/**
 * 1.
 * Write a simple number-guessing game in PHP. The script should "think" of a random number
 * between 1 and 100, then give the user five chances to guess the number. For each guess, the
 * script should report whether the guessed number was too low, too high, or correct. (Hint: Use
 * rand( 1, 100 ) to generate a random number between 1 and 100.)
 */
?>
<!-- solution 1-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Guess the Number</title>
    <link rel="stylesheet" type="text/css" href="../living-examples/ch09/common.css"/>
</head>
<body>

<h1>Guess the Number</h1>

<?php
/*
if ( isset( $_POST["submitButton"] ) and isset( $_POST["guess"] ) ) {
    processForm();
} else {
    displayForm( rand( 1, 100 ) );
}

function processForm() {
    $number = (int)$_POST["number"];
    $guessesLeft = (int)$_POST["guessesLeft"] - 1;
    $guess = (int)$_POST["guess"];

    if ( $guess == $number ) {
        displaySuccess( $number );
    } elseif ( $guessesLeft == 0 ) {
        displayFailure( $number );
    } elseif ( $guess < $number ) {
        displayForm( $number, $guessesLeft, "Too low - try again!" );
    } else {
        displayForm( $number, $guessesLeft, "Too high - try again!" );
    }
}

function displayForm( $number, $guessesLeft=5, $message="" ) {
    */ ?><!--
    <form action="" method="post">
        <div>
            <input type="hidden" name="number" value="<?php /*echo $number*/ ?>" />
            <input type="hidden" name="guessesLeft" value="<?php /*echo $guessesLeft*/ ?>" />
            <?php /*if ( $message ) echo "<p>$message</p>" */ ?>
            <p>I'm thinking of a number. You have <?php /*echo $guessesLeft*/ ?> <?php /*echo ( $guessesLeft == 1 ) ? "try" : "tries"*/ ?> left to guess it!</p>
            <p>What's your guess? <input type="text" name="guess" value="" style="float: none; width: 3em;" /> <input type="submit" name="submitButton" value="Guess" style="float: none;" /></p>
        </div>
    </form>
    <?php
/*}

function displaySuccess( $number ) {
    */ ?>
    <h2>Congratulations!</h2>
    <p>You guessed my number: <?php /*echo $number*/ ?>!</p>

    <form action="" method="post">
        <p><input type="submit" name="tryAgain" value="Try Again" style="float: none;" /></p>
    </form>
    <?php
/*}

function displayFailure( $number ) {
    */ ?>
    <h2>Bad luck!</h2>
    <p>You ran out of guesses. My number was <?php /*echo $number*/ ?>!</p>

    <form action="" method="post">
        <p><input type="submit" name="tryAgain" value="Try Again" style="float: none;" /></p>
    </form>
    <?php
/*}
*/ ?>
</body>
</html>

--><?php
/**
 * 2.
 * Create a script that displays a form allowing the user to select one of three Amazon stores —
 * amazon.com, amazon.ca, and amazon.co.uk — and then jumps to the relevant store based on
 * the user ’s choice.
 */
?>

<!-- solution 2 -->
<?php

if (isset($_POST["submitButton"])) {
    switch ($_POST["store"]) {
        case ".com":
            header("Location: http://www.amazon.com/");
            break;
        case ".ca":
            header("Location: http://www.amazon.ca/");
            break;
        case ".co.uk":
            header("Location: http://www.amazon.co.uk/");
            break;
    }
} else {
    displayForm();
}

function displayForm() {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Amazon Store Selector</title>
    <link rel="stylesheet" type="text/css" href="../living-examples/ch09/common.css"/>
</head>
<body>
<h1>Amazon Store Selector</h1>

<form action="" method="post">
    <div style="width: 35em;">
        <label for="store">Choose your Amazon store:</label>
        <select name="store" id="store" size="1">
            <option value=".com">Amazon.com</option>
            <option value=".ca">Amazon.ca</option>
            <option value=".co.uk">Amazon.co.uk</option>
        </select>

        <div style="clear: both;">
            <input type="submit" name="submitButton" id="submitButton" value="Visit Store"/>
        </div>
    </div>
</form>
<?php
}
?>
</body>
</html>
