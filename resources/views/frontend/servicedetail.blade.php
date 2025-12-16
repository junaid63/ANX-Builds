@extends('frontend/layouts/master')

@section('metas')
@endsection

@section('title')
ANX Builds || Service Detail
@endsection

@section('css')
@endsection

@section('content')

    <!-- breadcrumb-start -->
    <section class="breadcrumb-area has-2 wa-p-relative" >


        <div class="container bs-container-1">
            <div class="breadcrumb-wrap">
                <a href="{{ route('service') }}" aria-label="name" class="breadcrumb-back-page-btn">
                    <i class="fa-solid fa-angle-left"></i>
                    Back to Services Page
                </a>
                <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >{{ ucwords($serviceDetails->title) }}</h1>

                <div class="breadcrumb-bg-shape">
                    <img src="{{ url('frontend/assets/img/breadcrumb/breadcrumb-shape.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- service-details-start -->
    <section class="bs-services-details-area pb-100">

        <!-- slider -->
        <div class="bs-services-details-slider">

            <!-- left-slider -->
            <div class="bs-services-details-slider-1 wa-fix">
                <div class="swiper-container wa-fix bs-sd-slider-1-active">
                    <div class="swiper-wrapper">

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-services-details-slider-1-img wa-fix wa-img-cover">
                                <img src="{{ url('frontend/assets/img/services/sd-img-1.png') }}" alt="">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-services-details-slider-1-img wa-fix wa-img-cover">
                                <img src="{{ url('frontend/assets/img/services/sd-img-2.png') }}" alt="">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-services-details-slider-1-img wa-fix wa-img-cover">
                                <img src="{{ url('frontend/assets/img/services/sd-img-3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- right-slider -->
            <div class="bs-services-details-slider-2 wa-fix">
                <div class="swiper-container wa-fix bs-sd-slider-1-active">
                    <div class="swiper-wrapper">

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-services-details-slider-1-img wa-fix wa-img-cover">
                                <img src="{{ url('frontend/assets/img/services/sd-img-2.png') }}" alt="">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-services-details-slider-1-img wa-fix wa-img-cover">
                                <img src="{{ url('frontend/assets/img/services/sd-img-3.png') }}" alt="">
                            </div>
                        </div>

                        <!-- single-slide -->
                        <div class="swiper-slide">
                            <div class="bs-services-details-slider-1-img wa-fix wa-img-cover">
                                <img src="{{ url('frontend/assets/img/services/sd-img-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bs-services-details-slider-btn-posi">
                <div class="container bs-container-1">
                    <div class="bs-services-details-slider-btn-flex">
                        <div class="bs-slider-btn-1 sd-slider-left wa-magnetic">
                            <i class="fa-solid fa-angle-left"></i>
                        </div>
                        <div class="bs-slider-btn-1 sd-slider-right wa-magnetic">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="container bs-container-1">
            <div class="bs-services-details-content">

                <p>Interior design is the art of creating functional and aesthetically pleasing spaces that reflect the personality and needs of the occupants. By combining color schemes, furniture, lighting, and textures, designers can transform any room into a harmonious and inviting environment. Thoughtful space planning ensures that every corner serves a purpose while maintaining an open and free-flowing atmosphere. The choice of materials, patterns, and finishes plays a crucial role in achieving a desired mood, whether it's modern, minimalist, or traditional.</p>

                <p>Customization allows for the integration of unique elements that make a space truly one-of-a-kind. Sustainability is also becoming an essential focus, with eco-friendly materials and energy-efficient solutions gaining popularity. Whether designing a cozy living room or a professional workspace, interior design brings both beauty and functionality together. Ultimately, it’s about crafting a space where people feel comfortable, inspired, and connected.</p>

                <h3>Architecture Services Include:</h3>

                <p>At Barsi, we provide strong criminal defense services to protect your rights and secure the best possible outcome. Our experienced attorneys handle a wide range of cases, from misdemeanors to serious felonies. Whether you need defense against DUI, drug offenses, or violent crimes.</p>

                <div class="bs-services-details-content-feature">
                    <div class="icon">
                        <i class="flaticon-star flaticon"></i>
                    </div>
                    <div class="content">
                        <h4>Consultation and Concept Development</h4>
                        <p>We begin with a detailed consultation to understand your lifestyle, preferences, and requirements. Our team will collaborate with you to define the concept and style, offering expert advice on color schemes, furniture layouts, and overall design direction.</p>
                    </div>
                </div>

                <div class="bs-services-details-content-feature">
                    <div class="icon">
                        <i class="flaticon-star flaticon"></i>
                    </div>
                    <div class="content">
                        <h4>Space Planning and Layout Design</h4>
                        <p>Efficient use of space is key to any design. We provide customized space planning solutions that optimize the flow and functionality of each room. Whether it's a small apartment or a large office, our designs ensure every square foot is used to its full potential.</p>
                    </div>
                </div>

                <div class="bs-services-details-content-feature">
                    <div class="icon">
                        <i class="flaticon-star flaticon"></i>
                    </div>
                    <div class="content">
                        <h4>Furniture and Decor Selection</h4>
                        <p>Our team assists you in selecting the right furniture, accessories, and decor that align with your design vision. From contemporary to classic styles, we curate pieces that complement your space, enhancing both aesthetics and comfort.</p>
                    </div>
                </div>

                <div class="bs-services-details-content-feature">
                    <div class="icon">
                        <i class="flaticon-star flaticon"></i>
                    </div>
                    <div class="content">
                        <h4>Lighting Design</h4>
                        <p>Lighting is essential in setting the mood and functionality of any space. We design and recommend lighting solutions that highlight key features while ensuring optimal illumination for each room’s purpose.</p>
                    </div>
                </div>

                <div class="bs-services-details-content-feature">
                    <div class="icon">
                        <i class="flaticon-star flaticon"></i>
                    </div>
                    <div class="content">
                        <h4>Custom Design Elements</h4>
                        <p>We offer bespoke design solutions, including custom furniture, cabinetry, and other personalized elements. These tailored pieces add uniqueness and elegance to your space while ensuring a perfect fit for your needs.</p>
                    </div>
                </div>

                <div class="bs-services-details-content-img">
                    <img src="{{ url('frontend/assets/img/services/sd-content-img-1.png') }}" alt="">
                </div>

                <h3>Project Management and Execution</h3>
                <p>Our interior design services extend to managing the execution of the project from start to finish. We oversee timelines, coordinate with contractors and suppliers, and ensure that every detail is meticulously implemented, staying within your budget and schedule.</p>
                <h3>Sustainable Design Solutions</h3>
                <p>We’re committed to eco-friendly practices, offering sustainable materials, energy-efficient solutions, and waste-reduction strategies. Our designs aim to create beautiful spaces that are environmentally responsible and contribute to a healthier living or working environment.</p>
                <h3>Post-Design Support</h3>
                <p>Our relationship doesn’t end once the project is complete. We offer post-design support to ensure that your space remains functional, fresh, and true to your vision. We’re always here for any adjustments, additions, or maintenance needs that arise.</p>
                <p>Whether you're redesigning your home, renovating an office, or creating a commercial space, our team at [Your Company Name] is here to bring your ideas to life. Let us create a space that reflects your style, enhances functionality, and promotes comfort and well-being. Contact us today to get started!</p>

                <h3>We Work with Clients to Create Solutions that Stand the Test of Time.</h3>

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