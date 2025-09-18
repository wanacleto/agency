@extends('layouts.homepage')
@section('title', 'Home10')
@section('fav')

    <link rel="shortcut icon" href="{{ URL::asset('build/img/logo/fav-logo9.png') }}" type="image/x-icon">

@endsection 


@section('content')
<body class="homepage10-body">
<!--===== PRELOADER STARTS =======-->
<div class="preloader preloader10">
  <div class="loading-container">
    <div class="loading"></div>
    <div id="loading-icon"><img src="{{ URL::asset('build/img/logo/preloader9.png') }}" alt=""></div>
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
   <header class="homepage10-body">
    <div class="header-area homepage10 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index"><img src="{{ URL::asset('build/img/logo/logo11.png') }}" alt=""></a>
              </div>
              <div class="main-menu">
                <ul>
                  <li><a href="#">Home <i class="fa-solid fa-angle-down"></i></a>
                    <div class="tp-submenu">
                      <div class="row">
                         <div class="col-lg-12">
                          <div class="all-images-menu">
                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/demo-img1.png') }}" alt="">
                                </div>
                                 <div class="homemenu-btn">
                                    <a class="header-btn17" href="index">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn17" href="single-index1" target="_blank">One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                 </div>
                              </div>
                              <div class="space20"></div>
                            </div>

                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/demo-img2.png') }}" alt="">
                                </div>
                                 <div class="homemenu-btn">
                                    <a class="header-btn17" href="index2"> Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn17" href="single-index2" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                 </div>
                              </div>
                              <div class="space20"></div>
                            </div>

                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/comming-soon.png') }}" alt="" class="commingsoon">
                                </div>
                                <div class="homemenu-btn">
                                  <a class="header-btn17" href="index3">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                  <div class="space16"></div>
                                  <a class="header-btn17" href="single-index3" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                               </div>
                              </div>
                              <div class="space20"></div>
                            </div>

                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/demo-img3.png') }}" alt="">
                                </div>
                                 <div class="homemenu-btn">
                                    <a class="header-btn17" href="index4">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn17" href="single-index4" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                 </div>
                              </div>
                              <div class="space20"></div>
                            </div>

                            <div class="images">
                              <div class="homemenu-thumb" style="margin: 0;">
                                <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/demo-img4.png') }}" alt="">
                                </div>
                                 <div class="homemenu-btn">
                                    <a class="header-btn17" href="index5">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn17" href="single-index5" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                 </div>
                              </div>
                              <div class="space20"></div>
                            </div>
                          </div>

                          <div class="all-images-menu">
                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/demo-img5.png') }}" alt="">
                                </div>
                                 <div class="homemenu-btn">
                                    <a class="header-btn17" href="index6">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn17" href="single-index6" target="_blank">One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                 </div>
                              </div>
                            </div>

                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/demo-img6.png') }}" alt="">
                                </div>
                                <div class="text">
                                  <h2>NEW</h2>
                                </div>
                                 <div class="homemenu-btn">
                                    <a class="header-btn17" href="index7"> Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn17" href="single-index7" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                 </div>
                              </div>
                            </div>

                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/demo-img7.png') }}" alt="" class="commingsoon">
                                </div>
                                <div class="text">
                                  <h2>NEW</h2>
                                </div>
                                <div class="homemenu-btn">
                                  <a class="header-btn17" href="index8">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                  <div class="space16"></div>
                                  <a class="header-btn17" href="single-index8" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                               </div>
                              </div>
                            </div>

                            <div class="images">
                              <div class="homemenu-thumb">
                                <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/demo-img8.png') }}" alt="">
                                </div>
                                <div class="text">
                                  <h2>NEW</h2>
                                </div>
                                 <div class="homemenu-btn">
                                    <a class="header-btn17" href="index9">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn17" href="single-index9" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                 </div>
                              </div>
                            </div>

                            <div class="images">
                              <div class="homemenu-thumb" style="margin: 0;">
                                <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/demo-img9.png') }}" alt="">
                                </div>
                                <div class="text">
                                  <h2>HOT</h2>
                                </div>
                                 <div class="homemenu-btn">
                                    <a class="header-btn17" href="index10">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn17" href="single-index10" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                 </div>
                              </div>
                            </div>
                          </div>
                         </div>
                      </div>
                   </div>
                  </li>
                  <li><a href="about">About</a></li>
                  <li><a href="#">Services <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="service1">Service One</a></li>
                      <li><a href="service2">Service Two</a></li>
                      <li><a href="service3">Service Three</a></li>
                      <li><a href="service4">Service Four</a></li>
                      <li><a href="service5">Service Five</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blogs <i class="fa-solid fa-angle-down"></i></a>
                  <ul class="dropdown-padding">
                    <li><a href="blog">Blog One</a></li>
                    <li><a href="blog-left">Blog Left</a></li>
                    <li><a href="blog-right">Blog Right</a></li>
                    <li><a href="blog-single">Blog Single</a></li>
                  </ul>
                  </li>
                  <li><a href="#">Pages <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="case">Case Study</a></li>
                      <li><a href="case-single">Case Study Single</a></li>
                      <li><a href="team">Our Team</a></li>
                      <li><a href="pricing">Pricing Plan</a></li>
                      <li><a href="testimonials">Testimonials</a></li>
                      <li><a href="faq">FAQ</a></li>
                      <li><a href="404">404</a></li>
                    </ul>
                  </li>
                  <li><a href="contact">Contact Us</a></li>
                </ul>
              </div>
              <div class="btn-area">
                <div class="search-icon header__search header-search-btn">
                  <a href="#"><img src="{{ URL::asset('build/img/icons/search-icon3.svg') }}" alt=""></a>
                </div>
                <a href="contact" class="header-btn17">Free Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>

              <div class="header-search-form-wrapper">
                <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
                <div class="header-search-container">
                    <form role="search" class="search-form">
                    <input type="search"  class="search-field" placeholder="Search …" value="" name="s">
                    <button type="submit" class="search-submit"><img src="{{ URL::asset('build/img/icons/search-icon3.svg') }}" alt=""></button>
                    </form>
                </div>
            </div>
            <div class="body-overlay"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END =======-->

  <!--===== MOBILE HEADER STARTS =======-->
 <div class="mobile-header mobile-haeder10 d-block d-lg-none">
  <div class="container-fluid">
    <div class="col-12">
      <div class="mobile-header-elements">
        <div class="mobile-logo">
          <a href="index"><img src="{{ URL::asset('build/img/logo/logo11.png') }}" alt=""></a>
        </div>
        <div class="mobile-nav-icon dots-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-sidebar mobile-sidebar10">
  <div class="logosicon-area">
    <div class="logos">
      <img src="{{ URL::asset('build/img/logo/logo11.png') }}" alt="">
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
      <li><a href="about">About</a></li>
      <li><a href="features">Services</a>
        <ul class="sub-menu">
          <li><a href="service1">Service One</a></li>
          <li><a href="service2">Service Two</a></li>
          <li><a href="service3">Service Three</a></li>
          <li><a href="service4">Service Four</a></li>
          <li><a href="service5">Service Five</a></li>
        </ul>
      </li>
      <li><a href="#">Blogs</a>
        <ul class="sub-menu">
          <li><a href="blog">Blog One</a></li>
          <li><a href="blog-left">Blog Left</a></li>
          <li><a href="blog-right">Blog Right</a></li>
          <li><a href="blog-single">Blog Single</a></li>
        </ul>
      </li>
      <li><a href="#">Pages</a>
        <ul class="sub-menu">
          <li><a href="case">Case Study One</a></li>
          <li><a href="case-single">Case Study Single</a></li>
          <li><a href="team">Our Team</a></li>
          <li><a href="pricing">Pricing Plan</a></li>
          <li><a href="testimonials">Testimonials</a></li>
          <li><a href="faq">FAQ</a></li>
          <li><a href="404">404</a></li>
        </ul>
      </li>
      <li><a href="contact">Contact Us</a></li>
    </ul>

    <div class="allmobilesection">
      <a href="contact"  class="header-btn17">Get Started <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
