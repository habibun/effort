<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 8/26/15
 * Time: 10:58 PM
 */

/**
 * String concatenation
 */
print 'You have '.($_POST['boys'] + $_POST['girls']).' children.';
print "The word '$word' is ".strlen($word).' characters long.';
print 'You owe '.$amounts['payment'].' immediately.';
print "My circle's diameter is ".$circle->getDiameter().' inches.';

/**
 * You can put variables, object properties, and array elements (if the subscript is unquo‐ted) directly in double-quoted strings:
 */
print "I have $children children.";
print "You owe $amounts[payment] immediately.";
print "My circle's diameter is $circle->diameter inches.";

/**
 * Use curly braces around more complicated expressions to interpolate them into a string. For example:
 */
print "I have {$children} children.";
print "You owe {$amounts['payment']} immediately.";
print "My circle's diameter is {$circle->getDiameter()} inches.";

/**
 * Interpo‐
* lating with string concatenation in heredocs can look a little strange because the closing
* heredoc delimiter and the string concatenation operator have to be on separate lines
 */
print <<< END
Right now, the time is
END
    . strftime('%c') . <<< END
but tomorrow it will be
END
    . strftime('%c',time() + 86400);
