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

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <link rel="stylesheet" href="<?= json_path('main.css') ?>">
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Menu</header>
  <ul>
<li><a href="#"><i class="fas fa-qrcode"></i>Tableau de bord</a></li>
<li><a href="#"><i class="fas fa-link"></i>Ventes</a></li>
<li><a href="#"><i class="fas fa-stream"></i>Achats</a></li>
<li><a href="#"><i class="fas fa-calendar-week"></i>Events</a></li>
<li><a href="#"><i class="far fa-question-circle"></i>About</a></li>
<li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
<li><a href="#"><i class="far fa-envelope"></i>Contact</a></li>
</ul>
</div>
<section></section>
  </body>
</html>
