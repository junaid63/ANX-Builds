<!-- header-start -->
            <header class="bs-header-4-area ">
                <div class="bs-header-4-row d-flex  justify-content-between">

                    <div class="header-logo">
                        <!-- logo -->
                        <a href="{{ route('index') }}" aria-label="name" class="bs-header-4-logo">
                            <img src="{{ url('storage') }}/{{ setting('site.logo') }}" alt="">
                        </a>
                    </div>

                    <div class="bs-header-4-right">

                        <!-- top-header -->
                        <div class="bs-header-4-top">

                            <!-- left-contact -->
                            <ul class="bs-header-4-top-contact wa-list-style-none">
                                @if(setting('site.web-email'))
                                <li class="bs-p-4">
                                    <a href="mailto:{{ setting('site.web-email') }}" aria-label="name">
                                        <i class="fa-regular fa-envelope"></i>
                                        {{ setting('site.web-email') }}
                                    </a>
                                </li>
                                @endif
                                @if(setting('site.web-phone'))
                                <li class="bs-p-4">
                                    <a href="tel:{{ setting('site.web-phone') }}" aria-label="name">
                                        <i class="fa-solid fa-phone"></i>
                                        {{ setting('site.web-phone') }}
                                    </a>
                                </li>
                                @endif
                                <li class="bs-p-4">
                                    <i class="fa-regular fa-clock"></i>
                                    Mon - Fri 8:30 - 17:30, Sat - Sun off
                                </li>
                            </ul>

                            <!-- right-social -->
                            <div class="bs-header-4-top-social">
                                @if(setting('site.facebook'))
                                <a href="{{ setting('site.facebook') }}" aria-label="name" class="elm-link">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                @endif
                                @if(setting('site.instagram'))
                                <a href="{{ setting('site.instagram') }}" aria-label="name" class="elm-link">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                @endif
                            </div>
                        </div>

                        <!-- main-header -->
                        <div class="bs-header-4-main">

                            <!-- menu -->
                            <nav class="bs-main-navigation  d-none d-lg-block">
                                <ul id="main-nav" class="nav navbar-nav ">
        
                                    <li class="@if(Route::currentRouteName() === 'index') active @endif"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="@if(Route::currentRouteName() === 'about') active @endif"><a href="{{ route('about') }}">About Us</a></li>
                                    <li class="@if(Route::currentRouteName() === 'process') active @endif"><a href="{{ route('process') }}">Our Process</a></li>
                                    <li class="@If(Route::currentRouteName() === 'service') active @endif"><a href="{{ route('service') }}">Services</a></li>
                                    <li class="@If(Route::currentRouteName() === 'price') active @endif"><a href="{{ route('price') }}">Prices</a></li>
                                    <li class="@If(Route::currentRouteName() === 'gallery') active @endif"><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li class="@If(Route::currentRouteName() === 'faq') active @endif"><a href="{{ route('faq') }}">Faqs</a></li>
                                    <li class="@If(Route::currentRouteName() === 'blogs') active @endif"><a href="{{ route('blogs') }}">Blogs</a></li>
                                    <li class="@If(Route::currentRouteName() === 'contact') active @endif"><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </nav>

                            <!-- action-link -->
                            <div class="bs-header-4-action-link d-flex align-items-center ">

                                <!-- pr-btn -->
                                <a href="#" aria-label="name" class="bs-pr-btn-2">
                                    <span class="text" data-back="free consultation" data-front="free consultation"></span>
                                    <span class="box box-1" ></span>
                                    <span class="box box-2" ></span>
                                    <span class="box box-3" ></span>
                                    <span class="box box-4" ></span>
                                </a>

                                {{-- <button class="bs-search-btn-2 search_btn_toggle" >
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    search here ...
                                </button> --}}

                                <!-- offcanvas-btn -->
                                <button type="button" aria-label="name" class="bs-offcanvas-btn-3  offcanvas_toggle">
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                    <span class="line"></span>
                                </button>

                            </div>
                        </div>

                    </div>





                </div>
            </header>
            <!-- header-end -->