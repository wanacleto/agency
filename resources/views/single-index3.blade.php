@extends('layouts.homepage')
@section('title', 'Home3')
@section('fav')

    <link rel="shortcut icon" href="{{ URL::asset('build/img/logo/fav-logo4.png') }}" type="image/x-icon">

@endsection 

<body class="homepage4-body">
@section('content')

<!--===== PRELOADER STARTS =======-->
<div class="preloader preloader3">
  <div class="loading-container">
    <div class="loading"></div>
    <div id="loading-icon"><img src="{{ URL::asset('build/img/logo/preloader3.png') }}" alt=""></div>
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
    <div class="header-area homepage4 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav id="navbar-example2" class="navbar">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index"><img src="{{ URL::asset('build/img/logo/logo5.png') }}" alt=""></a>
              </div>
              <div class="main-menu">
                <ul>
                    <li class="nav-item"><a href="#about" class="nav-link active"><span>About</span></a></li>
                    <li class="nav-item"><a href="#service" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#case" class="nav-link"><span>Case Study</span></a></li>
                    <li class="nav-item"><a href="#works" class="nav-link"><span>Works</span></a></li>
                    <li class="nav-item"><a href="#testimonial" class="nav-link"><span>Testimonials</span></a></li>
                    <li class="nav-item"><a href="#blog" class="nav-link"><span>Blog</span></a></li>
                </ul>
              </div>

              <div class="btn-area">
                <a href="contact" class="header-btn12">Get In Touch <i class="fa-solid fa-arrow-right"></i></a>
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
 <div class="mobile-header mobile-haeder4 d-block d-lg-none">
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

<div class="mobile-sidebar mobile-sidebar4">
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
          <li><a href="index7">Home Seven</a></li>        
          <li><a href="index8">Home Eight</a></li>        
          <li><a href="index9">Home Nine</a></li>        
          <li><a href="index10">Home Ten</a></li>        
        </ul>
      </li>
      <li class="nav-item"><a href="#about" class="nav-link active"><span>About</span></a></li>
      <li class="nav-item"><a href="#service" class="nav-link"><span>Services</span></a></li>
      <li class="nav-item"><a href="#case" class="nav-link"><span>Case Study</span></a></li>
      <li class="nav-item"><a href="#works" class="nav-link"><span>Works</span></a></li>
      <li class="nav-item"><a href="#testimonial" class="nav-link"><span>Testimonials</span></a></li>
      <li class="nav-item"><a href="#Blog" class="nav-link"><span>Blog</span></a></li>
    </ul>

    <div class="allmobilesection">
      <a href="contact"  class="header-btn12">Get Started <i class="fa-solid fa-arrow-right"></i></a>
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
<div class="hero4-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="hero4-header text-center heading7">
                    <img src="{{ URL::asset('build/img/elements/plus.png') }}" alt="" class="plus keyframe5">
                    <h5 data-aos="fade-up" data-aos-duration="800"><img src="{{ URL::asset('build/img/icons/logo-icons3.svg') }}" alt="">Top #1 SEO & Marketing Agency</h5>
                    <h1 class="text-anime-style-1">
                        Local SEO Tactics To  
                        <span>Dominate 
                      <img src="{{ URL::asset('build/img/elements/line-img1.png') }}" alt="">
                    </span> Your Market
                </h1>
                    <div class="space20"></div>
                    <p data-aos="fade-up" data-aos-duration="1000">Welcome to SEOC where we specialize in revolutionizing your online <br class="d-lg-block d-none"> presence through expert SEO and digital marketing solutions. </p>

                </div>
            </div>
            <div class="space60"></div>
            <div class="col-lg-12">
                <div class="header-images-area">
                    <div class="bg-2">
                        <img src="{{ URL::asset('build/img/bg/bg2.png') }}" alt="">
                    </div>
                    <div class="form-area">
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
                                <a href="#" class="header-btn12">Analyze Now <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </form>
                    </div>
                    <div class="img2">
                        <img src="{{ URL::asset('build/img/all-images/header-img6.png') }}" alt="" class="header-img6 aniamtion-key-2" data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{ URL::asset('build/img/elements/elements10.png') }}" alt="" class="elements10">
                    </div>

                    <div class="img4 others">
                        <img src="{{ URL::asset('build/img/all-images/header-img5.png') }}" alt="" class="header-img6 aniamtion-key-2"  data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ URL::asset('build/img/icons/sound-icons2.svg') }}" alt="" class="elements10 aniamtion-key-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary rounded-2" tabindex="0">
