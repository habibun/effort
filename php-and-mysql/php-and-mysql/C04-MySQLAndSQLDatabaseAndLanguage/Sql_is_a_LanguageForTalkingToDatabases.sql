show DATABASES ;

# select database
use effort;

# show all table
show tables;

# describe table
DESCRIBE php_and_mysql_users;
# desc php_and_mysql_users; //short of describe

# delete table from database
DROP TABLE php_and_mysql_users;

# create table
CREATE TABLE php_and_mysql_users (
  user_id INT,
  first_name varchar(20),
  last_name varchar(30),
  email varchar(50),
  facebook_url varchar(100),
  twitter_handler varchar(20)
);

# insert data
INSERT INTO php_and_mysql_users VALUES (
  1, "Mike", "Greenfield", "mike@greenfieldguitars.com", "http://www.facebook.com/profile.php?id=699186223", "@greenfieldguitars"
);

# show data from a table
select * FROM php_and_mysql_users;

# show specific column
select first_name,last_name,twitter_handler FROM php_and_mysql_users;

# try using where clause
SELECT facebook_url
FROM php_and_mysql_users
WHERE first_name = 'Mike';