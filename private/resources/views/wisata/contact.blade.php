 @extends('wisata/home')
@section('main')

 <!-- Google Maps Start -->
    <div class="akame-google-maps-area">
        <iframe src=" <!-- Google Maps Start -->
    <div class="akame-google-maps-area">
        <iframe src="https://www.google.com/search?safe=strict&client=firefox-b-d&tbm=lcl&q=google+maps+tegal&spell=1&sa=X&ved=0ahUKEwiEnZG_xJjiAhXGvI8KHX50AEgQBQgnKAA&biw=1366&bih=654&dpr=1#rlfi=hd:;si:;mv:!1m2!1d-6.841124499999999!2d109.1591772!2m2!1d-6.9000169!2d109.075302!3m12!1m3!1d28553.412058766793!2d109.11723959999999!3d-6.8705707!2m3!1f0!2f0!3f0!3m2!1i489!2i346!4f13.1" allowfullscreen>
            
        </iframe>
    </div>
    <!-- Google Maps End -->

    <!-- Contact Information Area Start -->
    <section class="contact-information-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Single Contact Information -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <i class="icon_phone"></i>
                        <h4>Phone</h4>
                        <p>+01-3-8888-6868</p>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <i class="icon_pin"></i>
                        <h4>Address</h4>
                        <p>Iris Watson, 283 Fusce Rd,NY</p>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <i class="icon_clock"></i>
                        <h4>Open time</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-contact-information mb-80">
                        <i class="icon_mail"></i>
                        <h4>Email</h4>
                        <p>info.colorlib@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Information Area End -->

    <!-- Contact Area Start -->
    <section class="akame-contact-area bg-gray section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Leave message</h2>
                        <p>Our staff will call back later and answer your questions.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <form action="#" method="post" class="akame-contact-form border-0 p-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control mb-30" placeholder="Start the discussion..."></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn akame-btn btn-3 mt-15 active">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->

    <!-- Border -->
    <div class="container">
        <div class="border-top"></div>
    </div>

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="{{asset('akame/img/core-img/logo1.png')}}" alt=""></a>

                        <p class="mb-30">Sistem Informasi Wisata merupakan sebuah website yang berisi sekumpulan artikel tentang wisata yang digunakan untuk melihat wisata yang ada diJawaTengah </p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Sistem Informasi Wisata<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.instagram.com/st.maeturoh/?hl=id" target="_blank">MaySM</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                
                        <!-- Widget Title -->
                        
                        <!-- Open Times -->
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact Us</h4>

                        <!-- Contact Address -->
                        <div class="contact-address">
                            
                            <p>E-mail: myturoh@gmail.com</p>
                            <div class="social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                            
                        </div>


                    </div>
                </div>
                        

                        

                <!-- Single Footer Widget -->
                

                <!-- Social Info -->
                       
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    
    @stop