<!--===== ABOUT AREA STARTS =======-->
<div class="about4-section-area sp6" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4">
          <div class="about-images">
           <figure class="image-anime reveal">
            <img src="{{ URL::asset('build/img/all-images/about-img1.png') }}" alt="">
           </figure>
            <img src="{{ URL::asset('build/img/elements/star1.png') }}" alt="" class="star1 keyframe5">
          </div>
        </div>
        <div class="col-lg-5">
          <div class="about-content-area heading8">
            <div class="arrow-circle">
            <a href="about">
              <img src="{{ URL::asset('build/img/elements/elements4.png') }}" alt="" class="elements4 keyframe5">
              <img src="{{ URL::asset('build/img/icons/arrow.svg') }}" alt="" class="arrow">
            </a>
            </div>
            <br>
            <h5><img src="{{ URL::asset('build/img/icons/logo-icons3.svg') }}" alt="">About SEOC</h5>
            <h2 class="text-anime-style-2">Comprehensive SEO & <span>Digital Marketing <img src="{{ URL::asset('build/img/elements/line-img2.png') }}" alt=""></span> Solutions.</h2>
            <p data-aos="fade-up" data-aos-duration="1000">Welcome to SEOC your trusted partner for comprehensive SEO and digital marketing solutions. With our proven expertise and innovative strategies the digital landscape.</p>
            <div class="btn-area" data-aos="fade-up" data-aos-duration="1200">
              <a href="about" class="header-btn12">Learn More <i class="fa-solid fa-arrow-right"></i></a>
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
<div class="service4-section-area sp1" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="service4-header heading8 text-center">
                    <h5 data-aos="fade-up" data-aos-duration="1000"><img src="{{ URL::asset('build/img/icons/logo-icons3.svg') }}" alt="">Our Service</h5>
                    <h2 class="text-anime-style-1">Our Comprehensive Suite Of Digital Marketing <span>Services. <img src="{{ URL::asset('build/img/elements/line-img2.png') }}" alt=""></span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="service-auhtor-boxes-area">
                    <div class="bg-images">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/bg/service-bg1.png') }}" alt="" class="pulse-border">
                        </div>
                        <div class="icons" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="{{ URL::asset('build/img/icons/logo-icons4.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-6" data-aos="zoom-out" data-aos-duration="1000">
                            <div class="service-box-area">
                                <div class="icons-area">
                                    <div class="icons">
                                        <img src="{{ URL::asset('build/img/icons/service-icon11.svg') }}" alt="">
                                    </div>
                                    <div class="number">
                                        <h4>01</h4>
                                    </div>
                                </div>
                                <div class="content-area">
                                    <a href="service1">Search Engine Optimization</a>
                                    <p>Our team of experts will optimize your site's on-page elements, create high-quality content, and build authoritative backlinks to boost your rankings  attract.</p>
                                    <a href="service1" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-lg-block d-none"></div>

                        <div class="col-lg-5 col-md-6" data-aos="zoom-out" data-aos-duration="1200">
                            <div class="service-box-area">
                                <div class="icons-area">
                                    <div class="icons">
                                        <img src="{{ URL::asset('build/img/icons/service-icon12.svg') }}" alt="">
                                    </div>
                                    <div class="number">
                                        <h4>02</h4>
                                    </div>
                                </div>
                                <div class="content-area">
                                    <a href="service1">Pay-Per-Click(PPC) Advertising</a>
                                    <p>Maximize your ROI with strategic PPC campaigns tailored to your business objectives. Whether you're looking to increase brand awareness,</p>
                                    <a href="service1" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="space100 d-md-block d-none"></div>
                        <div class="space100"></div>
                        <div class="col-lg-5 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="service-box-area">
                                <div class="icons-area">
                                    <div class="icons">
                                        <img src="{{ URL::asset('build/img/icons/service-icon13.svg') }}" alt="">
                                    </div>
                                    <div class="number">
                                        <h4>03</h4>
                                    </div>
                                </div>
                                <div class="content-area">
                                    <a href="service1">Social Media Marketing</a>
                                    <p>Engage with your audience, build brand loyalty, drive conversions through strategic social media marketing. From content creation and community management. </p>
                                    <a href="service1" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 d-lg-block d-none"></div>

                        <div class="col-lg-5 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="service-box-area">
                                <div class="icons-area">
                                    <div class="icons">
                                        <img src="{{ URL::asset('build/img/icons/service-icon14.svg') }}" alt="">
                                    </div>
                                    <div class="number">
                                        <h4>04</h4>
                                    </div>
                                </div>
                                <div class="content-area">
                                    <a href="service1">Content Marketing</a>
                                    <p>Nurture leads, drive conversions, and build customer loyalty with targeted email marketing campaigns. From automated drip campaigns & personalized newsletters. </p>
                                    <a href="service1" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="space50 d-md-block d-none"></div>
                            <div class="btn-area1 text-center" data-aos="fade-up" data-aos-duration="1200">
                                <a href="service1" class="header-btn12">View More Services <i class="fa-solid fa-arrow-right"></i></a>
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
<div class="case4-section-area sp1" id="case">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="case4-header heading8 text-center">
                    <h5 data-aos="fade-up" data-aos-duration="1000"><img src="{{ URL::asset('build/img/icons/logo-icons3.svg') }}" alt="">Case Study</h5>
                    <h2 class="text-anime-style-1">Our Handpicked Digital Marketing <span>Case Study <img src="{{ URL::asset('build/img/elements/line-img2.png') }}" alt=""></span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1200">
                <div class="cs_case_study_1_list">
                  <div class="cs_case_study cs_style_1 cs_hover_active active">
                    <a href="case-single" class="cs_case_study_thumb cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img1.png') }}"></a>
                    <div class="content-area1">
                      <a href="case-single">Website  Design & Development</a>
                    </div>
                    <div class="content-area">
                      <img src="{{ URL::asset('build/img/icons/case-icon1.svg') }}" alt="">
                      <div class="space16"></div>
                      <a href="case-single">Website  Design & Development </a>
                      <p>Digital Art. Illustrations</p>
                    </div>
                  </div>
                  <div class="cs_case_study cs_style_1 cs_hover_active">
                    <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb2 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img2.png') }}"></a>
                    <div class="content-area1">
                      <a href="case-single">SEO</a>
                    </div>
                    <div class="content-area">
                      <img src="{{ URL::asset('build/img/icons/case-icon1.svg') }}" alt="">
                      <div class="space16"></div>
                      <a href="case-single">SEO</a>
                      <p>Digital Art. Illustrations</p>
                    </div>
                  </div>
                  <div class="cs_case_study cs_style_1 cs_hover_active">
                    <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb3 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img3.png') }}"></a>
                    <div class="content-area1">
                      <a href="case-single">PPC Advertising</a>
                    </div>
                    <div class="content-area">
                      <img src="{{ URL::asset('build/img/icons/case-icon1.svg') }}" alt="">
                      <div class="space16"></div>
                      <a href="case-single">PPC Advertising</a>
                      <p>Digital Art. Illustrations</p>
                    </div>
                  </div>
                  <div class="cs_case_study cs_style_1 cs_hover_active">
                    <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb4 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img4.png') }}"></a>
                    <div class="content-area1">
                      <a href="case-single">Social Media Marketing</a>
                    </div>
                    <div class="content-area">
                        <img src="{{ URL::asset('build/img/icons/case-icon1.svg') }}" alt="">
                        <div class="space16"></div>
                      <a href="case-single">Social Media Marketing</a>
                      <p>Digital Art. Illustrations</p>
                    </div>
                  </div>
                </div>
                <div class="space60 d-lg-block d-none"></div>
                <div class="space34 d-lg-none d-block"></div>
                <div class="btn-area1 text-center" data-aos="fade-up" data-aos-duration="1200">
                    <a href="case" class="header-btn12">View More Case Study <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CASE AREA ENDS =======-->

