<!-- footer-start -->
            <footer class="bs-footer-4-area wa-p-relative wa-fix pt-md-5">

                <div class="bs-footer-4-bg wa-fix">
                    <img src="{{url('frontend/assets/img/footer/f4-bg-1.png')}}" alt="">
                </div>

                <div class="container bs-container-2">
                    <div class="bs-footer-4-wrap mb-90">

                        <!-- left-side -->
                        <div class="bs-footer-4-left">

                            <div class="footer-logo">
                                <a href="{{ route('index') }}" aria-label="name" class="bs-footer-4-logo">
                                    <img src="{{ url('storage') }}/{{ setting('site.footer-logo') }}" alt="">
                                </a>
                            </div>

                            <div class="d-flex flex-column flex-md-column justify-content-between gap-4">
                                <div class="bs-footer-4-widget">
    
                                    <!-- single-widget -->
                                    <div class="bs-footer-4-widget-single">
                                        <ul class="bs-footer-4-menu wa-list-style-none" >
                                            <li class="@If(Route::currentRouteName() === 'index') active @endif">
                                                <a href="{{ route('index') }}" aria-label="name">home</a>
                                            </li>
                                            <li class="@If(Route::currentRouteName() === 'about') active @endif">
                                                <a href="{{ route('about') }}" aria-label="name">about us</a>s
                                            </li>
                                            <li class="@If(Route::currentRouteName() === 'process') active @endif">
                                                <a href="{{ route('process') }}" aria-label="name">Our Process</a>
                                            </li>
                                            <li class="@If(Route::currentRouteName() === 'service') active @endif">
                                                <a href="{{ route('service') }}" aria-label="name">Services</a>
                                            </li>
                                            <li class="@If(Route::currentRouteName() === 'price') active @endif">
                                                <a href="{{ route('price') }}" aria-label="name">Prices</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <!-- single-widget -->
                                    <div class="bs-footer-4-widget-single">
                                        <ul class="bs-footer-4-menu wa-list-style-none" >
                                            <li class="@If(Route::currentRouteName() === 'gallery') active @endif">
                                                <a href="{{ route('gallery') }}" aria-label="name">Gallery</a>
                                            </li>
                                            <li class="@If(Route::currentRouteName() === 'faq') active @endif">
                                                <a href="{{ route('faq') }}" aria-label="name">Faqs</a>
                                            </li>
                                            <li>
                                                <a href="" aria-label="name">Blog</a>
                                            </li>
                                            <li class="@If(Route::currentRouteName() === 'contact') active @endif">
                                                <a href="{{ route('contact') }}" aria-label="name">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
    
                                <div class="bs-footer-4-copyright-social">
                                    <a href="https://www.facebook.com/OffPods" aria-label="name" class="elm-link bs-p-4">
                                        <i class="fa-brands fa-facebook-f"></i>
                                        facebook
                                    </a>
                                    <a href="https://www.instagram.com/offpod_uk/" aria-label="name" class="elm-link bs-p-4">
                                        <i class="fa-brands fa-instagram"></i>
                                        instagram
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- right -->
                        <div class="bs-footer-4-contact">
                            <h4 class="bs-h-1 title wa-split-up wa-capitalize wa-fix">get in touch</h4>
                            <div class="bs-footer-4-contact-link">
                                @if(setting('site.web-email'))
                                <p class="bs-p-4 link-title">Email</p>
                                <a href="mailto:{{ setting('site.web-email') }}" class="link-elm bs-p-4 wa-clip-left-right" >
                                    {{ setting('site.web-email') }}
                                </a>
                                @endif
                                @if(setting('site.web-phone'))
                                <p class="bs-p-4 link-title">phone</p>
                                <a href="tel:08002118049" class="link-elm bs-p-4 wa-clip-left-right" >
                                    {{ setting('site.web-phone') }}
                                </a>
                                @endif
                                @if(setting('site.web-address'))
                                <p class="bs-p-4 link-title">Address</p>
                                <p class="disc-elm bs-p-4 wa-clip-left-right" >
                                    {{ setting('site.web-address') }}
                                </p>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

                <div class="bs-footer-4-copyright">
                    <div class="container bs-container-2">
                        <div class="bs-footer-4-copyright-flex">
                            <p class="bs-p-4 bs-footer-4-copyright-text">
                                ©<span class="copyright-year"></span> <a href="#">ANX Builds</a> All Rights Reserved.
                            </p>

                            <div class="bs-p-4 bs-footer-4-copyright-text">
                                Designed by 
                                <a href="https://www.ssftech.co.uk/" target="_blank">
                                    SSF Tech
                                </a> 
                                - Under the Provision of SSF Group
                            </div>
                            {{-- <div class="bs-footer-4-copyright-social">
                                <a href="https://www.facebook.com/OffPods" aria-label="name" class="elm-link bs-p-4">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    facebook
                                </a>
                                <a href="https://www.instagram.com/offpod_uk/" aria-label="name" class="elm-link bs-p-4">
                                    <i class="fa-brands fa-instagram"></i>
                                    instagram
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer-end -->
