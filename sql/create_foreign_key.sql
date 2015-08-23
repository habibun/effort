CREATE TABLE orders (
order_id INT AUTO_INCREMENT PRIMARY KEY,   
customer_id INT,  
amount DOUBLE,   
FOREIGN KEY (customer_id) REFERENCES customers(customer_id)  
);

--Without Explicit Declaration:
 CREATE TABLE orders (
 	order_id INT AUTO_INCREMENT PRIMARY KEY, 
 	customer_id INT,
 	amount DOUBLE,
 	INDEX (customer_id)  
 );  