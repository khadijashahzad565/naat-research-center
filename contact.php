<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<div class="contact-container">
  <div class="contact-info text-center">
    <h1 class="fw-bold pt-3">CONTACT US</h1>
    <p class="fs-6">We're Just a Message Away – Feel Free to Contact!</p>

    <h3 class="pt-5"><i class="fas fa-phone-alt me-2"></i>Phone</h3>
    <p class="fs-5">(021) 123 456 789</p>

    <h3 class="pt-4"><i class="fas fa-globe me-2"></i>Website</h3>
    <p class="fs-5">nrc@gmail.com</p>

    <h3 class="pt-4"><i class="fas fa-map-marker-alt me-2"></i>Address</h3>
    <p class="fs-6">789 Market Road, Toronto, ON M5H 2N2, Canada</p>
  </div>

  <div class="contact-form">
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['nrc_contact_nonce']) && wp_verify_nonce($_POST['nrc_contact_nonce'], 'nrc_contact_form')) {
      $first_name = sanitize_text_field($_POST["first_name"]);
      $last_name  = sanitize_text_field($_POST["last_name"]);
      $email      = sanitize_email($_POST["email"]);
      $message    = sanitize_textarea_field($_POST["message"]);

      $to      = "khadijashahzad565@gmail.com";
      $subject = "New Contact Message from $first_name $last_name";
      $body    = "Name: $first_name $last_name\nEmail: $email\nMessage:\n$message";
      $headers = ['Content-Type: text/plain; charset=UTF-8'];

      wp_mail($to, $subject, $body, $headers);

      echo '<input type="hidden" id="form-submitted-flag" value="1">';
    }
    ?>

    <form method="POST">
      <?php wp_nonce_field('nrc_contact_form', 'nrc_contact_nonce'); ?>

      <div class="name-fields">
        <div>
          <label>First Name</label>
          <input type="text" name="first_name" required>
        </div>
        <div>
          <label>Last Name</label>
          <input type="text" name="last_name" required>
        </div>
      </div>

      <label>Email</label>
      <input type="email" name="email" required>

      <label>Comment or Message</label>
      <textarea name="message" rows="5"></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const formSubmitted = document.getElementById('form-submitted-flag');
    if (formSubmitted) {
      alert("Thank you for contacting us. We will get back to you soon.");
    }
  });
</script>

<?php get_footer(); ?>
