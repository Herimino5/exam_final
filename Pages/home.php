<?php $liste = getAllObject(); ?>
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-4" style="color: var(--color-primary);">Liste des Objets</h1>
        <div class="mx-auto mt-3" style="width: 100px; height: 4px; background: linear-gradient(90deg, var(--color-primary), var(--color-secondary), var(--color-accent)); border-radius: 2px;"></div>
    </div>
    
    <div class="row g-4">
        <?php foreach ($liste as $row) { ?>
        <div class="col-lg-4 col-md-6">
            <div class=    "card border-0 shadow-sm h-100" style="border-radius: 12px; overflow: hidden; transition: all 0.3s ease;">
                <div class="position-relative">
                    <img src="../assets/image/<?= $row['nom_image'] ?>" class="card-img-top" alt="<?= $row['nom_objet'] ?>" style="height: 220px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(transparent 60%, rgba(10, 64, 12, 0.1));"></div>
                </div>
                
                <div class="card-body p-4">
                    <h5 class="card-title fw-bold mb-3" style="color: var(--color-primary);"><?= $row['nom_objet'] ?></h5>
                    
                    <?php $emprunt = isEmprunted($row['id_objet']); ?>
                    <?php if ($emprunt && isset($emprunt['date_retour'])) { ?>
                    <div class="alert alert-warning d-flex align-items-center p-2 mb-3" style="background-color: rgba(255, 193, 7, 0.1); border: 1px solid #ffc107; border-radius: 8px;">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <small>Emprunté jusqu'au <?= date('d/m/Y', strtotime(isEmprunted($row['id_objet'])['date_retour'])) ?></small>
                    </div>
                    <?php } ?>
                    
                    <div class="d-flex align-items-center mb-2">
                        <span class="badge me-2 px-3 py-2" style="background: linear-gradient(135deg, var(--color-accent), var(--color-secondary)); color: var(--color-primary); border-radius: 20px;">
                            <?= $row['nom_categorie'] ?>
                        </span>
                    </div>
                    
                    <div class="d-flex align-items-center">
                        <i class="fas fa-user me-2" style="color: var(--color-secondary);"></i>
                        <small style="color: var(--color-secondary);">Propriétaire: <strong><?= $row['proprietaire'] ?></strong></small>
                    </div>
                </div>
                
                <div class="card-footer border-0 p-4 pt-0" style="background: transparent;">
                    <div class="d-flex justify-content-between align-items-center">
                        <?php if (!$emprunt) { ?>
                        <button class="btn btn-sm px-4 py-2" style="background: linear-gradient(135deg, var(--color-primary), var(--color-secondary)); color: var(--color-light); border: none; border-radius: 8px; transition: all 0.3s ease;">
                            <i class="fas fa-hand-holding me-1"></i>
                            Emprunter
                        </button>
                        <?php } else { ?>
                        <button class="btn btn-sm px-4 py-2" style="background: var(--color-accent); color: var(--color-primary); border: none; border-radius: 8px;" disabled>
                            <i class="fas fa-clock me-1"></i>
                            Indisponible
                        </button>
                        <?php } ?>
                        
                        <a href="#" class="btn btn-outline-sm px-3 py-2" style="border: 2px solid var(--color-secondary); color: var(--color-secondary); border-radius: 8px; transition: all 0.3s ease;">
                            <i class="fas fa-eye"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    
    <?php if (empty($liste)) { ?>
    <div class="text-center py-5">
        <div class="mb-4">
            <i class="fas fa-box-open" style="font-size: 4rem; color: var(--color-accent);"></i>
        </div>
        <h3 style="color: var(--color-secondary);">Aucun objet disponible</h3>
        <p class="text-muted">Il n'y a actuellement aucun objet dans la liste.</p>
    </div>
    <?php } ?>
</div>

