drop database pos;
create database pos;
use pos;

create table items (
	id int auto increment primary key NOT NULL,
	description varchar(255) NOT NULL;
	cost decimal(10,2) NOT NULL



);

--add date
insert auto Items (description, cost values ("Tube", 5);
insert auto Items (description, cost values ("Long Tube", 7);
insert auto Items (description, cost values ("Dog", 2);
insert auto Items (description, cost values ("Hairy Spider", 35);

create table Customers (
	id int auto_increment primary key NOT NULL,
	Email varchar(255) NOT NULL,
	ShippingAddress varchar(255) NOT NULL,
	BillingAddress varchar(255) NOT NULL,
	FirstName varchar(255) NOT NULL,
	LastName var char(255) NOT NULL,

	);

	insert auto Customers(Email, ShippingAddress, BillingAddress, FirstName, Lastname) values ("coolguy@gmail.com", "23 E Main Calexico", "Jimmy", "Cozza");
	insert auto Customers(Email, ShippingAddress, BillingAddress, FirstName, Lastname) values ("hotmail@ghotmail.com", "345 E Main Mexicali", "Sean", "Smith");

	create table Orders(
		id int auto_increment primary key NOT NULL,
		OrderDate Date NOT NULL,
		CustomerID int NOT NULL



	);



insert into Orders(OrderDate, CustomerID) values ("2015/01/01", "1");
insert into Orders(OrderDate, CustomerID) values ("2015/01/01", "2");
insert into Orders(OrderDate, CustomerID) values ("2015/02/01", "1");
insert into Orders(OrderDate, CustomerID) values ("2015/02/01", "2");