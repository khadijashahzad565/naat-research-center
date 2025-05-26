<!-- <div class="container my-5">
  <div id="authorCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <div class="row text-center">
          <?php
          $authors = new WP_Query([
            'post_type' => 'author-carousel',
            'posts_per_page' => 4
          ]);

          if ($authors->have_posts()) {
            while ($authors->have_posts()) {
              $authors->the_post();
              $img = get_field('author-image');
              $name = get_field('author-name');
              $country = get_field('author-country');
              ?>
              <div class="col-md-3 mb-4">
                <?php if ($img) { ?>
                  <img src="<?php echo $img; ?>" class="img-fluid" style="max-width: 200px;" alt="<?php echo $name; ?>">
                <?php } ?>
                <h5 class="mt-3"><?php echo $name; ?></h5>
                <p><?php echo $country; ?></p>
                <button class="btn btn-dark">More Detail</button>
              </div>
            <?php }
            wp_reset_postdata();
          }
          ?>
        </div>
      </div>

    </div>
  </div>
</div>



       <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#authorCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#authorCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> 



<!-- Content Section -->


  <div class="container">
    <div class="text-center mb-2" style="margin: 130px 0;">
  <h1>MORE INFORMATION</h1>
  <h1 class="urdu-text text-center" style="margin-bottom: 80px;"> <b>مزید معلومات </b></h1>
</div>
    <div class="row" style="margin-bottom: 80px;">
      <div class="col-md-6 fw-dark">
  <p>The Naat Research Center is an academic and research institute dedicated to the development, analysis, and preservation of Naat literature. This center aims to safeguard classical and contemporary Naat literature and provide resources to promote the finest traditions of this poetic form.</p>
  <p>The center is actively involved in studying thematic aspects of Naat, establishing critical frameworks, translating Naat literature into various languages, and publishing well-documented research papers and books. It also works to revive and highlight the artistic and spiritual dimensions of Naat poetry.</p>
  <p>Our mission is to spread the love of the Holy Prophet ﷺ through academic and literary means. By connecting tradition with modern research methodologies, we strive to promote peace and spiritual growth through the universal message of Naat.</p>
  <p>We welcome scholars, poets, and students from all backgrounds to join us in this noble pursuit. Through collective efforts, we aim to enrich the field of Na'at literature and deepen its impact on hearts and minds.We strive to honor the sacred tradition of praising the Prophet Muhammad ﷺ.</p>

</div>
      <div class="col-md-6 urdu-text ">
<p>نعت ریسرچ سینٹر ایک ایسا علمی و تحقیقی ادارہ ہے جو نعتیہ ادب کے فروغ، تحقیق، تدوین اور تشریح کے لیے وقف ہے۔ اس مرکز کا مقصد نعت کی قدیم و جدید روایتوں کو محفوظ کرنا، نئے لکھنے والوں کی رہنمائی کرنا اور نعتیہ ادب کو معیاری خطوط پر استوار کرنا ہے۔ ہم اس بات پر یقین رکھتے ہیں کہ نعت نہ صرف ادب کا اعلیٰ ترین اظہار ہے بلکہ روحانی تربیت کا ذریعہ بھی ہے۔</p>      
<p>اس ادارے میں نعتیہ مجموعوں کا مطالعہ، نعت نگاری کے اصولوں پر تحقیق، اور مختلف زبانوں میں نعتیہ ادب کا تجزیہ کیا جاتا ہے۔ ہمارے محققین نعت کے فنی، ادبی اور روحانی پہلوؤں پر گہرائی سے کام کرتے ہیں تاکہ آئندہ نسلوں کو ایک مضبوط علمی بنیاد فراہم کی جا سکے۔

</p>
<p>نعت ریسرچ سینٹر میں باقاعدہ کورسز، ورکشاپس، اور سیمینارز کا انعقاد کیا جاتا ہے جن کا مقصد نعت لکھنے اور پڑھنے کے سلیقے کو فروغ دینا ہے۔ ہم اس بات کے خواہاں ہیں کہ نعت کو نہ صرف ادب کی سطح پر بلکہ دینی اور روحانی تربیت کے ایک مؤثر وسیلے کے طور پر متعارف کروایا جائے۔