<!--===== WORK AREA STARTS =======-->
<div class="works4-section-area sp2" id="works">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="works4-header heading8">
                    <h5 data-aos="fade-up" data-aos-duration="800"><img src="{{ URL::asset('build/img/icons/logo-icons3.svg') }}" alt="">Work Process</h5>
                    <h2 class="text-anime-style-1">SEOC Your Path to SEO & Digital <span>Marketing Success <img src="{{ URL::asset('build/img/elements/line-img1.png') }}" alt=""></span></h2>
                    <div class="space10 d-lg-block d-none"></div>
                    <p data-aos="fade-up" data-aos-duration="1000">From increasing your website's visibility on search engines to engaging with your audience on social media,</p>
                    <div class="space32"></div>
                    <div class="btn-area1" data-aos="fade-up" data-aos-duration="1200">
                        <a href="case" class="header-btn12">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-7">
                <div class="case-images">
                    <figure class="image-anime reveal">
                        <img src="{{ URL::asset('build/img/all-images/case-img8.png') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="space50"></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="works-author-boxarea">
                    <div class="icons">
                        <img src="{{ URL::asset('build/img/icons/works-icon4.svg') }}" alt="">
                    </div>
                    <div class="space24"></div>
                    <div class="content-area">
                        <a href="case-single">Strategy Development</a>
                        <p>Based on our findings, we develop <br class="d-lg-block d-none">  customized digital marketing strategy <br class="d-lg-block d-none"> tailored objective.</p>
                        <a href="case-single" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="works-author-boxarea">
                    <div class="icons">
                        <img src="{{ URL::asset('build/img/icons/works-icon5.svg') }}" alt="">
                    </div>
                    <div class="space24"></div>
                    <div class="content-area">
                        <a href="case-single">Monitoring & Optimization</a>
                        <p>We believe in the power of data-driven <br class="d-lg-block d-none"> decision-making. Throughout the <br class="d-lg-block d-none"> campaign,.</p>
                        <a href="case-single" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                <div class="works-author-boxarea">
                    <div class="icons">
                        <img src="{{ URL::asset('build/img/icons/works-icon6.svg') }}" alt="">
                    </div>
                    <div class="space24"></div>
                    <div class="content-area">
                        <a href="case-single">Continuous Improvement</a>
                        <p>Digital marketing is an ever-evolving field, <br class="d-lg-block d-none"> and we're committed to staying ahead of <br class="d-lg-block d-none"> the SEOC curve.</p>
                        <a href="case-single" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== WORK AREA ENDS =======-->

