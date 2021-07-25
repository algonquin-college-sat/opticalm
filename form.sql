CREATE TABLE IF NOT EXISTS Tests (
    PersonID int PRIMARY KEY auto_increment,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    phone varchar (12),
    date date,
    email varchar(255),
    City varchar(255),
    Country varchar(255),
    Gender char(10),
    Sensitivites varchar(600),
	Difficulties varchar(600),
    Conditions varchar(600),
    SensitivitesToPattern varchar(600)
);

select * from tests;