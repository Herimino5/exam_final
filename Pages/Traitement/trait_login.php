<?php 
if (isset($_POST['email']) && isset($_POST['pwd'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
   $valiny=login($email,$pwd);
   if ($valiny==null) {
       header("Location: model.php?p=login.php&error=1");
       exit();
   } else {
    
   
       
       session_start();

       $_SESSION['username']=$valiny['nom'];
       $_SESSION['id']=$valiny[0]['id_membre'];
        header("Location: model.php?p=home.php");
    }

} else {
    echo "Tous les champs sont requis.";
}

?>