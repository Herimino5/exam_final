<div class="bg-light min-vh-100 d-flex align-items-center justify-content-center">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <form action="Traitement/trait_inscript.php" method="post">
                            <h2 class="text-center mb-4 fw-semibold text-dark">Créer un compte</h2>

                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" name="nom" id="nom" class="form-control rounded-pill" placeholder="Votre nom" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control rounded-pill" placeholder="exemple@gmail.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="pwd" class="form-label">Mot de passe</label>
                                <input type="password" name="pwd" id="pwd" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-3">
                                <label for="ville" class="form-label">Ville</label>
                                <input type="text" name="ville" id="ville" class="form-control rounded-pill" placeholder="Votre ville" required>
                            </div>

                            <div class="mb-3">
                                <label for="dtn" class="form-label">Date de naissance</label>
                                <input type="date" name="dtn" id="dtn" class="form-control rounded-pill" required>
                            </div>

                            <div class="mb-4">
                                <label for="genre" class="form-label">Genre</label>
                                <select name="genre" id="genre" class="form-select rounded-pill" required>
                                    <option value="" disabled selected>Choisir...</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn fond-jaune rounded-pill">S'inscrire</button>
                            </div>

                            <p class="text-center mt-4 text-muted">Déjà inscrit ? <a href="model.php?p=login.php">Connectez-vous</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
