select date(ordered_at), round(sum(amount_paid), 2)
from orders
    join order_items on
      orders.id = order_items.order_id
where name = 'kale-smoothie'
group by ordered_at
order by ordered_at;