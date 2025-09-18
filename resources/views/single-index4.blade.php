@extends('layouts.homepage')
@section('title', 'Home4')
@section('fav')

    <link rel="shortcut icon" href="{{ URL::asset('build/img/logo/fav-logo5.png') }}" type="image/x-icon">

@endsection 

<body class="homepage5-body">
@section('content')
<!--===== PRELOADER STARTS =======-->
<div class="preloader preloader4">
  <div class="loading-container">
    <div class="loading"></div>
    <div id="loading-icon"><img src="{{ URL::asset('build/img/logo/preloader4.png') }}" alt=""></div>
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
    <div class="header-area homepage5 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav id="navbar-example2" class="navbar">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index"><img src="{{ URL::asset('build/img/logo/logo6.png') }}" alt=""></a>
              </div>
              <div class="main-menu">
                <ul>
                    <li class="nav-item"><a href="#about" class="nav-link active"><span>About</span></a></li>
                    <li class="nav-item"><a href="#service" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#case" class="nav-link"><span>Case Study</span></a></li>
                    <li class="nav-item"><a href="#team" class="nav-link"><span>Team</span></a></li>
                    <li class="nav-item"><a href="#testimonial" class="nav-link"><span>Testimonials</span></a></li>
                    <li class="nav-item"><a href="#blog" class="nav-link"><span>Blog</span></a></li>
                </ul>
              </div>

              <div class="btn-area">
                <a href="contact" class="header-btn9">Get Free Quote <i class="fa-solid fa-arrow-right"></i></a>
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
 <div class="mobile-header mobile-haeder5 d-block d-lg-none">
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

<div class="mobile-sidebar mobile-sidebar5">
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
          <li><a href="index6">Home Six</a></li>        </ul>
          <li><a href="index7">Home Seven</a></li>        </ul>
          <li><a href="index8">Home Eight</a></li>        </ul>
          <li><a href="index9">Home Nine</a></li>        </ul>
          <li><a href="index10">Home ten</a></li> 
        </ul>
      </li>
      <li class="nav-item"><a href="#about" class="nav-link active"><span>About</span></a></li>
      <li class="nav-item"><a href="#service" class="nav-link"><span>Services</span></a></li>
      <li class="nav-item"><a href="#case" class="nav-link"><span>Case Study</span></a></li>
      <li class="nav-item"><a href="#team" class="nav-link"><span>Team</span></a></li>
      <li class="nav-item"><a href="#testimonial" class="nav-link"><span>Testimonials</span></a></li>
      <li class="nav-item"><a href="#blog" class="nav-link"><span>Blog</span></a></li>
    </ul>

    <div class="allmobilesection">
      <a href="contact"  class="header-btn9">Get Started</a>
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
<div class="hero5-section-area" style="background-image: url(build/img/bg/header-bg5.png);  background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="header-content-area heading9">
                    <h5><img src="{{ URL::asset('build/img/icons/logo-icons5.svg') }}" alt="">Top #1 SEO & Marketing Agency</h5>
                    <h1 class="text-anime-style-2">Amplify Your Brand With Targeted SEO & Marketing Initiatives</h1>
                    <p data-aos="fade-left" data-aos-duration="1000">Our team of seasoned experts is dedicated to maximizing your visibility, driving traffic, and ultimately boosting your bottom line social media.</p>
                    <div class="btn-area1" data-aos="fade-left" data-aos-duration="1200">
                        <a href="contact" class="header-btn9">Get Started Now <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="contact" class="header-btn10">Explore Solution <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-images-area">
                    <div class="imges">
                        <img src="{{ URL::asset('build/img/all-images/header-img8.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000">
                    </div>
                    <div class="imges1">
                        <img src="{{ URL::asset('build/img/bg/header-bg6.png') }}" alt="">
                    </div>
                    <div class="auhtor-images">
                        <div class="img1">
                            <img src="{{ URL::asset('build/img/all-images/auhtor-img1.png') }}" alt="" class="author-img1 aniamtion-key-2">
                            <img src="{{ URL::asset('build/img/icons/sound-icons3.svg') }}" alt="" class="sound-icons3 aniamtion-key-1">
                            <img src="{{ URL::asset('build/img/icons/lite-icons2.svg') }}" alt="" class="lite-icons2 aniamtion-key-1">
                            <img src="{{ URL::asset('build/img/elements/elements11.svg') }}" alt="" class="elements11">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary rounded-2" tabindex="0">
