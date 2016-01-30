<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/15/15
 * Time: 9:10 PM
 */
//header( "Server: Never you mind" );
//header( "Set-Cookie: name=Fred; expires=Mon, 05-Jan-2009 10:22:21 GMT; path=/; domain=.example.com");
//header( "Set-Cookie: age=33; expires=Mon, 05-Jan-2009 10:22:21 GMT; path=/; domain=.example.com", false );
//header( "Location: http://www.example.com/login.php" );
//header( "HTTP/1.1 301 Moved Permanently" );
//header( "Location: http://www.example.com/newpage.php" );
//header( "Location: http://www.example.com/newpage.php" );


/**
 * For
example, say you have a report.pdf file on the Web server, and you want to send this to the browser.
You could write the following:
 */
header( "Content-Type: application/pdf" );
readfile( "report.pdf" );


/**
 * Usually it’s up to the browser as to whether it displays the file in the browser itself, or offers to save it to
the user ’s hard disk. You can use a Content-Disposition: Attachment header to suggest to the
browser that the file should be saved rather than displayed and, optionally, to suggest a filename for the
saved file:
 */

header( "Content-Type: application/pdf" );
header( 'Content-Disposition: attachment; filename="Latest Report.pdf"' );
readfile( "report.pdf" );
