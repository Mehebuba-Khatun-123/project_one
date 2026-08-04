  <section class="vs-testi__layout1 space" data-bg-src="{{asset('frontend/assets/img/bg/testi-bg1.jpg')}}">
            <div class="container">
                <div class="row gx-60 g-5">
                    <div class="col-xl-5">
                        <div class="vs-testi__form1 wow animate__fadeInUp" data-wow-delay="0.45s">
                            <div class="title-area text-left  wow animate__fadeInUp" data-wow-delay="0.25s">
                                <span class="sec-subtitle text-white left-shape justify-content-center">CLEANING SERVICE</span>
                                <h2 class="sec-title text-white">Book Your Cleaning?</h2>
                            </div>
                            <div class="vs-comment-form">
                                <div id="respond">
                                    <form action="https://html.vecurosoft.com/poolito/demo/mail.php" method="post" class="ajax-contact">
                                        <div class="row gx-3">
                                            <div class="col-md-6 form-group">
                                                <input name="fname" type="text" class="form-control" placeholder="Your Name *" required="">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="email" type="email" class="form-control" placeholder="Email *" required="">                                                
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input name="number" type="number" class="form-control" placeholder="Phone *" required="">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <select name="subject" id="subject">
                                                    <option selected="" disabled="" hidden="">Type of service</option>
                                                    <option value="Web Development">Web Development</option>
                                                    <option value="UI Design">UI Design</option>
                                                    <option value="CMS Development">CMS Development</option>
                                                    <option value="Theme Development">Theme Development</option>
                                                    <option value="Wordpress Development">Wordpress Development</option>
                                                </select>
                                            </div>
                                            <div class="col-12  form-group mt-1 mb-20">
                                                <textarea name="message" class="form-control" placeholder="your message"
                                                    required=""></textarea>
                                            </div>
                                            <div class="col-12 form-group mb-0">
                                                <button class="vs-btn" type="submit">see my instant quote</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-messages mb-0 mt-3"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="vs-testi__inner">
                            <div class="title-area text-left wow animate__fadeInUp title-anime animation-style5" data-wow-delay="0.25s">
                                <span class="sec-subtitle  left-shape justify-content-center title-anime__title">TESTIMONIAL</span>
                                <h2 class="sec-title text-white title-anime__title">Our Client Are Saying</h2>
                                <p class="sec-text">When you work with Los Angeles House Cleaners Referal Agency cleaning breathe easy because your home will soon</p>
                            </div>
                            <div class="vs-testi__items wow animate__fadeInUp" data-wow-delay="0.35s">
                                <div class="vs-carousel testi-slider" data-autoplay="true" data-fade="true">
                                    <div class="vs-testi__style1">
                                        <span class="vs-testi__icon"><i class="fas fa-quote-left"></i></span>
                                        <div class="vs-testi__top">
                                            <div class="vs-testi__image">
                                                <img class="img1" src="{{asset('frontend/assets/img/testimonial/testi-1-1.png')}}" alt="testimonials">
                                            </div>
                                            <div class="vs-testi__author">
                                                <div class="star-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <!-- <i class="fa-solid fa-star"></i> -->
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <h3 class="vs-testi__title">rodja hartmann</h3>
                                            </div>
                                        </div>
                                        <div class="vs-testi__content">
                                            <p class="vs-testi__text">
                                                “ When you work with Los Angeles House Cleaners Refal Agen cleaning room breathe easy because your 
                                                home will soon When yowork with Angeles House Cleaners Referal Agency cleaning breathe ”
                                            </p>
                                        </div>
                                    </div>
                                    <div class="vs-testi__style1">
                                        <span class="vs-testi__icon"><i class="fas fa-quote-left"></i></span>
                                        <div class="vs-testi__top">
                                            <div class="vs-testi__image">
                                                <img class="img1" src="{{asset('frontend/assets/img/testimonial/testi-1-1.png')}}" alt="testimonials">
                                            </div>
                                            <div class="vs-testi__author">
                                                <div class="star-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <!-- <i class="fa-regular fa-star"></i> -->
                                                </div>
                                                <h3 class="vs-testi__title">alaxander pall</h3>
                                            </div>
                                        </div>
                                        <div class="vs-testi__content">
                                            <p class="vs-testi__text">
                                                “ When you work with Los Angeles House Cleaners Refal Agen cleaning room breathe easy because your 
                                                home will soon When yowork with Angeles House Cleaners Referal Agency cleaning breathe ”
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-arraw wow animate__fadeInUp" data-wow-delay="0.45s">
                                <div class="icon-arraw slick-prev" data-slick-prev=".testi-slider">
                                    <button class="icon-btn2">
                                        <img src="{{asset('frontend/assets/img/icon/arraw-right.svg')}}" alt="icon">
                                    </button>
                                </div>
                                <div class="icon-arraw slick-next" data-slick-next=".testi-slider">
                                    <button class="icon-btn2">
                                        <img src="{{asset('frontend/assets/img/icon/arraw-left.svg')}}" alt="icon">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="common-line shape-mockup d-none d-xxl-block" style="top: -7px;">
                <img src="{{asset('frontend/assets/img/shapes/line-shep.png')}}" alt="shapes">
            </div>
         </section>