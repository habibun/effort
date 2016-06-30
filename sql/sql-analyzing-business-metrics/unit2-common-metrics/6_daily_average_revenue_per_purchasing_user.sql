select
  date(created_at),
  round(sum(price) / count(distinct user_id), 2) as arppu
from purchases
where refunded_at is null
group by 1
order by 1;