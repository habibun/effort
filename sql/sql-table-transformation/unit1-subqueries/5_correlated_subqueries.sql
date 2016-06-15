SELECT id
FROM flights AS f
WHERE distance < (
 SELECT AVG(distance)
 FROM flights
 WHERE carrier = f.carrier);