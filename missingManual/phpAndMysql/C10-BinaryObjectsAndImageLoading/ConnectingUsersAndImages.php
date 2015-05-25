<?php
/**
 * Created by PhpStorm.
 * User: Habibun
 * Date: 25/5/2015
 * Time: 8:07 PM
 */

/**
* mysql query add column
*
*alter table php_and_mysql_users add profile_pic_id int;
*/


/**
*If you want to use InnoDB and foreign key support at the database level, start with this command on your tables:
*
ALTER TABLE php_and_mysql_users ENGINE = InnoDB;
*/


/**
 * Build the SELECT statement
 *
 * $select_query = sprintf("SELECT * FROM users WHERE user_id = %d", $user_id);
 */

/**
 * CONNECT YOUR TABLES THROUGH COMMON COLUMNS
 *
 * select first_name, last_name, filename FROM php_and_mysql_users, php_and_mysql_images where profile_pic_id = image_id;
 */

/**
 *alias your table
 *
 * select php_and_mysql_users.first_name, php_and_mysql_users.last_name, php_and_mysql_images.filename FROM php_and_mysql_users, php_and_mysql_images where php_and_mysql_users.profile_pic_id = php_and_mysql_images.image_id;
 */

/**
 *You can alias a table by providing a letter or two after the table name and then using that letter as your prefi in the rest of the query
 *
 * select u.first_name, u.last_name, i.filename
 *   FROM php_and_mysql_users u, php_and_mysql_images i
 *  WHERE u.profile_pic_id = i.image_id;
 */
