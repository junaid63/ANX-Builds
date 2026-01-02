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

    <!-- about-start -->
    <section class="bs-about-1-area pt-125 pb-100">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-about-1-sec-title mb-30">
                <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize">
                    <span class="icon">
                        <img src="{{url('frontend/assets/img/illus/star-shape.png')}}" alt="">
                    </span>
                    About Us
                </h6>
                <h2 class="bs-sec-title-1  wa-split-right wa-capitalize" data-cursor="-opaque">
                    Premium quality granny annexes, engineered to last.
                </h2>
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
                    The Granny Annexe Company designs, builds and installs high-quality garden annexes across the UK, created to help families support older loved ones with comfort, privacy and independence close to home. Founded by director Matt Biddle after years building annexes nationwide, our company was built around one simple principle: an annexe should feel like a proper home, not a temporary structure. 
                </p>
                <p class="bs-p-1 disc wa-split-y wa-capitalize">
                    We specialise in steel-frame granny annexes for long-term strength, stability and year-round comfort. Our homes are engineered to go beyond the typical “cabin-style” approach, using high-performance insulation, soundproofing and triple glazing as standard, with specifications designed to outperform many modern new-build benchmarks and exceed the UK’s residential park home standard (BS 3632). 
                </p>
                <p class="bs-p-1 disc wa-split-y wa-capitalize">
                    From first ideas to move-in day, we provide a complete turnkey garden annexe build service—including drawings and technical design, groundworks and connections, electrics, plumbing, heating, kitchen and bathroom installation, certification and handover. We also guide the planning route (often via the Caravan Act) and can manage your Lawful Development Certificate, with every build protected by a 10-year structural warranty and a clear aftercare pack. 
                </p>
            </div>

        </div>
    </section>
    <!-- about-end -->

    <!-- counter-start -->
    {{-- <section class="bs-core-feature-5-area mb-160">
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
                </div>

            </div>
            <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        </div>
    </section> --}}
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
                The Granny Annexe Company
            </div>
        </div>
    </section>
    <!-- video-end -->

    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->


@endsection

@section('js')
@endsection