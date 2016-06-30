select
  date(g1.created_at) as dt,
  g1.user_id
from gameplays as g1
  join gameplays as g2 on
                         g1.user_id = g2.user_id
order by 1
limit 100;