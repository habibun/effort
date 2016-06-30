select
  date(created_at),
  platform,
  count(distinct user_id) as dau
from gameplays
group by 1, 2
order by 1, 2;