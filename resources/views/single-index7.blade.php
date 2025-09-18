@extends('layouts.homepage')
@section('title', 'Home7')
@section('fav')

    <link rel="shortcut icon" href="{{ URL::asset('build/img/logo/fav-logo6.png') }}" type="image/x-icon">

@endsection 

<body class="homepage7-body">
@section('content')

<!--===== PRELOADER STARTS =======-->
<div class="preloader preloader7">
  <div class="loading-container">
    <div class="loading"></div>
    <div id="loading-icon"><img src="{{ URL::asset('build/img/logo/preloader6.png') }}" alt=""></div>
  </div>
</div>
<!--===== PRELOADER ENDS =======-->

<!--===== PROGRESS STARTS=======-->
<div class="paginacontainer">
     <div class="progress-wrap">
       <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
       </svg>
     </div>
   </div>
 <!--===== PROGRESS ENDS=======-->

   <!--=====HEADER START=======-->
   <header>
    <div class="header-area homepage7 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav id="navbar-example2" class="navbar">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index"><img src="{{ URL::asset('build/img/logo/logo8.png') }}" alt=""></a>
              </div>
              <div class="main-menu">
                <ul>
                    <li class="nav-item"><a href="#about" class="nav-link active"><span>About</span></a></li>
                    <li class="nav-item"><a href="#service" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#solution" class="nav-link"><span>Solution</span></a></li>
                    <li class="nav-item"><a href="#pricing" class="nav-link"><span>Pricing</span></a></li>
                    <li class="nav-item"><a href="#testimonial" class="nav-link"><span>Testimonials</span></a></li>
                    <li class="nav-item"><a href="#blog" class="nav-link"><span>Blogs</span></a></li>
                </ul>
              </div>

              <div class="btn-area">
                <a href="contact" class="header-btn13">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END =======-->

  <!--===== MOBILE HEADER STARTS =======-->
 <div class="mobile-header mobile-haeder7 d-block d-lg-none">
  <div class="container-fluid">
    <div class="col-12">
      <div class="mobile-header-elements">
        <div class="mobile-logo">
          <a href="index"><img src="{{ URL::asset('build/img/logo/logo2.png') }}" alt=""></a>
        </div>
        <div class="mobile-nav-icon dots-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-sidebar mobile-sidebar7">
  <div class="logosicon-area">
    <div class="logos">
      <img src="{{ URL::asset('build/img/logo/logo2.png') }}" alt="">
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
   </div>
  <div class="mobile-nav mobile-nav1">
    <ul class="mobile-nav-list nav-list1">
      <li><a href="#" >Home </a>
        <ul class="sub-menu">
          <li>
            <a href="#">Multiple Page</a>
            <ul class="sub-menu">
              <li><a href="index">Home One</a></li>
              <li><a href="index2">Home Two</a></li>
              <li><a href="index3">Home Three</a></li>
              <li><a href="index4">Home Four</a></li>
              <li><a href="index5">Home Five</a></li>
              <li><a href="index6">Home Six</a></li>
              <li><a href="index7">Home Seven</a></li>
              <li><a href="index8">Home Eight</a></li>
              <li><a href="index9">Home Nine</a></li>
              <li><a href="index10">Home Ten</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Landing Page</a>
            <ul class="sub-menu">
              <li><a href="single-index1" target="_blank">Home One</a></li>
              <li><a href="single-index2" target="_blank">Home Two</a></li>
              <li><a href="single-index3" target="_blank">Home Three</a></li>
              <li><a href="single-index4" target="_blank">Home Four</a></li>
              <li><a href="single-index5" target="_blank">Home Five</a></li>
              <li><a href="single-index6" target="_blank">Home Six</a></li>
              <li><a href="single-index7" target="_blank">Home Seven</a></li>
              <li><a href="single-index8" target="_blank">Home Eight</a></li>
              <li><a href="single-index9" target="_blank">Home Nine</a></li>
              <li><a href="single-index10" target="_blank">Home Ten</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="nav-item"><a href="#about" class="nav-link active"><span>About</span></a></li>
      <li class="nav-item"><a href="#service" class="nav-link"><span>Services</span></a></li>
      <li class="nav-item"><a href="#solution" class="nav-link"><span>Solution</span></a></li>
      <li class="nav-item"><a href="#pricing" class="nav-link"><span>Pricing</span></a></li>
      <li class="nav-item"><a href="#testimonial" class="nav-link"><span>Testimonials</span></a></li>
      <li class="nav-item"><a href="#blog" class="nav-link"><span>Blogs</span></a></li>
    </ul>

    <div class="allmobilesection">
      <a href="contact"  class="header-btn13">Get Started <i class="fa-solid fa-arrow-right"></i></a>
      <div class="single-footer">
        <h3>Contact Info</h3>
        <div class="footer1-contact-info">
          <div class="contact-info-single">
            <div class="contact-info-icon">
              <i class="fa-solid fa-phone-volume"></i>
            </div>
            <div class="contact-info-text">
              <a href="tel:+3(924)4596512">+3(924)4596512</a>
            </div>
          </div>

          <div class="contact-info-single">
            <div class="contact-info-icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="contact-info-text">
              <a href="mailto:info@example.com">info@example.com</a>
            </div>
          </div>

          <div class="single-footer">
            <h3>Our Location</h3>
            
            <div class="contact-info-single">
              <div class="contact-info-icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="contact-info-text">
                <a href="mailto:info@example.com" >55 East Birchwood Ave.Brooklyn, <br> New York 11201,United States</a>
              </div>
            </div>

          </div>
          <div class="single-footer">
            <h3>Social Links</h3>
            
            <div class="social-links-mobile-menu">
              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>
