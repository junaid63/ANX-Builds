@extends('frontend/layouts/master')

@section('metas')
@endsection

@section('title')
ANX Builds || Home
@endsection

@section('css')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        html,
        body {
        position: relative;
        height: 100%;
        }

        body {
        background: #000;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #fff;
        margin: 0;
        padding: 0;
        }

        .swiper {
        width: 100%;
        height: 100%;
        }

        .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #444;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        }
    </style>
@endsection

@section('content')

    <!-- hero-start -->
    <section class="bs-hero-4-area wa-p-relative pt-90 wa-fix">
        <div class="container bs-container-2">
            <div class="bs-hero-4-content">
                <h1 class="bs-hero-4-title bs-h-4 wa-split-y cd-headline clip " data-split-delay="1s">
                    Modular Pods & Home Extensions
                    <span class="cd-words-wrapper single-headline">
                        <b class="is-visible">Designed</b>
                        <b>Built</b>
                        <b>Across</b>
                        <b>UK</b>
                    </span>
                </h1>
                <div class="inner-div">
                    <a href="{{ route('about') }}" aria-label="name" class="bs-hero-4-circle-btn wa-magnetic-btn">
                        <span class="btn-icon ">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.00001 7C8.00001 6.73478 8.10537 6.48043 8.2929 6.29289C8.48044 6.10536 8.73479 6 9.00001 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8947 6.48043 18 6.73478 18 7V15C18 15.2652 17.8947 15.5196 17.7071 15.7071C17.5196 15.8946 17.2652 16 17 16C16.7348 16 16.4804 15.8946 16.2929 15.7071C16.1054 15.5196 16 15.2652 16 15V9.414L7.70701 17.707C7.51841 17.8892 7.26581 17.99 7.00361 17.9877C6.74141 17.9854 6.4906 17.8802 6.30519 17.6948C6.11978 17.5094 6.01461 17.2586 6.01234 16.9964C6.01006 16.7342 6.11085 16.4816 6.29301 16.293L14.586 8H9.00001C8.73479 8 8.48044 7.89464 8.2929 7.70711C8.10537 7.51957 8.00001 7.26522 8.00001 7Z" fill="#a47966"/>
                            </svg>
                        </span>
                        <img src="{{url('frontend/assets/img/illus/h4-circle-text.png')}}" alt="">
                    </a>
                    <p class="bs-p-4 bs-hero-4-disc wa-split-y" data-split-delay="1.6s">
                        ANX creates modular extensions, garden pods, granny annexes and steel-frame home extensions.
                        Fast to build, fully insulated and designed for modern living.
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
                                    <img src="{{url('frontend/assets/img/hero/h4-img-1.png')}}" alt="">
                                </div>
                                <!-- trusted -->
                                <div class="bs-hero-4-slider-img-item-trusted">
                                    <h5 class="bs-h-4 title">trusted</h5>
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
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img src="{{url('frontend/assets/img/hero/h4-img-2.png')}}" alt="">
                                </div>
                                <!-- trusted -->
                                <div class="bs-hero-4-slider-img-item-trusted">
                                    <h5 class="bs-h-4 title">trusted</h5>
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
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img src="{{url('frontend/assets/img/hero/h4-img-3.png')}}" alt="">
                                </div>
                                <!-- trusted -->
                                <div class="bs-hero-4-slider-img-item-trusted">
                                    <h5 class="bs-h-4 title">trusted</h5>
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
                                </div>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-img-item ">
                                <div class="main-img wa-img-cover">
                                    <img src="{{url('frontend/assets/img/hero/h4-img-4.png')}}" alt="">
                                </div>
                                <!-- trusted -->
                                <div class="bs-hero-4-slider-img-item-trusted">
                                    <h5 class="bs-h-4 title">trusted</h5>
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
                                </div>
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
                                <img src="{{url('frontend/assets/img/hero/h4-thum-1.png')}}" alt="">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img src="{{url('frontend/assets/img/hero/h4-thum-2.png')}}" alt="">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img src="{{url('frontend/assets/img/hero/h4-thum-3.png')}}" alt="">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-hero-4-slider-thum-item wa-img-cover wa-fix">
                                <img src="{{url('frontend/assets/img/hero/h4-thum-1.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="bs-hero-4-big-title bs-h-4 wa-split-up" data-split-delay="1.5s">ANX BUILDS</h2>
        </div>

        
        <div class="bs-hero-4-bg" data-background="{{url('frontend/assets/img/hero/h4-bg.png')}}"></div>
    </section>
    <!-- hero-end -->

    <!-- core-feature-start -->
    <section class="bs-core-feature-4-area pt-80 pb-80">
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        <div class="bs-core-feature-4-wrap">

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" >
                <h4 class="bs-h-4 item-title">
                    <a href="#" aria-label="name">Creative Modular Ideas</a>
                </h4>
                <div class="item-icon">
                    <img data-cursor="-opaque" src="{{url('frontend/assets/img/core-features/cf-4-icon-1.svg')}}" alt="">
                </div>
                <p class="bs-p-4 item-disc">
                    Smart solutions for garden offices, gyms, studios and compact living spaces.
                </p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.2s">
                <h4 class="bs-h-4 item-title">
                    <a href="#" aria-label="name">Custom & Unique Designs</a>
                </h4>
                <div class="item-icon">
                    <img data-cursor="-opaque" src="{{url('frontend/assets/img/core-features/cf-4-icon-2.svg')}}" alt="">
                </div>
                <p class="bs-p-4 item-disc">
                    Every ANX pod and extension is tailored to your home and lifestyle.
                </p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.4s">
                <h4 class="bs-h-4 item-title">
                    <a href="#" aria-label="name">High-Efficiency Build</a>
                </h4>
                <div class="item-icon">
                    <img data-cursor="-opaque" src="{{url('frontend/assets/img/core-features/cf-4-icon-3.svg')}}" alt="">
                </div>
                <p class="bs-p-4 item-disc">
                    Precision steel framing ensures fast installation and minimal disruption.
                </p>
            </div>

            <!-- single-item -->
            <div class="bs-core-feature-4-item wow fadeInRight" data-wow-delay="0.6s">
                <h4 class="bs-h-4 item-title">
                    <a href="#" aria-label="name">Long-Lasting Quality</a>
                </h4>
                <div class="item-icon">
                    <img data-cursor="-opaque" src="{{url('frontend/assets/img/core-features/cf-4-icon-4.svg')}}" alt="">
                </div>
                <p class="bs-p-4 item-disc">
                    Fully insulated, low-maintenance and built to UK standards for long-term reliability.
                </p>
            </div>

        </div>
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
    </section>
    <!-- core-feature-end -->

    <!-- about-start -->
    <section class="bs-about-4-area pt-45 pb-125 wa-fix">
        <div class="container bs-container-2">
            <h5 class="bs-subtitle-4 ">
                <span class="text">about us</span>
                <span class="icon">
                    <img src="{{url('frontend/assets/img/illus/subtitle-4-icon.svg')}}" alt="">
                </span>
            </h5>

            <div class="bs-about-4-wrap">

                <!-- left-content -->
                <div class="bs-about-4-content">
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Innovative Modular Living Rooted in Engineering.</h2>

                    <div class="inner-div">
                        <p class="bs-p-4 disc wa-fadeInUp">
                            ANX specialises in modular extensions, garden pods and self-contained annexes.
                            We combine modern design, structural strength and efficient installation to create functional and stylish spaces for everyday use.
                        </p>
                        <div class="btn-wrap wa-fadeInUp">
                            <a href="about.html" aria-label="name" class="bs-pr-btn-2">
                                <span class="text" data-back="Know About ANX" data-front="Know About ANX"></span>
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
                        <img src="{{url('frontend/assets/img/about/a4-illus-1.png')}}" alt="">
                    </div>

                    <!-- feature -->
                    <div class="bs-about-4-feature">

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

                    </div>
                </div>
                
                <div class="bs-about-4-right">
                    <div class="bs-about-4-project wa-bg-default wa-parallax-item-right-left" data-background="{{url('frontend/assets/img/about/a4-bg-img-1.png')}}" >
                        <div class="icon">
                            <i class="flaticon-right-arrow flaticon"></i>
                        </div>
                        <h4 class="bs-h-4 title">
                            <a href="projects-3.html" aria-label="name">See Modular Projects</a>
                        </h4>
                        <p class="bs-p-4 disc">
                            Explore completed garden pods, modular extensions and annexe builds across the UK.
                        </p>
                    </div>

                    <div class="bs-about-4-img wa-fix wa-img-cover">
                        <img class="wa-parallax-img" src="{{url('frontend/assets/img/about/a4-img-1.png')}}" alt="">
                    </div>

                    <div class="illus-2">
                        <img  src="{{url('frontend/assets/img/about/a4-illus-2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-end -->

    <!-- video-start -->
    <section class="bs-video-4-area">
        <div class="bs-video-4-content wa-p-relative wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{url('frontend/assets/img/video/v4-img-1.png')}}" alt="">

            <div class="bs-video-4-text">
                <div class="bs-video-4-marquee-active">
                    <h4 class="bs-h-1 bs-video-4-text-item wa-split-text">ANX BUILDS</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- video-end -->

    <!-- services-start -->
    <section class="bs-services-4-area pt-100 wa-fix " data-background="{{url('frontend/assets/img/services/s4-bg.png')}}">
        <div class="bs-services-4-img wa-fix wa-img-cover wa-slideInLeft">
            <img src="{{url('frontend/assets/img/services/s4-img-1.png')}}" alt="">
        </div>
        <div class="container bs-container-2">
            <h5 class="bs-subtitle-4 bs-services-4-subtitle">
                <span class="text">services</span>
                <span class="icon">
                    <img src="{{url('frontend/assets/img/illus/subtitle-4-icon-2.svg')}}" alt="">
                </span>
            </h5>

            <div class="bs-services-4-wrap">

                <!-- left-content -->
                <div class="bs-services-4-content">

                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Transforming Homes With Modular Pods & Extensions.</h2>

                    <p class="bs-p-4 disc wa-fadeInUp">
                        ANX provides pre-engineered extension systems that are insulated, durable and built with precision steel framing.
                        Ideal for creating new living areas, workspaces or multi-purpose rooms without the delays of traditional construction.
                    </p>
                    <div class="btn-wrap wa-fadeInUp">
                        <a href="javascript:void()" aria-label="name" class="bs-pr-btn-2">
                            <span class="text" data-back="view all services" data-front="view all services"></span>
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                            <span class="box box-1"></span>
                            <span class="box box-2"></span>
                            <span class="box box-3"></span>
                            <span class="box box-4"></span>
                        </a>
                    </div>
                </div>

                <!-- right-item -->
                <div class="bs-services-4-item">

                    <!-- single-item -->
                    <div class="bs-services-4-item-single wa-bg-default active " data-background="{{url('frontend/assets/img/services/s4-card-bg.png')}}">
                        <div class="active-content">
                            <h4 class="bs-h-1 title">
                                <a href="#" aria-label="name" class="wa-line-limit has-line-2">Garden Pods & Offices</a>
                            </h4>
                            <div class="main-img wa-fix wa-img-cover">
                                <img src="{{url('frontend/assets/img/services/s4-img-2.png')}}" alt="">
                            </div>
                            <p class="bs-p-4 disc wa-line-limit has-line-3">
                                Fully insulated, ready-to-use rooms for work or leisure.
                            </p>
                        </div>
                        <div class="default-content">
                            <div class="img-2 wa-fix wa-img-cover">
                                <img src="{{url('frontend/assets/img/services/s4-img-2.png')}}" alt="">
                            </div>
                            <h4 class="bs-h-1 title-2 wa-line-limit has-line-1">
                                Garden Pods & Offices
                            </h4>
                        </div>
                    </div>

                    <!-- single-item -->
                    <div class="bs-services-4-item-single wa-bg-default " data-background="{{url('frontend/assets/img/services/s4-card-bg.png')}}">
                        <div class="active-content">
                            <h4 class="bs-h-1 title">
                                <a href="#" aria-label="name" class="wa-line-limit has-line-2">Modular Home Extensions</a>
                            </h4>
                            <div class="main-img wa-fix wa-img-cover">
                                <img src="{{url('frontend/assets/img/services/s4-img-3.png')}}" alt="">
                            </div>
                            <p class="bs-p-4 disc wa-line-limit has-line-3">
                                Front, side and rear extensions installed quickly and seamlessly.
                            </p>
                        </div>
                        <div class="default-content">
                            <div class="img-2 wa-fix wa-img-cover">
                                <img src="{{url('frontend/assets/img/services/s4-img-3.png')}}" alt="">
                            </div>
                            <h4 class="bs-h-1 title-2 wa-line-limit has-line-1">
                                Modular Home Extensions
                            </h4>
                        </div>
                    </div>

                    <!-- single-item -->
                    <div class="bs-services-4-item-single wa-bg-default " data-background="{{url('frontend/assets/img/services/s4-card-bg.png')}}">
                        <div class="active-content">
                            <h4 class="bs-h-1 title">
                                <a href="#" aria-label="name" class="wa-line-limit has-line-2">Granny Annexes</a>
                            </h4>
                            <div class="main-img wa-fix wa-img-cover">
                                <img src="{{url('frontend/assets/img/services/s4-img-4.png')}}" alt="">
                            </div>
                            <p class="bs-p-4 disc wa-line-limit has-line-3">
                                Self-contained units designed for independent and comfortable living.
                            </p>
                        </div>
                        <div class="default-content">
                            <div class="img-2 wa-fix wa-img-cover">
                                <img src="{{url('frontend/assets/img/services/s4-img-4.png')}}" alt="">
                            </div>
                            <h4 class="bs-h-1 title-2 wa-line-limit has-line-1">
                                Granny Annexes
                            </h4>
                        </div>
                    </div>

                    <!-- single-item -->
                    <div class="bs-services-4-item-single wa-bg-default " data-background="{{url('frontend/assets/img/services/s4-card-bg.png')}}">
                        <div class="active-content">
                            <h4 class="bs-h-1 title">
                                <a href="#" aria-label="name" class="wa-line-limit has-line-2">Steel-Frame Structures</a>
                            </h4>
                            <div class="main-img wa-fix wa-img-cover">
                                <img src="{{url('frontend/assets/img/services/s4-img-5.png')}}" alt="">
                            </div>
                            <p class="bs-p-4 disc wa-line-limit has-line-3">
                                Strong, energy-efficient structures ideal for larger modular builds.
                            </p>
                        </div>
                        <div class="default-content">
                            <div class="img-2 wa-fix wa-img-cover">
                                <img src="{{url('frontend/assets/img/services/s4-img-5.png')}}" alt="">
                            </div>
                            <h4 class="bs-h-1 title-2 wa-line-limit has-line-1">
                                Steel-Frame Structures
                            </h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- services-end -->

    <!-- choose-start -->
    <section class="bs-choose-4-area wa-bg-default wa-fix pb-120" data-background="{{url('frontend/assets/img/choose/ch4-bg-img-1.png')}}">
        <div class="container bs-container-2">
            <div class="bs-choose-4-wrap">

                <div class="bs-choose-4-content-height">
                    <!-- left-content -->
                    <div class="bs-choose-4-content-pin">
                        <div class="bs-choose-4-content">

                            <h5 class="bs-subtitle-4 bs-choose-4-subtitle">
                                <span class="text">Why choose us</span>
                                <span class="icon">
                                    <img src="{{url('frontend/assets/img/illus/subtitle-4-icon-2.svg')}}" alt="">
                                </span>
                            </h5>

                            <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Trusted Experts in Modular Extensions, Pods & Annexes.</h2>

                            <p class="bs-p-4 disc wa-fadeInUp">
                                Homeowners choose ANX for clean, reliable and efficient builds.
                                Our modular systems ensure predictable timelines, controlled costs and consistent quality.
                            </p>

                            <h5 class="bs-subtitle-4 bs-choose-4-subtitle mb-3">
                                <span class="text">
                                    Key Strengths
                                </span>
                            </h5>
                            <div class="bs-choose-4-progress d-flex flex-column gap-2">
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >Faster completion compared to traditional building</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >High-performance insulation and durable steel framing</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span >Expert support with planning and compliance</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    



                <!-- right-play-btn -->
                <div class="bs-choose-4-right d-flex justify-content-center align-items-center">

                    <a href="javascript:void(0)" aria-label="name" class="bs-play-btn-4 wa-magnetic popup-video">
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
                        <h4 class="bs-h-4 title">
                            <a href="project-details.html" aria-label="name">Visionary Modular Design</a>
                        </h4>
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
                        <h4 class="bs-h-4 title">
                            <a href="project-details.html" aria-label="name">Uncompromising Quality</a>
                        </h4>
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
                        <h4 class="bs-h-4 title">
                            <a href="project-details.html" aria-label="name">Seamless Functionality</a>
                        </h4>
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
                        <h4 class="bs-h-4 title">
                            <a href="project-details.html" aria-label="name">Time-Tested Reliability</a>
                        </h4>
                        <p class="bs-p-4 disc">
                            Modular systems with consistent long-term performance.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- choose-end -->

    <!-- project-start -->
    <!-- <section class="bs-project-4-area pt-125 wa-fix">
        <div class="container bs-container-2">
            <h5 class="bs-subtitle-4 bs-project-4-subtitle">
                <span class="text">projects</span>
                <span class="icon">
                    <img src="{{ url('frontend/') }}assets/img/illus/subtitle-4-icon.svg" alt="">
                </span>
            </h5>

            <div class="bs-project-4-height">

                <div class="bs-project-4-content wa-fix ">
                    <h3 class="bs-h-4 big-title title " >recent</h3>
                    <h3 class="bs-h-4 title title-2">
                        <span class="left-text">wo</span>
                        <span class="right-text">rks</span>
                    </h3>
                </div>

                <div class="bs-project-4-card-pin">
                    <div class="bs-project-4-card ">

                        <div class="bs-project-4-card-single has-card-1">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="project-details.html" aria-label="name" data-cursor-text="View">
                                    <img src="assets/img/projects/p4-img-1.png" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="project-details.html" aria-label="name">Luxury villas: A fusion of elegance and function.</a>
                                </h5>
                                <ul class="card-details wa-list-style-none">
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Architecture design
                                    </li>
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Building , Wireframes, Visual design
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bs-project-4-card-single has-card-2">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="project-details.html" aria-label="name" data-cursor-text="View">
                                    <img src="assets/img/projects/p4-img-2.png" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="project-details.html" aria-label="name">Luxury villas: A fusion of elegance and function.</a>
                                </h5>
                                <ul class="card-details wa-list-style-none">
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Architecture design
                                    </li>
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Building , Wireframes, Visual design
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bs-project-4-card-single has-card-3">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="project-details.html" aria-label="name" data-cursor-text="View">
                                    <img src="assets/img/projects/p4-img-3.png" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="project-details.html" aria-label="name">Luxury villas: A fusion of elegance and function.</a>
                                </h5>
                                <ul class="card-details wa-list-style-none">
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Architecture design
                                    </li>
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Building , Wireframes, Visual design
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="bs-project-4-card-single has-card-4">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="project-details.html" aria-label="name" data-cursor-text="View">
                                    <img src="assets/img/projects/p4-img-4.png" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="project-details.html" aria-label="name">Luxury villas: A fusion of elegance and function.</a>
                                </h5>
                                <ul class="card-details wa-list-style-none">
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Architecture design
                                    </li>
                                    <li class="bs-p-4">
                                        <span>role:</span>
                                        Building , Wireframes, Visual design
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section> -->
    <!-- project-end -->

    <!-- testimonial-start -->
    <!-- testimonial-end -->

    <!-- blog-start -->
    <section class="bs-blog-4-area pb-125 pt-95">
        <div class="container bs-container-2">
            <div class="bs-blog-4-content">
                <h5 class="bs-subtitle-4 ">
                    <span class="text">blog & news</span>
                    <span class="icon">
                        <img src="{{ url('frontend/assets/img/illus/subtitle-4-icon.svg') }}" alt="">
                    </span>
                </h5>
                <div class="inner-div">
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">Take a Look at Our Latest blogs & Articles.</h2>

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
                                        <img src="{{ url('storage/' . $blog->home_card_img) }}" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="{{ route('blogDeails', $blog->slug) }}" aria-label="name" class="item-btn">
                                        <i class="flaticon-top-right flaticon"></i>
                                    </a>
                                    <p class="bs-p-4 author">{{ ucwords($blog->sub_title) }}</p>
                                    <h4 class="title bs-h-1 text-ellipsis-2">
                                        <a href="{{ route('blogDeails', $blog->slug) }}" aria-label="name">{{ ucwords($blog->title) }}</a>
                                    </h4>
                                    <p class="item-meta bs-p-4">
                                        <span class="categories" >architecture</span>
                                        <span class="date" >jan 20, 2024</span>
                                        <span class="read" >10 min read</span>
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
    
    <!-- brand-start -->
    <div class="bs-brand-4-area wa-fix mb-130">
        <div class="bs-brand-4-marquee-active">
            <div class="bs-brand-4-wrap wa-fix">
                <div class="bs-brand-4-item">
                    <img src="{{url('frontend/assets/img/brand/b4-logo-1.svg')}}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{url('frontend/assets/img/brand/b4-logo-2.svg')}}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{url('frontend/assets/img/brand/b4-logo-3.svg')}}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{url('frontend/assets/img/brand/b4-logo-4.svg')}}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{url('frontend/assets/img/brand/b4-logo-5.svg')}}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{url('frontend/assets/img/brand/b4-logo-6.svg')}}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{url('frontend/assets/img/brand/b4-logo-7.svg')}}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{url('frontend/assets/img/brand/b4-logo-8.svg')}}" alt="">
                </div>
                <div class="bs-brand-4-item">
                    <img src="{{url('frontend/assets/img/brand/b4-logo-9.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- brand-end -->

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
                    slidesPerView: 5
                },
                1200: {
                    slidesPerView: 3
                }
            }
        });
    </script>
@endsection