<!--===== ABOUT AREA STARTS =======-->
<div class="about5-section-area sp1" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 m-auto">
        <div class="about5-header text-center heading10">
          <h5><img src="{{ URL::asset('build/img/icons/logo-icons6.svg') }}" alt="">Welcome to SEO Agency</h5>
          <h2 class="text-anime-style-3">Meet SEOC Your Trusted SEO & Digital Marketing Partner</h2>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-all-images-area">
          <img src="{{ URL::asset('build/img/elements/elements12.png') }}" alt="" class="elements12 keyframe5">
          <img src="{{ URL::asset('build/img/elements/elements13.png') }}" alt="" class="elements13 keyframe5">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="img1 image-anime reveal">
                <img src="{{ URL::asset('build/img/all-images/about-img5.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="img2 image-anime reveal">
                <div class="space100"></div>
                <img src="{{ URL::asset('build/img/all-images/about-img6.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about5-content-area heading10">
          <h3 class="text-anime-style-3">Best SEO Experience & Professional Team To grow Your Business</h3>
          <p data-aos="fade-left" data-aos-duration="1000">We're not just another agency – we're your digital growth partners. With years of industry experience and a passion for innovation, our team is dedicated to delivering measurable results  propel your business forward.</p>
          <div class="space32"></div>
          <div class="about5-boxarea">
            <div class="row">
                 <div class="col-lg-12">
                      <div class="about5-boxes" data-aos="fade-left" data-aos-duration="1200">
                           <h3>SEO Analysis</h3>
                            <div class="about5-bar">
                                <span class="about5-per">
                                     <span class="per">85%</span>
                                </span>
                            </div>
                      </div>
                      <div class="space40"></div>
                 </div>

                 <div class="col-lg-12">
                      <div class="about5-boxes" data-aos="fade-left" data-aos-duration="1300">
                           <h3>Marketing Strategy</h3>
                            <div class="about5-bar2">
                                <span class="about5-per2">
                                     <span class="per">95%</span>
                                </span>
                            </div>
                      </div>
                 </div>
            </div>
       </div>
       <div class="space32"></div>
          <div class="btn-area1" data-aos="fade-left" data-aos-duration="1400">
            <a href="contact" class="header-btn11">Learn More <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SLIDER AREA STARTS =======-->
<div class="slider5-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="slider-all-boxarea">
          <div class="slider-boxarea">
            <div class="content">
              <a href="testimonials">Branding Design</a>
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/brand-img2.png') }}" alt="">
            </div>
          </div>

          <div class="slider-boxarea">
            <div class="content">
              <a href="testimonials">Digital Marketing</a>
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/brand-img3.png') }}" alt="">
            </div>
          </div>

          <div class="slider-boxarea">
            <div class="content">
              <a href="testimonials">Product Design</a>
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/brand-img1.png') }}" alt="">
            </div>
          </div>

          <div class="slider-boxarea">
            <div class="content">
              <a href="testimonials">Branding Design</a>
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/brand-img2.png') }}" alt="">
            </div>
          </div>

          <div class="slider-boxarea">
            <div class="content">
              <a href="testimonials">Digital Marketing</a>
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/brand-img3.png') }}" alt="">
            </div>
          </div>
        </div>

        <div class="slider-all-boxarea2">
          <div class="slider-boxarea">
            <div class="content">
              <a href="testimonials">Sass Landing</a>
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/brand-img4.png') }}" alt="">
            </div>
          </div>

          <div class="slider-boxarea">
            <div class="content">
              <a href="testimonials">SEO Strategy</a>
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/brand-img5.png') }}" alt="">
            </div>
          </div>

          <div class="slider-boxarea">
            <div class="content">
              <a href="testimonials">Web Development</a>
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/brand-img6.png') }}" alt="">
            </div>
          </div>

          <div class="slider-boxarea">
            <div class="content">
              <a href="testimonials">Sass Landing</a>
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/brand-img7.png') }}" alt="">
            </div>
          </div>

          <div class="slider-boxarea">
            <div class="content">
              <a href="testimonials">SEO Strategy</a>
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/brand-img8.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== SLIDER AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service5-section-area sp1" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="service-header text-center heading10">
                    <h5><img src="{{ URL::asset('build/img/icons/logo-icons6.svg') }}" alt="">Our SEO Services</h5>
                    <h2 class="text-anime-style-3">Elevating Your Online Presence with Expert SEO & Digital Marketing Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
            <div class="service-author-boxarea">
                <h4>01</h4>
                <div class="space40"></div>
                <div class="img1 image-anime">
                    <img src="{{ URL::asset('build/img/all-images/service-img2.png') }}" alt="">
                </div>
                <div class="space40"></div>
                <div class="content-area">
                    <a href="service1">Social Media Marketing</a>
                    <p>Build a strong brand presence & engage with your audience on social media platforms. We create strategic social media campaigns.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
          <div class="service-author-boxarea box2">
              <h4>02</h4>
              <div class="space40"></div>
              <div class="img1 image-anime">
                  <img src="{{ URL::asset('build/img/all-images/service-img3.png') }}" alt="">
              </div>
              <div class="space40"></div>
              <div class="content-area">
                  <a href="service1">Search Engine Optimization</a>
                  <p>Enhance your online visibility & drive organic traffic with our advanced SEO techniques. We optimize your website to rank higher.</p>
              </div>
          </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
        <div class="service-author-boxarea box3">
            <h4>03</h4>
            <div class="space40"></div>
            <div class="img1 image-anime">
                <img src="{{ URL::asset('build/img/all-images/service-img4.png') }}" alt="">
            </div>
            <div class="space40"></div>
            <div class="content-area">
                <a href="service1">Website Design & Development</a>
                <p>Make a lasting impression with professionally designed and user-friendly website. Our web design and development services website.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
      <div class="space30"></div>
      <div class="btn-area1 text-center" data-aos="fade-up" data-aos-duration="1200">
        <a href="contact" class="header-btn11">Get Started Now <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
        </div>
    </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== CASE AREA STARTS =======-->
