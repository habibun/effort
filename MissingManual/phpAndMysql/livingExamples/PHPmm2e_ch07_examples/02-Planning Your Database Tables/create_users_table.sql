CREATE TABLE users (
       user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
       first_name varchar(20) NOT NULL,
       last_name varchar(30) NOT NULL,
       email varchar(50) NOT NULL,
       facebook_url varchar(100),
       twitter_handle varchar(20)
);
