CREATE TABLE events (
id int AUTO_INCREMENT PRIMARY KEY,
username varchar(200),
eventType varchar(200),
eventDetails varchar (1000),
packageName varchar (100),
couponCode varchar (20),
amount int,
eventDate date,
status int DEFAULT 0,
feedback varchar(5000),
rating varchar(5)
);