<div class="hero10-section-area">
  <img src="{{ URL::asset('build/img/elements/elements18.png') }}" alt="" class="elements18">
  <div class="bg1">
    <img src="{{ URL::asset('build/img/elements/elements19.png') }}" alt="">
  </div>
  <div class="bg2-elements">
    <img src="{{ URL::asset('build/img/elements/elements20.png') }}" alt="">
  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="hero-header-area heading15">
          <h1 class="text-anime-style-3">Grow Your Business Online</h1>
          <p data-aos="fade-left" data-aos-duration="800">At SEOC, we specialize in driving targeted traffic, and boosting conversions with our expert SEO and digital marketing services.</p>
          <div class="space32"></div>
          <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
            <a href="contact" class="header-btn17">Get Started <span><i class="fa-solid fa-arrow-right"></i></span></a>
            <a href="https://www.youtube.com/watch?v=Y8XpQpW5OVY" class="video-btn popup-youtube">
              <span class="play"><i class="fa-solid fa-play"></i></span>
              <span class="text">Play Videos</span>
            </a>
          </div>
          <div class="space32"></div>
          <div class="auhtor-area">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/author-img2.png') }}" alt="">
            </div>
            <div class="text">
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
      <div class="col-lg-1"></div>
      <div class="col-lg-6">
        <div class="imges">
          <img src="{{ URL::asset('build/img/all-images/header-img13.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="header10-bottom-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 m-auto">
        <div class="header-auhtor-area heading15 text-center">
          <h5>See How Well Your Page Is Optimized</h5>
          <h2 class="text-anime-style-3">Your SEO Score?</h2>
          <div class="space32 d-lg-block d-none"></div>
          <div class="space12 d-lg-none d-block"></div>
          <div class="header-form-area">
            <form>
              <span><i class="fa-solid fa-globe"></i></span>
              <input type="text" placeholder="Enter Your Website URL">
            </form>

            <form>
              <span><i class="fa-regular fa-envelope"></i></span>
              <input type="text" placeholder="Enter Your Email">
            </form>
            <div class="btn-area1">
              <button type="submit" class="header-btn17">Send <span><i class="fa-solid fa-arrow-right"></i></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div class="about10-section-area sp1" >
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="about-header text-center heading15">
          <h5>About Us </h5>
          <h2 class="text-anime-style-3">Your Trusted Partners for Innovative Strategies and Unmatched Success</h2>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="about-pera-list">
          <p data-aos="fade-right" data-aos-duration="800">We're not just another agency – <br class="d-lg-block d-none"> we're your digital growth partners. <br class="d-lg-block d-none"> With years of industry experience <br class="d-lg-block d-none"> and a passion for innovation.</p>
          <div class="space8"></div>
          <div data-aos="fade-right" data-aos-duration="1000">
            <ul>
              <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt="">Digital Marketing</li>
              <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt="">Marketing Agency</li>
              <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt="">SEO Optimization</li>
              <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt="">First Working Process</li>
            </ul>
          </div>
          <div class="space32"></div>
          <div class="btn-area1" data-aos="fade-right" data-aos-duration="1200">
            <a href="about" class="header-btn17"> More About Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="about-images reveal">
          <img src="{{ URL::asset('build/img/all-images/about-img10.png') }}" alt="">
        </div>
      </div>

      <div class="col-lg-3">
        <div class="counter-boxarea text-center">
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
<div class="service10-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 m-auto">
        <div class="service-header text-center heading15">
          <h5>Our Service</h5>
          <h2 class="text-anime-style-3">Transforming Your Digital Presence <br class="d-lg-block d-none"> Comprehensive & Innovative Marketing Solutions</h2>
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
                    <a href="service5">Search Engine Optimization</a>
                  </div>
                </div>
                <div class="pera">
                  <p>Elevate your online visibility and drive organic <br class="d-lg-block d-none"> traffic with our comprehensive SEO solutions. <br class="d-lg-block d-none"> We employ proven strategies..</p>
                </div>
                <div class="arrow">
                  <a href="service5"><i class="fa-solid fa-arrow-right"></i></a>
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
                  <a href="service3"><i class="fa-solid fa-arrow-right"></i></a>
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
                    <a href="service4">Social Media Marketing</a>
                  </div>
                </div>
                <div class="pera box3">
                  <p>Engage and connect with your audience on <br class="d-lg-block d-none"> social media platforms with our result-driven <br class="d-lg-block d-none"> SMM strategies.</p>
                </div>
                <div class="arrow">
                  <a href="service4"><i class="fa-solid fa-arrow-right"></i></a>
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
                    <a href="service4">Content Marketing</a>
                  </div>
                </div>
                <div class="pera box4">
                  <p>Our content marketing services encompass <br class="d-lg-block d-none"> everything from blog posts and articles to <br class="d-lg-block d-none"> infographics and videos, designed to boost.</p>
                </div>
                <div class="arrow">
                  <a href="service4"><i class="fa-solid fa-arrow-right"></i></a>
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
        <div class="row">
          <div class="col-lg-12">
            <div class="space50"></div>
            <div class="bnt-area1 text-center">
              <a href="service1" class="header-btn17"> View Our Services <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== SOLUTION AREA STARTS =======-->
