drop database if exists rocambolesque;
create database rocambolesque;
use rocambolesque;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    number VARCHAR(11) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    authLevel INT(1) NOT NULL,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE MENU (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gerecht VARCHAR(255) NOT NULL,
    prijs FLOAT(10,2) NOT NULL,
    descNL VARCHAR(255) NOT NULL,
    descEN VARCHAR(255) NOT NULL
);
