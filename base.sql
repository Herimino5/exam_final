CREATE DATABASE  exam_finale;
USE exam_finale;

CREATE TABLE membre (
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    date_naissance DATE,
    genre ENUM('Homme', 'Femme'),
    email VARCHAR(100) UNIQUE,
    ville VARCHAR(100),
    mdp VARCHAR(255),
    image_profil VARCHAR(255)
);

CREATE TABLE categorie_objet (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(100)
);

CREATE TABLE objet (
    id_objet INT AUTO_INCREMENT PRIMARY KEY,
    nom_objet VARCHAR(100),
    id_categorie INT,
    id_membre INT,
    FOREIGN KEY (id_categorie) REFERENCES categorie_objet(id_categorie),
    FOREIGN KEY (id_membre) REFERENCES membre(id_membre)
);

CREATE TABLE images_objet (
    id_image INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT,
    nom_image VARCHAR(255),
    FOREIGN KEY (id_objet) REFERENCES objet(id_objet)
);

CREATE TABLE emprunt (
    id_emprunt INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT,
    id_membre INT,
    date_emprunt DATE,
    date_retour DATE,
    FOREIGN KEY (id_objet) REFERENCES objet(id_objet),
    FOREIGN KEY (id_membre) REFERENCES membre(id_membre)
);

INSERT INTO membre (nom, date_naissance, genre, email, ville, mdp, image_profil) VALUES
('Alice Dupont', '1990-05-15', 'Femme', 'alice@example.com', 'Paris', 'password123', 'alice.jpg'),
('Bob Martin', '1985-03-22', 'Homme', 'bob@example.com', 'Lyon', 'password123', 'bob.jpg'),
('Charlie Durand', '1992-07-10', 'Homme', 'charlie@example.com', 'Marseille', 'password123', 'charlie.jpg'),
('Diane Moreau', '1988-11-30', 'Femme', 'diane@example.com', 'Toulouse', 'password123', 'diane.jpg');

INSERT INTO categorie_objet (nom_categorie) VALUES
('Esthétique'),
('Bricolage'),
('Mécanique'),
('Cuisine');

INSERT INTO objet (nom_objet, id_categorie, id_membre) VALUES
('Sèche-cheveux', 1, 1),
('Pinceau de maquillage', 1, 1),
('Tournevis', 2, 1),
('Perceuse', 2, 1),
('Clé à molette', 3, 1),
('Pompe à vélo', 3, 1),
('Mixeur', 4, 1),
('Casserole', 4, 1),
('Robot pâtissier', 4, 1),
('Blender', 4, 1),
('Fer à lisser', 1, 2),
('Truelle', 2, 2),
('Scie', 2, 2),
('Clé anglaise', 3, 2),
('Crics', 3, 2),
('Four micro-ondes', 4, 2),
('Poêle', 4, 2),
('Batteur électrique', 4, 2),
('Couteau de chef', 4, 2),
('Épluche-légumes', 4, 2),
('Brosse à cheveux', 1, 3),
('Marteau', 2, 3),
('Pince', 2, 3),
('Clé dynamométrique', 3, 3),
('Compresseur', 3, 3),
('Grille-pain', 4, 3),
('Cuiseur vapeur', 4, 3),
('Moulin à café', 4, 3),
('Tire-bouchon', 4, 3),
('Couteau à pain', 4, 3),
('Lisseur vapeur', 1, 4),
('Scie sauteuse', 2, 4),
('Perceuse-visseuse', 2, 4),
('Clé plate', 3, 4),
('Pistolet à peinture', 3, 4),
('Machine à café', 4, 4),
('Friteuse', 4, 4),
('Cocotte-minute', 4, 4),
('Spatule', 4, 4),
('Râpe à fromage', 4, 4);

INSERT INTO images_objet (id_objet, nom_image) VALUES
(1, 'seche_cheveux.jpg'),
(2, 'pinceau_maquillage.jpg'),
(3, 'tournevis.jpg'),
(4, 'perceuse.jpg'),
(5, 'cle_molette.jpg'),
(6, 'pompe_velo.jpg'),
(7, 'mixeur.jpg'),
(8, 'casserole.jpg'),
(9, 'robot_patissier.jpg'),
(10, 'blender.jpg');

INSERT INTO emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES
(1, 2, '2023-10-01', '2023-10-10'),
(2, 3, '2023-10-02', '2023-10-12'),
(3, 4, '2023-10-03', '2023-10-13'),
(4, 1, '2023-10-04', '2023-10-14'),
(5, 2, '2023-10-05', '2023-10-15'),
(6, 3, '2023-10-06', '2023-10-16'),
(7, 4, '2023-10-07', '2023-10-17'),
(8, 1, '2023-10-08', '2023-10-18'),
(9, 2, '2023-10-09', '2023-10-19'),
(10, 3, '2023-10-10', '2023-10-20');