<div class="case5-section-area sp1" id="case">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="case5-header text-center heading10">
                    <h5> <img src="{{ URL::asset('build/img/icons/logo-icons6.svg') }}" alt="">Case Study</h5>
                    <h2 class="text-anime-style-3"> Driving Growth Through Strategic SEO and Digital Marketing</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="case-widget-area" data-aos="fade-left" data-aos-duration="1000">
                    <div class="content-area">
                        <span>01</span>
                        <div class="main-content">
                            <a href="case-single">SEO Optimization</a>
                        <p>We began by optimizing [Client Name]'s website for relevant keywords related <br class="d-lg-block d-none"> to their products and target audience. This included on-page optimization,</p>
                        </div>
                    </div>
                    <div class="hidden-img img1">
                        <a href="case-single"><img src="{{ URL::asset('build/img/all-images/hidden-img.png') }}" alt=""></a>
                    </div>
                    <div class="arrow-btn">
                        <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="case-widget-area" data-aos="fade-right" data-aos-duration="1200">
                    <div class="content-area">
                        <span>02</span>
                        <div class="main-content">
                            <a href="case-single">Content Marketing</a>
                        <p>We began by optimizing [Client Name]'s website for relevant keywords related <br class="d-lg-block d-none"> to their products and target audience. This included on-page optimization,</p>
                        </div>
                    </div>
                    <div class="hidden-img img2">
                        <a href="case-single"><img src="{{ URL::asset('build/img/all-images/hidden-img2.png') }}" alt=""></a>
                    </div>
                    <div class="arrow-btn">
                        <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="case-widget-area" data-aos="fade-left" data-aos-duration="1400">
                    <div class="content-area">
                        <span>03</span>
                        <div class="main-content">
                            <a href="case-single">Social Media Marketing</a>
                        <p>We began by optimizing [Client Name]'s website for relevant keywords related <br class="d-lg-block d-none"> to their products and target audience. This included on-page optimization,</p>
                        </div>
                    </div>
                    <div class="hidden-img img3">
                        <a href="case-single"><img src="{{ URL::asset('build/img/all-images/hidden-img3.png') }}" alt=""></a>
                    </div>
                    <div class="arrow-btn">
                        <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== CASE AREA ENDS =======-->

