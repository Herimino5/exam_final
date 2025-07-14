<?php $liste = getAllCateg(); ?>

<div class="container py-5">
    <h2 class="text-center mb-4 text-primary">Modifier profil</h2>
    <form action="Traitement/traitement_upload.php" method="POST" enctype="multipart/form-data" class="p-4 rounded shadow-sm bg-white">
        <div class="mb-3">
            <label for="media" class="form-label">Image d'objet</label>
            <input type="file" id="media" name="fichier" accept="image/*" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Nom de l'objet</label>
            <input type="text" id="title" name="objet" placeholder="Titre de votre post" class="form-control" required>
        </div>

        <div class="mb-4">
            <label for="categorie" class="form-label">Catégorie</label>
            <select name="categorie" id="categorie" class="form-select" required>
                <?php foreach ($liste as $categ): ?>
                <option value="<?= $categ['id_categorie'] ?>">
                    <?= $categ['nom_categorie'] ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn fond-jaune">Ajouter</button>
        </div>
    </form>

    
</div>
