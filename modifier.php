<?php require 'header.php' ?>


<section id="modifierProfil">
    <div id="modfier">
        <h1>| MODIFIER LE PROFIL</h1>
        <form id="form_modifier">
            <div class="form_modifierClass">
                <input type="text" name="prenom" id="form_prenom" placeholder="Prénom">
                <input type="text" name="nom" id="form_nom" placeholder="Nom">
            </div>
            <div class="form_modifierClass">
                <input type="text" name="pseudo" id="form_pseudo" placeholder="Pseudo">
                <div id="avatars">
                    <h3>Avatars :</h3>
                    <input type="radio" name="photo" value="tharuk" id="tharuk"><img id="img-tharuk" src="img/avatars/tharuk.png" alt="tharuk" style="width: 100px">
                    <input type="radio" name="photo" value="sofia" id="sofia"><img id="img-sofia" src="img/avatars/sofia.png" alt="sofia" style="width: 100px">
                    <input type="radio" name="photo" value="astralia" id="astralia"><img id="img-astralia" src="img/avatars/astralia.png" alt="astralia" style="width: 100px">
                    <input type="radio" name="photo" value="rasdar" id="rasdar"><img id="img-rasdar" src="img/avatars/rasdar.png" alt="rasdar" style="width: 100px">
                    <input type="radio" name="photo" value="krulmo" id="krulmo"><img id="img-krulmo" src="img/avatars/krulmo.png" alt="krulmo" style="width: 100px">
                    <input type="radio" name="photo" value="arcadia" id="arcadia"><img id="img-arcadia" src="img/avatars/arcadia.png" alt="arcadia" style="width: 100px">
                    <input type="radio" name="photo" value="ganormo" id="ganormo"><img id="img-ganormo" src="img/avatars/ganormo.png" alt="ganormo" style="width: 100px">
                </div>
            </div>
            <div class="form_modifierClass">
                <input type="password" name="mdp" id="form_password" placeholder="Mot de passe">
                <input type="password" name="mdp_conf" id="form_conf_password" placeholder="Confirmation du mot de passe">
            </div>
            <div class="form_modifierClass">
                <input type="submit" value="MODIFIER LE PROFIL" id="btn_modif">
            </div>
        </form>
    </div>
</section>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>

<script type="text/javascript">

    $(document).ready(function(){

        $('input[type="radio"]').hide()
        //console.log('ho')
        $('#img-tharuk').click(function(){

            document.getElementById('tharuk').checked=true;
            $('#avatars img').css('transform', 'scale(1)')
            $('#img-tharuk').css('transform', 'scale(1.2)')
        })
        $('#img-sofia').click(function(){

            document.getElementById('sofia').checked=true;
            $('#avatars img').css('transform', 'scale(1)')
            $('#img-sofia').css('transform', 'scale(1.2)')
        })
        $('#img-ganormo').click(function(){

            document.getElementById('ganormo').checked=true;
            $('#avatars img').css('transform', 'scale(1)')
            $('#img-ganormo').css('transform', 'scale(1.2)')
        })

        $('#img-astralia').click(function(){

            document.getElementById('astralia').checked=true;
            $('#avatars img').css('transform', 'scale(1)')
            $('#img-astralia').css('transform', 'scale(1.2)')
        })

        $('#img-arcadia').click(function(){

            document.getElementById('arcadia').checked=true;
            $('#avatars img').css('transform', 'scale(1)')
            $('#img-arcadia').css('transform', 'scale(1.2)')
        })
        $('#img-krulmo').click(function(){

            document.getElementById('krulmo').checked=true;
            $('#avatars img').css('transform', 'scale(1)')
            $('#img-krulmo').css('transform', 'scale(1.2)')
        })
        $('#img-rasdar').click(function(){

            document.getElementById('rasdar').checked=true;
            $('#avatars img').css('transform', 'scale(1)')
            $('#img-rasdar').css('transform', 'scale(1.2)')
        })

    })

</script>
<?php require 'footer.php' ?>
