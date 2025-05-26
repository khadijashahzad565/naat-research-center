<?php
/**
 * Template Name: Authors
 */
get_header();
?>

<section class="authors-section">
  <div class="container">
    <h1>Meet Our Esteemed Authors</h1>
    <p>Explore the research and writings of scholars and writers dedicated to the rich traditions of Islamic studies and Naat</p>
  </div>
</section>

<!-- Author Carousel -->
<div class="container my-5">
  <div id="authorCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row text-center">
          <?php
          $authors = new WP_Query([
            'post_type' => 'author-carousel',
            'posts_per_page' => 4
          ]);

          if ($authors->have_posts()) :
            while ($authors->have_posts()) : $authors->the_post();
              $img = get_field('author-image');
              $name = get_field('author-name');
              $country = get_field('author-country');
          ?>
              <div class="col-md-3 mb-4">
                <?php if ($img) : ?>
                  <img src="<?php echo $img; ?>" class="img-fluid" style="max-width: 200px;" alt="<?php echo esc_attr($name); ?>">
                <?php endif; ?>
                <h5 class="mt-3"><?php echo esc_html($name); ?></h5>
                <p><?php echo esc_html($country); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-dark">More Detail</a>
              </div>
          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Content Section -->
<div class="container">
  <div class="text-center mb-2" style="margin: 130px 0;">
    <h1>MORE INFORMATION</h1>
    <h1 class="urdu-text text-center" style="margin-bottom: 80px;"><b>مزید معلومات </b></h1>
  </div>
  
  <div class="row" style="margin-bottom: 80px;">
    <div class="col-md-6 fw-dark">
      <p>The Naat Research Center is an academic and research institute dedicated to the development, analysis, and preservation of Naat literature. This center aims to safeguard classical and contemporary Naat literature and provide resources to promote the finest traditions of this poetic form.</p>
      <p>The center is actively involved in studying thematic aspects of Naat, establishing critical frameworks, translating Naat literature into various languages, and publishing well-documented research papers and books. It also works to revive and highlight the artistic and spiritual dimensions of Naat poetry.</p>
      <p>Our mission is to spread the love of the Holy Prophet ﷺ through academic and literary means. By connecting tradition with modern research methodologies, we strive to promote peace and spiritual growth through the universal message of Naat.</p>
      <p>We welcome scholars, poets, and students from all backgrounds to join us in this noble pursuit. Through collective efforts, we aim to enrich the field of Na'at literature and deepen its impact on hearts and minds. We strive to honor the sacred tradition of praising the Prophet Muhammad ﷺ.</p>
    </div>

    <div class="col-md-6 urdu-text">
      <p>نعت ریسرچ سینٹر ایک ایسا علمی و تحقیقی ادارہ ہے جو نعتیہ ادب کے فروغ، تحقیق، تدوین اور تشریح کے لیے وقف ہے۔ اس مرکز کا مقصد نعت کی قدیم و جدید روایتوں کو محفوظ کرنا، نئے لکھنے والوں کی رہنمائی کرنا اور نعتیہ ادب کو معیاری خطوط پر استوار کرنا ہے۔ ہم اس بات پر یقین رکھتے ہیں کہ نعت نہ صرف ادب کا اعلیٰ ترین اظہار ہے بلکہ روحانی تربیت کا ذریعہ بھی ہے۔</p>
      <p>اس ادارے میں نعتیہ مجموعوں کا مطالعہ، نعت نگاری کے اصولوں پر تحقیق، اور مختلف زبانوں میں نعتیہ ادب کا تجزیہ کیا جاتا ہے۔ ہمارے محققین نعت کے فنی، ادبی اور روحانی پہلوؤں پر گہرائی سے کام کرتے ہیں تاکہ آئندہ نسلوں کو ایک مضبوط علمی بنیاد فراہم کی جا سکے۔</p>
      <p>نعت ریسرچ سینٹر میں باقاعدہ کورسز، ورکشاپس، اور سیمینارز کا انعقاد کیا جاتا ہے جن کا مقصد نعت لکھنے اور پڑھنے کے سلیقے کو فروغ دینا ہے۔ ہم اس بات کے خواہاں ہیں کہ نعت کو نہ صرف ادب کی سطح پر بلکہ دینی اور روحانی تربیت کے ایک مؤثر وسیلے کے طور پر متعارف کروایا جائے۔</p>
      <p>ہمارا مشن ہے کہ نعت کے ذریعے عشقِ رسول ﷺ کو دلوں تک پہنچایا جائے، اور اس مقدس فن کو تحقیق و تدوین کے جدید تقاضوں سے ہم آہنگ کیا جائے۔</p>
      <p>نعت ریسرچ سینٹر ایک ایسا علمی و تحقیقی ادارہ ہے جو نعتیہ ادب کے فروغ، تحقیق، تدوین اور تشریح کے لیے وقف ہے۔ اس مرکز کا مقصد نعت کی قدیم و جدید روایتوں کو محفوظ کرنا، نئے لکھنے والوں کی رہنمائی کرنا اور نعتیہ ادب کو معیاری خطوط پر استوار کرنا ہے۔ ہم اس بات پر یقین رکھتے ہیں کہ نعت نہ صرف ادب کا اعلیٰ ترین اظہار ہے بلکہ روحانی تربیت کا ذریعہ بھی ہے۔</p>
    </div>
  </div>
</div>

<?php get_template_part('cta-section'); ?>
<?php get_footer(); ?>
