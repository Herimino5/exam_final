<?php
$id_categ = $_GET['id_categ'] ?? 1;
$liste = getAllCateg();
$objets = getObjectByCateg($id_categ);
?>
<form method="get" action="model.php">
<input type="hidden" name="p" value="filtre.php">
<select name="id_categ" id="">
<?php foreach ($liste as $categ): ?>
<option value="<?= $categ['id_categorie'] ?>" <?= $id_categ == $categ['id_categorie'] ? 'selected' : '' ?>>
<?= $categ['nom_categorie'] ?>
</option>
<?php endforeach; ?>
</select>
<input type="submit" value="Filtrer" class="btn btn-primary">
</form>
<div class="row g-4">
<?php foreach ($objets as $row) { ?>
<div class="col-lg-4 col-md-6">
<div class="card border-0 shadow-sm h-100">
<img src="../assets/image/<?= $row['nom_image'] ?>" class="card-img-top rounded-top" alt="Property Image">
<div class="card-body">
<h5 class="card-title text-primary fw-bold"><?= $row['nom_objet'] ?></h5>
<?php $emprunt = isEmprunted($row['id_objet']); ?>
<?php if ($emprunt && isset($emprunt['date_retour'])) { ?>
<p class="card-text text-danger">Emprunté jusqu'au <?= date('d/m/Y', strtotime($emprunt['date_retour'])) ?></p>
<?php } ?>
<p class="card-text text-muted"><?= $row['nom_categorie'] ?></p>
<p class="card-text"><small class="text-secondary">Owner: <?= $row['proprietaire'] ?></small></p>
</div>
</div>
</div>
<?php } ?>
</div>