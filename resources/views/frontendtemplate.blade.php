<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeautyMagic | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/barfiller.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}" type="text/css">
    <link rel="icon" type="image/png" href="{{asset('fon/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fon/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fon/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fon/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fon/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fon/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fon/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fon/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fon/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fon/css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('fon/css/asiangement.css')}}">
<!--===============================================================================================-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu">
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{{asset('front/img/logo.png')}}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__widget">
            <ul>
                <li>CALL US: + 959787538365</li>
                <li>WRITE US: FITNESS@EXAMPLE.COM</li>
                <li>OPENING TIMES: MON - FRI: 9:00 - 19:00</li>
            </ul>
            <a href="{{route('contactpage')}}" class="primary-btn">JOIN US</a>
        </div>
        <nav class="header__menu">
            <ul class="mobile-menu">
                <li class="nav-link"><a href="{{route('homepage')}}">Home</a></li>
                <li><a href="{{route('aboutpage')}}" class="nav-link">About</a></li>
                <li><a href="{{route('planpage')}}">Plans</a>
                    <ul class="dropdown">
                        <li><a href="#">Exercises</a></li>
                        <li><a href="#">Keto Diet Plans</a></li>
                    </ul>
                </li>
                <li><a href="{{route('contactpage')}}">Contact</a></li>
            </ul>
        </nav>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="header__logo">
                            <a href="#"><img src="asset{{('front/img/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="header__top__widget">
                            <ul>
                                <li>CALL US: + 1 800-567-8990</li>
                                <li>WRITE US: OFFICE@EXAMPLE.COM</li>
                                <li>OPENING TIMES: MON - FRI: 9:00 - 19:00</li>
                            </ul>
                            <a href="#" class="primary-btn">JOIN US</a>
                        </div>
                    </div>
                </div>
                <div class="canvas__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
        <div class="header__nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <nav class="header__menu">
                            <ul>
                                <li class="nav-link"><a href="#">Home</a></li>
                                <li><a href="{{route('aboutpage')}}" class="nav-link">About</a></li>
                        <li><a href="{{route('planpage')}}" class="nav-link">Plans</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Exercise</a></li>
                                        <li><a href="#">Keto Diet Plan</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('contactpage')}}" class="nav-link">Contact</a></li>
                                 <li><a href="{{route('loginpage')}}" class="nav-link">Login</a></li>
                                  <li><a href="{{route('registerpage')}}" class="nav-link">Register</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="header__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__sliders owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{asset('front/img/hero/hero-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <span>Welcome to Beauty Magic</span>
                                <h2>What hurts today makes you stronger tomorrow</h2>
                                <a href="#" class="primary-btn">DISCOVER MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{asset('front/img/hero/hero-1.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <span>Welcome to Beauty Magic</span>
                                <h2>What hurts today makes you stronger tomorrow</h2>
                                <a href="#" class="primary-btn">DISCOVER MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

  @yield('content')

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <img src="{{asset('front/img/icon.png')}}" alt="">
                        <h2>Enjoy All Aspects Of Yoga</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="services__list">
                <div class="row">
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="{{asset('front/img/services/services-1.png')}}" alt="">
                            <h5>Asana</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="{{asset('front/img/services/services-2.png')}}" alt="">
                            <h5>Meditation</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="{{asset('front/img/services/services-3.png')}}" alt="">
                            <h5>Mudra</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="{{asset('front/img/services/services-4.png')}}" alt="">
                            <h5>Bandhas</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="{{asset('front/img/services/services-5.png')}}" alt="">
                            <h5>Philosophy</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="services__item">
                            <img src="{{asset('front/img/services/services-6.png')}}" alt="">
                            <h5>Pranayama</h5>
                            <p>Grab the opportunity to deepen your own yoga practice, relax, restore and experience
                                india!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

  
    <!-- Footer Section Begin -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <img src="{{asset('front/img/footer-logo.png')}}" alt="">
                        <ul>
                            <li><i class="fa fa-clock-o"></i> Mon - Fri: 6:30am - 07:45pm</li>
                            <li><i class="fa fa-clock-o"></i> Sat - Sun: 8:30am - 05:45pm</li>
                        </ul>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Your Email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>Inspiration</h5>
                        <ul>
                            <li><a href="#">Online Pilates</a></li>
                            <li><a href="#">Yoga for Beginners</a></li>
                            <li><a href="#">Online Pilates</a></li>
                            <li><a href="#">Online Yoga</a></li>
                            <li><a href="#">Conditioning</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Meet The Team</a></li>
                            <li><a href="#">Introduce</a></li>
                            <li><a href="#">Customer Service</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h5>Contact Us</h5>
                        <ul class="footer-address">
                            <li><i class="fa fa-phone"></i> (01) 436 8888</li>
                            <li><i class="fa fa-envelope"></i> hello@beautymagic.com</li>
                            <li><i class="fa fa-location-arrow"></i> 828 Granville Lights Suite 466</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="footer__copyright__text">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        </div>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer__copyright__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('front/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.barfiller.js')}}"></script>
    <script src="{{asset('front/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/main.js')}}"></script>
    <script src="{{asset('fon/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('fon/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('fon/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('fon/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('fon/vendor/select2/select2.min.js')}}"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
<!--===============================================================================================-->
    <script src="{{asset('fon/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('fon/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('fon/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('fon/js/main.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>

</html>