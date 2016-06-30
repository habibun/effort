select name, round(1.0 * count(distinct order_id) /
                   count(distinct orders.delivered_to), 2) as reorder_rate
from order_items
  join orders on
                orders.id = order_items.order_id
group by 1
order by 2 desc;



