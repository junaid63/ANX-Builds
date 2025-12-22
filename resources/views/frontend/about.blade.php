@extends('frontend/layouts/master')

@section('metas')
@endsection

@section('title')
ANX Builds || About Us
@endsection

@section('css')
@endsection

@section('content')

    <!-- breadcrumb-start -->
    <section class="breadcrumb-area wa-p-relative" >
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{url('frontend/assets/img/breadcrumb/breadcrumb-img.png')}}" alt="">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >About Us</h1>

                <div class="breadcrumb-list " >
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                    </svg>
                        
                    <a href="{{ route('index') }}">Home</a>
                    <span>About us</span>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- core-features-start -->
    @include('frontend.inc.construction')
    <!-- core-features-end -->

    <!-- about-start -->
    <section class="bs-about-1-area pt-125 pb-100">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-about-1-sec-title mb-30">
                <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize">
                    <span class="icon">
                        <img src="{{url('frontend/assets/img/illus/star-shape.png')}}" alt="">
                    </span>
                    Building Modern Modular Living Spaces Across the UK
                </h6>
                <h2 class="bs-sec-title-1  wa-split-right wa-capitalize" data-cursor="-opaque">Award-Winning Modular Pods, Annexes & Steel-Frame Builds</h2>
            </div>

            <!-- slider -->
            <div class="bs-about-1-slider mb-40 wa-p-relative">
                <div class="swiper-container wa-fix bs-a1-active">
                    <div class="swiper-wrapper">

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-about-1-item wa-fix ">
                                <a href="{{url('frontend/assets/img/about/a1-img-1.png')}}" class="popup-img wa-img-cover">
                                    <img src="{{url('frontend/assets/img/about/a1-img-1.png')}}" alt="">
                                </a>
                                
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-about-1-item wa-fix ">
                                <a href="{{url('frontend/assets/img/about/a1-img-2.png')}}" class="popup-img wa-img-cover">
                                    <img src="{{url('frontend/assets/img/about/a1-img-2.png')}}" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-about-1-item wa-fix ">
                                <a href="{{url('frontend/assets/img/about/a1-img-3.png')}}" class="popup-img wa-img-cover">
                                    <img src="{{url('frontend/assets/img/about/a1-img-3.png')}}" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-about-1-item wa-fix ">
                                <a href="{{url('frontend/assets/img/about/a1-img-4.png')}}" class="popup-img wa-img-cover">
                                    <img src="{{url('frontend/assets/img/about/a1-img-4.png')}}" alt="">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="bs-about-1-slider-drag bs-p-1">drag</div>

            </div>

            <!-- content -->
            <div class="bs-about-1-content">
                <p class="bs-p-1 disc wa-split-y wa-capitalize">
                    ANX Builds delivers high-quality modular pods and granny annexes engineered for modern living.
                    Our team manages every phase — from design and planning to fabrication and installation — ensuring a smooth, efficient experience with minimal disruption.
                </p>
            </div>

        </div>
    </section>
    <!-- about-end -->

    <!-- counter-start -->
    <section class="bs-core-feature-5-area mb-160">
        <div class="container bs-container-2">
            <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
            <div class="bs-core-feature-4-wrap has-5">

                <!-- single-item -->
                <div class="bs-core-feature-4-item wow fadeInRight" >
                    <h4 class="bs-h-4 item-title">
                        Projects Completed
                    </h4>
                    <h5 class="bs-h-4 item-counter" data-cursor="-opaque">
                        <span class="counter wa-counter">350</span>
                        +
                    </h5>
                    {{-- <p class="bs-p-4 item-disc">
                        Delivering modular pods, extensions and annexes across the UK.
                    </p> --}}
                </div>

                <!-- single-item -->
                <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.4s">
                    <h4 class="bs-h-4 item-title">
                        Years of Expertise
                    </h4>
                    <h5 class="bs-h-4 item-counter" data-cursor="-opaque">
                        <span class="counter wa-counter">10</span>
                        +
                    </h5>
                    {{-- <p class="bs-p-4 item-disc">
                        A decade of experience in modular engineering and prefabrication.
                    </p> --}}
                </div>

                <!-- single-item -->
                <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.6s">
                    <h4 class="bs-h-4 item-title">
                        Satisfaction Rate
                    </h4>
                    <h5 class="bs-h-4 item-counter" data-cursor="-opaque">
                        <span class="counter wa-counter">98</span>
                        % 
                    </h5>
                    {{-- <p class="bs-p-4 item-disc">
                        Homeowners trust ANX for reliable timelines, quality and service.
                    </p> --}}
                </div>

                <!-- single-item -->
                <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.2s">
                    <h4 class="bs-h-4 item-title">
                        Industry Recognition
                    </h4>
                    <h5 class="bs-h-4 item-counter" data-cursor="-opaque">
                        <span class="counter wa-counter">23</span>
                        +
                    </h5>
                    {{-- <p class="bs-p-4 item-disc">
                        Awarded for innovation in modular and steel-frame construction.
                    </p> --}}
                </div>

            </div>
            <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        </div>
    </section>
    <!-- counter-end -->            

    <!-- video-start -->
    <section class="bs-video-1-area wa-fix">
        <div class="bs-video-1-content wa-p-relative">
            <div class="bs-video-1-content-img wa-p-relative wa-fix wa-img-cover">
                <img class="wa-parallax-img" src="{{url('frontend/assets/img/video/v1-img-1.png')}}" alt="">

                <div class="bs-video-1-play-btn">
                    <a href="javascript:void(0)" aria-label="name" class="bs-play-btn-3 wa-magnetic popup-video">
                        <span class="icon wa-magnetic-btn">
                            <i class="fa-solid fa-play"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="bs-h-1 title wa-split-down" data-cursor="-opaque">
                ANX BUILDS
            </div>
        </div>
    </section>
    <!-- video-end -->

    <!-- team-start -->
    {{-- <section class="bs-team-1-area pt-135 pb-140 wa-fix">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-team-1-sec-title text-center mb-30">
                <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize">
                    <span class="icon">
                        <img src="{{url('frontend/assets/img/illus/star-shape.png')}}" alt="">
                    </span>
                    our team
                </h6>
                <h2 class="bs-sec-title-1 wa-split-right wa-capitalize" data-cursor="-opaque">Meet Our Team</h2>
            </div>

            <!-- slider -->
            <div class="bs-team-1-slider wa-p-relative">
                <div class="swiper-container wa-fix bs-team1-active">
                    <div class="swiper-wrapper">

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-team-1-item">
                                <div class="item-img wa-fix wa-img-cover">
                                    <img src="{{url('frontend/assets/img/team/t1-img-1.png')}}" alt="">
                                </div>
                                <div class="content-wrap">
                                    <div class="left">
                                        <h5 class="bs-h-1 name">
                                            <a href="#" aria-label="name">marox woller</a>
                                        </h5>
                                        <p class="bs-p-1 bio">manager IT support</p>
                                    </div>
                                    <div class="social-link">
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-team-1-item">
                                <div class="item-img wa-fix wa-img-cover">
                                    <img src="{{url('frontend/assets/img/team/t1-img-2.png')}}" alt="">
                                </div>
                                <div class="content-wrap">
                                    <div class="left">
                                        <h5 class="bs-h-1 name">
                                            <a href="#" aria-label="name">Natalie Lin</a>
                                        </h5>
                                        <p class="bs-p-1 bio">IT support</p>
                                    </div>
                                    <div class="social-link">
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-team-1-item">
                                <div class="item-img wa-fix wa-img-cover">
                                    <img src="{{url('frontend/assets/img/team/t1-img-3.png')}}" alt="">
                                </div>
                                <div class="content-wrap">
                                    <div class="left">
                                        <h5 class="bs-h-1 name">
                                            <a href="#" aria-label="name">Ryann Wade</a>
                                        </h5>
                                        <p class="bs-p-1 bio">IT manager</p>
                                    </div>
                                    <div class="social-link">
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-team-1-item">
                                <div class="item-img wa-fix wa-img-cover">
                                    <img src="{{url('frontend/assets/img/team/t1-img-4.png')}}" alt="">
                                </div>
                                <div class="content-wrap">
                                    <div class="left">
                                        <h5 class="bs-h-1 name">
                                            <a href="#" aria-label="name">Riley Wang</a>
                                        </h5>
                                        <p class="bs-p-1 bio">marketing expert</p>
                                    </div>
                                    <div class="social-link">
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-team-1-item">
                                <div class="item-img wa-fix wa-img-cover">
                                    <img src="{{url('frontend/assets/img/team/t1-img-5.png')}}" alt="">
                                </div>
                                <div class="content-wrap">
                                    <div class="left">
                                        <h5 class="bs-h-1 name">
                                            <a href="#" aria-label="name">Kara McGee</a>
                                        </h5>
                                        <p class="bs-p-1 bio">engineer</p>
                                    </div>
                                    <div class="social-link">
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-team-1-item">
                                <div class="item-img wa-fix wa-img-cover">
                                    <img src="{{url('frontend/assets/img/team/t1-img-6.png')}}" alt="">
                                </div>
                                <div class="content-wrap">
                                    <div class="left">
                                        <h5 class="bs-h-1 name">
                                            <a href="#" aria-label="name">Siena Zamora</a>
                                        </h5>
                                        <p class="bs-p-1 bio">support manager</p>
                                    </div>
                                    <div class="social-link">
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        <a class="link" href="#" aria-label="name">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- slider-btn -->
                <div class="bs-team-1-slider-btn">
                    <div class="bs-slider-btn-1 lw-team1-prev wa-magnetic-btn">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="bs-slider-btn-1 lw-team1-next wa-magnetic-btn">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>

            </div>


        </div>
    </section> --}}
    <!-- team-end -->

    <!-- award-start -->
    <section class="bs-award-5-area pt-135 wa-fix">
        <div class="container bs-container-2">
            <div class="bs-award-5-wrap">

                <!-- left-content -->
                <div class="bs-award-5-content">

                    <!-- section-title -->
                    <div class="bs-award-5-sec-title mb-50">
                        <h6 class="bs-subtitle-5 wa-capitalize">
                            <span>08</span>
                            <span class="wa-split-right ">award</span>
                        </h6>
                        <h2 class="bs-sec-title-4 wa-split-right wa-capitalize" data-cursor="-opaque">Achievements in Modular Construction</h2>
                        {{-- <p class="bs-p-4 item-disc mt-lg-3">
                            ANX is recognised for advancing the standards of modular living through innovation, engineering excellence and sustainable building methods.
                        </p> --}}
                    </div>

                    <!-- img -->
                    <div class="bs-award-5-img wa-fix wa-img-cover wa-clip-top-bottom" data-cursor="-opaque" data-split-duration="1.5s">
                        <img src="{{url('frontend/assets/img/award/a5-img-1.png')}}" alt="">
                    </div>

                </div>

                <!-- right-list -->
                <div class="bs-award-5-item">

                    <!-- single-item -->
                    <a href="#" class="bs-award-5-item-single wa-fadeInUp">
                        <h3 class="bs-h-4 year">2020</h3>
                        <h4 class="bs-h-4 title">Modular Innovation Award</h4>
                        <span class="icon">
                            <i class="flaticon-next-1 flaticon"></i>
                        </span>
                        <span class="item-img cursor-follow">
                            <img src="{{url('frontend/assets/img/award/a5-item-img-1.png')}}" alt="">
                        </span>
                    </a>

                    <!-- single-item -->
                    <a href="#" class="bs-award-5-item-single wa-fadeInUp">
                        <h3 class="bs-h-4 year">2021</h3>
                        <h4 class="bs-h-4 title">Best Steel-Frame Residential Build</h4>
                        <span class="icon">
                            <i class="flaticon-next-1 flaticon"></i>
                        </span>
                        <span class="item-img cursor-follow">
                            <img src="{{url('frontend/assets/img/award/a5-item-img-2.png')}}" alt="">
                        </span>
                    </a>

                    <!-- single-item -->
                    <a href="#" class="bs-award-5-item-single wa-fadeInUp">
                        <h3 class="bs-h-4 year">2022</h3>
                        <h4 class="bs-h-4 title">Prefabricated Construction Excellence</h4>
                        <span class="icon">
                            <i class="flaticon-next-1 flaticon"></i>
                        </span>
                        <span class="item-img cursor-follow">
                            <img src="{{url('frontend/assets/img/award/a5-item-img-3.png')}}" alt="">
                        </span>
                    </a>

                    <!-- single-item -->
                    <a href="#" class="bs-award-5-item-single wa-fadeInUp">
                        <h3 class="bs-h-4 year">2023</h3>
                        <h4 class="bs-h-4 title">UK Modular Design Leadership</h4>
                        <span class="icon">
                            <i class="flaticon-next-1 flaticon"></i>
                        </span>
                        <span class="item-img cursor-follow">
                            <img src="{{url('frontend/assets/img/award/a5-item-img-4.png')}}" alt="">
                        </span>
                    </a>

                    <!-- single-item -->
                    <a href="#" class="bs-award-5-item-single wa-fadeInUp">
                        <h3 class="bs-h-4 year">2024</h3>
                        <h4 class="bs-h-4 title">Sustainable Modular Development Award</h4>
                        <span class="icon">
                            <i class="flaticon-next-1 flaticon"></i>
                        </span>
                        <span class="item-img cursor-follow">
                            <img src="{{url('frontend/assets/img/award/a5-item-img-5.png')}}" alt="">
                        </span>
                    </a>
                </div>


            </div>
        </div>
    </section>
    <!-- award-end -->
    
    <!-- work-start -->
    <section class="bs-work-5-area wa-bg-default pt-135 pb-170" data-background="{{url('frontend/assets/img/work/w5-bg-img.png')}}">
        <div class="container bs-container-2">

            <!-- section-title -->
            <div class="bs-work-5-sec-title mb-90">
                <h6 class="bs-subtitle-5 wa-capitalize">
                    <span>05</span>
                    <span class="wa-split-right ">Work Process</span>
                </h6>
                <h2 class="bs-sec-title-4 wa-split-right wa-capitalize" data-cursor="-opaque">Streamlined Modular Build Process for Exceptional Results</h2>
            </div>

            <!-- cards -->
            <div class="bs-work-5-wrap">

                <!-- single-card -->
                <div class="bs-work-5-card has-ani-up">
                    <div class="bg-img wa-img-cover wa-fix">
                        <img src="{{url('frontend/assets/img/work/w5-img-1.png')}}" alt="">
                    </div>
                    <h4 class="bs-h-1 title">Initial Consultation</h4>
                    <p class="bs-p-4 disc"> 
                        Understanding your goals, space and site requirements.
                    </p>
                    <h5 class="bs-h-1 number">01</h5>
                </div>

                <!-- single-card -->
                <div class="bs-work-5-card has-ani-down">
                    <div class="bg-img wa-img-cover wa-fix">
                        <img src="{{url('frontend/assets/img/work/w5-img-2.png')}}" alt="">
                    </div>
                    <h4 class="bs-h-1 title">Design & Planning</h4>
                    <p class="bs-p-4 disc"> 
                        Tailored modular layouts prepared for your needs.
                    </p>
                    <h5 class="bs-h-1 number">02</h5>
                </div>

                <!-- single-card -->
                <div class="bs-work-5-card has-ani-up">
                    <div class="bg-img wa-img-cover wa-fix">
                        <img src="{{url('frontend/assets/img/work/w5-img-3.png')}}" alt="">
                    </div>
                    <h4 class="bs-h-1 title">Fabrication & Installation</h4>
                    <p class="bs-p-4 disc"> 
                        Off-site steel-frame build for fast, clean installation.
                    </p>
                    <h5 class="bs-h-1 number">03</h5>
                </div>

                <!-- single-card -->
                <div class="bs-work-5-card has-ani-down">
                    <div class="bg-img wa-img-cover wa-fix">
                        <img src="{{url('frontend/assets/img/work/w5-img-4.png')}}" alt="">
                    </div>
                    <h4 class="bs-h-1 title">Project Handover</h4>
                    <p class="bs-p-4 disc"> 
                        Final checks and delivery of a ready-to-use space.
                    </p>
                    <h5 class="bs-h-1 number">04</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- work-end -->

    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->


@endsection

@section('js')
@endsection