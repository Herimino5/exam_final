<?php
require("../inc/functions.php");
$id_objet = $_POST['id_objet'] ?? null;
$date_retour = $_POST['date_retour'] ?? null;

if ($id_objet && $date_retour) {
    $sql = "INSERT INTO final_emprunt (id_objet, date_retour) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id_objet, $date_retour]);
    header("Location: ../model.php?p=home.php");
    exit;
} else {
    echo "<div class='alert alert-danger'>Formulaire incomplet.</div>";
}