</p>
<p>ہمارا مشن ہے کہ نعت کے ذریعے عشقِ رسول ﷺ کو دلوں تک پہنچایا جائے، اور اس مقدس فن کو تحقیق و تدوین کے جدید تقاضوں سے ہم آہنگ کیا جائے۔

</p>
<p>نعت ریسرچ سینٹر ایک ایسا علمی و تحقیقی ادارہ ہے جو نعتیہ ادب کے فروغ، تحقیق، تدوین اور تشریح کے لیے وقف ہے۔ اس مرکز کا مقصد نعت کی قدیم و جدید روایتوں کو محفوظ کرنا، نئے لکھنے والوں کی رہنمائی کرنا اور نعتیہ ادب کو معیاری خطوط پر استوار کرنا ہے۔ ہم اس بات پر یقین رکھتے ہیں کہ نعت نہ صرف ادب کا اعلیٰ ترین اظہار ہے بلکہ روحانی تربیت کا ذریعہ بھی ہے۔

</p>
 
      </div>
    </div>
  </div>



<style>
  .authors-section {
    position: relative;
    background: url('<?php echo get_template_directory_uri(); ?>/images/img10.avif') center center/cover no-repeat;
    padding: 50px 0;
    color: white;
    text-align: center;
  }
  .authors-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.79);
    z-index: 1;
  }
  .authors-section h1, .authors-section p {
    position: relative;
    z-index: 2;
  }
  .authors-section h1 {
    font-size: 3rem;
    font-weight: bold;
  }
  .authors-section p {
    font-size: 1.25rem;
    max-width: 700px;
    margin: 0 auto;
  }
   .urdu-text {
      direction: rtl;
      text-align: right;
      font-family: 'Noto Nastaliq Urdu', 'Arial', serif;
    }
</style>
<!-- CTA -->

<?php get_template_part('cta-section'); ?>
<?php get_footer(); ?>



<!-- books.php -->

