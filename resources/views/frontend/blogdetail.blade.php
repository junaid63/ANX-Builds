@extends('frontend/layouts/master')

@section('metas')
@endsection

@section('title')
@php
    $words = explode(' ', ucwords($blogDetail->title))
@endphp
ANX Builds || {{ implode(' ', array_slice($words, 0, 3)) }}
@endsection

@section('css')
@endsection

@section('content')

    <!-- breadcrumb-start -->
    <section class="breadcrumb-area has-blog-details wa-p-relative" >
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" src="{{ url('frontend/assets/img/breadcrumb/blog-details.png') }}" alt="">
        </div>

        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >{{ ucwords($blogDetail->title) }}</h1>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- blog-page-start -->
    <section class="bs-blog-page-2-area py-lg-5 py-3">
        <div class="container">
            <div class="bs-blog-page-2-wrap">
                <div class="row">

                    <div class="col-lg-8">
                        <!-- left-item -->
                        <div class="bs-blog-page-2-left">
                            {{-- {!! $blogDetail->description !!} --}}
                            <!-- left-item -->
                            <div class="bs-blog-details-content ">
                                <p ><span class="big-letter">T</span>
                                    ake a moment to look at your garden. What do you see? An open space or do you imagine the possibility of something more? Not just a shed, not just a storage spot, but a place with purpose. A place that could become part of your life.
                                    This is where a garden annexe steps in. It is not simply a structure—it is a lifestyle choice. A quiet retreat for working from home. A private space for a loved one. Or even a long-term investment that grows the value of your property.
                                    Design matters here. An annexe must be more than beautiful but it must also be practical. It must fit your days. It must carry your stories. That is the balance between style and use. And that is what makes an annexe more than a building. You create a living space that works for you today and stands strong for tomorrow.
                                    In this blog, we’ll explore how to design a garden annexe UK that blends elegance with function—so your space looks good, feels good, and truly fits your life.
                                </p>
                                <div class="blog-detail-points-para">
                                    <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">
                                        Designing a Functional Garden Annexe UK: Where to Begin
                                    </h2>
                                    <p>
                                        When starting your garden annexe project, function should be at the heart of every decision. Ask yourself: Who is this space for? What will it be used for daily? These questions guide the layout, fittings, and flow of the space.
                                        A well-designed annexe should be:
                                    </p>
                                    <ul class="ms-lg-3 ms-md-2 ms-2 mb-lg-3 mb-md-2 mb-2">
                                        <li>
                                            <span><b>Comfortable</b> all year round</span>
                                        </li>
                                        <li>
                                            <b>Easy to maintain</b>
                                        </li>
                                        <li>
                                            <b>
                                                Efficiently laid out
                                            </b>
                                        </li>
                                        <li>
                                            <b>
                                                Visually appealing
                                            </b>
                                        </li>
                                    </ul>
                                    <p>
                                        At OffPOD, every layout is tailored around your garden, your lifestyle, and your needs—no two builds are the same. This is the beauty of a truly bespoke garden annexe.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- right-sidebar -->
                        <div class="bs-blog-page-sidebar ">

                            <!-- single-widget -->
                            <div class="bs-blog-page-sidebar-widget">
                                <h5 class="widget-title bs-h-4">recent posts</h5>

                                <div class="bs-sidebar-blog">

                                    <!-- single-blog -->
                                    @foreach ($popularblogs as $popular)
                                        <div class="bs-sidebar-blog-single">
                                            <div class="item-img wa-img-cover wa-fix">
                                                <img src="{{ url('storage/' . $popular->home_card_img) }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h4 class="bs-h-4 title text-ellipsis-2">
                                                    <a href="{{ route('blogDeails', $popular->slug) }}" aria-label="name">{{ ucwords($popular->title) }}</a>
                                                </h4>
                                                <h6 class="bs-p-4 item-meta">
                                                    <i class="fa-regular fa-calendar"></i>
                                                    {{-- <span class="date">{{ $popular->created_at }}</span> --}}
                                                    <span class="date">
                                                        {{ \Carbon\Carbon::parse($popular->created_at)->format('d F Y') }}
                                                    </span>
                                                </h6>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- single-widget -->
                            <div class="bs-blog-page-sidebar-widget">
                                <h5 class="widget-title bs-h-4">Share Page</h5>

                                <div class="bs-sidebar-blog">
                                    <div class="tags-list">
                                        <!-- WhatsApp -->
                                        <a href="https://api.whatsapp.com/send?text=https%3A%2F%2Ftest-v3.quay-space.co.uk%2Fblogs%2Freasons-to-choose-quay-space-for-your-office-or-workspace-in-the-uk" target="_blank">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>

                                        <!-- Facebook -->
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftest-v3.quay-space.co.uk%2Fblogs%2Freasons-to-choose-quay-space-for-your-office-or-workspace-in-the-uk" target="_blank">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>

                                        <!-- Instagram (Direct sharing NOT supported by URL) -->
                                        <a href="https://www.instagram.com/?url=https%3A%2F%2Ftest-v3.quay-space.co.uk%2Fblogs%2Freasons-to-choose-quay-space-for-your-office-or-workspace-in-the-uk" target="_blank">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>

                                        <!-- TikTok (Direct share link NOT supported, open profile only) -->
                                        <a href="https://www.tiktok.com" target="_blank">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>

                                        <!-- Messenger -->
                                        <a href="https://www.facebook.com/dialog/send?link=https%3A%2F%2Ftest-v3.quay-space.co.uk%2Fblogs%2Freasons-to-choose-quay-space-for-your-office-or-workspace-in-the-uk&amp;app_id=123456&amp;redirect_uri=https%3A%2F%2Ftest-v3.quay-space.co.uk%2Fblogs%2Freasons-to-choose-quay-space-for-your-office-or-workspace-in-the-uk" target="_blank">
                                            <i class="fa-brands fa-facebook-messenger"></i>
                                        </a>

                                        <!-- YouTube (No share link support, sends to YouTube page only) -->
                                        <a href="https://www.youtube.com" target="_blank">
                                            <i class="fa-brands fa-youtube"></i>
                                        </a>

                                        <!-- LinkedIn -->
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Ftest-v3.quay-space.co.uk%2Fblogs%2Freasons-to-choose-quay-space-for-your-office-or-workspace-in-the-uk" target="_blank">
                                            <i class="fa-brands fa-linkedin"></i>
                                        </a>

                                        <!-- X (Twitter) -->
                                        <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Ftest-v3.quay-space.co.uk%2Fblogs%2Freasons-to-choose-quay-space-for-your-office-or-workspace-in-the-uk" target="_blank">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- blog-page-end -->

@endsection

@section('js')
@endsection