<!--===== PRICING AREA STARTS =======-->
<div class="pricing-section-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="pricing-header heading8 text-center">
                    <h5 data-aos="fade-up" data-aos-duration="1000"><img src="{{ URL::asset('build/img/icons/logo-icons3.svg') }}" alt="">Pricing & Plan</h5>
                    <h2 class="text-anime-style-1">SEOC <span>Pricing Plan <img src="{{ URL::asset('build/img/elements/line-img2.png') }}" alt=""></span></h2>
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
                        <a href="pricing" class="header-btn12">Choose Your Plan <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="space32"></div>
                    <div class="list-area">
                        <h5>Service Include:</h5>
                        <ul>
                            <li><img src="{{ URL::asset('build/img/icons/check2.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check3.svg') }}" alt="" class="check3">Keyword Research</li>
                            <li><img src="{{ URL::asset('build/img/icons/check2.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check3.svg') }}" alt="" class="check3">One Page Optimization</li>
                            <li><img src="{{ URL::asset('build/img/icons/check2.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check3.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
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
                        <a href="pricing" class="header-btn12">Choose Your Plan <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="space32"></div>
                    <div class="list-area">
                        <h5>Service Include:</h5>
                        <ul>
                            <li><img src="{{ URL::asset('build/img/icons/check2.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check3.svg') }}" alt="" class="check3">Keyword Research</li>
                            <li><img src="{{ URL::asset('build/img/icons/check2.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check3.svg') }}" alt="" class="check3">One Page Optimization</li>
                            <li><img src="{{ URL::asset('build/img/icons/check2.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check3.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
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
                        <a href="pricing" class="header-btn12">Choose Your Plan <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                    <div class="space32"></div>
                    <div class="list-area">
                        <h5>Service Include:</h5>
                        <ul>
                            <li><img src="{{ URL::asset('build/img/icons/check2.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check3.svg') }}" alt="" class="check3">Keyword Research</li>
                            <li><img src="{{ URL::asset('build/img/icons/check2.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check3.svg') }}" alt="" class="check3">One Page Optimization</li>
                            <li><img src="{{ URL::asset('build/img/icons/check2.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check3.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
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


