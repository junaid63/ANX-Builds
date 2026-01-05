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

                <h2 class="bs-sec-title-4 title wa-split-right wa-capitalize" data-cursor="-opaque">
                    Tranfsorming lives with <br>expertly built garden annexes
                </h2>

                <p class="bs-p-4 disc wa-fadeInUp">
                    We offer a complete turnkey granny annexe and garden annexe service across the UK, managing everything from initial design and drawings through to groundworks, build, installation, utilities, and full interior fit-out. You’ll have one team overseeing the whole process- so your annexe is delivered to a high standard with a clear, supported journey from first conversation to handover.
                </p>
                <div class="btn-wrap wa-fadeInUp">
                    <a href="javascript:void()" aria-label="name" class="bs-pr-btn-2">
                        <span class="text" data-back="More About Our Services" data-front="More About Our Services"></span>
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
                @foreach ($services as $service)
                <div class="bs-services-4-item-single wa-bg-default active " data-background="{{url('storage/' . $service->card_img)}}">
                    <div class="active-content">
                        <h4 class="bs-h-1 title">
                            <a href="{{ route('servicedetail', $service->slug) }}" aria-label="name" class="wa-line-limit has-line-2">{{ ucwords($service->title) }}</a>
                        </h4>
                        <div class="main-img wa-fix wa-img-cover">
                            <img src="{{url('storage/' . $service->card_img)}}" alt="">
                        </div>
                        <p class="bs-p-4 disc wa-line-limit has-line-3">
                            {{ $service->short_description }}
                        </p>
                    </div>
                    <div class="default-content">
                        <div class="img-2 wa-fix wa-img-cover">
                            <img src="{{url('storage/' . $service->card_img)}}" alt="">
                        </div>
                        <h4 class="bs-h-1 title-2 wa-line-limit has-line-1">
                            Garden Pods & Offices
                        </h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- services-end -->