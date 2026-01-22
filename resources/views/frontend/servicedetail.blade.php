@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="{{ ucwords($serviceDetails->meta_title) }}">
    <meta name="description" content="{{ $serviceDetails->meta_description }}">
    <meta property="og:title" content="{{ ucwords($serviceDetails->meta_title) }}">
    <meta property="og:description" content="{{ $serviceDetails->meta_description }}">
    <meta name="twitter:title" content="{{ ucwords($serviceDetails->meta_title) }}">
    <meta name="twitter:description" content="{{ $serviceDetails->meta_description }}">
@endsection

@section('title')
{{ ucwords($serviceDetails->meta_title) }}
@endsection

@section('css')
@endsection

@section('content')

    <!-- breadcrumb-start -->
    <section class="breadcrumb-area has-2 wa-p-relative overflow-hidden" >


        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                {{-- <a href="{{ route('service') }}" aria-label="name" class="breadcrumb-back-page-btn">
                    <i class="fa-solid fa-angle-left"></i>
                    Back to Services Page
                </a> --}}
                <h1 class="bs-sec-title-4 service-detail-title wa-split-right wa-capitalize" data-split-delay="1.1s" >{{ ucwords($serviceDetails->title) }}</h1>

                <div class="breadcrumb-bg-shape">
                    <img src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-shape.png') }}" alt="breadcrumb-shape">
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- service-details-start -->
    <section class="bs-services-details-area py-lg-4 py-md-3 py-2">

        <div class="container bs-container-1">
            <div class="bs-services-details-content">
                <div class="service-banner-img mb-lg-5 mb-md-3 mb-2">
                    <img src="{{ url('storage/' . $serviceDetails->service_banner) }}" alt="{{ ucwords($serviceDetails->title) }}">
                </div>

                <div class="bs-about-4-content">
                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">
                        <strong>Granny Annexes:</strong>
                    </h2>
                    <p class="desc">
                        Ultimately, not all annexes are built equally as some companies focus more on offering a low competitive price rather than having a high-quality product, this will often come to light over time.  Our bespoke annexes are engineered from steel frames that are much stronger and more durable than timber and not prone to issues such as rot or dampness. Therefore, we are confident that our annexes will still be standing decades down the line; hence our 10-year structural guarantee should give you complete peace of mind. 
                    </p>
                    <p class="desc">
                        Our innovative steel frame modular construction system, combined with the use of premium materials, allows us to deliver projects that are not only completed up to three times faster than traditional builds but also boast unrivalled structural integrity that will last for many years to come. 
                    </p>
                </div>
            </div>
            <div class="bs-services-details-content pricing-table-title-table mb-lg-5 mb-md-3 mb-2">
                <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize mb-md-3 mb-3" data-cursor="-opaque">
                    <strong>Our 100%</strong> Turn-Key <strong>Packages Start from</strong> £59,995
                </h2>
                <div class="pricing-custom-main">
                    <div class="pricing-width pricing-custom-matric">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark custom-table">
                                <tr>
                                    <th>Size</th>
                                    <th>Price</th>
                                    <th>Footprint</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4m x 5.5m</td>
                                    <td>£59,995</td>
                                    <td>22 sqm</td>
                                </tr>
                                <tr>
                                    <td>4m x 7m</td>
                                    <td>£68,350</td>
                                    <td>28 sqm</td>
                                </tr>
                                <tr>
                                    <td>4m x 9m</td>
                                    <td>£81,000</td>
                                    <td>36 sqm</td>
                                </tr>
                                <tr>
                                    <td>5m x 10m</td>
                                    <td>£93,000</td>
                                    <td>50 sqm</td>
                                </tr>
                                <tr>
                                    <td>5m x 12m</td>
                                    <td>£107,350</td>
                                    <td>60 sqm</td>
                                </tr>
                                <tr>
                                    <td>5m x 15m</td>
                                    <td>£130,375</td>
                                    <td>75 sqm</td>
                                </tr>
                                <tr>
                                    <td>5m x 19m</td>
                                    <td>£145,725</td>
                                    <td>95 sqm</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pricing-width pricing-include-points bg-transperent">
                        <div class="bs-about-4-content service-detail-table-para">
                            <p class="desc text-white">
                                Prices include full groundwork preparation, mains supply and waste connections, a luxury shower room supplied and installed, a modern kitchen supplied and installed, a lawful development certificate, premium flooring, interior decorating, complete project management – and much more. Every Granny Annexes annexe is delivered as a true turn-key solution, ready to move into from day one.
                            </p>
                        </div>
                    </div>
                </div>
                <p class="desc mt-lg-4 pt-3">
                    Please note that the dimensions and prices above are for guidance only. As we offer a bespoke service, we can build annexes to any dimensions - not just those listed above.
                </p>
            </div>
        </div>
    </section>
    <!-- service-details-end -->

    <!-- office-start -->
    @include('frontend.inc.locations')
    <!-- office-end -->

@endsection

@section('js')
@endsection