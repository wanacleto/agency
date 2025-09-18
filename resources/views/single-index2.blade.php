@extends('layouts.homepage')
@section('title', 'Home2')
@section('fav')

    <link rel="shortcut icon" href="{{ URL::asset('build/img/logo/fav-logo2.png') }}" type="image/x-icon">

@endsection 
<body class="homepage2-body" style="background-image: url(build/img/bg/homepage2-bg.png); background-position: center; background-repeat: no-repeat; background-size: cover;">

@section('content')

<!--===== PRELOADER STARTS =======-->
<div class="preloader preloader2">
  <div class="loading-container">
    <div class="loading"></div>
    <div id="loading-icon"><img src="{{ URL::asset('build/img/logo/preloader2.png') }}" alt=""></div>
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
    <div class="header-area homepage2 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav id="navbar-example2" class="navbar">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index"><img src="{{ URL::asset('build/img/logo/logo2.png') }}" alt=""></a>
              </div>
              <div class="main-menu">
                <ul>
                    <li class="nav-item"><a href="#about" class="nav-link active"><span>About</span></a></li>
                    <li class="nav-item"><a href="#service" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#choose" class="nav-link"><span>Choose</span></a></li>
                    <li class="nav-item"><a href="#work" class="nav-link"><span>Works</span></a></li>
                    <li class="nav-item"><a href="#team" class="nav-link"><span>Team</span></a></li>
                    <li class="nav-item"><a href="#blog" class="nav-link"><span>Blogs</span></a></li>
                  <a href="contact" class="header-btn3">Free Consultation</a>
                </ul>
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
 <div class="mobile-header mobile-haeder2 d-block d-lg-none">
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

<div class="mobile-sidebar mobile-sidebar2">
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
          <li><a href="index">Home One</a></li>
          <li><a href="index2">Home Two</a></li>
          <li><a href="index3">Home Three</a></li>
          <li><a href="index4">Home Four</a></li>
          <li><a href="index5">Home Five</a></li>
          <li><a href="index6">Home Six</a></li>       
         </ul>
      </li>
      <li class="nav-item"><a href="#about" class="nav-link active"><span>About</span></a></li>
      <li class="nav-item"><a href="#service" class="nav-link"><span>Services</span></a></li>
      <li class="nav-item"><a href="#choose" class="nav-link"><span>Choose</span></a></li>
      <li class="nav-item"><a href="#work" class="nav-link"><span>Works</span></a></li>
      <li class="nav-item"><a href="#team" class="nav-link"><span>Team</span></a></li>
      <li class="nav-item"><a href="#blog" class="nav-link"><span>Blogs</span></a></li>
    </ul>

    <div class="allmobilesection">
      <a href="contact"  class="header-btn3">Get Started</a>
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
<div class="hero2-section-area">
    <img src="{{ URL::asset('build/img/elements/star3.png') }}" alt="" class="star3 keyframe5">
    <img src="{{ URL::asset('build/img/elements/star3.png') }}" alt="" class="star4 keyframe5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="header-main-area heading3">
                    <h5><img src="{{ URL::asset('build/img/icons/logo-icons2.svg') }}" alt="">Top #1 SEO & Marketing Agency</h5>
                    <h1 class="text-anime-style-3">Pioneering SEO & Digital Marketing Solutions Agency</h1>
                    <p data-aos="fade-left" data-aos-duration="1000">With a dedicated team of experts armed with the latest tools  techniques, we specialize in crafting bespoke SEO & digital marketing solutions.</p>
                    <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
                        <a href="contact" class="header-btn4">Start Ranking Now</a>
                        <a href="contact" class="header-btn3">Contact Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="header-images-area" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{ URL::asset('build/img/elements/elements6.png') }}" alt="" class="elements6 aniamtion-key-1">
                    <img src="{{ URL::asset('build/img/elements/star4.png') }}" alt="" class="star5 keyframe5">
                    <div class="img1">
                        <img src="{{ URL::asset('build/img/bg/header-imgbg2.png') }}" alt="" class="header-imgbg2">
                        <img src="{{ URL::asset('build/img/all-images/header-img2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="slider2-section-area sp5">
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
              <img src="{{ URL::asset('build/img/elements/brand6.png') }}" alt="">
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/elements/brand7.png') }}" alt="">
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/elements/brand8.png') }}" alt="">
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/elements/brand9.png') }}" alt="">
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/elements/brand10.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== TESTIMONIAL AREA ENDS =======-->
  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary rounded-2" tabindex="0">