<!--===== MOBILE HEADER STARTS =======-->

<!--===== HERO AREA STARTS =======-->
<div class="hero7-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="hero7-header heading3">
          <h1 class="text-anime-style-3">Achieve Digital Excellence with Our Tailored Solutions</h1>
          <p>Boost your business with our cutting-edge digital marketing and SEO services. Our experienced team is committed to helping you reach your target audience.</p>
          <div class="space32"></div>
          <form>
            <span><i class="fa-solid fa-globe"></i></span>
            <input type="text" placeholder="yourwebsite.com">
            <button type="submit" class="header-btn14">Subscribe <i class="fa-solid fa-arrow-right"></i></button>
          </form>
          <div class="space32"></div>
          <div class="author-images">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/author-img1.png') }}" alt="">
            </div>
            <div class="stars">
              <ul>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
                <li><i class="fa-solid fa-star"></i></li>
              </ul>
              <p>850+ Reviews</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="header7-images">
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/header-img9.png') }}" alt="" class="header-img9">
          </div>
          <div class="img2">
            <img src="{{ URL::asset('build/img/all-images/header-img10.png') }}" alt="" class="header-img10">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="slider7-section-area sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 m-auto">
        <div class="sldier-head text-center">
          <p class="text-anime-style-3">We’ve Worked With Over 100+ Clients Around The World</p>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="slider-images-area owl-carousel">
          <div class="img1">
            <img src="{{ URL::asset('build/img/elements/brand-img1.png') }}" alt="">
          </div>
          <div class="img1">
            <img src="{{ URL::asset('build/img/elements/brand-img2.png') }}" alt="">
          </div>
          <div class="img1">
            <img src="{{ URL::asset('build/img/elements/brand-img3.png') }}" alt="">
          </div>
          <div class="img1">
            <img src="{{ URL::asset('build/img/elements/brand-img4.png') }}" alt="">
          </div>
          <div class="img1">
            <img src="{{ URL::asset('build/img/elements/brand-img5.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary rounded-2" tabindex="0">

