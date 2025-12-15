@extends('frontend/layouts/master')

@section('metas')
@endsection

@section('title')
ANX Builds || Prices
@endsection

@section('css')
@endsection

@section('content')

    <!-- breadcrumb-start -->
    <section class="breadcrumb-area wa-p-relative" >
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-img.png') }}" alt="">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >Pricing Plan</h1>
                <div class="breadcrumb-list " >
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                    </svg>
                        
                    <a href="{{ route('index') }}">Home</a>
                    <span>Pricing Plan</span>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- price-start -->
    <section class="bs-price-5-area wa-fix pt-135 pb-140 wa-bg-default" data-background="{{ url('frontend/assets/img/price/p5-shape.png') }}">
        <div class="container bs-container-2">

            <!-- section-title -->
            <div class="bs-price-5-sec-title text-center mb-50">
                <h6 class="bs-subtitle-5 wa-capitalize">
                    <span>03</span>
                    <span class="wa-split-right ">pricing plan</span>
                </h6>
                <h2 class="bs-sec-title-4 wa-split-right wa-capitalize" data-cursor="-opaque">Affordable architecture solutions, tailored pricing plan.</h2>
            </div>

            <div class="bs-price-5-wrap">

                <div class="bs-price-5-left">

                    <!-- tabs-btn -->
                    <ul class="bs-price-5-tabs-btn wa-list-style-none " role="tablist">

                        <!-- single-btn -->
                        <li class="nav-item wa-fadeInUp" role="presentation" data-cursor-text="click">
                            <button class="nav-link active bs-price-5-tabs-btn-single" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <span class="check-btn"></span>
                                <span class="content">
                                    <span class="bs-h-4 title">basic plan</span>
                                    <span class="bs-p-4 disc">Our basic architectural plan focuses on creating functional.</span>
                                </span>
                                <span class="btn-img">
                                    <img src="{{ url('frontend/assets/img/price/p5-img-1.png') }}" alt="">
                                </span>
                            </button>
                        </li>

                        <!-- single-btn -->
                        <li class="nav-item wa-fadeInUp" role="presentation" data-cursor-text="click">
                            <button class="nav-link bs-price-5-tabs-btn-single" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <span class="check-btn"></span>
                                <span class="content">
                                    <span class="bs-h-4 title">Standard Plan</span>
                                    <span class="bs-p-4 disc">Our standard architecture plan offers a streamlined.</span>
                                </span>
                                <span class="btn-img">
                                    <img src="{{ url('frontend/assets/img/price/p5-img-2.png') }}" alt="">
                                </span>
                            </button>
                        </li>

                        <!-- single-btn -->
                        <li class="nav-item wa-fadeInUp" role="presentation" data-cursor-text="click">
                            <button class="nav-link bs-price-5-tabs-btn-single" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                <span class="check-btn"></span>
                                <span class="content">
                                    <span class="bs-h-4 title">Enterprise Plan</span>
                                    <span class="bs-p-4 disc">Our architectural enterprise plan focuses on delivering.</span>
                                </span>
                                <span class="btn-img">
                                    <img src="{{ url('frontend/assets/img/price/p5-img-3.png') }}" alt="">
                                </span>
                            </button>
                        </li>
                    </ul>

                    <p class="bs-p-4 bs-price-5-left-disc wa-fadeInUp">Our architecture pricing plan offers flexible, transparent options tailored to the scope and complexity of your project, ensuring value without compromising on quality.</p>
                </div>



                <div class="tab-content bs-price-5-tabs-pane wa-fadeInUp" >

                    <!-- single-pane -->
                    <div class="tab-pane  fadeInUp animated fade show active bs-price-5-tabs-pane-single" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="box-border">
                            <h5 class="bs-h-4 title">standard plan</h5>
                            <h6 class="bs-h-4 item-price ">
                                <span class="dollar" >$</span>
                                <span class="price" >120</span>
                                <span class="time">/ per hours</span>
                            </h6>

                            <div class="line"></div>

                            <ul class="wa-list-style-none feature-list" >
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    price transparency
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    24/7 consulting services
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    save design by more than 20%
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    unlimited design changes
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    statutory advertisement
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    comprehensive package
                                </li>
                            </ul>

                            <a href="#" aria-label="name" class="bs-pr-btn-3 price-btn">
                                <span class="text">Get Started</span>
                                <span class="text">Get Started</span>
                            </a>
                        </div>
                    </div>

                    <!-- single-pane -->
                    <div class="tab-pane  fadeInUp animated fade bs-price-5-tabs-pane-single" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="box-border">
                            <h5 class="bs-h-4 title">Standard Plan</h5>
                            <h6 class="bs-h-4 item-price ">
                                <span class="dollar" >$</span>
                                <span class="price" >450</span>
                                <span class="time">/ per hours</span>
                            </h6>

                            <div class="line"></div>

                            <ul class="wa-list-style-none feature-list" >
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    price transparency
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    24/7 consulting services
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    save design by more than 20%
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    unlimited design changes
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    statutory advertisement
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    comprehensive package
                                </li>
                            </ul>

                            <a href="#" aria-label="name" class="bs-pr-btn-3 price-btn">
                                <span class="text">Get Started</span>
                                <span class="text">Get Started</span>
                            </a>
                        </div>
                    </div>

                    <!-- single-pane -->
                    <div class="tab-pane  fadeInUp animated fade bs-price-5-tabs-pane-single" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="box-border">
                            <h5 class="bs-h-4 title">Enterprise Plan</h5>
                            <h6 class="bs-h-4 item-price ">
                                <span class="dollar" >$</span>
                                <span class="price" >990</span>
                                <span class="time">/ per hours</span>
                            </h6>

                            <div class="line"></div>

                            <ul class="wa-list-style-none feature-list" >
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    price transparency
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    24/7 consulting services
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    save design by more than 20%
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    unlimited design changes
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    statutory advertisement
                                </li>
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-circle-check"></i>
                                    comprehensive package
                                </li>
                            </ul>

                            <a href="#" aria-label="name" class="bs-pr-btn-3 price-btn">
                                <span class="text">Get Started</span>
                                <span class="text">Get Started</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- price-end -->

    <!-- contact-start -->
    @include('frontend.inc.conabout-banner')
    <!-- contact-end -->
    
    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->

@endsection

@section('js')
@endsection