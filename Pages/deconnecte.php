<?php  
session_start();
session_destroy(); 
header("Location: model.php?p=inscript.php");
exit();
?>