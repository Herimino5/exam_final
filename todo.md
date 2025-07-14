#Projet Final :
#version 1 :
to do :
* Creation repository exam_finale sur github[ok] [Herimino]
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
  Initialisation :[ok] [Hasimanjaka]
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
            -inscript:traitement/trait_inscript.php(appel createAccount())[ok] [Herimino]
            -

            -login:traitement/trait_login.php[ok]
          
      -Liste des objets (avec date de retour si emprunt en cours)[en cours]
        -Creation = -view1  v_object_details:objet + image + categ
                    -view2 v_objetct_emprunted: view1 + emprunt
                    -view3 v_emprunt_membre: mebre join emprunt
                    -view4 v_empt_generale: view2 + view3
         -Appel fonction getAllObject()[ok] [Hasimanjaka]
      -Filtre par categorie[ok]

#version 2:
 -Design ,amelioration [ok] [Herimino]
 -upload [ok] Hasimanjaka + Design

#Alea 1 [en cours] [Herimino]
 

   1-creation du boutton emprunter [ok]
 

   2-creation du page emprunter.php :
   
   <?php $emprunt = isEmprunted($row['id_objet']); ?>
<?php if ($emprunt && isset($emprunt['date_retour'])): ?>
    <div class="alert alert-warning p-2 mb-3">
        Indisponible jusqu'au <strong><?= date('d/m/Y', strtotime($emprunt['date_retour'])) ?></strong>
    </div>
<?php else: ?>
    <div class="alert alert-success p-2 mb-3">Disponible</div>
<?php endif; ?>



