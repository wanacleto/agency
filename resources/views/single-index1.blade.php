@extends('layouts.homepage')
@section('title', 'Home')
@section('fav')

    <link rel="shortcut icon" href="{{ URL::asset('build/img/logo/fav-logo1.png') }}" type="image/x-icon">

@endsection 

<body class="homepage1-body">
@section('content')

<!--===== PRELOADER STARTS =======-->
<div class="preloader">
  <div class="loading-container">
    <div class="loading"></div>
    <div id="loading-icon"><img src="{{ URL::asset('build/img/logo/preloader.png') }}" alt=""></div>
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
    <div class="header-area homepage1 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav id="navbar-example2" class="navbar">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index"><img src="{{ URL::asset('build/img/logo/logo1.png') }}" alt=""></a>
              </div>
              <div class="main-menu">
                <ul>
                    <li class="nav-item"><a href="#about" class="nav-link active"><span>About</span></a></li>
                    <li class="nav-item"><a href="#service" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#work" class="nav-link"><span>Works</span></a></li>
                    <li class="nav-item"><a href="#testimonials" class="nav-link"><span>Testimonials</span></a></li>
                    <li class="nav-item"><a href="#blog" class="nav-link"><span>Blogs</span></a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link"><span>Contact</span></a></li>
                </ul>
              </div>
              <div class="btn-area">
                <div class="search-icon header__search header-search-btn">
                  <a href="#"><img src="{{ URL::asset('build/img/icons/search-icons1.svg') }}" alt=""></a>
                </div>
                <a href="contact" class="header-btn1">Free Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>

              <div class="header-search-form-wrapper">
                <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
                <div class="header-search-container">
                    <form role="search" class="search-form">
                    <input type="search"  class="search-field" placeholder="Search …" value="" name="s">
                    <button type="submit" class="search-submit"><img src="{{ URL::asset('build/img/icons/search-icons1.svg') }}" alt=""></button>
                    </form>
                </div>
            </div>
            <div class="body-overlay"></div>
            </div>
        </nav> 
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END =======-->

  <!--===== MOBILE HEADER STARTS =======-->
 <div class="mobile-header mobile-haeder1 d-block d-lg-none">
  <div class="container-fluid">
    <div class="col-12">
      <div class="mobile-header-elements">
        <div class="mobile-logo">
          <a href="index"><img src="{{ URL::asset('build/img/logo/logo1.png') }}" alt=""></a>
        </div>
        <div class="mobile-nav-icon dots-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-sidebar mobile-sidebar1">
  <div class="logosicon-area">
    <div class="logos">
      <img src="{{ URL::asset('build/img/logo/logo1.png') }}" alt="">
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
   </div>
  <div class="mobile-nav mobile-nav1">
    <ul class="mobile-nav-list nav-list1">
      <li><a href="#" >Home </a>
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
      <li class="nav-item"><a href="#about" class="nav-link active"><span>About</span></a></li>
      <li class="nav-item"><a href="#service" class="nav-link"><span>Services</span></a></li>
      <li class="nav-item"><a href="#work" class="nav-link"><span>Works</span></a></li>
      <li class="nav-item"><a href="#testimonials" class="nav-link"><span>Testimonials</span></a></li>
      <li class="nav-item"><a href="#blog" class="nav-link"><span>Blogs</span></a></li>
      <li class="nav-item"><a href="#contact" class="nav-link"><span>Contact</span></a></li>
    </ul>

    <div class="allmobilesection">
      <a href="contact"  class="header-btn1">Get Started <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
<div class="hero1-section-area" style="background-image: url(build/img/bg/header-bg1.png);">
  <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="header-main-content heading1">
          <h5><img src="{{ URL::asset('build/img/icons/logo-icons.svg') }}" alt="">Top #1 SEO & Marketing Agency</h5>
          <h1 class="text-anime-style-3">Elevate Your Brand With Expert SEO & Digital Marketing</h1>
          <p data-aos="fade-left" data-aos-duration="1000">Welcome to SEOC where we specialize in revolutionizing your online <br class="d-lg-block d-none"> presence through expert SEO and digital marketing solutions. </p>
          <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
            <a href="contact" class="header-btn1">Start Ranking Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
            <a href="contact" class="header-btn2">Contact Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="header-images-area">
          <div class="main-images-area">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/header-img1.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000">
            </div>
            <div class="img2">
              <img src="{{ URL::asset('build/img/bg/header-imgbg.png') }}" alt="">
            </div>
            <div class="icons-area">
              <img src="{{ URL::asset('build/img/icons/sound-icons1.svg') }}" alt="" class="sound-icons1 aniamtion-key-1">
              <img src="{{ URL::asset('build/img/icons/lite-icons1.svg') }}" alt="" class="lite-icons1 aniamtion-key-1">
            </div>
            <div class="auhtor-icons">
              <img src="{{ URL::asset('build/img/elements/elements2.png') }}" alt="" class="elements2">
              <img src="{{ URL::asset('build/img/elements/elements3.png') }}" alt="" class="elements3">
            </div>
            <div class="auhtor-images">
              <img src="{{ URL::asset('build/img/all-images/header-author-img1.png') }}" alt="" class="header-author-img1 aniamtion-key-2">
              <img src="{{ URL::asset('build/img/all-images/header-author-img2.png') }}" alt="" class="header-author-img2 aniamtion-key-2">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary rounded-2" tabindex="0">
