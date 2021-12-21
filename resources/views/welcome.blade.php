<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Main | {{ $owner->name }}</title>
  <meta content="My name is {{ $owner->name }} and my job is {{ $owner->expertises }}" name="description">
  <meta content="{{ $owner->name }}, {{ $owner->expertises }}, about, portfolio, service, contact, resume, cv, social media, facts, education, experience " name="keywords">
  <meta name="author" content="{{ $owner->name }}">
  <meta name="page-topic" content="Resume">
  <meta name="page-type" content="Resume">
  <meta name="audience" content="Everyone">
  <!-- Favicons -->
  <link href="{{ $owner->favicon_url }}" rel="icon">
  <link href="{{ $owner->favicon_url }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.6.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- loader -->
  <div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          @if($visibilities->about)<li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>@endif
          @if($visibilities->resume)<li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>@endif
          @if($visibilities->portfolio)<li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>@endif
          @if($visibilities->service)<li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>@endif
          @if($visibilities->contact)<li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>@endif
        </ul>
      </nav><!-- .nav-menu -->

      <div class="profile">
        {{-- <img src="{{ $owner->avatar_url }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light mt-4"><a href="index.html">{{ $owner->name }}</a></h1> --}}
        <div class="social-links mt-3 text-center">
          @isset($owner->twitter)<a target="_blank" href="{{ $owner->twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>@endisset
          @isset($owner->facebook)<a target="_blank" href="{{ $owner->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>@endisset
          @isset($owner->instagram)<a target="_blank" href="{{ $owner->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>@endisset
          @isset($owner->linkedin)<a target="_blank" href="{{ $owner->linkedin }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>@endisset
          @isset($owner->github)<a target="_blank" href="{{ $owner->github }}" class="github"><i class="bx bxl-github"></i></a>@endisset
          @isset($owner->xing)<a target="_blank" href="{{ $owner->xing }}" class="github"><svg class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M753.92 85.333333c-18.346667 0-26.453333 11.52-32.853333 23.466667 0 0-265.386667 470.186667-273.066667 485.546667l174.08 320.853333c5.973333 11.093333 15.36 23.466667 34.133333 23.466667h122.88c7.68 0 13.226667-2.986667 16.213334-7.68 3.413333-5.546667 3.413333-12.373333 0-19.2l-173.653334-317.866667 272.64-481.706667a20.48 20.48 0 0 0 0.426667-19.2 19.541333 19.541333 0 0 0-16.64-7.68M236.8 253.866667c-7.253333 0-13.653333 2.133333-16.64 7.68-3.413333 5.546667-2.986667 11.946667 0.853333 18.773333l82.773334 145.066667-130.56 230.4c-2.56 6.826667-2.56 13.653333 0 19.2 2.986667 5.12 8.533333 7.68 15.786666 7.68h123.306667c18.346667 0 27.306667-11.946667 33.706667-23.466667 0 0 127.573333-225.706667 132.693333-234.666667L394.24 277.333333c-5.973333-11.093333-15.36-23.466667-34.56-23.466666" fill="" /></svg></a>@endisset
        </div>
      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section style="background-image: url('{{ $owner->bg_url }}'); background-size: cover" id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{ $owner->name }}</h1>
    </div>
    
       <p><span class="typed" data-typed-items="{{ $owner->expertises }}"></span></p>  
  </section><!-- End Hero -->

  <main id="main">
