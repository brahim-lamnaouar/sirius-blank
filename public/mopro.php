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
    <title>MOPRO</title>
</head>
<body>

<nav class="main-nav" role="navigation">
    <div class="nav-wrapper">
        <a href="#" data-target="nav-mobile" class="left sidenav-trigger"><i class="material-icons">menu</i></a>
        <a href="#"><img src="/img/itom.png" alt="MOPRO" class="left nav-logo"></a>
        <ul id="user" class="dropdown-content">
            <li><a href="#!">Username</a></li>
            <li class="divider"></li>
            <li><a href="#!" class="link-red">Logout</a></li>
        </ul>
        <ul class="left hide-on-med-and-down">
            <li><a href="/">Acceuil</a></li>
            <li><a href="/">Services</a></li>
            <li><a href="/">Tarifs</a></li>
            <li><a href="/">Contactez nous</a></li>
        </ul>
        <div class="right auth">
            <a class="button-border type2 button-secondary">Se connecter</a>
            <a class="button-border type2">S'inscrire</a>
        </div>
        <!--<ul class="right member">
            <li><a href="#!" class="dropdown-trigger" data-target="user"><img src="/img/male.png" alt="avatar"/></a></li>
        </ul>-->
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
            <h1 class="ml11 text-light text-white text-uppercase text-center">
              <span class="text-wrapper">
                <span class="line line1"></span>
                  <span class="letters">MOPRO CRM SOLUTION</span>
              </span>
            </h1>
            <h2 class="ml4 h3 text-center text-white">
                <span class="letters letters-1">Ready</span>
                <span class="letters letters-2">Set</span>
                <span class="letters letters-3">Go!</span>
            </h2>
        </div>
    </div>
    <div class="parallax"><img src="/img/home-banner.png" alt="Unsplashed background img 1"></div>
</div>


<div class="home-laptop-banner wow fadeInUp">
    <img src="/img/home-banner-laptop.png" alt="Unsplashed background img 1">
</div>

<section class="bg-grey">
    <div class="container">
        <div class="banner">
            <div class="row">
                <div class="col l8 m10 service wow fadeIn">
                    <h2 class="title big"><span class="text-bold">What We</span> Offer</h2>
                    <div class="content"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad atque deserunt est eum exercitationem harum impedit ipsum libero maxime necessitatibus nostrum odio perferendis porro, possimus quidem rem sed totam ullam.</p></div>
                </div>
                <div class="col l4 m6 s12 service wow fadeInRight">
                    <div class="icon"><img src="/img/24h.svg" alt="24h Support"/></div>
                    <h4 class="h5 text-bold title">24h Support</h4>
                    <div class="content"><p>Hello I'm the text description in brief, olor sit amet, consectetur adipisicing elit.</p></div>
                </div>
                <div class="col l4 m6 s12 service fadeInLeft wow">
                    <div class="icon"><img src="/img/sell.svg" alt="Real Time Sync"/></div>
                    <h4 class="title text-bold h5">Sell and Buy </h4>
                    <div class="content"><p>Hello I'm the text description in brief, olor sit amet, consectetur adipisicing elit.</p></div>
                </div>
                <div class="col l4 m6 s12 service wow fadeIn">
                    <div class="icon"><img src="/img/stats.svg" alt="Real Time Sync"/></div>
                    <h4 class="title text-bold h5">Insightfull Statistics</h4>
                    <div class="content"><p>Hello I'm the text description in brief, olor sit amet, consectetur adipisicing elit.</p></div>
                </div>
                <div class="col l4 m6 s12 service wow fadeInRight">
                    <div class="icon"><img src="/img/team.svg" alt="Real Time Sync"/></div>
                    <h4 class="title text-bold h5">Sell and Buy </h4>
                    <div class="content"><p>Hello I'm the text description in brief, olor sit amet, consectetur adipisicing elit.</p></div>
                </div>
            </div>
        </div>



    </div>
</section>

