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

 <header class="header-one sticky-header sticky-on header-small-screen">
      <div class="header-navigation">
              <div class="container-fluid d-flex align-items-center justify-content-between container-1470">
              <div class="header-left">
                  <div class="site-logo">
                      <a href="index.html"><img class="lr_logo" src="/images/dashboard-images/infinity-img.svg" alt="LR-Health-&-Beauty"></a>
                  </div>
              </div>
              <div style="position: absolute; right: 0;" class="header-right d-flex align-items-center justify-content-end">
                  <div class="site-nav-menu SMALL-SCREEN-UL">
                    {{-- PRIMARY MENU FOR SMALL SCREEN --}}
                    {{-- -----------------------------------------------------------}}
                      <ul class="primary-menu">
                          <li class="current">
                              <a class="a_welcome li_headers" href="/">Начало</a>
                         </li>
                         <li>
                              <a class="a_welcome li_headers" href="about.html">Бизнес</a>
                         </li>
                         <li>
                            <a class="a_welcome li_headers" href="contact.html">Продукти</a>
                         </li>

                         <li>
                            <a class="a_welcome li_headers" href="contact.html">Галерия</a>
                         </li>

                          @if (Route::has('login'))
                          @auth
                         <li class="log_reg">
                          <div>
                              <a href="{{ url('/dashboard') }}" class="a_menus_main loginBtn rounded-md px-3 py-2 li_headers"> ПРОФИЛ</a>
                              <a class="a_menus_main registerBtn rounded-md px-3 py-2 li_headers"href="{{ route('/register') }}">РЕГИСТРАЦИЯ</a>
                              </div>
                         </li>
                        @else
                       <li class="log_reg">
                          <div>
                              <a href="{{ route('login') }}" class="a_menus_main loginBtn rounded-md px-3 py-2 li_headers">ВХОД </a>
                              <a class="a_menus_main registerBtn rounded-md px-3 py-2 li_headers" href="{{ route('register') }}">РЕГИСТРАЦИЯ</a>
                            </div>
                       </li>
                          @endauth
                          @endif
                      </ul>
                    </div>
                     {{-- PRIMARY MENU FOR SMALL SCREEN --}}
                    {{-- -----------------------------------------------------------}}
                    <div class="site-nav-menu WIDE-SCREEN-UL">
                        <ul class="primary-menu">
                        <li class="current">
                            <a class="a_welcome li_headers" href="/">Начало</a>
                        </li>
                        <li>
                            <a class="a_welcome li_headers" href="about.html">Бизнес</a>
                        </li>
                        <li>
                          <a class="a_welcome li_headers" href="contact.html">Продукти</a>
                      </li>

                      <li>
                          <a class="a_welcome li_headers" href="contact.html">Галерия</a>
                      </li>

                        @if (Route::has('login'))
                        @auth
                       <li class="log_reg">
                        <div>
                            <a href="{{ url('/dashboard') }}" class="a_menus_main loginBtn rounded-md px-3 py-2 li_headers"> ПРОФИЛ</a>
                            <a class="a_menus_main registerBtn rounded-md px-3 py-2 li_headers" href="/register">РЕГИСТРАЦИЯ</a>
                            </div>
                       </li>
                      @else
                     <li class="log_reg">
                        <div>
                            <a href="{{ route('login') }}" class="a_menus_main loginBtn rounded-md px-3 py-2 li_headers">ВХОД </a>
                            <a class="a_menus_main registerBtn rounded-md px-3 py-2 li_headers" href="/register">РЕГИСТРАЦИЯ</a>
                          </div>
                     </li>
                        @endauth
                        @endif
                    </ul>
                </div> 
                    {{-- PRIMARY MENU FOR BIG SCREEN --}}

                      <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                  </div>
                  <div class="header-extra d-flex align-items-center">
                      <div class="shoping-mini-cart all_widgets_widescreen">
                          <a href="#" class="cart-icon"><i class="fal fa-shopping-cart"></i></a>
                      </div>
                      <div class="search-widget all_widgets_widescreen">
                          <a href="#" class="search-icon"><i class="fal fa-search"></i></a>

                          <div class="search-form">
                              <form action="#">
                                  <input type="search" placeholder="Type keywords & hit enter">
                              </form>

                              <a href="#" class="search-close"><i class="fal fa-times"></i></a>
                          </div>
                      </div>
                      <div class="offcanvas-widget d-lg-block d-none all_widgets_widescreen">
                          <div class="offcanvas-icon">
                              <span></span><span></span><span></span>
                          </div>
                      </div>
                      <div class="nav-toggler">
                          <span></span><span></span><span></span>
                      </div>
                      {{-- <div class="navbar-btn">
                          <a href="#">Консултация <i class="fal fa-long-arrow-right"></i></a>
                      </div> --}}
                  </div>
              </div>
          </div>
      </div>
  </header>
  

  <!--====== Jquery ======-->
  <script src="assets/js/jquery-1.12.4.min.js"></script>
  <!--====== Bootstrap ======-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--====== Slick slider ======-->
  <script src="assets/js/slick.min.js"></script>
  <!--====== Magnific ======-->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!--====== Isotope ======-->
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <!--====== Imagesloaded ======-->
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <!--====== Inview ======-->
  <script src="assets/js/jquery.inview.min.js"></script>
  <!--====== Easy Pie Chart ======-->
  <script src="assets/js/jquery.easypiechart.min.js"></script>
  <!--====== Syotimer ======-->
  <script src="assets/js/jquery.syotimer.min.js"></script>
  <!--====== Wow ======-->
  <script src="assets/js/wow.min.js"></script>
  <!--====== Main JS ======-->
  <script src="assets/js/main.js"></script>