<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial4-section-area sp1" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="testimonia4-header text-center heading8">
                    <h5 data-aos="fade-up" data-aos-duration="1000"><img src="{{ URL::asset('build/img/icons/logo-icons3.svg') }}" alt="">Testimonials</h5>
                    <h2 class="text-anime-style-1">“What Our <span>Client Say” <img src="{{ URL::asset('build/img/elements/line-img2.png') }}" alt=""></span> </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="zoom-out" data-aos-duration="1200">
                <div class="testimonial4-slider-area owl-carousel">
                    <div class="testimonial-boxarea">
                        <img src="{{ URL::asset('build/img/icons/quito2.svg') }}" alt="" class="quito">
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
                        <img src="{{ URL::asset('build/img/icons/quito2.svg') }}" alt="" class="quito">
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
                        <img src="{{ URL::asset('build/img/icons/quito2.svg') }}" alt="" class="quito">
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
                        <img src="{{ URL::asset('build/img/icons/quito2.svg') }}" alt="" class="quito">
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
                        <img src="{{ URL::asset('build/img/icons/quito2.svg') }}" alt="" class="quito">
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
                        <img src="{{ URL::asset('build/img/icons/quito2.svg') }}" alt="" class="quito">
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
<div class="blog4-section-area sp2" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <div class="blog4-header text-center heading8">
                    <h5 data-aos="fade-up" data-aos-duration="1000"><img src="{{ URL::asset('build/img/icons/logo-icons3.svg') }}" alt="">Blog & News</h5>
                    <h2 class="text-anime-style-1">"Insights & Updates <span>Digital Marketing <img src="{{ URL::asset('build/img/elements/line-img1.png') }}" alt=""></span> </h2>
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
                <img src="{{ URL::asset('build/img/all-images/blog-img6.png') }}" alt="">
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
                <img src="{{ URL::asset('build/img/all-images/blog-img7.png') }}" alt="">
               </figure>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<!--===== BLOG AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta4-section-area">
  <img src="{{ URL::asset('build/img/bg/cta-bg5.png') }}" alt="" class="cta-bg1 aniamtion-key-2">
  <img src="{{ URL::asset('build/img/bg/cta-bg4.png') }}" alt="" class="cta-bg2 aniamtion-key-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 m-auto">  
          <div class="cta-header-area text-center sp4 heading2">
            <h2 class="text-anime-style-1">Ready To Take Your SEO To <br class="d-md-block d-none"> The Next Level</h2>
            <p data-aos="fade-up" data-aos-duration="1000">Effective SEO strategies not only elevate a website's visibility but also drive <br class="d-md-block d-none"> targeted traffic, enhance user experience,</p>
            <div class="btn-area text-center" data-aos="fade-up" data-aos-duration="1200">
              <a href="contact" class="header-btn12"> Get A Free Consultation <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CTA AREA ENDS =======-->

<!--===== FOOTER AREA STARTS =======-->
<div class="footer4-section-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-logo-area">
            <img src="{{ URL::asset('build/img/logo/logo5.png') }}" alt="">
            <p>By optimizing content, leveraging relevant keywords, and adhering to best practices, businesses can secure prominent position (SEO)</p>
            <ul>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook4.svg') }}" alt=""></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram4.svg') }}" alt=""></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin4.svg') }}" alt=""></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/twitter3.svg') }}" alt=""></a></li>
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
              <button class="header-btn12"> Subscribe <i class="fa-solid fa-arrow-right"></i></button>
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
<!--===== JS SCRIPT LINK =======-->

@endsection