<?php
/*
Template Name: page-news-events
*/
get_header();
?>

<!-- Hero Section -->
<section class="naat-news-section">
  <div class="container naat-news-content">
    <h1>Latest News & Events</h1>
    <p>Stay updated with our recent activities, announcements, and upcoming events</p>
  </div>
</section>

<!-- Featured Section -->
<div class="container mt-4">
  <h2 class="mb-3">Trending Now</h2>
  <div class="row">
    <div class="col-md-8">
      <div class="news-card">
        <div class="image-overlay-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cover1.jpg" alt="News Image">
        </div>
        <h4 class="mt-2">Charting the Legacy of Classical Naat Khawani in South Asia</h4>
        <p>A deep dive into the most celebrated and stylistically rich Naat reciters who shaped the tradition in Pakistan and the subcontinent.</p>
        <small>By Admin | August 7, 2019</small>
      </div>
    </div>
    <div class="col-md-4">
      <div class="news-card">
        <div class="image-overlay-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpeg" alt="News Image">
        </div>
        <div class="news-card-content">
          <span class="category-tag">Gadgets</span>
          <h6>Digital Revival: The Evolution of Melody in Naat Recitation Over Centuries</h6>
        </div>
      </div>

      <div class="news-card">
        <div class="image-overlay-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img4.jpeg" alt="News Image">
        </div>
        <div class="news-card-content">
          <span class="category-tag">Travel</span>
          <h6>Journey Through the Sacred: Visiting Historic Mosques Where Naats Were First Recited</h6>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- News Grid -->
<div class="container mt-5">
  <h3 class="mb-3">Latest News & Events</h3>
  <div class="row">
    <div class="col-md-4">
      <div class="news-card">
        <div class="image-overlay-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img5.jpg" alt="News">
        </div>
        <h6 class="mt-2">Upcoming Seminar: Evolution of Naat in Modern Literature</h6>
        <small>August 7, 2019</small>
      </div>
    </div>
    <div class="col-md-4">
      <div class="news-card">
        <div class="image-overlay-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img6.jpg" alt="News">
        </div>
        <h6 class="mt-2">New Publication: ‘Tazkara-e-Naat Go’ Now Available Online</h6>
        <small>August 7, 2019</small>
      </div>
    </div>
    <div class="col-md-4">
      <div class="news-card">
        <div class="image-overlay-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img7.jpg" alt="News">
        </div>
        <h6 class="mt-2">Documentary Screening: ‘Saut-e-Madina’ at Al-Hamra Hall</h6>
        <small>August 7, 2019</small>
      </div>
    </div>
  </div>
</div>

<!-- Don't Miss Section -->
<div class="container mt-5">
  <div class="row">
    <!-- Left Column -->
    <div class="col-lg-8">
      <h4><span class="bg-warning px-2 py-1 text-dark rounded">DON'T MISS</span></h4>
      <div class="row mt-3">
        <div class="col-md-6">
          <div class="card border-0">
            <div class="image-overlay-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img8.jpg" class="card-img-top" alt="News Main">
            </div>
            <div class="card-body px-0">
              <span class="badge bg-primary mb-2">Travel</span>
              <h5 class="card-title">Decoding the Poetic Beauty of Allama Iqbal’s Naatiya Kalam</h5>
              <small class="text-muted">John Doe - Dec 13, 2017</small>
              <p class="card-text mt-2 small">A stylistic and thematic breakdown of Iqbal’s rarely discussed Naats.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <ul class="list-unstyled small-news-list">

            <li class="mb-3 d-flex align-items-start">
              <div class="me-3" style="width: 100px; height: 75px;">
                <div class="image-overlay-wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img13.jpeg" alt="thumb" class="img-fluid w-100 h-100 object-fit-cover">
                </div>
              </div>
              <div>
                <h6 class="mb-1">Annual Naat Conference 2025 – Glimpses & Insights</h6>
                <small class="text-muted">Jan 1, 2018</small>
              </div>
            </li>

            <li class="mb-3 d-flex align-items-start">
              <div class="me-3" style="width: 100px; height: 75px;">
                <div class="image-overlay-wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img14.jpg" alt="thumb" class="img-fluid w-100 h-100 object-fit-cover">
                </div>
              </div>
              <div>
                <h6 class="mb-1">Reviving Lost Naats from Persian and Arabic Manuscripts</h6>
                <small class="text-muted">Jan 12, 2018</small>
              </div>
            </li>

            <li class="mb-3 d-flex align-items-start">
              <div class="me-3" style="width: 100px; height: 75px;">
                <div class="image-overlay-wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img 15.jpg" alt="thumb" class="img-fluid w-100 h-100 object-fit-cover">
                </div>
              </div>
              <div>
                <h6 class="mb-1">The Evolution of Melody in Naat Recitation Over Centuries</h6>
                <small class="text-muted">Feb 28, 2018</small>
              </div>
            </li>

            <li class="d-flex align-items-start">
              <div class="me-3" style="width: 100px; height: 75px;">
                <div class="image-overlay-wrapper">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img 16.jpg" alt="thumb" class="img-fluid w-100 h-100 object-fit-cover">
                </div>
              </div>
              <div>
                <h6 class="mb-1">Calligraphy Meets Devotion: Naatiya Verses in Islamic Art</h6>
                <small class="text-muted">Apr 11, 2017</small>
              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>

    <!-- Right Column (Sidebar) -->
    <div class="col-lg-4 mt-4 mt-lg-0">
      <div class="mb-4">
        <h6 class="mb-3">STAY CONNECTED</h6>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <i class="fab fa-facebook-f"></i> 16,589 Fans
            <span class="badge bg-primary">LIKE</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <i class="fab fa-twitter"></i> 1,456 Followers
            <span class="badge bg-info">FOLLOW</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <i class="fab fa-youtube"></i> 13,586 Subscribers
            <span class="badge bg-danger">SUBSCRIBE</span>
          </li>
        </ul>
      </div>
      <div>
        <div class="image-overlay-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img5.jpg" class="img-fluid" alt="Ad Banner">
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
