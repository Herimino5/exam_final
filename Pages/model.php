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
   
     <div class="row ">
      <div class="col-lg-2 fond-dark">
      <div class="text-center mb-4">
        <img src="assets/images/logo.png" alt="Logo" class="img-fluid mb-2" style="width: 100px;">
        <h2 class="fw-bold">Hustle Time</h2>
      </div>
   <ul class="nav flex-column">
  <li class="nav-item">
  <a class="nav-link active text-white" aria-current="page" href="model.php?p=home.php">Accueil</a>
  </li>
  <li class="nav-item">
  <a class="nav-link text-white" href="model.php?p=filtre.php">Filtre</a>
  </li>
 
 
</ul>
      </div>
      <div class="col-lg-10">
      <main class="container">
        <?php include($_GET['p'])?>
        </main>
      </div>
     </div>

     <footer class="bg-dark text-white text-center py-3 mt-4">
       <p class="mb-0">&copy; <?php echo date("Y"); ?> Hustle Time. All rights reserved.</p>
     </footer>
</body>
</html>