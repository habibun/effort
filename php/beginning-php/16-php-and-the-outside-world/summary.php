<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 1/22/16
 * Time: 1:06 PM
 */
?>


❑
Date and time functions and classes: You explored the concepts of timestamps and UTC, and
learned how to use time() to retrieve the current timestamp. You also saw how to create your
own timestamps with the mktime(), gmmktime(), and strtotime() functions, as well as how
to use getdate() to extract information from a timestamp. You learned how to format dates
using idate() and date(), how to check that dates are well-formed using checkdate(), and
how to work more precisely with timestamps by using microtime(). Finally, you put theory
into practice with a script to calculate your age in days, and took a brief look at PHP’s relatively
new DateTime and DateTimeZone classes for handling dates and times


❑
HTTP requests and responses: You learned how Web browsers and servers communicate using
HTTP. You studied the anatomy of an HTTP request and response, and looked at some common
headers that are sent between browser and server. Finally, you looked at how to modify HTTP
responses within PHP scripts, and how you can use this ability to redirect the browser, return
specific status codes, and send non-HTML content back to the browser



❑
Server and script information: You discovered that, by reading values from the $_SERVER
superglobal array, you can retrieve useful information about the Web server and current script,
such as the visitor ’s IP address, HTTP headers sent by the browser, and the location of the script



❑
Sending email messages: You learned how to send email using PHP’s mail() function, as well
as how to compose both plain text and HTML email messages. You saw how to add custom
headers to a message, and how to pass additional command-line arguments to the mail transfer
agent. You then used this knowledge to build a simple “contact us” form that allows visitors to
send email messages to the site owner


