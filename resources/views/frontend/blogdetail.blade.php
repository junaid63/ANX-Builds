@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="{{ ucwords($blogDetail->meta_title) }}">
    <meta name="description" content="{{ $blogDetail->meta_description }}">
    <meta property="og:title" content="{{ ucwords($blogDetail->meta_title) }}">
    <meta property="og:description" content="{{ $blogDetail->meta_description }}">
    <meta name="twitter:title" content="{{ ucwords($blogDetail->meta_title) }}">
    <meta name="twitter:description" content="{{ $blogDetail->meta_description }}">
@endsection

@section('title')
    {{ ucwords($blogDetail->meta_title) }}
@endsection

@section('css')
@endsection

@section('content')

    <!-- breadcrumb-start -->
    <section class="breadcrumb-area has-blog-details wa-p-relative" >
        <div class="breadcrumb-bg-img wa-fix wa-img-cover">
            <img class="wa-parallax-img" title="breadcrumb-blog-detail" src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-blog-detail.png') }}" alt="breadcrumb-blog-detail">
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
                            {!! $blogDetail->description !!}
                            <!-- left-item -->
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
                                                <img src="{{ url('storage/' . str_replace('\\', '/', $popular->home_card_img)) }}" title="{{ $popular->title }}" alt="{{ $popular->title }}">
                                                {{-- <img title="{{ ucwords($popular->title) }}" src="{{ url('storage/' . $popular->home_card_img) }}" alt="{{ $popular->title }}"> --}}
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

                                <div class="bs-sidebar-blog share-icons">
                                    <div class="tags-list">

                                        <!-- WhatsApp -->
                                        <a href="https://api.whatsapp.com/send?text=https%3A%2F%2Fwww.grannyannexecompany.co.uk%2Fblog%2F{{ $blogDetail->slug }}" target="_blank">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>

                                        <!-- Facebook -->
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.grannyannexecompany.co.uk%2Fblog%2F{{ $blogDetail->slug }}" target="_blank">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>

                                        <!-- Instagram -->
                                        <a href="javascript:void(0)" onclick="shareOnInstagram()">
                                            <i class="fa-brands fa-instagram"></i>
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
<script>
function shareOnInstagram() {
    var blogUrl = "https://www.grannyannexecompany.co.uk/blog/{{ $blogDetail->slug }}";

    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(blogUrl).then(function () {
            alert("Link copied! Now paste it on Instagram.");
            window.open("https://www.instagram.com/anxbuilds/", "_blank");
        });
    } else {
        // Fallback for old browsers
        var tempInput = document.createElement("textarea");
        tempInput.value = blogUrl;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);

        alert("Link copied! Now paste it on Instagram.");
        window.open("https://www.instagram.com/anxbuilds/", "_blank");
    }
}
</script>
@endsection