<div class="solution-section-slider-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="soluion-header heading15">
          <div class="main-content">
            <h5>SEO Solution</h5>
            <h2 class="text-anime-style-3">An Amazing Family Of SEO <br class="d-md-block d-none"> Solution For Every Need</h2>
          </div>
          <div class="auhtor-area">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/author-img1.png') }}" alt="">
            </div>
            <div class="content">
              <h2><span class="counter">500</span>+</h2>
              <p>Campaigns</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="solution-slider-area owl-carousel">
          <div class="images-content-area">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/solution-img5.png') }}" alt="">
            </div>
            
            <div class="content-area heading15">
              <a href="case-single">Email Verification</a>
              <div class="space20"></div>
              <p>You might not think much about your email, they could actually determine hou many people see your emails</p>
              <div class="space32"></div>
              <a href="case-single" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>

          <div class="images-content-area">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/solution-img6.png') }}" alt="">
            </div>
            
            <div class="content-area heading15">
              <a href="case-single">Email Verification</a>
              <div class="space20"></div>
              <p>You might not think much about your email, they could actually determine hou many people see your emails</p>
              <div class="space32"></div>
              <a href="case-single" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>

          <div class="images-content-area">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/solution-img7.png') }}" alt="">
            </div>

            <div class="content-area heading15">
              <a href="case-single">Email Verification</a>
              <div class="space20"></div>
              <p>You might not think much about your email, they could actually determine hou many people see your emails</p>
              <div class="space32"></div>
              <a href="case-single" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>

          <div class="images-content-area">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/solution-img5.png') }}" alt="">
            </div>
            
            <div class="content-area heading15">
              <a href="case-single">Email Verification</a>
              <div class="space20"></div>
              <p>You might not think much about your email, they could actually determine hou many people see your emails</p>
              <div class="space32"></div>
              <a href="case-single" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>

          <div class="images-content-area">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/solution-img6.png') }}" alt="">
            </div>
            
            <div class="content-area heading15">
              <a href="case-single">Email Verification</a>
              <div class="space20"></div>
              <p>You might not think much about your email, they could actually determine hou many people see your emails</p>
              <div class="space32"></div>
              <a href="case-single" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>

          <div class="images-content-area">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/solution-img7.png') }}" alt="">
            </div>

            <div class="content-area heading15">
              <a href="case-single">Email Verification</a>
              <div class="space20"></div>
              <p>You might not think much about your email, they could actually determine hou many people see your emails</p>
              <div class="space32"></div>
              <a href="case-single" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== SOLUTION AREA ENDS =======-->

