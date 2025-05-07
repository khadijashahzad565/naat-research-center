<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Naat Research Center</title>
 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
 .nav-link {
  position: relative;
  display: inline-block;
  padding-bottom: 0px;
  text-decoration: none;
  color: rgb(0, 0, 0);
  transition: color 0.3s ease;

}
.nav-link::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0%;
  height: 2px;
  background-color: rgba(0, 0, 0, 0.49);
  transition: width 0.3s ease;
}
.nav-link:hover::after {
  width: 100%;
}
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#"><h4>Naat Research Center</h4></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
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
      </ul>
    </div>
  </div>

  
</nav>

