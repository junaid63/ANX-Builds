@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Garden Granny Annexe UK | Custom Designs - Granny Annexe Co.">
    <meta name="description" content="Garden Granny Annexe UK: Discover bespoke, high quality garden annexes with Granny Annexe Company. Create more space today  Get a free consultation now!">
    <meta property="og:title" content="Garden Granny Annexe UK | Custom Designs - Granny Annexe Co.">
    <meta property="og:description" content="Garden Granny Annexe UK: Discover bespoke, high quality garden annexes with Granny Annexe Company. Create more space today  Get a free consultation now!">
    <meta name="twitter:title" content="Garden Granny Annexe UK | Custom Designs - Granny Annexe Co.">
    <meta name="twitter:description" content="Garden Granny Annexe UK: Discover bespoke, high quality garden annexes with Granny Annexe Company. Create more space today  Get a free consultation now!">
@endsection

@section('schema')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Granny Annexe Company",
            "image": "https://www.grannyannexecompany.co.uk/storage/settings/January2026/kDhmeMjTlPGF5t0XVT6y.png",
            "@id": "",
            "url": "https://www.grannyannexecompany.co.uk/",
            "telephone": "0333 444 0376",
            "priceRange": "£ £ £ £ £ £",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "ANX Builds Ltd 128 City Road,",
                "addressLocality": "London",
                "postalCode": "EC1V 2NX",
                "addressCountry": "GB"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 51.5273469,
                "longitude": -0.0888062
            },
            "openingHoursSpecification": [{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Monday",
                "opens": "08:30",
                "closes": "17:30"
            },{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Tuesday",
                "opens": "08:30",
                "closes": "17:30"
            },{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Wednesday",
                "opens": "08:30",
                "closes": "17:30"
            },{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Thursday",
                "opens": "08:30",
                "closes": "17:30"
            },{
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Friday",
                "opens": "08:30",
                "closes": "17:30"
            }] 
        }
    </script>
@endsection

@section('title')
Garden Granny Annexe UK | Custom Designs - Granny Annexe Co.
@endsection

@section('gtag')
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-4ZHTHG51SF"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-4ZHTHG51SF'); </script>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54RDC35J"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@stop

