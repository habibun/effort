--The values stored in a PRIMARY KEY column must be unique. Also, there can not be more than one PRIMARY KEY on each table
create table states(
  id int auto_increment primary key ,
  name varchar (20)
);

--it also be written like this
 create table states(
 id int auto_increment,
 name varchar (20),
 primary key (id)
 );