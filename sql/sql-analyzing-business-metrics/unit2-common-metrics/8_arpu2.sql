with daily_revenue as (
select
date(created_at) as dt,
round(sum(price), 2) as rev
from purchases
where refunded_at is null
group by 1
)
select * from daily_revenue order by dt;