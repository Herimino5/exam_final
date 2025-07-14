<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="Traitement/trait_login.php" method="post">
                        <h1 class="text-center mb-4">Login</h1>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Mot de passe</label>
                            <input type="password" name="pwd" id="pwd" class="form-control" required>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn fond-jaune">Connecter</button>
                        </div>
                        
                        <p class="text-center mt-3">Pas encore inscrit? <a href="model.php?p=inscript.php">Inscrivez-vous</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
