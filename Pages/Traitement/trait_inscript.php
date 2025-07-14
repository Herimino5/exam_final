<?php 
  require('../../inc/functions.php');


   
        
if (!empty($_POST['email']) && !empty($_POST['pwd']) && !empty($_POST['nom']) && !empty($_POST['dtn'])
 && !empty($_POST['genre']) && !empty($_POST['ville'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $nom = $_POST['nom'];
    $dtn = $_POST['dtn'];
    $ville=$_POST['ville'];
    $genre=$_POST['genre'];
create_account($nom, $dtn, $genre, $email, $ville, $pwd);
        header("Location:../model.php?p=login.php");
        

 
} else {
    echo "Tous les champs sont requis.";
}

?>