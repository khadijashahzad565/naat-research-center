<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">

      <!-- Naat Research Center -->
      <div class="col-md-3">
        <h5>Naat Research Center</h5>
        <hr>
        <p>We're a full-stack digital marketing studio based in the center of New York City. From strategy to implementation, we're here to help make your brand shine.</p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-3">
  <h5 class="quick-links-title">Quick Links</h5>
  <ul>
    <li><a href="<?php echo get_permalink(8); ?>">Home</a></li>
    <li><a href="<?php echo get_permalink(10); ?>">About</a></li>

    <li><a href="<?php echo get_permalink(12); ?>">Articles</a></li>
    <li><a href="<?php echo get_permalink(14); ?>">Authors</a></li>
    <li><a href="<?php echo get_permalink(16); ?>">Books</a></li>
    <li><a href="<?php echo get_permalink(18); ?>">Programs</a></li>
    <li><a href="<?php echo get_permalink(20); ?>">Team</a></li>
    <li><a href="<?php echo get_permalink(22); ?>">News & Events</a></li>
    <li><a href="<?php echo get_permalink(24); ?>">Contact</a></li>
  </ul>
</div>


      <!-- Contact Info -->
      <div class="col-md-3">
        <h5>Contact Info</h5>
        <p>1890 W 52nd Street<br>New York, New York 10019</p>
        <p>212-440-1919</p>
        <p>Mon–Fri 9am–6pm</p>
      </div>

      <!-- Newsletter -->
      <div class="col-md-3">
        <h5>Join Our Newsletter</h5>
        <p>Sign up for our newsletter to enjoy free marketing tips, inspirations, and more.</p>
        <div class="social-icons">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-linkedin-in"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-dribbble"></i>
        </div>
      </div>

    </div>
  </div>
</footer>


<style>
  :root {
    --footer-bg-color: rgb(234, 234, 234);
    --footer-padding: 70px;
  }

  .footer {
    background-color: var(--footer-bg-color);
    padding: 40px 0;
  }

  .footer h5 {
    font-weight: bold;
    margin-bottom: 20px;
  }

  .footer ul {
    list-style: none;
    padding-left: var(--footer-padding);
  }

  .footer ul li {
    margin-bottom: 8px;
  }

  .footer ul li a {
    text-decoration: none;
    color: black;
  }

  .footer ul li a:hover {
    text-decoration: underline;
  }

  .social-icons i {
    font-size: 1.5rem;
    margin-right: 15px;
    cursor: pointer;
  }

  .footer .quick-links-title {
    padding-left: 65px;
  }
</style>
