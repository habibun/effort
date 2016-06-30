select date(created_at),round(sum(price),2)
from purchases
where refunded_at is not null
group by date(created_at)
order by date(created_at);