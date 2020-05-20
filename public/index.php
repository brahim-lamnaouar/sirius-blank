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
        <a href="#"><img src="/img/logo.png" alt="MOPRO" class="left nav-logo"></a>
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
        <ul class="right">
            <li><a href="#!" class="dropdown-trigger" data-target="user">Login</a></li>
            <li><a href="/">Register</a></li>
            <li><a href="#!" class="dropdown-trigger" data-target="user">Administator</a></li>
        </ul>
    </div>
</nav>
<ul id="nav-mobile" class="sidenav">
    <img src="/img/logo.png" alt="MOPRO" class="nav-logo">
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
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur?</div>
<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aspernatur consectetur dolorum facilis, officiis quae sequi unde! Assumenda distinctio expedita facere fugit ipsa iusto mollitia nihil placeat sed tenetur? </div>
</body>
<script src="<?= json_path('main.js') ?>"></script>
</html>
