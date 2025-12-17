@extends('frontend/layouts/master')

@section('metas')
@endsection

@section('title')
ANX Builds || Our Process
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
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >Our Process</h1>
                <div class="breadcrumb-list " >
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                    </svg>
                        
                    <a href="{{ route('index') }}">Home</a>
                    <span>Our Process</span>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- core-features-start -->
    @include('frontend.inc.construction')
    <!-- core-features-end -->

    <!-- work-process-start -->
    <section class="bs-work-process-area pt-140">
        <div class="container bs-container-1">

            <!-- section-title -->
            <div class="bs-work-process-sec-title mb-50">
                <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize">
                    <span class="icon">
                        <img src="{{ url('frontend/assets/img/illus/star-shape.png') }}" alt="">
                    </span>
                    Work Process
                </h6>
                <h2 class="bs-sec-title-1  wa-split-right wa-capitalize" data-cursor="-opaque">Streamlined architecture process for exceptional results.</h2>
            </div>

            <div class="bs-work-process-img wa-fix wa-img-cover pb-140">
                <img src="{{ url('frontend/assets/img/work/w6-big-img.png') }}" alt="">
            </div>

            <div class="bs-work-process-item">
                
                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover">
                        <img src="{{ url('frontend/assets/img/work/w6-img-1.png') }}" alt="">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">01</h4>
                        <h5 class="bs-h-4 title">Initial Consultation</h5>
                        <p class="bs-p-4 disc">Our architecture initial consultation is a collaborative session where we discuss your project goals, preferences, and vision. We listen to your ideas and offer expert guidance to shape.</p>
                    </div>
                </div>
                
                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover">
                        <img src="{{ url('frontend/assets/img/work/w6-img-2.png') }}" alt="">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">02</h4>
                        <h5 class="bs-h-4 title">Design & Planning</h5>
                        <p class="bs-p-4 disc">Architecture design and planning is the process of creating innovative, functional, and aesthetically pleasing structures that meet the needs of the occupants. It involves careful.</p>
                    </div>
                </div>
                
                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover">
                        <img src="{{ url('frontend/assets/img/work/w6-img-3.png') }}" alt="">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">02</h4>
                        <h5 class="bs-h-4 title">Implementation</h5>
                        <p class="bs-p-4 disc">Architecture implementation involves bringing design concepts to life through construction, ensuring that every detail aligns with the vision and functionality. It requires effective project.</p>
                    </div>
                </div>
                
                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover">
                        <img src="{{ url('frontend/assets/img/work/w6-img-4.png') }}" alt="">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">04</h4>
                        <h5 class="bs-h-4 title">Project Handover</h5>
                        <p class="bs-p-4 disc">The architecture project handover marks the completion of design and construction, with all deliverables handed over to the client. This includes final plans, documentation.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- work-process-end -->

    <!-- contact-start -->
    @include('frontend.inc.conabout-banner')
    <!-- contact-end -->
    
    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->

@endsection

@section('js')
@endsection