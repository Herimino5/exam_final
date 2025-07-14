<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <form action="Traitement/trait_login.php" method="post">
                        <h2 class="text-center mb-4 fw-semibold text-dark">Connexion</h2>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control rounded-pill" placeholder="exemple@gmail.com" required>
                        </div>

                        <div class="mb-4">
                            <label for="pwd" class="form-label">Mot de passe</label>
                            <input type="password" name="pwd" id="pwd" class="form-control rounded-pill" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn fond-jaune rounded-pill">Se connecter</button>
                        </div>

                        <p class="text-center mt-4 text-muted">Pas encore inscrit ? <a href="model.php?p=inscript.php">Créer un compte</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
