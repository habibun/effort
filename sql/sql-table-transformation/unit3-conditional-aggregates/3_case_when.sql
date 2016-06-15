SELECT
  CASE
  WHEN elevation < 250 THEN 'Low'
  WHEN elevation BETWEEN 250 AND 1749 THEN 'Medium'
  WHEN elevation >= 1750 THEN 'High'
  ELSE 'Unknown'
  END AS elevation_tier
  , COUNT(*)
FROM airports
GROUP BY 1;