<?php require_once './header.php'; ?>
<div class="auth-container">
    <div class="container">
        <div class="row m-vertical-align">
            <div class="col l4 s12 m-text-center"><img src="/img/authentication.svg" alt="Secure Authentification"></div>
            <div class="col l8 s12">
                <h2 class="text-center text-light h4 mt-0 m-mt-1 col push-l1 l10 s12 ">Se connecter a <span class="text-bold">Mopro</span></h2>
                <!--<form action="#" method="post" class="col push-l1 l10 s12">
                    <div class="input-field">
                        <input id="email" type="text" class="invalid">
                        <label for="email">Email</label>
                        <span class="error-message">This can't be</span>
                    </div>
                    <div class="input-field">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                    <div class="checkbox-input">
                        <label>
                            <input id="condition" name="condition"  class="custom-control-input"  type="checkbox" value="false" onchange="if(this.checked) this.value='true'; else this.value='false';"/>
                            <span>J'accepte les  <a href="#policyterms">Conditions d'utilisation</a> *</span>
                            <span class="error-message">This can't be</span>
                        </label>
                    </div>
                    <div class="text-center">
                        <a class="btn bg-primary">Se connecter</a>
                    </div>
                </form>-->
                <div class="col push-l1 l10 s12 alert alert-danger">
                    Compte belle et bien creer
                </div>
                <div class="mt-2 col l10 push-l1 s12">
                    <a href="reset_password.php" class="left">Mot de passe oublie?</a>
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

