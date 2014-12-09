--delete specific row in table
delete from users where user_name = 'jin';

--to delete the entire contents of a table you can just do
delete from users;

--TRUNCATE TABLE
--But it is usually more performance efficient to use TRUNCATE instead
--TRUNCATE also resets the AUTO_INCREMENT numbers so a new row will again have the id 1. But this does not happen with a DELETE query, and the counter keeps going up.
TRUNCATE TABLE users;

