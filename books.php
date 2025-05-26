<?php 
/* Template Name: Books */
get_header(); 
?>

<section class="books-section">
  <div class="container">
    <h1>Explore Our Curated Book Collection</h1>
    <p>Delve into timeless Islamic literature, thought-provoking Naat compilations, and research-backed works from esteemed authors.</p>
  </div>
</section>

<div class="container my-5">

  <!-- Search Bar -->
  <div class="text-center mb-4">
    <h4>SEARCH YOUR FAVOURITE BOOK</h4>
    <form method="GET" class="d-flex justify-content-center mt-2 mb-5">
      <input 
        type="text" 
        name="s" 
        class="form-control w-50" 
        placeholder="Search by Book Name or Author" 
        value="<?php echo esc_attr(get_search_query()); ?>"
      >
      <input type="hidden" name="post_type" value="book-carousel"> 
      <button type="submit" class="btn btn-dark ms-2">Search</button>
    </form>
  </div>

  <!-- Book Grid with Pagination -->
  <div class="row">
    <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;

      $args = [
        'post_type' => 'book-carousel',
        'posts_per_page' => 12,
        'paged' => $paged,
      ];

      if (!empty($_GET['s'])) {
        $search_term = sanitize_text_field($_GET['s']);
        $args['meta_query'] = [
          'relation' => 'OR',
          [
            'key' => 'book-name',
            'value' => $search_term,
            'compare' => 'LIKE',
          ],
          [
            'key' => 'author-name',
            'value' => $search_term,
            'compare' => 'LIKE',
          ],
        ];
      }

      $books = new WP_Query($args);

      if ($books->have_posts()) :
        while ($books->have_posts()) : $books->the_post(); ?>
          <div class="col-md-3 mb-4 text-center">
            <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit;">
              <div class="card book-card h-100">
                <img src="<?php the_field('book-image'); ?>" class="card-img-top" alt="<?php the_field('book-name'); ?>">
                <div class="card-body">
                  <h5 class="card-title"><?php the_field('book-name'); ?></h5>
                </div>
              </div>
            </a>
          </div>
        <?php
        endwhile;
        wp_reset_postdata();
      else : ?>
        <p class="text-center">No books found.</p>
      <?php endif; ?>
  </div>

  <!-- Pagination -->
  <?php
    $pagination_links = paginate_links([
      'total' => $books->max_num_pages,
      'current' => max(1, get_query_var('paged')),
      'prev_text' => '« Previous',
      'next_text' => 'Next »',
      'type' => 'array',
    ]);

    if (!empty($pagination_links)) : ?>
      <nav class="mt-4 d-flex justify-content-center">
        <ul class="pagination pagination-sm">
          <?php foreach ($pagination_links as $link) : ?>
            <li class="page-item <?php echo strpos($link, 'current') !== false ? 'active' : ''; ?>">
              <?php echo str_replace('page-numbers', 'page-link', $link); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
  <?php endif; ?>

</div>

<?php get_footer(); ?>
