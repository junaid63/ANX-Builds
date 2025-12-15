@extends('frontend/layouts/master')

@section('metas')
@endsection

@section('title')
ANX Builds || Contact Us
@endsection

@section('css')
@endsection

@section('content')

<!-- breadcrumb-start -->
<section class="breadcrumb-area wa-p-relative" >
    <div class="breadcrumb-bg-img wa-fix wa-img-cover">
        <img class="wa-parallax-img" src="{{url('frontend/assets/img/breadcrumb/breadcrumb-img.png')}}" alt="">
    </div>

    <div class="container bs-container-1">
        <div class="breadcrumb-wrap">
            <h1 class="breadcrumb-title wa-split-right wa-capitalize" data-split-delay="1.1s" >Contact Us</h1>

            <div class="breadcrumb-list " >
                <svg class="breadcrumb-list-shape" width="88" height="91" viewBox="0 0 88 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M75.3557 83.4825C51.6516 78.2316 30.2731 65.4227 30.8424 38.6307C29.0856 37.5878 27.3642 36.4078 25.6807 35.1082C15.8629 27.5282 7.34269 15.8295 0.970618 3.77828L0 1.94173L3.67259 0L4.64321 1.83605C10.7341 13.3558 18.8345 24.574 28.2197 31.82C29.1853 32.5658 30.1649 33.2687 31.1564 33.9242C31.7447 28.7351 34.2557 18.3221 41.4244 12.7755C53.1965 3.6676 66.5598 9.52271 70.2762 19.1546C74.5799 30.309 65.1659 39.6328 59.589 41.7844C51.0354 45.0846 42.7385 44.3218 35.01 40.8138C35.681 63.7945 54.9747 74.6677 76.0057 79.3717L77.1209 72.3207L87.9707 83.4999L74.2006 90.7853L75.3557 83.4825ZM35.1147 36.2473C42.2964 39.9314 50.0548 41.0102 58.0934 37.9089C62.3617 36.2618 69.6945 29.1868 66.4003 20.6502C63.5203 13.1858 53.0893 9.00325 43.9669 16.0613C37.698 20.9114 35.7338 30.1584 35.2637 34.5703C35.2034 35.1366 35.1536 35.696 35.1147 36.2473Z" fill="white"/>
                </svg>
                    
                <a href="{{ route('index') }}">Home</a>
                <span>Contact Us</span>
            </div>

        </div>
    </div>
</section>
<!-- breadcrumb-end -->

<!-- core-feature-start -->
<section class="bs-core-feature-6-area  pt-125 ">
    <div class="container bs-container-1">
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
        <div class="bs-core-feature-6-wrap bg-black" data-background="{{url('frontend/assets/img/services/s4-bg.png')}}">

            <!-- single-item -->
            @if(setting('site.web-address'))
            <div class="bs-core-feature-4-item wow fadeInRight" >
                <a href="javascript:void(0)">
                    <h4 class="bs-h-4 item-title contact-page-h4">
                        Address
                    </h4>
                    <div class="item-icon">
                        <i class="fa-solid fa-location-arrow"></i>
                    </div>
                    <p class="bs-p-4 item-disc contact-page-p">{{ setting('site.web-address') }}</p>
                </a>
            </div>
            @endif

            <!-- single-item -->
            @if(setting('site.web-email'))
            <div class="bs-core-feature-4-item wow fadeInRight" >
                <a href="{{ setting('site.web-email') }}">
                    <h4 class="bs-h-4 item-title contact-page-h4">
                        Emails Address
                    </h4>
                    <div class="item-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <p class="bs-p-4 item-disc contact-page-p">
                        {{ setting('site.web-email') }}
                    </p>
                </a>
            </div>
            @endif

            <!-- single-item -->
            @if(setting('site.web-phone'))
            <div class="bs-core-feature-4-item wow fadeInRight" >
                <a href="{{ setting('site.web-phone') }}">
                    <h4 class="bs-h-4 item-title contact-page-h4">
                        Call Us
                    </h4>
                    <div class="item-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <p class="bs-p-4 item-disc contact-page-p">
                        {{ setting('site.web-phone') }}
                    </p>
                </a>
            </div>
            @endif

        </div>
        <div class="bs-core-feature-4-line wa-scaleXInUp"></div>
    </div>
</section>
<!-- core-feature-end -->

