<!Doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-54RDC35J');</script>
        <!-- End Google Tag Manager -->

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="{{ ucwords(config('app.name')) }}">
        <meta property="og:locale" content="en_GB">
        <meta property="og:type" content="{{ ucwords(config('app.name')) }}">
        <meta name="twitter:domain" content="{{ url()->current() }}">
        <meta name="google-site-verification" content="QptIpgMZl2CeVtdFuECCR5iWeohrEY5cwhuS6B6LyLM" />
        @yield('metas')
        @yield('schema')
	
        <title>@yield('title')</title>
    
        <link rel="apple-touch-icon" sizes="57x57" href="{{url('frontend/assets/img/favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{url('frontend/assets/img/favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('frontend/assets/img/favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{url('frontend/assets/img/favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('frontend/assets/img/favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{url('frontend/assets/img/favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{url('frontend/assets/img/favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{url('frontend/assets/img/favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('frontend/assets/img/favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{url('frontend/assets/img/favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('frontend/assets/img/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{url('frontend/assets/img/favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('frontend/assets/img/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{ url('frontend/assets/img/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link rel="canonical" href="https://www.grannyannexecompany.co.uk/" />
        <!-- Place favicon.ico in the root directory -->
		<!-- all-CSS-link-here -->
        <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/all.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/flaticon_barsi.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/main.css')}}?ref={{ setting('site.css') }}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/custom.css')}}?ref={{ setting('site.css') }}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/gallery.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        @yield('css')
    </head>
 
    <body class="bs-home-4">
        @yield('gtag')
        {{-- wa-fix --}}
        <div class="main-wrapper">

            <div class="call-now-button">
                <a href="tel:{{ setting('site.web-phone') }}" class="call-now-info phone-ringing"><i class="fa fa-phone"></i></a>
            </div>

            
            <!-- start preloader -->
            {{-- <div class="lw-preloader">
                <div class="lw-preloader-content">
                    <div class="bs-preloader-logo">
                        <img src="{{ url('storage') }}/{{ setting('site.logo') }}" alt="">
                    </div>
                </div>
            </div> --}}
            <!-- end preloader -->


            @include('frontend.inc.header')
            @yield('content')
            @include('frontend.inc.footer')

            <!-- offcanvas-start -->
            <div class="wa-offcanvas-area has-home-2  offcanvas_box_active lenis lenis-smooth">
                <div class="wa-offcanvas-wrap ">

                    <!-- top -->
                    <div class="wa-offcanvas-top">

                        <!-- logo -->
                        <a href="{{ route('index') }}" aria-label="name" class="wa-offcanvas-top-logo">
                            <img src="{{url('storage')}}/{{ setting('site.black-logo') }}" alt="">
                        </a>

                        <!-- close-btn -->
                        <button class="wa-offcanvas-close offcanvas_box_close" aria-label="name" >
                            <span></span>
                            <span></span>
                        </button>

                    </div>


                    <!-- mobile-menu-list -->
                    <nav class="mobile-main-navigation mb-50 d-block d-lg-none">
                        <ul  class="navbar-nav">
                            <li class="@If(Route::currentRouteName() === 'index') active @endif"><a href="{{ route('index') }}">Home</a></li>
                            <li class="@If(Route::currentRouteName() === 'about') active @endif"><a href="{{ route('about') }}">About Us</a></li>
                            <li class="@If(Route::currentRouteName() === 'process') active @endif"><a href="{{ route('process') }}">Our Process</a></li>
                            {{-- <li class="@If(Route::currentRouteName() === 'service') active @endif"><a href="{{ route('service') }}">Services</a></li> --}}
                            @foreach ($services as $ser)
                                <li class="@If(Route::currentRouteName() === 'servicedetail') active @endif"><a href="{{ route('servicedetail', $ser->slug) }}">Services</a></li>
                            @endforeach
                            <li class="@If(Route::currentRouteName() === 'price') active @endif"><a href="{{ route('price') }}">Prices</a></li>
                            <li class="@If(Route::currentRouteName() === 'gallery') active @endif"><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li class="@If(Route::currentRouteName() === 'blogs') active @endif"><a href="{{ route('blogs') }}">Blogs</a></li>
                            <li class="@If(Route::currentRouteName() === 'faq') active @endif"><a href="{{ route('faq') }}">Faqs</a></li>
                            <li class="@If(Route::currentRouteName() === 'contact') active @endif"><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </nav>

                    {{-- <div class="wa-offcanvas-gallery">
                        <h6 class="wa-offcanvas-gallery-title bs-h-1 ">Stay Inspired with Instagram</h6>

                        <div class="wa-offcanvas-gallery-grid">
                            <a href="assets/img/gallery/g2-img-1.png" aria-label="name" class="popup-img wa-offcanvas-gallery-item wa-img-cover wa-fix">
                                <img src="{{url('frontend/assets/img/gallery/g2-img-1.png')}}" alt="">
                            </a>
                            <a href="assets/img/gallery/g2-img-2.png" aria-label="name" class="popup-img wa-offcanvas-gallery-item wa-img-cover wa-fix">
                                <img src="{{url('frontend/assets/img/gallery/g2-img-2.png')}}" alt="">
                            </a>
                            <a href="assets/img/gallery/g2-img-3.png" aria-label="name" class="popup-img wa-offcanvas-gallery-item wa-img-cover wa-fix">
                                <img src="{{url('frontend/assets/img/gallery/g2-img-3.png')}}" alt="">
                            </a>
                            <a href="assets/img/gallery/g2-img-4.png" aria-label="name" class="popup-img wa-offcanvas-gallery-item wa-img-cover wa-fix">
                                <img src="{{url('frontend/assets/img/gallery/g2-img-4.png')}}" alt="">
                            </a>
                        </div>
                    </div> --}}

                    <!-- social -->
                    <div class="wa-offcanvas-social">
                        <div class="wa-offcanvas-social-flex d-flex flex-wrap">
                            @if(setting('site.facebook'))
                            <a href="{{ setting('site.facebook') }}" class="wa-offcanvas-social-link " aria-label="name">
                                <i class="fa-brands fa-facebook-f"></i> 
                            </a>
                            @endif
                            @if(setting('site.instagram'))
                            <a href="{{ setting('site.instagram') }}" class="wa-offcanvas-social-link" aria-label="name">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            @endif
                        </div>
                    </div>

                </div>

            </div>
            <div class="wa-overly"></div>
            <!-- offcanvas-end -->

            <!-- search-popup-start -->
            <div class="wa-search-box search_box_active ">

                <div class="wa-search-container">
                    <div class="wa-search-wrap text-center mb-55">
                        <h5 class="wa-search-title bs-h-2">Search</h5>
                        <form action="#" class="wa-search-form">
                            <input class="wa-search-form-input" type="text" placeholder="What are you looking for?...">
                        </form>
                    </div>

                    <div class="wa-search-tag-wrap text-center">
                        <h6 class="wa-search-tag-title bs-h-2">People also search for:</h6>
                        <div class="wa-search-tag d-inline-flex flex-wrap  ">
                            <a href="#" aria-label="name" class="wa-search-tag-item bs-h-1" >Modern</a>
                            <a href="#" aria-label="name" class="wa-search-tag-item bs-h-1" >Classical</a>
                            <a href="#" aria-label="name" class="wa-search-tag-item bs-h-1" >Sustainable</a>
                            <a href="#" aria-label="name" class="wa-search-tag-item bs-h-1" >Urban</a>
                            <a href="#" aria-label="name" class="wa-search-tag-item bs-h-1" >Landscape</a>
                        </div>
                    </div>
                </div>

                <button aria-label="search-close" type="button" class="wa-search-box-close search_box_close">
                    <i class="fa-solid fa-x"></i>
                </button>

            </div>
            <!-- search-popup-end -->  

            <!-- back-to-top-button-start -->
            <div class="wa-back-to-top ">
                <span class="wa-back-to-top-text">Top</span>
            </div>
            <!-- back-to-top-button-end --> 

        </div>


		<!-- all-JS-link-here -->
        <script src="{{url('frontend/assets/js/jquery-3.7.1.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/swiper-bundle.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/wow.js')}}"></script>
        <script src="{{url('frontend/assets/js/text-type.js')}}"></script>
        <script src="{{url('frontend/assets/js/matter.js')}}"></script>
        <script src="{{url('frontend/assets/js/throwable.js')}}"></script>
        <script src="{{url('frontend/assets/js/tilt.js')}}"></script>
        <script src="{{url('frontend/assets/js/nice-select.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/marquee.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/magnific-popup.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/SplitText.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/gsap.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/CustomEase.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/counterup.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/waypoints.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/lenis.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/ScrollTrigger.min.js')}}"></script>
        <script src="{{url('frontend/assets/js/main.js')}}?ref={{ setting('site.css') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>
        <script>
$(function () {

    var $originalHeader = $('.bs-header-4-area');

    // Clone header for sticky
    var $stickyHeader = $originalHeader.clone()
        .addClass('is-sticky-clone')
        .appendTo('body');

    $(window).on('scroll', function () {
        var scrollTop = $(this).scrollTop();

        if (scrollTop > 0) {
            $stickyHeader.addClass('is-sticky');
        } else {
            $stickyHeader.removeClass('is-sticky');
        }
    });

});
</script>




        @yield('js')
    </body>
</html>

