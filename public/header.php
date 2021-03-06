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
            <li><a href="#">Username</a></li>
            <li class="divider"></li>
            <li><a href="#" class="link-red">Logout</a></li>
        </ul>
        <ul class="left hide-on-med-and-down">
            <li><a href="/mopro.php">Acceuil</a></li>
            <li class="dropdown-container">
                <a href="#!">Logiciels</a>
                <ul class="dropdown">
                    <li><a href="#hello">Fonctionalités</a></li>
                    <li><a href="#hello">Sécurité et confidentialité</a></li>
                    <li><a href="#hello">Demande de démo</a></li>
                    <li><a href="#hello">Documentation</a></li>
                </ul>
            </li>
            <li><a href="/">Services</a></li>
            <li><a href="/">Tarifs</a></li>
            <li class="dropdown-container">
                <a href="#!">Plus</a>
                <ul class="dropdown">
                    <li><a href="#hello">A propos de nous</a></li>
                    <li><a href="#hello">Contactez-nous</a></li>
                </ul>
            </li>
        </ul>
        <div class="right auth">
            <ul>
                <li class="dropdown-container">
                    <a href="#!">Admin</a>
                    <ul class="dropdown drop-right">
                        <li><a href="/page/gestion-de-projet">Audit et gestion de projet</a></li>
                        <li><a href="/page/migration-et-reprise-de-donnees">Migration et reprise de données</a></li>
                        <li><a href="/page/formation-des-equipes">Formation des équipes</a></li>
                        <li><a href="/page/experts-comptables">Pour Experts-Comtables</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--<ul class="right member">
            <li><a href="#!" class="dropdown-trigger" data-target="user"><img src="/img/male.png" alt="avatar"/></a></li>
        </ul>-->
    </div>
</nav>

<ul id="nav-mobile" class="sidenav">
    <img src="/img/itom.png" alt="MOPRO" class="nav-logo">
    <li><a href="/mopro.php">Acceuil</a></li>
    <li class="dropdown-container">
        <a href="#!">Logiciels</a>
        <ul class="dropdown">
            <li><a href="#hello">Fonctionalités</a></li>
            <li><a href="#hello">Sécurité et confidentialité</a></li>
            <li><a href="#hello">Demande de démo</a></li>
            <li><a href="#hello">Documentation</a></li>
        </ul>
    </li>
    <li><a href="/">Services</a></li>
    <li><a href="/">Tarifs</a></li>
    <li class="dropdown-container">
        <a href="#!">Plus</a>
        <ul class="dropdown">
            <li><a href="#hello">A propos de nous</a></li>
            <li><a href="#hello">Contactez-nous</a></li>
        </ul>
    </li>
</ul>