<!--===== ABOUT AREA STARTS =======-->
<div class="about7-section-area sp1" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 m-auto">
        <div class="about-header text-center heading12">
          <h5>About Us </h5>
          <h2 class="text-anime-style-3">Unveiling the Faces And Mission Of Our Digital Marketing Agency</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="about-pera-list">
          <p data-aos="fade-right" data-aos-duration="800">We're not just another agency – we're your digital growth partners. With years of industry experience and a passion for innovation.</p>
          <div class="space8"></div>
          <div data-aos="fade-right" data-aos-duration="1000">
            <ul>
              <li><img src="{{ URL::asset('build/img/icons/check11.svg') }}" alt="">Digital Marketing</li>
              <li><img src="{{ URL::asset('build/img/icons/check11.svg') }}" alt="">Marketing Agency</li>
              <li><img src="{{ URL::asset('build/img/icons/check11.svg') }}" alt="">SEO Optimization</li>
              <li><img src="{{ URL::asset('build/img/icons/check11.svg') }}" alt="">First Working Process</li>
            </ul>
          </div>
          <div class="space32"></div>
          <div class="btn-area1" data-aos="fade-right" data-aos-duration="1200">
            <a href="about" class="header-btn13"> More About Us <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="about-images">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="img1">
                <img src="{{ URL::asset('build/img/all-images/about-img7.png') }}" alt="">
                <div class="counter-area">
                  <h2><span class="counter">16</span>K+</h2>
                  <p>Customer Satisfied</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
              <div class="space80 d-lg-block d-none"></div>
              <div class="space30 d-lg-none d-block"></div>
              <div class="img2">
                <img src="{{ URL::asset('build/img/all-images/about-img8.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="counter-boxarea">
          <div class="row">
            <div class="col-lg-12 col-md-6 col-6">
              <div class="counter-box" data-aos="zoom-out" data-aos-duration="800">
                <h2><span class="counter">500</span>+</h2>
                <p>Campaigns</p>
              </div>
            </div>

            <div class="col-lg-12 col-md-6 col-6">
              <div class="counter-box" data-aos="zoom-out" data-aos-duration="1000">
                <h2><span class="counter">98</span>%</h2>
                <p>Client Satisfaction</p>
              </div>
            </div>

            <div class="col-lg-12 col-md-6 col-6">
              <div class="counter-box" data-aos="zoom-out" data-aos-duration="1100">
                <h2><span class="counter">25</span>+</h2>
                <p>Country Reach</p>
              </div>
            </div>

            <div class="col-lg-12 col-md-6 col-6">
              <div class="counter-box" data-aos="zoom-out" data-aos-duration="1200">
                <h2><span class="counter">15</span>+</h2>
                <p>Certified Experts</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service7-section-area sp1" id="service">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="service-header text-center heading12">
          <h5>Our Service</h5>
          <h2 class="text-anime-style-3">Comprehensive Digital Marketing Solutions to Propel  Business Forward</h2>
        </div>
      </div>
    </div>
        <div class="all-service-box" data-aos="fade-up" data-aos-duration="800">
          <div class="row">
            <div class="col-lg-12">
              <div class="service-main-boxarea">
                <div class="service-images">
                  <div class="img1">
                    <img src="{{ URL::asset('build/img/all-images/service-img12.png') }}" alt="">
                  </div>
                  <div class="text">
                    <a href="service2">Search Engine Optimization</a>
                  </div>
                </div>
                <div class="pera">
                  <p>Elevate your online visibility and drive organic <br class="d-lg-block d-none"> traffic with our comprehensive SEO solutions. <br class="d-lg-block d-none"> We employ proven strategies..</p>
                </div>
                <div class="arrow">
                  <a href="service2"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="all-service-box" data-aos="fade-up" data-aos-duration="900">
          <div class="row">
            <div class="col-lg-12">
              <div class="service-main-boxarea">
                <div class="service-images">
                  <div class="img1">
                    <img src="{{ URL::asset('build/img/all-images/service-img13.png') }}" alt="">
                  </div>
                  <div class="text">
                    <a href="service3">(PPC) Advertising</a>
                  </div>
                </div>
                <div class="pera box2">
                  <p>Reach your target audience instantly and <br class="d-lg-block d-none"> generate qualified leads with our strategic PPC <br class="d-lg-block d-none"> advertising campaigns.</p>
                </div>
                <div class="arrow">
                  <a href="service2"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="all-service-box" data-aos="fade-up" data-aos-duration="1000">
          <div class="row">
            <div class="col-lg-12">
              <div class="service-main-boxarea">
                <div class="service-images">
                  <div class="img1">
                    <img src="{{ URL::asset('build/img/all-images/service-img14.png') }}" alt="">
                  </div>
                  <div class="text">
                    <a href="service5">Social Media Marketing</a>
                  </div>
                </div>
                <div class="pera box3">
                  <p>Engage and connect with your audience on <br class="d-lg-block d-none"> social media platforms with our result-driven <br class="d-lg-block d-none"> SMM strategies.</p>
                </div>
                <div class="arrow">
                  <a href="service5"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="all-service-box" data-aos="fade-up" data-aos-duration="1100">
          <div class="row">
            <div class="col-lg-12">
              <div class="service-main-boxarea">
                <div class="service-images">
                  <div class="img1">
                    <img src="{{ URL::asset('build/img/all-images/service-img15.png') }}" alt="">
                  </div>
                  <div class="text">
                    <a href="service5">Content Marketing</a>
                  </div>
                </div>
                <div class="pera box4">
                  <p>Our content marketing services encompass <br class="d-lg-block d-none"> everything from blog posts and articles to <br class="d-lg-block d-none"> infographics and videos, designed to boost.</p>
                </div>
                <div class="arrow">
                  <a href="service5"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="all-service-box" data-aos="fade-up" data-aos-duration="1200">
          <div class="row">
            <div class="col-lg-12">
              <div class="service-main-boxarea">
                <div class="service-images">
                  <div class="img1">
                    <img src="{{ URL::asset('build/img/all-images/service-img16.png') }}" alt="">
                  </div>
                  <div class="text">
                    <a href="service5">Web Design & Development</a>
                  </div>
                </div>
                <div class="pera box5">
                  <p>Make a lasting impression with a professionally <br class="d-lg-block d-none"> designed and user-friendly website. Our web <br class="d-lg-block d-none"> design and development...</p>
                </div>
                <div class="arrow">
                  <a href="service5"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="all-service-box" data-aos="fade-up" data-aos-duration="1300">
          <div class="row">
            <div class="col-lg-12">
              <div class="service-main-boxarea">
                <div class="row">
                  <div class="service-images">
                    <div class="img1">
                      <img src="{{ URL::asset('build/img/all-images/service-img17.png') }}" alt="">
                    </div>
                    <div class="text">
                      <a href="service4">Digital Marketing</a>
                    </div>
                  </div>
                </div>
                <div class="pera box6">
                  <p>Digital marketing encompasses a vast array of <br class="d-lg-block d-none"> strategies and tactics, ranging from search <br class="d-lg-block d-none"> engine optimization (SEO) </p>
                </div>
                <div class="arrow">
                  <a href="service4"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== WORK AREA STARTS =======-->
