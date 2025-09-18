@extends('layouts.homepage')
@section('title', 'Home8')
@section('fav')

    <link rel="shortcut icon" href="{{ URL::asset('build/img/logo/fav-logo7.png') }}" type="image/x-icon">

@endsection 

<body class="homepage8-body">
@section('content')

<!--===== PRELOADER STARTS =======-->
<div class="preloader preloader8">
  <div class="loading-container">
    <div class="loading"></div>
    <div id="loading-icon"><img src="{{ URL::asset('build/img/logo/preloader7.png') }}" alt=""></div>
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
    <div class="header-area homepage8 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index"><img src="{{ URL::asset('build/img/logo/logo9.png') }}" alt=""></a>
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
                                    <a class="header-btn15" href="index">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn15" href="single-index1" target="_blank">One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                    <a class="header-btn15" href="index2"> Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn15" href="single-index2" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                  <a class="header-btn15" href="index3">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                  <div class="space16"></div>
                                  <a class="header-btn15" href="single-index3" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                    <a class="header-btn15" href="index4">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn15" href="single-index4" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                    <a class="header-btn15" href="index5">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn15" href="single-index5" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                    <a class="header-btn15" href="index6">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn15" href="single-index6" target="_blank">One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                    <a class="header-btn15" href="index7"> Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn15" href="single-index7" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                  <a class="header-btn15" href="index8">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                  <div class="space16"></div>
                                  <a class="header-btn15" href="single-index8" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                    <a class="header-btn15" href="index9">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn15" href="single-index9" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                                    <a class="header-btn15" href="index10">Multi Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="space16"></div>
                                    <a class="header-btn15" href="single-index10" target="_blank"> One Page <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                  <a href="#"><img src="{{ URL::asset('build/img/icons/search-icons2.svg') }}" alt=""></a>
                </div>
                <a href="contact" class="header-btn15">Free Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>

              <div class="header-search-form-wrapper">
                <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
                <div class="header-search-container">
                    <form role="search" class="search-form">
                    <input type="search"  class="search-field" placeholder="Search …" value="" name="s">
                    <button type="submit" class="search-submit"><img src="{{ URL::asset('build/img/icons/search-icons2.svg') }}" alt=""></button>
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
 <div class="mobile-header mobile-haeder8 d-block d-lg-none">
  <div class="container-fluid">
    <div class="col-12">
      <div class="mobile-header-elements">
        <div class="mobile-logo">
          <a href="index"><img src="{{ URL::asset('build/img/logo/logo9.png') }}" alt=""></a>
        </div>
        <div class="mobile-nav-icon dots-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-sidebar mobile-sidebar8">
  <div class="logosicon-area">
    <div class="logos">
      <img src="{{ URL::asset('build/img/logo/logo9.png') }}" alt="">
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
      <a href="contact"  class="header-btn15">Get Started <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
