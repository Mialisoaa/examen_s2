CREATE OR REPLACE VIEW v_s2_emprunts AS
SELECT s2_objet.id_obj, s2_objet.nom_obj, s2_membre.id_mbr, s2_membre.nom, s2_emprunt.date_ump, s2_emprunt.date_ret
FROM s2_emprunt
JOIN s2_objet ON s2_emprunt.id_obj = s2_objet.id_obj
JOIN s2_membre ON s2_emprunt.id_mbr = s2_membre.id_mbr;

CREATE OR REPLACE v_s2_list_obj AS
SELECT

CREATE VIEW v_list_obt AS
SELECT 
    o.id_obj,
    o.nom_obj,
    img.nom_img AS image_objet,
    e.date_ump AS date_emprunt,
    e.date_ret AS date_retour
FROM 
    s2_objet o
LEFT JOIN s2_img_obj img ON o.id_obj = img.id_obj
LEFT JOIN s2_emprunt e ON o.id_obj = e.id_obj;
