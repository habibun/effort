SELECT     origin,
  100.0*(sum(CASE WHEN carrier = 'DL' THEN distance ELSE 0 END)/sum(distance)) as percentage_flight_distance_from_delta FROM flights
GROUP BY origin;