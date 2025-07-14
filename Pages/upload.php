<?php 
$liste = getAllCateg();

?>
<div class="upload-container">
    <h2>Modifier profil</h2>
    <form action="Traitement/traitement_upload.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="media">Image d'objet</label>
        <input type="file" id="media" name="fichier" accept="image/*" required>
      </div>
      <div class="form-group">
        <label for="title">Nom de l'objet</label>
        <input type="text" id="title" name="objet" placeholder="Titre de votre post" required>
      </div>
<select name="categorie" id="">

     <?php foreach ($liste as $categ): ?>
<option value="<?= $categ['id_categorie'] ?>">
<?= $categ['nom_categorie'] ?>
</option>
<?php endforeach; ?>
</select>
     
      <button type="submit" class="btn-upload">Ajouter</button>
    </form>
    <div class="back-link">
      <a href="model.php?p=home.php">⬅ Retour </a>
    </div>
  </div>
