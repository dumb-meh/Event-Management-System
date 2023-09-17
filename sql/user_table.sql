CREATE TABLE users(
    usersId int AUTO_INCREMENT primary KEY,
    usersName varchar (250),
    usersEmail varchar (250),
    usersUid varchar (250),
    usersPwd varchar (250),
    role int DEFAULT 0,
    adress varchar (250),
    about varchar (250),
    mobile varchar (250),
    image varchar (250),
    profileName varchar (250)
);