DROP DATABASE IF EXISTS menukaart;
CREATE DATABASE IF NOT EXISTS menukaart;
Use menukaart;

-- Tabel voor menu
CREATE TABLE Menu (
    menu_id INT AUTO_INCREMENT PRIMARY KEY,
    menu_name VARCHAR(100) NOT NULL
);

-- Tabel voor menucategorieën
CREATE TABLE Categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(100) NOT NULL
);

-- Koppel Tabel voor menus en categorieën
CREATE TABLE Menu_Categories (
    menu_id INT,
    category_id INT,
    PRIMARY KEY (menu_id, category_id),
    FOREIGN KEY (menu_id) REFERENCES Menu(menu_id),
    FOREIGN KEY (category_id) REFERENCES Categories(category_id)
);

-- Tabel voor gerechten
CREATE TABLE Gerechten (
    gerecht_id INT AUTO_INCREMENT PRIMARY KEY,
    gerecht_name VARCHAR(100) NOT NULL,
    gerecht_prijs decimal(5,2) NOT NULL
);

-- Koppel Tabel voor categorieën en gerechten
CREATE TABLE Categorieen_Gerechten (
    category_id INT,
    gerecht_id INT,
    PRIMARY KEY (category_id, gerecht_id),
    FOREIGN KEY (category_id) REFERENCES Categories(category_id),
    FOREIGN KEY (gerecht_id) REFERENCES Gerechten(gerecht_id)
);

-- Data
START TRANSACTION;

INSERT INTO Gerechten (gerecht_name, gerecht_prijs) VALUES
('stampot', 24.99),
('boerekool', 8.99);

INSERT INTO Menu (menu_name) VALUES
('zomer'),
('winter');

INSERT INTO Categories (category_name) VALUES
('nl'),
('marokkaans');

INSERT INTO Menu_Categories (menu_id, category_id) VALUES
(1,1),
(1,2),
(2,2);

INSERT INTO Categorieen_Gerechten (category_id, gerecht_id) VALUES
(1,1),
(1,2),
(2,3),
(2,4);

COMMIT;