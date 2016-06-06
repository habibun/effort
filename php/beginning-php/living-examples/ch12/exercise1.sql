
USE mydatabase;

CREATE TABLE members (
  id          SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  firstName   VARCHAR(30) NOT NULL,
  lastName    VARCHAR(30) NOT NULL,
  age         TINYINT UNSIGNED NOT NULL,
  joinDate    DATE NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO members ( firstName, lastName, age, joinDate ) VALUES ( 'Jo', 'Scrivener', 31, '2006-09-03' );
INSERT INTO members ( firstName, lastName, age, joinDate ) VALUES ( 'Marty', 'Pareene', 19, '2007-01-07' );
INSERT INTO members ( firstName, lastName, age, joinDate ) VALUES ( 'Nick', 'Blakeley', 23, '2007-08-19' );
INSERT INTO members ( firstName, lastName, age, joinDate ) VALUES ( 'Bill', 'Swan', 20, '2007-06-11' );
INSERT INTO members ( firstName, lastName, age, joinDate ) VALUES ( 'Jane', 'Field', 36, '2006-03-03' );

