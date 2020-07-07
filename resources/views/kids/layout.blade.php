<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>{{ config('app.name') }}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    @yield('css')
  </head>
  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
    	<div class="container">
        @yield('main')
           </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{url('/')}}"
              ><img src="{{ asset ('img/logo2.png') }}" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('index')}}">Bosh sahifa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}">Biz haqimizda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('galery')}}">Galereya</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">Ma'lumotlar</a>
                </li>
            </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ конец заголовки =================-->
@yield('main')
@yield('content')
<!--footer-->

<footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 single-footer-widget">
                <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('index')}}">Bosh sahifa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}">Biz haqimizda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('galery')}}">Galereya</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">Ma'lumotlar</a>
                </li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 single-footer-widget">
            <h4>Newsletter</h4>
            <p>You can trust us. we only send promo offers,</p>
            <div class="form-wrap" id="mc_embed_signup">
              <form
                target="_blank"
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get"
                class="form-inline"
              >
                <input
                  class="form-control"
                  name="EMAIL"
                  placeholder="Your Email Address"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Your Email Address'"
                  required=""
                  type="email"
                />
                <button class="click-btn btn btn-default">
                  <span>subscribe</span>
                </button>
                <div style="position: absolute; left: -6000px;">
                  <input
                    name="b_36c4fd991d266f23781ded980_aefe40901a"
                    tabindex="-1"
                    value=""
                    type="text"
                  />
                </div>

                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter"></i></a>
            <a href="#"><i class="ti-dribbble"></i></a>
            <a href="#"><i class="ti-linkedin"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset ('js/popper.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset ('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('js/owl-carousel-thumb.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset ('js/mail-script.js') }}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset ('js/gmaps.min.js') }}"></script>
    <script src="{{ asset ('js/theme.js') }}"></script>

    @yield('js')
  </body>
</html>