<div class="works7-section-area sp2" id="solution">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="works7-header heading12 text-center">
          <h5>SEO Solution</h5>
          <h2 class="text-anime-style-3">An Amazing Family Of SEO Solution For Every Need</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
        <div class="works-author-boxarea">
          <a href="#">Email Verification</a>
          <p>You might not think much about your email, they could actually determine hou many people see your emails</p>
          <div class="space24"></div>
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/works-img3.png') }}" alt="">
          </div>
          <div class="img2">
            <img src="{{ URL::asset('build/img/bg/work-bg3.png') }}" alt="">
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
        <div class="works-author-boxarea">
          <a href="#">Competitor Analysis</a>
          <p>If you send a lot of bounced or unwanted emails this will leave a negative mark on your sender history.</p>
          <div class="space24"></div>
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/works-img4.png') }}" alt="">
          </div>
          <div class="img2">
            <img src="{{ URL::asset('build/img/bg/work-bg4.png') }}" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
        <div class="works-author-boxarea">
          <a href="#">Revenue Monitoring</a>
          <p>You might not think much about your email, they could actually determine hou many people see your emails</p>
          <div class="space24"></div>
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/works-img5.png') }}" alt="">
          </div>
          <div class="img2">
            <img src="{{ URL::asset('build/img/bg/work-bg5.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== WORK AREA ENDS =======-->