<!-- Slide 2 (Add more books here if needed) -->
      <div class="carousel-item">
        <div class="row">
          <div class="col-md-3">
            <div class="card book-card">
              <img src="https://m.media-amazon.com/images/I/71uAI28kJuL.jpg" class="card-img-top" alt="Book 7">
              <div class="card-body">
                <h6 class="card-title text-center">Power of Now</h6>
                <p class="card-text">Author: Eckhart Tolle<br>Language: English</p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
        <div class="row mb-4">
         <div class="col-md-3">
            <div class="card book-card">
              <img src="https://m.media-amazon.com/images/I/71tbalAHYCL.jpg" class="card-img-top" alt="Book 2">
              <div class="card-body">
                <h6 class="card-title">Ikigai</h6>
                <p class="card-text">Author: Héctor García<br>Language: Japanese</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card book-card">
              <img src="https://m.media-amazon.com/images/I/71tbalAHYCL.jpg" class="card-img-top" alt="Book 2">
              <div class="card-body">
                <h6 class="card-title">Ikigai</h6>
                <p class="card-text">Author: Héctor García<br>Language: Japanese</p>
              </div>
            </div>
          </div>
         
        
          <div class="col-md-3">
            <div class="card book-card">
              <img src="https://m.media-amazon.com/images/I/71tbalAHYCL.jpg" class="card-img-top" alt="Book 2">
              <div class="card-body">
                <h6 class="card-title">Ikigai</h6>
                <p class="card-text">Author: Héctor García<br>Language: Japanese</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card book-card">
              <img src="https://m.media-amazon.com/images/I/71tbalAHYCL.jpg" class="card-img-top" alt="Book 2">
              <div class="card-body">
                <h6 class="card-title">Ikigai</h6>
                <p class="card-text">Author: Héctor García<br>Language: Japanese</p>
              </div>
            </div>
          </div>
          
          <!-- Add more cards -->
        </div>
      </div>
    </div>



      <!-- 2nd Section -->

  <!-- <div class="container py-5">
  <!-- Heading -->
  <div class="row">
    <div class="col-12 section-title">
      <h2>Tradition of Naat with Over 5 Years of Experience</h2>
    </div>
  </div>

  <!-- First Two Columns of Paragraphs -->
  <div class="row">
    <div class="col-md-6">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  consectetur adipiscing elit. Sed do consectetur adipiscing elit. Sed do  consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et d eiusmod tempor incididunt ut labore et d magna aliqua ut enim.
      </p>
    </div>
    <div class="col-md-6">
      <p>Consectetur adipiscing elit.  consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et d consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et d consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dSed do eiusmod tempor incididunt  consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et d consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin.</p>
    </div>
  </div>

  <!-- First Row: Headings and Text Side by Side -->
  <div class="row mt-5">
    <div class="col-md-6">
      <h3 class="fw-bold">Bridging Tradition with Modern Research in Naat Studies</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mauris ut orci finibus, consequat sem a, blandit neque. Phasellus a justo vel eros gravida fermentum. Ut nec gravida ligula. Curabitur varius arcu in tortor scelerisque, nec rutrum sapien convallis. Donec gravida bibendum risus, sed efficitur ligula. Sed eget nisl at libero consequat tempus. Sed fermentum velit vitae velit fermentum, in tempus augue dapibus. Quisque ac neque nisl. Sed ut enim vel magna malesuada rutrum nec nec neque. Duis posuere dignissim purus, sit amet efficitur nibh sodales ut.</p>
    </div>
    <div class="col-md-6">
      <p style="margin: top -50px;">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra. Mauris ut orci finibus, consequat sem a, blandit neque. Phasellus a justo vel eros gravida fermentum. Ut nec gravida ligula. Curabitur varius arcu in tortor scelerisque, nec rutrum sapien convallis. Donec gravida bibendum risus, sed efficitur ligula. Sed eget nisl at libero consequat tempus. Sed fermentum velit vitae velit fermentum, in tempus augue dapibus. Quisque ac neque nisl. Sed ut enim vel magna malesuada rutrum nec nec neque. Duis posuere dignissim purus, sit amet efficitur nibh sodales ut. Vivamus volutpat turpis non quam pretium, a fringilla tortor imperdiet. Etiam vehicula justo a lorem tristique, eget laoreet ligula cursus. Nullam vel dolor nulla. Nullam semper ante a sem feugiat sagittis. Suspendisse potenti. Nulla vestibulum nibh et justo mattis facilisis.</p>
    </div>
  </div>

  <!-- Second Row: Image on Left, Text on Right -->
  <div class="row mt-4 align-items-start">
    <div class="col-md-6">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img11.jpg" alt="Bookshelf Image" class="img-fluid">
    </div>
    <div class="col-md-6">
      <h3 class="fw-bold ">Markaz-e-Tahqiq-e-Naat</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Nullam vel dolor nulla. Nullam semper ante a sem feugiat sagittis. Suspendisse potenti. Nulla vestibulum nibh et justo mattis facilisis. In ut velit magna. Nullam porttitor. Vivamus volutpat turpis non quam pretium. Etiam vehicula justo a lorem tristiqsemper ante a sem feugiat sagittis. consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vivamus volutpat turpis non quam pretium, a fringilla tortor imperdiet. Etiam vehicula justo a lorem tristique, eget laoreet ligula cursus. Nullam vel dolor nulla. Nullam semper ante a sem feugiat sagittis. Suspendisse potenti.  In ut velit magna. Nullam porttitor. Vivamus volutpat turpis non quam pretium, a fringilla tortor imperdiet.  ulla. Nullam semper ant</p>
    </div>
  </div>
