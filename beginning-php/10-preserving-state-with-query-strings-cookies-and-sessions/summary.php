<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/3/15
 * Time: 9:21 PM
 */
?>

❑
Query strings are simple to understand and use, but they are not at all secure so they’re best
used for transmitting innocuous information. You learned how to build query strings with
urlencode() and http_build_query(), as well as how to read data from query strings, and
you created a simple example that uses query strings to create a paged display .


❑
Cookies are a step up from query strings, because you don’t have to pass data between every
single page request. Cookies can even persist when the browser is closed and reopened. You
looked at the anatomy of a cookie, and learned how to create cookies, read cookies via the $_
COOKIE superglobal, and delete cookies. You also wrote a script that uses cookies to remember
details about a visitor .


❑
Sessions have a couple of major advantages over cookies: they’re more secure, and they don’t
involve sending potentially large amounts of data to the server each time a page is viewed. You
explored PHP’s built-in session-handling functionality, including session_start(), the $_
SESSION superglobal, session_write_close(), and session_destroy(). You learned that,
though not advisable, you can pass session IDs in query strings in situations where the browser
doesn’t support cookies, and you looked at some ways to fine-tune PHP’s session behavior.
Finally, you used sessions to create a simple shopping cart and user login/logout system.



