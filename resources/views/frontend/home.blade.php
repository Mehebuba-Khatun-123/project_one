@extends('frontend.frontend_master')

@section('frontend_content')
<section>
            <!-- Hero Area -->
        @include('frontend.layouts.Hero_Section')
        <!-- Hero Area End -->
        <!-- Counter Area -->
        <div class="vs-counter__layout1 position-relative">
            <div class="main-container4">
                <div class="row align-items-center justify-content-sm-center">
                    <div class="col-md-auto">
                        <div class="vs-counter__inner">
                            <div class="play-video">
                                <a href="https://www.youtube.com/watch?v=moYayPRgaY0" class="play-btn2 popup-video"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="vs-counter__content">
                                <div class="wow animate__fadeInUp" data-wow-delay="0.25s">
                                    <div class="title-area title-anime animation-style1">
                                      <span class="sec-subtitle justify-content-center title-anime__title">ABOUT CLEANING</span>
                                      <h2 class="sec-title title-anime__title">DEEP CLEANING IN YOUR CITY</h2>
                                    </div>
                                </div>
                            </div>
                            <span class="shape-mockup  custom-sheap" style="left: -35%; top: 0px;"><img src="{{ asset('frontend/assets/img/shapes/counter-shep2.png') }}" alt="counter element"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="counter-style1">
                            <div class="row g-5 z-index-common justify-content-lg-between justify-content-center align-items-center ">
                                <div class="col-xl-auto col-lg-6 col-6">
                                    <div class="media-style">
                                        <div class="media-inner">
                                            <span class="counter-icon"><img src="{{ asset('frontend/assets/img/icon/counter-icon-1-1.svg') }}" alt="icon"></span>
                                            <div class="media-counter">
                                                <div class="media-count">
                                                    <h2 class="media-title h3 counter-number" data-count="950">00</h2>
                                                    <span class="count-icon">+</span>
                                                </div>
                                                <p class="media-text">Happpy client</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-auto col-lg-6 col-6">
                                    <div class="media-style">
                                        <div class="media-inner">
                                            <span class="counter-icon"><img src="{{ asset('frontend/assets/img/icon/counter-icon-1-2.svg') }}" alt="icon"></span>
                                            <div class="media-counter">
                                                <div class="media-count">
                                                    <h2 class="media-title h3 counter-number" data-count="45">00</h2>
                                                    <span class="count-icon">+</span>
                                                </div>
                                                <p class="media-text">Award Winner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-auto col-lg-6 col-6">
                                    <div class="media-style">
                                        <div class="media-inner">
                                            <span class="counter-icon"><img src="{{ asset('frontend/assets/img/icon/counter-icon-1-3.svg') }}" alt="icon"></span>
                                            <div class="media-counter">
                                                <div class="media-count">
                                                    <h2 class="media-title h3 counter-number" data-count="400">00</h2>
                                                    <span class="count-icon">+</span>
                                                </div>
                                                <p class="media-text">Completed Project</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-auto col-lg-6 col-6">
                                    <div class="media-style">
                                        <div class="media-inner">
                                            <span class="counter-icon"><img src="{{ asset('frontend/assets/img/icon/counter-icon-1-4.svg') }}" alt="icon"></span>
                                            <div class="media-counter">
                                                <div class="media-count">
                                                    <h2 class="media-title h3 counter-number" data-count="100">00</h2>
                                                    <span class="count-icon">+</span>
                                                </div>
                                                <p class="media-text">Team Member</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="shape-mockup" style="left: 0; top: 0px;"><img src="{{ asset('/frontend/assets/img/shapes/counter-bg-shep1.png') }}" alt="counter element"></span>
        </div>
        <!-- Counter Area End -->
        <!-- About Area  -->
        @include('frontend.layouts.about_section')
        <!-- About Area End -->
        <!-- Service Area  -->
        @include('frontend.layouts.service_section')
        <!-- Service Area End  -->
        <!-- Client Area  -->
        @include('frontend.layouts.client_section')
        <!-- Client Area End -->
        <!-- Team Area  -->
       @include('frontend.layouts.team_section')
        <!-- Testimonial Area  -->
       @include('frontend.layouts.testimonial_section')
        <!-- Testimonial Area End  -->
        <!-- Blog Area -->
        @include('frontend.layouts.blog_section')
        <!-- Blog Area End  -->
</section>
@endsection