<!-- ======= About Section ======= -->
    @if ($visibilities->about) 
      <section id="about" class="about">
        <div class="container">

          <div class="section-title">
            <h2>About</h2>
            <p>{{ $owner->about_text1 }}</p>
          </div>

          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="{{ $owner->avatar_url }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>{{ $owner->about_header }}</h3>
              <p class="fst-italic">
                {{ $owner->about_text2 }}
              </p>
              {{-- <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bx bx-phone bx-md"></i> <strong><a href="tel:{{ $owner->phone }}">{{ $owner->phone }}</a></strong></li>
                    <li><i class="bx bx-current-location bx-md"></i><strong><a href="#">{{ $owner->city }}</a></strong></li>
                    <li><i class="bx bx-mail-send bx-md"></i> <strong><a href="mailto:{{ $owner->email }}">{{ $owner->email }}</a></strong> </li>
                  </ul>
                </div>
              </div> --}}
              <p>{{ $owner->about_text3 }}</p>
              {{-- <div class="text-center mt-5"><a target="_blank" href="{{ $owner->resume_url }}" class="btn btn-primary text-white">Download resume</a></div> --}}
            </div>
          </div>

        </div>
      </section><!-- End About Section -->
    @endif

    <!-- ======= Facts Section ======= -->
      @if ($visibilities->fact)
      <section id="facts" class="facts">
        <div class="container">
  
          <div class="section-title">
            <h2>Facts</h2>
            <p>{{ $owner->facts_text }}</p>
          </div>
  
          <div class="row no-gutters">
  
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $facts->clients_number }}" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>{{ $facts->clients_title }}</strong></p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="count-box">
                <i class="bi bi-journal-richtext"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $facts->projects_number }}" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>{{ $facts->projects_title }}</strong></p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="count-box">
                <i class="bi bi-headset"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $facts->hours_number }}" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>{{ $facts->hours_title }}</strong></p>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $facts->workers_number }}" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>{{ $facts->workers_title }}</strong></p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Facts Section -->
      @endif

    <!-- ======= Skills Section ======= -->
    @if ($visibilities->skill)
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>{{ $owner->skills_text }}</p>
        </div>

        <div class="row skills-content">

         @for ($i = 0; $i < count($skills); $i++)

           @if ($i % 2 != 0)
           <div class="col-lg-6" data-aos="fade-up">
              <div class="progress">
                <span class="skill">{{ $skills[$i]->skill_name }} <i class="val">{{ $skills[$i]->skill_percentage }}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills[$i]->skill_percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
           @endif

           @if ($i % 2 == 0)   
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="progress">
                <span class="skill">{{ $skills[$i]->skill_name }}<i class="val">{{ $skills[$i]->skill_percentage }}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills[$i]->skill_percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
           @endif
         @endfor
         
        </div>
      </div>
    </section><!-- End Skills Section -->
    @endif
   

    <!-- ======= Resume Section ======= -->
    @if ($visibilities->resume)
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>{{ $owner->resume_text }}</p>
        </div>

        <div class="row">
          
          @if ($visibilities->experience)
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Professional Experience</h3>

              @foreach ($experiences as $experience )
              <div class="resume-item">
                <h4>{{ $experience->experience_title }}</h4>
                <h5>{{ $experience->experience_date }}</h5>
                <p><em>{{ $experience->experience_location }} </em></p>
                <ul>
                  @foreach ($experience->descriptions as $description)
                    <li>{{ $description->experience_description_text }}</li>
                  @endforeach
                </ul>
              </div>
              @endforeach
              
            </div>
          @endif 

           @if ($visibilities->education)
            <div class="col-lg-6" data-aos="fade-up">

              {{-- <h3 class="resume-title">Sumary</h3>
              <div class="resume-item pb-0">
                <h4>Alex Smith</h4>
                <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                <ul>
                  <li>Portland par 127,Orlando, FL</li>
                  <li>(123) 456-7891</li>
                  <li>alice.barkley@example.com</li>
                </ul>
              </div> --}}

              <h3 class="resume-title">Education</h3>
              @foreach ( $educations as $education )
                <div class="resume-item">
                  <h4>{{ $education->education_title }}</h4>
                  <h5>{{ $education->education_date }}</h5>
                  <p><em>{{ $education->education_location }}</em></p>
                  <p>{{ $education->education_description }}</p>
                </div>
              @endforeach

              <h3 class="resume-title">Languages</h3>
              

              <div id="skills" class="skills ">
               
          
          
                  <div class="row skills-content">
          
                     <div class="col-lg-7" data-aos="fade-up">
                        <div class="progress">
                          <span class="skill">English<i class="val">90</i></span>
                          <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                     <div class="col-lg-7" data-aos="fade-up">
                        <div class="progress">
                          <span class="skill">Deutsch<i class="val">80</i></span>
                          <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                     <div class="col-lg-7" data-aos="fade-up">
                        <div class="progress">
                          <span class="skill">Persian(Native) <i class="val">100</i></span>
                          <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                   
            
                </div>
              </div>
             
             
            </div>

            
          @endif        
        </div>
      </div>
    </section><!-- End Resume Section -->
    @endif

