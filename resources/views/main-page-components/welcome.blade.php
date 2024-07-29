{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/main_pages_css/main.css">
        <link rel="stylesheet" href="/css/dashboard_css/pages-nav.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <title>Infinity21</title>

    </head>

    @include('main-page-components.inc.header')
    <body>

        
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <img class="swiper-slide" src="/images/main-page-images/header-one.jpg" alt="Снимка слайдър 1">
                <img class="swiper-slide" src="/images/main-page-images/header-two.jpg" alt="Снимка слайдър 2">
                <img class="swiper-slide" src="/images/main-page-images/header-three.jpg" alt="Снимка слайдър 3">
                <img class="swiper-slide" src="/images/main-page-images/header-four.jpg" alt="Снимка слайдър 4">
            </div>
          </div> --}}
    {{-- </body> --}}

    {{-- @include('main-page-components.inc.footer') --}}


    {{-- This message comes from RegisteredUserController.php when a user gets successfully registered --}}
    {{-- @if (session('status'))
    <div class="succes_background">
        <div class="alert alert-success msg_success">
        {{ session('status') }}
        <button class="close_success_modal shadow">Затвори</button>
        </div>
    </div>
    @endif --}}


    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}
    {{-- This JavaScript file (navbar_logic.js) contains all the logic for opening the menu on small screen --}}
    {{-- swiper.js also contains the logic to close the modal with class "close_success_modal" on the main page --}}
    {{-- <script src="/javascript/main-pages-js/swiper.js"></script> --}}
{{-- </html> --}}

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--====== Title ======-->
    <title> Infinity 21 Начална Страница </title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="img/png" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="assets/css/slick.css" />
    <!--====== Magnific ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="/css/main_pages_css/main.css">
</head>

