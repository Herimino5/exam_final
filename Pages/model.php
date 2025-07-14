<?php
require("../inc/functions.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="../assets/Css/style.css" />
<title>Modele</title>
</head>
<body>

<div class="container-fluid">
    <div class="row min-vh-100 g-0">
       
        <aside class="col-lg-2 fond-dark d-flex flex-column align-items-center py-4 shadow-sm">
            <img src="../assets/images/logo.png" alt="Logo" class="img-fluid mb-3 rounded" style="width: 100px;">
            <h2 class="text-center fw-bold mb-4">Hustle Time</h2>
            <ul class="nav flex-column w-100 px-3">
                <li class="nav-item mb-2">
                    <a class="nav-link text-white px-3 py-2 <?= ($_GET['p'] ?? '') === 'home.php' ? 'bg-primary rounded' : '' ?>" href="model.php?p=home.php">
                        <i class="fas fa-home me-2"></i> Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-3 py-2 <?= ($_GET['p'] ?? '') === 'filtre.php' ? 'bg-primary rounded' : '' ?>" href="model.php?p=filtre.php">
                        <i class="fas fa-filter me-2"></i> Filtre
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-3 py-2 <?= ($_GET['p'] ?? '') === 'upload.php' ? 'bg-primary rounded' : '' ?>" href="model.php?p=upload.php">
                        <i class="fas fa-filter me-2"></i> Upload
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white px-3 py-2 <?= ($_GET['p'] ?? '') === 'membre.php' ? 'bg-primary rounded' : '' ?>" href="model.php?p=membre.php">
                        <i class="fas fa-filter me-2"></i> Membre
                    </a>
                    
                </li>
            </ul>
        </aside>

        <main class="col-lg-10 d-flex flex-column">
            <header class="d-flex justify-content-between align-items-center p-3 border-bottom bg-white shadow-sm">
                <h5 class="mb-0 text-muted">Tableau de bord</h5>
                <a href="deconnecte.php" class="btn btn-outline-danger btn-sm">
                    <i class="fas fa-sign-out-alt me-1"></i> Déconnexion
                </a>
            </header>

            <section class="flex-grow-1 p-4">
                <?php 
                    if (isset($_GET['p']) && file_exists($_GET['p'])) {
                        include($_GET['p']);
                    } else {
                        echo "<div class='alert alert-danger'>Page non trouvée.</div>";
                    }
                ?>
            </section>

            <footer class="text-center py-3 fond-dark mt-auto">
                &copy; <?= date("Y"); ?> Hustle Time. Tous droits réservés.
            </footer>
        </main>
    </div>
</div>

</body>
</html>