<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="slider-section-area sp5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-2">
        <div class="sldier-head">
          <p>Trusted by  <br class="d-lg-block d-none"> Top Companies</p>
        </div>
      </div>
      <div class="col-lg-10">
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
<div class="all-section-bg" style="background-image: url(build/img/bg/pages-bg1.png); background-repeat: no-repeat; background-size: cover;">
<!--===== ABOUT AREA STARTS =======-->
<div class="about1-section-area sp6" id="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="about-images">
         <figure class="image-anime reveal">
          <img src="{{ URL::asset('build/img/all-images/about-img1.png') }}">
         </figure>
          <img src="{{ URL::asset('build/img/elements/star1.png') }}" alt="" class="star1 keyframe5">
        </div>
      </div>
      <div class="col-lg-5">
        <div class="about-content-area heading2">
          <div class="arrow-circle">
          <a href="about">
            <img src="{{ URL::asset('build/img/elements/elements4.png') }}" alt="" class="elements4 keyframe5">
            <img src="{{ URL::asset('build/img/icons/arrow.svg') }}" alt="" class="arrow">
          </a>
          </div>
          <h2 class="text-anime-style-3">Comprehensive SEO & Digital Marketing Solutions.</h2>
          <p data-aos="fade-left" data-aos-duration="1000">Welcome to SEOC your trusted partner for comprehensive SEO and digital marketing solutions. With our proven expertise and innovative strategies the digital landscape.</p>
          <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
            <a href="about" class="header-btn1">Learn More<span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="about-auhtor-images">
          <img src="{{ URL::asset('build/img/elements/elements5.png') }}" alt="" class="elements5 keyframe5">
          <figure class="image-anime reveal">
            <img src="{{ URL::asset('build/img/all-images/about-img2.png') }}" alt="">
           </figure>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service1-section-area sp9" id="service">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="service-header-area heading2 text-center">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star3 keyframe5">
          <h2 class="text-anime-style-3">Popular Digital Marketing Services <br class="d-md-block d-none"> To Build Your Business</h2>
          <p data-aos="fade-up" data-aos-duration="1000">Our expert team specializes in delivering tailored solutions designed to elevate <br class="d-md-block d-none"> your brand and drive measurable results. </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="service-all-boxes-area">
          <div class="service-boxarea" data-aos="zoom-in" data-aos-duration="800">
            <a href="service1">Search Engine Optimization ( SEO)</a>
            <div class="space40"></div>
            <img src="{{ URL::asset('build/img/icons/service-icon1.svg') }}" alt="">
            <div class="space40"></div>
            <p>Enhance your online visibility & drive organic traffic with our advanced SEO techniques. We optimize your website to rank higher.</p>
          </div>

          <div class="service-boxarea box2" data-aos="zoom-in" data-aos-duration="1000">
            <a href="service1">Pay-Per-Click (PPC) Advertising</a>
            <div class="space40"></div>
            <img src="{{ URL::asset('build/img/icons/service-icon2.svg') }}" alt="">
            <div class="space40"></div>
            <p>Reach your audience instantly and drive qualified leads with targeted PPC campaigns. Our experts craft compelling ad copy and optimize.</p>
          </div>

          <div class="service-boxarea box3" data-aos="zoom-in" data-aos-duration="1200">
            <a href="service1">Social Media Marketing</a>
            <div class="space66"></div>
            <img src="{{ URL::asset('build/img/icons/service-icon3.svg') }}" alt="">
            <div class="space40"></div>
            <p>Build a strong brand presence and engage with your audience on social media platforms. We create strategic social media campaigns to boost brand.</p>
          </div>

          <div class="service-boxarea box4" data-aos="zoom-in" data-aos-duration="1400">
            <a href="service1">Website Design and Development</a>
            <div class="space40"></div>
            <img src="{{ URL::asset('build/img/icons/service-icon4.svg') }}" alt="">
            <div class="space40"></div>
            <p>Make a lasting impression with a professionally designed and user-friendly website. Our web design and development services ensure website.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service2-section-area sp6" id="work">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="service2-header heading2 text-center">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star3 keyframe5">
          <h2 class="text-anime-style-3">Tailored Solutions, Proven Results, <br class="d-md-block d-none"> And Exceptional Service</h2>
          <p data-aos="fade-up" data-aos-duration="1000">We pride ourselves on delivering a value proposition that goes beyond expectations. Our <br class="d-md-block d-none"> approach is centered on understanding your business inside</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7">
        <div class="images-content-area" data-aos="zoom-in" data-aos-duration="1000">
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/service-img1.png') }}" alt="">
          </div>
          <div class="content-area">
            <h5>Our Value</h5>
            <a href="service1" class="text text-anime-style-3">Explore Our Unique Value Proposition & How We Drive Business Growth</a>
            <p data-aos="fade-up" data-aos-duration="1000">we're committed to delivering exceptional value to our clients. We understand that every business is unique, personalized approach to every project we undertake.</p>
            <div class="btn-area" data-aos="fade-up" data-aos-duration="1200">
              <a href="service1" class="header-btn1">Learn More <span><i class="fa-solid fa-arrow-right"></i></span>
              </a>
            </div>
          </div>
          <div class="arrow-area">
            <a href="service1"><i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="service-all-boxes">
          <div class="row">
            <div class="col-lg-12 col-md-6">
              <div class="service2-auhtor-boxarea" data-aos="zoom-out" data-aos-duration="1000">
                <div class="arrow">
                  <a href="service1"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="content-area">
                  <h5>Our Mission</h5>
                  <a href="service1">We strive to be more than just a service provider; we aim to be trusted SEOC </a>
                  <p>By staying true to our mission and values, we are committed to helping businesses of all sizes achieve their goals, realize their potential shape.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-6">
              <div class="service2-auhtor2-boxarea" data-aos="zoom-out" data-aos-duration="1200">
                <div class="arrow">
                  <a href="service1"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="content-area">
                  <h5>Our Vision</h5>
                  <a href="service1">We aspire to create a world where every business owner feels empowered</a>
                  <p>By staying true to our vision and values, we are committed to driving positive change and shaping a brighter future for businesses and communities.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== CASE AREA STARTS =======-->
