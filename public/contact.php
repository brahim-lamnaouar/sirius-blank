<?php require_once './header.php'; ?>
<div class="auth-container">
    <div class="container">
        <div class="row m-vertical-align">
            <div class="col l4 s12 m-text-center"><img src="/img/authentication.svg" alt="Secure Authentification"></div>
            <div class="col l8 s12">
                <h2 class="text-center text-light h4 mt-0 m-mt-1 col push-l1 l10 s12 ">Se connecter a <span class="text-bold">Mopro</span></h2>
                <form action="#" method="post" class="center-align col push-l1 l10 s12">
                    <div class="input-field">
                        <input id="email" name="email" type="text" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <textarea id="message" class="materialize-textarea"></textarea>
                        <label for="message">Textarea</label>
                    </div>
                    <div class="col s12 text-center">
                        <button type="submit" class="btn bg-primary text-bold">S'inscrire</button>
                    </div>
                </form>
                <div class="mt-2 col l10 push-l1 s12">
                    <a href="mopro.php" class="left">Acceuil</a>
                    <a href="signin.php" class="right">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once './footer.php'; ?>

</body>
<script src="<?= json_path('main.js') ?>"></script>
</html>

