@extends('layouts.homepage')
@section('title', 'Home9')
@section('fav')

    <link rel="shortcut icon" href="{{ URL::asset('build/img/logo/fav-logo8.png') }}" type="image/x-icon">

@endsection 

<body class="homepage9-body">
@section('content')

<!--===== PRELOADER STARTS =======-->
<div class="preloader prelodaer9">
  <div class="loading-container">
    <div class="loading"></div>
    <div id="loading-icon"><img src="{{ URL::asset('build/img/logo/prelodaer8.png') }}" alt=""></div>
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
   <header class="homepage9-body">
    <div class="header-area homepage9 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav id="navbar-example2" class="navbar">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index"><img src="{{ URL::asset('build/img/logo/logo10.png') }}" alt=""></a>
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
                <div class="search-icon header__search header-search-btn">
                  <a href="#"><img src="{{ URL::asset('build/img/icons/search-icons1.svg') }}" alt=""></a>
                </div>
                <a href="contact" class="header-btn16">Free Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
 <div class="mobile-header mobile-haeder9 d-block d-lg-none">
  <div class="container-fluid">
    <div class="col-12">
      <div class="mobile-header-elements">
        <div class="mobile-logo">
          <a href="index"><img src="{{ URL::asset('build/img/logo/logo10.png') }}" alt=""></a>
        </div>
        <div class="mobile-nav-icon dots-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-sidebar mobile-sidebar9">
  <div class="logosicon-area">
    <div class="logos">
      <img src="{{ URL::asset('build/img/logo/logo10.png') }}" alt="">
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
      <a href="contact"  class="header-btn16">Get Started <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
<div class="hero9-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 m-auto">
                <div class="hero9-header heading3 text-center">
                    <h1 class="text-anime-style-3">Skyrocket Your Online Growth With Premier SEO Services</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="homepage-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="header-author-area">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="header-area">
                                <h5><img src="{{ URL::asset('build/img/icons/logo-icons2.svg') }}" alt="">Top #1 SEO & Marketing Agency</h5>
                                <div class="space16"></div>
                                <h2 class="text-anime-style-3">Grow Your Online Presence With Customized SEO And Digital Marketing Solution's.</h2>
                                <div class="space32"></div>
                                <div class="btn-area1">
                                    <a href="about" class="header-btn16">Learn More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                                <div class="space32"></div>
                                <div class="counter-boxarea">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-6">
                                            <div class="counter-box">
                                                <h2><span class="counter">500</span>+</h2>
                                                <div class="space16"></div>
                                                <p>Campaigns</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-6">
                                            <div class="counter-box">
                                                <h2><span class="counter">98</span>%</h2>
                                                <div class="space16"></div>
                                                <p>Client Satisfaction</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-6">
                                            <div class="counter-box">
                                                <h2><span class="counter">25</span>+</h2>
                                                <div class="space16"></div>
                                                <p>Country Reach</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="header-bottom-img owl-carousel">
                                <div class="img1">
                                    <img src="{{ URL::asset('build/img/all-images/header-img12.png') }}" alt="">
                                </div>

                                <div class="img1">
                                    <img src="{{ URL::asset('build/img/all-images/header-img12.png') }}" alt="">
                                </div>

                                <div class="img1">
                                    <img src="{{ URL::asset('build/img/all-images/header-img12.png') }}" alt="">
                                </div>

                                <div class="img1">
                                    <img src="{{ URL::asset('build/img/all-images/header-img12.png') }}" alt="">
                                </div>
                            </div>
                        </div>
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
<div class="about1-section-area sp1 bg3" id="about">
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
        <div class="about-content-area heading14">
          <div class="arrow-circle">
          <a href="about">
            <img src="{{ URL::asset('build/img/elements/elements4.png') }}" alt="" class="elements4 keyframe5">
            <img src="{{ URL::asset('build/img/icons/arrow.svg') }}" alt="" class="arrow">
          </a>
          </div>
          <h2 class="text-anime-style-3">Comprehensive SEO & Digital Marketing Solutions.</h2>
          <p data-aos="fade-left" data-aos-duration="1000">Welcome to SEOC your trusted partner for comprehensive SEO and digital marketing solutions. With our proven expertise and innovative strategies the digital landscape.</p>
          <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
            <a href="about" class="header-btn16">Learn More<span><i class="fa-solid fa-arrow-right"></i></span></a>
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
  <div class="space100 d-lg-block d-none"></div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service5-section-area sp1" id="service">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 m-auto">
              <div class="service-header text-center heading14">
                  <h5><img src="{{ URL::asset('build/img/icons/logo-icons7.svg') }}" alt="">Our SEO Services</h5>
                  <h2 class="text-anime-style-3">Elevating Your Online Presence With Expert SEO & Digital Marketing Services</h2>
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
                  <a href="service4">Social Media Marketing</a>
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
                <a href="service5">Search Engine Optimization</a>
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
              <a href="service4">Website Design & Development</a>
              <p>Make a lasting impression with professionally designed and user-friendly website. Our web design and development services website.</p>
          </div>
      </div>
  </div>
  <div class="col-lg-12">
    <div class="space30"></div>
    <div class="btn-area1 text-center" data-aos="fade-up" data-aos-duration="1200">
      <a href="service1" class="header-btn16">More Services <span><i class="fa-solid fa-arrow-right"></i></span></a>
    </div>
  </div>
      </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== SOLUTION AREA STARTS =======-->
