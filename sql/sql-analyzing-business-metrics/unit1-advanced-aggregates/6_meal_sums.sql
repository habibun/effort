select name, round(sum(amount_paid), 2)
from order_items
group by name
order by 2 desc;