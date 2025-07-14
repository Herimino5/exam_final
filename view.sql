-- View 1: v_object_details
CREATE VIEW v_object_details AS
SELECT 
    o.id_objet AS id_objet,
    o.nom_objet AS nom_objet,
    c.nom_categorie AS nom_categorie,
    m.nom AS proprietaire,
    i.nom_image AS nom_image
FROM 
    objet o
JOIN 
    categorie_objet c ON o.id_categorie = c.id_categorie
JOIN 
    membre m ON o.id_membre = m.id_membre
LEFT JOIN 
    images_objet i ON o.id_objet = i.id_objet;

-- View 2: v_object_emprunted
CREATE VIEW v_object_emprunted AS
SELECT 
    od.id_objet AS id_objet,
    od.nom_objet AS nom_objet,
    od.nom_categorie AS nom_categorie,
    od.proprietaire AS proprietaire,
    od.nom_image AS nom_image,
    e.date_emprunt AS date_emprunt,
    e.date_retour AS date_retour
FROM 
    v_object_details od
JOIN 
    emprunt e ON od.id_objet = e.id_objet;

-- View 3: v_emprunt_membre
CREATE VIEW v_emprunt_membre AS
SELECT 
    e.id_emprunt AS id_emprunt,
    e.id_objet AS id_objet,
    e.id_membre AS id_membre,
    m.nom AS emprunteur,
    e.date_emprunt AS date_emprunt,
    e.date_retour AS date_retour
FROM 
    emprunt e
JOIN 
    membre m ON e.id_membre = m.id_membre;

-- View 4: v_empt_generale
CREATE VIEW v_empt_generale AS
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
    v_object_emprunted oe
JOIN 
    v_emprunt_membre em ON oe.id_objet = em.id_objet;