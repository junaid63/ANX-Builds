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
                    <div class="item-img wa-fix wa-img-cover first">
                        <img src="{{ url('frontend/assets/img/process/01.png') }}" alt="">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">01</h4>
                        <h5 class="bs-h-4 title">Enquiry</h5>
                        <p class="bs-p-4 disc">
                            To start your exciting Granny Annexes journey, be sure to enquire via one of our methods below:
                        </p>
                        <ul>
                            <li>
                                <p>
                                    Contact form <a href="{{ route('contact') }}">(Link)</a>
                                </p>
                            </li>
                            <li>
                                <p>
                                 Website chat
                                </p>
                            </li>
                            <li>
                                <p>
                                Email - <a href="mailto:{{ setting('site.web-email') }}">{{ setting('site.web-email') }}</a>
                                </p>
                            </li>
                            <li>
                                <p>
                                Phone - <a href="tel:{{ setting('site.web-phone') }}">{{ setting('site.web-phone') }}</a> 
                                </p>
                            </li>
                            <li>
                                <p>
                                Social media  - <a href="{{ setting('site.facebook') }}">Facebook</a> & <a href="{{ setting('site.instagram') }}">Instagram</a>
                                </p>
                            </li>
                        </ul>
                        <p class="bs-p-4 disc">
                            Your inquiry, no matter how detailed or vague, is always welcome. If you're uncertain about what you want, don't worry, we've got you covered. Our team of talented designers and architects are ready and eager to assist you in bringing your dream Home Extension, Annexe, or Garden Room to life. 
                        </p>
                    </div>
                </div>
                
                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover second">
                        <img src="{{ url('frontend/assets/img/process/02.png') }}" alt="">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">02</h4>
                        <h5 class="bs-h-4 title">Consultation</h5>
                        <p class="bs-p-4 disc mb-lg-3 mb-md-2 mb-2">
                            After receiving your inquiry, a dedicated member of the Granny Annexesteam will reach out to you and get the ball rolling. Whether you prefer a personalised phone call, a virtual video chat, or a hands-on site visit, we'll work with you to find the best approach that suits your unique needs and preferences
                        </p>
                        <p class="bs-p-4 disc mb-lg-3 mb-md-2 mb-2">
                            The consultation is a crucial opportunity for you to gain a comprehensive understanding of the Granny Annexesphilosophy and for us to fully grasp your specific needs and requirements. Together, we'll work towards creating a bespoke Modular House Extension, Granny Annexe or Garden Room that is tailored to your exact specifications and exceeds your expectations. 
                        </p>
                        <p class="bs-p-4 disc">
                            Take comfort in the knowledge that Granny Annexesoffers a comprehensive, one-stop turnkey solution that covers every aspect of the project, from planning applications to building regulations and even demolition work if necessary. Our aim is to make the process as seamless and convenient as possible for you, and we understand that many of our clients appreciate the convenience of keeping everything under one roof
                        </p>
                    </div>
                </div>
                
                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover third">
                        <img src="{{ url('frontend/assets/img/process/03.png') }}" alt="">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">03</h4>
                        <h5 class="bs-h-4 title">Initial Quote</h5>
                        <p class="bs-p-4 disc mb-lg-3 mb-md-2 mb-2">
                            After the consultation, it's time for us to get to work, generating your bespoke quote using the details gathered from our recent discussions. 
                        </p>
                        <p class="bs-p-4 disc mb-lg-3 mb-md-2 mb-2">
                            The initial quote will detail a full breakdown of what's included and the Terms & Conditions to ensure full transparency right from the start.
                        </p>
                        <p class="bs-p-4 disc mb-lg-3 mb-md-2 mb-2">
                            Amongst many other things, we pride ourselves on efficiency. Buying an Granny AnnexesGranny Annexe or Modular House Extension is an exciting time, and we don't like to keep our customers waiting around. As long as there is nothing too technical about your build you will have your price within 48 hours!
                        </p>
                    </div>
                </div>
                
                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover fourth">
                        <img src="{{ url('frontend/assets/img/process/04.png') }}" alt="">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">04</h4>
                        <h5 class="bs-h-4 title">Site Survey</h5>
                        <p class="bs-p-4 disc mb-lg-3 mb-md-2 mb-2">
                            The site survey is a vital stage of the process, as it allows us to fully understand the build conditions, such as the foundation requirements, electrical installations,  site access, any hazards or obstruction.  
                        </p>
                        <p class="bs-p-4 disc">
                            By completing a site survey we ensure there aren't any unwanted surprises that will slow down the building of your garden room.  What we really love about site surveys is the chance to meet our future clients and build lasting relationships. We cant wait to meet you!
                        </p>
                    </div>
                </div>

                <!-- single-item -->
                <div class="bs-work-process-item-single">
                    <div class="item-img wa-fix wa-img-cover five">
                        <img src="{{ url('frontend/assets/img/process/05.png') }}" alt="">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">05</h4>
                        <h5 class="bs-h-4 title">Final Quote</h5>
                        <p class="bs-p-4 disc mb-lg-3 mb-md-2 mb-2">
                            Following the site visit, we will amend and finalise the quote if need be. Now it's time for you to decide if we are the right people for the job..... we hope we have made a good impression!  
                        </p>
                        <p class="bs-p-4 disc">
                            If you are completely happy with the quote and would like to secure your Granny Annexesbuild, we will require a 30% deposit. We can then give you an installation date and it's time for the countdown to begin! 
                        </p>
                    </div>
                </div>

                <!-- single-item -->
                <div class="bs-work-process-item-single custom-ltr">
                    <div class="item-img wa-fix wa-img-cover six">
                        <img src="{{ url('frontend/assets/img/process/06.png') }}" alt="">
                    </div>
                    <div class="item-line">
                    </div>
                    <div class="content">
                        <h4 class="bs-h-4 number">06</h4>
                        <h5 class="bs-h-4 title">Order Package</h5>
                        <p class="bs-p-4 disc">
                            Upon receiving the deposit, things really start heating up. We will get straight to work on your order package, which will include the following details:
                        </p>
                        <ul>
                            <li>
                                Full technical drawings 
                            </li>
                            <li>
                                Professional exterior & interior renders (Very Exciting)
                            </li>
                            <li>
                                Order
                            </li>
                            <li>
                                Terms & Conditions
                            </li>
                        </ul>
                        <p class="bs-p-4 disc">
                            This is the stage where we go through more of the finer detail, such as where the sockets & light placement,  window and door locations etc. 
                        </p>
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