<!--===== ABOUT AREA STARTS =======-->
<div class="about2-section-area sp1" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-images-area reveal">
                    <img src="{{ URL::asset('build/img/all-images/about-img3.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-header-area heading4">
                    <h5>About Us </h5>
                    <h2 class="text-anime-style-3">Meet SEOC Your Trusted SEO & Digital Marketing Partner</h2>
                    <p data-aos="fade-left" data-aos-duration="1000">We're not just another agency – we're your digital growth partners. With <br class="d-lg-block d-none"> years of industry experience and a passion for innovation, our team is <br class="d-lg-block d-none"> dedicated to delivering measurable results  propel your business forward.</p>
                    <h3 data-aos="fade-left" data-aos-duration="1100">Our Best Service Benefits :</h3>
                    <div class="list-area" data-aos="fade-left" data-aos-duration="1200">
                        <ul>
                            <li><img src="{{ URL::asset('build/img/icons/check1.svg') }}" alt="">Digital Marketing</li>
                            <li><img src="{{ URL::asset('build/img/icons/check1.svg') }}" alt="">Marketing Agency</li>
                        </ul>
                        <ul>
                            <li><img src="{{ URL::asset('build/img/icons/check1.svg') }}" alt="">SEO Optimization</li>
                            <li><img src="{{ URL::asset('build/img/icons/check1.svg') }}" alt="">First Working Process</li>
                        </ul>
                    </div>
                    <div class="images-area" data-aos="fade-left" data-aos-duration="1400">
                        <div class="img">
                            <img src="{{ URL::asset('build/img/all-images/about-img4.png') }}" alt="">
                        </div>
                        <div class="content-area">
                            <a href="team">John Doe</a>
                            <p>Owner SEOC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service1-section-area" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="service-header-area text-center heading4">
                    <h5>Services</h5>
                    <h2 class="text-anime-style-3">Elevating Your Online Presence With Expert SEO & Digital Marketing Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="service2-boxarea">
                    <div class="icons">
                        <img src="{{ URL::asset('build/img/icons/service-icon5.svg') }}" alt="">
                    </div>
                    <div class="space32"></div>
                    <div class="content">
                        <a href="service1">Search Engine Optimization</a>
                        <p>Elevate your online visibility and drive organic traffic with our comprehensive SEO solutions. We employ proven strategies to...</p>
                        <a href="service1" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="service2-boxarea">
                    <div class="icons">
                        <img src="{{ URL::asset('build/img/icons/service-icon6.svg') }}" alt="">
                    </div>
                    <div class="space32"></div>
                    <div class="content">
                        <a href="service1">(PPC) Advertising</a>
                        <p>Reach your target audience instantly and generate qualified leads with our strategic PPC advertising campaigns.</p>
                        <a href="service1" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                <div class="service2-boxarea">
                    <div class="icons">
                        <img src="{{ URL::asset('build/img/icons/service-icon7.svg') }}" alt="">
                    </div>
                    <div class="space32"></div>
                    <div class="content">
                        <a href="service1">Social Media Marketing</a>
                        <p>Engage and connect with your audience on social media platforms with our result-driven SMM strategies.</p>
                        <a href="service1" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="service2-boxarea">
                    <div class="icons">
                        <img src="{{ URL::asset('build/img/icons/service-icon8.svg') }}" alt="">
                    </div>
                    <div class="space32"></div>
                    <div class="content">
                        <a href="service1">Content Marketing</a>
                        <p>Our content marketing services encompass everything from blog posts and articles to infographics and videos, designed to boost.</p>
                        <a href="service1" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="service2-boxarea">
                    <div class="icons">
                        <img src="{{ URL::asset('build/img/icons/service-icon9.svg') }}" alt="">
                    </div>
                    <div class="space32"></div>
                    <div class="content">
                        <a href="service1">Web Design & Development</a>
                        <p>Make a lasting impression with a professionally designed and user-friendly website. Our web design and development...</p>
                        <a href="service1" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                <div class="service2-boxarea">
                    <div class="icons">
                        <img src="{{ URL::asset('build/img/icons/service-icon10.svg') }}" alt="">
                    </div>
                    <div class="space32"></div>
                    <div class="content">
                        <a href="service1">Digital Marketing</a>
                        <p>Digital marketing encompasses a vast array of strategies and tactics, ranging from search engine optimization (SEO) </p>
                        <a href="service1" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="space30"></div>
                <div class="btn-area1 text-center" data-aos="fade-up" data-aos-duration="1200">
                    <a href="service1" class="header-btn3">View More Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== WORK AREA STARTS =======-->
