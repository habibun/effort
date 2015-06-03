# select specific column from table
select user_id, first_name, last_name, profile_pic_id FROM php_and_mysql_users;

#change MySQL InnoDB table engine
ALTER TABLE php_and_mysql_users ENGINE = InnoDB;

#add column
alter table php_and_mysql_users add profile_pic_id int;

#CONNECT YOUR TABLES THROUGH COMMON COLUMNS
select first_name, last_name, filename FROM php_and_mysql_users, php_and_mysql_images where profile_pic_id = image_id;

# alias your table
select php_and_mysql_users.first_name, php_and_mysql_users.last_name, php_and_mysql_images.filename FROM php_and_mysql_users, php_and_mysql_images where php_and_mysql_users.profile_pic_id = php_and_mysql_images.image_id;

# You can alias a table by providing a letter or two after the table name and then using that letter as your prefi in the rest of the query
select u.first_name, u.last_name, i.filename
  FROM php_and_mysql_users u, php_and_mysql_images i
WHERE u.profile_pic_id = i.image_id;

# select specific column from table
select image_id, filename from php_and_mysql_images;

# join tables with alias
select u.first_name, u.last_name,i.filename
FROM php_and_mysql_users u, php_and_mysql_images i
WHERE u.profile_pic_id = i.image_id;

# drop column form table
ALTER TABLE php_and_mysql_users DROP COLUMN profile_pic_id;

# drop table form database
DROP TABLE php_and_mysql_users;

# select all form a table
select * FROM php_and_mysql_users;

# drop column from table
alter table php_and_mysql_users DROP COLUMN profile_pic_id;

# select specific column from database
select user_id, first_name, last_name, email from php_and_mysql_users;

# delete a row from database
DELETE from php_and_mysql_users where user_id = 93;

# add two column
alter table php_and_mysql_users add username VARCHAR(32) NOT NULL after user_id,
    add password VARCHAR(16) NOT NULL after username;

# describe a table
DESCRIBE php_and_mysql_users;

# explain a table
EXPLAIN php_and_mysql_users;

# select all from table
select * from php_and_mysql_users;

# update a row
UPDATE php_and_mysql_users SET username = "jony",password="1234" WHERE user_id = 97;

# select specific column with where clause
SELECT user_id, username, password, first_name, last_name from php_and_mysql_users WHERE user_id= 97;

# alter specific column type
alter TABLE php_and_mysql_users CHANGE password password VARCHAR(50) not null;

# create a table
CREATE TABLE php_and_mysql_groups (
   id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(30) NOT NULL,
   description VARCHAR(200)
   );

# add data into a table
INSERT INTO php_and_mysql_groups
 (name, description)
 VALUES ("Administrators",
 "Users who administrate the entire application.");


# select specific column from database
select id, name from php_and_mysql_groups;

# join two table like this
select u.username, u.first_name, u.last_name, i.filename, i.image_data
FROM php_and_mysql_users u, php_and_mysql_images i
where u.user_id = i.user_id;

# create a table
CREATE TABLE php_and_mysql_user_groups (
   user_id INT NOT NULL,
   group_id INT NOT NULL
   );

# select all from a table
select * from php_and_mysql_user_groups;

# query between three table
SELECT COUNT(*)
FROM `php_and_mysql_users` u, `php_and_mysql_groups` g, `php_and_mysql_user_groups` ug
WHERE u.username = "jony"
      AND g.name = "Luthiers"
      AND u.user_id = ug.user_id
      AND g.id = ug.group_id;