<!--===== PRICING AREA STARTS =======-->
<div class="pricing10-section-area sp2">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="pricing-header text-center heading15">
        <h5>Pricing Plan</h5>
        <h2 class="text-anime-style-3">SEOC Pricing Plan </h2>
      </div>
    </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
              <div class="pricing-boxarea">
                  <h4>Basic Plan - Starter</h4>
                  <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing plans tailored</p>
                  <h1>$999 <span>/monthly</span></h1>
                  <div class="btn-area1">
                    <a href="pricing" class="header-btn17">Choose Your Plan <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                  <div class="space32"></div>
                  <div class="list-area">
                      <h5>Service Include:</h5>
                      <ul>
                          <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Keyword Research</li>
                          <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">One Page Optimization</li>
                          <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
                      </ul>
                  </div>
                  <div class="space24"></div>
                  <p class="pera">Small businesses or startups looking to <br class="d-lg-block d-none"> establish their online presence.</p>
              </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
              <div class="pricing-boxarea active">
                  <h4>Standard Plan - Growth</h4>
                  <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing plans tailored</p>
                  <h1>$1999 <span>/monthly</span></h1>
                  <div class="btn-area1">
                    <a href="pricing" class="header-btn17">Choose Your Plan <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                  <div class="space32"></div>
                  <div class="list-area">
                      <h5>Service Include:</h5>
                      <ul>
                          <li><img src="{{ URL::asset('build/img/icons/check13.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check13.svg') }}" alt="" class="check3">Keyword Research</li>
                          <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check13.svg') }}" alt="" class="check3">One Page Optimization</li>
                          <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check13.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
                      </ul>
                  </div>
                  <div class="space24"></div>
                  <p class="pera">Growing businesses seeking to expand their reach and drive more traffic & conversions.</p>
              </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200">
              <div class="pricing-boxarea">
                  <h4>Premium Plan - Pro</h4>
                  <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing plans tailored</p>
                  <h1>$2999 <span>/monthly</span></h1>
                  <div class="btn-area1">
                    <a href="pricing" class="header-btn17">Choose Your Plan <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                  <div class="space32"></div>
                  <div class="list-area">
                      <h5>Service Include:</h5>
                      <ul>
                          <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Keyword Research</li>
                          <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">One Page Optimization</li>
                          <li><img src="{{ URL::asset('build/img/icons/check12.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
                      </ul>
                  </div>
                  <div class="space24"></div>
                  <p class="pera">Established businesses looking to dominate their industry online achieve maximum ROI.</p>
              </div>
          </div>
      </div>
  </div>
