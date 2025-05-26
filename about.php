<?php 
include 'header.php'; 
// Template Name: About 
?>

<div class="container py-5">
  <!-- Main Section -->
  <div class="row mb-5">
    <div class="col-md-8">
      <h2 class="mission-title mb-4">More About Naat Research Center</h2>
      <b>Syed Sabihuddin Rehmani</b> is a renowned name in the field of <b>Naat recitation</b>, <b>poetry</b>, and <b>research</b>.
      <p>A melodious voice, deep understanding of poetry and the true love for the Prophet Muhammad (Sallallahu 'Alaiahi wa aalihi wa sallam), when combined, is what makes a successful Naat Khwan.</p>
      <p>Syed Sabihuddin Rehmani is one such blessed soul who is loved and admired by Naat listeners all over the world and respected by Naat Community. He is an iconic figure and a role model to Naat Khwans for younger generation.</p>
      <p>He is also an authority on Naat. His extensive academic research has made it possible to establish 'Na'at' as a distinct genre for the first time in the history of Urdu Literature. He has inspired many academics to pursue Naat research in a dedicated manner.</p>
      <p>Syed Sabihuddin Rehmani is one such blessed soul who is loved and admired by Naat listeners all over the world and respected by Naat Community. He is an iconic figure and a role model to Naat Khwans for younger generation.</p>
    </div>
    <div class="col-md-4">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about1.png" class="img-fluid" alt="Book Mockup">
    </div>
  </div>

  <!-- Repeating Sections -->
  <div class="mb-4">
    <p>Sabih Rehmani was born on June 27, 1965 at Karachi. He has dedicated his life to Urdu Naat for the last three decades. His contribution towards the treasure of Urdu Naat is simply incredible...</p>
    <p>He has also served as the Senior Manager Planning, Research and P.R for ARY QTV till 2010...</p>
  </div>

  <div class="mb-4">
    <h4 class="fw-bold">Education</h4>
    <p>1. MA in Urdu Literature from University of Karachi</p>
  </div>

  <div class="mb-4">
    <h4 class="fw-bold">Publications</h4>
    <h5 class="fw-bold">Naat Rang</h5>
    <p>Naat Rang is a regular Urdu Book series, dedicated solely to Naat poetry and literature...</p>
  </div>

  <div class="mb-4">
    <h4 class="fw-bold">Naatia Poetry Collection</h4>
    <p>1. ‘Maah-e-Taiba’ first collection of his Naatia Poetry published in 1989.</p>
    <p>2. ‘Jada-e-Rehmat’ second collection of his Naatia poetry published by Mumtaz Publishers in 1993.</p>
  </div>

  <div class="mb-4">
    <h4 class="fw-bold">Translation of Poetry Collection</h4>
    <p>1. “Reverence onto his feet” By Sarah Kazmi, 2009, 2012</p>
    <p>2. “Jada-e-Rehmat” By Justice Dr. Munir Ahmed Mughal, 2009</p>
  </div>

  <div class="mb-4">
    <h4 class="fw-bold">Compilation by Sabih Rehmani</h4>
    <?php 
      $compilations = [
        'Aiwan-e-Na’at, (Naat Collection) 1993.',
        'Jamal-e-Mustafa (Naat Collection) 1993.',
        'Naat Nagar Ka Bassi 2008.',
        'Ghalib Aour Sana-e-Khawaja 2009.',
        'Urdu Naat Mai Tajaliyat-e-Seerat 2015.',
        'Dr Aziz Ehsan Aur Mutaliaat e Naat 2015.',
        'Urdu Naat Ki Shairi Riwayat 2016.',
        'Midhat Naama 2016.',
        'Pakistani Zabanon Mai Naat 2017.',
        'Kalaam e Raza: Fikri O Fanni Zaaviye 2017.',
        'Kalam e Mohsin Kakorvi Fikri O Adabi Jihaat 2018.',
        'Urdu Hamd Ki Sheri Riwayat, 2018.'
      ];
      foreach ($compilations as $item) {
        echo "<p>$item</p>";
      }
    ?>
  </div>

  <div class="mb-4">
    <h4 class="fw-bold">Dissertations on Sabih Rehmani</h4>
    <p>1. “Sabih Rehmani ki shakhsiyat aor Fan ka Tehqeeqi aor Tanqeedi jaiza” By Ayesha Naz, 2011, University of Karachi</p>
    <p>2. “Sabih Rehmani Ba’haisyat Naat Nigar” By Sajida Iqbal, 2011, G.C University Faisalabad</p>
  </div>

  <div class="mb-4">
    <h4 class="fw-bold">Books Published on Sabih Rehmani</h4>
    <p>1. “Jadah-e-Rehmat ka Musafir” by Dr. Hasrat Kasangjuwi”, 2008</p>
    <p>2. “Mujallah Safeer-e-Naat” (Sabih Rehmani Number) by Dr. Hasrat Kasangjuwi”, 2009</p>
    <p>3. “Fan-e-idariyah Naweesi aor Naat Rang” by Dr Afzal Ahmed Anwer, 2010</p>
  </div>

  <div class="mb-4">
    <h4 class="fw-bold">Magazine Editor</h4>
    <p>1. Mujallah Lailatul Naat, Karachi , 1987</p>
    <p>2. Ieqan international center, Karachi, 1992</p>
    <p>3. Mujallah Naat Rang, 1995</p>
  </div>

  <div class="mb-4">
    <h4 class="fw-bold">Letters to Sabih Rehmani</h4>
    <p>1. ‘Naat Aur Aadab-e-Naat’ by Allama Kaukab Nurani</p>
    <p>2. ‘Naat Naamay’ by Dr. Sohail Shafique</p>
  </div>

  <div class="mb-4">
    <h4 class="fw-bold">Awards</h4>
    <p>1. Quaid-e-Azam Youth Award in 1993, Best Performance Award from Radio Pakistan Karachi in 1995</p>
    <p>2. National Seerat Award in 2004 and 2013 in praise of Naat Rang</p>
    <p>3. Canada Award 2002, First Award from Sindh Government 2007 (Hamd Khawani)</p>
    <p>4. Excellence award 2000, Creative Poet Award 2006, Europak Award 2007</p>
    <p>5. Best Performance Award, Radio Pakistan Karachi, 1995</p>
    <p>10. Tamgha e Imtiaz (Award of Excellence), 2018</p>
  </div>
</div>

<!-- Our Mission -->
<section class="mission-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image Column -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cover1.jpg" alt="Book Mockup" class="mission-image">
      </div>
      <!-- Text Column -->
      <div class="col-md-6 text-center text-md-start">
        <h2 class="mission-title mb-4">Aims & Objectives</h2>
        <p class="mission-text">1. Advance education, awareness and development of classical and modern Islamic writing, especially in the form of Naat Sharif.</p>
        <p class="mission-text">2. Publish information, material and literature through multimedia channels to raise public awareness of Naat Sharif.</p>
        <p class="mission-text">3. Organise lectures, symposia, conferences and open meetings to promote world class research of Naat Sharif.</p>
        <p class="mission-text">4. Deliver educational and study facilities, texts, courses, lectures and conducting research and developing new research collaboration between academic centres in the UK and abroad.</p>
        <p class="mission-text">5. Facilitate educational programs to enhance understanding of Islam</p>
        <p class="mission-text">6. Encourage interfaith dialogue and community cohesion and integration.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<?php get_template_part('cta-section'); ?>
<?php get_footer(); ?>
