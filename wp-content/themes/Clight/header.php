<!DOCTYPE html>
<html>
<head>
  <meta name="charset" content="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Crypto Light</title>
  <?php wp_head(); ?>
</head>
<body >
<header>
  <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
  <a href="#" class="navbar-brand">
    <div class="custom-logo">
      <?php
      $custom_logo_id = get_theme_mod( 'custom_logo');
      $logo = wp_get_attachment_image_src ($custom_logo_id , 'full')[0];
      echo "<img src='$logo'>";
       ?>
    </div>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <?php wp_nav_menu(array(
    'theme_location' => 'top-right-menu',
    'menu_class' => 'navbar-nav ml-auto ',
    'container' => 'div',
    'container_id' => 'collapsibleNavbar',
    'container_class' => 'collapse navbar-collapse'
  )); ?>

</nav>
</header>
