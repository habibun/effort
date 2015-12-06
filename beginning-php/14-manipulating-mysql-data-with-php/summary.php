<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/5/15
 * Time: 11:54 PM
 */
?>

❑
First you wrote a script that allows new members to register for your fictional book club
database. This involved adding some utility functions to your common code file, creating
methods in your Member class to insert a member and check if a username or email address is
already taken, and, finally, creating the registration script itself. This script displays the
registration form and handles submissions from the form, checking the form data and, if valid,
adding the member to the members table.


❑
You also created a members’ area of the book club site, where members can log in, log out, and
view pages. This involved enhancing your Member class with an authenticate() method to
check login details, adding a record() method to the LogEntry class to track page views, and
adding a checkLogin() function to your common code to check that a member is logged in.
Then you created a login script to display and handle the login form, a logout script to log the
member out, and various sample pages within the members’ area.


❑
In the last part of the chapter, you extended your view_member.php script from the previous
chapter to allow the administrator to edit a member ’s details, as well as delete members from
the members table. Along the way, you added update() and delete() methods to your
Member class, and wrote a LogEntry class method to delete all log entries for a particular
member.
