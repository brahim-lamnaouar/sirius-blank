<?php require_once './header.php'; ?>
<div class="container">
    <div class="verify-container">
        <form action="#" method="post" class="col text-center push-l1 l10 s12">
            <div class="row">
                <div class="col l4 s12"></div>
                <div class="col l8 s12"></div>
            </div>
            <div class="row">
                <div class="col l4 m10 push-m1 s12"><img class="m-d-block d-none" src="/img/personal_data.png" alt=""></div>
                <div class="col l8 s12">
                    <h2 class="text-center h5">Verification du compte <span class="text-bold">Mopro</span></h2>
                    <h6 class="text-regular">Info Personnel: </h6>
                </div>
            </div>
            <div class="row m-vertical-align">
                <div class="col l4 s12 d-block m-d-none"><img src="/img/personal_data.png" alt="Secure Authentification"></div>
                <div class="col l8 s12">
                    <div class="input-field">
                        <input id="nom" type="text" class="validate">
                        <label for="nom">Nom</label>
                    </div>
                    <div class="input-field">
                        <input id="prenom" type="text" class="validate">
                        <label for="prenom">Prénom</label>
                    </div>
                    <div class="input-field">
                        <input id="" type="text" class="validate">
                        <label for="prenom">Numéro de téléphone</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col l4 m10 push-m1 s12"><img class="m-d-block d-none" src="/img/building.svg" alt=""></div>
                <div class="col l8 m12 s12"><h6 class="text-regular">Informations sur la société </h6></div>
            </div>

            <div class="row m-vertical-align">
                <div class="col l4 s12 d-block m-d-none"><img src="/img/building.svg" alt="Secure Authentification"></div>
                <div class="col l8 s12">
                    <div class="input-field">
                        <input id="nom" type="text" class="validate">
                        <label for="nom">Nom de la société</label>
                    </div>
                    <div class="input-field">
                        <input id="prenom" type="text" class="validate">
                        <label for="prenom">Adresse email</label>
                    </div>
                    <div class="input-field">
                        <input id="" type="text" class="validate">
                        <label for="prenom">RC</label>
                    </div>
                    <div class="input-field">
                        <input id="" type="text" class="validate">
                        <label for="prenom">ICE</label>
                    </div>
                    <div class="input-field">
                        <input id="" type="text" class="validate">
                        <label for="prenom">IF</label>
                    </div>
                    <div class="input-field">
                        <input id="" type="text" class="validate">
                        <label for="prenom">CNSS</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col l4 m10 push-m1 s12"><img class="m-d-block d-none" src="/img/credit_card.png" alt=""></div>
                <div class="col l8 s12"><h6 class="text-regular">Informations sur la société </h6></div>
            </div>

            <div class="row m-vertical-align">
                <div class="col l4 s12 d-block m-d-none"><img src="/img/credit_card.png" alt="Secure Authentification"></div>
                <div class="col l8 s12">
                    <div class="input-field">
                        <input id="nom" type="text" class="validate">
                        <label for="nom">Nom de la société</label>
                    </div>
                    <div class="input-field">
                        <input id="prenom" type="text" class="validate">
                        <label for="prenom">Adresse email</label>
                    </div>
                    <div class="input-field">
                        <input id="" type="text" class="validate">
                        <label for="prenom">RC</label>
                    </div>
                    <div class="input-field">
                        <input id="" type="text" class="validate">
                        <label for="prenom">ICE</label>
                    </div>
                    <div class="input-field">
                        <input id="" type="text" class="validate">
                        <label for="prenom">IF</label>
                    </div>
                    <div class="input-field">
                        <input id="" type="text" class="validate">
                        <label for="prenom">CNSS</label>
                    </div>

                    <div class="col s12 text-center">
                        <button type="submit" class="btn bg-primary text-bold">C'est parti!</button>
                    </div>
                    <div class="mt-2 col s12">
                        <a href="mopro.php" class="left">Acceuil</a>
                        <a href="signin.php" class="right">Se connecter</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require_once './footer.php'; ?>

</body>
<script src="<?= json_path('main.js') ?>"></script>
</html>

