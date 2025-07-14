-- View 1: final_v_object_details
CREATE OR REPLACE VIEW final_v_object_details AS
SELECT 
    o.id_objet AS id_objet,
    o.nom_objet AS nom_objet,
    o.id_categorie AS id_categorie,
    c.nom_categorie AS nom_categorie,
    m.nom AS proprietaire,
    i.nom_image AS nom_image
FROM 
    final_objet o
JOIN 
    final_categorie_objet c ON o.id_categorie = c.id_categorie
JOIN 
    final_membre m ON o.id_membre = m.id_membre
LEFT JOIN 
    final_images_objet i ON o.id_objet = i.id_objet;

-- View 2: final_v_object_emprunted
CREATE OR REPLACE VIEW final_v_object_emprunted AS
SELECT 
    od.id_objet AS id_objet,
    od.nom_objet AS nom_objet,
    od.nom_categorie AS nom_categorie,
    od.proprietaire AS proprietaire,
    od.nom_image AS nom_image,
    e.date_emprunt AS date_emprunt,
    e.date_retour AS date_retour
FROM 
    final_v_object_details od
JOIN 
    final_emprunt e ON od.id_objet = e.id_objet;

-- View 3: final_v_emprunt_membre
CREATE OR REPLACE VIEW final_v_emprunt_membre AS
SELECT 
    e.id_emprunt AS id_emprunt,
    e.id_objet AS id_objet,
    e.id_membre AS id_membre,
    m.nom AS emprunteur,
    e.date_emprunt AS date_emprunt,
    e.date_retour AS date_retour
FROM 
    final_emprunt e
JOIN 
    final_membre m ON e.id_membre = m.id_membre;

-- View 4: final_v_empt_generale
CREATE OR REPLACE VIEW final_v_empt_generale AS
SELECT 
    oe.id_objet AS id_objet,
    oe.nom_objet AS nom_objet,
    oe.nom_categorie AS nom_categorie,
    oe.proprietaire AS proprietaire,
    oe.nom_image AS nom_image,
    oe.date_emprunt AS date_emprunt,
    oe.date_retour AS date_retour,
    em.emprunteur AS emprunteur
FROM 
    final_v_object_emprunted oe
JOIN 
    final_v_emprunt_membre em ON oe.id_objet = em.id_objet AND oe.date_emprunt = em.date_emprunt;