#Projet Final :
#version 1 :
to do :
* Creation repository exam_finale sur github[ok]
  gitclone[ok]
-Creation base :[ok]
  -Membre 
  -Categorie objet
  -objet
  -image_objet
  -emprunt
-insertion donnee[ok]
  -4 membre 
  -4 categ
  -10 object per membre
  -10 emprunt
 * Creation page :
  Initialisation :[ok]
    -Inc :[ok]
      -connection.php
      -fonctio.php
    -assets[ok]
      -css (bootstrap)
      -image
        -download 40 object
      -photo de profil
        -download 4 photo de profil
    - creation index :
      ->header: page/model.php
    -Pages
      -model.php[ok]
      -login et inscription
            -inscript:traitement/trait_inscript.php(appel createAccount())[ok]
            -

            -login:traitement/trait_login.php[ok]
          
      -Liste des objets (avec date de retour si emprunt en cours)[en cours]
        -Creation = -view1  v_object_details:objet + image + categ
                    -view2 v_objetct_emprunted: view1 + emprunt
                    -view3 v_emprunt_membre: mebre join emprunt
                    -view4 v_empt_generale: view2 + view3
         -Appel fonction getAllObject()[ok]
      -Filtre par categorie
