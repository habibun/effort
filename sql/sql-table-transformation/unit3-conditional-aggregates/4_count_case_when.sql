SELECT    state,
  COUNT(CASE WHEN elevation < 1000 THEN 1 ELSE NULL END) as count_low_elevation_airports
FROM airports
GROUP BY state;