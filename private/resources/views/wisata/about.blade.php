@extends('wisata/home')
@section('main')

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Akame About Area Start -->
    <section class="akame--about--area">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12 col-lg-6">
                    <div class="section-heading text-right mb-80 pr-5 pt-3">
                        <!-- <p>New York • Since 2004</p> -->
                        <h2>Sistem Informasi Wisata</h2>
                        <span>MaySM</span>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about--us--content mb-80">
                        <p>Sistem Informasi Wisata merupakan sebuah website yang berisi sekumpulan artikel tentang wisata yang digunakan untuk melihat wisata yang ada diJawaTengah</p>
                        <p> Nama : Siti Maeturoh</p>
                        <p> Nim : 16090063 </p>
                        <p> Kelas : 6B </p>
                        <img src="{{asset('akame/img/bg-img/gue.jpg')}}" alt="">
                        <h4>Siti Maeturoh</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akame About Area End -->

    <!-- Akame Video Area Start -->
    <div class="akame--video--area">
        <div class="container">

            <!-- Video Content Area -->
            <div class="row">
                <div class="col-12">
                    <div class="video-content-area mb-80">
                        <img src="{{asset('akame/img/bg-img/tegal18.jpg')}}" alt="">
                        <a href="https://www.youtube.com/watch?v=lHvbleCibYc" class="video-play-btn wow bounceInDown" data-wow-delay="200ms"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>

    <!-- Akame Video Area End -->

    <!-- Testimonial Area Start -->
    <section class="testimonial-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="testimonial-slides owl-carousel">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <img src="img/core-img/quote.png" alt="">
                            <p>BlueFresh is so simple, it's so easy to use. And from the customer's standpoint it's very intuitive, the platform is pretty much unlimited features!</p>
                            <div class="ratings-name d-flex align-items-center justify-content-center">
                                <div class="ratings mr-3">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5>Jackson Nash</h5>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <img src="img/core-img/quote.png" alt="">
                            <p>BlueFresh is so simple, it's so easy to use. And from the customer's standpoint it's very intuitive, the platform is pretty much unlimited features!</p>
                            <div class="ratings-name d-flex align-items-center justify-content-center">
                                <div class="ratings mr-3">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5>Jackson Nash</h5>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <img src="img/core-img/quote.png" alt="">
                            <p>BlueFresh is so simple, it's so easy to use. And from the customer's standpoint it's very intuitive, the platform is pretty much unlimited features!</p>
                            <div class="ratings-name d-flex align-items-center justify-content-center">
                                <div class="ratings mr-3">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h5>Jackson Nash</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->

    <!-- Border -->
    <div class="container">
        <div class="border-top"></div>
    </div>



   

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-8 ">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="{{asset('akame/img/core-img/logo3.png')}}" alt=""></a>

                        <p class="mb-30">Sistem Informasi Wisata merupakan sebuah website yang berisi sekumpulan artikel tentang wisata yang digunakan untuk melihat wisata yang ada diJawaTengah </p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Sistem Informasi Wisata<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.instagram.com/st.maeturoh/?hl=id" target="_blank">MaySM</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                  <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact Us</h4>

                        <!-- Contact Address -->
                        <div class="contact-address">
                            
                            <p>E-mail: myturoh@gmail.com</p>
                            <div class="social-info">
                            <a href="https://www.facebook.com/siti.maeturohh" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                            
                        </div>


                    </div>
                </div>

                
                    </div>
                </div>

            </div>
        </div>
    </footer>
    
    <!-- Footer Area End -->

    
@stop
