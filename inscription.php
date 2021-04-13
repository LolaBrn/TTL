<?php require 'header.php' ?>

    <div id="inscription">
        <div id="form_inscription">
            <h1>| INSCRIPTION</h1>
            <form id="formulaire" method="POST" action="/TheToriasLeague/public/verify">
                <div class="formulaire_div">
                    <input type="text" name="prenom" id="form_prenom" placeholder="Prénom" required>
                    <input type="text" name="nom" id="form_nom" placeholder="Nom" required>
                </div>
                <div>
                    <label for="form_birth">Date de naissance :</label>
                    <input type="date" name="birthday" id="form_birth" required>
                </div>
                <div class="formulaire_div">
                    <input type="email" name="email" id="form_email" placeholder="Adresse e-mail" required>
                    <input type="text" name="pseudo" id="form_pseudo" placeholder="Pseudo" required>
                </div>
                <div class="formulaire_div">
                    <input type="password" name="mdp" id="form_password" placeholder="Mot de passe" required>
                    <input type="password" name="conf_password" id="form_conf_password" placeholder="Confirmation du mot de passe">

                </div>

                <span id="lien-avatars" style="cursor: pointer; font-weight: bold">AVATAR</span>
                <div id="avatars">
                    <input type="radio" name="photo" value="tharuk" id="tharuk"><img id="img-tharuk" src="img/avatars/tharuk.png" alt="tharuk" style="width: 100px">
                    <input type="radio" name="photo" value="sofia" id="sofia"><img id="img-sofia" src="img/avatars/sofia.png" alt="sofia" style="width: 100px">
                    <input type="radio" name="photo" value="astralia" id="astralia"><img id="img-astralia" src="img/avatars/astralia.png" alt="astralia" style="width: 100px">
                    <input type="radio" name="photo" value="rasdar" id="rasdar"><img id="img-rasdar" src="img/avatars/rasdar.png" alt="rasdar" style="width: 100px">
                    <input type="radio" name="photo" value="krulmo" id="krulmo"><img id="img-krulmo" src="img/avatars/krulmo.png" alt="krulmo" style="width: 100px">
                    <input type="radio" name="photo" value="arcadia" id="arcadia"><img id="img-arcadia" src="img/avatars/arcadia.png" alt="arcadia" style="width: 100px">
                    <input type="radio" name="photo" value="ganormo" id="ganormo"><img id="img-ganormo" src="img/avatars/ganormo.png" alt="ganormo" style="width: 100px">
                    <span id="fermer" style="cursor: pointer; font-weight: bold">Valider</span>
                </div>
                <div id="div-conditions">
                    <input type="checkbox" name="checkbox" id="checkbox" required><label for="checkbox">&nbsp;J'accepte les termes et les conditions générales d'utilisation de ce site.</label>
                </div>

                <input type="submit" id="valid_form_inscriptions" value="INSCRIPTION">
                <input type="hidden" id="recaptchaResponse" name="recaptcha-response">
            </form>
            <p id="error_inscription">Cet utilisateur est déjà inscrit !</p>
        </div>
    </div>

<?php require 'footer.php' ?>