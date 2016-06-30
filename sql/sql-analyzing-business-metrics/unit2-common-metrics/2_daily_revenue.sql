select date(created_at),round(sum(price),2)
from purchases
group by date(created_at)
order by date(created_at);