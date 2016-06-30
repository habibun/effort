with daily_revenue as (
select
date(created_at) as dt,
round(sum(price), 2) as rev
from purchases
where refunded_at is null
group by 1
),
daily_players as (
select
date(created_at) as dt,
count(distinct user_id) as players
from gameplays
group by 1
)
select
  daily_revenue.dt,
  daily_revenue.rev / daily_players.players
from daily_revenue
  join daily_players using (dt);