select * from flights
where origin in (select code from airports where elevation < 2000);