DROP TABLE IF EXISTS users;  
CREATE TABLE users (  
		id int(11) NOT NULL AUTO_INCREMENT,  
		name varchar(20) NOT NULL,  
		password varchar(20) NOT NULL,
		email  varchar(30),  
		signupDates  date,  
		PRIMARY KEY (id)  
) ENGINE=innodb  DEFAULT CHARSET=utf8;  

