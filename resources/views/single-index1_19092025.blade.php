@extends('layouts.homepage')
@section('title', 'TechSolutions - Consultoria e Desenvolvimento')
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
                <a href="index"><img src="{{ URL::asset('build/img/logo/logo1.png') }}" alt="TechSolutions"></a>
              </div>
              <div class="main-menu">
                <ul>
                    <li class="nav-item"><a href="#about" class="nav-link active"><span>Sobre</span></a></li>
                    <li class="nav-item"><a href="#service" class="nav-link"><span>Soluções</span></a></li>
                    <li class="nav-item"><a href="#work" class="nav-link"><span>Nossos Valores</span></a></li>
                    <li class="nav-item"><a href="#testimonials" class="nav-link"><span>Depoimentos</span></a></li>
                    <li class="nav-item"><a href="#blog" class="nav-link"><span>Blog</span></a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link"><span>Contato</span></a></li>
                </ul>
              </div>
              <div class="btn-area">
                <div class="search-icon header__search header-search-btn">
                  <a href="#"><img src="{{ URL::asset('build/img/icons/search-icons1.svg') }}" alt=""></a>
                </div>
                <a href="contact" class="header-btn1">Consultoria Gratuita <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>

              <div class="header-search-form-wrapper">
                <div class="tx-search-close tx-close"><i class="fa-solid fa-xmark"></i></div>
                <div class="header-search-container">
                    <form role="search" class="search-form">
                    <input type="search"  class="search-field" placeholder="Buscar …" value="" name="s">
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
          <a href="index"><img src="{{ URL::asset('build/img/logo/logo1.png') }}" alt="TechSolutions"></a>
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
      <img src="{{ URL::asset('build/img/logo/logo1.png') }}" alt="TechSolutions">
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
   </div>
  <div class="mobile-nav mobile-nav1">
    <ul class="mobile-nav-list nav-list1">
      <li class="nav-item"><a href="#about" class="nav-link active"><span>Sobre</span></a></li>
      <li class="nav-item"><a href="#service" class="nav-link"><span>Soluções</span></a></li>
      <li class="nav-item"><a href="#work" class="nav-link"><span>Nossos Valores</span></a></li>
      <li class="nav-item"><a href="#testimonials" class="nav-link"><span>Depoimentos</span></a></li>
      <li class="nav-item"><a href="#blog" class="nav-link"><span>Blog</span></a></li>
      <li class="nav-item"><a href="#contact" class="nav-link"><span>Contato</span></a></li>
    </ul>

    <div class="allmobilesection">
      <a href="contact" class="header-btn1">Começar Agora <span><i class="fa-solid fa-arrow-right"></i></span></a>
      <div class="single-footer">
        <h3>Informações de Contato</h3>
        <div class="footer1-contact-info">
          <div class="contact-info-single">
            <div class="contact-info-icon">
              <i class="fa-solid fa-phone-volume"></i>
            </div>
            <div class="contact-info-text">
              <a href="tel:+55(11)99999-9999">+55 (11) 99999-9999</a>
            </div>
          </div>

          <div class="contact-info-single">
            <div class="contact-info-icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="contact-info-text">
              <a href="mailto:contato@techsolutions.com.br">contato@techsolutions.com.br</a>
            </div>
          </div>

          <div class="single-footer">
            <h3>Nossa Localização</h3>
            
            <div class="contact-info-single">
              <div class="contact-info-icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="contact-info-text">
                <a href="#" >São Paulo, SP <br> Brasil</a>
              </div>
            </div>

          </div>
          <div class="single-footer">
            <h3>Redes Sociais</h3>
            
            <div class="social-links-mobile-menu">
              <ul>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>
<!--===== MOBILE HEADER ENDS =======-->

<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area" style="background-image: url(build/img/bg/header-bg1.png);">
  <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="header-main-content heading1">
          <h5><img src="{{ URL::asset('build/img/icons/logo-icons.svg') }}" alt="">Consultoria #1 em Desenvolvimento de Software</h5>
          <h1 class="text-anime-style-3">Transformamos Ideias em Soluções Digitais Inovadoras</h1>
          <p data-aos="fade-left" data-aos-duration="1000">Bem-vindo à TechSolutions, onde especializamos em revolucionar sua presença online <br class="d-lg-block d-none"> através de soluções tecnológicas e desenvolvimento de software sob medida.</p>
          <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
            <a href="contact" class="header-btn1">Comece Agora <span><i class="fa-solid fa-arrow-right"></i></span></a>
            <a href="contact" class="header-btn2">Falar Conosco <span><i class="fa-solid fa-arrow-right"></i></span></a>
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