<div class="case1-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="case-header-area heading2 text-center">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star3 keyframe5">
          <h2 class="text-anime-style-3">Benefits of SEO & Digital Marketing</h2>
          <p data-aos="fade-up" data-aos-duration="1000">By investing in strategic SEO and digital marketing initiatives, businesses can <br class="d-md-block d-none"> unlock a myriad of benefits.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12" data-aos="zoom-out" data-aos-duration="1200">
          <div class="cs_case_study_1_list">
            <div class="cs_case_study cs_style_1 cs_hover_active active" data-aos="fade-up" data-aos-duration="800">
              <a href="case-single" class="cs_case_study_thumb cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img1.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">Website  Design & Development</a>
              </div>
              <div class="content-area">
                <a href="case-single">Website  Design & Development </a>
                <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up" data-aos-duration="900">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb2 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img2.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">SEO</a>
              </div>
              <div class="content-area">
                <a href="case-single">SEO</a>
                <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up" data-aos-duration="1000">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb3 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img3.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">PPC Advertising</a>
              </div>
              <div class="content-area">
                <a href="case-single">PPC Advertising</a>
                <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up" data-aos-duration="1100">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb4 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img4.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">Social Media Marketing</a>
              </div>
              <div class="content-area">
                <a href="case-single">Social Media Marketing</a>
                <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up" data-aos-duration="1200">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb5 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img5.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">Content Marketing</a>
              </div>
              <div class="content-area">
                <a href="case-single">Content Marketing</a>
                <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up" data-aos-duration="1300">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb6 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img6.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">Email Marketing</a>
              </div>
              <div class="content-area">
                <a href="case-single">Email Marketing</a>
                <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active " style="margin: 0 !important;" data-aos="fade-up" data-aos-duration="1400">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb7 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img7.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">Analytics & Reporting</a>
              </div>
              <div class="content-area">
                <a href="case-single">Analytics & Reporting</a>
                <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--===== CASE AREA ENDS =======-->


