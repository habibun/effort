<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 22/5/2015
 * Time: 10:51 PM
 */

/*NOTE That URL should all be on one line in your browser bar. Additionally, many browsers will convert
spaces to the web-safe equivalent, that strange %20. That’s a way of telling a browser “insert a space.”*/


/*One of the nicest things
about any script that
uses request parameters
and$_REQUEST is
that you can easily test
these scripts with a little
command-line magic. Just
name your parameters
on the command line,
separate the first one from
your script with?, and
then separate multiple
request parameters from
one another with&.*/


#("There\'s" in the fist sentence) is no good. You can get rid of that with a little regular expression magic
$error_message = preg_replace("/\\\\/", '', $_REQUEST['error_message']);

/*You’re back to instilling your visitors with possible confusion, and that’s no good.
There’s an easy solution, though: just deal with the situation when there’s no request
parameter:*/

if (isset($_REQUEST['error_message'])) {
    $error_message = preg_replace("/\\\\/", '',
        $_REQUEST['error_message']);
} else {
    $error_message = "Something went wrong, and that's " .
        "how you ended up here.";
}