</div>

  
  <style>
    .hero-section {
      background-image: url('<?php echo get_template_directory_uri(); ?>/images/img10.avif'); /* Replace with correct image path */
      background-size: cover;
      background-position: center;
      position: relative;
      height: 230px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.76);
      z-index: 1;
    }
    .hero-content {
      position: relative;
      z-index: 2;
    }

    /* 2nd section */
    h2 {
    font-weight: bold;
    text-transform: uppercase;
  }
  .section-title {
    text-align: center;
    margin-bottom: 2rem;
  }
  .img-fluid {
    width: 100%;
    height: auto;
    border-radius: 4px;
  }


  </style>
  <?php get_footer(); ?> -->



  <!-- header.php -->

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

    .navbar {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    .navbar-brand h4 {
      margin-bottom: 0;
      font-weight: bold;
      color: #2c3e50;
    }

    /* Customize Offcanvas Menu */
    .offcanvas-start {
      width: 250px;
      background-color: #f8f9fa;
    }

    .offcanvas-body .nav-link {
      padding: 10px 0;
      font-size: 1.1rem;
      color: #000;
    }

    .offcanvas-header {
      border-bottom: 1px solid #dee2e6;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><h4>Naat Research Center</h4></a>
    
    <!-- Toggle button for offcanvas -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Desktop Menu -->
    <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex">
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

<!-- Offcanvas Menu for Mobile -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <?php 
      wp_nav_menu(array(
          'theme_location'  => 'primary-menu',
          'container'       => false, 
          'menu_class'      => 'navbar-nav flex-column', 
          'fallback_cb'     => 'wp_page_menu', 
          'depth'           => 2,
          'walker'          => new WP_Bootstrap_Navwalker(),
      )); 
    ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- header.php -->

<?php include 'header.php'; 
the_field('book-name', 8)

?>

 <style>
  body, html {
  margin: 0;
  padding: 0;
  overflow-x: hidden; /* Prevents horizontal scroll caused by overflowing elements */
}
     .hero-section {
    background: url('<?php echo get_template_directory_uri(); ?>/images/cover1.jpg') no-repeat center center;
    background-size: cover;
    height: 100vh;
    color: white;
    display: flex;
    align-items: center;
    position: relative;
  }
  .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.73);
  }
  .hero-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
    padding-left: 0px;
    padding-bottom: 100px;
   
  }
  .btn-custom {
    border: 1px solid #fff;
    color: #fff;
    background: transparent;
    padding: 10px 30px;
    border-radius: 30px;
    transition: all 0.3s ease;
  }
  .btn-custom:hover {
    background-color: #fff;
    color: #000;
  }
  body {
    background-color: #e0e0e0;
  }

  /* book cards */
  .text-feature {
  font-size: 50px;
  text-align: center;
}

.book-card {
  background: #fff;
  border-radius: 10px;
  padding: 10px; /* thoda aur kam padding */
  text-align: center;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.book-card img {
  max-height: 220px; /* image thodi chhoti */
  width: auto;
  margin-bottom: 15px;
  /* object-fit: cover; */
  border-radius: 8px;
}

.book-title {
  font-size: 1.25rem;
  font-weight: 600;
  color: #000000;
  margin-bottom: 10px;
}

.carousel-inner {
  padding: 20px 0;
}

.carousel-item .row {
  display: flex;
  gap: 2%;
  justify-content: center; /* last row cards ko center kare */
}
.carousel-item .row > div.col-md-4 {
  flex: 0 0 28%;
  max-width: 28%;
}
.book-card {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

/* Arrows styling and positioning */
.carousel-control-prev,
.carousel-control-next {
  width: 30px;  /* width kam kiya */
  height: 30px; /* height kam kiya */
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0, 0, 0, 0.7);
  border-radius: 50%;
  opacity: 1;
}

.carousel-control-prev {
  left: -40px; /* arrows ko thoda kam bahar */
}

.carousel-control-next {
  right: -40px;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: transparent;
  width: 15px;  /* icon size chhota */
  height: 15px;
  background-size: 100% 100%;
}

/* Responsive tweaks */
@media (max-width: 768px) {
  .carousel-control-prev {
    left: 10px;
  }

  .carousel-control-next {
    right: 10px;
  }

  .carousel-item .row {
    flex-direction: column;
  }

  .book-card {
    margin-bottom: 20px;
    width: 500px;
  }
}


/* Arrows styling and positioning */
.carousel-control-prev,
.carousel-control-next {
  width: 40px;
  height: 40px;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0, 0, 0, 0.7);
  border-radius: 50%;
  opacity: 1;
}

.carousel-control-prev {
  left: -50px; /* arrows ko carousel ke bahar le aaye */
}

