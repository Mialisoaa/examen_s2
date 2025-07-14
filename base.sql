CREATE Table s2_membre(
    id_mbr INT PRIMARY KEY,
    nom VARCHAR (20),
    dtn DATE,
    genre VARCHAR(15),
    email VARCHAR(50),
    ville VARCHAR(50),
    mdp VARCHAR(20),
    pdp VARCHAR(20)
);

CREATE TABLE s2_categorie_obj(
    id_c INT PRIMARY KEY,
    nom_c VARCHAR(20)
);

CREATE Table s2_objet(
    id_obj INT PRIMARY KEY,
    nom_obj VARCHAR(20),
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
    id_ump INT PRIMARY KEY,
    id_obj INT,
    id_mbr INT,
    date_ump DATE,
    date_ret DATE,
    Foreign Key (id_obj) REFERENCES s2_objet (id_obj),
    Foreign Key (id_mbr) REFERENCES s2_membre (id_mbr)
);