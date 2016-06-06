-- I just added the join_year column and indexed it. This type of index does not have the uniqueness restriction.
 CREATE TABLE states (
 id INT AUTO_INCREMENT,
 name VARCHAR(20),
 join_year INT,
 PRIMARY KEY (id),
 UNIQUE (name),
 INDEX (join_year)
 );

--  You can also name it KEY instead of INDEX.
CREATE TABLE states (
     id INT AUTO_INCREMENT,
     name VARCHAR(20),
     join_year INT,
     PRIMARY KEY (id),
     UNIQUE (name),
     KEY (join_year)
     );