<div class="hero8-section-area">
    <img src="{{ URL::asset('build/img/elements/elements16.png') }}" alt="" class="elements16 keyframe5">
    <img src="{{ URL::asset('build/img/elements/elements17.png') }}" alt="" class="elements17 aniamtion-key-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="hero8-header text-center heading1">
                    <h1 class="text-anime-style-3">Drive Traffic, Boost Sales, Grow Your Brand</h1>
                    <p>Experience unparalleled growth with comprehensive SEO and digital marketing services.</p>
                    <div class="space32"></div>
                    <form>
                        <span class="global"><i class="fa-solid fa-globe"></i></span>
                        <input type="text" placeholder="Enter Your Website URL">
                        <div class="btn-area1">
                            <button class="header-btn15" type="submit">Get Instant Result <span><i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ URL::asset('build/img/elements/star8.png') }}" alt="" class="star8 keyframe6">
    <img src="{{ URL::asset('build/img/elements/star8.png') }}" alt="" class="star9 keyframe6">
    <div class="space80"></div>
    <div class="bottom-img reveal">
        <img src="{{ URL::asset('build/img/all-images/header-img11.png') }}" alt="">
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div class="about8-section-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="counter-area heading13">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-6" data-aos="fade-left" data-aos-duration="800">
                            <div class="counter-box">
                                <h3><span>500</span>+</h3>
                                <p>Campaigns</p>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6 col-6" data-aos="fade-left" data-aos-duration="900">
                            <div class="counter-box">
                                <h3><span>98</span>%</h3>
                                <p>Client Satisfaction</p>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6 col-6"data-aos="fade-left" data-aos-duration="1000">
                            <div class="counter-box">
                                <h3><span>25</span>+</h3>
                                <p>Country Reach</p>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6 col-6" data-aos="fade-left" data-aos-duration="1200">
                            <div class="counter-box after">
                                <h3><span>15</span>+</h3>
                                <p>Certified Experts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="images" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{ URL::asset('build/img/all-images/about-img9.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about8-header heading13">
                    <h5 data-aos="fade-right" data-aos-duration="800">About Us</h5>
                    <h2 class="text-anime-style-3">Meet the Experts Behind Your Online Success</h2>
                    <p data-aos="fade-right" data-aos-duration="1000">SEOC is more than just an SEO and digital marketing agency – we are a team of passionate professionals committed to your success. Our journey began with a simple goal: to help businesses navigate the complex digital landscape and achieve measurable growth. </p>
                    <div class="space32"></div>
                    <div class="btn-area1" data-aos="fade-right" data-aos-duration="1200">
                        <a href="about" class="header-btn15">Discover More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service8-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 m-auto">
        <div class="service-header-area heading13 text-center">
            <h5>Our Service</h5>
          <h2 class="text-anime-style-3">Unveiling The Faces And Mission Of Our Digital Marketing Agency</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="service-all-boxes-area">
          <div class="service-boxarea" data-aos="zoom-in" data-aos-duration="800">
            <a href="service5">Search Engine Optimization ( SEO)</a>
            <div class="space40"></div>
            <img src="{{ URL::asset('build/img/icons/service-icons19.svg') }}" alt="">
            <div class="space40"></div>
            <p>Enhance your online visibility & drive organic traffic with our advanced SEO techniques. We optimize your website to rank higher.</p>
          </div>

          <div class="service-boxarea box2" data-aos="zoom-in" data-aos-duration="1000">
            <a href="service3">Pay-Per-Click (PPC) Advertising</a>
            <div class="space40"></div>
            <img src="{{ URL::asset('build/img/icons/service-icons20.svg') }}" alt="">
            <div class="space40"></div>
            <p>Reach your audience instantly and drive qualified leads with targeted PPC campaigns. Our experts craft compelling ad copy and optimize.</p>
          </div>

          <div class="service-boxarea box3" data-aos="zoom-in" data-aos-duration="1200">
            <a href="service2">Social Media Marketing</a>
            <div class="space66"></div>
            <img src="{{ URL::asset('build/img/icons/service-icons21.svg') }}" alt="">
            <div class="space40"></div>
            <p>Build a strong brand presence and engage with your audience on social media platforms. We create strategic social media campaigns to boost brand.</p>
          </div>

          <div class="service-boxarea box4" data-aos="zoom-in" data-aos-duration="1400">
            <a href="service4">Website Design and Development</a>
            <div class="space40"></div>
            <img src="{{ URL::asset('build/img/icons/service-icons22.svg') }}" alt="">
            <div class="space40"></div>
            <p>Make a lasting impression with a professionally designed and user-friendly website. Our web design and development services ensure website.</p>
          </div>
        </div>
        <div class="space40"></div>
        <div class="btn-area1 text-center">
            <a href="service1" class="header-btn15">View More Service <span><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== CASE AREA STARTS =======-->
<div class="case8-section-area sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="case-header heading13">
          <h5 data-aos="fade-up" data-aos-duration="1000">Case Study</h5>
          <h2 class="text-anime-style-3">Our Case Studies</h2>
          <div class="btn-area1" data-aos="fade-up" data-aos-duration="1200">
            <a href="case" class="header-btn15">Schedule a Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="case-study-sliderarea owl-carousel">
         <div class="author-case-area">
          <div class="img1 reveal image-anime">
            <img src="{{ URL::asset('build/img/all-images/case-img19.png') }}" alt="">
          </div>
          <div class="content-area">
            <div class="content">
              <a href="case-single">SEO Optimization</a>
              <div class="space16"></div>
              <p>We began by optimizing Steve <br> Jons website for relevant...</p>
            </div>
            <div class="arrow">
              <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
         </div>
         <div class="author-case-area">
          <div class="img1 reveal image-anime">
            <img src="{{ URL::asset('build/img/all-images/case-img20.png') }}" alt="">
          </div>
          <div class="content-area">
            <div class="content">
              <a href="case-single">SEO Optimization</a>
              <div class="space16"></div>
              <p>We began by optimizing Steve <br> Jons website for relevant...</p>
            </div>
            <div class="arrow">
              <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
         </div>
         <div class="author-case-area">
          <div class="img1 reveal image-anime">
            <img src="{{ URL::asset('build/img/all-images/case-img21.png') }}" alt="">
          </div>
          <div class="content-area">
            <div class="content">
              <a href="case-single">SEO Optimization</a>
              <div class="space16"></div>
              <p>We began by optimizing Steve <br> Jons website for relevant...</p>
            </div>
            <div class="arrow">
              <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
         </div>

         <div class="author-case-area">
          <div class="img1 reveal image-anime">
            <img src="{{ URL::asset('build/img/all-images/case-img19.png') }}" alt="">
          </div>
          <div class="content-area">
            <div class="content">
              <a href="case-single">SEO Optimization</a>
              <div class="space16"></div>
              <p>We began by optimizing Steve <br> Jons website for relevant...</p>
            </div>
            <div class="arrow">
              <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
         </div>
         <div class="author-case-area">
          <div class="img1 reveal image-anime">
            <img src="{{ URL::asset('build/img/all-images/case-img20.png') }}" alt="">
          </div>
          <div class="content-area">
            <div class="content">
              <a href="case-single">SEO Optimization</a>
              <div class="space16"></div>
              <p>We began by optimizing Steve <br> Jons website for relevant...</p>
            </div>
            <div class="arrow">
              <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
         </div>
         <div class="author-case-area">
          <div class="img1 reveal image-anime">
            <img src="{{ URL::asset('build/img/all-images/case-img21.png') }}" alt="">
          </div>
          <div class="content-area">
            <div class="content">
              <a href="case-single">SEO Optimization</a>
              <div class="space16"></div>
              <p>We began by optimizing Steve <br> Jons website for relevant...</p>
            </div>
            <div class="arrow">
              <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CASE AREA ENDS =======-->

<!--===== WORK AREA STARTS =======-->
<div class="work8-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="work-header text-center heading13">
          <h5>Work Process</h5>
          <h2 class="text-anime-style-3">Why Partner With SEOC Your Path To <br class="d-lg-block d-none"> SEO & Digital Marketing Success</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="img1 reveal">
          <img src="{{ URL::asset('build/img/all-images/work-img6.png') }}" alt="">
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <div class="head">
          <h4>SEOC Work Process</h4>
        </div>
        <div class="works-boxarea" data-aos="fade-left" data-aos-duration="800">
          <div class="list">
            <h3>01</h3>
          </div>
          <div class="content">
            <a href="case-single">Strategy Development</a>
            <p>Based on our findings, we develop  customized <br class="d-lg-block d-none"> digital marketing strategy tailored objective.</p>
          </div>
        </div>

        <div class="works-boxarea auhtor" data-aos="fade-left" data-aos-duration="1000">
          <div class="list">
            <h3>02</h3>
          </div>
          <div class="content">
            <a href="case-single">Monitoring & Optimization</a>
            <p>We believe in the power of data-driven <br class="d-lg-block d-none"> decision-making. Throughout the campaign.</p>
          </div>
        </div>

        <div class="works-boxarea" data-aos="fade-left" data-aos-duration="1200">
          <div class="list">
            <h3>03</h3>
          </div>
          <div class="content">
            <a href="case-single">Continuous Improvement</a>
            <p>Digital marketing is an ever-evolving field, and <br class="d-lg-block d-none"> we're committed to staying ahead of the curve.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== WORK AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="ctaanalycis-section-area others-cta">
  <img src="{{ URL::asset('build/img/bg/cta-bg1.png') }}" alt="" class="cta-bg1 aniamtion-key-2">
  <img src="{{ URL::asset('build/img/bg/cta-bg2.png') }}" alt="" class="cta-bg2 aniamtion-key-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">  
        <div class="cta-header-area text-center sp4 heading13">
          <h5>Competitor</h5>
          <h2 class="text-anime-style-3">Competitor Analysis</h2>
          <div class="space32"></div>
          <div class="form-area" data-aos="fade-up" data-aos-duration="1000">
            <form>
              <div class="input-area">
                <span><i class="fa-solid fa-link"></i></span>
                <input type="text" placeholder="https:// yoursite.com">
              </div>

              <div class="input-area">
                <span><i class="fa-regular fa-envelope"></i></span>
                <input type="text" placeholder="youremail@domain.com">
              </div>
              <div class="btn-area">
                <a href="" class="header-btn15">Analyze Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </form>
          </div>
          <ul>
            <li>Try:</li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Laptop</a></li>
            <li><a href="#">iPhone</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial8-section-area sp1">
  <div class="container">
      <div class="row">
          <div class="col-lg-5 m-auto">
              <div class="testimonia4-header text-center heading13">
                  <h5 data-aos="fade-up" data-aos-duration="1000">Testimonials</h5>
                  <h2 class="text-anime-style-3">What Our Client Say</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12" data-aos="zoom-out" data-aos-duration="1200">
              <div class="testimonial4-slider-area owl-carousel">
                  <div class="testimonial-boxarea">
                      <img src="{{ URL::asset('build/img/icons/quito5.svg') }}" alt="" class="quito">
                      <p>"Working with SEOC has been a game-changer for our business. Their strategic approach to SEO  digital marketing has significantly increased our online visibility and lead generation.”</p>
                      <div class="space48"></div>
                      <div class="auhtor-logo">
                          <div class="text">
                              <a href="team">Sarah L.</a>
                              <ul>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                              </ul>
                          </div>
                          <div class="logo">
                              <img src="{{ URL::asset('build/img/icons/google1.svg') }}" alt="">
                          </div>
                      </div>
                  </div>

                  <div class="testimonial-boxarea">
                      <img src="{{ URL::asset('build/img/icons/quito5.svg') }}" alt="" class="quito">
                      <p>“We've been partnering with SEOC for over a year now, and the results speak for themselves. Their comprehensive digital marketing solutions have helped us achieve measurable growth."</p>
                      <div class="space48"></div>
                      <div class="auhtor-logo">
                          <div class="text">
                              <a href="team">David M.</a>
                              <ul>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                              </ul>
                          </div>
                          <div class="logo">
                              <img src="{{ URL::asset('build/img/icons/google1.svg') }}" alt="">
                          </div>
                      </div>
                  </div>

                  <div class="testimonial-boxarea">
                      <img src="{{ URL::asset('build/img/icons/quito5.svg') }}" alt="" class="quito">
                      <p>"As a startup, we needed a digital marketing partner that could understand our unique needs and deliver cost-effective solutions. SEOC has been that partner for us.”</p>
                      <div class="space48"></div>
                      <div class="auhtor-logo">
                          <div class="text">
                              <a href="team">Emily R.</a>
                              <ul>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                              </ul>
                          </div>
                          <div class="logo">
                              <img src="{{ URL::asset('build/img/icons/google1.svg') }}" alt="">
                          </div>
                      </div>
                  </div>

                  <div class="testimonial-boxarea">
                      <img src="{{ URL::asset('build/img/icons/quito5.svg') }}" alt="" class="quito">
                      <p>Working with SEOC has been a game-changer for our business. Their strategic approach to SEO  digital marketing has significantly increased our online visibility and lead generation.”</p>
                      <div class="space48"></div>
                      <div class="auhtor-logo">
                          <div class="text">
                              <a href="team">Sarah L.</a>
                              <ul>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                              </ul>
                          </div>
                          <div class="logo">
                              <img src="{{ URL::asset('build/img/icons/google1.svg') }}" alt="">
                          </div>
                      </div>
                  </div>

                  <div class="testimonial-boxarea">
                      <img src="{{ URL::asset('build/img/icons/quito5.svg') }}" alt="" class="quito">
                      <p>“We've been partnering with SEOC for over a year now, and the results speak for themselves. Their comprehensive digital marketing solutions have helped us achieve measurable growth."</p>
                      <div class="space48"></div>
                      <div class="auhtor-logo">
                          <div class="text">
                              <a href="team">David M.</a>
                              <ul>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                              </ul>
                          </div>
                          <div class="logo">
                              <img src="{{ URL::asset('build/img/icons/google1.svg') }}" alt="">
                          </div>
                      </div>
                  </div>

                  <div class="testimonial-boxarea">
                      <img src="{{ URL::asset('build/img/icons/quito5.svg') }}" alt="" class="quito">
                      <p>"As a startup, we needed a digital marketing partner that could understand our unique needs and deliver cost-effective solutions. SEOC has been that partner for us.”</p>
                      <div class="space48"></div>
                      <div class="auhtor-logo">
                          <div class="text">
                              <a href="team">Emily R.</a>
                              <ul>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                              </ul>
                          </div>
                          <div class="logo">
                              <img src="{{ URL::asset('build/img/icons/google1.svg') }}" alt="">
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
<div class="blog8-scetion-area sp2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="blog-hedaer-area heading13 text-center">
          <h5>Our Blog</h5>
          <h2 class="text-anime-style-3">Our Latest Blog & Articles</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="blog-author-boxarea" data-aos="fade-right" data-aos-duration="800">
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/blog-img1.png') }}" alt="">
          </div>
          <div class="content-area">
            <div class="tags-area">
              <ul>
                <li><a href="#"> # SEO</a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Anderson</a></li>
              </ul>
            </div>
            <a href="blog-single">10 Essential SEO Tips to Boost Your Website's Ranking</a>
            <p>Are you looking to improve your website's visibility and attract more organic traffic? </p>
            <a href="blog-single" class="header-btn15">Read More <i class="fa-solid fa-arrow-right"></i></a>
            <div class="date">
              <a href="#">09, MAY 2024</a>
            </div>
          </div>
        </div>
        <div class="space30 d-lg-none d-block"></div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="blog-author-boxarea" data-aos="fade-up" data-aos-duration="1000">
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/blog-img2.png') }}" alt="">
          </div>
          <div class="content-area">
            <div class="tags-area">
              <ul>
                <li><a href="#"># PPC</a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Jon Doe</a></li>
              </ul>
            </div>
            <a href="blog-single">The Power of PPC Advertising: How to Maximize Your ROI</a>
            <p>Unlock the full potential of your digital marketing strategy with the power of PPC.</p>
            <a href="blog-single" class="header-btn15">Read More <i class="fa-solid fa-arrow-right"></i></a>
            <div class="date">
              <a href="#">10, MAY 2024</a>
            </div>
          </div>
        </div>
        <div class="space30 d-lg-none d-block"></div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="blog-author-boxarea" data-aos="fade-left" data-aos-duration="1200">
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/blog-img3.png') }}" alt="">
          </div>
          <div class="content-area">
            <div class="tags-area">
              <ul>
                <li><a href="#"> # Web Design</a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">William Lee</a></li>
              </ul>
            </div>
            <a href="blog-single">The Importance of Responsive Web Design in the Mobile Age</a>
            <p>Where mobile devices dominate internet usage, responsive web design more crucial.</p>
            <a href="blog-single" class="header-btn15">Read More <i class="fa-solid fa-arrow-right"></i></a>
            <div class="date">
              <a href="#">12, MAY 2024</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== BLOG AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta8-section-area sp1">
  <img src="{{ URL::asset('build/img/bg/cta-bg1.png') }}" alt="" class="cta-bg1 aniamtion-key-2">
  <img src="{{ URL::asset('build/img/bg/cta-bg2.png') }}" alt="" class="cta-bg2 aniamtion-key-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">  
        <div class="cta-header-area text-center heading2">
          <h2 class="text-anime-style-3">Start Your Journey To Online Success Today</h2>
          <p data-aos="fade-up" data-aos-duration="1000">Your business deserves to shine in the digital world. SEOC is here to make that happen. Our proven <br class="d-lg-block d-none"> strategies and personalized approach ensure that your unique needs are met.</p>
          <div class="btn-area text-center" data-aos="fade-up" data-aos-duration="1200">
          <a href="#" class="header-btn15">Get Started Today <span><i class="fa-solid fa-arrow-right"></i></span></a>
          <a href="#" class="header-btn15 btn2">Request a Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->

<!--===== FOOTER AREA STARTS =======-->
<div class="footer8-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="footer-logo-area">
          <img src="{{ URL::asset('build/img/logo/logo9.png') }}" alt="" class="logo">
          <p>By optimizing content, leveraging relevant keywords, and adhering to best practices, businesses can secure prominent position (SEO)</p>
          <ul>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook7.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram7.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin7.svg') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ URL::asset('build/img/icons/youtube7.svg') }}" alt=""></a></li>
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
            <button class="header-btn15"> Subscribe <span><i class="fa-solid fa-arrow-right"></i></span></button>
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
            <li><a href="#" class="m-0"> Privacy  Policy </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== FOOTER AREA ENDS =======-->

@endsection