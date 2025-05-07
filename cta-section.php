<!-- CTA -->

<div class="donate-section">
  <div class="content container">
    <p class="mb-2 fs-4">Be a Part of Spreading the Light</p>
    <h1 class="fw-bold display-2">JOIN OUR TEAM</h1>
    <p class="mt-3 fs-3">Be a part of our mission to research, preserve and proomote the beauty of Naat</p>
    <a href="#" class="donate-button fs-4">Join Here →</a>
  </div>
</div>

<style>
     .donate-section {
      background: url('<?php echo get_template_directory_uri(); ?>/images/img10.avif')  no-repeat center center/cover;
      background-attachment: fixed;
      color: white;
      padding: 100px 20px;
      text-align: center;
      position: relative;
    }

    .donate-section::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.79); /* dark overlay */
      z-index: 1;
    }

    .donate-section .content {
      position: relative;
      z-index: 2;
    }

    .donate-button {
      border: 2px solid white;
      color: white;
      padding: 8px 25px;
      padding-bottom: 12px;
      border-radius: 30px;
      text-decoration: none;
      transition: all 0.3s ease;
      display: inline-block;
      margin-top: 20px;
    }

    .donate-button:hover {
      background-color: white;
      color: black;
    }

</style>