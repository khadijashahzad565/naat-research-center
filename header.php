<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Naat Research Center</title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpeg" type="image/x-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body>

<!-- Fixed Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo home_url(); ?>"><h4>Naat Research Center</h4></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <?php 
        wp_nav_menu(array(
          'theme_location'  => 'primary-menu',
          'container'       => false, 
          'menu_class'      => 'navbar-nav ms-auto', 
          'fallback_cb'     => 'wp_page_menu', 
          'depth'           => 2,
          'walker'          => new WP_Bootstrap_Navwalker(),
        )); 
      ?>
    </div>
  </div>
</nav>