<!--===== PRICING AREA STARTS =======-->
<div class="pricing7-section-area sp2" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="pricing-header heading12 text-center">
                    <h5 data-aos="fade-up" data-aos-duration="1000">Pricing & Plan</h5>
                    <h2 class="text-anime-style-1">SEOC <span>Pricing Plan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="800">
                <div class="pricing-boxarea">
                    <h4>Basic Plan - Starter</h4>
                    <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing plans tailored</p>
                    <h1>$999 <span>/monthly</span></h1>
                    <div class="space32"></div>
                    <div class="btn-area1">
                        <a href="pricing" class="header-btn13">Choose Your Plan <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="space32"></div>
                    <div class="list-area">
                        <h5>Service Include:</h5>
                        <ul>
                            <li><img src="{{ URL::asset('build/img/icons/check9.svg') }}" alt="" class="check9">Keyword Research</li>
                            <li><img src="{{ URL::asset('build/img/icons/check9.svg') }}" alt="" class="check9">One Page Optimization</li>
                            <li><img src="{{ URL::asset('build/img/icons/check9.svg') }}" alt="" class="check9">Basic Analytics Reporting</li>
                        </ul>
                    </div>
                    <div class="space24"></div>
                    <p class="pera">Small businesses or startups looking to <br class="d-lg-block d-none"> establish their online presence.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1000">
                <div class="pricing-boxarea active">
                    <h4>Standard Plan - Growth</h4>
                    <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing plans tailored</p>
                    <h1>$1999 <span>/monthly</span></h1>
                    <div class="space32"></div>
                    <div class="btn-area1">
                        <a href="pricing" class="header-btn13">Choose Your Plan <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="space32"></div>
                    <div class="list-area">
                        <h5>Service Include:</h5>
                        <ul>
                            <li><img src="{{ URL::asset('build/img/icons/check10.svg') }}" alt="" class="check9">Keyword Research</li>
                            <li><img src="{{ URL::asset('build/img/icons/check10.svg') }}" alt="" class="check9">One Page Optimization</li>
                            <li><img src="{{ URL::asset('build/img/icons/check10.svg') }}" alt="" class="check9">Basic Analytics Reporting</li>
                        </ul>
                    </div>
                    <div class="space24"></div>
                    <p class="pera">Small businesses or startups looking to <br class="d-lg-block d-none"> establish their online presence.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="1200">
                <div class="pricing-boxarea">
                    <h4>Premium Plan - Pro</h4>
                    <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing plans tailored</p>
                    <h1>$2999 <span>/monthly</span></h1>
                    <div class="space32"></div>
                    <div class="btn-area1">
                        <a href="pricing" class="header-btn13">Choose Your Plan <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="space32"></div>
                    <div class="list-area">
                        <h5>Service Include:</h5>
                        <ul>
                            <li><img src="{{ URL::asset('build/img/icons/check9.svg') }}" alt="" class="check9">Keyword Research</li>
                            <li><img src="{{ URL::asset('build/img/icons/check9.svg') }}" alt="" class="check9">One Page Optimization</li>
                            <li><img src="{{ URL::asset('build/img/icons/check9.svg') }}" alt="" class="check9">Basic Analytics Reporting</li>
                        </ul>
                    </div>
                    <div class="space24"></div>
                    <p class="pera">Small businesses or startups looking to <br class="d-lg-block d-none"> establish their online presence.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== PRICING AREA ENDS =======-->

