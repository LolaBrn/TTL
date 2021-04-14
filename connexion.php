<?php require 'header.php' ?>

    <section id="home">
        <div id="home_fond"><img src="img/illu_accueil_jeu2.png"></div>
        <div id="connexion">
            <form method="post" id="form_connexion">
                <div id="form_co1">
                    <input type="email" value="" name="email" id="inputEmail" class="form-control col-4" placeholder="Email" required autofocus>
                    <input type="password" name="password" id="inputPassword" class="form-control col-4" placeholder="Mot de passe" required>
                    <input type="hidden" name="_csrf_token" value="eHVhX_JCf7zUCHME61OQhz-9moNdDRrNq_bU6o3_gWA">
                    <div>
                        <input type="checkbox" id="checkbox" name="_remember_me"><label for=""checkbox>Rester connecté</label>
                    </div>
                </div>
                <div id="form_co2">
                    <a href="#">Mot de passe oublié ?</a>
                    <a href="#">Pas encore inscrit ? Faites-le ici !</a>
                    <button id="btn_connexion"><a href="#">CONNEXION</a></button>
                </div>
            </form>
        </div>
    </section>

<?php require 'footer.php' ?>