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

<nav class="blue darken-1 text-white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
            <div class="row center">
                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
            </div>
            <div class="row center">
                <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
            </div>
            <br><br>

        </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
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