<!--===== BOOST AREA STARTS =======-->
<div class="boost-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="boost-header heading12">
          <h5 data-aos="fade-right" data-aos-duration="800">Boost</h5>
          <h2 class="text-anime-style-3">Boost Google Search</h2>
          <p data-aos="fade-right" data-aos-duration="1000">Unlock the full potential of your website with our expert SEO services designed to boost your Google search rankings. In today’s digital age, being visible on search engines is crucial for driving organic traffic and growing your business.</p>
          <div class="space32"></div>
          <div class="bnt-area1" data-aos="fade-right" data-aos-duration="1200">
            <a href="about" class="header-btn13">Lets Find Out <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="images image-anime" data-aos="fade-left" data-aos-duration="1000">
          <img src="{{ URL::asset('build/img/all-images/boost-img1.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== BOOST AREA ENDS =======-->

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial1-section-area sp6" id="testimonial">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 m-auto">
        <div class="testimonial-header heading12 text-center">
          <h5>Testimonials</h5>
          <h2 class="text-anime-style-3">What Our Client Say On Google Reviews</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 m-auto" data-aos="fade-up" data-aos-duration="1000">
        <div class="testimonials-slider-area owl-carousel">
          <div class="testimonial-boxarea">
            <div class="row">
              <div class="col-lg-5">
                <div class="pera">
                  <p>"Working with SEOC has been a game-changer for our business. Their expertise in SEO and digital marketing has helped us achieve remarkable results and significantly increase our online visibility.</p>
                  <div class="space100"></div>
                  <div class="space30"></div>
                  <div class="list-area">
                    <div class="list">
                      <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                      <a href="team">John Doe</a>
                    </div>
                    <img src="{{ URL::asset('build/img/icons/google.svg') }}" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="images">
                  <img src="{{ URL::asset('build/img/all-images/testimonial-img1.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-boxarea">
            <div class="row">
              <div class="col-lg-5">
                <div class="pera">
                  <p>"Working with SEOC has been a game-changer for our business. Their expertise in SEO and digital marketing has helped us achieve remarkable results and significantly increase our online visibility.</p>
                  <div class="space100"></div>
                  <div class="space30"></div>
                  <div class="list-area">
                    <div class="list">
                      <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                      <a href="team">John Doe</a>
                    </div>
                    <img src="{{ URL::asset('build/img/icons/google.svg') }}" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="images">
                  <img src="{{ URL::asset('build/img/all-images/testimonial-img2.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-boxarea">
            <div class="row">
              <div class="col-lg-5">
                <div class="pera">
                  <p>"Working with SEOC has been a game-changer for our business. Their expertise in SEO and digital marketing has helped us achieve remarkable results and significantly increase our online visibility.</p>
                  <div class="space100"></div>
                  <div class="space30"></div>
                  <div class="list-area">
                    <div class="list">
                      <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                      </ul>
                      <a href="team">John Doe</a>
                    </div>
                    <img src="{{ URL::asset('build/img/icons/google.svg') }}" alt="">
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="images">
                  <img src="{{ URL::asset('build/img/all-images/testimonial-img2.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->

