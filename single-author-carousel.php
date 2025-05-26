<?php get_header(); ?>

<div class="container my-5">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="text-center">
      <?php
      $img = get_field('author-image');
      $bio = get_field('author-bio');
      ?>
      <?php if ($img) { ?>
        <img src="<?php echo $img; ?>" class="img-fluid mb-3" style="max-width: 300px;" alt="Author Image">
      <?php } ?>
      
      <p><?php echo $bio; ?></p>
      
      <div class="mt-4">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
