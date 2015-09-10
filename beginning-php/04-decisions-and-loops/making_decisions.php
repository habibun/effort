<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 9/9/15
 * Time: 8:38 PM
 */

/**
 * here is a simple real-world example
 */
$widgets = 23;
if ( $widgets == 23 ){
    echo "We have exactly 23 widgets in stock!";
}

/**
 * Here’s another example that uses the >= (greater than or equal) and <= (less than or equal) comparison
operators, as well as the && (and) logical operator:
 */
$widgets = 23;
if ($widgets >= 10 && $widgets <= 20){
    echo "We have between 10 and 20 widgets in stock.";
}

/**
 * here’s the previous
example rewritten to use an if statement inside another if statement:
 */
$widgets = 23;
if ( $widgets >= 10 ) {
    if ( $widgets <= 20 ) {
        echo "We have between 10 and 20 widgets in stock.";
    }
}

/**
 * If you only have one line of code between the braces you can, in fact, omit the braces altogether:
 */
$widgets = 23;
if ( $widgets == 23 )
    echo "We have exactly 23 widgets in stock!";

/**
 * Providing an Alternative Choice with the else Statement
 */
if ( $widgets >= 10 ) {
    echo "We have plenty of widgets in stock.";
} else {
    echo "Less than 10 widgets left. Time to order some more!";
}

/**
 * You can even combine the else statement with another if statement to make as many alternative
choices as you like:
 */
if ( $widgets >= 10 ) {
    echo "We have plenty of widgets in stock.";
} else if ( $widgets >= 5 ) {
    echo "Less than 10 widgets left. Time to order some more!";
} else {
    echo "Panic stations: Less than 5 widgets left! Order more now!";
}

/**
 * PHP even gives you a special statement — elseif — that you can use to combine an else and an if
statement. So the preceding example can be rewritten as follows:
 */
if ( $widgets >= 10 ) {
    echo "We have plenty of widgets in stock.";
} elseif ( $widgets >= 5 ) {
    echo "Less than 10 widgets left. Time to order some more!";
} else {
    echo "Panic stations: Less than 5 widgets left! Order more now!";
}

/**
 * Testing One Expression Many Times with the switch Statement
 */
// Here’s the preceding example rewritten using switch
$userAction = "open";
switch ( $userAction ) {
    case "open":
        // Open the file
        break;
    case "save":
        // Save the file
        break;
    case "close":
    case "logout":
        print "Are you sure?";
        break;
    default:
        print "Please choose an option";
}

/**
 * For example, the following script
asks the users to confirm their action only when they’re closing a file or logging out:
 */
switch ( $userAction ) {
    case "open":
        // Open the file
        break;
    case "save":
        // Save the file
        break;
    case "close":
    case "logout":
        print "Are you sure?";
        break;
    default:
        print "Please choose an option";
}


/**
 * Compact Coding with the Ternary Operator
 */
$widgets = 23;
$plenty = "We have plenty of widgets in stock.";
$few = "Less than 10 widgets left. Time to order some more!";
echo ($widgets >= 10)? $plenty : $few;