<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/favicon.png')}}">

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('frontend/css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('frontend/css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="{{asset('frontend/css/style-customizer.css')}}">
    <link href="#" data-style="styles" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Modernizr JS -->
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start of header area -->
        <header class="header-area">
            <div class="header-top blue-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-7 col-xs-12">
                            <div class="header-top-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="zmdi zmdi-phone"></i>
                                        </a>
                                        {{App\Models\Setting::where('key','Phone')->first()->value}}
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>
                                            {{App\Models\Setting::where('key','Email')->first()->value}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-5 hidden-xs">
                            <div class="header-top-right">
                                <div class="header-top-social f-right">
                                    <p>Follow Us :</p>
                                    <ul>
                                        <li><a target="_blank"
                                                href="{{App\Models\Setting::where('key','Facebook')->first()->value}}"><i
                                                    class="icofont icofont-social-facebook"></i></a></li>
                                        <li><a target="_blank"
                                                href="https://www.linkedin.com/company/skoder-bd/"><i
                                                    class="icofont icofont-social-linkedin"></i></a></li>
                                        <li><a target="_blank"
                                                href="{{App\Models\Setting::where('key','Youtube')->first()->value}}"><i
                                                    class="icofont icofont-social-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom stick-h2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="{{route('index')}}"><img height="55px"
                                        src="{{asset('frontend/images/logo/logo-cs.png')}}" alt=""> </a>
                            </div>
                        </div>
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <div class="menu-area f-right">
                                <nav>
                                    <ul>

                                        <li class="active"><a href="{{route('index')}}">Home </a></li>
                                        <li><a href="{{route('about')}}">ABOUT US </a></li>
                                        <li><a href="{{route('gallery')}}">Gallery </a></li>
                                        <li><a href="#">Events <i class="zmdi zmdi-caret-down"></i></a>
                                            <ul>
                                                <li><a href="{{route('upcomingEvents')}}">Upcoming Events</a></li>
                                                <li><a href="{{route('events')}}">All Events</a></li>
                                            </ul>

                                        </li>
                                        <li><a href="{{route('activities')}}">Activities</a></li>
                                        <li><a href="{{route('blogs')}}">Blog</a></li>
                                        <li><a href="#">Leaders <i class="zmdi zmdi-caret-down"></i></a>
                                            <ul>
                                                <li><a href="{{route('alumnis')}}">Skoder Graduates</a></li>
                                                <li><a href="{{route('clubMembers')}}">Youth Leaders</a></li>
                                                <li><a href="{{route('becomeAMember.view')}}">Become a youth leader</a></li>
                                            </ul>

                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>

                                    <li class="active"><a href="{{route('index')}}">Home </a></li>
                                    <li><a href="{{route('about')}}">ABOUT US </a></li>
                                    <li><a href="{{route('gallery')}}">Gallery </a></li>
                                    <li><a href="#">Events <i class="zmdi zmdi-caret-down"></i></a>
                                        <ul>
                                            <li><a href="{{route('upcomingEvents')}}">Upcoming Events</a></li>
                                            <li><a href="{{route('events')}}">All Events</a></li>
                                        </ul>

                                    </li>
                                    <li><a href="{{route('activities')}}">Activities</a></li>
                                    <li><a href="{{route('blogs')}}">Blog</a></li>
                                    <li><a href="#">Leaders <i class="zmdi zmdi-caret-down"></i></a>
                                        <ul>
                                            <li><a href="{{route('alumnis')}}">Skoder Graduates</a></li>
                                            <li><a href="{{route('clubMembers')}}">Youth Leaders</a></li>
                                            <li><a href="{{route('becomeAMember.view')}}">Become a youth leader</a></li>
                                        </ul>

                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->
        <!-- End of header area -->
        @yield('content')

        <!-- Start footer area -->
        <footer class="footer-area">
            <div class="footer-top ptb-110">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-text footer-social">
                                <a href="{{route('index')}}">
                                    <img alt="" height="55px" src="{{asset('frontend/images/logo/logo-cs.png')}}">
                                </a>
                                <p>We are unique in our service compared to thausands of IT companies in the country. We excel in the Next Generation Technologies and aspire to withhold the potential to contribute in the national economy. </p>
                                <ul>
                                    <li><a target="_blank"
                                            href="{{App\Models\Setting::where('key','Facebook')->first()->value}}"><i
                                                class="icofont icofont-social-facebook"></i></a></li>
                                    <li><a target="_blank"
                                            href="https://www.linkedin.com/company/skoder-bd/"><i
                                                class="icofont icofont-social-linkedin"></i></a></li>
                                    <li><a target="_blank"
                                            href="{{App\Models\Setting::where('key','Youtube')->first()->value}}"><i
                                                class="icofont icofont-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="footer-text mrg-xs">
                                <h3>Quick Links</h3>
                                <ul class="footer-text-all">
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('gallery')}}">Gallery </a></li>
                                    <li><a href="{{route('upcomingEvents')}}">Upcoming Events</a></li>
                                    <li><a href="{{route('activities')}}">Activities</a></li>
                                    <li><a href="{{route('becomeAMember.view')}}">Become a member</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="footer-text mrg-sm3 mrg-xs">
                                <h3>pages</h3>
                                <ul class="footer-text-all">
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('alumnis')}}">Skoder Graduates</a></li>
                                    <li><a href="{{route('clubMembers')}}">Youth Leaders</a></li>
                                    <li><a href="{{route('events')}}">All Events</a></li>
                                    <li><a href="{{route('blogs')}}">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="footer-text mrg-sm3 mrg-xs">
                                <h3>Contact Us</h3>
                                <form action="{{route('submit.contact')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input placeholder="Name*" name="name" type="text">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="in-mrg" placeholder="Email*" name="email" type="email">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="message" placeholder="Massage*"></textarea>
                                            <button class="submit" type="submit">send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="footer-bottom-text ptb-20">
                                <p>
                                    Copyrights © <a href="{{route('index')}}" target="_blank">2021 All Rights Reserved by Skoder.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer area -->
        <!-- start scrollUp
                ============================================ -->
        <div id="toTop">
            <i class="fa fa-chevron-up"></i>
        </div>


        <!--style-customizer start -->
        {{-- <div class="style-customizer closed">
            <div class="buy-button">
                <a href="{{route('index')}}" class="customizer-logo"><img
                        src="{{asset('frontend/images/logo/logo.png')}}" alt="Theme Logo"></a>

            </div>
            <div class="clearfix content-chooser">
                <h3>Layout Options</h3>
                <p>Which layout option you want to use?</p>
                <ul class="layoutstyle clearfix">
                    <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>
                    <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>
                </ul>
                <h3>Color Schemes</h3>
                <p>Which theme color you want to use? Select from here.</p>
                <ul class="styleChange clearfix">
                    <li class="color-1 selected" title="color-1" data-style="color-1"></li>
                    <li class="color-2" title="color-2" data-style="color-2"></li>
                    <li class="color-3" title="color-3" data-style="color-3"></li>
                    <li class="color-4" title="color-4" data-style="color-4"></li>
                    <li class="color-5" title="color-5" data-style="color-5"></li>
                    <li class="color-6" title="color-6" data-style="color-6"></li>
                    <li class="color-7" title="color-7" data-style="color-7"></li>
                    <li class="color-8" title="color-8" data-style="color-8"></li>
                    <li class="color-9" title="color-9" data-style="color-9"></li>
                    <li class="color-10" title="color-10" data-style="color-10"></li>
                    <li class="color-11" title="color-11" data-style="color-11"></li>
                    <li class="color-12" title="color-12" data-style="color-12"></li>
                    <li class="color-13" title="color-13" data-style="color-13"></li>
                    <li class="color-14" title="color-14" data-style="color-14"></li>
                    <li class="color-15" title="color-15" data-style="color-15"></li>
                    <li class="color-16" title="color-16" data-style="color-16"></li>
                    <li class="color-17" title="color-17" data-style="color-17"></li>
                    <li class="color-18" title="color-18" data-style="color-18"></li>
                    <li class="color-19" title="color-19" data-style="color-19"></li>
                    <li class="color-20" title="color-20" data-style="color-20"></li>
                </ul>
                <h3>Background Patterns</h3>
                <p>Which background pattern you want to use?</p>
                <ul class="patternChange clearfix">
                    <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
                    <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
                    <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
                    <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
                    <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
                    <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
                    <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
                    <li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
                </ul>
                <h3>Background Images</h3>
                <p>Which background image you want to use?</p>
                <ul class="patternChange main-bg-change clearfix">
                    <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img
                            src="{{asset('frontend/images/customizer/bodybg/01.jpg')}}" alt=""></li>
                    <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img
                            src="{{asset('frontend/images/customizer/bodybg/02.jpg')}}" alt=""></li>
                    <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img
                            src="{{asset('frontend/images/customizer/bodybg/03.jpg')}}" alt=""></li>
                    <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img
                            src="{{asset('frontend/images/customizer/bodybg/04.jpg')}}" alt=""></li>
                    <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img
                            src="{{asset('frontend/images/customizer/bodybg/05.jpg')}}" alt=""></li>
                    <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img
                            src="{{asset('frontend/images/customizer/bodybg/06.jpg')}}" alt=""></li>
                    <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img
                            src="{{asset('frontend/images/customizer/bodybg/07.jpg')}}" alt=""></li>
                    <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img
                            src="{{asset('frontend/images/customizer/bodybg/08.jpg')}}" alt=""></li>
                </ul>
                <ul class="resetAll">
                    <li><a class="button button-border button-reset" href="#">Reset All</a></li>
                </ul>
            </div>
        </div> --}}
        <!--style-customizer end -->
    </div>
    <!-- Body main wrapper end -->
    <!-- jquery latest version -->
    <script src="{{asset('frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <!-- Bootstrap framework js -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!--  ajax-mail.js  -->
    <script src="{{asset('frontend/js/ajax-mail.js')}}"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
