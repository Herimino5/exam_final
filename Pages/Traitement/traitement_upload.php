<?php
include("../../inc/functions.php");
session_start();
if(isset($_POST['objet']) && isset($_POST['categorie']) ){
    $titre=$_POST['objet'];
    $desc=$_POST['categorie'];
}
$uploadDir = '../../assets/image/';
$maxSize = 20 * 1024 * 1024; // 20 Mo
$allowedMimeTypes = ['image/jpeg', 'image/png','image/jpg'];
// Vérifie si un fichier est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fichier'])) {
$file = $_FILES['fichier'];
if ($file['error'] !== UPLOAD_ERR_OK) {
die('Erreur lors de l’upload : ' . $file['error']);
}
// Vérifie la taille
if ($file['size'] > $maxSize) {
die('Le fichier est trop volumineux.');
}
// Vérifie le type MIME avec `finfo`
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $file['tmp_name']);
finfo_close($finfo);
if (!in_array($mime, $allowedMimeTypes)) {
die('Type de fichier non autorisé : ' . $mime);
}
// renommer le fichier
$originalName = pathinfo($file['name'], PATHINFO_FILENAME);
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
$newName = $originalName . '_' . uniqid() . '.' . $extension;
echo "Nom du fichier : " . $newName . "<br>";
// Déplace le fichier
if (move_uploaded_file($file['tmp_name'], $uploadDir . $newName)) {
echo "Fichier uploadé avec succès : ". $newName;
insertObject($titre,$newName, $desc,$_SESSION['id'] );
$_SESSION['pseudo']=$desc;
} else {
echo "Échec du déplacement du fichier.";
}
} else {
echo "Aucun fichier reçu.";
}
?>




















