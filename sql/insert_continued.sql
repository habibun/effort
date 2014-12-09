-- create table for test
create table products(
  id int auto_increment primary key ,
  name varchar (20),
  stock int ,
  unique (name)
);

-- insert command
insert into products set name = 'breadmaker',stock = 10;

-- if there is already a record for it. We could check for existing records and then do another query based on that. Or we could just do it all in one simple query
insert into products set name = "breadmaker",stock = 1
on duplicate key update stock = stock + 1;

--replace into
--note:This works exactly like INSERT with one important exception. If a duplicate row is found, it deletes it first and then performs the INSERT, so we get no error messages. 
REPLACE INTO products SET NAME = 'breadmaker',stock = 5;

--inset ignore
--note:This is a way to suppress the duplicate errors, usually to prevent the application from breaking. Sometimes you may want to attempt to insert a new row and just let it fail without any complaints in case there is a duplicate found. 
INSERT IGNORE products SET NAME = 'breadmaker',stock = 1;