<!--===== BRANDS AREA STARTS =======-->
<div class="slider-section-area sp5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-2">
        <div class="sldier-head">
          <p>Confiado pelas <br class="d-lg-block d-none"> Melhores Empresas</p>
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
<!--===== BRANDS AREA ENDS =======-->

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
          <h2 class="text-anime-style-3">Soluções Completas em Consultoria & Desenvolvimento de Software</h2>
          <p data-aos="fade-left" data-aos-duration="1000">Bem-vindo à TechSolutions, sua parceira confiável para soluções abrangentes em consultoria e desenvolvimento de software. Com nossa expertise comprovada e estratégias inovadoras, navegamos no cenário digital.</p>
          <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
            <a href="about" class="header-btn1">Saiba Mais<span><i class="fa-solid fa-arrow-right"></i></span></a>
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
          <h2 class="text-anime-style-3">Soluções Digitais Populares <br class="d-md-block d-none"> Para Impulsionar Seu Negócio</h2>
          <p data-aos="fade-up" data-aos-duration="1000">Nossa equipe especializada se dedica a entregar soluções sob medida projetadas para elevar <br class="d-md-block d-none"> sua marca e gerar resultados mensuráveis.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="service-all-boxes-area">
          <div class="service-boxarea" data-aos="zoom-in" data-aos-duration="800">
            <a href="service1">ChatBot + CRM Inteligente</a>
            <div class="space40"></div>
            <img src="{{ URL::asset('build/img/icons/service-icon1.svg') }}" alt="">
            <div class="space40"></div>
            <p>Sistema completo de atendimento automatizado integrado com CRM para gestão eficiente de leads, agendamentos e mensagens 24/7.</p>
          </div>

          <div class="service-boxarea box2" data-aos="zoom-in" data-aos-duration="1000">
            <a href="service1">ZapDelivery para Restaurantes</a>
            <div class="space40"></div>
            <img src="{{ URL::asset('build/img/icons/service-icon2.svg') }}" alt="">
            <div class="space40"></div>
            <p>Plataforma completa para bares e restaurantes com gestão de pedidos, catálogo personalizado e sistema de delivery integrado.</p>
          </div>

          <div class="service-boxarea box3" data-aos="zoom-in" data-aos-duration="1200">
            <a href="service1">MinhaLoja E-commerce</a>
            <div class="space66"></div>
            <img src="{{ URL::asset('build/img/icons/service-icon3.svg') }}" alt="">
            <div class="space40"></div>
            <p>E-commerce completo para cadastro de lojas e produtos com interface intuitiva, sistema de pagamentos e painel administrativo.</p>
          </div>

          <div class="service-boxarea box4" data-aos="zoom-in" data-aos-duration="1400">
            <a href="service1">MeuServiço Agendamentos</a>
            <div class="space40"></div>
            <img src="{{ URL::asset('build/img/icons/service-icon4.svg') }}" alt="">
            <div class="space40"></div>
            <p>Sistema de agendamento para prestadores de serviços como barbearias, clínicas, com gestão de profissionais e horários.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== VALUES AREA STARTS =======-->
