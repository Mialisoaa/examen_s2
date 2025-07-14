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
    id_img INT PRIMARY KEY,
    id_obj INT,
    nom_img VARCHAR(20),
    Foreign Key (id_obj) REFERENCES s2_objet (id_obj)
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
-- Catégorie 1 : Esthétique (10 objets)
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

-- Catégorie 2 : Bricolage (10 objets)
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

-- Catégorie 3 : Mécanique (10 objets)
(21, 'Clé plate', 1, 3),
(22, 'Cric', 1, 3),
(23, 'Clé dynamométrique', 2, 3),
(24, 'Pompe à vélo', 2, 3),
(25, 'Boîte à outils', 3, 3),
(26, 'Bidon d’huile moteur', 3, 3),
(27, 'Cric hydraulique', 4, 3),
(28, 'Batterie de voiture', 4, 3),
(29, 'Pince universelle', 3, 3),
(30, 'Tournevis cruciforme', 2, 3),

-- Catégorie 4 : Cuisine (10 objets)
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
