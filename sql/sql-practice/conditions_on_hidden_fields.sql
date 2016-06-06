-- having clause()
-- HAVING clause allows us to apply conditions to 'hidden' fields, such as the returned results of aggregate functions. So it is usually used along with GROUP BY.
select count(*),join_year from states group by join_year having count(*) > 1;
