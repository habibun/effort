--Since MySQL has many special words like SELECT or UPDATE,
--you can prevent collision by putting quotes around your table and column names.
--But these are not the regular quotes; you need to use the backtick (`) character.
--Let’s say you want to add a column named ‘delete’ for some reason:
alter table users add `delete` varchar(100) after user_name;