<div class="solution9-section-area sp1" id="solution">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="solution-header text-center heading14">
          <h5><img src="{{ URL::asset('build/img/icons/logo-icons7.svg') }}" alt="">SEO Solution</h5>
          <h2 class="text-anime-style-3">An Amazing Family Of SEO Solution For Every Need</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 m-auto">
        <div class="solution-boxarea">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="img1" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ URL::asset('build/img/all-images/solution-img1.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
              <div class="step-header">
                <h5 data-aos="fade-left" data-aos-duration="800"><img src="{{ URL::asset('build/img/icons/logo-icons2.svg') }}" alt=""> Step 01</h5>
                <div class="space16"></div>
                <h2 data-aos="fade-left" data-aos-duration="1000">Email Verification</h2>
                <div class="space16"></div>
                <p data-aos="fade-left" data-aos-duration="1100">You might not think much about your email, they could <br class="d-lg-block d-none"> actually determine hou many people see your emails.</p>
                <div class="space32"></div>
                <div data-aos="fade-left" data-aos-duration="1200">
                  <a href="service1" class="header-btn16">View Our Service <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="space32"></div>
        <div class="solution-boxarea2">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="img1" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ URL::asset('build/img/all-images/solution-img2.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
              <div class="step-header">
                <h5 data-aos="fade-left" data-aos-duration="800"><img src="{{ URL::asset('build/img/icons/logo-icons2.svg') }}" alt=""> Step 01</h5>
                <div class="space16"></div>
                <h2 data-aos="fade-left" data-aos-duration="1000">Competitor Analysis</h2>
                <div class="space16"></div>
                <p data-aos="fade-left" data-aos-duration="1100">If you send a lot of bounced or unwanted emails this <br class="d-lg-block d-none"> will leave a negative mark on your sender history.</p>
                <div class="space32"></div>
               <div data-aos="fade-left" data-aos-duration="1200">
                <a href="service1" class="header-btn16">View Our Service <span><i class="fa-solid fa-arrow-right"></i></span></a>
               </div>
              </div>
            </div>
          </div>
        </div>
        <div class="space32"></div>
        <div class="solution-boxarea3">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="img1" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ URL::asset('build/img/all-images/solution-img3.png') }}" alt="">
              </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
              <div class="step-header">
                <h5 data-aos="fade-left" data-aos-duration="800"><img src="{{ URL::asset('build/img/icons/logo-icons2.svg') }}" alt=""> Step 01</h5>
                <div class="space16"></div>
                <h2 data-aos="fade-left" data-aos-duration="1000">Revenue Monitoring</h2>
                <div class="space16"></div>
                <p data-aos="fade-left" data-aos-duration="1100">Verify your list means that you’ll no longer <br class="d-lg-block d-none"> send to dead email addresses.</p>
                <div class="space32"></div>
                <div data-aos="fade-left" data-aos-duration="1200">
                  <a href="service1" class="header-btn16">View Our Service <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== SOLUTION AREA ENDS =======-->

<!--===== PRICING AREA STARTS =======-->
<div class="pricing9-section-area sp2" id="pricing">
  <div class="row">
    <div class="col-lg-6 m-auto">
      <div class="pricing-header text-center heading14">
        <h5><img src="{{ URL::asset('build/img/icons/logo-icons7.svg') }}" alt="">Pricing</h5>
        <h2 class="text-anime-style-3">SEOC Special Pricing Plan </h2>
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
                    <a href="pricing" class="header-btn16">Choose Your Plan <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                  <div class="space32"></div>
                  <div class="list-area">
                      <h5>Service Include:</h5>
                      <ul>
                          <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Keyword Research</li>
                          <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">One Page Optimization</li>
                          <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
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
                    <a href="pricing" class="header-btn16">Choose Your Plan <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                  <div class="space32"></div>
                  <div class="list-area">
                      <h5>Service Include:</h5>
                      <ul>
                          <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Keyword Research</li>
                          <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">One Page Optimization</li>
                          <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
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
                    <a href="pricing" class="header-btn16">Choose Your Plan <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                  <div class="space32"></div>
                  <div class="list-area">
                      <h5>Service Include:</h5>
                      <ul>
                          <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Keyword Research</li>
                          <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">One Page Optimization</li>
                          <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
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

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial9-section-area sp1" id="testimonial">
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
              <h5>“Working with SEOC has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
              <div class="author">
                <a href="team">Leslie Alexander</a>
                <p>CEO, Business Administ</p>
              </div>
            </div>
            <div class="single-testimonial">
              <h5>“Working with SEOC has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
              <div class="author">
                <a href="team">Leslie Alexander</a>
                <p>CEO, Business Administ</p>
              </div>
            </div>
            <div class="single-testimonial">
              <h5>“Working with SEOC has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
              <div class="author">
                <a href="team">Leslie Alexander</a>
                <p>CEO, Business Administ</p>
              </div>
            </div>
            <div class="single-testimonial">
              <h5>“Working with SEOC has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
              <div class="author">
                <a href="team">Leslie Alexander</a>
                <p>CEO, Business Administ</p>
              </div>
            </div>
            <div class="single-testimonial">
              <h5>“Working with SEOC has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
              <div class="author">
                <a href="team">Leslie Alexander</a>
                <p>CEO, Business Administ</p>
              </div>
            </div>
            <div class="single-testimonial">
              <h5>“Working with SEOC has been a game-changer for our business. Their expertise and dedication have helped us achieve unprecedented growth in our online presence.  I highly recommend to any business looking to boost their online visibility and drive meaningful results."</h5>
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
<div class="blog9-scetion-area sp2" id="blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="blog-hedaer-area heading14 text-center">
          <h5><img src="{{ URL::asset('build/img/icons/logo-icons7.svg') }}" alt="">Our Blog</h5>
          <h2 class="text-anime-style-3">Our Latest Blog & News</h2>
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

<!--===== CTA AREA STARTS =======-->
<div class="cta9-section-area">
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
<div class="footer9-section-area">
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
            <button class="header-btn16"> Subscribe <span><i class="fa-solid fa-arrow-right"></i></span></button>
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