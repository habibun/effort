CREATE TABLE php_and_mysql_users (
 user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
 first_name VARCHAR(20) NOT NULL,
 last_name VARCHAR(30) NOT NULL,
 email VARCHAR(50) NOT NULL,
 facebook_url VARCHAR(100),
 twitter_handle VARCHAR(20)
);