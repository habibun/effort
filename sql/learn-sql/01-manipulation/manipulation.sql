/* select */
/*
SELECT queries data from a table.
*/
SELECT * FROM celebs;

/* crate table */
/*
CREATE TABLE creates a new table.
*/
CREATE TABLE celebs (id INTEGER, name TEXT, age INTEGER);

/* insert into */
/*
INSERT INTO adds a new row to a table.
*/
INSERT INTO celebs (id, name, age) VALUES (1, 'Justin Bieber', 21);

/* update */
/*
UPDATE edits a row in a table.
*/
UPDATE celebs SET age = 22 WHERE id = 1;

/* alter table */
/*
ALTER TABLE changes an existing table
*/
ALTER TABLE celebs ADD COLUMN twitter_handle TEXT;

/* delete */
/*
DELETE FROM deletes rows from a table
*/
DELETE FROM celebs WHERE twitter_handle IS NULL;