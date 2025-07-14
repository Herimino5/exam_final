
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="Traitement/trait_inscript.php" method="post">
                        <h1 class="text-center mb-4">Inscription</h1>
                        
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="example@gmail.com" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Mot de passe</label>
                            <input type="password" name="pwd" id="pwd" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="ville" class="form-label">Ville</label>
                            <input type="text" name="ville" id="ville" class="form-control" placeholder="Votre ville" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="dtn" class="form-label">Date de naissance</label>
                            <input type="date" name="dtn" id="dtn" class="form-control" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <select name="genre" id="genre" class="form-select" required>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </div>
                        
                        
                        <div class="d-grid">
                            <button type="submit" class="btn fond-jaune">S'inscrire</button>
                        </div>
                        
                        <p class="text-center mt-3">Déjà inscrit? <a href="model.php?p=login.php">Connectez-vous</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


