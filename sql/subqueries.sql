-- The inner query will return the highest population of all states. And the outer query will search the table again using that value.
select * from states where population = (
  select max(population) from states
);

--  The same query could be more efficiently written as this
select * from states order by population desc limit 1;

-- alter syntax
select max(population) from states;

--another
select * from states where join_year = (
  select max(join_year) from states
);


--in()
SELECT * FROM states
WHERE join_year IN (
  SELECT join_year FROM states GROUP BY join_year
  HAVING COUNT(*) > 1  )
ORDER BY join_year;