<!-- ======= Portfolio Section ======= -->
    @if ($visibilities->portfolio)
      <section id="portfolio" class="portfolio section-bg">
        <div class="container">

          <div class="section-title">
            <h2>Portfolio</h2>
            <p>{{ $owner->portfolio_text }}</p>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                @foreach ($categories as $category)
                  <li data-filter=".filter-{{ $category }}">{{ $category }}</li>
                @endforeach       
              </ul>
            </div>
          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            @foreach ($portfolios as $portfolio )
              <div class="col-lg-4 col-md-6 portfolio-item @foreach( explode(',', $portfolio->portfolio_category) as $category) filter-{{ $category }}@endforeach">
                <div class="portfolio-wrap">
                  <img src="{{ $portfolio->portfolio_image_link }}" class="img-fluid" alt="{{ $portfolio->portfolio_title }}">
                  <div class="portfolio-links">
                    <a href="{{ $portfolio->portfolio_image_link }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $portfolio->portfolio_title }} - {{ $portfolio->portfolio_description }}"><i class="bx bx-plus"></i></a>
                    <a target="_blank" href="{{ $portfolio->portfolio_link }}" title="See link"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section><!-- End Portfolio Section -->
    @endif

    <!-- ======= Services Section ======= -->
    @if ($visibilities->service)
      <section id="services" class="services">
        <div class="container">

          <div class="section-title">
            <h2>Services</h2>
            <p>{{ $owner->services_text }}</p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>
      </section><!-- End Services Section -->
    @endif
  
    <!-- ======= Testimonials Section ======= -->
    @if ($visibilities->testimonial)
      <section id="testimonials" class="testimonials section-bg">
        <div class="container">

          <div class="section-title">
            <h2>Testimonials</h2>
            <p>{{ $owner->testimonials_text }}</p>
          </div>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              @foreach ($testimonials as $testimonial )
              <div class="swiper-slide">
                <div class="testimonial-item" data-aos="fade-up">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{ $testimonial->testimonial_text }}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="{{ $testimonial->testimonial_image_url }}" class="testimonial-img" alt="">
                  <h3>{{ $testimonial->testimonial_name }}</h3>
                  <h4>{{ $testimonial->testimonial_job }}</h4>
                </div>
              </div><!-- End testimonial item -->
              @endforeach
        
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Testimonials Section -->
    @endif
    
    <!-- ======= Contact Section ======= -->
    @if ($visibilities->contact)
      <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Contact</h2>
            <p>{{ $owner->contact_text }}</p>
          </div>

          <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address"> 
                  <i class="bi bi-geo-alt"></i>
                  <p class="pt-2"><strong><a href="#">{{ $owner->address }}</a></strong></p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <p class="pt-2"><strong><a href="mailto:{{ $owner->email }}">{{ $owner->email }}</a></strong></p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <p class="pt-2"><strong><a href="tel:{{ $owner->phone }}">{{ $owner->phone }}</a></strong></p>
                </div>

                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> --}}
              </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="contactForm" method="post" role="form" class="php-email-form">
                @csrf
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="text" rows="10" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
    @endif
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><script>document.write(window.location.host)</script></span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade </a>, <a href="https://masoudsam.com/">Masoud Sam</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>