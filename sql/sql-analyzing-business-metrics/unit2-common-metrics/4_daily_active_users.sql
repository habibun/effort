select
  date(created_at),
  count(distinct user_id) as dau
from gameplays
group by 1
order by 1;