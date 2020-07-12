CREATE TABLE Contacts ( 
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
	email NVARCHAR[30]  NOT NULL , 
	name NVARCHAR(30)  NOT NULL,
	message NVARCHAR(100)  NOT NULL  
);

INSERT INTO Contacts(email,name,message) VALUES ('niam@khuigandui.com','Niam','Hello');