</div>
<!--===== PRICING AREA ENDS =======-->

<!--===== TEAM AREA STARTS =======-->
<div class="team10-section-area sp2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="team2-header-area text-center heading15">
          <h5>Our Team</h5>
          <h2 class="text-anime-style-3">Meet With Our Expert Team</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="800">
        <div class="team-boxarea">
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/team-img1.png') }}" alt="">
          </div>
          <ul>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook1.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram2.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin2.svg') }}" alt=""></a></li>
            <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/twitter1.svg') }}" alt=""></a></li>
          </ul>
          <div class="content">
            <a href="team">John Doe</a>
            <p>CEO & Founder</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
        <div class="team-boxarea">
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/team-img2.png') }}" alt="">
          </div>
          <ul>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook1.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram2.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin2.svg') }}" alt=""></a></li>
            <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/twitter1.svg') }}" alt=""></a></li>
          </ul>
          <div class="content">
            <a href="team">Jane Smith</a>
            <p>Digital Marketing Officer</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
        <div class="team-boxarea">
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/team-img3.png') }}" alt="">
          </div>
          <ul>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook1.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram2.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin2.svg') }}" alt=""></a></li>
            <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/twitter1.svg') }}" alt=""></a></li>
          </ul>
          <div class="content">
            <a href="team">Sarah Thompson </a>
            <p>Web Designer</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1400">
        <div class="team-boxarea">
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/team-img4.png') }}" alt="">
          </div>
          <ul>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook1.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram2.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin2.svg') }}" alt=""></a></li>
            <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/twitter1.svg') }}" alt=""></a></li>
          </ul>
          <div class="content">
            <a href="team">David Garcia</a>
            <p>Content Writer</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== TEAM AREA ENDS =======-->

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial10-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
        <div class="testimonial-header heading15 text-center">
          <h5>Testimonials</h5>
          <h2 class="text-anime-style-3">What Our Client Say</h2>
        </div>
      </div>
    </div>
    <div class="col-lg-6 m-auto" data-aos="zoom-out" data-aos-duretion="1200">
      <div class="testimonial2-owl-carousel-area owl-carousel">
        <div class="testimonial-author-box">
          <ul>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
          </ul>
          <p class="pera">“Partnering with SEOC has been a transformative experience for our business. Their comprehensive approach to digital marketing has not only elevated our online presence but also streamlined our marketing efforts across multiple channels.”</p>
          <div class="content-area">
            <div class="images-content">
              <div class="img1">
                <img src="{{ URL::asset('build/img/all-images/testimonial-img3.png') }}" alt="">
              </div>
              <div class="content">
                <a href="team">Orlando Schulist</a>
                <p>Company Owner</p>
              </div>
            </div>
            <img src="{{ URL::asset('build/img/icons/quito6.svg') }}" alt="" class="quito6">
          </div>
        </div>

        <div class="testimonial-author-box">
          <ul>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
          </ul>
          <p class="pera">We've had the pleasure of working with [Your Company Name] for several years now, and they have consistently exceeded our expectations in every aspect. From the initial consultation to ongoing support, their team has demonstrated a deep understanding.”</p>
          <div class="content-area">
            <div class="images-content">
              <div class="img1">
                <img src="{{ URL::asset('build/img/all-images/testimonial-img4.png') }}" alt="">
              </div>
              <div class="content">
                <a href="team">Ms. Timmy Harvey</a>
                <p>Company Owner</p>
              </div>
            </div>
            <img src="{{ URL::asset('build/img/icons/quito6.svg') }}" alt="" class="quito6">
          </div>
        </div>
        <div class="testimonial-author-box">
          <ul>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
            <li><i class="fa-solid fa-star"></i></li>
          </ul>
          <p class="pera">“Partnering with SEOC has been a transformative experience for our business. Their comprehensive approach to digital marketing has not only elevated our online presence but also streamlined our marketing efforts across multiple channels.”</p>
          <div class="content-area">
            <div class="images-content">
              <div class="img1">
                <img src="{{ URL::asset('build/img/all-images/testimonial-img3.png') }}" alt="">
              </div>
              <div class="content">
                <a href="team">Orlando Schulist</a>
                <p>Company Owner</p>
              </div>
            </div>
            <img src="{{ URL::asset('build/img/icons/quito6.svg') }}" alt="" class="quito6">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->

