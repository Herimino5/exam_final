<?php $liste = getAllObject(); ?>

<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold display-4 text-dark">Liste des Objets</h1>
    </div>

    <div class="row g-4">
        <?php foreach ($liste as $row) { ?>
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <img src="../assets/image/<?= $row['nom_image'] ?>" class="card-img-top rounded-top" alt="Property Image">
                <div class="card-body">
                    <h5 class="card-title text-primary fw-bold"><?= $row['nom_objet'] ?></h5>
                    <p class="card-text text-muted"><?= $row['nom_categorie'] ?></p>
                    <p class="card-text"><small class="text-secondary">Owner: <?= $row['proprietaire'] ?></small></p>
                </div>
                <div class="card-footer bg-white border-0 text-end">
                    <a href="#" class="btn btn-outline-primary btn-sm">View Details</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


