/* select */
/*
SELECT is the clause you use every time you want to query information from a database.
*/

--Let's take a look at the name and imdb_rating of every movie in the database.
select name, imdb_rating FROM movies;



/* distinct */
/*
SELECT DISTINCT is used to return unique values in the result set. It filters out all duplicate values.
*/

-- SELECT DISTINCT is used to return unique values in the result set
select distinct genre from movies;



/* where */
/*
WHERE is a popular command that lets you filter the results of the query based on conditions that you specify.
 */

-- The way to filter queries in SQL is to use the WHERE clause
select * from movies where imdb_rating > 8;




/* like */
/*
LIKE and BETWEEN are special operators that can be used in a WHERE clause
*/

-- LIKE is a special operator that can be used in a WHERE clause
SELECT * from movies where name like 'Se_en';

-- A% matches all movies with names that begin with "A"
-- %a matches all movies that end with "a
select * from movies where name like 'a%';

-- You can use % both before and after a pattern. Here, any movie that contains the word "man" in its name will be returned in the result set
select * from movies where name like '%man%';




/* between */
/*
The BETWEEN operator is used to filter the result set within a certain range.
*/

-- This statement filters the result set to only include movies with names that begin with letters "A" up to but not including "J".
SELECT * FROM movies WHERE name BETWEEN 'A' AND 'J';

--In this statement, the BETWEEN operator is being used to filter the result set to only include movies with years between 1990 up to and including 2000.
select * from movies where year between 1990 and 2000;



/*
AND and OR are special operators that you can use with WHERE to filter the query on two or more conditions.
*/


/* and */
/*
Sometimes you want to combine multiple conditions in a WHERE clause to make the result set more specific and useful. One way of doing this is to use the AND operator.
*/
-- Instead of returning every movie made BETWEEN 1990 and 2000, let's just return the movies that are comedies.
select * from movies where year between 1990
and 2000 and genre = "comedy";




/* or */
/*
The OR operator can also be used to combine more than one condition in a WHERE clause
*/

--The OR operator can also be used to combine more than one condition in a WHERE clause. The OR operator evaluates each condition separately and if any of the conditions are true then the row is added to the result set.
select * from movies where genre = 'comedy' or year < 1980;



/* order by */
/*
ORDER BY lets you sort the results of the query in either ascending or descending order.
*/

-- It is often useful to list the data in our result set in a particular order
select * from movies order by imdb_rating desc;




/* limit */
/*
LIMIT lets you specify the maximum number of rows that the query will return. This is especially important in large tables that have thousands or even millions of rows.
*/

--Let's write a query that only returns the three lowest rated movies
select * from movies order by imdb_rating asc limit 3;
