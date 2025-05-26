<?php 
/* Template Name: Programs */
get_header(); 
?>

<!-- Hero Section -->
<section class="our-programs-section">
  <div class="container our-programs-content">
    <h1>Our Programs</h1>
    <p>Empowering Individuals Through Knowledge, Expression, and Spiritual Growth in the Realm of Naat</p>
  </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1>ABOUT OUR PROGRAMS</h1>
        <h5 class="pb-3">why these programs are important, their role in Naat promotion and research.</h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Nibh praesent tristique magna sit amet. Facilisi cras fermentum odio eu feugiat. Aenean sed adipiscing diam donec. 
          Diam volutpat commodo sed egestas. Et ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Nibh praesent tristique magna sit amet. Facilisi cras fermentum odio eu feugiat. Aenean sed adipiscing diam donec. 
          Diam volutpat commodo sed egestas. Et ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Nibh praesent tristique magna sit amet. Facilisi cras fermentum odio eu feugiat. Aenean sed adipiscing diam donec. 
          Diam volutpat commodo sed egestas. Et ligula ullamcorper malesuada proin libero nunc consequat interdum varius.
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/book 7.jpg" alt="Book Mockup" class="program-img" />
      </div>
    </div>
  </div>
</section>

<!-- Program Categories -->
<section class="py-5 bg-light-grey">
  <div class="container">
    <div class="text-center mb-5">
      <h1 style="font-size: 3rem;">PROGRAM CATEGORIES</h1>
      <p class="fs-5">
        Explore our diverse programs and specialized categories dedicated to the advancement <br> 
        of Naat research and education.
      </p>
    </div>
    <div class="row g-4">
      <!-- Category Cards -->
      <?php 
        $categories = [
          ['img' => 'img1.jpeg', 'alt' => 'Research', 'title' => 'RESEARCH & PUBLICATIONS'],
          ['img' => 'lib2.jpg', 'alt' => 'Workshops', 'title' => 'NAAT WRITING WORKSHOPS'],
          ['img' => 'lib3.jpg', 'alt' => 'Recitation', 'title' => 'NAAT RECITATION TRAINING'],
          ['img' => 'lib1.jpeg', 'alt' => 'Courses', 'title' => 'ONLINE COURSES'],
          ['img' => 'lib5.webp', 'alt' => 'Seminars', 'title' => 'SEMINARS & CONFERENCES'],
          ['img' => 'lib4.avif', 'alt' => 'Programs', 'title' => 'NAAT LEARNING PROGRAMS'],
        ];

        foreach ($categories as $cat): ?>
          <div class="col-md-4">
            <div class="category-card">
              <div class="overlay"></div>
              <img src="<?php echo get_template_directory_uri() . '/assets/images/' . $cat['img']; ?>" alt="<?php echo esc_attr($cat['alt']); ?>" />
              <div class="category-title"><?php echo esc_html($cat['title']); ?></div>
            </div>
          </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- Testimonials Section -->
<?php get_template_part('testimonials'); ?>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer(); ?>
