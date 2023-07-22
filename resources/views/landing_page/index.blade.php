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
                    <h2 class="text-capitalize m-25px-b">Liburan Tenang<br>Hatipun Senang!</h2>
                    <p class="m-25px-b">F-Travel adalah aplikasi yang membantu anda dalam merencanakan liburan anda
                        dengan mudah dan menyenangkan.
                    </p>
                    <div class="hero-btn-wrapper">
                        <a href="{{ url('trip') }}" class="btn btn-default animated-btn rounded">Lihat Perjalanan</a>
                    </div>
                </div>
                <div class="col-md-6 p-100px-t p-50px-b md-p-10px-t">
                    <img class="hero-mock" src="{{ asset('landing_page/img/hero-mock.png') }}" alt="Hero mockup" />
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Hero End ========== -->

    <!-- ==========  Featured 1 Start ========== -->
    <section id="feature1" class="p-100px-tb featured-1 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 md-m-50px-b">
                    <img class="moveUpDown" src="{{ asset('landing_page/img/experience.png') }}" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="section-title">
                        <h2 class="tlt1">Aplikasi Travel BUS <br>Terbaik di Indonesia!</h2>
                    </div>
                    <p>
                        Dengan aplikasi inovatif yang dirancang khusus untuk memudahkan perjalanan dengan bus di seluruh
                        Indonesia. Dapatkan pengalaman perjalanan yang nyaman dan lancar dengan notifikasi perjalanan yang
                        terkini serta peta interaktif untuk mengikuti rute bus secara akurat. Nikmati penawaran promosi dan
                        diskon menarik, serta layanan pelanggan 24/7 yang siap membantu Anda.
                    </p>
                    <a href="#" class="btn btn-default btn-filled animated-btn">Booking perjalanan anda!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========  Featured 1 End ========== -->

    <!-- ========== Services Start ========== -->
    <section id="services" class="p-100px-tb sm-p-50px-b gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="section-title text-center m-50px-b">
                        <h2>MENGAPA F-TRAVEL?</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center p-60px lg-p-40px md-p-30px sm-p-20px m-10px-t m-10px-b">
                        <i class="icofont-law-document"></i>
                        <h4>Perjalanan Lengkap</h4>
                        <p>
                            Dengan perjalanan yang lengkap, anda dapat memilih perjalanan yang sesuai dengan kebutuhan
                        </p>
                    </div>
                </div>
                <!-- End single service -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center p-60px lg-p-40px md-p-30px sm-p-20px m-10px-t m-10px-b">
                        <i class="icofont-code"></i>
                        <h4>Harga ekonomis</h4>
                        <p>
                            Kami pastikan harga yang kami tawarkan adalah harga yang terbaik untuk anda
                        </p>
                    </div>
                </div>
                <!-- End single service -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-box text-center p-60px lg-p-40px md-p-30px sm-p-20px m-10px-t m-10px-b">
                        <i class="icofont-file-avi-mp4"></i>
                        <h4>Pesan untuk orang lain</h4>
                        <p>
                            Anda dapat memesan perjalanan untuk orang lain dengan mudah, anda bisa bersenang-senang
                        </p>
                    </div>
                </div>
                <!-- End single service -->
            </div>
        </div>
    </section>
    <!-- ========== Services End ========== -->
    <!-- ==========  How it works Start ========== -->
    <section id="how-it-works" class="p-80px-tb">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="section-title text-center m-50px-b">
                        <h2>Bagaimana cara booking?</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="how-it-box text-center p-15px-lr p-50px-tb m-10px-t m-10px-b">
                        <i class="icofont-iphone"></i>
                        <h4>Pilih Trip</h4>
                        <p>
                            Pilih trip yang anda inginkan sesuai dengan kebutuhan anda
                        </p>
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
                        <h4>Masukkan Identitas</h4>
                        <p>
                            Masukkan identitas anda dengan benar agar kami dapat menghubungi anda
                        </p>
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
                        <h4>Booking Selesai</h4>
                        <p>
                            Booking anda telah selesai, anda dapat melihat detail booking anda di halaman profile
                        </p>
                    </div>
                </div>
                <!-- End single how it works -->
            </div>
        </div>
    </section>
    <!-- ==========  How it works End ========== -->
    <!-- ==========  Latest Blog Start ========== -->
    <section id="blog" class="p-100px-tb gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="section-title text-center m-50px-b">
                        <h2>How it works</h2>
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
@endsection