<!--===== BLOG AREA STARTS =======-->
<div class="blog7-section-area sp2" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <div class="blog4-header text-center heading12">
                    <h5 data-aos="fade-up" data-aos-duration="1000">Blog & News</h5>
                    <h2 class="text-anime-style-3">Our Latest Blog & News</h2>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6" data-aos="zoom-out" data-aos-duration="1000">
            <div class="blog-auhtor-boxarea">
              <div class="blog-content-area">
                <ul>
                  <li><a href="#"><i class="fa-regular fa-circle-user"></i>John Doe</a></li>
                  <li><a href="#"><i class="fa-solid fa-calendar-days"></i> 12 Feb 2024</a></li>
                </ul>
                <div class="space16"></div>
                <a href="blog-single">Social Media Marketing Strategies to Drive Engagement and Conversions</a>
                <div class="space16"></div>
                <p>Discover the latest trends and best practices in social media marketing with our comprehensive guide. Learn how to leverage different.</p>
                <a href="blog-single" class="readmore">Learn More<i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="space24"></div>
              <div class="img1">
               <figure class="image-anime">
                <img src="{{ URL::asset('build/img/all-images/blog-img25.png') }}" alt="">
               </figure>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6" data-aos="zoom-out" data-aos-duration="1200">
            <div class="blog-auhtor-boxarea">
              <div class="blog-content-area">
                <ul>
                  <li><a href="#"><i class="fa-regular fa-circle-user"></i>John Doe</a></li>
                  <li><a href="#"><i class="fa-solid fa-calendar-days"></i> 12 Feb 2024</a></li>
                </ul>
                <div class="space16"></div>
                <a href="blog-single">Content Marketing 101: How to Create Compelling Content That Converts</a>
                <div class="space16"></div>
                <p>Unlock the secrets to successful content marketing with our expert tips and strategies. Whether you're a beginner or a seasoned marketer. </p>
                <a href="blog-single" class="readmore">Learn More<i class="fa-solid fa-arrow-right"></i></a>
              </div>
              <div class="space24"></div>
              <div class="img1">
               <figure class="image-anime">
                <img src="{{ URL::asset('build/img/all-images/blog-img24.png') }}" alt="">
               </figure>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<!--===== BLOG AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta7-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="cta-header heading11 text-center">
          <h2 class="text-anime-style-3">Ready to Take Your Digital Marketing to the Next Level?</h2>
          <p data-aos="fade-up" data-aos-duration="1000">Effective SEO strategies not only elevate a website's visibility but also drive <br class="d-lg-block d-none"> targeted traffic, enhance user experience,</p>
          <div class="bnt-area1" data-aos="fade-up" data-aos-duration="1200">
            <a href="contact" class="header-btn14">Get Started Today <i class="fa-solid fa-arrow-right"></i></a>
            <a href="contact" class="header-btn14 btn2">Request A Consultation <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->

<!--===== FOOTER AREA STARTS =======-->
<div class="footer7-section-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-logo-area">
            <img src="{{ URL::asset('build/img/logo/logo8.png') }}" alt="">
            <p>By optimizing content, leveraging relevant keywords, and adhering to best practices, businesses can secure prominent position (SEO)</p>
            <ul>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook6.svg') }}" alt=""></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram6.svg') }}" alt=""></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin6.svg') }}" alt=""></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/twitter6.svg') }}" alt=""></a></li>
            </ul>
          </div>
        </div>
  
        <div class="col-lg-2 col-md-6">
          <div class="footer-logo-area1">
            <h3>About Link</h3>
            <ul>
              <li><a href="blog">Our Blog</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="service1">Services</a></li>
            <li><a href="case">Marketing</a></li>
            <li><a href="testimonials">Testimonials</a></li>
            <li><a href="contact">Contact Us</a></li>
            </ul>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="footer-logo-area2">
            <h3>Get in touch</h3>
            <ul>
              <li><a href="mailto"><img src="{{ URL::asset('build/img/icons/email.svg') }}" alt=""><span>Infoseoc@gmail.com</span></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/location.svg') }}" alt=""><span>8708 Technology Forest <br class="d-lg-block d-none"> Pl Suite 125 -G, The <br class="d-lg-block d-none"> Woodlands, TX 773</span></a></li>
              <li><a href="tel:123-456-7890"><img src="{{ URL::asset('build/img/icons/phone.svg') }}" alt=""><span>123-456-7890</span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="footer-logo-area3">
            <h3>Subscribe Our Newsletter</h3>
            <form action="#">
              <input type="text" placeholder="Enter Your email">
              <button class="header-btn13"> Subscribe</button>
            </form>
          </div>
        </div>
      </div>
      <div class="space80 d-lg-block d-none"></div>
      <div class="space40 d-lg-none d-block"></div>
      <div class="row">
        <div class="col-lg-12">
          <div class="copyright-area">
            <div class="pera">
              <p>ⓒCopyright 2024 SEOC . All rights reserved</p>
            </div>
            <ul>
              <li><a href="#">Terms & Conditions  |  Privacy Policy </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--===== FOOTER AREA ENDS =======-->
</div>

@endsection