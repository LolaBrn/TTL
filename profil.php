<?php require 'header.php' ?>

<section id="profil">
    <h1>MON PROFIL</h1>
    <div id="profil_infos">
        <div id="profil_stats">
            <h2>STATISTIQUES</h2>
            <div id="nbParties">
                <span>Nombre de parties jouées :</span>
                <span>...</span>
            </div>
            <h2>TABLEAU DES SCORES</h2>
            <div id="nbVictoires">
                <div id="victoires">
                    <span>Victoires :</span>
                    <span>...</span>
                </div>
                <div id="typeVictoire">
                    <div id="victoirePoints">
                        <span>Par points :</span>
                        <span>...</span>
                    </div>
                    <div id="victoireMerce">
                        <span>Par mercenaires :</span>
                        <span>...</span>
                    </div>
                </div>
            </div>
            <div id="nbDefaites">
                <span>Défaites :</span>
                <span>...</span>
            </div>
            <div id="nbAdv">
                <span>Nombre d'adversaires affrontés :</span>
                <span>...</span>
            </div>
        </div>
        <div id="profilGrandediv">
            <div id="profil_infosPerso">
                <div id="profil_infosJoueur">
                    <div id="infos_joueur">
                        <div id="nomPrenom">
                            <span>Nom</span>
                            <span>Prénom</span>
                        </div>
                        <p>Pseudo</p>
                        <div id="profilLangue">
                            <span>Langue :</span>
                            <span>Français</span>
                        </div>
                    </div>
                    <div id="profilAvatar">
                        <img src="img/avatars/arcadia.png" alt="arcadia avatar">
                    </div>
                </div>

                <div id="profilInscription">
                    <span>Date d'inscription :</span>
                    <span>JJ/MM/AAAA</span>
                </div>
                <div id="profilLast_co">
                    <span>Dernière connexion :</span>
                    <span>HH:MM | JJ/MM/AAAA</span>
                </div>
                <div id="profilClassement">
                    <span>Classement :</span>
                    <span>...</span>
                </div>
            </div>
            <button id="btnModifierProfil"><a href="modifer.php">MODIFIER</a></button>
        </div>

    </div>

    <div id="classement">
        <div id="tableau_titre">
            <span id="titre_joueur">Joueur</span>
            <span id="titre_classement">Classement</span>
            <span id="titre_resultat">Résultats</span>
            <span id="titre_victoire">Type de victoire</span>
            <span id="titre_date">Date</span>
        </div>
        <div id="tableau_contenu">
            <div class="tableau_ligne">
                <span>Pseudo</span>
                <span>xx</span>
                <span>Vitoire</span>
                <span>Points</span>
                <span>JJ/MM/AAAA</span>
            </div>
            <div class="tableau_ligne">
                <span>Pseudo</span>
                <span>xx</span>
                <span>Vitoire</span>
                <span>Points</span>
                <span>JJ/MM/AAAA</span>
            </div>
            <div class="tableau_ligne">
                <span>Pseudo</span>
                <span>xx</span>
                <span>Vitoire</span>
                <span>Points</span>
                <span>JJ/MM/AAAA</span>
            </div>
            <div class="tableau_ligne">
                <span>Pseudo</span>
                <span>xx</span>
                <span>Vitoire</span>
                <span>Points</span>
                <span>JJ/MM/AAAA</span>
            </div>
        </div>
    </div>
</section>

<?php require 'footer.php' ?>
