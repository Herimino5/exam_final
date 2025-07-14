<?php
$id_objet = $_GET['id'] ?? null;
if ($id_objet) {
    $objet = getObjectById($id_objet);
    if ($objet):
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <img src="../assets/image/<?= $objet['nom_image'] ?>" class="card-img-top" alt="<?= $objet['nom_objet'] ?>" style="height: 300px; object-fit: cover;">
                <div class="card-body">
                    <h3 class="text-primary fw-bold mb-3"><?= $objet['nom_objet'] ?></h3>
                    <p>Catégorie : <?= $objet['nom_categorie'] ?></p>
                    <p>Propriétaire : <?= $objet['proprietaire'] ?></p>

                    <?php $emprunt = isEmprunted($objet['id_objet']); ?>
                    <?php if ($emprunt): ?>
                        <div class="alert alert-warning">Indisponible jusqu'au <?= date('d/m/Y', strtotime($emprunt['date_retour'])) ?></div>
                    <?php else: ?>
                        <div class="alert alert-success">Disponible</div>
                    <?php endif; ?>

                    <a href="model.php?p=emprunter.php&id=<?= $objet['id_objet'] ?>" class="btn fond-jaune mt-3">Emprunter</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    else:
        echo "<div class='alert alert-danger'>Objet introuvable.</div>";
    endif;
} else {
    echo "<div class='alert alert-warning'>ID manquant.</div>";
}
?>
