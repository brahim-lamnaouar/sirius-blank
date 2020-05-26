<?php
function json_path($file)
{
    $json = json_decode(file_get_contents(
        'assets/manifest.json'
    ));
    if (!empty($json->$file)) {
        return $json->$file;
    }
    return '';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= json_path('main.css') ?>">
    <title>Login Page</title>
</head>
<body>

<nav class="main-nav" role="navigation">
    <div class="nav-wrapper">
        <a href="#" data-target="nav-mobile" class="left sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="#"><img src="/img/itom.png" alt="MOPRO" class="left nav-logo"></a>
        <ul id="user" class="dropdown-content">
            <li><a href="#!">Administrator</a></li>
            <li class="divider"></li>
            <li><a href="#!" class="link-red">Logout</a></li>
        </ul>
        <ul class="left hide-on-med-and-down">
            <li><a href="/">Home</a></li>
            <li><a href="/">About</a></li>
            <li><a href="/">Services</a></li>
            <li><a href="/">Contact us</a></li>
        </ul>
        <div class="right auth">
            <a href="#!" class="btn btn-login waves-effect waves-light">Login</a>
            <a href="/" class="btn btn-register waves-effect waves-light">Register</a>
        </div>
        <ul class="right member">
            <li><a href="#!" class="dropdown-trigger" data-target="user">Administator</a></li>
        </ul>
    </div>
</nav>
<ul id="nav-mobile" class="sidenav">
    <img src="/img/itom.png" alt="MOPRO" class="nav-logo">
    <li><a href="/">Home</a></li>
    <li><a href="/">About</a></li>
    <li><a href="/">Services</a></li>
    <li><a href="/">Contact us</a></li>
</ul>

<div id="index-banner " class="parallax-container with-nav">
    <div class="section no-pad-bot">
        <div class="container">
            <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
            <div class="row center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
            </div>
        </div>
    </div>
    <div class="parallax bg-darken"><img src="/img/background2.jpg" alt="Unsplashed background img 1"></div>
</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur? </div>
<!-- FOOTER -->
<section class="footer">

    <div class="footer-widgets">
        <div class="row">

            <!-- FOOTER WIDGET LOGO -->
            <div class="col l3 s12 ">
                <div class="footer-widget">
                    <img src="/img/itom.png" alt="ITOM" class="footer-logo">
                    <ul class="social-links">
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Facebook"><i class="fa fa-envelope"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/itomm/" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- END FOOTER WIDGET -->


            <!-- FOOTER WIDGET  SOLUTION -->
            <div class="col l3 s12">
                <div class="footer-widget">
                    <h4 class="h5 text-regular">Mentions légales</h4>
                    <ul class="posts">
                        <li><a href="b1.php">Conditions Générales d'Utilisation</a></li>
                        <li><a href="crm.php">Politique de Confidentialité</a></li>
                        <li><a href="BI.php">Politique de Cookies</a></li>
                    </ul>
                </div>
            </div>
            <!-- END FOOTER WIDGET -->

            <!-- FOOTER WIDGET  SERVICES -->
            <div class="col l3 s12">
                <div class="footer-widget">
                    <h4 class="h5 text-regular">AIDE</h4>
                    <ul class="posts">
                        <li><a href="#FAQ">FAQ</a></li>
                        <li><a href="#contactez-nous">Contactez-nous</a></li>
                    </ul>
                </div>
            </div>
            <!-- END FOOTER WIDGET C -->
            <!--  FOOTER WIDGET CONTACTER NOUS -->

            <div class="col l3 s12">
                <div class="footer-widget">
                    <a href="#" class="btn-store">
                        <img src="/img/apple-store-button.svg" alt="GET IN ON GOOGLE PLAY">
                    </a>
                    <a href="#" class="btn-store">
                        <img src="/img/google-play-button.svg" alt="GET IN ON GOOGLE PLAY">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END OF FOOTER -->

<div class="copyright">
    <div class="row">
        <div class="col l12 s12">
            <p class="text-center">Tous droits réservés © 2020 ITOM</p>
        </div>
    </div>
</div>

<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
</body>
<script src="<?= json_path('main.js') ?>"></script>
</html>
