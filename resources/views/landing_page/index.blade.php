@extends('landing_page.layouts.app')

@section('content')
    <!-- ========== Hero Start ========== -->
    <section class="hero-area circle-wrap">
        <div class="circle x1"></div>
        <div class="circle x2"></div>
        <div class="circle x3"></div>
        <div class="circle x4"></div>
        <div class="circle x5"></div>
        <div class="circle x6"></div>
        <div class="circle x7"></div>
        <div class="circle x8"></div>
        <div class="circle x9"></div>
        <div class="circle x10"></div>
        <!-- End circle -->
        <div class="container">
            <div class="row full-height align-items-center">
                <div class="col-md-6 p-100px-t p-50px-b md-p-10px-b">
                    <h2 class="text-capitalize m-25px-b">Perefect Design. <br>Incredible Experience.</h2>
                    <p class="m-25px-b">Abilities or he perfectly pretended so strangers be exquisite. Oh to another
                        chamber pleased imagine do in. Went me rank at last loud shot an draw.
                    </p>
                    <div class="hero-btn-wrapper">
                        <a href="#" class="btn btn-default animated-btn">Download App</a>
                        <a class="btn btn-default btn-default-outline animated-btn" href="#">More Details</a>
                    </div>
                </div>
                <div class="col-md-6 p-100px-t p-50px-b md-p-10px-t">
                    <img class="hero-mock" src="{{ asset('landing_page/img/hero-mock.png') }}" alt="Hero mockup" />
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Hero End ========== -->
    <!-- ========== Services Start ========== -->
    <section id="services" class="p-100px-tb sm-p-50px-b">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center p-60px lg-p-40px md-p-30px sm-p-20px m-10px-t m-10px-b">
                        <i class="icofont-law-document"></i>
                        <h4>Easy Customize</h4>
                        <p>Eat him four are rich nor calm. By an packages rejoiced exercise. To ought on am marry rooms
                            doubt music</p>
                    </div>
                </div>
                <!-- End single service -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center p-60px lg-p-40px md-p-30px sm-p-20px m-10px-t m-10px-b">
                        <i class="icofont-code"></i>
                        <h4>Bug Free Code</h4>
                        <p>Eat him four are rich nor calm. By an packages rejoiced exercise. To ought on am marry rooms
                            doubt music</p>
                    </div>
                </div>
                <!-- End single service -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center p-60px lg-p-40px md-p-30px sm-p-20px m-10px-t m-10px-b">
                        <i class="icofont-file-avi-mp4"></i>
                        <h4>High Resolution</h4>
                        <p>Eat him four are rich nor calm. By an packages rejoiced exercise. To ought on am marry rooms
                            doubt music</p>
                    </div>
                </div>
                <!-- End single service -->
            </div>
        </div>
    </section>
    <!-- ========== Services End ========== -->
    <!-- ==========  Preface Start ========== -->
    <section id="preface" class="p-80px-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="section-title text-center m-50px-b">
                        <h2>App Preface</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="position-relative md-m-50px-b">
                        <div class="bordered-circle"></div>
                        <img class="moveUpDown" src="{{ asset('landing_page/img/preface.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="m-15px-b">Awesome Elegant App, You Have Never Experienced</h3>
                    <p class="m-25px-b">Needed feebly dining oh talked wisdom oppose at. Applauded use attempted
                        strangers now are middleton concluded had. It is tried ﻿no added purse shall no on truth.
                        Pleased anxious or as in by viewing forbade minutes prevent. Too leave had those get being led
                        weeks blind. Had men rose from down lady able. Its son him ferrars proceed six parlors.</p>
                    <div class="apps-buttons">
                        <a href="#" class="btn btn-default btn-filled  animated-btn"><i
                                class="icofont-brand-android-robot"></i> Available on<br>Google store</a>
                        <a href="#" class="btn btn-default  btn-filled animated-btn"><i
                                class="icofont-brand-apple"></i> Available on<br>Apple store</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Preface End ========== -->
    <!-- ==========  How it works Start ========== -->
    <section id="how-it-works" class="p-80px-tb gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="section-title text-center m-50px-b">
                        <h2>How it works</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="how-it-box text-center p-15px-lr p-50px-tb m-10px-t m-10px-b">
                        <i class="icofont-iphone"></i>
                        <h4>Configuration</h4>
                        <p>Literature admiration frequently indulgence announcing</p>
                    </div>
                </div>
                <!-- End single how it works -->
                <div class="col">
                    <div class="how_works_arrow text-center">
                        <i class="icofont-long-arrow-right"></i>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="how-it-box text-center p-15px-lr p-50px-tb m-10px-t m-10px-b">
                        <i class="icofont-refresh"></i>
                        <h4>Refresh Setup</h4>
                        <p>Literature admiration frequently indulgence announcing</p>
                    </div>
                </div>
                <!-- End single how it works -->
                <div class="col">
                    <div class="how_works_arrow text-center">
                        <i class="icofont-long-arrow-right"></i>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="how-it-box text-center p-15px-lr p-50px-tb m-10px-t m-10px-b">
                        <i class="icofont-hand-drag1"></i>
                        <h4>Start Using App</h4>
                        <p>Literature admiration frequently indulgence announcing</p>
                    </div>
                </div>
                <!-- End single how it works -->
            </div>
        </div>
    </section>
    <!-- ==========  How it works End ========== -->
    <!-- ==========  Features Start ========== -->
    <section id="feature" class="p-80px-tb position-relative">
        <div class="filled-circle"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="section-title text-center m-50px-b">
                        <h2>App Features</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12  md-p-50px-b">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-feature">
                                <i class="icofont-drawing-tablet"></i>
                                <h4>Easy Installation</h4>
                                <p>Way nor furnished sir procuring therefore but. Warmth far manner myself active are
                                    cannot</p>
                            </div>
                        </div>
                        <!-- End single Features -->
                        <div class="col-sm-6">
                            <div class="single-feature">
                                <i class="icofont-responsive"></i>
                                <h4>Responsive Design</h4>
                                <p>Way nor furnished sir procuring therefore but. Warmth far manner myself active are
                                    cannot</p>
                            </div>
                        </div>
                        <!-- End single Features -->
                        <div class="col-sm-6">
                            <div class="single-feature">
                                <i class="icofont-ui-note"></i>
                                <h4>Flexible Interface</h4>
                                <p>Way nor furnished sir procuring therefore but. Warmth far manner myself active are
                                    cannot</p>
                            </div>
                        </div>
                        <!-- End single Features -->
                        <div class="col-sm-6">
                            <div class="single-feature">
                                <i class="icofont-file-avi-mp4"></i>
                                <h4>High Resolution</h4>
                                <p>Way nor furnished sir procuring therefore but. Warmth far manner myself active are
                                    cannot</p>
                            </div>
                        </div>
                        <!-- End single Features -->
                        <div class="col-sm-6">
                            <div class="single-feature">
                                <i class="icofont-code-alt"></i>
                                <h4>Bug Free Code</h4>
                                <p>Way nor furnished sir procuring therefore but. Warmth far manner myself active are
                                    cannot</p>
                            </div>
                        </div>
                        <!-- End single Features -->
                        <div class="col-sm-6">
                            <div class="single-feature">
                                <i class="icofont-cloud-refresh"></i>
                                <h4>Cloud Storage</h4>
                                <p>Way nor furnished sir procuring therefore but. Warmth far manner myself active are
                                    cannot</p>
                            </div>
                        </div>
                        <!-- End single Features -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="position-relative featured-mockup">
                        <div class="bordered-box"></div>
                        <img class="phone-1" src="{{ asset('landing_page/img/iphone-1.png') }}" alt="">
                        <img class="phone-2" src="{{ asset('landing_page/img/iphone-2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========  Features End ========== -->
    <!-- ==========  Testimonials Start ========== -->
    <section id="testimonials" class="p-175px-tb md-p-80px-tb position-relative testimonials">
        <div class="container">
            <div class="row">
                <div class="rotate-heading">
                    <h2>Clients<br>Review</h2>
                </div>
                <div class="col-lg-8 offset-lg-2 swiper-container testimonialSwiper p-50px-b">
                    <div class="swiper-wrapper">
                        <div class="single-testimonial swiper-slide">
                            <div class="row">
                                <div class="col-lg-2 col-md-3">
                                    <img class="rounded-circle" src="{{ asset('landing_page/img/avater1.jpeg') }}"
                                        alt="">
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <p>“ Is he staying arrival address earnest. To preference considered it themselves
                                        inquietude collecting estimating. View park for why gay knew face. ”</p>
                                    <h5>Jenifar deo.</h5>
                                    <p class="designation">Apps Developer</p>
                                    <p class="ratings">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End single Testimonial -->
                        <div class="single-testimonial swiper-slide">
                            <div class="row">
                                <div class="col-lg-2 col-md-3">
                                    <img class="rounded-circle" src="{{ asset('landing_page/img/avater2.jpeg') }}"
                                        alt="">
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <p>“ Among going manor who did. Do ye is celebrated it sympathize considered. May
                                        ecstatic did surprise elegance the ignorant age. Own her miss cold last. ”</p>
                                    <h5>Kate Hauly</h5>
                                    <p class="designation">Digital Marketer</p>
                                    <p class="ratings">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End single Testimonial -->
                        <div class="single-testimonial swiper-slide">
                            <div class="row">
                                <div class="col-lg-2 col-md-3">
                                    <img class="rounded-circle" src="{{ asset('landing_page/img/avater3.jpeg') }}"
                                        alt="">
                                </div>
                                <div class="col-lg-10 col-md-9">
                                    <p>“ It so numerous if he outlived disposal. How but sons mrs lady when. Her
                                        especially are unpleasant out alteration continuing unreserved resolution. ”</p>
                                    <h5>John Deo</h5>
                                    <p class="designation">Web Developer</p>
                                    <p class="ratings">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End single Testimonial -->
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========  Testimonials End ========== -->
    <!-- ==========  Screenshots Start ========== -->
    <section id="screenshots" class="p-80px-tb position-relative">
        <div class="circle x1"></div>
        <div class="circle x2"></div>
        <div class="circle x3"></div>
        <div class="circle x4"></div>
        <div class="circle x7"></div>
        <div class="circle x8"></div>
        <div class="circle x9"></div>
        <div class="circle x10"></div>
        <!-- End circles -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="section-title text-center m-50px-b">
                        <h2>App Screenshots</h2>
                    </div>
                </div>
            </div>
            <div class="row swiper-container screenshot-swiper p-50px-b">
                <div class="swiper-wrapper">
                    <!-- End single ScreenShot -->
                    <div class="swiper-slide col-sm-4">
                        <img src="{{ url('landing_page/img/ss1.png') }}" alt="">
                    </div>
                    <!-- End single ScreenShot -->
                    <div class="swiper-slide col-sm-4">
                        <img src="{{ url('landing_page/img/ss2.png') }}" alt="">
                    </div>
                    <!-- End single ScreenShot -->
                    <div class="swiper-slide col-sm-4">
                        <img src="{{ url('landing_page/img/ss3.png') }}" alt="">
                    </div>
                    <!-- End single ScreenShot -->
                    <div class="swiper-slide col-sm-4">
                        <img src="{{ url('landing_page/img/ss4.png') }}" alt="">
                    </div>
                    <!-- End single ScreenShot -->
                    <div class="swiper-slide col-sm-4">
                        <img src="{{ url('landing_page/img/ss5.png') }}" alt="">
                    </div>

                    <!-- End single ScreenShot -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next">
                    <i class="icofont-stylish-right"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="icofont-stylish-left"></i>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========  Screenshots End ========== -->
    <!-- ==========  Pricing Start ========== -->
    <section id="pricing" class="p-80px-tb parallax bg-overlay opacity-5"
        style="background-image:url(img/pricing-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="section-title text-center m-50px-b">
                        <h2>Pricing Plans</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing text-center m-10px-tb">
                        <div class="pricing-head p-60px-lr lg-p-30px-lr">
                            <div class="pricing-head-text">
                                <div class="package-price">
                                    <span class="price">$17</span><span class="validity">/ Month</span>
                                </div>
                                <div class="package-name">
                                    <h5>Starter</h5>
                                </div>
                            </div>
                            <span class="wave"></span>
                            <span class="wave"></span>
                            <span class="wave"></span>
                        </div>
                        <div class="pricing-body p-60px-lr lg-p-30px-lr">
                            <ul>
                                <li>5 Projects</li>
                                <li>5 GB of Storage</li>
                                <li>Up to 10 Users</li>
                                <li>Reliable Backup</li>
                                <li>Security Suite</li>
                            </ul>
                        </div>
                        <div class="pricing-footer p-60px-lr lg-p-30px-lr">
                            <a href="#" class="btn btn-default btn-filled animated-btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing text-center featured-pricing m-10px-tb">
                        <div class="pricing-head p-60px-lr lg-p-30px-lr">
                            <div class="pricing-head-text">
                                <div class="package-price">
                                    <span class="price">$34</span><span class="validity">/ Month</span>
                                </div>
                                <div class="package-name">
                                    <h5>Popular</h5>
                                </div>
                            </div>
                            <span class="wave"></span>
                            <span class="wave"></span>
                            <span class="wave"></span>
                        </div>
                        <div class="pricing-body p-60px-lr lg-p-30px-lr">
                            <ul>
                                <li>53 Projects</li>
                                <li>13 GB of Storage</li>
                                <li>Up to 109 Users</li>
                                <li>Reliable Backup</li>
                                <li>Security Suite</li>
                            </ul>
                        </div>
                        <div class="pricing-footer p-60px-lr lg-p-30px-lr">
                            <a href="#" class="btn btn-default btn-filled animated-btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing text-center m-10px-tb">
                        <div class="pricing-head p-60px-lr lg-p-30px-lr">
                            <div class="pricing-head-text">
                                <div class="package-price">
                                    <span class="price">$99</span><span class="validity">/ Month</span>
                                </div>
                                <div class="package-name">
                                    <h5>Premium</h5>
                                </div>
                            </div>
                            <span class="wave"></span>
                            <span class="wave"></span>
                            <span class="wave"></span>
                        </div>
                        <div class="pricing-body p-60px-lr lg-p-30px-lr">
                            <ul>
                                <li>Unlimited Projects</li>
                                <li>215 GB of Storage</li>
                                <li>Unlimited Users</li>
                                <li>Reliable Backup</li>
                                <li>Security Suite</li>
                            </ul>
                        </div>
                        <div class="pricing-footer p-60px-lr lg-p-30px-lr">
                            <a href="#" class="btn btn-default btn-filled animated-btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
            </div>
        </div>
    </section>
    <!-- ==========  Pricing End ========== -->
    <!-- ==========  Featured 1 Start ========== -->
    <section id="feature1" class="p-100px-tb featured-1 position-relative">
        <div class="bordered-circle2"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 md-m-50px-b">
                    <img class="moveUpDown" src="{{ asset('landing_page/img/experience.png') }}" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="section-title">
                        <h2 class="tlt1">Experience Awsome, <br>Modern App</h2>
                    </div>
                    <p>Now for manners use has company believe parlors. Least nor party who wrote while did. Excuse
                        formed as is agreed admire so on result parish. Put use set uncommonly announcing and
                        travelling. Allowance sweetness direction to as necessary. Principle oh explained excellent do
                        my suspected conveying in. Excellent you did therefore perfectly supposing described. </p>
                    <a href="#" class="btn btn-default btn-filled animated-btn">More detail</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========  Featured 1 End ========== -->
    <!-- ==========  Featured 2 Start ========== -->
    <section id="feature2" class="p-100px-tb sm-p-50px-tb featured-2 position-relative">
        <div class="bordered-circle2"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Download App</h2>
                    <p>Over fact all son tell this any his. No insisted confined of weddings to returned to debating
                        rendered. Keeps order fully so do party means young. Table nay him jokes quick.</p>
                    <div class="apps-buttons">
                        <a href="#" class="btn btn-default btn-filled  animated-btn"><i
                                class="icofont-brand-android-robot"></i> Available on<br>Google store</a>
                        <a href="#" class="btn btn-default  btn-filled animated-btn"><i
                                class="icofont-brand-apple"></i> Available on<br>Apple store</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="position-relative featured-mockup2">
                        <img class="phone-1" src="{{ asset('landing_page/img/6mockup1.png') }}" alt="">
                        <img class="phone-2" src="{{ asset('landing_page/img/6mockup2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========  Featured 2 End ========== -->
    <!-- ==========  Latest Blog Start ========== -->
    <section id="blog" class="p-100px-tb gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="section-title text-center m-50px-b">
                        <h2>Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row  justify-content-md-center">
                <div class="col-lg-4 col-md-6">
                    <article class="page-content">
                        <div class="blog-post-img">
                            <img src="{{ asset('landing_page/img/blog/4.jpg') }}" alt="">
                            <div class="blog-tag">
                                <a href="#">Apps UI</a>
                            </div>
                        </div>
                        <!-- End feature image -->
                        <div class="blog-content">
                            <div class="post-meta m-15px-b">
                                <ul>
                                    <li><a href="#"><i class="icofont-user-alt-5"></i> Appiya</a></li>
                                    <li><a href="#"><i class="icofont-calendar"></i> 08 Nov. 2022</a></li>
                                    <li><a href="#"><i class="icofont-speech-comments"></i> 05 Comments</a></li>
                                </ul>
                            </div>
                            <!-- End post meta -->
                            <a href="single-blog.html">
                                <h2 class="m-25px-b">Top inspirational apps UI for you 2019</h2>
                            </a>
                            <p>Far curiosity incommode now led smallness allowance. Favour bed assure son things yet.
                                She consisted consulted elsewhere happiness disposing household any old the. Widow downs
                                you new shade drift hopes small.</p>
                            <a class="read-more" href="single-blog.html">Read more</a>
                        </div>
                    </article>
                </div>
                <!-- End Single Blog -->
                <div class="col-lg-4 col-md-6">
                    <article class="page-content">
                        <div class="blog-post-img">
                            <img src="{{ asset('landing_page/img/blog/5.jpeg') }}" alt="">
                            <div class="blog-tag">
                                <a href="#">GooglePlay</a>
                            </div>
                        </div>
                        <!-- End feature image -->
                        <div class="blog-content">
                            <div class="post-meta m-15px-b">
                                <ul>
                                    <li><a href="#"><i class="icofont-user-alt-5"></i> Appiya</a></li>
                                    <li><a href="#"><i class="icofont-calendar"></i> 08 Nov. 2022</a></li>
                                    <li><a href="#"><i class="icofont-speech-comments"></i> 05 Comments</a></li>
                                </ul>
                            </div>
                            <!-- End post meta -->
                            <a href="single-blog.html">
                                <h2 class="m-25px-b">Trendy Google apps you should check 2019</h2>
                            </a>
                            <p>Far curiosity incommode now led smallness allowance. Favour bed assure son things yet.
                                She consisted consulted elsewhere happiness disposing household any old the. Widow downs
                                you new shade drift hopes small.</p>
                            <a class="read-more" href="single-blog.html">Read more</a>
                        </div>
                    </article>
                </div>
                <!-- End Single Blog -->
                <div class="col-lg-4 col-md-6">
                    <article class="page-content">
                        <div class="blog-post-img">
                            <img src="{{ asset('landing_page/img/blog/1.jpeg') }}" alt="">
                            <div class="blog-tag">
                                <a href="#">AppFeatures</a>
                            </div>
                        </div>
                        <!-- End feature image -->
                        <div class="blog-content">
                            <div class="post-meta m-15px-b">
                                <ul>
                                    <li><a href="#"><i class="icofont-user-alt-5"></i> Appiya</a></li>
                                    <li><a href="#"><i class="icofont-calendar"></i> 08 Nov. 2022</a></li>
                                    <li><a href="#"><i class="icofont-speech-comments"></i> 05 Comments</a></li>
                                </ul>
                            </div>
                            <!-- End post meta -->
                            <a href="single-blog.html">
                                <h2 class="m-25px-b">Booming news: Google play apps has been relese</h2>
                            </a>
                            <p>Far curiosity incommode now led smallness allowance. Favour bed assure son things yet.
                                She consisted consulted elsewhere happiness disposing household any old the. Widow downs
                                you new shade drift hopes small.</p>
                            <a class="read-more" href="single-blog.html">Read more</a>
                        </div>
                    </article>
                </div>
                <!-- End Single Blog -->
            </div>
        </div>
    </section>
    <!-- ==========  Latest Blog End ========== -->
    <!-- ==========  Contact Start ========== -->
    <section id="contact" class="p-80px-tb">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="section-title text-center m-50px-b">
                        <h2>Get in touch</h2>
                    </div>
                </div>
            </div>
            <div class="row row-eq-height">
                <div class="col-lg-4 col-md-6 contact-address p-30px">
                    <div class="address-box text-center p-15px m-15px-b">
                        <i class="icofont-google-map"></i>
                        <h5>Address</h5>
                        <p>49 Park Avenue,<br>Newyork , NY 10016</p>
                    </div>
                    <div class="address-box text-center p-15px m-15px-b">
                        <i class="icofont-phone"></i>
                        <h5>Phone</h5>
                        <p>0123 45600 7892<br>0027 11566 0124</p>
                    </div>
                    <div class="address-box text-center p-15px">
                        <i class="icofont-envelope-open"></i>
                        <h5>Email Address</h5>
                        <p>info@domainname.com<br>contact@domainname.com</p>
                    </div>
                </div>
                <!-- End contact Address -->
                <div class="col-lg-8 col-md-6 contact-form p-30px">
                    <h3 class="m-25px-b">Ask any kind of questions</h3>
                    <p class="m-25px-b">To shewing another demands to. Marianne property cheerful informed at striking
                        at. Clothes parlors however by cottage on.</p>
                    <form id="contact-form" method="post" action="php/sendmail.php">
                        <div class="message">
                            <p class="email-loading alert alert-warning"><img
                                    src="{{ asset('landing_page/img/loading.gif') }}
                               alt="">&nbsp;&nbsp;&nbsp;Sending...
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </p>
                            <p class="email-success alert alert-success"><i class="icon icon-icon-check-alt2"></i>
                                Your quote has successfully been sent. <button type="button" class="close"
                                    data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </p>
                            <p class="email-failed alert alert-danger"><i class="icon icon-icon-close-alt2"></i>
                                Something went wrong! <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </p>
                        </div>
                        <div class=" mb13">
                            <input name="name" class="contact-name" id="contact-name" type="text"
                                placeholder="Your Name" required="">
                        </div>
                        <div class="mb13">
                            <input name="email" class="contact-email" id="contact-email" type="email"
                                placeholder="Your Email" required="">
                        </div>
                        <div class="mb13">
                            <input name="subject" class="contact-subject" id="contact-subject" type="text"
                                placeholder="Subject" required="">
                        </div>
                        <div class="mb30">
                            <textarea name="message" class="contact-message" id="contact-message" placeholder="Your Message" required=""></textarea>
                        </div>
                        <button class="btn btn-default btn-filled animated-btn">Send Now</button>
                    </form>
                </div>
                <!-- End Contact Form -->
            </div>
        </div>
    </section>
    <!-- ==========  Contact End ========== -->
@endsection
