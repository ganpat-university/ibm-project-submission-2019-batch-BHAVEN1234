<?php
session_start();
  $memid=$_SESSION["memberid"];
    $memfname=$_SESSION["memberfname"];
    $memlname=$_SESSION["memberlname"];
    $x="welcome, ".$memfname." ".$memlname;
    echo "<script>alert('$x')</script>";
?>
<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="discrption" content="parallax one page">
    <meta name="keyword" content="agency, business, corporate, creative, freelancer, interior, joomla theme, K2 Blog, minimal, modern, multipurpose, personal, portfolio, responsive, simple">

    <title>Ner - Personal Portfolio Template</title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800,900%7cRaleway:300,400,500,600,700" rel="stylesheet">

    <!-- custom styles (optional) -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
  </head>
  <body>

    <!-- Loader
    ================================================== -->
    <<div id="preloader">
      <div class='loader-ring'>
        <div class='loader-ring-light'></div>
        <div class='loader-ring-track'></div>
      </div>
    </div>
    <!-- End Loader
    ================================================== -->


    <!-- Navbar
    ================================================== -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">

        <a class="navbar-brand" href="#">
          <img src="../../home/logo.png" alt="logo" class="logo-1">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fas fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php" data-scroll-nav="0">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../search doctor.php">Search Doctor</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../lab.php">Search laboratory</a>  
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../search caretaker.php">Search Caretaker</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="../home.php">Your Appointments</a>
            </li>
<!-- 
            <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="3">Services</a>
            </li> -->

           <!--  <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="4">Owr Work</a>
            </li> -->

           <!--  <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="5">Client</a>
            </li> -->
<!-- 
            <li class="nav-item">
              <a class="nav-link" href="#" data-scroll-nav="7">Contact</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar
    ================================================== -->


    <!-- Header
    ================================================== -->
    <header id="header" style="background-color: #207f88;" class="header particles-demo cover-bg">
      <!-- particles -->
     <!-- <div id="particles-js"></div> -->
      <div class="container h-100">
        <div class="row align-items-center h-100">

          <div class="col-12 caption">
            
            <h2 class="mt-20 mb-20">healOfy</h2>
                <h6 style="color: white;"><?php echo 'welcome'.'&nbsp&nbsp&nbsp'.$memfname.'&nbsp&nbsp'.$memlname;?></h6>
            <br><br><br>
            <div class="scoial-icon mt-20 text-center">
              <a href="#0"><span><i class="fab fa-facebook-f"></i></span></a>
              <a href="#0"><span><i class="fab fa-twitter"></i></span></a>
              <a href="#0"><span><i class="fab fa-linkedin-in"></i></span></a>
              <a href="#0"><span><i class="fab fa-instagram"></i></span></a>
              <a href="#0"><span><i class="fab fa-behance"></i></span></a>
            </div>
          </div>

        </div>
      </div>
    </header>
    <!-- End Header
    ================================================== -->


    <!-- About
    ================================================== -->
  <!--   <section id="about" class="about section-padding pb-0" data-scroll-index='1'>
      <div class="container">
        <div class="row align-items-center">

          <div class="section-title text-center">
            <p>Who am I</p> <br>
            <h3>About me<cite> .</cite></h3>
          </div>

          <div class="col-lg-6 sm-mb-30">
            <div class="part-photo">
              <img src="img/hero-about.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="part-text">
              <h4 class="mb-30">Hello</h4>
              <p class="pb-35"> I’m <strong> Jon Deo . </strong>  . I am a graphic designer, and I'm very passionate and dedicated to my work. With 7 years experience as a professional graphic designer, I have acquired the skills and knowledge necessary to make your project a success.</p>

              <div class="info mt-35">
                <ul>
                  <li>
                    <span class="title">Name</span>
                    <span class="value">Jon Deo</span>
                  </li>
                  <li>
                    <span class="title">Address</span>
                    <span class="value">Egypt</span>
                  </li>
                  <li>
                    <span class="title">Age</span>
                    <span class="value">29</span>
                  </li>
                  <li>
                    <span class="title">Phone</span>
                    <span class="value">+0123 123 456 789</span>
                  </li>
                </ul>
              </div>

              <a href="#" class="btn mt-10 mr-2"><span>Download CV</span></a>
              <a href="#" class="btn mt-10 btn-light"><span>Hire Me</span></a>
            </div>
          </div>

        </div>
      </div>
    </section> -->
    <!-- End About
    ================================================== -->


    <!-- Skills
    ================================================== -->
