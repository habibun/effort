-- Since we are expecting the state name to be a unique value, we should change the previous query example a bit
create table states(
id int auto_increment,
name varchar (20),
primary key (id),
unique (name)
);

--Since we are expecting the state name to be a unique value, we should change the previous query example a bit
create table states(
id int auto_increment,
name varchar (20),
primary key (id),
unique state_name(name)
);

--now the state is named 'state_name' instead of name.

