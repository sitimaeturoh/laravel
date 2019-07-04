@extends('wisata/home')
@section('main')
<!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>WISATA</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wisata</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- News Area Start -->
    <section class="akame-news-area section-padding-0-80">
        <div class="container">
            <div class="row mx-sm-n4 akame-blog-masonary">

                <!-- Single Blog Item -->
                <div class="col-12 col-sm-6 col-lg-4 px-4 akame-blog-masonary-item mb-50 wow fadeInUp" data-wow-delay="200ms">
                    <!-- Single Post Area -->
                    <div class="single-post-area">
                        <div class="post-thumbnail">
                            <a href="{{url('wisata/detailwisata')}}"><img src="{{asset('akame/img/bg-img/purb1.jpg')}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Flower Garden Kutabawa Purbalingga</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> Maret 27, 2019</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>Terletak di kaki gunung Slamet, Kabupaten Purbalingga menawarkan dataran tinggi berupa wisata alam pegunungan mengagumkan</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Item -->

                <!-- Single Blog Item -->
                <div class="col-12 col-sm-6 col-lg-4 px-4 akame-blog-masonary-item mb-50 wow fadeInUp" data-wow-delay="800ms">
                    <!-- Single Post Area -->
                    <div class="single-post-area">
                        <div class="post-thumbnail">
                            <a href="{{url('wisata/detailwisata2')}}"><img src="{{asset('akame/img/bg-img/smr10.jpg')}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Ayana Gedongsongo Semarang</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> September 27, 2018</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>Wisata berfoto dan selfie di Ayana Gedongsongo dengan udara sejuk serta tersedianya spot foto instagramable memberikan suasana yang pas untuk mengabadika momen bersama keluarga.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Item -->
                <div class="col-12 col-sm-6 col-lg-4 px-4 akame-blog-masonary-item mb-50 wow fadeInUp" data-wow-delay="200ms">
                    <!-- Single Post Area -->
                    <div class="single-post-area">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('akame/img/bg-img/brebes2.jpg')}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Wisata  Brebes "Dadablangan Malahayu"</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> September 27, 2018</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>potensi wisata yang bisa dikembangkan di Kabupaten Brebes, salah satunya di Desa Malahayu Kecamatan Banjarharjo. Berada di kawasan Dadablangan</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Item -->
                <div class="col-12 col-sm-6 col-lg-4 px-4 akame-blog-masonary-item mb-50 wow fadeInUp" data-wow-delay="500ms">
                    <!-- Single Post Area -->
                    <div class="single-post-area">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('akame/img/bg-img/pwt1.jpg')}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Hundreds of migrant children moved in the middle of the night.</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> September 27, 2018</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>About 1600 children have been relocated to the unregulated tent city.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Item -->
                <div class="col-12 col-sm-6 col-lg-4 px-4 akame-blog-masonary-item mb-50 wow fadeInUp" data-wow-delay="800ms">
                    <!-- Single Post Area -->
                    <div class="single-post-area">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('akame/img/bg-img/smr1.jpg')}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">How the media encourages – and sustains – political warfare</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> September 27, 2018</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>The quiet consumption of news can sustain a polarized political environment.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Item -->
                <div class="col-12 col-sm-6 col-lg-4 px-4 akame-blog-masonary-item mb-50 wow fadeInUp" data-wow-delay="200ms">
                    <!-- Single Post Area -->
                    <div class="single-post-area">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('akame/img/bg-img/smr3.jpg')}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">World’s Most Expensive Home Hits Market for €1 Billion</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> September 27, 2018</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>World’s Most Expensive Home Hits Market for €1 Billion</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Item -->
                <div class="col-12 col-sm-6 col-lg-4 px-4 akame-blog-masonary-item mb-50 wow fadeInUp" data-wow-delay="500ms">
                    <!-- Single Post Area -->
                    <div class="single-post-area">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('akame/img/bg-img/tegal2.jpg')}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">Kavanaugh hearing: alleged sexual offenders get job anyways.</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> September 27, 2018</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>Kavanaugh hearing: alleged sexual offenders get job anyways.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Item -->
                <div class="col-12 col-sm-6 col-lg-4 px-4 akame-blog-masonary-item mb-50 wow fadeInUp" data-wow-delay="800ms">
                    <!-- Single Post Area -->
                    <div class="single-post-area">
                        <div class="post-thumbnail">
                            <a href="single-blog.html"><img src="{{asset('akame/img/bg-img/purb5.jpg')}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <a href="#" class="post-title">“Fox &amp; Friends” host says Brett Kavanaugh is a victim of racial.</a>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="icon_clock_alt"></i> September 27, 2018</a>
                                <a href="#" class="post-comments"><i class="icon_chat_alt"></i> 10</a>
                            </div>
                            <p>Most people recognize the CFDA Awards for its slew of perfect gowns and skin-tight.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn akame-btn active mt-30">Load More</a>
                </div>
            </div>
        </div>
    </section>

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

@stop