<section class="price-table wow fadeInUp">
    <table class="striped pricing-table table-large">
        <thead>
        <tr>
            <th>Fonctionnalite</th>
            <th>Free</th>
            <th>Premium</th>
            <th>Premium Plus</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Alvin</td>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
        </tr>
        <tr>
            <td>MultiLanguage</td>
            <td><img class="check" src="/img/check.svg" alt="Check"/></td>
            <td><img class="check" src="/img/check.svg" alt="Uncheck"/></td>
            <td><img class="check" src="/img/uncheck.svg" alt="Check"/></td>
        </tr>
        <tr>
            <td>Jonathan</td>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
        </tr>
        </tbody>
        <thead class="price-tag">
        <tr>
            <th></th>
            <th>0 DH / MOIS</th>
            <th>199 DH / MOIS</th>
            <th>359 DH / MOIS</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td>
                <a href="http://marcel-pirnay.be/" class="button-moving-line">
                    <svg width="180" height="62">
                        <defs>
                            <linearGradient id="grad1">
                                <stop offset="0%" stop-color="#FF8282"/>
                                <stop offset="100%" stop-color="#E178ED" />
                            </linearGradient>
                        </defs>
                        <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="170" height="50"></rect>
                    </svg>
                    <!--<span>Voir mes réalisations</span>-->
                    <span>C'est parti</span>
                </a>
            </td>
            <td>
                <a href="http://marcel-pirnay.be/" class="button-moving-line button-light">
                    <svg width="180" height="62">
                        <defs>
                            <linearGradient id="grad2">
                                <stop offset="0%" stop-color="#FFF"/>
                                <stop offset="100%" stop-color="#EEE" />
                            </linearGradient>
                        </defs>
                        <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad2)" width="170" height="50"></rect>
                    </svg>
                    <!--<span>Voir mes réalisations</span>-->
                    <span>C'est parti</span>
                </a>
            </td>
            <td>
                <a href="http://marcel-pirnay.be/" class="button-moving-line">
                    <svg width="180" height="62">
                        <defs>
                            <linearGradient id="grad1">
                                <stop offset="0%" stop-color="#FF8282"/>
                                <stop offset="100%" stop-color="#E178ED" />
                            </linearGradient>
                        </defs>
                        <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="170" height="50"></rect>
                    </svg>
                    <!--<span>Voir mes réalisations</span>-->
                    <span>C'est parti</span>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="col m6 s12">
            <table class="striped pricing-table table-small">
                <thead>
                <tr>
                    <th colspan="2" class="text-center h5 text-regular">Free</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Eclair</td>
                    <td>$0.87</td>
                </tr>
                <tr>
                    <td>MultiLanguage</td>
                    <td><img class="check" src="/img/uncheck.svg" alt="Check"/></td>
                </tr>
                <tr>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                </tr>
                </tbody>
                <thead>
                <tr>
                    <th colspan="2" class="text-center">99DH / MOIS</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="2" class="text-center">
                        <a href="http://marcel-pirnay.be/" class="button-moving-line">
                            <svg width="180" height="62">
                                <defs>
                                    <linearGradient id="grad3">
                                        <stop offset="0%" stop-color="#FF8282"/>
                                        <stop offset="100%" stop-color="#E178ED" />
                                    </linearGradient>
                                </defs>
                                <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad3)" width="170" height="50"></rect>
                            </svg>
                            <!--<span>Voir mes réalisations</span>-->
                            <span>C'est parti</span>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col m6 s12">
            <table class="striped pricing-table pricing-premium table-small">
                <thead>
                <tr>
                    <th colspan="2" class="text-center h5 text-regular">Premium</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Eclair</td>
                    <td>$0.87</td>
                </tr>
                <tr>
                    <td>MultiLanguage</td>
                    <td><img class="check" src="/img/check.svg" alt="Uncheck"/></td>
                </tr>
                <tr>
                    <td>Jonathan</td>
                    <td>$7.00</td>
                </tr>
                </tbody>
                <thead class="price-tag">
                <tr>
                    <th colspan="2" class="text-center">199 DH / MOIS</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="2" class="text-center">
                        <a href="http://marcel-pirnay.be/" class="button-moving-line button-light">
                            <svg width="180" height="62">
                                <defs>
                                    <linearGradient id="grad5">
                                        <stop offset="0%" stop-color="#FFF"/>
                                        <stop offset="100%" stop-color="#EEE" />
                                    </linearGradient>
                                </defs>
                                <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad5)" width="170" height="50"></rect>
                            </svg>
                            <!--<span>Voir mes réalisations</span>-->
                            <span>C'est parti</span>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col m6 s12">
            <table class="striped pricing-table table-small">
                <thead>
                <tr>
                    <th colspan="2" class="text-center h5 text-regular">Premium Plus</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>$0.87</td>
                </tr>
                <tr>
                    <td>MultiLanguage</td>
                    <td><img class="check" src="/img/check.svg" alt="Check"/></td>
                </tr>
                <tr>
                    <td>Jonathan</td>
                    <td>$7.00</td>
                </tr>
                </tbody>
                <thead class="price-tag">
                <tr>
                    <th colspan="2" class="text-center">359 DH / MOIS</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="2" class="text-center">
                        <a href="http://marcel-pirnay.be/" class="button-moving-line">
                            <svg width="180" height="62">
                                <defs>
                                    <linearGradient id="grad4">
                                        <stop offset="0%" stop-color="#FF8282"/>
                                        <stop offset="100%" stop-color="#E178ED" />
                                    </linearGradient>
                                </defs>
                                <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad4)" width="170" height="50"></rect>
                            </svg>
                            <!--<span>Voir mes réalisations</span>-->
                            <span>C'est parti</span>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- FOOTER -->
<section class="footer" id="footer">

    <div class="footer-widgets">
        <div class="row">

            <!-- FOOTER WIDGET LOGO -->
            <div class="col l3 m6 s12 ">
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
            <div class="col l3 m6 s12">
                <div class="footer-widget">
                    <h4 class="h5">Mentions légales</h4>
                    <ul class="posts">
                        <li><a href="b1.php">Conditions Générales d'Utilisation</a></li>
                        <li><a href="crm.php">Politique de Confidentialité</a></li>
                        <li><a href="BI.php">Politique de Cookies</a></li>
                    </ul>
                </div>
            </div>
            <!-- END FOOTER WIDGET -->

            <!-- FOOTER WIDGET  SERVICES -->
            <div class="col l3 m6 push-m6 s12">
                <div class="footer-widget">
                    <h4 class="h5">AIDE</h4>
                    <ul class="posts">
                        <li><a href="#FAQ">FAQ</a></li>
                        <li><a href="#contactez-nous">Contactez-nous</a></li>
                    </ul>
                </div>
            </div>
            <!-- END FOOTER WIDGET C -->
            <!--  FOOTER WIDGET CONTACTER NOUS -->

            <div class="col l3 m6 pull-m6 s12">
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
