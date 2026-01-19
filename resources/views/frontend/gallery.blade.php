@extends('frontend/layouts/master')

@section('metas')
@endsection

@section('title')
ANX Builds || Gallery
@endsection

@section('css')

@endsection

@section('content')

    <!-- breadcrumb-start -->
    <section class="breadcrumb-area wa-p-relative" >
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-gallery.png') }}" alt="">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >Our Gallery</h1>

                <div class="breadcrumb-list " >
                    <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                    </svg>
                        
                    <a href="{{ route('index') }}">Home</a>
                    <span>Gallery</span>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- project-start -->
    {{-- <section class="bs-project-4-area pt-125 wa-fix">
        <div class="container bs-container-2">

            <div class="bs-project-4-height">

                <div class="bs-project-4-content wa-fix ">
                    <h3 class="bs-h-4 big-title title " >Our</h3>
                    <h3 class="bs-h-4 title title-2">
                        <span class="left-text">Gall</span>
                        <span class="right-text">ery</span>
                    </h3>
                </div>

                <div class="bs-project-4-card-pin">
                    <div class="bs-project-4-card ">

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-1">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img src="{{ url('frontend/assets/img/gallery/01.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">Internal Images</a>
                                </h5>
                            </div>
                        </div>

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-2">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img src="{{ url('frontend/assets/img/gallery/02.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">External Images</a>
                                </h5>
                            </div>
                        </div>

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-3">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img src="{{ url('frontend/assets/img/gallery/03.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">Steel Frame</a>
                                </h5>
                            </div>
                        </div>

                        <!-- single-card -->
                        <div class="bs-project-4-card-single has-card-4">
                            <div class="card-img wa-fix wa-img-cover">
                                <a href="#" aria-label="name" data-cursor-text="View">
                                    <img src="{{ url('frontend/assets/img/gallery/04.png') }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="bs-h-4 title">
                                    <a href="#" aria-label="name">Builds In Progress</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section> --}}
    <section class="gallery-main-section">
        <div class="masonry-container">
            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/01.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/03.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/02.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/04.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/14.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/07.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/08.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/09.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/10.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/11.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/12.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/13.png') }}" alt="">
            </div>

            <div class="gallery-box">
                <img data-fancybox="gallery" src="{{ url('frontend/assets/img/gallery/06.png') }}" alt="">
            </div>

        </div>
    </section>
    <!-- project-end -->

    <!-- contact-start -->
    @include('frontend.inc.conabout-banner')
    <!-- contact-end -->
    
    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->

@endsection

@section('js')
    <script>
        Fancybox.bind("[data-fancybox]", {
        // Your custom options
        });
    </script>
@endsection