.carousel-control-next {
  right: -50px;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  background-color: transparent; /* remove default bg to use our bg */
  width: 20px;
  height: 20px;
  background-size: 100% 100%;
}

/* Responsive tweaks */
@media (max-width: 768px) {
  .carousel-control-prev {
    left: -30px;
 /* mobile par arrows thoda andar */
  }

  .carousel-control-next {
    right: 10px;
  }

  .carousel-item .row {
    flex-direction: column; /* mobile par vertical stacking */
  }

  .book-card {
    margin-bottom: 20px;
  }
}

  /* about us */
  .about-section {
    background-color: #fff;
    padding: 60px 0;
  }
  .about-title {
    font-size: 50px;
    font-weight: ;
  }
  .about-subtitle {
    font-size: 1.2rem;
    font-weight: 600;
    margin-top: 20px;
  }
  .about-text {
    margin-top: 20px;
    line-height: 1.8;
    color: #333;
  }
  .about-btn {
    margin-top: 30px;
    border: 1px solid #000;
    padding: 10px 25px;
    border-radius: 50px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    color: #000;
  }
  .about-btn:hover {
    background-color: #333;
    color: #fff;
  }
  .about-image {
    max-width:115%;
    height: 550px;
  }

  /* Responsive Design */
@media (max-width: 767px) {
  .about-title {
    font-size: 32px;
    text-align: center;
  }
  .about-subtitle,
  .about-text,
  .about-btn {
    text-align: center;
  }
  .about-text {
    font-size: 0.95rem;
    padding: 0 15px;
  }
  .about-btn {
    margin: 20px auto 0;
    display: inline-block;
  }
  .about-image {
    width: 100%;
    height: auto;
    margin-top: 30px;
  }
}


  /* testimonials */
body {
    background-color: #e5e5e5;
  }
  .testimonial {
    margin-bottom: 2rem;
  }
  .testimonial-icon {
    width: 60px;
    height: 60px;
    background-color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    margin-right: 15px;
  }
   
  </style>


<!-- Hero Section -->
<section class="hero-section">
  <div class="overlay"></div>
  <div class="container">
    <div class="hero-content text-white">
        <h1 class="display-2" style="font-weight:700;" >Welcome to Naat Research Center</h1>

      <p class="lead mt-3">Explore our library of powerful stories and creative minds.</p>
      <a href="#" class="btn btn-custom mt-4"><b>Browse More →</b></a>
    </div>
  </div>
</section>

<!-- Hero CArousel -->
 

<!-- carousel -->

<div class="container my-5">
    <h1 class="text-feature">FEATURED BOOKS</h1>
    <p class="text-center text-dark">By Top Authors</p>

    <div id="bookCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">

    <!-- Slide 1 -->
<div class="carousel-item active">
  <div class="row">
    <?php
    $books = new WP_Query([
      'post_type' => 'book-carousel',
      'posts_per_page' => 3
    ]);

    if ($books->have_posts()):
      while ($books->have_posts()): $books->the_post();
        ?>
        <div class="col-md-4">
          <div class="book-card">
            <img src="<?php the_field('book-image'); ?>" class="img-fluid" alt="<?php the_field('book-name'); ?>">
            <div class="book-title"><?php the_field('book-name'); ?></div>
            <p><?php the_field('author-name'); ?><br><?php the_field('language'); ?></p>
          </div>
        </div>
        <?php
      endwhile;
      wp_reset_postdata();
    else:
      echo '<p>No books found.</p>';
    endif;
    ?>
  </div>
</div>


        <!-- Slide 2 -->
<div class="carousel-item">
  <div class="row">
    <?php
    $books2 = new WP_Query([
      'post_type' => 'book-carousel',
      'posts_per_page' => 3,
      'offset' => 3 // it will skip the first 3 posts
    ]);

    if ($books2->have_posts()):
      while ($books2->have_posts()): $books2->the_post();
        ?>
        <div class="col-md-4">
          <div class="book-card">
            <img src="<?php the_field('book-image'); ?>" class="img-fluid" alt="<?php the_field('book-name'); ?>">
            <div class="book-title"><?php the_field('book-name'); ?></div>
            <p><?php the_field('author-name'); ?><br><?php the_field('language'); ?></p>
          </div>
        </div>
        <?php
      endwhile;
      wp_reset_postdata();
    else:
      echo '<p>No more books found.</p>';
    endif;
    ?>
  </div>
