select date(ordered_at), count(date(ordered_at))
from orders
group by date(ordered_at)
order by date(ordered_at);