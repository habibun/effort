--add a column
alter table users add email varchar (100) after username;

--remove a column
alter table users drop column email;

--to change the property of a column
alter table users change username user_name varchar (100);

