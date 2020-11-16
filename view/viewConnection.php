
    <div class="container">
        <!-- Formulaire de connexion au site -->
        <form class="form-signin" method="POST" action="">
            <h2 class="style-contact-title text-center">Connexion</h2>
            <div class="col-lg-4 offset-lg-4 mb-3">
                <label for="login" class="sr-only">Pseudo</label>
                <input type="text" name="login" id="login" class="form-control" placeholder="texte">
            </div>
            <div class="col-lg-4 offset-lg-4 mb-3">
                <label for="password" class="sr-only">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
            </div>
            <div class="col-lg-4 offset-lg-4">
                <button class="btn btn-primary btn-block" type="submit" name="submit">Connexion</button>
            </div>
        </form>
        <p class="text-center text-danger font-weight-bold style-register-error"><?php if(isset($error)) { echo $error; } ?></p>
        <p class="text-center">Pas encore inscrit ? <a href="register">Inscrivez-vous ici !</a></p>
 
    </div>

