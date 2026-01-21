@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Garden Granny Annexe UK Experts | About ANX Builds">
    <meta name="description" content="Garden granny annexe UK specialists at ANX Builds. Learn about our team, values and quality led builds. Speak to us today for a free quote. Book a consultation.">
    <meta property="og:title" content="Garden Granny Annexe UK Experts | About ANX Builds">
    <meta property="og:description" content="Garden granny annexe UK specialists at ANX Builds. Learn about our team, values and quality led builds. Speak to us today for a free quote. Book a consultation.">
    <meta name="twitter:title" content="Garden Granny Annexe UK Experts | About ANX Builds">
    <meta name="twitter:description" content="Garden granny annexe UK specialists at ANX Builds. Learn about our team, values and quality led builds. Speak to us today for a free quote. Book a consultation.">
@endsection

@section('title')
Garden Granny Annexe UK Experts | About ANX Builds
@endsection

@section('css')
@endsection

@section('content')

    <!-- breadcrumb-start -->
    <section class="breadcrumb-area wa-p-relative" >
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{url('frontend/assets/img/breadcrumb/breadcrumb-about.png')}}" alt="">
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
    <section class="bs-about-1-area py-lg-5 py-4 overflow-hidden">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-about-1-sec-title mb-30 mb-md-3">
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
            <div class="bs-about-1-slider mb-40 mb-md-3 wa-p-relative">
                <div class="swiper-container wa-fix bs-a1-active">
                    <div class="swiper-wrapper">

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-about-1-item wa-fix ">
                                <a href="{{url('frontend/assets/img/about/01.png')}}" class="popup-img wa-img-cover">
                                    <img src="{{url('frontend/assets/img/about/01.png')}}" alt="">
                                </a>
                                
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-about-1-item wa-fix ">
                                <a href="{{url('frontend/assets/img/about/02.png')}}" class="popup-img wa-img-cover">
                                    <img src="{{url('frontend/assets/img/about/02.png')}}" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-about-1-item wa-fix ">
                                <a href="{{url('frontend/assets/img/about/03.png')}}" class="popup-img wa-img-cover">
                                    <img src="{{url('frontend/assets/img/about/03.png')}}" alt="">
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
                <div class="matt-biddle">
                    <div class="mat-content">
                        <p class="bs-p-1 disc  wa-capitalize mb-lg-3">
                            Instead of the lightweight structures common in the industry, Matt set out to create annexes that outperform modern new-build homes in strength, warmth, and energy efficiency. Homes built with the same attention to detail you’d expect in a premium bungalow solid, quiet, durable, and comfortable all year round. 
                        </p>
                        <p class="bs-p-1 disc  wa-capitalize mb-lg-2">
                            This commitment to quality can be seen in everything we do: 
                        </p>
                        <div class="mat-biddle-points d-md-none d-lg-block d-block">
                            <ul class="ms-lg-3 ms-md-2 ms-2">
                                <li>
                                    <b>Steel-frame</b> construction for unmatched strength and longevity
                                </li>
                                <li>
                                    <b>High insulation levels</b> to keep running costs low
                                </li>
                                <li>
                                    <b>Thoughtful layouts</b> designed for easy, safe daily living
                                </li>
                                <li>
                                    <b>
                                        Finishes that feel permanent, refined, and welcoming
                                    </b>
                                </li>
                            </ul>
                            <p class="bs-p-1 disc wa-capitalize mb-lg-3">
                                Families choose The Granny Annexe Company because they want more than an extra building in the garden. They want a home built with care. A company they can trust. 
                            </p>
                            <p class="bs-p-1 disc wa-capitalize mb-lg-2 mb-5">
                                Just as important is the experience. Matt believes creating an annexe should be enjoyable, not stressful. That’s why we handle everything from planning and design to construction and handover keeping you informed at every stage.
                            </p>
                        </div>
                    </div>
                    <div class="mat-img">
                        <img  src="{{ url('frontend/assets/img/mat-biddle/mat-biddle.jpg') }}" alt="Matt Biddle">
                    </div>
                </div>
                <div class="matt-biddle laptop-screen">
                    <div class="mat-content">
                        <div class="content">
                            <p class="bs-p-1 disc  wa-capitalize mb-lg-3">
                                Instead of the lightweight structures common in the industry, Matt set out to create annexes that outperform modern new-build homes in strength, warmth, and energy efficiency. Homes built with the same attention to detail you’d expect in a premium bungalow solid, quiet, durable, and comfortable all year round. 
                            </p>
                            <p class="bs-p-1 disc  wa-capitalize mb-lg-2">
                                This commitment to quality can be seen in everything we do: 
                            </p>
                            <div class="mat-biddle-points d-flex flex-column">
                                <ul class="ms-lg-3 ms-md-2 ms-2">
                                    <li>
                                        <b>Steel-frame</b> construction for unmatched strength and longevity
                                    </li>
                                    <li>
                                        <b>High insulation levels</b> to keep running costs low
                                    </li>
                                    <li>
                                        <b>Thoughtful layouts</b> designed for easy, safe daily living
                                    </li>
                                    <li>
                                        <b>
                                            Finishes that feel permanent, refined, and welcoming
                                        </b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mat-img">
                            <img  src="{{ url('frontend/assets/img/mat-biddle/mat-biddle.jpg') }}" alt="Matt Biddle">
                        </div>
                    </div>
                    <p class="bs-p-1 disc wa-capitalize mb-lg-3">
                        Families choose The Granny Annexe Company because they want more than an extra building in the garden. They want a home built with care. A company they can trust. 
                    </p>
                    <p class="bs-p-1 disc wa-capitalize mb-lg-2 mb-5">
                        Just as important is the experience. Matt believes creating an annexe should be enjoyable, not stressful. That’s why we handle everything from planning and design to construction and handover keeping you informed at every stage.
                    </p>
                </div>
                <div class="matt-biddle d-md-block d-lg-none d-none">
                    <div class="mat-content">
                        <div class="mat-biddle-points">
                            <ul class="ms-lg-3 ms-md-2 ms-2">
                                <li>
                                    <b>Steel-frame</b> construction for unmatched strength and longevity
                                </li>
                                <li>
                                    <b>High insulation levels</b> to keep running costs low
                                </li>
                                <li>
                                    <b>Thoughtful layouts</b> designed for easy, safe daily living
                                </li>
                                <li>
                                    <b>
                                        Finishes that feel permanent, refined, and welcoming
                                    </b>
                                </li>
                            </ul>
                            <p class="bs-p-1 disc wa-capitalize mb-lg-3">
                                Families choose The Granny Annexe Company because they want more than an extra building in the garden. They want a home built with care. A company they can trust. 
                            </p>
                            <p class="bs-p-1 disc wa-capitalize mb-lg-2 mb-5">
                                Just as important is the experience. Matt believes creating an annexe should be enjoyable, not stressful. That’s why we handle everything from planning and design to construction and handover keeping you informed at every stage.
                            </p>
                        </div>
                    </div>
                </div>
                <p class="bs-p-1 disc wa-split-y wa-capitalize">
                    We specialise in steel-frame granny annexes for long-term strength, stability and year-round comfort. Our Annexes are engineered to go beyond the typical “cabin-style” approach, using high-performance insulation, soundproofing and triple glazing as standard, with specifications designed to outperform many modern new-build house benchmarks and exceed the UK’s residential park home standard (BS 3632). 
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
    {{-- <section class="custom-choose bs-video-1-area wa-fix">
        <div class="bs-video-1-content wa-p-relative">
            <div class="bs-h-1 title wa-split-down" data-cursor="-opaque">
                The Granny Annexe Company
            </div>
        </div>
    </section> --}}
     <!-- video-start -->
    <section class="bs-video-4-area">
        <div class="bs-video-4-content wa-p-relative wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{url('frontend/assets/img/video/v4-img-1-updated.png')}}" alt="">

            <div class="bs-video-4-text">
                {{-- <div class="bs-video-4-marquee-active"> --}}
                    {{-- <h4 class="bs-h-1 bs-video-4-text-item wa-split-text">The Granny Annexe Company</h4> --}}
                    <div class="banner-logo">
                        {{-- <img src="{{ url('frontend/assets/img/logo/banner-logo.png') }}" alt="Company Logo"> --}}
                        <img src="{{ url('storage') }}/{{ setting('site.logo') }}" alt="Company Logo">
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </section>
    <!-- video-end -->

    <!-- choose-start -->
    <section id="why-choose-us" class="bs-choose-4-area wa-bg-default wa-fix pb-lg-5 pb-3 ">
        {{-- <div class="container bs-container-2"> --}}
        <div class="container-fuild mx-lg-5 mx-md-4 mx-3">
            <div class="d-flex flex-lg-row flex-column justify-content-between align-items-center gap-lg-3">
                <div class="bs-choose-4-wrap custom-para-points">
    
                    <div class="bs-choose-4-content-height">
                        <!-- left-content -->
                        <div class="bs-choose-4-content-pin">
                            <div class="bs-choose-4-content py-lg-5 py-md-3 py-5">
    
                                <h5 class="bs-subtitle-4 bs-choose-4-subtitle">
                                    <span class="text">WHY CHOOSE US</span>
                                    <span class="icon">
                                        <img src="{{url('frontend/assets/img/illus/subtitle-4-icon-2.svg')}}" alt="">
                                    </span>
                                </h5>
    
                                <h2 class="bs-sec-title-1 title wa-split-right wa-capitalize" data-cursor="-opaque">
                                    Why choose the Granny Annexe Company For Your Project 
                                </h2>
    
                                <p class="bs-p-4 disc wa-fadeInUp mb-lg-3 mb-md-2 mb-2">
                                    When comparing annexes, the differences in build quality can be significant. Many look similar from the outside, but the materials, insulation, and construction methods used can dramatically affect comfort, running costs, and how long your annexe will last. 
                                </p>
                                <p class="bs-p-4 disc wa-fadeInUp">
                                    At The Granny Annexe Company, we believe a garden annexe should be built to the same standard as a high-quality home. That’s why we go far beyond the basic requirements used by many other Companies. 
                                </p>
    
                                <span class="custom-choose-span bs-h-4 item-title title mb-lg-3 mb-md-2 mb-2">
                                    Built To Exceed New-Build House Insulation Standards
                                </span>
                                <p class="bs-p-4 disc wa-fadeInUp mb-lg-5 mb-0">
                                    In the UK, new-build houses must meet strict Building Regulations for thermal performance (known as U-values). These set maximum limits for how much heat can escape through walls, floors, roofs, windows, and doors. 
                                </p>
                            </div>
                        </div>
                    </div>
                   
                </div>
    
                <div class="bs-choose-4-feature custom-title-para">
                   
                    <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <h5 class="custom-choose-second-span bs-choose-4-subtitle mb-3">
                                Typical Building Regulation requirements:
                            </h5>
                            <div class="bs-choose-4-progress ms-lg-3 ms-md-3 ms-0">
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span ><strong>Walls:</strong> around 0.26 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span ><strong>Roofs:</strong> around 0.16 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span ><strong>Floors:</strong> around 0.18 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span>
                                            <strong>Windows:</strong> around 1.4 W/m2K
                                        </span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <h5 class="custom-choose-second-span bs-choose-4-subtitle mb-3">
                                Our annexes are engineered to outperform these figures:
                            </h5>
                            <div class="bs-choose-4-progress ms-lg-3 ms-md-3 ms-0">
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span><strong>Walls:</strong> approx. 0.23 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span ><strong>Roofs:</strong> approx. 0.14 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span ><strong>Floors:</strong> approx. 0.15 W/m2K</span>
                                    </h5>
                                </div>
                                <div class="bs-choose-4-progress-item pb-0 d-flex align-items-start align-items-lg-start gap-lg-3 gap-2">
                                    <i class="fa-solid fa-check"></i>
                                    <h5 class="bs-p-1 progress-title mb-0">
                                        <span>
                                            <strong>Triple-glazed windows:</strong> approx. 0.9–1.0 W/m2K
                                        </span>
                                    </h5>
                                </div>
                            </div>
                            <p class="bs-p-4 disc wa-fadeInUp text-start border-top pt-lg-4 pt-md-3 pt-2">
                                This means our homes keep heat in more effectively than most newly built houses resulting in a warmer, quieter, more efficient annexe.
                            </p>
                        </div>
                    </div>  
    
                    {{-- <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <div class="icon">
                                <i class="flaticon-minimalist flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 title">
                                <a href="#" aria-label="name">Acoustic Rockwool</a>
                            </h4>
                            <p class="bs-p-4 disc">
                                Acoustic Rockwool in all walls and floors for exceptional soundproofing and a calm, quiet interior.
                            </p>
                        </div>
                    </div>
                    <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <div class="icon">
                                <i class="flaticon-blueprint flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 title">
                                <a href="#" aria-label="name">High-performance PIR</a>
                            </h4>
                            <p class="bs-p-4 disc">
                                High-performance PIR insulation for excellent thermal efficiency.
                            </p>
                        </div>
                    </div>
                    <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <div class="icon">
                                <i class="flaticon-property-insurance flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 title">
                                <a href="#" aria-label="name">Triple-glazed UPVC windows & doors</a>
                            </h4>
                            <p class="bs-p-4 disc">
                                Triple-glazed UPVC windows & doors as standard - something rarely offered as standard even in many new-build house houses. 
                            </p>
                        </div>
                    </div>
                    <div class="item-margin">
                        <div class="bs-choose-4-feature-single">
                            <div class="icon">
                                <i class="flaticon-goodwill-1 flaticon"></i>
                            </div>
                            <h4 class="bs-h-4 title">
                                <a href="#" aria-label="name">LONG-TERM COMFORT, NOT SHORT-TERM SAVINGS</a>
                            </h4>
                            <p class="bs-p-4 disc">
                                Some annexes on the market are built using lightweight materials, limited insulation, or single/double glazing. These may look appealing at first but can feel colder in winter, hotter in summer, and less solid over time.
                            </p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- choose-end -->

    <!-- work-start -->
    <section class="bs-work-5-area why-choose-second wa-bg-default py-lg-5 py-5 overflow-hidden" data-background="{{ url('frontend/assets/img/work/w5-bg-img.png') }}">
        <div class="container bs-container-2">

            <!-- section-title -->
            <div class="bs-work-5-sec-title mb-lg-5 mb-5">
                <h2 class="bs-sec-title-4 wa-split-right wa-capitalize mb-3" data-cursor="-opaque">Premium Insulation In Every Annexe</h2>
                <p class="bs-p-4 disc wa-fadeInUp">
                    We combine multiple layers of high-performance insulation to create year-round comfort: 
                </p>
            </div>
            
            <!-- cards -->
            <div class="bs-work-5-wrap">
    
                <!-- single-card -->
                <div class="bs-work-5-card has-ani-up active">
                    <div class="bg-img wa-img-cover wa-fix">
                    </div>
                    <h4 class="bs-h-1 title">Acoustic Rockwool</h4>
                    <p class="bs-p-4 disc custom-para"> Acoustic Rockwool in all walls and Roof for exceptional soundproofing and a calm, quiet interior.</p>
                    <h5 class="bs-h-1 number">01</h5>
                </div>
    
                <!-- single-card -->
                <div class="bs-work-5-card has-ani-down">
                    <div class="bg-img wa-img-cover wa-fix">
                    </div>
                    <h4 class="bs-h-1 title">High-performance PIR</h4>
                    <p class="bs-p-4 disc custom-para">High-performance PIR insulation for excellent thermal efficiency.</p>
                    <h5 class="bs-h-1 number">02</h5>
                </div>
    
                <!-- single-card -->
                <div class="bs-work-5-card has-ani-up">
                    <div class="bg-img wa-img-cover wa-fix">
                    </div>
                    <h4 class="bs-h-1 title">Triple-glazed UPVC windows & doors</h4>
                    <p class="bs-p-4 disc custom-para">Triple-glazed UPVC windows & doors as standard - something rarely offered as standard even in many new-build house. </p>
                    <h5 class="bs-h-1 number">03</h5>
                </div>
    
                <!-- single-card -->
                <div class="bs-work-5-card has-ani-down">
                    <div class="bg-img wa-img-cover wa-fix">
                    </div>
                    <h4 class="bs-h-1 title">Long-Term Comfort, Not Short-Term Savings </h4>
                    <p class="bs-p-4 disc custom-para">Some annexes on the market are built using lightweight materials, limited insulation, or single/double glazing. These may look appealing at first but can feel colder in winter, hotter in summer, and less solid over time.</p>
                    <h5 class="bs-h-1 number">04</h5>
                </div>
            </div>

        </div>
    </section>
    <!-- work-end -->

    <!-- services-start -->
    <section class="bs-services-3-area bg-black py-lg-5 py-5" data-background="{{ url('frontend/assets/img/services/s4-bg.png') }}">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-services-3-sec-title mb-40 text-lg-start text-start">
                <h2 class="bs-sec-title-3  wa-split-right wa-capitalize mb-lg-4 mb-md-2 mb-2" data-cursor="-opaque">What’s Included As Standard?</h2>
                <p class="bs-p-4 disc wa-fadeInUp text-white">
                    Every annexe we build is fully finished and ready to furnish, with all the essential features included as standard - no hidden extras and no unexpected costs. We take pride in delivering a home that feels complete, comfortable, and welcoming from the moment you step inside.
                </p>
            </div>

            <!-- card -->
            <div class="bs-services-3-wrap  mb-70">

                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="flaticon-worker flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Groundworks & foundations*
                    </h5>
                    <p class="bs-p-1 card-disc">All builds include ground screw foundations as standard, plus trenching and associated works for service runs.</p>
                    <h5 class="bs-h-1 card-number">1</h5>
                </div>

                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="flaticon-construction flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Supply & waste connections*
                    </h5>
                    <p class="bs-p-1 card-disc">
                        We include all required service connections (water, electricity and waste) to your annexe for runs up to 25 metres as standard.
                    </p>
                    <h5 class="bs-h-1 card-number">2</h5>
                </div>

                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="flaticon-architect flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        High-quality flooring throughout
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Durable, easy-to-clean flooring, available in a choice of modern finishes.
                    </p>
                    <h5 class="bs-h-1 card-number">3</h5>
                </div>

                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="flaticon-maintenance flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Skirting boards and oak-effect doors
                    </h5>
                    <p class="bs-p-1 card-disc">
                        A polished, homely finish that feels like a high-quality bungalow.
                    </p>
                    <h5 class="bs-h-1 card-number">4</h5>
                </div>

                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="flaticon-blueprint flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Internal lighting
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Ceiling rose lights installed in every room.
                    </p>
                    <h5 class="bs-h-1 card-number">5</h5>
                </div>

                <!-- single-card -->
                <div class="bs-services-3-card ">
                    <div class="card-icon">
                        <i class="flaticon-electrical flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Fully decorated interior
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Professionally plastered walls, finished in white paint.
                    </p>
                    <h5 class="bs-h-1 card-number">6</h5>
                </div>

                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="flaticon-electrical flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Smart panel radiators
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Professionally plastered walls, finished in white paint.
                    </p>
                    <h5 class="bs-h-1 card-number">7</h5>
                </div>
                
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="flaticon-electrical flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Double plug sockets
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Conveniently positioned throughout your annexe.
                    </p>
                    <h5 class="bs-h-1 card-number">8</h5>
                </div>

                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="flaticon-electrical flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Fully fitted kitchen
                    </h5>
                    <p class="bs-p-1 card-disc">
                        A high-quality, fully customisable kitchen including a sink, fridge, oven and 8 units. Unlimited upgrades are also available.
                    </p>
                    <h5 class="bs-h-1 card-number">9</h5>
                </div>

                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="flaticon-electrical flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Fully fitted shower room
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Includes Aquapanel wall finish, electric shower, low-threshold shower tray, toilet, basin, extractor fan and electric towel heater.
                    </p>
                    <h5 class="bs-h-1 card-number">10</h5>
                </div>
                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="flaticon-electrical flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Instant hot water heater
                    </h5>
                    <p class="bs-p-1 card-disc">
                        Kitchen and bathroom sinks are supplied by a compact instant hot water heater for efficient, on-demand hot water.
                    </p>
                    <h5 class="bs-h-1 card-number">11</h5>
                </div>

                <!-- single-card -->
                <div class="bs-services-3-card why-choose-card-hide">
                    <div class="card-icon">
                        <i class="flaticon-electrical flaticon"></i>
                    </div>
                    <h5 class="bs-h-1 card-title">
                        Certificate of Lawfulness / planning application
                    </h5>
                    <p class="bs-p-1 card-disc">
                        We typically build under the Caravan Sites Act (often referred to as the Caravan Act). This framework can allow a fully equipped annexe to be classed as a “mobile structure,” which often makes the planning process much simpler and can significantly improve the likelihood of approval.
                    </p>
                    <h5 class="bs-h-1 card-number">12</h5>
                </div>

            </div>

            <!-- all-btn -->
            <div class="bs-services-3-all-btn text-center wa-fadeInUp">
                <button class="bs-btn-1 see-more text-capitalize">
                    <span class="text">
                        See More
                    </span>
                    <span class="icon">
                        <i class="fa-solid fa-right-long"></i>
                        <i class="fa-solid fa-right-long"></i>
                    </span>
                    <span class="shape"></span>
                </button>
            </div>


        </div>
    </section>
    <!-- services-end -->

    <!-- about-start -->
    <section class="bs-about-5-area why-choose-third wa-fix wa-p-relative py-lg-5 py-5">
        {{-- <div class="bs-about-5-bg-shape">
            <img src="{{ url('frontend/assets/img/about/a5-bg-shape.png') }}" alt="">
        </div>
        <div class="bs-about-5-bg-shape-2">
            <img src="{{ url('frontend/assets/img/about/a5-bg-shape-2.png') }}" alt="">
        </div> --}}

        <div class="container bs-container-2">

            <!-- section-title -->
            <div class="bs-work-5-sec-title mb-lg-4 mb-md-2 mb-2">
                <h2 class="bs-sec-title-4 wa-split-right wa-capitalize mb-lg-4 mb-md-2 mb-2" data-cursor="-opaque">
                    We Take Care Of Everything 
                </h2>
                <p class="bs-p-4 disc wa-fadeInUp">
                    Building a granny annexe should feel exciting, not overwhelming. That’s why we offer a complete, start-to-finish service, handling every stage of the project so you don’t have to worry about a thing. 
                </p>
            </div>

            <div class="bs-about-5-wrap">

                <!-- left-side -->
                <div class="bs-about-5-left">
                    <p class="bs-p-4 disc wa-fadeInUp">
                        From the moment you choose your design, we manage:
                    </p>

                    <!-- right-side -->
                    <div class="bs-about-5-right mb-lg-4 mb-md-3 mb-2">

                        <ul class="bs-about-5-feature wa-list-style-none">
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                All planning applications and approvals 
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                Full drawings and technical design 
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                Demolition of existing outbuildings, if required 
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                Groundworks, foundations, and service connections 
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                Construction of your annexe, fully finished inside and out 
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                Electrical, plumbing, heating, kitchen, and bathroom installation 
                            </li>
                            <li class="bs-p-4 wa-fadeInUp">
                                <i class="fa-solid fa-plus"></i>
                                Final checks, certification, and handover 
                            </li>
                        </ul>
                    </div>

                    <div class="bs-about-5-img-1 wa-fix wa-img-cover wa-fadeInUp" data-cursor="-opaque">
                        <img class="wa-parallax-img" src="{{ url('frontend/assets/img/gallery/01.png') }}" alt="">
                    </div>
                </div>

                <!-- right-side -->
                <div class="bs-about-5-right">
                    <div class="bs-about-5-img-2 wa-fix wa-img-cover wa-fadeInUp" data-cursor="-opaque">
                        <img class="wa-parallax-img" src="{{ url('frontend/assets/img/gallery/01.png') }}" alt="">
                    </div>

                    <p class="bs-p-4 disc wa-fadeInUp ms-lg-3 ms-md-2 ms-2">
                        When your annexe is complete, the only thing left for you to do is move in your furniture and start enjoying your new home. 
                        The only area we do not cover is garden landscaping. But everything relating to the annexe itself, from preparation to completion, is taken care of by our team. 
                        With The Granny Annexe Company, “full service” truly means everything is handled for you, smoothly and professionally, from day one to move-in day. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- about-end -->

    <!-- testimonial-start -->
    <section class="bs-testimonial-5-area bg-black why-choose-fourth wa-fix pb-lg-5 pt-lg-0 py-5" data-background="{{ url('frontend/assets/img/services/s4-bg.png') }}">
        <div class="container bs-container-2">
            <div class="bs-testimonial-5-wrap">

                <!-- left-content -->
                <div class="bs-testimonial-5-content pt-lg-5 pt-md-3 pt-0">

                    <!-- section-title -->
                    <div class="bs-testimonial-5-sec-title mb-lg-4 mb-md-3 mb-2">
                        <h2 class="bs-sec-title-4 text-white wa-split-right wa-capitalize" data-cursor="-opaque">
                            Why choose a steel frame annexe?
                        </h2>
                        <p class="bs-p-4 text-white disc wa-fadeInUp">
                            At The Granny Annexe Company, we build with steel because it delivers a stronger, smarter, and more future-proof annexe.
                            Steel has an outstanding strength-to-weight ratio, meaning it can support heavier loads and span spaces more confidently than many traditional materials. That strength translates into a solid structure you can rely on for the long term.
                        </p>
                        <p class="bs-p-4 text-white disc wa-fadeInUp">
                            Steel frame construction is also ideal for high-performance insulation. Our annexes can be insulated to the highest standards to help maintain a comfortable, consistent temperature all year round. The result is a warmer home in winter, cooler in summer, and lower energy costs over time — with a more sustainable build that can add long-term value to your property.
                        </p>
                    </div>
                   
                </div>

                <div class="bs-testimonial-5-img wa-fix wa-img-cover" data-cursor="-opaque">
                    <img class="wa-parallax-img" src="{{ url('frontend/assets/img/services/steel-frame.png') }}" alt="">
                </div>
                
            </div>
            <div class="container ps-0">
                <div class="d-flex flex-column mb-lg-5 mb-md-3 mb-0 mt-3 mt-lg-0">
                    <p class="bs-p-4 text-white disc wa-fadeInUp mb-lg-3 mb-md-3 mb-2">
                        Our modular steel frame system brings big practical benefits too. Much of the build is prepared in a controlled environment, which keeps the process cleaner and more efficient, reduces waste, and helps minimise disruption at your home. On-site assembly is faster and more streamlined, so you get your annexe sooner with less mess.
                    </p>
                    <p class="bs-p-4 disc text-white wa-fadeInUp">
                        Finally, steel is built for resilience. It’s highly durable and naturally resistant to issues that can affect other building types, including extreme weather, fire risk, and pests. Combined with excellent insulation, it also helps to reduce noise transfer, creating a quieter, more peaceful space to live in.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-end -->


    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->


@endsection

@section('js')
<script>
        $(document).ready(function() {
            $(".see-more").click(function() {
                var hiddenItems = $(".why-choose-card-hide");
                
                // Toggle display
                if (hiddenItems.css("display") === "none") {
                    hiddenItems.css("display", "flex"); // flex show
                    $(this).find(".text").text("Show Less");
                } else {
                    hiddenItems.css("display", "none"); // hide again
                    $(this).find(".text").text("See More");
                }
            });

            $('.team-item').first().trigger('mouseenter');
        });
    </script>
    <script>
        $(document).ready(function () {

            var $cards = $('.bs-work-5-card');

            // first card active by default
            $cards.first().addClass('active');

            // hover behavior
            $cards.on('mouseenter', function () {
                $cards.removeClass('active');      // first se active remove
                $(this).addClass('active');        // hovered active
            });

        });
    </script>

@endsection