</div>
</div>



      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#bookCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#bookCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="text-center mt-4">
      <a href="<?php echo get_permalink(16); ?>" class="text-dark fw-bold text-decoration-underline" style="font-size: 23px;">View More Books</a>
    </div>
  </div>


<!-- About Us -->

<section class="about-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left content -->
      <div class="col-md-6">
        <h1 class="about-title">Naat Research Center</h1>
        <!-- <p class="about-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
        <p class="about-text">
        Naat Research Centre (NRC) is a unique institution devoted to the genre of Naat among all the genres of Urdu poetry. This institution was established in Pakistan 1995 as a Charitable Trust. The purpose of the establishment is to collect, organize, explore, research and promote Naat literature and provide facilities for research in Naat’ literature.

NRC is the brain-child of Syed Sabih Rehmani who is known for his melodious recitation of Naat Sharif at religious and secular events in Pakistan and abroad. He has collected a significant amount of research on Naat literature.

Naat Research Centre (NRC) supports the delivery of educational and informational lectures and certificate courses on the subject and field of Naat Sharif in multiple languages. Under the Umbrella of Naat research Center we encourage accrediting and acknowledging works of Naat Sharif in all forms. We Provide assistance and guidance to students and awarding stipends and Work with institutions to promote Naat Sharif in particular and education in general.

We offer scholarships to qualifying students engaged in research of Naat Sharif, and publicise critical and academic research undertaken on Naat Sharif anywhere in the world.

NRC Partners educational institutions to increase knowledge, through Naat Sharif, in order to enhance understanding of different cultures and faiths, and Establish liaison with and aid the maintenance of educational and institutional centres whenever necessary and to make all possible efforts to promote general educational activities.
        </p>
        <a href="<?php echo get_permalink(10); ?>" class="about-btn">
          Read More About Us →
        </a>
      </div>
      <!-- Right image -->
      <div class="col-md-6 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/book 7.jpg" alt="About Us" class="about-image">
      </div>
    </div>
  </div>
</section>


<!-- testimonials -->

<?php get_template_part('testimonials'); ?> -->
<!-- <div class="container py-5 text-center">
  <h1 class="mb-3" style="font-size: 50px;">TESTIMONIALS</h1>
  <p class="mb-5">What Our Readers Say</p>
  
  <div class="row text-start">
    <div class="col-md-6 testimonial">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="d-flex align-items-center">
        <div class="testimonial-icon">👤</div>
        <span class="testimonial-name"><b>John Doe</b></span>
      </div>
    </div>
    <div class="col-md-6 testimonial">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="d-flex align-items-center">
        <div class="testimonial-icon">👤</div>
        <span class="testimonial-name"><b>Emelia Hewitt</b></span>
      </div>
    </div>
    <div class="col-md-6 testimonial">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="d-flex align-items-center">
        <div class="testimonial-icon">👤</div>
        <span class="testimonial-name"><b>Leyla Grey</b></span>
      </div>
    </div>
    <div class="col-md-6 testimonial">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="d-flex align-items-center">
        <div class="testimonial-icon">👤</div>
        <span class="testimonial-name"><b>Lawson Carlson</b></span>
      </div>
    </div>
  </div>
</div> -->

<!-- CTA -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'footer.php'; ?>
</body>
</html>





//  Book-carousel search filter by custom field 'book-name'
// add_action('pre_get_posts', function ($query) {
//     if (!is_admin() && $query->is_main_query() && $query->is_search() && $_GET['post_type'] === 'book-carousel') {
//         $search_term = $query->get('s');
//         if ($search_term) {
//             $query->set('s', ''); // disable default search
//             $query->set('meta_query', [
//                 [
//                     'key'     => 'book-name',
//                     'value'   => $search_term,
//                     'compare' => 'LIKE',
//                 ]
//             ]);
//         }
//     }
// });