<div class="work1-section-area sp1" id="choose">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="work-header-area text-center heading4">
                    <h5>Why Choose Us</h5>
                    <h2 class="text-anime-style-3">Why Partner With SEOC Your Path To SEO & Digital Marketing Success</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="choose-section-area" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="choose-list-area">
                                <h3>Proven Track Record</h3>
                                <ul class="choose-auhtor">
                                    <li><a href="javascript:void(0);" class="active">SEO</a></li>
                                    <li><a href="javascript:void(0);">PPC Advertising</a></li>
                                    <li><a href="javascript:void(0);">Social Media Marketing</a></li>
                                    <li><a href="javascript:void(0);">Content Marketing</a></li>
                                    <li><a href="javascript:void(0);">Web Design</a></li>
                                    <li><a href="javascript:void(0);">Development</a></li>
                                    <li><a href="javascript:void(0);">Digital Marketing</a></li>
                                    <li><a href="javascript:void(0);">Search Engine Optimization</a></li>
                                </ul>
                                <p>We've helped businesses of all sizes achieve their digital goals with our data-driven strategies and personalized approach.</p>
                                <div class="btn-area">
                                    <a href="service1" class="header-btn3">View Our Services</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6">
                            <div class="images">
                                <img src="{{ URL::asset('build/img/elements/elements6.png') }}" alt="" class="elements6 aniamtion-key-2">
                                <img src="{{ URL::asset('build/img/elements/star4.png') }}" alt="" class="star4 keyframe5">
                               <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/choose-img1.png') }}" alt="">
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space50"></div>
                <div class="choose-section-area choose2" data-aos="fade-right" data-aos-duration="1200">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="choose-list-area">
                                <h3>Tailored Solutions</h3>
                                <ul class="choose-auhtor">
                                    <li><a href="javascript:void(0);" class="active">SEO</a></li>
                                    <li><a href="javascript:void(0);">PPC Advertising</a></li>
                                    <li><a href="javascript:void(0);">Social Media Marketing</a></li>
                                    <li><a href="javascript:void(0);">Content Marketing</a></li>
                                    <li><a href="javascript:void(0);">Web Design</a></li>
                                    <li><a href="javascript:void(0);">Development</a></li>
                                    <li><a href="javascript:void(0);">Digital Marketing</a></li>
                                    <li><a href="javascript:void(0);">Search Engine Optimization</a></li>
                                </ul>
                                <p>We understand that every business is unique. That's why we craft customized strategies tailored to your specific objectives, audience, and industry.</p>
                                <div class="btn-area">
                                    <a href="service1" class="header-btn3">View Our Services</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6">
                            <div class="images">
                                <img src="{{ URL::asset('build/img/elements/elements6.png') }}" alt="" class="elements6 aniamtion-key-2">
                                <img src="{{ URL::asset('build/img/elements/star4.png') }}" alt="" class="star4 keyframe5">
                               <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/choose-img2.png') }}" alt="">
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space50"></div>
                <div class="choose-section-area choose2" data-aos="fade-left" data-aos-duration="1400">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="choose-list-area">
                                <h3>Transparent Communication</h3>
                                <ul class="choose-auhtor">
                                    <li><a href="javascript:void(0);" class="active">SEO</a></li>
                                    <li><a href="javascript:void(0);">PPC Advertising</a></li>
                                    <li><a href="javascript:void(0);">Social Media Marketing</a></li>
                                    <li><a href="javascript:void(0);">Content Marketing</a></li>
                                    <li><a href="javascript:void(0);">Web Design</a></li>
                                    <li><a href="javascript:void(0);">Development</a></li>
                                    <li><a href="javascript:void(0);">Digital Marketing</a></li>
                                    <li><a href="javascript:void(0);">Search Engine Optimization</a></li>
                                </ul>
                                <p>We believe in transparent communication and keep you informed every step of the way, providing detailed reports and insights into your campaign performance.</p>
                                <div class="btn-area">
                                    <a href="service1" class="header-btn3">View Our Services</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6">
                            <div class="images">
                                <img src="{{ URL::asset('build/img/elements/elements6.png') }}" alt="" class="elements6 aniamtion-key-2">
                                <img src="{{ URL::asset('build/img/elements/star4.png') }}" alt="" class="star4 keyframe5">
                               <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/choose-img4.png') }}" alt="">
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== WORK AREA ENDS =======-->

