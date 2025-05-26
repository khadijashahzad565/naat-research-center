<?php get_header(); ?>

<style>
    .book-detail-card {
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    padding: 30px;
    background-color: #fff;
  }

  .book-detail-image {
    width: 100%;
    max-width: 100%;
    border-radius: 10px;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
    max-height: 450px;
    object-fit: cover;
  }

  .book-meta h1 {
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 20px;
  }

  .book-meta h5,
  .book-meta p {
    font-size: 1.1rem;
    color: #555;
  }

  .book-description {
    margin-top: 25px;
    line-height: 1.7;
    color: #333;
    font-size: 1rem;
  }

  .back-link {
    display: inline-block;
    margin-top: 30px;
    font-size: 0.95rem;
    color: #007bff;
    text-decoration: none;
  }

  .back-link:hover {
    text-decoration: underline;
  }

  .book-links a {
    display: inline;
    font-size: 1rem;
    color: #007bff;
    text-decoration: none;
    margin-right: 15px;
  }

  .book-links a:hover {
    text-decoration: underline;
  }
</style>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="book-detail-card">
        <div class="row">
          <!-- Book Image -->
          <div class="col-md-5 text-center mb-4 mb-md-0">
            <img src="<?php the_field('book-image'); ?>" alt="<?php the_field('book-name'); ?>" class="img-fluid book-detail-image">
          </div>

          <!-- Book Meta -->
          <div class="col-md-7 book-meta">
            <!-- Book Title -->
            <h1><?php the_field('book-name'); ?></h1>

            <!-- Author Name -->
            <div class="d-flex mb-2">
              <p class="fw-bold me-2">Author Name:</p>
              <p><?php the_field('author-name'); ?></p>
            </div>

            <!-- Language -->
            <div class="d-flex mb-2">
              <p class="fw-bold me-2">Language:</p>
              <p><?php the_field('language'); ?></p>
            </div>

            <!-- Book Description -->
            <div class="book-description mt-3">
              <h5>Description:</h5>
              <?php
              $book_description = get_field('book-description');
              echo !empty($book_description)
                ? '<p>' . esc_html($book_description) . '</p>'
                : '<p>No description available.</p>';
              ?>
            </div>

            <!-- Download/View Book Links -->
            <?php $book_pdf = get_field('book-pdf'); ?>
            <?php if ($book_pdf): ?>
              <div class="book-links mt-3">
                <a href="<?= esc_url($book_pdf); ?>" target="_blank">View Book</a>
                <a href="<?= esc_url($book_pdf); ?>" target="_blank" download>Download PDF</a>
              </div>
            <?php endif; ?>

            <!-- Back to All Books -->
            <div class="mt-4">
              <a href="<?= get_permalink(16); ?>" class="back-link text-center">&larr; Back to All Books</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
