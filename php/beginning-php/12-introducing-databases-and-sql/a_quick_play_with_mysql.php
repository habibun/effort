<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/21/15
 * Time: 9:42 PM
 */

/**
 * Creating a Table
 */
/*
# create new database
CREATE DATABASE mydatabase;

# show all databases
SHOW DATABASES ;

# drop database
DROP DATABASE mydatabase;

# select database to work
USE effort;

# create a table
CREATE TABLE fruit (
  id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL ,
  color VARCHAR(30) NOT NULL ,
  PRIMARY KEY (id)
);

# show all tables
SHOW TABLES ;

# show structure of a table
EXPLAIN fruit;

# add index for name field
CREATE TABLE fruit (
  id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL ,
  color VARCHAR(30) NOT NULL ,
  PRIMARY KEY (id),
  KEY (name)
);

# delete a table from database
DROP TABLE fruit;
 */

/**
 * Adding Data to a Table
 */
/*
INSERT INTO fruit (name, color) VALUES ('banana', 'yellow');
INSERT INTO fruit ( name, color ) VALUES ( 'tangerine', 'orange');
INSERT INTO fruit ( name, color ) VALUES ( 'plum', 'purple');
 */


/**
 * Reading Data from a Table
 */

/*
 # to retrieve a list of all data
SELECT * FROM fruit;

# you can also specify just the field or fields you want to retrieve
SELECT name, color FROM fruit;

# to retrieve a selected row or rows (where clause)
select * FROM fruit WHERE name = 'banana';
select * FROM fruit WHERE id >= 2;
 */


/**
 * Updating Data in a Table
 */
/*
 UPDATE fruit SET name = 'grapefruit', color = 'yellow' WHERE id = 2;
 */

/**
 * Deleting Data from a Table
 */
/*
   DELETE FROM fruit WHERE id = 2;
 */

/**
 * Deleting Tables and Databases
 */
/*
DROP TABLE fruit;

DROP DATABASE effort;
 */