<!--===== BLOG AREA STARTS =======-->
<div class="blog10-section-area sp2">
  <div class="container">
      <div class="row">
          <div class="col-lg-9 m-auto">
              <div class="blog4-header text-center heading15">
                  <h5 data-aos="fade-up" data-aos-duration="1000">Blog & News</h5>
                  <h2 class="text-anime-style-3">Our Latest Blog & News</h2>
              </div>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6" data-aos="zoom-out" data-aos-duration="1000">
          <div class="blog-auhtor-boxarea">
            <div class="img1">
             <figure class="image-anime">
              <img src="{{ URL::asset('build/img/all-images/blog-img25.png') }}" alt="">
             </figure>
            </div>
            <div class="space24"></div>
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
          </div>
        </div>

        <div class="col-lg-6 col-md-6" data-aos="zoom-out" data-aos-duration="1200">
          <div class="blog-auhtor-boxarea">
            <div class="img1">
              <figure class="image-anime">
               <img src="{{ URL::asset('build/img/all-images/blog-img24.png') }}" alt="">
              </figure>
             </div>
             <div class="space24"></div>
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
          </div>
        </div>
      </div>
  </div>
</div>
<!--===== BLOG AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta10-section-area">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="images reveal image-anime">
            <img src="{{ URL::asset('build/img/all-images/cta-img2.png') }}" alt="">
        </div>
      </div>
      <div class="col-lg-8">
        <div class="cta-content-area">
          <h2 class="text-anime-style-3">Elevate Your Brand Online Partner with Us for Proven Digital Success</h2>
          <div class="space16"></div>
          <p>At SEOC, we believe that your brand has the potential to achieve greatness online. Our proven SEO and digital marketing strategies are designed to elevate your brand  drive significant growth.</p>
          <div class="space32"></div>
          <div class="btn-area1">
            <a href="contact" class="header-btn16">Schedule A Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->

<!--===== FOOTER AREA STARTS =======-->
<div class="footer10-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area">
          <img src="{{ URL::asset('build/img/logo/logo2.png') }}" alt="">
          <p>By optimizing content, leveraging relevant keywords, and adhering to best practices, businesses can secure prominent position (SEO)</p>
          <ul>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/youtube.svg') }}" alt=""></a></li>
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
            <button class="header-btn17"> Subscribe <span><i class="fa-solid fa-arrow-right"></i></span></button>
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
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#" class="m-0"> Privacy Policy </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== FOOTER AREA ENDS =======-->

@endsection