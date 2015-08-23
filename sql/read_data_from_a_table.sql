-- the asterisk (*) means that we asked to fetch all the columns from the table
select * from users;

-- if you want only specific column.the query would look like this
SELECT user_name,email from users;


-- where clause()
--Note that for the equality condition, only a single equal sign is used (=), instead of double (==) which you might be used to from programming.
select email from users where user_name = 'jony';

--you can use other comparison operator too
select * from users WHERE user_id <= 2;
select * from  users where create_date != '2014-10-06';

--AND and OR can be used to combine conditions:
--using or operator
select * from  users where user_id = 1 or user_name = 'jibon';

--using and operator
select * from users where user_id=1 and user_name='jony';

--IN()
--This is useful for matching multiple values
SELECT * from users where create_date in('2002-06-01','2014-10-06');


--LIKE()
--This allows you to do wildcard searches.
SELECT * from  users where email like '%jony%';

--ORDER BY Clause
--If you want the results to be returned in a specific order, use this clause:
--the default order is ASC.
-- You can add DESC to reverse order it.
SELECT * from users order by create_date;
SELECT * from users order by user_name ASC;
SELECT * from users order by user_name DESC;


--LIMIT OFFSET
--You can limit the number of returned results.
SELECT * from  users limit 2;
--Now suppose you wanted to show results 3-4. With the OFFSET keyword its just as easy, the following query will do
SELECT * from users limit 1 offset 2;
--note that the first number is the offset and the second number is the limit.
SELECT * from users limit 2,1;