<div class="service2-section-area sp6" id="work">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="service2-header heading2 text-center">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star3 keyframe5">
          <h2 class="text-anime-style-3">Soluções Personalizadas, Resultados Comprovados <br class="d-md-block d-none"> E Atendimento Excepcional</h2>
          <p data-aos="fade-up" data-aos-duration="1000">Orgulhamos em entregar uma proposta de valor que vai além das expectativas. Nossa <br class="d-md-block d-none"> abordagem é centrada em compreender seu negócio por completo</p>
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
            <h5>Nosso Valor</h5>
            <a href="service1" class="text text-anime-style-3">Explore Nossa Proposta de Valor Única & Como Impulsionamos o Crescimento dos Negócios</a>
            <p data-aos="fade-up" data-aos-duration="1000">Estamos comprometidos em entregar valor excepcional aos nossos clientes. Entendemos que cada negócio é único, por isso nossa abordagem personalizada para cada projeto que assumimos.</p>
            <div class="btn-area" data-aos="fade-up" data-aos-duration="1200">
              <a href="service1" class="header-btn1">Saiba Mais <span><i class="fa-solid fa-arrow-right"></i></span>
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
                <a href="case-single">Analytics & Relatórios</a>
                <p>Análises detalhadas e relatórios completos para acompanhar o desempenho e tomar decisões baseadas em dados.</p>
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
          <h2 class="text-anime-style-3">O Que Nossos Clientes Dizem <br class="d-md-block d-none"> Sobre Nossos Serviços</h2>
          <p data-aos="fade-up" data-aos-duration="1000">Não apenas acredite em nossa palavra. Ouça o que nossos clientes satisfeitos <br class="d-md-block d-none"> têm a dizer sobre sua experiência em parceria com a TechSolutions</p>
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
                  <p>"Trabalhar com a TechSolutions foi um divisor de águas para nosso negócio. A expertise deles em desenvolvimento de software e soluções digitais nos ajudou a alcançar resultados extraordinários e aumentar significativamente nossa presença online."</p>
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
                      <a href="team">Ana Silva</a>
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
                  <p>"O sistema ZapDelivery revolucionou nosso restaurante. Agora conseguimos gerenciar todos os pedidos de forma eficiente e nossos clientes adoram a facilidade de fazer pedidos pelo WhatsApp. Aumento de 40% nas vendas!"</p>
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
                      <a href="team">Carlos Roberto</a>
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
                  <p>"O MeuServiço transformou minha barbearia. Os agendamentos ficaram organizados, os clientes podem marcar pelo celular e não temos mais conflitos de horário. Recomendo para todos os profissionais!"</p>
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
                      <a href="team">Pedro Oliveira</a>
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
          <h2 class="text-anime-style-3">Insights & Inovações: <br class="d-md-block d-none"> Nossos Últimos Posts do Blog</h2>
          <p data-aos="fade-up" data-aos-duration="1000">Explore nosso blog para descobrir insights acionáveis, histórias de sucesso e <br class="d-md-block d-none"> conselhos de especialistas que podem ajudar a impulsionar o crescimento do seu negócio.</p>
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
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">TechSolutions</a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">15 Janeiro 2025</a></li>
              </ul>
            </div>
            <a href="blog-single">10 Dicas Essenciais para Escolher o Sistema Ideal para seu Negócio</a>
            <p>Está procurando melhorar a eficiência do seu negócio e automatizar processos?</p>
            <a href="blog-single" class="readmore">Leia Mais <i class="fa-solid fa-arrow-right"></i></a>
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
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">TechSolutions</a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">10 Janeiro 2025</a></li>
              </ul>
            </div>
            <a href="blog-single">Como o ChatBot Pode Revolucionar o Atendimento do Seu Negócio</a>
            <p>Desbloqueie todo o potencial da sua estratégia de atendimento com chatbots inteligentes.</p>
            <a href="blog-single" class="readmore">Leia Mais <i class="fa-solid fa-arrow-right"></i></a>
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
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">TechSolutions</a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">05 Janeiro 2025</a></li>
              </ul>
            </div>
            <a href="blog-single">A Importância de um E-commerce Responsivo na Era Digital</a>
            <p>Em um mundo onde dispositivos móveis dominam, ter um e-commerce responsivo é crucial.</p>
            <a href="blog-single" class="readmore">Leia Mais <i class="fa-solid fa-arrow-right"></i></a>
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
          <h2 class="text-anime-style-3">Entre em Contato Conosco Hoje</h2>
          <p>Estamos aqui para ajudar! Se você tem alguma dúvida ou gostaria de discutir <br class="d-md-block d-none"> como nossas soluções tecnológicas podem beneficiar seu negócio,</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5" data-aos="zoom-out" data-aos-duration="1000">
        <div class="contact-info-area">
          <h3>Informações de Contato</h3>
          <p>Estamos aqui para ajudar! Se você tem alguma dúvida ou gostaria de discutir como nossas soluções tecnológicas e desenvolvimento de software podem beneficiar seu negócio,</p>
          <div class="space32"></div>
          <div class="contact-auhtor-box">
            <div class="icons">
              <img src="{{ URL::asset('build/img/icons/location2.svg') }}" alt="">
            </div>
            <div class="content">
              <h4>Nossa Localização</h4>
              <a href="#">São Paulo, SP <br class="d-lg-block d-none"> Brasil</a>
            </div>
          </div>
          <div class="space40"></div>
          <div class="contact-auhtor-box">
            <div class="icons">
              <img src="{{ URL::asset('build/img/icons/phone2.svg') }}" alt="">
            </div>
            <div class="content">
              <h4>Telefone</h4>
              <a href="tel:+5511999999999">+55 (11) 99999-9999<br>
                +55 (11) 99999-9999</a>
            </div>
          </div>
          <div class="space40"></div>
          <div class="contact-auhtor-box">
            <div class="icons">
              <img src="{{ URL::asset('build/img/icons/email2.svg') }}" alt="">
            </div>
            <div class="content">
              <h4>E-mail</h4>
              <a href="mailto:contato@techsolutions.com.br">contato@techsolutions.com.br<br>
              suporte@techsolutions.com.br</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="zoom-out" data-aos-duration="1200">
        <div class="contact-boxarea">
           <h3>Entre em Contato</h3>
           <p>Estamos aqui para ajudar! Se você tem alguma dúvida ou gostaria de discutir <br class="d-lg-block d-none"> como nossas soluções tecnológicas podem beneficiar seu negócio,</p>
           <form action="https://api.web3forms.com/submit" method="POST">
            <div class="row">
              <div class="col-lg-6">
                <div class="input-area">
                  <input type="text" placeholder="Nome" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-area">
                  <input type="text" placeholder="Sobrenome" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-area">
                  <input type="email" placeholder="E-mail" required>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="input-area">
                  <input type="tel" placeholder="Telefone/WhatsApp" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-area">
                  <select name="service" id="service" class="service-area nice-select6">
                    <option value="1" data-display="Tipo de Solução">Tipo de Solução</option>
                    <option value="chatbot">ChatBot + CRM</option>
                    <option value="zapdelivery">ZapDelivery</option>
                    <option value="minhaloja">MinhaLoja</option>
                    <option value="meuservico">MeuServiço</option>
                    <option value="consultoria">Consultoria Personalizada</option>
                    <option value="desenvolvimento">Desenvolvimento Sob Medida</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-area">
                  <textarea placeholder="Conte-nos mais sobre seu projeto..." required></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-area">
                  <button class="header-btn1">Consultoria Gratuita <span><i class="fa-solid fa-arrow-right"></i></span></button>
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

