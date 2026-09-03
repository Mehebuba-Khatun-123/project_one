 <section class="vs-service__layout1 space position-relative">
            <!-- <div class="container custome-space-bottom"> -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="title-area text-center wow animate__fadeInUp title-anime animation-style5" data-wow-delay="0.25s">
                            <span class="sec-subtitle justify-content-center title-anime__title"> CLEANING SERVICE</span>
                            <h2 class="sec-title title-anime__title">Our Excellent Service</h2>
                        </div>
                    </div>
                </div>
                <div class="row vs-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="true">
                    <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.25s">
                        <div class="vs-service__style1">
                            <div class="vs-service__img">
                                <a href="service-details.html">
                                    <img src="{{asset('frontend/assets/img/service/service-img-1-1.jpg')}}" alt="Serevice Image">
                                </a>
                            </div>
                            <div class="vs-service__body">
                                <div class="vs-service__header">
                                    <div class="vs-service__content">
                                        <p class="vs-service__subtitle">cleaning  01</p>
                                        <h2 class="vs-service__title h6"><a href="service-details.html">home service</a></h2>
                                    </div>
                                    <div class="vs-service__icon">
                                        <img src="{{asset('frontend/assets/img/icon/service-icon-1-1.svg')}}" alt="Service Icon">
                                    </div>
                                </div>
                                <p class="vs-service__text">aweep & mopsd vacuum floor House Cleaners.</p>
                            </div>
                        </div>
                    </div>
                    @foreach ($services as $service)
                    <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.45s">
                        <div class="vs-service__style1">
                            <div class="vs-service__img">
                                <a href="service-details.html">
                                    <img src="{{asset('frontend/assets/img/service/service-img-1-2.jpg')}}" alt="{{$service->service_image}}">
                                </a>
                            </div>
                            <div class="vs-service__body">  
                                <div class="vs-service__header">
                                    <div class="vs-service__content">
                                        <p class="vs-service__subtitle">cleaning  01</p>
                                        <h2 class="vs-service__title h6"><a href="service-details.html">{{$service->service_name}}</a></h2>
                                    </div>
                                    <div class="vs-service__icon">
                                        <img src="{{asset('frontend/assets/img/icon/service-icon-1-2.svg')}}" alt="{{$service->service_image}}">
                                    </div>
                                </div>
                                <p class="vs-service__text">{{$service->short_description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.65s">
                        <div class="vs-service__style1">
                            <div class="vs-service__img">
                                <a href="service-details.html">
                                    <img src="{{asset('frontend/assets/img/service/service-img-1-3.jpg')}}" alt="{{$service->service_image}}">
                                </a>
                            </div>
                            <div class="vs-service__body">
                                <div class="vs-service__header">
                                    <div class="vs-service__content">
                                        <p class="vs-service__subtitle">cleaning  01</p>
                                        <h2 class="vs-service__title h6"><a href="service-details.html">{{$service->service_name}}</a></h2>
                                    </div>
                                    <div class="vs-service__icon">
                                        <img src="{{asset('frontend/assets/img/icon/service-icon-1-3.svg')}}" alt="{{$service->service_icon}}">
                                    </div>
                                </div>
                                <p class="vs-service__text">{{$service->short_description}}.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.85s">
                        <div class="vs-service__style1">
                            <div class="vs-service__img">
                                <a href="service-details.html">
                                    <img src="{{asset('frontend/assets/img/service/service-img-1-4.jpg')}}" alt="{{$service->service_image}}">
                                </a>
                            </div>
                            <div class="vs-service__body">
                                <div class="vs-service__header">
                                    <div class="vs-service__content">
                                        <p class="vs-service__subtitle">cleaning  01</p>
                                        <h2 class="vs-service__title h6"><a href="service-details.html">{{$service->service_name}}</a></h2>
                                    </div>
                                    <div class="vs-service__icon">
                                        <img src="{{asset('frontend/assets/img/icon/service-icon-1-4.svg')}}" alt="{{$service->service_icon}}">
                                    </div>
                                </div>
                                <p class="vs-service__text">{{$service->short_description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-lg-3 wow animate__fadeInUp" data-wow-delay="0.95s">
                        <div class="vs-service__style1">
                            <div class="vs-service__img">
                                <a href="service-details.html">
                                    <img src="{{asset('frontend/assets/img/service/service-img-1-5.jpg')}}" alt="Serevice Image">
                                </a>
                            </div>
                            <div class="vs-service__body">
                                <div class="vs-service__header">
                                    <div class="vs-service__content">
                                        <p class="vs-service__subtitle">cleaning  01</p>
                                        <h2 class="vs-service__title h6"><a href="service-details.html">House Clean</a></h2>
                                    </div>
                                    <div class="vs-service__icon">
                                        <img src="{{asset('frontend/assets/img/icon/service-icon-1-4.svg')}}" alt="Service Icon">
                                    </div>
                                </div>
                                <p class="vs-service__text">aweep & mopsd vacuum floor   House Cleaners.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <span class="shape-mockup z-index-n1 d-xl-block d-none" style="right: 0; top: 0px;"><img src="{{asset('frontend/assets/img/shapes/service-shape-1.png')}}" alt="counter element"></span>
            <span class="shape-mockup z-index-n1 custom-sheap" style="right: 0; bottom: 0px;"><img src="{{asset('frontend/assets/img/shapes/service-shape-2.png')}}" alt="counter element"></span>
            <span class="shape-mockup z-index-n1 d-xl-block d-none" style="left: 0; bottom: 0px;" ><img src="{{asset('frontend/assets/img/shapes/service-shape-3.png')}}" alt="counter element"></span>
         </section>