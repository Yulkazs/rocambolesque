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

CREATE TABLE Menu (
    menu_id INT AUTO_INCREMENT PRIMARY KEY,
    menu_name VARCHAR(100) NOT NULL
);

CREATE TABLE Categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(100) NOT NULL
);

CREATE TABLE Menu_Categories (
    menu_id INT,
    category_id INT,
    PRIMARY KEY (menu_id, category_id),
    FOREIGN KEY (menu_id) REFERENCES Menu(menu_id),
    FOREIGN KEY (category_id) REFERENCES Categories(category_id)
);

CREATE TABLE Gerechten (
    gerecht_id INT AUTO_INCREMENT PRIMARY KEY,
    gerecht_name VARCHAR(100) NOT NULL,
    gerecht_beschNL VARCHAR(100) NOT NULL,
    gerecht_beschEN VARCHAR(100) NOT NULL,
    gerecht_prijs decimal(5,2) NOT NULL,
    menu_id INT NOT NULL
);

CREATE TABLE Categorieen_Gerechten (
    category_id INT,
    gerecht_id INT,
    PRIMARY KEY (category_id, gerecht_id),
    FOREIGN KEY (category_id) REFERENCES Categories(category_id),
    FOREIGN KEY (gerecht_id) REFERENCES Gerechten(gerecht_id)
);

INSERT INTO Gerechten (gerecht_name, gerecht_beschNL, gerecht_beschEN, gerecht_prijs, menu_id) VALUES
('stampot', 'nl', 'en', 24.99, 1),
('harira', 'marokkaans', 'en', 8.99, 2);

INSERT INTO Menu ( menu_id, menu_name) VALUES
(1,'zomer'),
(2,'winter');


INSERT INTO Menu_Categories (menu_id, category_id) VALUES
(1,1),
(1,2),
(2,2);

INSERT INTO Categorieen_Gerechten (category_id, gerecht_id) VALUES
(1,1),
(1,2),
(2,3),
(2,4);