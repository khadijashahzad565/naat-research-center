<?php get_header(); ?>

<div class="container py-5">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <!-- Title -->
    <h1 class="mb-2"><?= esc_html(get_field('title')); ?></h1>
    <hr>

    <div class="row mt-4">
      <!-- Left Column: Description and Details -->
      <div class="col-md-8">
        <p><strong>Published On:</strong> <?= esc_html(get_field('date')); ?></p>
        <p><strong>Views:</strong> <?= esc_html(get_field('number')); ?></p>

        <!-- Description (optional) -->
        <!-- 
        <h5 class="mt-4">Description</h5>
        <p><?= esc_html(get_field('description')); ?></p>
        -->

        <div>
          <h5 class="mt-5 fw-bold"></h5>
          <?= wp_kses_post(get_field('details')); ?>
        </div>
      </div>

      <!-- Right Column: Image -->
      <div class="col-md-4 text-center">
        <?php if ($image = get_field('image')) : ?>
          <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>" class="img-fluid rounded shadow-sm" />
        <?php endif; ?>
      </div>
    </div>

  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

<style>
  img {
    max-height: 400px;
    object-fit: cover;
  }
</style>
