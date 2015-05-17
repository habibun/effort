--This query is used for updating the data in a table.
--If a WHERE clause is not provided, all rows would be updated with the same changes.
--You can also use a LIMIT clause to limit the number of rows to be updated
update users set user_name  = 'jin',email = 'jin@localhost.com' where user_name = 'jibon';

--update with limit
update users set create_date = '2014-10-05' WHERE create_date = '2014-10-06' LIMIT 1;


