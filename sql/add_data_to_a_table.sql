-- add data to a table
insert into users values (null,'jony','jony@localhost.com','2014-10-06');

-- alter syntax to add data to a table
insert into users set user_name = 'sristy',email= 'sristy@localhost.com',create_date = '2002-06-01';

--alter syntax 2
insert into users (email,user_name,create_date) values ('jobon@localhost.com','jibon','2014-05-12');