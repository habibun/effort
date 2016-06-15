SELECT DATE(delivery_time), count(*) as count_baked_goods
FROM baked_goods
GROUP BY DATE(delivery_time);