</div>
@endsection">
                  <h5>Nossa Missão</h5>
                  <a href="service1">Nos esforçamos para ser mais que um provedor de serviços; visamos ser sua TechSolutions confiável</a>
                  <p>Mantendo-nos fiéis à nossa missão e valores, estamos comprometidos em ajudar empresas de todos os tamanhos a alcançar seus objetivos, realizar seu potencial e formar.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-12 col-md-6">
              <div class="service2-auhtor2-boxarea" data-aos="zoom-out" data-aos-duration="1200">
                <div class="arrow">
                  <a href="service1"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="content-area">
                  <h5>Nossa Visão</h5>
                  <a href="service1">Aspiramos criar um mundo onde todo empresário se sinta empoderado</a>
                  <p>Mantendo-nos fiéis à nossa visão e valores, estamos comprometidos em impulsionar mudanças positivas e moldar um futuro melhor para empresas e comunidades.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== VALUES AREA ENDS =======-->

<!--===== CASE AREA STARTS =======-->
<div class="case1-section-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="case-header-area heading2 text-center">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
          <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star3 keyframe5">
          <h2 class="text-anime-style-3">Benefícios das Nossas Soluções Digitais</h2>
          <p data-aos="fade-up" data-aos-duration="1000">Ao investir em nossas soluções tecnológicas estratégicas, as empresas podem <br class="d-md-block d-none"> desbloquear uma infinidade de benefícios.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12" data-aos="zoom-out" data-aos-duration="1200">
          <div class="cs_case_study_1_list">
            <div class="cs_case_study cs_style_1 cs_hover_active active" data-aos="fade-up" data-aos-duration="800">
              <a href="case-single" class="cs_case_study_thumb cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img1.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">ChatBot + CRM Inteligente</a>
              </div>
              <div class="content-area">
                <a href="case-single">ChatBot + CRM Inteligente</a>
                <p>Entendemos o papel crítico que um sistema de atendimento bem projetado e user-friendly desempenha na formação da sua presença online.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up" data-aos-duration="900">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb2 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img2.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">ZapDelivery</a>
              </div>
              <div class="content-area">
                <a href="case-single">ZapDelivery</a>
                <p>Plataforma completa para restaurantes com gestão de pedidos, catálogo personalizado e controle total do delivery.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up" data-aos-duration="1000">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb3 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img3.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">MinhaLoja E-commerce</a>
              </div>
              <div class="content-area">
                <a href="case-single">MinhaLoja E-commerce</a>
                <p>E-commerce completo com sistema de pagamentos, gestão de produtos e painel administrativo intuitivo.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up" data-aos-duration="1100">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb4 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img4.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">MeuServiço</a>
              </div>
              <div class="content-area">
                <a href="case-single">MeuServiço</a>
                <p>Sistema de agendamento para profissionais liberais com gestão completa de horários e clientes.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up" data-aos-duration="1200">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb5 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img5.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">Consultoria Personalizada</a>
              </div>
              <div class="content-area">
                <a href="case-single">Consultoria Personalizada</a>
                <p>Consultoria especializada para identificar as melhores soluções tecnológicas para seu negócio específico.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active" data-aos="fade-up" data-aos-duration="1300">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb6 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img6.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">Desenvolvimento Sob Medida</a>
              </div>
              <div class="content-area">
                <a href="case-single">Desenvolvimento Sob Medida</a>
                <p>Desenvolvimento de soluções personalizadas que atendem exatamente às necessidades específicas do seu negócio.</p>
              </div>
            </div>
            <div class="cs_case_study cs_style_1 cs_hover_active " style="margin: 0 !important;" data-aos="fade-up" data-aos-duration="1400">
              <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb7 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img7.png') }}"></a>
              <div class="content-area1">
                <a href="case-single">Analytics & Relatórios</a>
              </div>
              <div class="content-area