<!--===== TEAM AREA STARTS =======-->
<div class="team5-section-area sp2" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="team-header text-center heading10">
                    <h5><img src="{{ URL::asset('build/img/icons/logo-icons6.svg') }}" alt="">Team</h5>
                    <h2 class="text-anime-style-3">Meet Our Expert Team</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                <div class="team5-author-boxarea">
                    <div class="imges image-anime">
                        <img src="{{ URL::asset('build/img/all-images/team-img5.png') }}" alt="">
                    </div>
                    <div class="team-sociala-area">
                        <div class="icons">
                            <div class="plus">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="minus">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                        </div>

                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook5.svg') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin5.svg') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram5.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/youtube1.svg') }}" alt=""></a></li>
                           </ul>
                        </div>
                    </div>
                    <div class="content-area">
                        <a href="team">Jane Smith</a>
                        <p>CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                <div class="team5-author-boxarea">
                    <div class="imges image-anime">
                        <img src="{{ URL::asset('build/img/all-images/team-img6.png') }}" alt="">
                    </div>
                    <div class="team-sociala-area">
                        <div class="icons">
                            <div class="plus">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="minus">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                        </div>

                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook5.svg') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin5.svg') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram5.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/youtube1.svg') }}" alt=""></a></li>
                           </ul>
                        </div>
                    </div>
                    <div class="content-area">
                        <a href="team">John Doe</a>
                        <p>Digital Marketing Officer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                <div class="team5-author-boxarea">
                    <div class="imges image-anime">
                        <img src="{{ URL::asset('build/img/all-images/team-img7.png') }}" alt="">
                    </div>
                    <div class="team-sociala-area">
                        <div class="icons">
                            <div class="plus">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="minus">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                        </div>

                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook5.svg') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin5.svg') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram5.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/youtube1.svg') }}" alt=""></a></li>
                           </ul>
                        </div>
                    </div>
                    <div class="content-area">
                        <a href="team">Sarah Thompson </a>
                        <p>Web Designer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-duration="1400">
                <div class="team5-author-boxarea">
                    <div class="imges image-anime">
                        <img src="{{ URL::asset('build/img/all-images/team-img8.png') }}" alt="">
                    </div>
                    <div class="team-sociala-area">
                        <div class="icons">
                            <div class="plus">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="minus">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                        </div>

                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook5.svg') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin5.svg') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram5.png') }}" alt=""></a></li>
                                <li><a href="#"><img src="{{ URL::asset('build/img/icons/youtube1.svg') }}" alt=""></a></li>
                           </ul>
                        </div>
                    </div>
                    <div class="content-area">
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
<div class="testimonial5-section-area sp1" id="testimonial" style="background-image: url(build/img/bg/header-bg5.png); background-size: cover; background-repeat: no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 m-auto">
        <div class="testimonial-header-area text-center heading10">
          <h5><img src="{{ URL::asset('build/img/icons/logo-icons5.svg') }}" alt="">Testimonials</h5>
          <h2 class="text-anime-style-3">Client Success Stories: Hear What Our Clients Have To Say</h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="testimonial-sliders text-center" data-aos="zoom-out" data-aos-duration="1000">
          <div class="testimonial-nav ">
            <div class="single-testimonial-nav">
              <img src="{{ URL::asset('build/img/all-images/testimonial-img5.png') }}" alt="">
            </div>
            <div class="single-testimonial-nav">
              <img src="{{ URL::asset('build/img/all-images/testimonial-img6.png') }}" alt="">
            </div>
            <div class="single-testimonial-nav">
              <img src="{{ URL::asset('build/img/all-images/testimonial-img7.png') }}" alt="">
            </div>
            <div class="single-testimonial-nav">
              <img src="{{ URL::asset('build/img/all-images/testimonial-img8.png') }}" alt="">
            </div>
            <div class="single-testimonial-nav">
              <img src="{{ URL::asset('build/img/all-images/testimonial-img9.png') }}" alt="">
            </div>
            <div class="single-testimonial-nav">
              <img src="{{ URL::asset('build/img/all-images/testimonial-img5.png') }}" alt="">
            </div>

          </div>

          <div class="slider-testimonial">

            <div class="single-testimonial">
              <h5>“Working with TechXen has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
              <div class="author">
                <a href="team">Leslie Alexander</a>
                <p>CEO, Business Administ</p>
              </div>
            </div>
            <div class="single-testimonial">
              <h5>“Working with TechXen has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
              <div class="author">
                <a href="team">Leslie Alexander</a>
                <p>CEO, Business Administ</p>
              </div>
            </div>
            <div class="single-testimonial">
              <h5>“Working with TechXen has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
              <div class="author">
                <a href="team">Leslie Alexander</a>
                <p>CEO, Business Administ</p>
              </div>
            </div>
            <div class="single-testimonial">
              <h5>“Working with TechXen has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
              <div class="author">
                <a href="team">Leslie Alexander</a>
                <p>CEO, Business Administ</p>
              </div>
            </div>
            <div class="single-testimonial">
              <h5>“Working with TechXen has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
              <div class="author">
                <a href="team">Leslie Alexander</a>
                <p>CEO, Business Administ</p>
              </div>
            </div>
            <div class="single-testimonial">
              <h5>“Working with TechXen has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
              <div class="author">
                <a href="team">Leslie Alexander</a>
                <p>CEO, Business Administ</p>
              </div>
            </div>
          </div>
          <div class="testimonial-arrows">
            <div class="testimonial-prev-arrow">
              <button><i class="fa-solid fa-angle-left"></i></button>
            </div>
            <div class="testimonial-next-arrow">
              <button><i class="fa-solid fa-angle-right"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->

