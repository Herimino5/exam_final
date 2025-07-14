<?php 
session_start();
 $id=$_SESSION['id'];
 $nom=$_SESSION['username'];
 $emprunts=getAllEmprunt($id);
 
 ?>


<div class="container py-5">
    <h2 class="text-center text-primary mb-5">Fiche emprunteur</h2>

    <div class="mb-4 text-center">
        <h4 class="fw-bold"><?= $nom ?></h4>
        <p class="text-muted">Identifiant : <?= $id ?></p>
    </div>

    <h5 class="mb-4 text-secondary">Objets empruntés :</h5>
    <div class="row g-4">
        <?php foreach ($emprunts as $row): ?>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <img src="../assets/image/<?= $row['nom_image'] ?>" class="card-img-top" alt="<?= $row['nom_objet'] ?>" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title fw-bold"><?= $row['nom_objet'] ?></h5>
                    <p class="mb-1">Catégorie : <?= $row['nom_categorie'] ?></p>
                    <p class="mb-1">Propriétaire : <?= $row['proprietaire'] ?></p>
                    <p class="mb-0 text-muted">Du <?= date('d/m/Y', strtotime($row['date_emprunt'])) ?> au <?= date('d/m/Y', strtotime($row['date_retour'])) ?></p>
               
                </div>

            </div>
        </div>
        <?php endforeach; ?>

        <?php if (empty($emprunts)): ?>
        <div class="col-12 text-center py-4">
            <i class="fas fa-box-open" style="font-size: 3rem; color: var(--color-accent);"></i>
            <p class="mt-3">Aucun emprunt enregistré pour ce membre.</p>
        </div>
        <?php endif; ?>
    </div>
</div>

 