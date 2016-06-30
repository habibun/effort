select name, round(sum(amount_paid) /
                   (select sum(amount_paid) from order_items) * 100.0, 2) as pct
from order_items
group by 1
order by 2 desc;