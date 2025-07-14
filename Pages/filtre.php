<?php
$id_categ = $_GET['id_categ'] ?? 1;
$liste = getAllCateg();
$objets = getObjectByCateg($id_categ);
?>

<div class="container-fluid bg-light min-vh-100 py-5">
    <div class="container">
        <form method="get" action="model.php" class="row gy-2 gx-3 align-items-center mb-5">
            <input type="hidden" name="p" value="filtre.php">
            <div class="col-md-8">
                <select name="id_categ" class="form-select rounded-pill shadow-sm">
                    <?php foreach ($liste as $categ): ?>
                    <option value="<?= $categ['id_categorie'] ?>" <?= $id_categ == $categ['id_categorie'] ? 'selected' : '' ?>>
                        <?= $categ['nom_categorie'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-4 text-end">
                <button type="submit" class="btn btn-warning rounded-pill px-5 fw-bold">Filtrer</button>
            </div>
        </form>

        <div class="row g-4">
            <?php foreach ($objets as $row): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow rounded">
                    <img src="../assets/image/<?= $row['nom_image'] ?>" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title text-dark fw-bold"><?= $row['nom_objet'] ?></h5>
                        <?php $emprunt = isEmprunted($row['id_objet']); ?>
                        <?php if ($emprunt && isset($emprunt['date_retour'])): ?>
                            <p class="card-text text-danger">Emprunté jusqu'au <?= date('d/m/Y', strtotime($emprunt['date_retour'])) ?></p>
                        <?php endif; ?>
                        <p class="card-text text-muted"><?= $row['nom_categorie'] ?></p>
                        <p class="card-text"><small class="text-secondary">Propriétaire : <?= $row['proprietaire'] ?></small></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
