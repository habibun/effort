--Cross Join
--This is the default type of JOIN query when no condition is specified.  
SELECT * FROM customers JOIN orders;

--The JOIN keyword can be optionally replaced with a comma instead. 
SELECT * FROM customers,orders;

--Natural Join
--With this kind of JOIN query, the tables need to have a matching column name. In our case, both the tables have the customer_id column. So, MySQL will join the records only when the value of this column is matching on two records. 
SELECT * FROM customers NATURAL JOIN orders;

--Inner Join
--When a join condition is specified, an Inner Join is performed. In this case, it would be a good idea to have the customer_id field match on both tables. The results should be similar to the Natural Join. 
SELECT * FROM customers JOIN orders
WHERE customers.`customer_id` = orders.`customer_id`;

--Let’s add some more conditions to the query. 
SELECT * FROM customers JOIN orders
WHERE customers.`customer_id` = orders.`customer_id`
AND orders.`amount` > 15;

--ON Clause
--This is useful for putting the JOIN conditions in a separate clause.
SELECT * FROM customers JOIN orders
ON (customers.`customer_id` = orders.`customer_id`)
WHERE orders.`amount` > 15;

--USING Clause
--USING clause is similar to the ON clause, but it’s shorter. If a column is the same name on both tables, we can specify it here. 
--note:In fact, this is much like the NATURAL JOIN, so the join column (customer_id) is not repeated twice in the results. 
SELECT * FROM customers JOIN orders
USING(`customer_id`)
WHERE orders.`amount` > 15;

--Left (Outer) Join
--A LEFT JOIN is a type of Outer Join. In these queries, if there is no match found from the second table, the record from the first table is still displayed.  
SELECT * FROM customers LEFT OUTER JOIN	orders
USING (`customer_id`);

--This is also useful for finding records that do not have relationships. For example, we can search for customers who have not placed any orders
SELECT * FROM customers LEFT OUTER JOIN	orders
USING (`customer_id`)
WHERE orders.`order_id` IS NULL;
--Note:Also note that the OUTER keyword is optional. You can just use LEFT JOIN instead of LEFT OUTER JOIN.

--Conditionals
--Now let’s look at a query with a condition.
SELECT	* FROM customers 
LEFT OUTER JOIN orders
USING(`customer_id`)
WHERE orders.`amount` > 15;

--So what happened to Andy and Sandy? LEFT JOIN was supposed to return customers with no matching orders. The problem is that the WHERE clause is blocking those results. To get them we can try to include the NULL condition as well. 
SELECT	* FROM customers 
LEFT OUTER JOIN orders
USING(`customer_id`)
WHERE orders.`amount` > 15 OR orders.`order_id` IS NULL;

--We got Andy but no Sandy. Still this does not look right. To get what we want, we need to use the ON clause. 
SELECT * FROM customers
LEFT OUTER JOIN orders
ON(customers.`customer_id`= orders.`customer_id` AND orders.`amount` > 15);


--Right (Outer) Join
--A RIGHT OUTER JOIN works exactly the same, but the order of the tables are reversed. 
SELECT * FROM customers 
RIGHT OUTER JOIN orders
USING (`customer_id`);

--This time we have no NULL results because every order has a matching customer record. We can change the order of the tables and get the same results as we did from the LEFT OUTER JOIN. 
SELECT * FROM orders RIGHT OUTER JOIN customers
USING(`customer_id`);
