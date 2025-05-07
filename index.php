<?php include 'header.php'; ?>
 <style>
     .hero-section {
    background: url('<?php echo get_template_directory_uri(); ?>/images/cover1.jpg') no-repeat center center;
    background-size: cover;
    height: 100vh;
    color: white;
    display: flex;
    align-items: center;
    position: relative;
  }
  .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.73);
  }
  .hero-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
    padding-left: 0px;
    padding-bottom: 100px;
   
  }
  .btn-custom {
    border: 1px solid #fff;
    color: #fff;
    background: transparent;
    padding: 10px 30px;
    border-radius: 30px;
    transition: all 0.3s ease;
  }
  .btn-custom:hover {
    background-color: #fff;
    color: #000;
  }
  body {
    background-color: #e0e0e0;
  }
  /* books carousel */
  .text-feature{
    font-size: 50px;
    text-align: center;

  }
  .book-card {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    height: 100%;
  }
  .book-card img {
    max-height: 200px;
    margin-bottom: 15px;
    
  }
  .book-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: #000000;
  }
  .carousel-inner {
    padding: 20px 0;
  }
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: rgb(0, 0, 0);
    border-radius: 50%;
  }
  /* about us */
  .about-section {
    background-color: #fff;
    padding: 60px 0;
  }
  .about-title {
    font-size: 50px;
    font-weight: ;
  }
  .about-subtitle {
    font-size: 1.2rem;
    font-weight: 600;
    margin-top: 20px;
  }
  .about-text {
    margin-top: 20px;
    line-height: 1.8;
    color: #333;
  }
  .about-btn {
    margin-top: 30px;
    border: 1px solid #000;
    padding: 10px 25px;
    border-radius: 50px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    color: #000;
  }
  .about-btn:hover {
    background-color: #333;
    color: #fff;
  }
  .about-image {
    max-width:115%;
    height: 550px;
  }

  /* testimonials */
body {
    background-color: #e5e5e5;
  }
  .testimonial {
    margin-bottom: 2rem;
  }
  .testimonial-icon {
    width: 60px;
    height: 60px;
    background-color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    margin-right: 15px;
  }
   
  </style>


<!-- Hero Section -->
<section class="hero-section">
  <div class="overlay"></div>
  <div class="container">
    <div class="hero-content text-white">
        <h1 class="display-2" style="font-weight:700;" >Welcome to Naat Research Center</h1>

      <p class="lead mt-3">Explore our library of powerful stories and creative minds.</p>
      <a href="#" class="btn btn-custom mt-4"><b>Browse More →</b></a>
    </div>
  </div>
</section>

<!-- Hero CArousel -->
 

<!-- carousel -->

<div class="container my-5">
    <h1 class="text-feature">FEATURED BOOKS</h1>
    <p class="text-center text-dark">By Top Authors</p>

    <div id="bookCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-4">
              <div class="book-card">
              <img src="<?php echo get_template_directory_uri(); ?>/images/book1.jpg" class="img-fluid" alt="Book 1">
              <div class="book-title">Aah e Sard</div>
                <p>Dard Kakorvi<br>Urdu</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="book-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/book2.jpg" class="img-fluid" alt="Book 2">
                <div class="book-title">Aameen (Hamdiya Deewan)</div>
                <p>Riyaz Majeez<br>Urdu</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="book-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/book3.jpg" class="img-fluid" alt="Book 3">
                <div class="book-title">Aqeedat k Phool</div>
                <p>Shakeel Farooqui<br>Urdu</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4" >
              <div class="book-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/book 4.jpg" class="img-fluid" alt="Book 4">
                <div class="book-title">Allah Bus</div>
                <p>Syed Zia uddin Naeem<br>Urdu</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="book-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/book5.jpg" class="img-fluid" alt="Book 5">
                <div class="book-title">Aks e Buturaab</div>
                <p>Abdul Majeed Chattha<br>Urdu</p>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="book-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/book6.jpg" class="img-fluid" alt="Book 6">
                <div class="book-title">Apni Zaban</div>
                <p>Fida Khalidi Dehelvi<br>Urdu</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#bookCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#bookCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="text-center mt-4">
      <a href="<?php echo get_permalink(16); ?>" class="text-dark fw-bold text-decoration-underline" style="font-size: 23px;">View More Books</a>
    </div>
  </div>


<!-- About Us -->

<section class="about-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left content -->
      <div class="col-md-6">
        <h1 class="about-title">Naat Research Center</h1>
        <!-- <p class="about-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
        <p class="about-text">
        Naat Research Centre (NRC) is a unique institution devoted to the genre of Naat among all the genres of Urdu poetry. This institution was established in Pakistan 1995 as a Charitable Trust. The purpose of the establishment is to collect, organize, explore, research and promote Naat literature and provide facilities for research in Naat’ literature.

NRC is the brain-child of Syed Sabih Rehmani who is known for his melodious recitation of Naat Sharif at religious and secular events in Pakistan and abroad. He has collected a significant amount of research on Naat literature.

Naat Research Centre (NRC) supports the delivery of educational and informational lectures and certificate courses on the subject and field of Naat Sharif in multiple languages. Under the Umbrella of Naat research Center we encourage accrediting and acknowledging works of Naat Sharif in all forms. We Provide assistance and guidance to students and awarding stipends and Work with institutions to promote Naat Sharif in particular and education in general.

We offer scholarships to qualifying students engaged in research of Naat Sharif, and publicise critical and academic research undertaken on Naat Sharif anywhere in the world.

NRC Partners educational institutions to increase knowledge, through Naat Sharif, in order to enhance understanding of different cultures and faiths, and Establish liaison with and aid the maintenance of educational and institutional centres whenever necessary and to make all possible efforts to promote general educational activities.
        </p>
        <a href="<?php echo get_permalink(10); ?>" class="about-btn">
          Read More About Us →
        </a>
      </div>
      <!-- Right image -->
      <div class="col-md-6 text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/images/book 7.jpg" alt="About Us" class="about-image">
      </div>
    </div>
  </div>
</section>


<!-- testimonials -->

<?php get_template_part('testimonials'); ?>
<!-- <div class="container py-5 text-center">
  <h1 class="mb-3" style="font-size: 50px;">TESTIMONIALS</h1>
  <p class="mb-5">What Our Readers Say</p>
  
  <div class="row text-start">
    <div class="col-md-6 testimonial">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="d-flex align-items-center">
        <div class="testimonial-icon">👤</div>
        <span class="testimonial-name"><b>John Doe</b></span>
      </div>
    </div>
    <div class="col-md-6 testimonial">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="d-flex align-items-center">
        <div class="testimonial-icon">👤</div>
        <span class="testimonial-name"><b>Emelia Hewitt</b></span>
      </div>
    </div>
    <div class="col-md-6 testimonial">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="d-flex align-items-center">
        <div class="testimonial-icon">👤</div>
        <span class="testimonial-name"><b>Leyla Grey</b></span>
      </div>
    </div>
    <div class="col-md-6 testimonial">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="d-flex align-items-center">
        <div class="testimonial-icon">👤</div>
        <span class="testimonial-name"><b>Lawson Carlson</b></span>
      </div>
    </div>
  </div>
</div> -->

<!-- CTA -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'footer.php'; ?>
</body>
</html>
