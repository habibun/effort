<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 11/27/15
 * Time: 12:41 PM
 */

/**
 * Limiting the Number of Rows Returned
 */
/*
SELECT id, username FROM members LIMIT 4;

SELECT id, username FROM members LIMIT 1, 2;

 */


/**
 * Sorting Results
 */
/*

SELECT username, firstName, lastName FROM members ORDER BY firstName;
SELECT username, firstName, lastName FROM members ORDER BY lastName;

# You can even sort by more than one column at once by separating the column names with commas:
SELECT id, favoriteGenre, firstName, lastName FROM members ORDER BY favoriteGenre, firstName;

# By default, MySQL sorts columns in ascending order
SELECT id, favoriteGenre, firstName, lastName FROM members ORDER BY favoriteGenre DESC , firstName ASC;
 */

/**
 * Using Pattern Matching for Flexible Queries
 */
/*

SELECT * FROM fruit WHERE name = 'banana';
SELECT * FROM fruit WHERE id >= 2;

#  % matches any number of characters (including no characters at all)
SELECT username, firstName, lastName, otherInterests FROM members WHERE otherInterests LIKE '%travel%';
SELECT username FROM members WHERE otherInterests LIKE '%travel%';

#  _ (underscore) matches exactly one character
SELECT firstName, lastName FROM members WHERE firstName LIKE 'Mar_y';

# You can reverse the sense of the comparison by using NOT LIKE instead of LIKE
SELECT username, firstName, lastName, otherInterests FROM members WHERE otherInterests NOT LIKE '%travel%';

 */

/**
 * Summarizing Data
 */
/*
#count() — Returns the number of rows selected by the query
SELECT COUNT(*) FROM members;
SELECT COUNT(*) FROM members WHERE gender = 'f';

#sum() — Returns the total of all the values of a given field selected by the query
SELECT SUM(numVisits) FROM accessLog;

#  min() — Returns the minimum value of all the values of a given field selected by the query
SELECT MIN(joinDate) FROM members;

# max() — Returns the maximum value of all the values of a given field selected by the query
SELECT MAX(joinDate) FROM members;

#avg() — Returns the average of all the values of a given field selected by the query
 */


/**
 * Eliminating Duplicate Results
 */

/*
SELECT memberId FROM accessLog WHERE lastAccess > '2008-11-07';
SELECT DISTINCT memberId FROM accessLog WHERE lastAccess > '2008-11-07';
SELECT DISTINCT memberId, pageUrl FROM accessLog WHERE lastAccess > '2008-11-07';
 */


/**
 * Grouping Results
 */
/*
SELECT * FROM accessLog;
SELECT memberId, count(pageUrl) FROM accessLog GROUP BY memberId;
SELECT memberId,count(pageUrl) FROM accessLog GROUP BY memberId ORDER BY count(pageUrl) DESC ;
 */


/**
 * Pulling Data from Multiple Tables
 */
/*
SELECT DISTINCT accessLog.memberId, members.firstName, members.lastName FROM accessLog, members WHERE accessLog.memberId = members.id;
 */

/**
 * Using Aliases
 */
/*
SELECT DISTINCT al.memberId, m.firstName, m.lastName FROM accessLog al, members m WHERE al.memberId = m.id;

# You can also use the AS keyword to create aliases for the columns returned by your query.
SELECT memberId, count( pageUrl ) as urlsViewed FROM accessLog GROUP BY memberId;
 */


/**
 * Other Useful MySQL Operators and Functions
 */
/*
SELECT 1 = 2;
SELECT 2 = 2;
SELECT 1 = NULL;

# By using the null-safe operator <=>,
SELECT 1 <=> 2;
SELECT 2 <=> NULL ;
SELECT NULL <=> NULL ;

# You can also use the Boolean operators AND, OR, and NOT to build more complex expressions
SELECT * FROM accessLog WHERE lastAccess > '2008-11-04' AND lastAccess < '2008-11-09';

# get the current date time
SELECT now();

# get the only current date
SELECT curdate();
# get the only current time
SELECT curtime();

SELECT now(), curdate(), curtime();

#String functions allow you to manipulate string values, much like MySQL ’s string functions
SELECT SUBSTRING('Hello world!', 2, 4);

# MySQL also features many math functions:
SELECT pow( pi(), 2 );
 */