@section('css')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('content')

    <!-- hero-start -->
    <section class="bs-hero-4-area wa-p-relative pt-90 wa-fix">
        <div class="container bs-container-2">
            <div class="bs-hero-4-content">
                <h1 class="bs-hero-4-title bs-h-4 wa-split-y cd-headline clip " data-split-delay="1s">
                    Bespoke, Custom-Made  <br>Garden Annexes Across the UK 
                    {{-- <span class="cd-words-wrapper single-headline">
                        <b class="is-visible">Designed</b>
                        <b>Built</b>
                        <b>Across</b>
                        <b>UK</b>
                    </span> --}}
                </h1>
                <div class="inner-div">
                    {{-- <a href="{{ route('about') }}" aria-label="name" class="bs-hero-4-circle-btn wa-magnetic-btn">
                        <span class="btn-icon ">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.00001 7C8.00001 6.73478 8.10537 6.48043 8.2929 6.29289C8.48044 6.10536 8.73479 6 9.00001 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8947 6.48043 18 6.73478 18 7V15C18 15.2652 17.8947 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16C16.7348 16 16.4804 15.8946 16.2929 15.7071C16.1054 15.5196 16 15.2652 16 15V9.414L7.70701 17.707C7.51841 17.8892 7.26581 17.99 7.00361 17.9877C6.74141 17.9854 6.4906 17.8802 6.30519 17.6948C6.11978 17.5094 6.01461 17.2586 6.01234 16.9964C6.01006 16.7342 6.11085 16.4816 6.29301 16.293L14.586 8H9.00001C8.73479 8 8.48044 7.89464 8.2929 7.70711C8.10537 7.51957 8.00001 7.26522 8.00001 7Z" fill="#a47966"/>
                            </svg>
                        </span>
                        <img src="{{url('frontend/assets/img/illus/cta-button.png')}}" alt="">
                    </a> --}}
                    <a href="{{ route('about') }}" aria-label="Book a Design Consultation" class="bs-hero-4-circle-btn wa-magnetic-btn">
                        <span class="btn-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.00001 7C8.00001 6.73478 8.10537 6.48043 8.2929 6.29289C8.48044 6.10536 8.73479 6 9.00001 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8947 6.48043 18 6.73478 18 7V15C18 15.2652 17.8947 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16C16.7348 16 16.4804 15.8946 16.2929 15.7071C16.1054 15.5196 16 15.2652 16 15V9.414L7.70701 17.707C7.51841 17.8892 7.26581 17.99 7.00361 17.9877C6.74141 17.9854 6.4906 17.8802 6.30519 17.6948C6.11978 17.5094 6.01461 17.2586 6.01234 16.9964C6.01006 16.7342 6.11085 16.4816 6.29301 16.293L14.586 8H9.00001C8.73479 8 8.48044 7.89464 8.2929 7.70711C8.10537 7.51957 8.00001 7.26522 8.00001 7Z"
                                    fill="#a47966"/>
                            </svg>
                        </span>

                        <!-- Circular Text -->
                        <svg class="circle-text" viewBox="0 0 200 200">
                            <defs>
                                <path id="circlePath"
                                    d="M100,100 m-75,0 a75,75 0 1,1 150,0 a75,75 0 1,1 -150,0"/>
                            </defs>
                            <text>
                                <textPath href="#circlePath">
                                    BOOK A DESIGN CONSULTATION -----------------
                                </textPath>
                            </text>
                        </svg>

                    </a>

                    <p class="bs-p-4 bs-hero-4-disc wa-split-y" data-split-delay="1.6s">
                        The Granny Annexe Company designs, builds and installs high-quality, bespoke, steel frame garden annexes across the UK. Our fully turnkey service manages every stage - from planning and groundworks to the finished handover.
                    </p>
                </div>
            </div>
        </div>

        <!-- slider -->
        <div class="bs-hero-4-slider">

            <div class="bs-hero-4-slider-img">
                <div class="swiper-container bs-h4-img-active wa-fix">
                    <div class="swiper-wrapper">

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img title="Hero First Banner" src="{{url('frontend/assets/img/hero/01.png')}}" alt="Hero First Banner">
                                </div>
                                <!-- trusted -->
                                {{-- <div class="bs-hero-4-slider-img-item-trusted">
                                    <h3 class="bs-h-4 title">trusted</h3>
                                    <p class="bs-p-4 ratting" >
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        4.8 view
                                    </p>

                                    <p class="bs-p-4 disc">
                                        discover the architectural
                                    </p>
                                </div> --}}
                            </div>
                        </div>

                        <!-- single-slide -->
                        {{-- <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img src="{{url('frontend/assets/img/hero/02.png')}}" alt="">
                                </div>
                            </div>
                        </div> --}}

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img title="Hero Second Banner" src="{{url('frontend/assets/img/hero/03.png')}}" alt="Hero Second Banner">
                                </div>
                                <!-- trusted -->
                                {{-- <div class="bs-hero-4-slider-img-item-trusted">
                                    <h3 class="bs-h-4 title">trusted</h3>
                                    <p class="bs-p-4 ratting" >
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        4.8 view
                                    </p>

                                    <p class="bs-p-4 disc">
                                        discover the architectural
                                    </p>
                                </div> --}}
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img title="Hero Third Banner" src="{{url('frontend/assets/img/hero/04.png')}}" alt="Hero Third Banner">
                                </div>
                                <!-- trusted -->
                                {{-- <div class="bs-hero-4-slider-img-item-trusted">
                                    <h3 class="bs-h-4 title">trusted</h3>
                                    <p class="bs-p-4 ratting" >
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        4.8 view
                                    </p>

                                    <p class="bs-p-4 disc">
                                        discover the architectural
                                    </p>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bs-hero-4-slider-thum">
                <div class="swiper-container bs-h4-thum-active wa-fix">
                    <div class="swiper-wrapper">

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img title="Hero First Banner" src="{{url('frontend/assets/img/hero/01.png')}}" alt="Hero First Banner">
                            </div>
                        </div>

                        <!-- single-slide -->
                        {{-- <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img title="Hero First Banner" src="{{url('frontend/assets/img/hero/02.png')}}" alt="">
                            </div>
                        </div> --}}

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img title="Hero Second Banner" src="{{url('frontend/assets/img/hero/03.png')}}" alt="Hero Second Banner">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img title="Hero Third Banner" src="{{url('frontend/assets/img/hero/04.png')}}" alt="Hero Third Banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="bs-hero-4-big-title bs-h-4 wa-split-up" data-split-delay="1.5s">ANX BUILDS</h2>
        </div>

        
        {{-- <div class="bs-hero-4-bg" data-background="{{url('frontend/assets/img/hero/h4-bg.png')}}"></div> --}}
    </section>
    <!-- hero-end -->

    <!-- core-feature-start -->
    <section class="bs-core-feature-4-area py-lg-5 py-md-3 py-4">
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        <div class="bs-core-feature-4-wrap">

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" >
                <h3 class="second-banner-section bs-h-4 item-title">
                    <a href="#" aria-label="name">Modular Build System</a>
                </h3>
                <div class="item-icon">
                    <img data-cursor="-opaque" title="Build System" src="{{url('frontend/assets/img/core-features/build-system-01.png')}}" alt="Build System">
                </div>
                <p class="bs-p-4 item-disc second-banner-section-para">
                    Your annexe will be  completed in just a matter of weeks
                </p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.2s">
                <h3 class="second-banner-section bs-h-4 item-title">
                    <a href="#" aria-label="name">Custom & Unique Designs</a>
                </h3>
                <div class="item-icon">
                    <img data-cursor="-opaque" title="Custom Unique" src="{{url('frontend/assets/img/core-features/custom-unique-01.png')}}" alt="Custom Unique">
                </div>
                <p class="bs-p-4 item-disc second-banner-section-para">
                    Every Granny Annexe Company project is tailored your specific taste and requirements 
                </p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.4s">
                <h3 class="second-banner-section bs-h-4 item-title">
                    <a href="#" aria-label="name">High-Efficiency Build</a>
                </h3>
                <div class="item-icon">
                    <img data-cursor="-opaque" title="High Efficincy Build" src="{{url('frontend/assets/img/core-features/cf-4-icon-3-01.png')}}" alt="High Efficiency Build">
                </div>
                <p class="bs-p-4 item-disc second-banner-section-para">
                    Exceptional insulation for  warm winters, cool summers,  and low running costs
                </p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.6s">
                <h3 class="second-banner-section bs-h-4 item-title">
                    <a href="#" aria-label="name">Engineered to Last, Finished to Perfection</a>
                </h3>
                <div class="item-icon">
                    <img data-cursor="-opaque" title="Engineered" src="{{url('frontend/assets/img/core-features/engineered-01.png')}}" alt="Engineered">
                </div>
                <p class="bs-p-4 item-disc second-banner-section-para">
                    Our steel frame system gives you a stronger core, cleaner lines, and long-term durability.
                </p>
            </div>

        </div>
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
    </section>
    <!-- core-feature-end -->

    <!-- core-services-start -->
    <section class="bs-core-services-2-area home-pricing-banner wa-bg-default wa-fix">
        <div class="bs-core-services-2-wrap">
            
            <!-- single-item -->
            <div class="bs-core-services-2-item ">
                {{-- <div class="item-title"> --}}
                <h4 class="bs-h-2 item-title">
                    <span class="wa-split-up wa-capitalize wa-fix">
                        Prices Starting From
                    </span>
                </h4>
                <h5 class="bs-h-2 item-title custom-top">
                    <strong>£59,995</strong>
                </h5>
                <div class="item-btn custom-top-btn">
                    <a href="{{ route('price') }}" aria-label="name" class="bs-btn-1">
                        <span class="text">
                            See Our Prices
                        </span>
                        <span class="shape" ></span>
                    </a>
                </div>
                {{-- </div> --}}
                <div class="content-wrap">
                    <h4 class="bs-h-2 item-title">
                        Prices Starting From
                    </h4>
                    <h4 class="bs-h-2 item-title">
                       <strong>£59,995</strong>
                    </h4>
                    <div class="item-btn">
                        <a href="{{ route('price') }}" aria-label="name" class="bs-btn-1">
                            <span class="text">
                                See Our Prices
                            </span>
                            <span class="shape" ></span>
                        </a>
                    </div>
                </div>

                <div class="item-img wa-fix wa-img-cover">
                    <img title="Breadcrumb Blog Detail" src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-blog-detail.png') }}" alt="Breadcrumb Blog Detail">
                </div>
            </div>
        </div>
    </section>
    <!-- core-services-end -->

    <!-- about-start -->
    <section class="bs-about-4-area py-lg-5 py-5 wa-fix">
        <div class="container bs-container-2">
            <h5 class="bs-subtitle-4 ">
                <span class="text">about us</span>
                <span class="icon">
                    <img title="Subtitle Svg" src="{{url('frontend/assets/img/illus/subtitle-4-icon.svg')}}" alt="Subtitle Svg">
                </span>
            </h5>

            <div class="bs-about-4-wrap">

                <!-- left-content -->
                <div class="bs-about-4-content">
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Premium quality granny annexes, engineered to last.</h2>

                    <div class="inner-div">
                        <p class="bs-p-4 disc wa-fadeInUp">
                            Our granny annexes are designed and engineered to feel like true homes - more
                            like a new-build house than a temporary building. As you’ll see in our <a href="{{ route('about') }}" style="text-decoration: underline">About Us</a>
                            section, we’re built around quality: robust steel-frame construction,
                            house-level specification, and a careful finish on every detail.
                        </p>
                        <div class="btn-wrap wa-fadeInUp">
                            <a href="{{ route('about') }}" aria-label="name" class="bs-pr-btn-2">
                                <span class="text" data-back="More About The Granny Annexe Company" data-front="More About The Granny Annexe Company"></span>
                                <span class="line-1" ></span>
                                <span class="line-2" ></span>
                                <span class="box box-1" ></span>
                                <span class="box box-2" ></span>
                                <span class="box box-3" ></span>
                                <span class="box box-4" ></span>
                            </a>
                        </div>
                    </div>

                    <div class="illus wa-clip-left-right">
                        <img src="{{url('frontend/assets/img/about/a4-illus-1.png')}}" title="a4-illus First Img" alt="a4-illus First Img">
                    </div>

                    <!-- feature -->
                    {{-- <div class="bs-about-4-feature">

                        <!-- single -->
                        <div class="bs-about-4-feature-single wow fadeInRight">
                            <div class="item-icon">
                                <i class="flaticon-denver flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 item-title">
                                <a href="#" aria-label="name">modern Design</a>
                            </h4>
                            <p class="bs-p-4 item-disc">post no so what deal evil rent by real in. but her ready lived spite solid</p>
                        </div>

                        <!-- single -->
                        <div class="bs-about-4-feature-single wow fadeInRight" data-wow-delay=".2s">
                            <div class="item-icon">
                                <i class="flaticon-goodwill-1 flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 item-title">
                                <a href="#" aria-label="name">quality work</a>
                            </h4>
                            <p class="bs-p-4 item-disc">collaboration is at the core of our process as our architects work.</p>
                        </div>

                    </div> --}}
                </div>
                
                <div class="bs-about-4-right">
                    <div class="bs-about-4-project wa-bg-default wa-parallax-item-right-left" data-background="{{url('frontend/assets/img/about/about-small-img.png')}}" >
                        <div class="icon">
                            <i class="flaticon-right-arrow flaticon"></i>
                        </div>
                        <h3 class="bs-h-4 title">
                            <a href="{{ route('about') }}" aria-label="name">See some of our completed annexes</a>
                        </h3>
                        <p class="bs-p-4 disc">
                            Explore completed annexes and steel-frame builds across the UK.
                        </p>
                    </div>

                    <div class="bs-about-4-img wa-fix wa-img-cover">
                        <img class="wa-parallax-img" src="{{url('frontend/assets/img/about/about-img.png')}}" title="About Img" alt="About Img">
                    </div>

                    <div class="illus-2">
                        <img  src="{{url('frontend/assets/img/about/a4-illus-2.png')}}" title="a4-illus Second Img" alt="a4-illus Second Img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-end -->

    <!-- video-start -->
    {{-- <section class="bs-video-4-area">
        <div class="bs-video-4-content wa-p-relative wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{url('frontend/assets/img/video/v4-img-1.png')}}" alt="">

            <div class="bs-video-4-text">
                <div class="bs-video-4-marquee-active">
                    <h4 class="bs-h-1 bs-video-4-text-item wa-split-text">The Granny Annexe Company</h4>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- video-end -->
     <!-- video-start -->
    <section class="bs-video-4-area">
        <div class="bs-video-4-content wa-p-relative wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{url('frontend/assets/img/video/v4-img-1-updated.png')}}" title="img updated" alt="img updated">

            <div class="bs-video-4-text">
                {{-- <div class="bs-video-4-marquee-active"> --}}
                    {{-- <h4 class="bs-h-1 bs-video-4-text-item wa-split-text">The Granny Annexe Company</h4> --}}
                    <div class="banner-logo">
                        {{-- <img src="{{ url('frontend/assets/img/logo/banner-logo.png') }}" alt="Company Logo"> --}}
                        <img src="{{ url('storage') }}/{{ setting('site.logo') }}" title="Logo" alt="Logo">
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </section>
    <!-- video-end -->


    <!-- services-start -->
    @include('frontend.inc.servicecards')
    <!-- services-end -->

    <!-- choose-start -->
    {{-- <section class="bs-choose-4-area wa-bg-default wa-fix pb-120">
        <div class="container bs-container-2">
            <div class="bs-choose-4-wrap">

                <div class="bs-choose-4-content-height">
                    <!-- left-content -->
                    <div class="bs-choose-4-content-pin">
                        <div class="bs-choose-4-content">

                            <h5 class="bs-subtitle-4 bs-choose-4-subtitle">
                                <span class="text">WHY CHOOSE US</span>
                                <span class="icon">
                                    <img src="{{url('frontend/assets/img/illus/subtitle-4-icon-2.svg')}}" alt="">
                                </span>
                            </h5>

                            <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">
                                Trusted Experts in Granny Annexes
                            </h2>

                            <p class="bs-p-4 disc wa-fadeInUp">
                                Homeowners choose The Granny Annexe Company for clean, reliable and efficient modular builds. Our systems ensure fixed costs, fast installation and long - term performance 
                            </p>

                            <h5 class="bs-subtitle-4 bs-choose-4-subtitle mb-3">
                                <span class="text">
                                    Key Points 
                                </span>
                            </h5>
                            <div class="bs-choose-4-progress d-flex flex-column gap-2">
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >Faster completion than traditional building</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >High-performance insulation and steel framing</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >Guidance with planning and compliance</span>
                                    </h5>
                                </div>
                                                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span>
                                            Completely bespoke builds
                                        </span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    



                <!-- right-play-btn -->
                <div class="bs-choose-4-right d-flex justify-content-center align-items-center">
                    <a href="javascript:void(0)" aria-label="name" class="bs-play-btn-4 wa-magnetic">
                        <span class="icon wa-magnetic-btn">
                            <i class="flaticon-play flaticon"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="bs-choose-4-feature">

                <!-- single-feature -->
                <div class="item-margin">
                    <div class="bs-choose-4-feature-single">
                        <div class="icon">
                            <i class="flaticon-minimalist flaticon"></i>
                        </div>
                        <h3 class="bs-h-4 title">
                            <a href="project-details.html" aria-label="name">Visionary Modular Design</a>
                        </h3>
                        <p class="bs-p-4 disc">
                            Layouts optimised for comfort and functionality.
                        </p>
                    </div>
                </div>

                <!-- single-feature -->
                <div class="item-margin">
                    <div class="bs-choose-4-feature-single">
                        <div class="icon">
                            <i class="flaticon-blueprint flaticon"></i>
                        </div>
                        <h3 class="bs-h-4 title">
                            <a href="project-details.html" aria-label="name">Uncompromising Quality</a>
                        </h3>
                        <p class="bs-p-4 disc">
                            Premium materials and precision engineering.
                        </p>
                    </div>
                </div>

                <!-- single-feature -->
                <div class="item-margin">
                    <div class="bs-choose-4-feature-single">
                        <div class="icon">
                            <i class="flaticon-property-insurance flaticon"></i>
                        </div>
                        <h3 class="bs-h-4 title">
                            <a href="project-details.html" aria-label="name">Seamless Functionality</a>
                        </h3>
                        <p class="bs-p-4 disc">
                            Every pod and extension is designed for real-life use.
                        </p>
                    </div>
                </div>

                <!-- single-feature -->
                <div class="item-margin">
                    <div class="bs-choose-4-feature-single">
                        <div class="icon">
                            <i class="flaticon-goodwill-1 flaticon"></i>
                        </div>
                        <h3 class="bs-h-4 title">
                            <a href="project-details.html" aria-label="name">Time-Tested Reliability</a>
                        </h3>
                        <p class="bs-p-4 disc">
                            Modular systems with consistent long-term performance.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}
    <section class="custom-choose wa-bg-default wa-fix pb-lg-5 pb-0">
        <div class="container bs-container-2">
            <div class="bs-choose-4-wrap">

                <div class="bs-choose-4-content-height">
                    <!-- left-content -->
                    <div class="bs-choose-4-content-pin">
                        <div class="bs-choose-4-content py-lg-5 py-md-4 py-5">

                            <h5 class="bs-subtitle-4 bs-choose-4-subtitle">
                                <span class="text">WHY CHOOSE US</span>
                                <span class="icon">
                                    <img src="{{url('frontend/assets/img/illus/subtitle-4-icon-2.svg')}}" title="subtitle icon second" alt="subtitle icon second">
                                </span>
                            </h5>

                            <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">
                                Why choose the Granny Annexe Company For Your Project 
                            </h2>

                            <p class="bs-p-4 disc wa-fadeInUp mb-lg-3 mb-md-2 mb-2">
                                When comparing annexes, the differences in build quality can be significant. Many look similar from the outside, but the materials, insulation, and construction methods used can dramatically affect comfort, running costs, and how long your annexe will last. 
                            </p>
                            <p class="bs-p-4 disc wa-fadeInUp">
                                At The Granny Annexe Company, we believe a garden annexe should be built to the same standard as a high-quality home - not a temporary structure. That’s why we go far beyond the basic requirements used by many other Companies. 
                            </p>

                            <div class="btn-wrap wa-fadeInUp">
                                <a href="{{ route('about') }}#why-choose-us" aria-label="name" class="bs-pr-btn-2">
                                    <span class="text" data-back="Learn More Why Choose Us" data-front="Learn More Why Choose Us"></span>
                                    <span class="line-1" ></span>
                                    <span class="line-2" ></span>
                                    <span class="box box-1" ></span>
                                    <span class="box box-2" ></span>
                                    <span class="box box-3" ></span>
                                    <span class="box box-4" ></span>
                                </a>
                            </div>

                            {{-- <h5 class="bs-subtitle-4 bs-choose-4-subtitle mb-3">
                                <span class="text">
                                    Typical Building Regulation requirements: 
                                </span>
                            </h5>
                            <div class="bs-choose-4-progress">
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >Walls: around 0.26 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >Roofs: around 0.16 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >Floors: around 0.18 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span>
                                            Windows: around 1.4 W/m2K
                                        </span>
                                    </h5>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!-- right-play-btn -->
                <div class="bs-choose-4-right d-flex justify-content-center align-items-center">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- choose-end -->

    <!-- blog-start -->
    <section class="bs-blog-4-area py-lg-5 py-md-4 py-4">
        <div class="container bs-container-2">
            <div class="bs-blog-4-content">
                <h5 class="bs-subtitle-4 ">
                    <span class="text">blog & news</span>
                    <span class="icon">
                        <img src="{{ url('frontend/assets/img/illus/subtitle-4-icon.svg') }}" title="subtitle third" alt="subtitle third">
                    </span>
                </h5>
                <div class="inner-div">
                    <div class="d-flex flex-column">
                        <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize mb-md-3 mb-3" data-cursor="-opaque">Latest Guides & Articles</h2>
                        <p class="bs-p-4 disc wa-fadeInUp">
                            Insights on planning permission, granny annexe ideas and solutions. 
                        </p>
                    </div>
                    <div class="btn-wrap wa-fadeInRight">
                        <a href="javascript:void(0);" aria-label="name" class="bs-pr-btn-2">
                            <span class="text" data-back="View All Blog" data-front="View All Blog"></span>
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="box box-1"></span>
                            <span class="box box-2"></span>
                            <span class="box box-3"></span>
                            <span class="box box-4"></span>
                        </a>
                    </div>

                </div>
            </div>

            {{-- <div class="bs-blog-4-wrap">
                @foreach ($blogs as $blog)
                <div class="bs-blog-4-item wow fadeInRight" >
                    <div class="item-img wa-fix wa-img-cover">
                        <a href="{{ route('blogDeails', $blog->slug) }}" aria-label="name" data-cursor-text="View">
                            <img src="{{ url('storage/' . $blog->home_card_img) }}" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <a href="{{ route('blogDeails', $blog->slug) }}" aria-label="name" class="item-btn">
                            <i class="flaticon-top-right flaticon"></i>
                        </a>
                        <p class="bs-p-4 author">{{ ucwords($blog->sub_title) }}</p>
                        <h4 class="title bs-h-1">
                            <a href="{{ route('blogDeails', $blog->slug) }}" aria-label="name">{{ ucwords($blog->title) }}</a>
                        </h4>
                        <p class="item-meta bs-p-4">
                            <span class="categories" >architecture</span>
                            <span class="date" >jan 20, 2024</span>
                            <span class="read" >10 min read</span>
                        </p>
                    </div>

                </div>
                @endforeach
            </div> --}}

            <!-- Swiper -->
            <div class="swiper BlogSwiper">
                <div class="swiper-wrapper">
                    @foreach ($blogs as $blog)  
                    <div class="swiper-slide">
                        <div class="bs-blog-4-wrap">
                            <div class="bs-blog-4-item wow fadeInRight" >
                                <div class="item-img wa-fix wa-img-cover">
                                    <a href="{{ route('blogDeails', $blog->slug) }}" aria-label="name" data-cursor-text="View">
                                        <img src="{{ url('storage/' . str_replace('\\', '/', $blog->home_card_img)) }}" title="{{ $blog->title }}" alt="{{ $blog->title }}">
                                        {{-- <img src="{{ url('storage/' . $blog->home_card_img) }}" title="{{ $blog->title }}" alt="{{ $blog->title }}"> --}}
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="{{ route('blogDeails', $blog->slug) }}" aria-label="name" class="item-btn">
                                        <i class="flaticon-top-right flaticon"></i>
                                    </a>
                                    <p class="bs-p-4 author">{{ ucwords($blog->sub_title) }}</p>
                                    <h3 class="title bs-h-1 text-ellipsis-2">
                                        <a href="{{ route('blogDeails', $blog->slug) }}" aria-label="name">{{ ucwords($blog->title) }}</a>
                                    </h3>
                                    <p class="item-meta bs-p-4">
                                        <span class="categories" >Garden Annexes</span>
                                        {{-- <span class="date" >jan 20, 2024</span>
                                        <span class="read" >10 min read</span> --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- blog-end -->
   
    <!-- contact-start -->
    @include('frontend.inc.conabout-banner')
    <!-- contact-end -->

@endsection


@section('js')

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var partnerSwiper = new Swiper('.BlogSwiper', {
            // slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                prevEl: '.prev-partner',
                nextEl: '.next-partner',
                clickable: true
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                510: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },

                980: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 2
                }
            }
        });
    </script>
@endsection