<?php require 'header.php' ?>

<section id="parties">
    <div id="parties_en_cours">
        <h1>VOS PARTIES EN COURS</h1>
        <div id="div_enCours">
            <div class="enCours">
                <div>
                    <p class="enCours_pseudo">Pseudo</p>
                    <p class="enCours_classement">Classement</p>
                </div>
                <p><a class="enCours_reprendre" href="#">Reprendre</a></p>
            </div>
            <span class="enCours_span"></span>
            <div class="enCours">
                <div>
                    <p class="enCours_pseudo">Pseudo</p>
                    <p class="enCours_classement">Classement</p>
                </div>
                <p><a class="enCours_reprendre" href="#">Reprendre</a></p>
            </div>
            <span class="enCours_span"></span>
            <div class="enCours">
                <div>
                    <p class="enCours_pseudo">Pseudo</p>
                    <p class="enCours_classement">Classement</p>
                </div>
                <p><a class="enCours_reprendre" href="#">Reprendre</a></p>
            </div>
            <span class="enCours_span"></span>
            <div class="enCours">
                <div>
                    <p class="enCours_pseudo">Pseudo</p>
                    <p class="enCours_classement">Classement</p>
                </div>
                <p><a class="enCours_reprendre" href="#">Reprendre</a></p>
            </div>
            <span class="enCours_span"></span>
            <div class="enCours">
                <div>
                    <p class="enCours_pseudo">Pseudo</p>
                    <p class="enCours_classement">Classement</p>
                </div>
                <p><a class="enCours_reprendre" href="#">Reprendre</a></p>
            </div>
            <span class="enCours_span"></span>
            <div class="enCours">
                <div>
                    <p class="enCours_pseudo">Pseudo</p>
                    <p class="enCours_classement">Classement</p>
                </div>
                <p><a class="enCours_reprendre" href="#">Reprendre</a></p>
            </div>
            <span class="enCours_span"></span>
            <div class="enCours">
                <div>
                    <p class="enCours_pseudo">Pseudo</p>
                    <p class="enCours_classement">Classement</p>
                </div>
                <p><a class="enCours_reprendre" href="#">Reprendre</a></p>
            </div>
            <span class="enCours_span"></span>
            <div class="enCours">
                <div>
                    <p class="enCours_pseudo">Pseudo</p>
                    <p class="enCours_classement">Classement</p>
                </div>
                <p><a class="enCours_reprendre" href="#">Reprendre</a></p>
            </div>
            <span class="enCours_span"></span>
            <div class="enCours">
                <div>
                    <p class="enCours_pseudo">Pseudo</p>
                    <p class="enCours_classement">Classement</p>
                </div>
                <p><a class="enCours_reprendre" href="#">Reprendre</a></p>
            </div>
        </div>
    </div>
    <div id="parties_en_attente">
        <h1>VOS PARTIES EN ATTENTE</h1>
        <div id="div_enAttente">
            <div class="enAttente">
                <div>
                    <p class="enAttente_pseudo">Pseudo</p>
                    <p class="enAttente_classement">Classement</p>
                </div>
                <p><a class="enAttente_rejoindre" href="#">Rejoindre</a></p>
            </div>
            <span class="enAttente_span"></span>
            <div class="enAttente">
                <div>
                    <p class="enAttente_pseudo">Pseudo</p>
                    <p class="enAttente_classement">Classement</p>
                </div>
                <p><a class="enAttente_rejoindre" href="#">Rejoindre</a></p>
            </div>
            <span class="enAttente_span"></span>
            <div class="enAttente">
                <div>
                    <p class="enAttente_pseudo">Pseudo</p>
                    <p class="enAttente_classement">Classement</p>
                </div>
                <p><a class="enAttente_rejoindre" href="#">Rejoindre</a></p>
            </div>
            <span class="enAttente_span"></span>
            <div class="enAttente">
                <div>
                    <p class="enAttente_pseudo">Pseudo</p>
                    <p class="enAttente_classement">Classement</p>
                </div>
                <p><a class="enAttente_rejoindre" href="#">Rejoindre</a></p>
            </div>
        </div>
    </div>
    <div id="nouvelle_partie">
        <h1>NOUVELLES PARTIES</h1> <!-- titre de la partie création et invitation de parties -->
        <div id="new"> <!-- div contenant la partie gauche et droite -->
            <div id="new1"> <!-- div gauche -->
                <button id="btn_aleatoire"><a href="#">ALEATOIRE</a></button>
                <div id="new_liste">
                    <h3>Liste d'invitations</h3>
                    <div class="invit">
                        <div class="invit_infos">
                            <span class="span_invitPseudo">Pseudo</span>
                            <span class="span_invitElo">elo</span>
                        </div>
                        <a href="#" class="invit_rejoindre">Rejoindre</a>
                    </div>
                    <div class="invit">
                        <div class="invit_infos">
                            <span class="span_invitPseudo">Pseudo</span>
                            <span class="span_invitElo">elo</span>
                        </div>
                        <a href="#" class="invit_rejoindre">Rejoindre</a>
                    </div>
                    <div class="invit">
                        <div class="invit_infos">
                            <span class="span_invitPseudo">Pseudo</span>
                            <span class="span_invitElo">elo</span>
                        </div>
                        <a href="#" class="invit_rejoindre">Rejoindre</a>
                    </div>
                </div>
            </div>
            <div id="new2"> <!-- div droite -->
                <h2>Défier un ami</h2>
                <select type="text" id="invit_pseudoAmi" name="invit_ami" placeholder="Pseudo_ami">
                    <option>Pseudo_ami1</option>
                    <option>Pseudo_ami2</option>
                    <option>Pseudo_ami3</option>
                    <option>Pseudo_ami4</option>
                </select>
                <button id="btn_defier"><a href="#">DEFIER</a></button>
                <input type="search" id="invit_search" name="invit_search" placeholder="Rechercher un joueur">
                <button id="btn_rechercher"><a href="#">RECHERCHER</a></button>
            </div>
        </div>
    </div>
    <button id="btn_profil"><a href="profil.php">PROFIL ET STATISTIQUES</a></button>
    <h2 id="ami_invit_titre">Ils m'ont ajouté en ami</h2>
    <div id="liste_demandeAmi">
        <div class="demandeAmi">
            <p>Pseudo</p>
            <p>Email</p>
            <p>Elo</p>
            <a href="#">Accepter l'invitation ?</a>
        </div>
        <div class="demandeAmi">
            <p>Pseudo</p>
            <p>Email</p>
            <p>Elo</p>
            <a href="#">Accepter l'invitation ?</a>
        </div>
        <div class="demandeAmi">
            <p>Pseudo</p>
            <p>Email</p>
            <p>Elo</p>
            <a href="#">Accepter l'invitation ?</a>
        </div>
        <div class="demandeAmi">
            <p>Pseudo</p>
            <p>Email</p>
            <p>Elo</p>
            <a href="#">Accepter l'invitation ?</a>
        </div>
    </div>
</section>

<?php require 'footer.php' ?>