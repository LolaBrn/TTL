<?php require 'header.php' ?>

<div id="inscription">
    <div id="form_inscription">
        <h1>| INSCRIPTION</h1>
        <form id="formulaire">
            <div>
                <input type="text" name="nom" id="form_nom" placeholder="Nom">
                <input type="text" name="prenom" id="form_prenom" placeholder="Prénom">
            </div>
            <div>
                <label for="birth">Date de naissance :</label>
                <input type="date" name="birth" id="form_birth">
            </div>
            <div>
                <input type="email" name="email" id="form_email" placeholder="Adresse e-mail">
                <input type="text" name="pseudo" id="form_pseudo" placeholder="Pseudo">
            </div>
            <div>
                <input type="password" name="password" id="form_password" placeholder="Mot de passe">
                <input type="password" name="conf_password" id="form_conf_password" placeholder="Confirmation du mot de passe">
            </div>
        </form>
        <button id="valid_form_inscriptions">INSCRIPTION</button>
    </div>
</div>

<?php require 'footer.php' ?>