<!--     <section class="skills section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 sm-mb-50">
            <div class="part-text">
              <h4 class="mb-30">Make beauty Things With Passion.</h4>
              <p>I designer and developer services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface.</p>
              <a href="#" class="btn mt-30"><span>Read More</span></a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="part-skills">
              <div class="skills-item mb-30">
                <h6>CSS</h6>
                <div class="bar">
                  <span class="fill" data-width="87%"></span>
                </div>
                <div class="tip"></div>
              </div>

              <div class="skills-item mb-30">
                <h6>Javascript</h6>
                <div class="bar">
                  <span class="fill" data-width="75%"></span>
                </div>
                <div class="tip"></div>
              </div>

              <div class="skills-item mb-30">
                <h6>Photoshop</h6>
                <div class="bar">
                  <span class="fill" data-width="85%"></span>
                </div>
                <div class="tip"></div>
              </div>

              <div class="skills-item">
                <h6>Web Design</h6>
                <div class="bar">
                  <span class="fill" data-width="90%"></span>
                </div>
                <div class="tip"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Skills
    ================================================== -->


    <!-- Services
    ================================================== -->
    
    <!-- End Services
    ================================================== -->


    <!-- Hire me
    ================================================== -->
  <!--   <section  class="hire-me section-padding text-center cover-bg" data-image-src="img/bg-3.jpg" data-overlay='7'>
      <div class="container">

        <h2>Hire me for your next project</h2>

        <a href="#" class="btn mt-30"><span>Contact Me</span></a>

      </div>
    </section> -->
    <!-- End Hire me
    ================================================== -->


    <!-- portfolio
    ================================================== -->
   <!--  <section id="work" class="portfolio section-padding" data-scroll-index='4'>
      <div class="container">
        <div class="row">

          <div class="section-title text-center">
            <p>My Recent Work</p> <br>
            <h3>My Work<cite> .</cite></h3>
          </div>

          <div class="filtering text-center mb-50">
          <button type="button" data-filter='*' class="active">All</button>
          <button type="button" data-filter='.brand'>Brand</button>
          <button type="button" data-filter='.web'>Design</button>
          <button type="button" data-filter='.photo'>Photo</button>
        </div> -->

        <!-- gallery -->
  <!--       <div class="gallery ohidden no-padding col-12">

          <div class="col-lg-4 col-md-6 video web mb-30">
            <div class="item-img">
              <a class="single-image" href="img/portfolio/1.jpg"></a>
              <div class="part-img">
                <img src="img/portfolio/1.jpg" alt="image">
                <div class="overlay-img">
                  <h4>Web</h4>
                  <h6>Creative Design</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 brand mb-30">
            <div class="item-img">
              <a class="single-image" href="img/portfolio/2.jpg"></a>
              <div class="part-img">
                <img src="img/portfolio/2.jpg" alt="image">
                <div class="overlay-img">
                  <h4>Web</h4>
                  <h6>Creative Design</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 photo web mb-30">
            <div class="item-img video">
              <a class="single-image" href="img/portfolio/3.jpg"></a>
              <div class="part-img">
                <img src="img/portfolio/3.jpg" alt="image">
                <div class="overlay-img">
                  <h4>Web</h4>
                  <h6>Creative Design</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 brand photo sm-mb-30">
            <div class="item-img video">
              <a class="single-image" href="img/portfolio/4.jpg"></a>
              <div class="part-img">
                <img src="img/portfolio/4.jpg" alt="image">
                <div class="overlay-img">
                  <h4>Web</h4>
                  <h6>Creative Design</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 video sm-mb-30">
            <div class="item-img video">
              <a class="single-image" href="img/portfolio/5.jpg"></a>
              <div class="part-img">
                <img src="img/portfolio/5.jpg" alt="image">
                <div class="overlay-img">
                  <h4>Web</h4>
                  <h6>Creative Design</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 photo">
            <div class="item-img video">
              <a class="single-image" href="img/portfolio/6.jpg"></a>
              <div class="part-img">
                <img src="img/portfolio/6.jpg" alt="image">
                <div class="overlay-img">
                  <h4>Web</h4>
                  <h6>Creative Design</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </section> -->
    <!-- End portfolio
    ================================================== -->



    <!-- Blog
    ================================================== -->
  <section id="blog" class="blog section-padding" data-scroll-index='6'>
      <div class="container">
        <div class="row">

          <div class="section-title text-center">
            <!-- <p>See Latest News </p><br> -->
            <h3>Find doctors in top specialities<!-- <cite> .</cite> --></h3>
          </div>

          <div class="col-lg-4 sm-mb-30">
            <div class="blog-item">
              <div class="part-img">
                <img src="img/doctor catagory/Dentist.jpeg" alt="">
                <div class="post-info-category">
                  <!-- <a href="#">Creative</a> -->
                </div>
              </div>
              <div class="content">
                <div class="title">
                  <h4 class="mb-5"><a href="#">Dentist</a></h4>
                  <div class="meta">
                 <!--  <ul>
                    <li>04 April 2018</li>
                  </ul> -->
                </div>
                </div>
                <p>Teething troubles? Schedule a dental checkup</p>
                <!-- <div class="author">
                  <div class="part-img">
                    <img src="img/testimonial/02.jpg" alt="">
                  </div>
                  <div class="text">
                    <h5><a href="#">BY John Smith</a></h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 sm-mb-30">
            <div class="blog-item">
              <div class="part-img">
                <img src="img/doctor catagory/Gynecologist.png" alt="">
                <div class="post-info-category">
                  <!-- <a href="#">Illustrator</a> -->
                </div>
              </div>
              <div class="content">
                <div class="title">
                  <h4 class="mb-5"><a href="#">Gynecologist/Obstetrician</a></h4>
                  <div class="meta ">
                  <!-- <ul>
                    <li>04 April 2018</li>
                  </ul> -->
                </div>
                </div>
                <p>Explore for women’s health, pregnancy & infertility treatments</p>
                <!-- <div class="author">
                  <div class="part-img">
                    <img src="img/testimonial/02.jpg" alt="">
                  </div>
                  <div class="text">
                    <h5><a href="#">BY John Smith</a></h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="blog-item">
              <div class="part-img">
                <img src="img/doctor catagory/DietitianNutrition.jpg" alt="">
                <div class="post-info-category">
                  <!-- <a href="#">Branding</a> -->
                </div>
              </div>
              <div class="content">
                <div class="title">
                  <h4 class="mb-5"><a href="#">Dietitian/Nutrition</a></h4>
                  <div class="meta">
                  <!-- <ul>
                    <li>04 April 2018</li>
                  </ul> -->
                </div>
                </div>
                <p>Get guidance on eating right, weight management & sports nutrition</p>
               <!--  <div class="author">
                  <div class="part-img">
                    <img src="img/testimonial/03.jpg" alt="">
                  </div>
                  <div class="text">
                    <h5><a href="#">BY John Smith</a></h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 sm-mb-30">
            <div class="blog-item">
              <div class="part-img">
                <img src="img/doctor catagory/Physiotherapist.jpg" alt="">
                <div class="post-info-category">
                  <!-- <a href="#">Illustrator</a> -->
                </div>
              </div>
              <div class="content">
                <div class="title">
                  <h4 class="mb-5"><a href="#">Physiotherapist</a></h4>
                  <div class="meta ">
                  <!-- <ul>
                    <li>04 April 2018</li>
                  </ul> -->
                </div>
                </div>
                <p>Pulled a muscle? Get it treated by a trained physiotherapist</p>
                <!-- <div class="author">
                  <div class="part-img">
                    <img src="img/testimonial/02.jpg" alt="">
                  </div>
                  <div class="text">
                    <h5><a href="#">BY John Smith</a></h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 sm-mb-30">
            <div class="blog-item">
              <div class="part-img">
                <img src="img/doctor catagory/General surgeon.jpg" alt="">
                <div class="post-info-category">
                  <!-- <a href="#">Illustrator</a> -->
                </div>
              </div>
              <div class="content">
                <div class="title">
                  <h4 class="mb-5"><a href="#">General surgeon</a></h4>
                  <div class="meta ">
                  <!-- <ul>
                    <li>04 April 2018</li>
                  </ul> -->
                </div>
                </div>
                <p>Need to get operated? Find the right surgeon</p>
                <!-- <div class="author">
                  <div class="part-img">
                    <img src="img/testimonial/02.jpg" alt="">
                  </div>
                  <div class="text">
                    <h5><a href="#">BY John Smith</a></h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 sm-mb-30">
            <div class="blog-item">
              <div class="part-img">
                <img src="img/doctor catagory/Orthopedist.jpg" alt="">
                <div class="post-info-category">
                  <!-- <a href="#">Illustrator</a> -->
                </div>
              </div>
              <div class="content">
                <div class="title">
                  <h4 class="mb-5"><a href="#">Orthopedist</a></h4>
                  <div class="meta ">
                  <!-- <ul>
                    <li>04 April 2018</li>
                  </ul> -->
                </div>
                </div>
                <p>For Bone & Joints issues, spinal injuries & more</p>
                <!-- <div class="author">
                  <div class="part-img">
                    <img src="img/testimonial/02.jpg" alt="">
                  </div>
                  <div class="text">
                    <h5><a href="#">BY John Smith</a></h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>

          <div class="col-lg-4 sm-mb-30">
            <div class="blog-item">
              <div class="part-img">
                <img src="img/doctor catagory/General physician.jpg" alt="">
                <div class="post-info-category">
                  <!-- <a href="#">Illustrator</a> -->
                </div>
              </div>
              <div class="content">
                <div class="title">
                  <h4 class="mb-5"><a href="#">General physician</a></h4>
                  <div class="meta ">
                  <!-- <ul>
                    <li>04 April 2018</li>
                  </ul> -->
                </div>
                </div>
                <p>Find the right family doctor in your neighborhood</p>
                <!-- <div class="author">
                  <div class="part-img">
                    <img src="img/testimonial/02.jpg" alt="">
                  </div>
                  <div class="text">
                    <h5><a href="#">BY John Smith</a></h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>


          <div class="col-lg-4 sm-mb-30">
            <div class="blog-item">
              <div class="part-img">
                <img src="img/doctor catagory/Pediatrician.png" alt="">
                <div class="post-info-category">
                  <!-- <a href="#">Illustrator</a> -->
                </div>
              </div>
              <div class="content">
                <div class="title">
                  <h4 class="mb-5"><a href="#">Pediatrician</a></h4>
                  <div class="meta ">
                  <!-- <ul>
                    <li>04 April 2018</li>
                  </ul> -->
                </div>
                </div>
                <p>Child Specialists & Doctors for Infant</p>
                <!-- <div class="author">
                  <div class="part-img">
                    <img src="img/testimonial/02.jpg" alt="">
                  </div>
                  <div class="text">
                    <h5><a href="#">BY John Smith</a></h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>


          <div class="col-lg-4 sm-mb-30">
            <div class="blog-item">
              <div class="part-img">
                <img src="img/doctor catagory/Gastroenterologist.jpg" alt="">
                <div class="post-info-category">
                  <!-- <a href="#">Illustrator</a> -->
                </div>
              </div>
              <div class="content">
                <div class="title">
                  <h4 class="mb-5"><a href="#">Gastroenterologist</a></h4>
                  <div class="meta ">
                  <!-- <ul>
                    <li>04 April 2018</li>
                  </ul> -->
                </div>
                </div>
                <p>Explore for issues related to digestive system, liver, pancreas & like</p>
                <!-- <div class="author">
                  <div class="part-img">
                    <img src="img/testimonial/02.jpg" alt="">
                  </div>
                  <div class="text">
                    <h5><a href="#">BY John Smith</a></h5>
                  </div>
                </div> -->
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- End testimonial
    ================================================== -->

    <!-- End Contact
    ================================================== -->


    <!-- Footer
    ================================================== -->
   <!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <footer>
    <div class="container margin_60_35">
      <div class="row">
        <div class="col-lg-3 col-md-12">
          <p>
            <a href="index.php" title="Findoctor">
              <img src="logo.png" data-retina="true" alt="" width="163" height="36" class="img-fluid">
            </a>
          </p>
        </div>
        <div class="col-lg-3 col-md-4">
          <h5>About</h5>
          <ul class="links">
            <li><a href="#0">About us</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="#0">FAQ</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="register.html">Register</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4">
          <h5>Useful links</h5>
          <ul class="links">
            <li><a href="#0">Doctors</a></li>
            <li><a href="#0">Clinics</a></li>
            <li><a href="#0">Specialization</a></li>
            <li><a href="#0">Join as a Doctor</a></li>
            <li><a href="#0">Download App</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-4">
          <h5>Contact with Us</h5>
          <ul class="contacts">
            <li><a href="tel://61280932400"><i class="icon_mobile"></i> + 61 23 8093 3400</a></li>
            <li><a href="mailto:info@findoctor.com"><i class="icon_mail_alt"></i> help@findoctor.com</a></li>
          </ul>
          <div class="follow_us">
            <h5>Follow us</h5>
            <ul>
              <li><a href="#0"><i class="social_facebook"></i></a></li>
              <li><a href="#0"><i class="social_twitter"></i></a></li>
              <li><a href="#0"><i class="social_linkedin"></i></a></li>
              <li><a href="#0"><i class="social_instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/row-->
      <hr>
      <div class="row">
        <div class="col-md-8">
          <ul id="additional_links">
            <li><a href="#0">Terms and conditions</a></li>
            <li><a href="#0">Privacy</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <div id="copy">© 2023 healofy</div>
        </div>
      </div>
    </div>
  </footer>
  <!--/footer-->

  <div id="toTop"></div>
  <!-- Back to top button -->

  <!-- COMMON SCRIPTS -->
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/common_scripts.min.js"></script>
  <script src="js/functions.js"></script>

</body>
</html> 
    <!-- End Footer
    ================================================== -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/Migrate.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- scrollIt js -->
    <script src="js/scrollIt.min.js"></script>

    <!-- typed -->
    <script src="js/typed.js"></script>

    <!-- magnific-popup -->
		<script src="js/jquery.fancybox.min.js"></script>

		<!-- isotope.pkgd.min js -->
		<script src="js/isotope.pkgd.min.js"></script>

    <!-- particles js -->
    <script src="js/particles.js"></script>

    <!-- App js -->
    <script src="js/app.js"></script>

    <!-- validator js -->
    <script src="js/validator.js"></script>

    <!-- custom JavaScript -->
    <script src="js/custom.js"></script>

  </body>

<!-- Mirrored from ner.netlify.com/demo-particles.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Feb 2019 17:28:40 GMT -->
</html>
