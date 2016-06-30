select
  case name
  when 'kale-smoothie'    then 'smoothie'
  when 'banana-smoothie'  then 'smoothie'
  when 'orange-juice'     then 'drink'
  when 'soda'             then 'drink'
  when 'blt'              then 'sandwich'
  when 'grilled-cheese'   then 'sandwich'
  when 'tikka-masala'     then 'dinner'
  when 'chicken-parm'     then 'dinner'
  else 'other'
  end as category, round(1.0 * sum(amount_paid) /
                         (select sum(amount_paid) from order_items) * 100, 2) as pct
from order_items
group by 1
order by 2 desc;