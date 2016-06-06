/* count */
/*
COUNT takes the name of a column(s) as an argument and counts the number of rows where the value(s) is not NULL.
*/

--Count how many apps are in the database
select count(*) from fake_apps;

--Use COUNT() to return the total number of free apps in the table
select count(*) from fake_apps where price = 0;

-- Count the number of apps at each price.
select price, count(*) from fake_apps group by price;



/* group by*/
/*
GROUP BY is a clause used with aggregate functions to combine data from one or more columns.
*/

--Count the total number of apps at each price that have been downloaded more than 20,000 times
select price, count(*) from fake_apps where downloads > 20000 group by price;



/* sum */
/*
SUM() takes the column name as an argument and returns the sum of all the values in that column.
 */

-- What is the total number of downloads for all of the apps combined
select sum(downloads) from fake_apps;

-- Calculate the total number of downloads for each category
select category, sum(downloads) from fake_apps group by category;



/* max */
/*
MAX() takes the column name as an argument and returns the largest value in that column.
*/

--How many downloads does the most popular app have
select max(downloads) from fake_apps;

--Return the names of the most downloaded apps in each category
select name, category,  max(downloads) from fake_apps group by category;



/* min */
/*
 MIN() takes the column name as an argument and returns the smallest value in that column.
 */

-- What is the least number of times an app has been downloaded
select min(downloads) from fake_apps;

--Return the names of the apps that have been downloaded the least number of times in each category
select name, category, min(downloads) from fake_apps group by category;



/* avg */
/*
 AVG() takes a column name as an argument and returns the average value for that column.
 */

-- Calculate the average number of downloads for an app in the database
select avg(downloads) from fake_apps;

-- Calculate the average number of downloads at each price
select price, avg(downloads) from fake_apps group by price;



/* round */
/*
ROUND() takes two arguments, a column name and the number of decimal places to round the values in that column.
*/

-- Make the result set more readable by rounding the average number of downloads to two decimal places for each price
select price, round(avg(downloads),2) from fake_apps group by price;

-- Round the average number of downloads to the nearest integer for each price.
select price, round(avg(downloads)) from fake_apps group by price;
