-- now function() return the current date
select now();

-- automatically set date column to the current day while inserting a new row
insert into users set user_name = 'kelto',email = 'kelto@localhost.com',create_date = now();