<body>
    

    @if (session('status'))
    <div class="succes_background">
        <div class="alert alert-success msg_success">
        {{ session('status') }}
        <button class="close_success_modal shadow">Затвори</button>
        </div>
    </div>

    <script>
        // This JS Code is here to close the modal by reloading the page
        // This modal appears when you make a registration and it redirects you here on the main page
        let successModal = document.querySelector('.close_success_modal');
        closeModal.addEventListener('click', function () { 
        window.location.reload();
    
        })
        
        </script>

    @endif 

    <!--====== Preloader Start ======-->
    {{-- <div id="preloader">
        <div class="loader-cubes">
            <div class="loader-cube1 loader-cube"></div>
            <div class="loader-cube2 loader-cube"></div>
            <div class="loader-cube4 loader-cube"></div>
            <div class="loader-cube3 loader-cube"></div>
        </div>
    </div> --}}
    <!--====== Preloader End ======-->

    <!--====== Header Part Start ======-->
  @include('main-page-components.inc.header')
    <!--====== Header Part End ======-->

    <!--====== Banner Slider Start ======-->
    <section class="banner-slider banner-slider-one banner-slider-active">
        <div class="single-banner">
            <div class="container-fluid container-1470">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">
                                {{-- <span data-animation="fadeInUp" data-delay="0.3s" class="title-tag">
                                    IT Business Consulting
                                </span> --}}
                                <h1 data-animation="fadeInLeft" data-delay="0.6s" class="title">
                                    LR Health & Beauty - Стандарт за Качество
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">
                                Искате ли да <b>Повишите Доходите</b> си Докато <b>Подобрявате Здравето Си</b>? <br>
                                Разберете Повече за <br> "Нашето Предложение" от бутона
                                </p>
                                <a data-animation="fadeInUp" data-delay="1.1s" class="main-btn rounded-btn icon-right small-size" href="services.html">
                                    Нашето Предложение <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="banner-img" data-animation="fadeInRight" data-delay="0.5s">
                            <img src="assets/img/pic-1.png.svg" alt="Banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-banner">
            <div class="container-fluid container-1470">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">
                                <span data-animation="fadeInUp" data-delay="0.3s" class="title-tag">
                                    IT Business Consulting
                                </span>
                                <h1 data-animation="fadeInLeft" data-delay="0.6s" class="title">
                                    Best IT Soluations Provider Agency
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis
                                </p>
                                <a data-animation="fadeInUp" data-delay="1.1s" class="main-btn rounded-btn icon-right small-size" href="services.html">
                                    Our Services <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="banner-img" data-animation="fadeInRight" data-delay="0.5s">
                            <img src="assets/img/banner/banner-img.png" alt="Banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Banner Slider End ======-->

    <!--====== Service Part Start ======-->
    <section class="service-section">
        <div class="section-title text-center mb-30">
            {{-- <span class="title-tag">SERVICES</span> --}}
            {{-- <h2 class="title">Партнирай си с Нас</h2> --}}
        </div>
         <div class="container">
            <div class="section-title text-center mb-30">
                {{-- <span class="title-tag">SERVICES</span> --}}
                <h2 class="title">Партнирай Си С Нас</h2>
            </div>
        
            <div class="row service-items flexed-videos">
                <div class="iframeDiv">
                    <h3 class="header_vids">Бизнес Предложение</h5>
                    <iframe class="iframevid" frameborder="0" src="https://www.youtube.com/embed/aBRp95QF-XE"  allow="autoplay; encrypted-media" ></iframe>
                </div>
                <div class="iframeDiv">
                    <h3 class="header_vids">Пордуктово Видео</h3>
                    <iframe class="iframevid" frameborder="0" src="https://www.youtube.com/embed/aBRp95QF-XE" allow="autoplay; encrypted-media"></iframe>
                </div>
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp"  data-wow-delay="0.3s">
                    <div class="service-item color-2 text-center mt-30">
                        <div class="icon">
                            <i class="fal fa-laptop-code"></i>
                        </div>
                        <h5 class="title"><a href="service-details.html">IT Soluations</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error volup</p>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp"  data-wow-delay="0.5s">
                    <div class="service-item color-1 text-center mt-30">
                        <div class="icon">
                            <i class="fal fa-fingerprint"></i>
                        </div>
                        <h5 class="title"><a href="service-details.html">Security System</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error volup</p>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp"  data-wow-delay="0.7s"> --}}
                    {{-- <div class="service-item color-3 text-center mt-30">
                        <div class="icon">
                            <i class="fal fa-chalkboard"></i>
                        </div>
                        <h5 class="title"><a href="service-details.html">Web Development</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error volup</p>
                    </div> --}}
                {{-- </div> --}}
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp"  data-wow-delay="0.9s">
                    <div class="service-item color-4 text-center mt-30">
                        <div class="icon">
                            <i class="fal fa-database"></i>
                        </div>
                        <h5 class="title"><a href="service-details.html">Database Security</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error volup</p>
                    </div>
                </div>
            </div> --}}
        </div> 
    </section>
    <!--====== Service Part End ======-->

    <!--====== Feature Sectioin Start ======-->
    <section class="feature-section section-gap soft-blue-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center changed_flexed">
                
                <div class="col-lg-6 col-md-10">
                    <div class="tile-gallery-one wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="img-one">
                            <img src="assets/img/office-work-1.png" alt="Banner">
                        </div>
                        <div class="img-two text-right wow fadeInUp"  data-wow-delay="0.5s">
                            <img src="assets/img/office-work-2.png" alt="Banner">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="feature-text-block mt-md-gap-60 wow fadeInRight"  data-wow-delay="0.4s">
                        <div class="section-title mb-20">
                            {{-- <span class="title-tag">CORE FEATURES</span> --}}
                            <h2 class="title">Кои Сме Ние?</h2>
                        </div>
                        {{-- <p class="big-text mb-30"> Нашите Знания  </p> --}}
                        <p>
                            Does any industry face a more complex audience journey and marketing sales process than B2B
                            technology? Consider the number of people who influence a sale, the length of the
                            decision-making cycle, the competing interests of the people who purchase, implement,
                            manage, and use the technology. It’s a lot meaningful content here.
                            Does any industry face a more complex audience journey and marketing sales process than B2B
                            technology? Consider the number of people who influence a sale, the length of the
                            decision-making cycle, the competing interests of the people who purchase, implement,
                            manage, and use the technology. It’s a lot meaningful content here.
                            
                            
                        </p>
                        <ul class="feature-btn mt-30">
                            <li>
                                <a class="main-btn" href="about.html">Научи Повече</a>
                            </li>
                            <li>
                                <a class="main-btn main-btn-2" href="about.html"><i class="fal fa-video"></i> 
                                    Видео</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Feature Sectioin End ======-->

     <!--====== Team Section Start ======-->
     <section class="team-area pb-20 overflow-hidden">
        <div class="container">
            <div class="section-title text-center mb-60">
                {{-- <span class="title-tag">Екип Infinity 21 </span> --}}
                <h2 class="title"> Лидери на<br> Организацията</h2>
            </div>
        </div>

        <div class="container-fluid p-0">
            <div class="team-members">

                <div class="col image-box">
                    <div class="team-member mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="assets/img/team/veneta-spasova.png" alt="">
                            {{-- <div class="social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="team-content">
                            <h5 class="name"><a href="#">Венета Спасова</a></h5>
                            <span class="position">Сребъни Лидери</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="assets/img/team/veneta-spasova.png" alt="">
                            {{-- <div class="social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="team-content">
                            <h5 class="name"><a href="#">Венета Спасова</a></h5>
                            <span class="position">Сребъни Лидери</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="assets/img/team/veneta-spasova.png" alt="">
                            {{-- <div class="social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="team-content">
                            <h5 class="name"><a href="#">Венета Спасова</a></h5>
                            <span class="position">Сребъни Лидери</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="assets/img/team/veneta-spasova.png" alt="">
                            {{-- <div class="social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="team-content">
                            <h5 class="name"><a href="#">Венета Спасова</a></h5>
                            <span class="position">Сребъни Лидери</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="assets/img/team/veneta-spasova.png" alt="">
                            {{-- <div class="social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="team-content">
                            <h5 class="name"><a href="#">Венета Спасова</a></h5>
                            <span class="position">Сребъни Лидери</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="assets/img/team/veneta-spasova.png" alt="">
                            {{-- <div class="social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="team-content">
                            <h5 class="name"><a href="#">Венета Спасова</a></h5>
                            <span class="position">Сребъни Лидери</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="assets/img/team/veneta-spasova.png" alt="">
                            {{-- <div class="social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="team-content">
                            <h5 class="name"><a href="#">Венета Спасова</a></h5>
                            <span class="position">Сребъни Лидери</span>
                        </div>
                    </div>
                </div>

                

                <div class="col image-box">
                    <div class="team-member mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="assets/img/team/veneta-spasova.png" alt="">
                            {{-- <div class="social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="team-content">
                            <h5 class="name"><a href="#">Венета Спасова</a></h5>
                            <span class="position">Сребъни Лидери</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="assets/img/team/veneta-spasova.png" alt="">
                            {{-- <div class="social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="team-content">
                            <h5 class="name"><a href="#">Венета Спасова</a></h5>
                            <span class="position">Сребъни Лидери</span>
                        </div>
                    </div>
                </div>

                <div class="col image-box">
                    <div class="team-member mb-30">
                        <div class="member-photo">
                            <img class="members_img" src="assets/img/team/veneta-spasova.png" alt="">
                            {{-- <div class="social-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                        <div class="team-content">
                            <h5 class="name"><a href="#">Венета Спасова</a></h5>
                            <span class="position">Сребъни Лидери</span>
                        </div>
                    </div>
                </div>


              
    </section>
    <!--====== Team Section Ends ======-->

    <!--====== Service Section Start ======-->
    {{-- <section class="service-section-two section-gap">
        <div class="container">
            <div class="section-title text-center mb-30 wow fadeInUp" data-wow-delay="0.3s">
                <span class="title-tag">OUR LATEST SERVICES</span>
                <h2 class="title">We Offer Better Soluation <br> For Your IT Business</h2>
            </div>
            <div class="row service-items justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item-two color-1 mt-30">
                        <div class="icon">
                            <i class="fal fa-laptop-code"></i>
                        </div>
                        <h3 class="title"><a href="service-details.html">Desktop Computing</a></h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantiutotam</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item-two color-2 mt-30">
                        <div class="icon">
                            <i class="fal fa-laptop-code"></i>
                        </div>
                        <h3 class="title"><a href="service-details.html">Desktop Computing</a></h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantiutotam</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item-two color-3 mt-30">
                        <div class="icon">
                            <i class="fal fa-laptop-code"></i>
                        </div>
                        <h3 class="title"><a href="service-details.html">Desktop Computing</a></h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantiutotam</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item-two color-3 mt-30">
                        <div class="icon">
                            <i class="fal fa-laptop-code"></i>
                        </div>
                        <h3 class="title"><a href="service-details.html">Desktop Computing</a></h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantiutotam</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item-two color-1 mt-30">
                        <div class="icon">
                            <i class="fal fa-laptop-code"></i>
                        </div>
                        <h3 class="title"><a href="service-details.html">Desktop Computing</a></h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantiutotam</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item-two color-4 mt-30">
                        <div class="icon">
                            <i class="fal fa-laptop-code"></i>
                        </div>
                        <h3 class="title"><a href="service-details.html">Desktop Computing</a></h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantiutotam</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== Service Section End ======-->

    <section class="feature-section section-gap soft-blue-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                
                <div class="col-lg-6 col-md-10">
                    <div class="tile-gallery-one wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="img-one">
                            <img src="assets/img/office-work-1.png" alt="Banner">
                        </div>
                        <div class="img-two text-right wow fadeInUp"  data-wow-delay="0.5s">
                            <img src="assets/img/office-work-2.png" alt="Banner">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="feature-text-block mt-md-gap-60 wow fadeInRight"  data-wow-delay="0.4s">
                        <div class="section-title mb-20">
                            {{-- <span class="title-tag">CORE FEATURES</span> --}}
                            <h2 class="title">За LR Health & Beauty</h2>
                        </div>
                        {{-- <p class="big-text mb-30"> Нашите Знания  </p> --}}
                        <p>
                            LR Health & Beauty е водеща компания в сферата на здравето и красотата,
                             предлагаща висококачествени продукти за грижа за кожата, 
                             здравословен начин на живот и парфюмерия. Фирмата е 
                             известна със своите иновативни формули, базирани на 
                             научни изследвания и натурални съставки. <br><br> Освен с 
                             продуктите си, LR предоставя и възможност за допълнителен 
                             доход чрез своя бизнес модел. Всеки може да стане част от
                              LR като независим партньор и да изгради собствен бизнес,
                               предлагащ продуктите на компанията. Това е чудесен начин 
                               да се развива личностно и професионално, като се печели 
                               допълнителен доход и се работи с гъвкаво работно време.
                            
                        </p>
                        {{-- <ul class="feature-btn mt-30">
                            <li>
                                <a class="main-btn" href="about.html">Learn More</a>
                            </li>
                            <li>
                                <a class="main-btn main-btn-2" href="about.html"><i class="fal fa-video"></i> Intro
                                    Video</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--====== Portfolio Section Start ======-->
    {{-- <section class="portfolio-area portfolio-area-shape primary-bg section-gap">
        <div class="container">
            <div class="portfolio-top-title mb-60">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-title white-color mb-md-gap-30">
                            <span class="title-tag">Latest Case Studies</span>
                            <h2 class="title">Reads Our Recent Case Studies </h2>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="portfolio-arrow"></div>
                    </div>
                </div>
            </div>
            <div class="portfolio-items portfolio-slider-one row">
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="assets/img/portfolio/01.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="portfolio-details.html" class="portfolio-link"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="assets/img/portfolio/02.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="portfolio-details.html" class="portfolio-link"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="assets/img/portfolio/03.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="portfolio-details.html" class="portfolio-link"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="assets/img/portfolio/01.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="portfolio-details.html" class="portfolio-link"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="assets/img/portfolio/02.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="portfolio-details.html" class="portfolio-link"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-item">
                        <div class="portfolio-img">
                            <img src="assets/img/portfolio/03.jpg" alt="Image">
                        </div>
                        <div class="portfolio-content">
                            <div class="item">
                                <span class="category">IT / Solutions </span>
                                <h5 class="title">How To Improve <br> IT knowledge</h5>
                            </div>
                            <a href="portfolio-details.html" class="portfolio-link"><i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== Portfolio Section Ends ======-->

    <!--====== Counter Part Start ======-->
    <section class="counter-section secondary-bg pt-40 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="counter-box color-1">
                        <div class="icon">
                            <img class="stats" src="/images/main-page-images/world.svg" alt="Държави">
                        </div>
                        <span class="counter">+32</span>
                        <h6 class="title">Държави</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter-box color-2 mt-40 mb-xs-gap-40">
                        <div class="icon">
                            <img class="stats" src="/images/main-page-images/business-growth.svg" alt="Години">
                        </div>
                        <span class="counter">+39</span>
                        <h6 class="title">Години Успешно Развитие</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="counter-box color-3">
                        <div class="icon">
                            <img class="stats" src="/images/main-page-images/pills-bottle.svg" alt="Продукти за Красота">
                        </div>
                        <span class="counter">300+</span>
                        <h6 class="title">Продукти за Красота</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="counter-box mt-40">
                        <div class="icon">
                            <img class="stats" src="/images/main-page-images/aloe-vera.svg" alt="Алое Вера">
                        </div>
                        <span class="counter">90% +</span>
                        <h6 class="title">Съдържание на Алое</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Counter Part End ======-->

     <!--====== Catalog Section Starts ======-->

     <section>

        <div class="container_catalog shadow">
        <p class="catalog_header">КАТАЛОЗИ НА LR И ПРОДУКТОВА КНИГА</p>
        <p class="catalog_text">Ставайки сътрудник на компания LR получавате постоянна отстъпка от около 30% от каталожната цена. За сътруднически цени вижте "Ценоразписа за сътрудници", а за подробна информация за продуктите "Продуктова книга на LR".</p>
    
        <div class="container_pdfs">
    
            <div class="pdf_container">
                <h3 class="main_header_pdfs">LR - Основен Каталог </h3>
                <img class="img_catalogs" src="/images/main-page-images/book.svg" alt="Колекция 2024">
                <a class="download_a" href="#" download>Към PDF Файла</a>
            </div>
    
            <hr class="hr_pdfs">
    
            <div class="pdf_container">
                <h3 class="main_header_pdfs">Партньорски Цени</h3>
                <img class="img_catalogs" src="/images/main-page-images/book-discount.svg" alt="Ценоразпис 2024">
                <a class="download_a" href="#" download>Към PDF Файла</a>
            </div>
    
            <hr class="hr_pdfs">
    
    
            <div class="pdf_container">
                <h3 class="main_header_pdfs">LR - Продуктова Книга</h3>
                <img class="img_catalogs" src="/images/main-page-images/book-lovers.svg" alt="Продуктова книга 2024">
                <a class="download_a" href="#" download>Към PDF Файла</a>
            </div>

        </div>
            
    
        </div>
    
    
        </section>
    
           <!--====== Catalog Section Ends ======-->


    <!--====== Testimonials Section Start ======-->
    <section class="testimonials-section section-gap soft-blue-bg">
        <div class="container">
            <div class="section-title text-center mb-20">
                {{-- <span class="title-tag">Client Testimonials</span> --}}
                <h2 class="title">Какво Казват Другите За Нас? </h2>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-box color-1s">
                        <p>Обожавам добавките и продуктите на LR. От над 10г. се занимавам със спорт и съм пробвал най-различни продукти,
                            тези определено са най-добрите.
                        </p>
                        <div class="author d-flex align-items-center">
                            <div class="photo">
                                <img class="testimonial_photo" src="/images/main-page-images/lyubo.png" alt="Image">
                            </div>
                            <div class="desc">
                                <h6>Любомир Стоянов</h6>
                                <span class="position">Програмист</span>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="hr_testimonials">

                <div class="col-lg-4">
                    <div class="testimonial-box color-1s">
                        <p>Обожавам добавките и продуктите на LR. От над 10г. се занимавам със спорт и съм пробвал най-различни продукти,
                            тези определено са най-добрите.
                        </p>
                        <div class="author d-flex align-items-center">
                            <div class="photo">
                                <img class="testimonial_photo" src="/images/main-page-images/lyubo.png" alt="Image">
                            </div>
                            <div class="desc">
                                <h6>Любомир Стоянов</h6>
                                <span class="position">Програмист</span>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="hr_testimonials">


                <div class="col-lg-4">
                    <div class="testimonial-box color-1s">
                        <p>Обожавам добавките и продуктите на LR. От над 10г. се занимавам със спорт и съм пробвал най-различни продукти,
                            тези определено са най-добрите.
                        </p>
                        <div class="author d-flex align-items-center">
                            <div class="photo">
                                <img class="testimonial_photo" src="/images/main-page-images/lyubo.png" alt="Image">
                            </div>
                            <div class="desc">
                                <h6>Любомир Стоянов</h6>
                                <span class="position">Програмист</span>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
    <!--====== Testimonials Section Ends ======-->

    <!--====== Call to action Start ======-->
    {{-- <section class="call-to-action" style="background-image: url(assets/img/cta-bg/cta-bg.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7 col-md-8">
                    <div class="section-title white-color">
                        <span class="title-tag">Имате Въпрос?</span>
                        <h2 class="title">
                            Искате Да Разберете Повече? <br> Сръжете Се С Нас и Нека Поговорим
                        </h2>
                    </div>
                </div>
                <div class="col-auto contact-us">
                    <a href="/contacts" class="main-btn main-btn-3 rounded-btn mt-md-gap-30 contact_us_middle_page"> <i class="fal fa-comments"></i>Контакти</a>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== Call to action End ======-->

    <!--====== Latest News Start ======-->
    {{-- <section class="latest-news section-gap">
        <div class="container">
            <div class="section-title text-center mb-30 wow fadeInUp" data-wow-delay="0.3s">
                <span class="title-tag">Latest News</span>
                <h2 class="title"> Read Our Latest <br> News & Blog </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="latest-news-box mt-30">
                        <div class="post-thumb">
                            <img src="assets/img/latest-news/01.jpg" alt="Image">
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><a href="#">By Admin,</a></li>
                                <li><a href="#">05 Aug 2019</a></li>
                            </ul>
                            <h4 class="title">
                                <a href="#">Monthly Web Development Update Design Ethics & Clarity Over Solution</a>
                            </h4>
                            <a href="#" class="read-more-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="latest-news-box mt-30">
                        <div class="post-thumb">
                            <img src="assets/img/latest-news/02.jpg" alt="Image">
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><a href="#">By Admin,</a></li>
                                <li><a href="#">05 Aug 2019</a></li>
                            </ul>
                            <h4 class="title">
                                <a href="#">Design System: What It And How To Create One Using Indigo Design Sence</a>
                            </h4>
                            <a href="#" class="read-more-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="latest-news-box mt-30">
                        <div class="post-thumb">
                            <img src="assets/img/latest-news/03.jpg" alt="Image">
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><a href="#">By Admin,</a></li>
                                <li><a href="#">05 Aug 2019</a></li>
                            </ul>
                            <h4 class="title">
                                <a href="#">How We Used WebAssembly  To Speed Up Our Web App By Omnivus</a>
                            </h4>
                            <a href="#" class="read-more-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--====== Latest News End ======-->

    <!--====== Back to top start ======-->
    <div class="back-to-top">
        <a href="#"> <i class="fas fa-arrow-up"></i> </a>
    </div>
    <!--====== Back to top start ======-->

    <!--====== Footer PART START ======-->
    @include('main-page-components.inc.footer')
    <!--====== Footer PART ENDS ======-->

   

</body>

</html>
