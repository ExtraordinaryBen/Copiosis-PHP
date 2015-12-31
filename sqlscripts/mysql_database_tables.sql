CREATE TABLE location (
locationID int AUTO_INCREMENT NOT NULL, 
country varchar(55), 
state varchar(55), 
city varchar(55), 
neighborhood varchar(55), 
signupKey varchar(55),
PRIMARY KEY (locationID)
);

-- Insert the initial neighborhood needed for the Copiosis Application
INSERT INTO location 
      (country,state,city,neighborhood,signupKey)
      VALUES
      ('USA','Oregon','Portland','Kenton','kenton2014trial');

CREATE TABLE users (
userID int AUTO_INCREMENT NOT NULL PRIMARY KEY, 
username varchar(55) NOT NULL, 
password varchar(100) NOT NULL,
email varchar(200), 
firstName varchar(55), 
lastName varchar(55), 
status int NOT NULL,	
nbr float DEFAULT 0,
lastLogin datetime,
prevLastLogin datetime,
locationID int NOT NULL,
FOREIGN KEY (locationID) REFERENCES location(locationID)
);

CREATE TABLE item_class (
classID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
name varchar(55),
suggestedGateway int,
cPdb float,
a float,
aMax int,
d int,
aPrime int,
cCb float,
m1 float,
pO int,
m2 float,
cEb float,
s int,
m3 float,
sE smallint,
m4 float,
sH smallint,
m5 float
);

-- Insert the Default itemClass values needed for the Copiosis Application
INSERT INTO item_class 
  (name,suggestedGateway,cPdb,a,aMax,d,
  aPrime,cCb,m1,pO,m2,cEb,s,m3,sE,m4,sH,m5)
VALUES (
	'Default',
	1,
	1.0,
	10,
	10,
	2,
	1,
	1.0,
	1.0,
	1.0,
	1.0,
	1.0,
	1,
	1.0,
	1,
	1.0,
	1.0,
	1.0
);

CREATE TABLE products (
productID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
type varchar(25) NOT NULL DEFAULT 'Product',
name varchar(155) NOT NULL,
description TEXT NOT NULL,
gateway int NOT NULL,
itemClass int NOT NULL,
createdDate datetime NOT NULL, 
deletedDate datetime,
ownerID int NOT NULL,
uniqueidentifier varchar(36) NOT NULL DEFAULT '0',
FOREIGN KEY (itemClass) REFERENCES item_class(classID),
FOREIGN KEY (ownerID) REFERENCES users(userID)
);

CREATE TRIGGER before_insert_products
  BEFORE INSERT ON products
  FOR EACH ROW
  SET new.uniqueidentifier = uuid();

CREATE TABLE transactions (
transactionID varchar(36) NOT NULL PRIMARY KEY DEFAULT '0', 
providerID int NOT NULL,
providerNotes TEXT,
receiverID int NOT NULL,
receiverNotes TEXT,
date date, 
productID int NOT NULL,
productGateway int NOT NULL,
productDesc varchar(255) NOT NULL,
status varchar(16),
dateAdded datetime NOT NULL,
createdBy int NOT NULL,
dateClosed datetime,
nbr float,
satisfaction smallint,
FOREIGN KEY (providerID) REFERENCES users(userID),
FOREIGN KEY (receiverID) REFERENCES users(userID),
FOREIGN KEY (productID)  REFERENCES products(productID),
FOREIGN KEY (createdBy)  REFERENCES users(userID)
);

CREATE TRIGGER before_insert_transactions
  BEFORE INSERT ON transactions
  FOR EACH ROW
  SET new.transactionID = uuid();

CREATE TABLE version (
	Id varchar(25),
	VersionNumber int
);

INSERT INTO version VALUES('Copiosis', 1);
