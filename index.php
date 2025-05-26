<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero-section">
  <div class="overlay"></div>
  <div class="container">
    <div class="hero-content text-white">
      <h1 class="display-2 fw-bold">Welcome to Naat Research Center</h1>
      <p class="lead mt-3">Explore our library of powerful stories and creative minds.</p>
      <a href="#" class="btn btn-custom mt-4"><strong>Browse More →</strong></a>
    </div>
  </div>
</section>

<!-- Featured Books Section -->
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
            while ($books->have_posts()): $books->the_post(); ?>
              <div class="col-md-4">
                <div class="book-card">
                  <img src="<?php the_field('book-image'); ?>" class="img-fluid" alt="<?php the_field('book-name'); ?>">
                  <div class="book-title"><?php the_field('book-name'); ?></div>
                  <p><?php the_field('author-name'); ?><br><?php the_field('language'); ?></p>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata();
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
            'offset' => 3
          ]);

          if ($books2->have_posts()):
            while ($books2->have_posts()): $books2->the_post(); ?>
              <div class="col-md-4">
                <div class="book-card">
                  <img src="<?php the_field('book-image'); ?>" class="img-fluid" alt="<?php the_field('book-name'); ?>">
                  <div class="book-title"><?php the_field('book-name'); ?></div>
                  <p><?php the_field('author-name'); ?><br><?php the_field('language'); ?></p>
                </div>
              </div>
            <?php endwhile; wp_reset_postdata();
          else:
            echo '<p>No more books found.</p>';
          endif;
          ?>
        </div>
      </div>

    </div> <!-- /.carousel-inner -->
  </div> <!-- /#bookCarousel -->

  <div class="text-center mt-4">
    <a href="<?php echo get_permalink(16); ?>" class="text-dark fw-bold text-decoration-underline fs-4">View More Books</a>
  </div>
</div>

<!-- About Us Section -->
<section class="about-section">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left content -->
      <div class="col-md-6">
        <h1 class="about-title">Naat Research Center</h1>
        <p class="about-text">
          Naat Research Centre (NRC) is a unique institution devoted to the genre of Naat among all the genres of Urdu poetry. This institution was established in Pakistan 1995 as a Charitable Trust. The purpose of the establishment is to collect, organize, explore, research and promote Naat literature and provide facilities for research in Naat’ literature. NRC is the brain-child of Syed Sabih Rehmani who is known for his melodious recitation of Naat Sharif at religious and secular events in Pakistan and abroad. He has collected a significant amount of research on Naat literature. Naat Research Centre (NRC) supports the delivery of educational and informational lectures and certificate courses on the subject and field of Naat Sharif in multiple languages. Under the Umbrella of Naat research Center we encourage accrediting and acknowledging works of Naat Sharif in all forms. We Provide assistance and guidance to students and awarding stipends and Work with institutions to promote Naat Sharif in particular and education in general. We offer scholarships to qualifying students engaged in research of Naat Sharif, and publicise critical and academic research undertaken on Naat Sharif anywhere in the world. NRC Partners educational institutions to increase knowledge, through Naat Sharif, in order to enhance understanding of different cultures and faiths, and Establish liaison with and aid the maintenance of educational and institutional centres whenever necessary and to make all possible efforts to promote general educational activities.
        </p>
        <a href="<?php echo get_permalink(10); ?>" class="about-btn">Read More About Us →</a>
      </div>

      <!-- Right image -->
      <div class="col-md-6 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book 7.jpg" alt="About Us" class="about-image">
      </div>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<?php get_template_part('testimonials'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer(); ?>
</body>
</html>
