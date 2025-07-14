CREATE Table s2_membre(
    id_mbr INT auto_increment ,
    nom VARCHAR (20),
    dtn DATE,
    genre VARCHAR(15),
    email VARCHAR(50),
    ville VARCHAR(50),
    mdp VARCHAR(20),
    pdp VARCHAR(20),
    PRIMARY KEY(id_mbr)
);

CREATE TABLE s2_categorie_obj(
    id_c INT PRIMARY KEY,
    nom_c VARCHAR(20)
);

CREATE Table s2_objet(
    id_obj INT PRIMARY KEY,
    nom_obj VARCHAR(50),
    id_c INT,
    id_mbr INT,
    Foreign Key (id_c) REFERENCES s2_categorie_obj (id_c),
    Foreign Key (id_mbr) REFERENCES s2_membre (id_mbr)
);

CREATE Table s2_img_obj(
    id_img INT auto_increment,
    id_obj INT,
    nom_img VARCHAR(20),
    Foreign Key (id_obj) REFERENCES s2_objet (id_obj),
    Foreign key (id_img);
);

CREATE TABLE s2_emprunt(
    id_ump INT auto_increment,
    id_obj INT,
    id_mbr INT,
    date_ump DATE,
    date_ret DATE,
    Foreign Key (id_obj) REFERENCES s2_objet (id_obj),
    Foreign Key (id_mbr) REFERENCES s2_membre (id_mbr),
     PRIMARY KEY(id_ump)
);

--donnee
--menbres
INSERT INTO s2_membre (nom, dtn, genre, email, ville, mdp, pdp) VALUES 
('Tojo', '2006-06-06','M','tojo@gmail.com', 'Tana','huhu123', '1.jpg'),
('Sahy', '2007-07-07','M','sahy@gmail.com', 'Mahajanga','lala321',' 2.jpg'),
('Mary', '2004-04-04','F','mary@gmail.com', 'Ambato','dede111', '3.jpg'),
('Celine', '2008-08-08','F','celine@gmail.com', 'Manakara','lolo777', '4.jpg');

--categories
INSERT INTO s2_categorie_obj (id_c, nom_c) VALUES
(1, 'esthetique'),
(2, 'bricolage'),
(3, 'mecanique'),
(4, 'cuisine');

INSERT INTO s2_objet (id_obj, nom_obj, id_mbr, id_c) VALUES

(1, 'Brosse à cheveux', 1, 1),
(2, 'Mascara', 1, 1),
(3, 'Gel coiffant', 2, 1),
(4, 'Rasoir électrique', 2, 1),
(5, 'Ombre à paupières', 3, 1),
(6, 'Sèche-cheveux', 3, 1),
(7, 'Peigne', 4, 1),
(8, 'Crème solaire', 4, 1),
(9, 'Vernis à ongles', 1, 1),
(10, 'Crème hydratante', 2, 1),

(11, 'Perceuse électrique', 1, 2),
(12, 'Marteau', 1, 2),
(13, 'Scie manuelle', 2, 2),
(14, 'Pince multiprise', 2, 2),
(15, 'Cloueuse', 3, 2),
(16, 'Pistolet à colle', 3, 2),
(17, 'Niveau à bulle', 4, 2),
(18, 'Clé Allen', 4, 2),
(19, 'Tournevis', 1, 2),
(20, 'Lime à ongles', 2, 2),

(21, 'Clé plate', 1, 3),
(22, 'Cric', 1, 3),
(23, 'Clé dynamométrique', 2, 3),
(24, 'Pompe à vélo', 2, 3),
(25, 'Boîte à outils', 3, 3),
(26, 'Bidon d huile moteur', 3, 3),
(27, 'Cric hydraulique', 4, 3),
(28, 'Batterie de voiture', 4, 3),
(29, 'Pince universelle', 3, 3),
(30, 'Tournevis cruciforme', 2, 3),

(31, 'Poêle antiadhésive', 1, 4),
(32, 'Mixeur', 1, 4),
(33, 'Couteau de chef', 2, 4),
(34, 'Râpe à fromage', 2, 4),
(35, 'Balance de cuisine', 3, 4),
(36, 'Four micro-ondes', 3, 4),
(37, 'Cuiseur à riz', 4, 4),
(38, 'Casserole', 4, 4),
(39, 'Spatule', 4, 4),
(40, 'Thermomètre de cuisine', 4, 4);

--emprunts
INSERT INTO s2_emprunt (id_obj, id_mbr, date_ump, date_ret) VALUES
(10, 1, '2023-10-01', '2024-10-15'),
(2, 2, '2023-10-02', '2024-10-16'),
(7, 3, '2023-10-03', '2024-10-17'),
(22, 4, '2023-10-04', '2024-10-18'),
(39, 1, '2023-10-05', '2024-10-19'),
(36, 2, '2023-10-06', '2024-10-20'),
(21, 3, '2023-10-07', '2024-10-21'),
(3, 4, '2023-10-08', '2024-10-22'),
(35, 1, '2023-10-09', '2024-10-23'),
(40, 2, '2023-10-10', '2024-10-24');

--test emprunt
INSERT into s2_emprunt (id_obj, id_mbr, date_ump, date_ret) VALUES
(6, 1, '2023-10-11', null),
(8, 2, '2023-10-12', null);

--img objet
INSERT into s2_img_obj (id_img, id_obj, nom_img) VALUES
(1, 1, '1.jpg'),
(2, 2, '2.jpg'),
(3, 3, '3.jpg'),
(4, 4, '4.jpg'),
(5, 5, '5.jpg'),
(6, 6, '6.jpg'),
(7, 7, '7.jpg'),
(8, 8, '8.jpg'),
(9, 9, '9.jpg'),
(10, 10, '10.jpg'),
(11, 11, '11.jpg'),
(12, 12, '12.jpg'),
(13, 13, '13.jpg'),
(14, 14, '14.jpg'),
(15, 15, '15.jpg'),
(16, 16, '16.jpg'),
(17, 17, '17.jpg'),
(18, 18, '18.jpg'),
(19, 19, '19.jpg'),
(20, 20, '20.jpg'),
(21, 21, '21.jpg'),
(22, 22, '22.jpg'),
(23, 23, '23.jpg'),
(24, 24, '24.jpg'),
(25, 25, '25.jpg'),
(26, 26, '26.jpg'),
(27, 27, '27.jpg'),
(28, 28, '28.jpg'),
(29, 29, '29.jpg'),
(30, 30, '30.jpg'),
(31, 31, '31.jpg'),
(32, 32, '32.jpg'),
(33, 33, '33.jpg'),
(34, 34, '34.jpg'),
(35, 35, '35.jpg'),
(36, 36, '36.jpg'),
(37, 37, '37.jpg'),
(38, 38, '38.jpg'),
(39, 39, '39.jpg'),
(40, 40, '40.jpg');
