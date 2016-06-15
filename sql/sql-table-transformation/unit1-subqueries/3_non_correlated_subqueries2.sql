SELECT *
FROM flights
WHERE origin in (
    SELECT code
    FROM airports
    WHERE faa_region = 'ASO');