<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial1-section-area sp6" id="testimonials">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="testimonial-header heading2 text-center">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star3 keyframe5">
          <h2 class="text-anime-style-3">What Our Client Say <br class="d-md-block d-none"> On Google Reviews</h2>
          <p data-aos="fade-up" data-aos-duration="1000">Don't just take our word for it. Hear what our satisfied clients <br class="d-md-block d-none"> have to say about their experience partnering with SEOC</p>
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
<div class="blog1-scetion-area" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="blog-hedaer-area heading2 text-center">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star3 keyframe5">
          <h2 class="text-anime-style-3">Insights & Innovations: <br class="d-md-block d-none"> Our Latest Blog Posts</h2>
          <p data-aos="fade-up" data-aos-duration="1000">Explore our blog to discover actionable insights, success stories, and <br class="d-md-block d-none"> expert advice that can help drive growth for your business.</p>
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
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
              </ul>
            </div>
            <a href="blog-single">10 Essential SEO Tips to Boost Your Website's Ranking</a>
            <p>Are you looking to improve your website's visibility and attract more organic traffic? </p>
            <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
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
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
              </ul>
            </div>
            <a href="blog-single">The Power of PPC Advertising: How to Maximize Your ROI</a>
            <p>Unlock the full potential of your digital marketing strategy with the power of PPC.</p>
            <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
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
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
              </ul>
            </div>
            <a href="blog-single">The Importance of Responsive Web Design in the Mobile Age</a>
            <p>Where mobile devices dominate internet usage, responsive web design more crucial.</p>
            <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== BLOG AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact1-section-area sp6" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="contact-header-area text-center heading2">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star3 keyframe5">
          <h2 class="text-anime-style-3">Get In Touch With Us Today</h2>
          <p>We're here to help! If you have any questions or would like to discuss <br class="d-md-block d-none"> how our SEO and digital marketing services can benefit your business,</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5" data-aos="zoom-out" data-aos-duration="1000">
        <div class="contact-info-area">
          <h3>Contact Info</h3>
          <p>We're here to help! If you have any questions or would like to discuss how our SEO and digital marketing services can benefit your business,</p>
          <div class="space32"></div>
          <div class="contact-auhtor-box">
            <div class="icons">
              <img src="{{ URL::asset('build/img/icons/location2.svg') }}" alt="">
            </div>
            <div class="content">
              <h4>Our Location</h4>
              <a href="#">8708 Technology Forest Pl Suite <br class="d-lg-block d-none"> 125 -G, The Woodlands, TX 773</a>
            </div>
          </div>
          <div class="space40"></div>
          <div class="contact-auhtor-box">
            <div class="icons">
              <img src="{{ URL::asset('build/img/icons/phone2.svg') }}" alt="">
            </div>
            <div class="content">
              <h4>Phone Number</h4>
              <a href="tel:123-456-7890">123-456-7890 <br>
                123-456-7890</a>
            </div>
          </div>
          <div class="space40"></div>
          <div class="contact-auhtor-box">
            <div class="icons">
              <img src="{{ URL::asset('build/img/icons/email2.svg') }}" alt="">
            </div>
            <div class="content">
              <h4>Email Address</h4>
              <a href="mailto:infoseoc@.gmail.com">infoseoc@.gmail.com <br>
              infoseoc@.gmail.com</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="zoom-out" data-aos-duration="1200">
        <div class="contact-boxarea">
           <h3>Get In Touch</h3>
           <p>We're here to help! If you have any questions or would like to discuss <br class="d-lg-block d-none"> how our SEO and digital marketing services can benefit your business,</p>
           <form action="https://api.web3forms.com/submit" method="POST">
            <div class="row">
              <div class="col-lg-6">
                <div class="input-area">
                  <input type="text" placeholder="First Name" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-area">
                  <input type="text" placeholder="Last Name" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-area">
                  <input type="email" placeholder="Email Address" required>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="input-area">
                  <input type="number" placeholder="Phone Number" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-area">
                  <select name="country" id="country" class="country-area nice-select6">
                    <option value="1" data-display="Service Type">Service Type</option>
                    <option value="">Belgium</option>
                    <option value="">Brezil</option>
                    <option value="">Argentina</option>
                    <option value="">Bangladesh</option>
                    <option value="">Germany</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-area">
                  <textarea placeholder="Your Message" required></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-area">
                  <button class="header-btn1">Free Consultation <span><i class="fa-solid fa-arrow-right"></i></span></button>
                </div>
              </div>
             </div>
           </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CONTACT AREA ENDS =======-->

@endsection