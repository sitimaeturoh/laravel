  @extends('wisata/home')
@section('main')

 <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Dokumentasi</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dokumentasi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Portfolio Area Start -->
    <section class="akame-portfolio section-padding-0-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-menu text-center mb-50">
                        <button class="btn active" data-filter="*">All</button>
                        <button class="btn" data-filter=".haircuts">Tegal</button>
                        <button class="btn" data-filter=".coloring">Brebes</button>
                        <button class="btn" data-filter=".barber">Pemalang</button>
                        <button class="btn" data-filter=".shaving">Purbalingga</button>
                        <button class="btn" data-filter=".hairstyle">Purwokerto</button>
                        <button class="btn" data-filter=".massage">Semarang</button>
                    </div>
                </div>
            </div>

            <div class="row akame-portfolio-area">
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item haircuts mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/54.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/tegal1.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item haircuts mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/tegal2.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/tegal2.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item haircuts mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/tegal3.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/tegal3.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item haircuts mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/tegal4.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/tegal4.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item haircuts mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/tegal5.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/tegal5.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item haircuts mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/54.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/54.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item coloring mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/brebes.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/brebes.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item coloring mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/brebes1.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/brebes1.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item coloring mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/brebes2.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/brebes2.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item coloring mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pwt3.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/brebes3.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


            <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item coloring mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/brebes4.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/brebes4.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item coloring mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/brebes5.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/brebes5.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item coloring mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/brebes6.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/brebes6.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>




                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item barber mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pml1.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pml1.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item barber mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pml2.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pml2.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item barber mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pml3.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pml3.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item barber mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pml4.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pml4.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item barber mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pml5.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pml5.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item shaving mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/purb1.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/purb1.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item shaving mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/purb2.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/purb2.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item shaving mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/purb3.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/purb3.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item hairstyle mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pwt1.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pwt1.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item hairstyle mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pwt2.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pwt2.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item hairstyle mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pwt3.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pwt3.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item hairstyle mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pwt4.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pwt4.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>


                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item hairstyle mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pwt5.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pwt5.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item hairstyle mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pwt6.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pwt6.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item hairstyle mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/pwt7.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/pwt7.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item massage mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/smr1.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/sm1.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item massage mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/smr9.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/smr9.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item massage mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/smr5.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/smr5.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item massage mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/smr10.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/smr10.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item massage mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="{{asset('akame/img/bg-img/smr11.jpg')}}" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="{{asset('akame/img/bg-img/smr11.jpg')}}" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="view-all-btn mt-30 text-center">
                        <a href="portfolio.html" class="btn akame-btn">View All Dokumentasi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Area End -->

    <!-- Border -->
    <div class="container">
        <div class="border-top"></div>
    </div>

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
                            <a href="https://www.facebook.com/siti.maeturohh" class="facebook"><i class="fa fa-facebook"></i></a>
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

    <!-- Footer Area End -->

    @stop