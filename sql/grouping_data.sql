-- The GROUP BY clause groups the resulting data rows into groups
SELECT *from states group by join_year;

-- It would be mostly useless without using an aggregate function such as COUNT()
--  see the number of states for each join_year
select count(*),join_year from states group by join_year;

-- Number of all rows in the table:
SELECT count(*) FROM states;

-- Number of rows satisfying a WHERE clause
SELECT count(*) from states where join_year = '1787';

-- MIN(), MAX() and AVG()
-- These functions return the minimum, maximum and average values:
SELECT min(population),max(population),avg(population) from states;

-- GROUP_CONCAT()
-- This function concatenates all values inside the group into a single string, with a given separator
select group_concat(name separator ','),join_year from states group by join_year;

-- You can use this to add up the numerical values.
SELECT sum(population) as usa_population from states;