<!--===== WORK AREA STARTS =======-->
<div class="work2-section-area" id="work">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="work2-header text-center heading4">
          <h5>Work Process</h5>
          <h2 class="text-anime-style-3">Why Partner with SEOC Your Path to SEO & Digital Marketing Success</h2>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="work-images reveal">
          <img src="{{ URL::asset('build/img/all-images/work-img1.png') }}" alt="">
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <div class="all-boxes-area">
          <div class="work-process-area" data-aos="fade-left" data-aos-duration="1200">
            <div class="icons">
              <img src="{{ URL::asset('build/img/icons/works-icon1.png') }}" alt="">
            </div>
            <div class="content-area">
              <a href="case-single">Strategy Development</a>
              <p>Based on our findings, we develop  customized <br class="d-lg-block d-none"> digital marketing strategy tailored objective.</p>
            </div>
          </div>
          <div class="space30"></div>
          <div class="work-process-area work2" data-aos="fade-left" data-aos-duration="1400">
            <div class="icons">
              <img src="{{ URL::asset('build/img/icons/works-icon2.png') }}" alt="">
            </div>
            <div class="content-area">
              <a href="case-single">Monitoring & Optimization</a>
              <p>We believe in the power of data-driven decision-making. Throughout the campaign,</p>
            </div>
          </div>
          <div class="space30"></div>
          <div class="work-process-area">
            <div class="icons">
              <img src="{{ URL::asset('build/img/icons/works-icon3.png') }}" alt="">
            </div>
            <div class="content-area">
              <a href="case-single">Continuous Improvement</a>
              <p>Digital marketing is an ever-evolving field, and we're committed to staying ahead of the curve.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== WORK AREA ENDS =======-->

<!--===== TEAM AREA STARTS =======-->
<div class="team2-section-area sp2" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="team2-header-area text-center heading4">
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
          <ul style="background-image: url(build/img/bg/iconsbg.png);">
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
          <ul style="background-image: url(build/img/bg/iconsbg.png);">
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
          <ul style="background-image: url(build/img/bg/iconsbg.png);">
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
          <ul style="background-image: url(build/img/bg/iconsbg.png);">
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
<div class="testimonial2-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 m-auto">
        <div class="testimonial-header heading4 text-center">
          <h5>Testimonials</h5>
          <h2 class="text-anime-style-3">What Our Client Say</h2>
        </div>
      </div>
    </div>
    <div class="col-lg-6 m-auto">
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
            <img src="{{ URL::asset('build/img/icons/quito1.svg') }}" alt="" class="quito1">
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
            <img src="{{ URL::asset('build/img/icons/quito1.svg') }}" alt="" class="quito1">
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
            <img src="{{ URL::asset('build/img/icons/quito1.svg') }}" alt="" class="quito1">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->

<!--===== BLOG AREA STARTS =======-->
<div class="blog2-section-area sp2" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 m-auto">
        <div class="blog-header-area heading4 text-center">
          <h5>Our Blog</h5>
          <h2 class="text-anime-style-3">5 Effective Strategies For Boosting Your Website Traffic</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6" data-aos="zoom-out" data-aos-duration="1000">
        <div class="blog2-author-boxarea">
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/blog-img4.png') }}" alt="">
          </div>
          <div class="blog-content">
            <a href="#" class="date"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">15 Feb 2024</a>
            <a href="blog-single" class="head">Search Engine Optimization (SEO)</a>
            <p>SEO remains one of the most powerful tools for driving organic traffic to your website. By optimizing your website keywords,</p>
            <a href="blog-single" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6" data-aos="zoom-out" data-aos-duration="1200">
        <div class="blog2-author-boxarea">
          <div class="img1">
            <img src="{{ URL::asset('build/img/all-images/blog-img5.png') }}" alt="">
          </div>
          <div class="blog-content">
            <a href="#" class="date"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">15 Feb 2024</a>
            <a href="blog-single" class="head">Social Media Marketing</a>
            <p>Social media platforms offer a powerful way to connect with your audience and drive traffic to your website.</p>
            <a href="blog-single" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== BLOG AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta2-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="cta-author-area">
          <div class="row">
            <div class="col-lg-5">
              <div class="cta2-header heading4">
                <h2 class="text-anime-style-3">Ready to Take Your SEO To The Next Level</h2>
                <p data-aos="fade-up" data-aos-duration="100">Effective SEO strategies not only elevate a website's visibility but also drive targeted traffic, enhance user experience,</p>
                <div class="space24"></div>
                <div class="btn-area" data-aos="fade-up" data-aos-duration="1200">
                  <a href="contact" class="header-btn3">Get Started Now</a>
                </div>
              </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
              <div class="images" data-aos="zoom-in" data-aos-duration="1000">
                <img src="{{ URL::asset('build/img/elements/elements6.png') }}" alt="" class="elements6 aniamtion-key-2">
                <img src="{{ URL::asset('build/img/elements/elements7.png') }}" alt="" class="elements7 keyframe5">
                <img src="{{ URL::asset('build/img/bg/bg1.png') }}" alt="" class="bg1 aniamtion-key-5">
                <img src="{{ URL::asset('build/img/all-images/cta-img1.png') }}" alt="" class="cta-img1">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->

<!--===== FOOTER AREA STARTS =======-->
<div class="footer2-section-area">
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
              <button class="header-btn4"> Subscribe</button>
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
  </div>

@endsection