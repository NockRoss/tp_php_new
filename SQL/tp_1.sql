DROP DATABASE IF EXISTS tp_1; 
CREATE DATABASE tp_1; 
USE tp_1;


CREATE TABLE User(
        idUser int(3) not null auto_increment,
        email varchar (50) not null,
        password varchar (50) not null,
        firstname varchar (50) not null,
        lastname varchar (50) not null,
        adress varchar(50) not null,
        postalCode varchar (50) not null,
        city varchar (50) not null,
        admin tinyint (1),
        PRIMARY KEY (idUser)
);
insert into User values (null,"email@gmail.com","psswrd","Test_Nom_Admin","Test_Prenom_Admin","test_adress_Admin","CodePostal_Admin","Paris",1),
                        (null,"email@gmail.com","psswrd","Test_Nom_User","Test_Prenom_User","test_adress","CodePostal","Paris",0);
