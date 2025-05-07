<?php
/**
 * Template Name: Authors
 */
get_header();
?>

<section class="authors-section">
  <div class="container">
    <h1>Meet Our Esteemed Authors</h1>
    <p>Explore the research and writings of scholars and writers dedicated to the rich traditions of Islamic studies and Naat</p>
  </div>
</section>

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
</style>

<?php get_footer(); ?>
