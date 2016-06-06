/* Primary Key  */
/*
Primary Key is a column that serves a unique identifier for row in the table.
Values in this column must be unique and cannot be NULL
*/

-- Using the CREATE TABLE statement we added a PRIMARY KEY to the id column
create table artists(id integer primary key, name text);

-- Notice that the primary key has returned exactly one row
select * from artists where id = 3;



/* Foreign Key */
/*
Foreign Key is a column that contains the primary key to another table in the database.
It is used to identify a particular row in the referenced table.
*/

--A foreign key is a column that contains the primary key of another table in the database
select * from albums where artist_id = 3;




/* join */
/*
Joins are used in SQL to combine data from multiple tables
*/

--One way to query multiple tables is to write a SELECT statement with multiple table names separated by a comma.
--This is also known as a cross join.
-- Unfortunately the result of this cross join is not very useful.
-- It combines every row of the artists table with every row of the albums table
elect albums.name, albums.year, artists.name from albums, artists;




/* inner join */
/*
INNER JOIN will combine rows from different tables if the join condition is true
*/

--An inner join will combine rows from different tables if the join condition is true
select * from albums join artists on albums.artist_id = artists.id;



/* left join */
/*
LEFT OUTER JOIN will return every row in the left table, and if the join condition is not met, NULL values are used to fill in the columns from the right table
*/

--Not every album in our database has an artist. Let's write a join statement that includes these albums
select * from albums left join artists on albums.artist_id = artists.id;




/* AS */
/*
AS is a keyword in SQL that allows you to rename a column or table in the result set using an alias.
 */
--
 SELECT albums.name AS 'Album', albums.year, artists.name AS 'Artist' FROM albums
JOIN artists ON albums.artist_id = artists.id
WHERE albums.year > 1980;