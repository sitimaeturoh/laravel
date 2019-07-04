@extends('wisata/home')
@section('main')
    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img" style="background-image: url({{asset('akame/img/bg-img/tegal3.jpg')}});">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Sistem Informasi Wisata<br> </h2>
                                    <p data-animation="fadeInUp" data-delay="400ms">“Sistem Informasi Wisata merupakan sebuah website yang berisi sekumpulan artikel tentang wisata yang digunakan untuk melihat wisata yang ada diJawaTengah”</p>
                                    <a href="#" class="btn akame-btn" data-animation="fadeInUp" r data-delay="700ms">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img" style="background-image: url({{asset('akame/img/bg-img/gunung.jpg')}})">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Sistem Informasi Wisata<br> </h2>
                                    <p data-animation="fadeInUp" data-delay="400ms">“Sistem Informasi Wisata merupakan sebuah website yang berisi sekumpulan artikel tentang wisata yang digunakan untuk melihat wisata yang ada diJawaTengah ”</p>
                                    <a href="#" class="btn akame-btn active" data-animation="fadeInUp" data-delay="700ms">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

   

    <!-- Border -->
    <div class="container">
        <div class="border-top mt-3"></div>
    </div>

    <!-- Our Service Area Start -->
    <section class="akame-service-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Our Services</h2>
                        <p>The House of Hair Salon &amp; Spa, incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                        <img src="{{asset('akame/img/bg-img/tegal3.jpg')}}" alt="">
                        <h5>Pengunungan</h5>
                        <p>  Slawi Tegal, Jawa Tengah</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="400ms">
                        <img src="{{asset('akame/img/bg-img/tegal2.jpg')}}" alt="">
                        <h5>Pantai</h5>
                        <p>Kota Tegal, Jawa Tengah</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="600ms">
                        <img src="{{asset('akame/img/bg-img/smr4.jpg')}}" alt="">
                        <h5>Candi</h5>
                        <p> Semarang, Jawa tengah</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="800ms">
                        <img src="{{asset('akame/img/bg-img/tegal7.jpg')}}" alt="">
                        <h5>Pengunungan</h5>
                        <p>Bumijawa, Jawa Tengah</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Service Area End -->

   
  

   

    

    <!-- Border -->
    <div class="container">
        <div class="border-top mt-3"></div>
    </div>

    <!-- Blog Area Start -->
    <section class="akame-blog-area bg-gray section-padding-80-0 clearfix">
       <!--  <div class="akame-cta-area bg-gray"> -->
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Latest News</h2>
                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        <!-- </div> -->

            <div class="row">

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('akame/img/bg-img/pml5.jpg')}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Nina Dobrev Got a Major Haircut and Doesn't Look Like Nina Dobrev.</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> September 27, 2018</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>Most people recognize the CFDA Awards for its slew of perfect gowns and skin-tight.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-80 wow fadeInUp" data-wow-delay="400ms">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('akame/img/bg-img/pwt5.jpg')}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Finally: How to Make Your Agressively Straight Hair Hold a Curl</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> September 27, 2018</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>So I sought out an actual professional, i.e. celeb hairstylist Justine Marjan.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-80 wow fadeInUp" data-wow-delay="600ms">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('akame/img/bg-img/smr10.jpg')}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Yes, Emilia Clarke Just Cut Off All Her Hair Into a Tiny Bob</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> September 27, 2018</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>Last night, Clarke appeared on Late Night with Seth Meyers, wearing a charcoal blazer.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Blog Area End -->

    
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

                <!-- Single Footer Widget -->
                
                        <!-- Widget Title -->
                        
                        <!-- Open Times -->
                      
                        

                        

                <!-- Single Footer Widget -->
                

                <!-- Social Info -->
                       
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->
    <!-- jQuery -->
    

@stop