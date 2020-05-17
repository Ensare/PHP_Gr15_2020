create database phpconnection;

use phpconnection;

CREATE TABLE IF NOT EXISTS `Products` (  
  `id` int(11) NOT NULL AUTO_INCREMENT,  
  `name` varchar(255) NOT NULL,  
  `image` varchar(255) NOT NULL,  
  `price` double(10,2) NOT NULL,  
  PRIMARY KEY (`id`)  
 );

 INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES  
(01, "Natalia", "1.jpg", 5000), 
(02, "Valebeck", "1.jpg", 2999),  
(03, "Giunta Wool", "1.jpg", 13000),  
(04, "Schofield", "1.jpg", 7500),  
(05, "Wystfield", "1.jpg", 20000),  
(06, "Starmore", "1.jpg", 10000), 
(07, "Araceli", "1.jpg", 125),
(08, "Oisin", '2.jpg', 300),   
(09, "Palma", '3.jpg', 86),
(10, "Calani", '3.jpg', 320),
(11, "Edelmar", '3.jpg', 415),
(12, "Denes", '3.jpg', 260),
(13, "Celya", '3.jpg', 5000),
(14, "Mattress", '3.jpg', 2090),
(15, "Tommy Bahama", '3.jpg', 5000),
(16, "Wayfair", '3.jpg', 7500),
(17, "Tuft and Needle", '3.jpg', 3000),
(18, "Effie", '3.jpg', 6000),
(19, "Kitchen Reno", '3.jpg', 1000),
(20, "Kingsey Kitchen", '3.jpg', 1200),
(21, "Zobel and Co Kitchen", '3.jpg', 1500),
(22, "Calagary Kitchen", '3.jpg', 1300),
(23,"Fitted Kitchen", '3.jpg', 1700),
(24, "Bescope Kitchen", '3.jpg', 2000);


CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(100) NOT NULL
);

CREATE table orders(
id int(11) not null auto_increment primary key,
contact varchar(100) not null,
mobile varchar(50) not null,
address varchar(100) not null,
country varchar(20) not null,
city varchar(30) not null,
zip int(5) not null
);

create table infoFromFooter(
id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
emri varchar(30),
email varchar(30),
subjekti varchar(60),
mesazhi varchar(300)
);
create table online(
id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
contact varchar(30),
email varchar(30),
mobile varchar(30),
adresa varchar(50),
country varchar(30),
city varchar(30),
zip int);

drop table online;

select * from users;
select * from orders;
select * from online;
select* from infoFromFooter;
drop table users;
