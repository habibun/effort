To do this, log in as the user that you want to run the scheduled task under, then
type:

crontab –e

Here’s an example crontab line:

15 23 * * 1,3,5  /home/joe/backup_databases.php


This line means, “Run the script /home/joe/backup_databases.php at 11:15pm on Mondays,
Wednesdays, and Fridays.”



By default, the system emails any output from the script to the crontab owner ’s email address (for
example, joe@localhost). Because you might not check this address, you can specify another email
address in the first line of the crontab:

MAILTO=joe@example.com
15 23 * * 1,3,5 /home/joe/backup_databases.php




If you’d rather not receive any email at all from the script, redirect its output to /dev/null:

15 23 * * 1,3,5
 /home/joe/backup_databases.php > /dev/null