<!-- contact-form-start -->
<section class="bs-contact-6-area pt-130 pb-160">
    <div class="container bs-container-1">
        <div class="bs-contact-6-wrap">

            <div class="bs-contact-6-img wa-fix wa-img-cover">
                <img src="{{url('frontend/assets/img/contact/c6-img-1.png')}}" alt="">
            </div>

            <div class="bs-contact-6-content">

                <!-- section-title -->
                <div class="bs-about-1-sec-title mb-30">
                    <h6 class="bs-subtitle-1 wa-split-clr wa-capitalize">
                        <span class="icon">
                            <img src="{{url('frontend/assets/img/illus/star-shape.png')}}" alt="">
                        </span>
                        Contact us
                    </h6>
                    <h2 class="bs-sec-title-1  wa-split-right wa-capitalize" data-cursor="-opaque">Let’s talk about your dream project.</h2>
                </div>


                <form id="contact-form" class="bs-form-1 bs-career-single-form">
                    <div class="form-messages"></div>

                    <div class="bs-form-1-item">
                        <label class="bs-form-1-item-label" for="name">Name</label>
                        <input id="contactname" class="bs-form-1-item-input "  type="text" name="name" placeholder="e.g. Oliver Spiteri">
                    </div>

                    <div class="bs-form-1-item">
                        <label class="bs-form-1-item-label" for="email">email</label>
                        <input id="contactemail" class="bs-form-1-item-input " type="email" name="email" placeholder="info@forgexindustry.co.uk">
                    </div>

                    <div class="bs-form-1-item">
                        <label class="bs-form-1-item-label" for="phone">phone</label>
                        <input id="contactphone" class="bs-form-1-item-input " type="tel" name="phone" placeholder="+44 20 8980 9731  |">
                    </div>
                    
                    <div class="bs-form-1-item">
                        <label class="bs-form-1-item-label" for="message">Message</label>
                        <textarea class="bs-form-1-item-input" name="message" id="contactmessage" placeholder="Write your message here..."></textarea>
                    </div>

                    <div class="bs-form-1-item  ">
                        <button class="bs-btn-1" id="ContactSubmit" type="button" >
                            <span class="text">
                                    submit now
                            </span>
                            <span class="icon">
                                <i class="fa-solid fa-right-long"></i>
                                <i class="fa-solid fa-right-long"></i>
                            </span>
                            <span class="shape"></span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- contact-form-end -->

<!-- map-start -->
<div class="bs-contact-page-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d67494.869835997!2d-0.5614198280771351!3d52.35433673888768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879bf624b1d038f%3A0xa5702e1d01536660!2sOffPOD%20Modular%20Extensions%20%26%20Garden%20Annexes!5e0!3m2!1sen!2s!4v1765447375969!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- map-end -->

<!-- office-start -->
@include('frontend.inc.locations')
<!-- office-end -->

@endsection

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(function() {
            $("#contactphone").mask('99999-999999');
            $("#ContactSubmit").click(function(){
                var name = $("#contactname").val();           
                var email = $("#contactemail").val();           
                var phone = $("#contactphone").val();           
                var message = $("#contactmessage").val();    

                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                if(name != ""){
                    if(email !=""){
                        if (emailPattern.test(email)) {
                            if(phone !=""){
                                if(phone.length === 12){
                                    if(message !=""){
                                        $(this).html("Please Wait &nbsp; <i class='fa fa-spinner fa-spin'></i>");
                                        $(this).attr("disabled", true);
                                        $.ajax({
                                            url: "contact/submit",
                                            type: "POST",
                                            data: {
                                                name:name,
                                                email:email,
                                                phone:phone,
                                                message:message,
                                                '_token': '{{ csrf_token() }}',
                                            },
                                            success:function(response) {
                                                if(response['status'] ==  "success"){
                                                    Swal.fire({
                                                        position: "center",
                                                        icon: "success",
                                                        title: response['message'],
                                                        showConfirmButton: false,
                                                        timer: 2000
                                                    });
                                                    $("#ContactSubmit").html("Submit Now");
                                                    $("#ContactSubmit").removeAttr("disabled");
                                                    $("#contactname").val("");
                                                    $("#contactemail").val("");
                                                    $("#contactphone").val("");
                                                    $("#contactmessage").val("");
                                                }
                                                else if (response['status'] == "warning") {
                                                    Swal.fire({
                                                        position: "center",
                                                        icon: "success",
                                                        title: "Thank you for Contact Us",
                                                        showConfirmButton: false,
                                                        timer: 2000
                                                    });
                                                    $("#ContactSubmit").html("Submit Now");
                                                    $("#ContactSubmit").removeAttr("disabled");
                                                }
                                            }
                                        });
                                    }
                                    else {
                                        Swal.fire({
                                            position: "center",
                                            icon: "warning",
                                            title: "Enter the message",
                                            showConfirmButton: false,
                                            timer: 2000
                                        });
                                        $("#contactmessage").focus();
                                    }
                                }
                                else {
                                    Swal.fire({
                                        position: "center",
                                        icon: "warning",
                                        title: "Enter 12 Digits number",
                                        showConfirmButton: false,
                                        timer: 2000
                                    });
                                    $("#contactphone").focus();
                                }
                            }
                            else {
                                Swal.fire({
                                    position: "center",
                                    icon: "warning",
                                    title: "Enter the number",
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                            }
                        }
                        else {
                            Swal.fire({
                                position: "center",
                                icon: "warning",
                                title: "Please Enter a Valid Email Address",
                                showConfirmButton: false,
                                timer: 2000
                            });
                            $("#contactemail").focus();
                        }
                    }
                    else {
                        Swal.fire({
                            position: "center",
                            icon: "warning",
                            title: "Enter the email",
                            showConfirmButton: false,
                            timer: 2000
                        });
                        $("#contactemail").focus();
                    }
                }
                else {
                    Swal.fire({
                        position: "center",
                        icon: "warning",
                        title: "Enter the name",
                        showConfirmButton: false,
                        timer: 2000
                    });
                    $("#contactname").focus();
                }
            });
        });
    </script>
@endsection