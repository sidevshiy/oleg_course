<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    @yield('extra-css')


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 d-none d-lg-block">
                    <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Есть вопросы?</a>
                    <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span>  +420 778 516 718</a>
                    <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span>  info@matilda.digital</a>
                </div>
                <div class="col-lg-3 text-right">
                    <a href="index.html" class="small mr-3"><span class="icon-unlock-alt"></span> Вход</a>
                    <a href="index.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Регистрация</a>
                </div>
            </div>
        </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" style="background-color: #777776; color:white;" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="index.html" class="d-block">
                        <img src="{{ asset('img/logo_education.png') }}" height="80" width="80" alt="Matilda education" class="img-fluid">
                    </a>
                </div>
                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block" style="color:white">
                            <li>
                                <a href="index.html" class="nav-link text-left">Главная</a>
                            </li>
                            <li class="has-children">
                                <a href="index.html" class="nav-link text-left">О нас</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Наши учителя</a></li>
                                    <li><a href="index.html">Наша школа</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.html" class="nav-link text-left">Миссия</a>
                            </li>
                            <li class="active">
                                <a href="index.html" class="nav-link text-left">КУРСЫ!</a>
                            </li>
                            <li>
                                <a href="index.html" class="nav-link text-left">Контакт</a>
                            </li>
                        </ul>                                                                                                                                                                                                                                                                                          </ul>
                    </nav>

                </div>
                <div class="ml-auto">
                    <div class="social-wrap">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                        <a href="#"><span class="icon-linkedin"></span></a>

                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>

            </div>
        </div>

    </header>

    @yield('content')


    <div class="section-bg style-1" style="background-color: black">
        <div class="container   wow slideInLeftbody ">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-mortarboard"></span>
                    <h3>Наша философия</h3>
                    <p>Будьте голосом, а не эхом.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-school-material"></span>
                    <h3>Наши принципы</h3>
                    <p>Показать и научить, что онлайн маркетинг должен быть результативным, а отношения между агентством и заказчиком - честными.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-library"></span>
                    <h3>Наша миссия</h3>
                    <p>Вывести онлайн маркетинг Европы на достойный уровень и научить этому других.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__media_wrap">
                <div class="row footer__row">
                    <div class="col col-md-6 col-sm-12">
                        <div class="footer__media media">
                            <div class="media__items">
                                <div class="media__item">
                                    <div class="media__social">
                                        <a href="#"><img src="{{ asset('img/footer/facebook.png') }}" alt="facebook" class="media__img"></a>
                                        <a href="#" class="media__text">matilda.digital</a>
                                    </div>
                                    <div class="media__social">
                                        <a href="#"><img src="{{ asset('img/footer/inst.png') }}" alt="facebook" class="media__img"></a>
                                        <a href="#" class="media__text">matilda.digital</a>
                                    </div>
                                </div>
                                <div class="media__item">
                                    <div class="media__social">
                                        <a href="#"><img src="{{ asset('img/footer/tg.png') }}" alt="facebook" class="media__img"></a>
                                        <a href="#" class="media__text">matilda.digital</a>
                                    </div>
                                    <div class="media__social">
                                        <a href="#"><img src="{{ asset('img/footer/web.png') }}" alt="facebook" class="media__img"></a>
                                        <a href="#" class="media__text">matilda.digital</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6 col-sm-12">
                        <div class="footer__tags tags">
                            <div class="tags__items">
                                <div class="tags__item">
                                    <div class="tags__one"><a href="#"># cases</a></div>
                                    <div class="tags__one"><a href="#"># team</a></div>
                                </div>
                                <div class="tags__item">
                                    <div class="tags__one"><a href="#"># contacts</a></div>
                                    <div class="tags__one"><a href="#"># pravicy policy</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer__copyright">
                © Copyright - Matilda.Digital 2021
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>




    <script src="{{ asset('js/main.js') }}"></script>

    <style type="text/css">

        .btn:not(:disabled):not(.disabled) {
            color:white;
        }
        .btn:not(:disabled):not(.disabled):hover {
            color: black;
        }
        .btn:not(:disabled):not(.disabled):active {
            border-color: black;
            background-color: white;
        }

        html body div, .btn {
            text-transform: uppercase!important;
            font-family: 'Roboto', sans-serif!important;
        }
        .btn:not(:disabled):not(.disabled) {
            color:white;
        }
        .btn:not(:disabled):not(.disabled):hover {
            color: black;
        }

        .ftco-subscribe-1:before {
            background-color: #777776;
        }
        a, a:hover, a:active, a:visited {
            color:black;
        }
        .site-navbar .site-navigation .site-menu > li > a:hover, .site-navbar .site-navigation .site-menu > li > a:hover, .site-navbar .site-navigation .site-menu .active > a, .site-navbar .site-navigation .site-menu .has-children > a:hover {
            color:white;
        }
        a:hover, a:active {
            font-weight: bolder;
        }
        body .py-2.bg-light {
            color:white;
            background-color: #3c3c3b!important;
        }

        body .py-2.bg-light a,  body .py-2.bg-light span{
            color: white;
        }

        body header .py-2.bg-light a:hover{
            font-size: 16px;
        }

        .site-section {
            background-image: url('{{ asset('img/education_bg.svg') }}');
            background-color: #3c3c3b;
        }

        .custom-breadcrumns.border-bottom {
            background-color: #777776;
            border-bottom: none!important;
        }
        .small.btn.btn-primary.px-4.py-2.rounded-0 {
            background-color: #777776;
            border: 1px solid black;
        }
        .course-1-item .course-1-content{
            background-color: #cccccc;
        }
        @media only screen and (min-width: 768px) {
            .course-1-item .course-1-content{
                min-height: 364px;
            }
        }

        .course-1-item .price  {
            background-color: #3c3c3b;
        }
        .sticky-wrapper {
            background-color: #777776;
        }

        body {
            background-color: #777776;
        }

        .container .row .icon {
            color: white;
        }
        .section-bg.style-1 h3 {
            color: white;
        }
        .section-bg.style-1 p {
            color: white;
        }


        .section-bg.style-1:before {
            background-color: #3c3c3b;
        }


        .site-footer {
            position: relative;
        }
        .course-1-item .category {
            background: #777776;
        }

        .social-wrap a {
            background-color: #3c3c3b;
        }

        .btn-primary {
            background-color: #3c3c3b;
            border-color: black;
        }
        .btn-primary:hover {
            background-color: white;
            color:black;
            border-color: black;
        }
    </style>


    <script src="{{ asset('js/wow.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    @yield('extra-js')
</body>


</html>