<!--===== BLOG AREA STARTS =======-->
<div class="blog5-section-area sp1" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="blog-header-area text-center heading10">
                    <h5><img src="{{ URL::asset('build/img/icons/logo-icons6.svg') }}" alt="">Blog</h5>
                    <h2 class="text-anime-style-3">Explore Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="blog-all-section">
                   <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-lg-4 col-md-6">
                        <div class="imges1 image-anime reveal">
                            <img src="{{ URL::asset('build/img/all-images/blog-img8.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="content-area">
                            <div class="main-content">
                                <h5>Content Marketing</h5>
                                <a href="blog-single">The Power of Content Marketing: How to Drive <br class="d-lg-block d-none"> Engagement and Grow Your Business</a>
                                <a href="blog-single" class="text"><img src="{{ URL::asset('build/img/all-images/blog-img11.png') }}" alt="">Jane Smith</a>
                            </div>
                            <div class="arrow">
                                <a href="blog-single"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                   </div>
                   <div class="space60"></div>
                   <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1200">
                    <div class="col-lg-4 col-md-6">
                        <div class="imges1 image-anime reveal">
                            <img src="{{ URL::asset('build/img/all-images/blog-img9.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="content-area">
                            <div class="main-content">
                                <h5>Digital Marketing</h5>
                                <a href="blog-single">The Importance of SEO in Digital Marketing: <br class="d-lg-block d-none"> A Comprehensive Guide</a>
                                <a href="blog-single" class="text"><img src="{{ URL::asset('build/img/all-images/blog-img12.png') }}" alt="">Jane Smith</a>
                            </div>
                            <div class="arrow">
                                <a href="blog-single"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                   </div>
                   <div class="space60"></div>
                   <div class="row align-items-center" data-aos="fade-up" data-aos-duration="1400">
                    <div class="col-lg-4 col-md-6">
                        <div class="imges1 image-anime reveal">
                            <img src="{{ URL::asset('build/img/all-images/blog-img10.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="content-area">
                            <div class="main-content">
                                <h5>Social Media Marketing</h5>
                                <a href="blog-single">The Power of Social Media Marketing: How to Build <br class="d-lg-block d-none"> Your Brand and Engage Your Audience</a>
                                <a href="blog-single" class="text"><img src="{{ URL::asset('build/img/all-images/blog-img13.png') }}" alt="">Jane Smith</a>
                            </div>
                            <div class="arrow">
                                <a href="blog-single"><i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== BLOG AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact5-section-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 m-auto">
          <div class="contact-header-area text-center heading10">
            <h5><img src="{{ URL::asset('build/img/icons/logo-icons6.svg') }}" alt="">Contact</h5>
            <h2 class="text-anime-style-3">Contact Our SEO Expert</h2>          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5" data-aos="zoom-in" data-aos-duration="1200">
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
        <div class="col-lg-7" data-aos="zoom-in" data-aos-duration="1200">
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
                    <button class="header-btn11">Get Started Now <span><i class="fa-solid fa-arrow-right"></i></span></button>
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

<!--===== CTA AREA STARTS =======-->
<div class="cta5-section-area sp1" style="background-image: url(build/img/bg/header-bg5.png); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="cta-header-area text-center heading10">
                    <h2 class="text-anime-style-3">Ready To Take Your Digital Marketing To the Next Level?</h2>
                    <p data-aos="fade-up" data-aos-duration="1000">Effective SEO strategies not only elevate a website's visibility but also drive <br class="d-lg-block d-none"> targeted traffic, enhance user experience,</p>
                    <div class="btn-area1" data-aos="fade-up" data-aos-duration="1200">
                        <a href="contact" class="header-btn9">Get Started Today <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="contact" class="header-btn10">Request a Consultation <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!--===== CTA AREA ENDS =======-->

<!--===== FOOTER AREA STARTS =======-->
<div class="footer5-section-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-logo-area">
            <img src="{{ URL::asset('build/img/logo/logo7.png') }}" alt="">
            <p>By optimizing content, leveraging relevant keywords, and adhering to best practices, businesses can secure prominent position (SEO)</p>
            <ul>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook5.svg') }}" alt=""></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram5.png') }}" alt=""></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin5.svg') }}" alt=""></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/youtube1.svg') }}" alt=""></a></li>
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
              <button class="header-btn11"> Subscribe <i class="fa-solid fa-arrow-right"></i></button>
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