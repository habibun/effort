<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 29/5/2015
 * Time: 3:29 PM
 */

/*Now, because NULL is a non-value, you can’t compare it to a value. So, this code
doesn’t make sense in PHP:
*/

if ($value == NULL){}; // do something


/*What you need to use is another PHP helper, is_null. You pass a value to is_null,
and PHP informs you about what you have.
*/

function display_messages($success_msg, $error_msg) {
    echo "<div id='messages'>\n";
    if (!is_null($success_msg)) {
        display_message($success_msg, SUCCESS_MESSAGE);
    }
    if (!is_null($error_msg)) {
        display_message($error_msg, ERROR_MESSAGE);
    }
    echo "</div>\n\n";
}