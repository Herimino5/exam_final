<?php
$id = $_GET['id'] ?? null;
if (!$id) {
    echo "<div class='alert alert-danger'>Aucun objet sélectionné.</div>";
    exit;
}
?>

<div class="container py-5">
    <h2 class="text-primary text-center mb-4">Emprunter l’objet</h2>
    <form action="Traitement/traitement_emprunt.php" method="POST" class="bg-white p-4 rounded shadow">
        <input type="hidden" name="id_objet" value="<?= $id ?>">

        <div class="mb-3">
            <label for="date_retour" class="form-label">Date de retour prévue</label>
            <input type="date" name="date_retour" id="date_retour" class="form-control" required>
        </div>

        <button type="submit" class="btn fond-jaune rounded-pill">Confirmer</button>
    </form>
</div>
