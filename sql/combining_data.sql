--With a UNION query, we can combine the results of multiple SELECT queries.
--note
-- Note that New York is both large and its name starts with the letter 'N'. But it shows up only once because duplicate rows are removed from the results automatically.

(SELECT * FROM states WHERE NAME LIKE 'n%')
UNION
(SELECT * FROM states WHERE population > 10000000);

-- Another nice thing about UNION is that you can combine queries on different tables.
(SELECT email FROM employees)
UNION
(SELECT email FROM managers)
UNION
(SELECT email FROM customers WHERE subscribed = 1);
