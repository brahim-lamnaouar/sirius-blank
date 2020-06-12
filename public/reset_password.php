<?php require_once './header.php'; ?>
<div class="auth-container">
    <div class="container">
        <div class="row m-vertical-align">
            <div class="col l4 s12 m-text-center"><img src="/img/password.svg" alt="Resset Password"></div>
            <div class="col l8 s12">
                <h2 class="text-center text-light h4 mt-0 m-mt-1 col push-l1 l10 s12 ">Reinitialiser votre <span class="text-bold">Mot De Passe</span></h2>
                <form action="#" method="post" class="center-align col push-l1 l10 s12">
                    <div class="input-field">
                        <input id="email" type="text" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="col s12 text-center">
                        <a class="btn bg-primary">Reinitialiser</a>
                    </div>
                </form>
                <div class="mt-2 col s12">
                    <a href="signin.php" class="left">Se connecter</a>
                    <a href="signup.php" class="right">Creer un compte</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once './footer.php'; ?>

</body>
<script src="<?= json_path('main.js') ?>"></script>
</html>

