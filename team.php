<?php 
/* Template Name: Team */
get_header(); 
?>

<!-- ====================== Hero Section ====================== -->
<section class="naat-team-section">
  <div class="container naat-team-content">
    <h1>Meet the Naat Research Team</h1>
    <p>Dedicated Researchers, Scholars, and Contributors United in Preserving and Promoting the Legacy of Naat</p>
  </div>
</section>

<!-- ====================== Leader Section ====================== -->
<section class="leaders-section">
  <div class="container">
    <h1>OUR FOUNDERS &amp; LEADERS</h1>
    <p class="mb-5">The driving force behind our scholarly excellence and strategic direction.</p>

    <div class="row justify-content-center gap-4">
      <?php
      $leaders = new WP_Query([
        'post_type'      => 'leader-info', 
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
      ]);

      $index = 0;
      while ($leaders->have_posts()) : $leaders->the_post();
        $name        = get_field('leader_name');
        $role        = get_field('leader_role');
        $image       = get_field('leader_image');
        $description = get_field('leader_description');
        $phone       = get_field('leader_phone');
        $email       = get_field('leader_email');
        $id          = get_the_ID();

        // Padding logic for design alignment
        $padding_top = ($index === 0 || $index === 4) ? '90px' : 
                       (($index === 1 || $index === 3) ? '40px' : '0');
      ?>
        <!-- Leader Card -->
        <div 
          class="col-md-2 leader-card" 
          style="padding-top: <?php echo $padding_top; ?>;" 
          data-bs-toggle="modal" 
          data-bs-target="#leaderModal-<?php echo $id; ?>"
        >
          <?php if ($image): ?>
            <img 
              src="<?php echo esc_url($image['url']); ?>" 
              alt="<?php echo esc_attr($role); ?>" 
              class="leader-img rounded"
            >
          <?php endif; ?>
          <div class="leader-name"><?php echo esc_html($name); ?></div>
          <div class="leader-role"><?php echo esc_html($role); ?></div>
        </div>

        <!-- Leader Modal -->
        <div 
          class="modal fade" 
          id="leaderModal-<?php echo $id; ?>" 
          tabindex="-1" 
          aria-labelledby="leaderModalLabel-<?php echo $id; ?>" 
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-4">
              <div class="modal-header border-0">
                <button 
                  type="button" 
                  class="btn-close" 
                  data-bs-dismiss="modal" 
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body d-flex flex-column flex-md-row align-items-center">
                <?php if ($image): ?>
                  <img 
                    src="<?php echo esc_url($image['url']); ?>" 
                    class="img-fluid rounded me-md-4 mb-3 mb-md-0" 
                    style="max-width: 250px;" 
                  />
                <?php endif; ?>
                <div>
                  <h4 id="leaderModalLabel-<?php echo $id; ?>"><?php echo esc_html($name); ?></h4>
                  <p class="text-muted"><?php echo esc_html($role); ?></p>
                  <p><?php echo esc_html($description); ?></p>
                  <?php if ($phone): ?>
                    <p><strong>Phone:</strong> <?php echo esc_html($phone); ?></p>
                  <?php endif; ?>
                  <?php if ($email): ?>
                    <p><strong>Email:</strong> <?php echo esc_html($email); ?></p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php
        $index++;
      endwhile;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<!-- ====================== Members Section ====================== -->
<div class="members-section-bg py-2">
  <div class="container my-5 text-center">
    <h1 class="fw-bold">OUR DEDICATED MEMBERS</h1>
    <p class="text-muted pb-5">A group of passionate individuals contributing to the growth of Naat studies.</p>

    <div 
      id="membersCarousel" 
      class="carousel slide" 
      data-bs-ride="carousel" 
      data-bs-interval="4000"
    >
      <div class="carousel-inner">

        <!-- First Slide -->
        <div class="carousel-item active mb-5">
          <div class="d-flex justify-content-center gap-5 flex-wrap">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faraz.jpeg" alt="FARAZ AHMED" class="member-img">
              <div class="member-name">FARAZ AHMED</div>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iqbal.jpg" alt="ALLAMA IQBAL" class="member-img">
              <div class="member-name">ALLAMA IQBAL</div>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faiz.jpg" alt="FAIZA AHMED FAIZ" class="member-img">
              <div class="member-name">FAIZA AHMED FAIZ</div>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/zia.jpg" alt="ZIA MOHEYUDDIN" class="member-img">
              <div class="member-name">ZIA MOHEYUDDIN</div>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghalib.jpg" alt="MIRZA GHALIB" class="member-img">
              <div class="member-name">MIRZA GHALIB</div>
            </div>
          </div>
        </div>

        <!-- Second Slide -->
        <div class="carousel-item mb-5">
          <div class="d-flex justify-content-center gap-5 flex-wrap">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faraz.jpeg" alt="FARAZ AHMED" class="member-img">
              <div class="member-name">FARAZ AHMED</div>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iqbal.jpg" alt="ALLAMA IQBAL" class="member-img">
              <div class="member-name">ALLAMA IQBAL</div>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faiz.jpg" alt="FAIZA AHMED FAIZ" class="member-img">
              <div class="member-name">FAIZA AHMED FAIZ</div>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/zia.jpg" alt="ZIA MOHEYUDDIN" class="member-img">
              <div class="member-name">ZIA MOHEYUDDIN</div>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ghalib.jpg" alt="MIRZA GHALIB" class="member-img">
              <div class="member-name">MIRZA GHALIB</div>
            </div>
          </div>
        </div>

      </div>

      <!-- Carousel Indicators -->
      <div class="carousel-indicators mt-5">
        <button type="button" data-bs-target="#membersCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#membersCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
    </div>
  </div>
</div>

<!-- ====================== CTA Section ====================== -->
<?php get_template_part('cta-section'); ?>

<!-- ====================== Scripts ====================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer(); ?>
