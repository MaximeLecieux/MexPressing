CREATE DATABASE MexPressing;

USE MexPressing;

CREATE TABLE Categories (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE Articles (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    article VARCHAR(50) NOT NULL,
    price VARCHAR(50) NOT NULL,
    id_category INT(11) NOT NULL,
    FOREIGN KEY (id_category) REFERENCES Categories(id)
);

CREATE TABLE Images (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    url VARCHAR(255)
);

CREATE TABLE Fonctions (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    role VARCHAR(50)
);

CREATE TABLE Employed (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    identifiant VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    id_fonction INT(11) NOT NULL,
    FOREIGN KEY (id_fonction) REFERENCES Fonctions(id)
);


CREATE TABLE Schedule (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    day VARCHAR(50) NOT NULL,
    morning VARCHAR(50),
    afternoon VARCHAR(50)
);

CREATE TABLE Clients (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone VARCHAR(50),
    mail VARCHAR(50) NOT NULL,
    password VARCHAR(255),
    id_fonction INT(11) NOT NULL,
    FOREIGN KEY (id_fonction) REFERENCES Fonctions(id)
);

INSERT INTO `Fonctions` (`id`, `role`) VALUES
(1, 'Administrateur'),
(2, 'Employé'),
(3, 'Caissier'),
(4, 'Client');

INSERT INTO `Categories` (`id`, `name`) VALUES
(1, 'Vêtement Homme/Femme'),
(2, 'Vêtement Femme'),
(3, 'Vêtement enfant (8 ans)'),
(4, 'Blanchisserie'),
(5, 'Ameublement'),
(6, 'Cuir & daim'),
(7, 'Repassage');

INSERT INTO `Articles` (`id`, `article`, `price`, `id_category`) VALUES
(1, 'Article1', '12', 1);

INSERT INTO `Employed` (`id`, `identifiant`, `password`, `id_fonction`) VALUES
(1, 'administrateur@mexpressing.com', 'Administrateur973!', 1);

INSERT INTO `Schedule` (`id`, `day`, `morning`, `afternoon`) VALUES
(1,'Lundi', 'Fermé', 'Fermé'),
(2,'Mardi', '8h30 - 12h00', '14h00 - 18h00'),
(3,'Mercredi', '8h30 - 12h00', '14h00 - 18h00'),
(4,'Jeudi', '8h30 - 12h00', '14h00 - 18h00'),
(5,'Vendredi', '8h30 - 12h00', '14h00 - 18h00'),
(6,'Samedi', '8h30 - 12h00', 'Fermé'),
(7,'Dimanche', 'Fermé', 'Fermé');

INSERT INTO `Clients` (`id`, `first_name`, `last_name`, `phone`, `mail`, `id_fonction`) VALUES
(1, 'LECIEUX', 'Maxime', '0123456789', 'maxime.lecieuxlmf@gmail.com', 4),
(2, 'MATHIEU', 'Camille', '1234567890', 'cam.mathieu@algam.net', 4),
(3, 'BAILLY', 'Dominique', '9876543210', 'mino.ciszak@hotmail.com', 4);

DROP DATABASE pressing;
