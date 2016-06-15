SELECT category FROM legacy_products

EXCEPT

SELECT category FROM new_products;