--IF()
-- This is a function that takes three arguments.
-- First argument is the condition, second argument is used if the condition is true and the third argument is used if the condition is false.
SELECT if(TRUE, 'foo', 'bar');
select if(false ,'foo','bar');

-- Here is a more practical example where we use it with the SUM() function:
SELECT
  sum(if(population > 5000000, 1, 0))  AS big_states,
  sum(if(population <= 5000000, 1, 0)) AS small_states
FROM states;


--CASE()
-- Let's say we want to categorize each state into one of three possible categories.
SELECT
  count(*),
  CASE
  WHEN population > 5000000 THEN 'big'
  WHEN population > 1000000 THEN 'medium'
  ELSE
    'small' END AS state_size
FROM states
GROUP BY state_size;

