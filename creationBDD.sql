CREATE USER 'adminBaby'@'localhost' IDENTIFIED BY 'B@bysitt3r';
CREATE DATABASE Babysitter;
GRANT ALL PRIVILEGES ON Babysitter.* TO 'adminBaby'@'localhost';
USE Babysitter;

CREATE TABLE Babysitter (
    id INT(100) AUTO_INCREMENT,
    nom VARCHAR(100),
    prenom VARCHAR(255),
    age INT(100),
    PRIMARY KEY (id)
);

CREATE TABLE Parent (
    id INT(100) AUTO_INCREMENT,
    nom VARCHAR(100),
    prenom VARCHAR(255),
    adresse VARCHAR(255),
    PRIMARY KEY (id)
);

CREATE TABLE Enfant (
    id INT(100) AUTO_INCREMENT,
    nom VARCHAR(100),
    prenom VARCHAR(255),
    age INT(100),
    PRIMARY KEY (id)
);


CREATE TABLE Contrat (
    id INT(100) AUTO_INCREMENT,
    dateDebut date,
    parent INT(100),
    babysitter INT(100),
    enfant INT(100),
    FOREIGN KEY (babysitter) REFERENCES Babysitter(id),
    FOREIGN KEY (parent) REFERENCES Parent(id),
    FOREIGN KEY (enfant) REFERENCES Enfant(id),
    PRIMARY KEY (id)
);

