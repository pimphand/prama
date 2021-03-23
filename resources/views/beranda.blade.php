@extends('temp.template')
@section('content')
    <section id="hero">
        <div class="container hero-text col-lg-3">
            <h1>MITRA <span>PENGIRIMAN </span><br>TERPERCAYA <span>ANDA</span></h1>
        </div>
    </section>

    <main id="main">
        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title ">
                    <h3 class="komitmen">BEKERJA DENGAN</h3>
                    <h1 class="komitmen ">INTEGRITAS</h1>
                    <div class="row">
                        <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="100">
                            <img src="assets/img/INTERGRITAS 2.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-8 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-delay="100">
                            <div>
                                <h6>Demi menjaga Integritas dan pelayanan </h6>
                                <h6>secara professional, Prama Logistic</h6>
                                <h6>selalu <span class="komitmen">berinovasi dalam teknologi</span> dan</h6>
                                <h6><span class="komitmen">menjaga kualitas layanan</span> untuk anda</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Featured Services Section ======= -->
        <section class="urban">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 d-flex align-items-center mb_30" data-aos="zoom-out"
                        data-aos-delay="100">
                        <div class="content">
                            <div class="content-overlay"></div>
                            <img class="content-image" src="{{ url('assets/img/EASY URBAN ACCESS SECTION PNG.png') }}">
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-text">EASY URBAN ACCESS SECTION</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 d-flex align-items-center mb_30" data-aos="zoom-out"
                        data-aos-delay="100">
                        <div class="content">
                            <div class="content-overlay"></div>
                            <img class="content-image"
                                src="{{ url('assets/img/TRACKING MANAGEMENT SYSTEM SECTION PNG.png') }}">
                            <div class="content-details fadeIn-bottom">
                                <h3>TRACKING MANAGEMENT SYSTEM SECTION</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Services Section -->
        <section class="order_mudah">
            <div class="testimonials_beranda">
                <div data-aos="zoom-in">
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <div class="ordermudah">
                                <img src="assets/img/ORDER PASTI MUDAH.png">
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 align-items-center">
                                    <h3>Easy & Fast Registration</h3>
                                    <p>Pemesanan yang mudah dan cepat. Invoice list driver dan nopol armada dalam 30 Menit
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="easyfast">
                                        <img src="assets/img/EASY REGISTRATION IMAGE.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 align-items-center">
                                    <h3>GPS TRACKING </h3>
                                    <p>Mengetahui lokasi secara akurat armada secara Real-time melalui Genggaman</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="gpstracking">
                                        <img src="assets/img/GPS TRACKING IMAGE.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 align-items-center">
                                    <h3>ON TIME DELIVERY </h3>
                                    <p>Pengiriman Disiplin dan Tepat Waktu</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="timdelivery">
                                        <img src="assets/img/ON TIME DELIVERY IMAGE.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Featured Services Section ======= -->

        <section id="featured-services_komitmen" class="featured-services_komitmen">
            <div class="container">
                <h1 class="komitmen-kami mb_30">KOMITMEN KAMI</h1>
                <div class="row">
                    <div class="col-md-12 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon" style="text-align: center;">
                                <image src="assets/img/HELEM 2.png" class="komitmen_image" alt=""></i>
                            </div>
                            <h1 class="description">Mengutamakan Keselamatan</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon" style="text-align: center;">
                                <image src="assets/img/TRUK 2.png" class="komitmen_image" alt=""></i>
                            </div>
                            <h1 class="description">Armada Dalam Kondisi Prima</h1>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon" style="text-align: center;">
                                <image src="assets/img/TAG 2.png" class="komitmen_image" alt=""></i>
                            </div>
                            <h2 class="description">Penawaran Dengan Harga Terbaik</h2>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon" style="text-align: center;">
                                <image src="assets/img/DIS 2.png" class="komitmen_image" alt=""></i>
                            </div>
                            <h1 class="description">Menerapkan Seluruh Aturan</h1>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg-armada">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h3>Memiliki Puluhan Armada yang prima
                        dan siap mengirim ke seluruh
                        wilayah Jawa dan Bali</h3>
                    <p>Prama Logistic telah melayani jasa pengiriman logistic di wilayah Jawa, Madura dan Bali
                        Mitra kami tersebar di berbagai wilayah dengan keberagaman jenis komoditas diantaranya alat
                        kontruksi, elektrikal, meubel, konveksi, palawija, es, bahan bangunan, bibit, obat-obatan dll.
                        Kami akan terus menambah jaringan pengiriman kami ke seluruh wilayah di Indonesia </p>
                </div>
            </div>
        </section><!-- End About Section -->
        <section class="map" id="about">
            <div class="col-md-12 col-lg-12 text-center" style="text-align: center;">
                <image src="assets/img/MAPS.png" class="map_image" alt=""></i>
            </div>
        </section>
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">
                <h1 class="komitmen-kami">MITRA KERJA</h1>
                <div class="row " style="margin-bottom: 3%;">
                    <div class="col-md-3 col-lg-3 align-items-stretch mb-5 mb-lg-0 text-center">
                        <div data-aos="fade-up" data-aos-delay="100">
                            <div style="text-align: center;">
                                <image src="assets/img/PANCARAN.png" alt=""></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 align-items-stretch mb-5 mb-lg-0 text-center">
                        <div data-aos="fade-up" data-aos-delay="100">
                            <div style="text-align: center;">
                                <image src="assets/img/SBI.png" alt=""></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 align-items-stretch mb-5 mb-lg-0 text-center">
                        <div data-aos="fade-up" data-aos-delay="100">
                            <div style="text-align: center;">
                                <image src="assets/img/MAESA GROUP.png" alt=""></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 align-items-stretch mb-5 mb-lg-0 text-center">
                        <div data-aos="fade-up" data-aos-delay="100">
                            <div style="text-align: center;">
                                <image src="assets/img/ARTHAYA.png" alt=""></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3 col-lg-3 align-items-stretch mb-5 mb-lg-0 text-center">
                        <div data-aos="fade-up" data-aos-delay="100">
                            <div style="text-align: center;">
                                <image src="assets/img/SM.png" alt=""></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 align-items-stretch mb-5 mb-lg-0 text-center">
                        <div data-aos="fade-up" data-aos-delay="100">
                            <div style="text-align: center;">
                                <image src="assets/img/AYAM.png" alt=""></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 align-items-stretch mb-5 mb-lg-0 text-center">
                        <div data-aos="fade-up" data-aos-delay="100">
                            <div style="text-align: center;">
                                <image src="assets/img/PMP.png" alt=""></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3 align-items-stretch mb-5 mb-lg-0 text-center">
                        <div data-aos="fade-up" data-aos-delay="100">
                            <div style="text-align: center;">
                                <image src="assets/img/PANDU.png" alt=""></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Featured Services Section -->
        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <div class="icon" style="text-align: center; margin-bottom: 2%;">
                                <image src="assets/img/PMP.png" class="mitra_image" alt=""></i>
                            </div>
                            <h3><span style="color: #FE3F00;">"</span>Pabrik Es PMP Group<span
                                    style="color: #FE3F00;">"</span></h3>

                            <p align="center" style="font-size: 11px;">Prama Logistic telah melayani jasa pengiriman
                                logistic di wilayah Jawa, Madura dan Bali
                                Mitra kami tersebar di berbagai wilayah dengan keberagaman jenis komoditas diantaranya alat
                                kontruksi, elektrikal, meubel, konveksi, palawija, es, bahan bangunan, bibit, obat-obatan
                                dll.
                                Kami akan terus menambah jaringan pengiriman kami ke seluruh wilayah di Indonesia </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <div class="icon" style="text-align: center; margin-bottom: 1%;">
                                <image src="assets/img/PANDU.png" class="mitra1_image" alt=""></i>
                            </div>
                            <h3><span style="color: #FE3F00;">"</span>PANDU Distributor<span
                                    style="color: #FE3F00;">"</span></h3>

                            <p align="center" style="font-size: 11px;">Prama Logistic telah melayani jasa pengiriman
                                logistic di wilayah Jawa, Madura dan Bali
                                Mitra kami tersebar di berbagai wilayah dengan keberagaman jenis komoditas diantaranya alat
                                kontruksi, elektrikal, meubel, konveksi, palawija, es, bahan bangunan, bibit, obat-obatan
                                dll.
                                Kami akan terus menambah jaringan pengiriman kami ke seluruh wilayah di Indonesia </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <div class="icon" style="text-align: center; margin-bottom: 1%;">
                                <image src="assets/img/ARTHAYA.png" class="komitmen_image" alt=""></i>
                            </div>
                            <h3><span style="color: #FE3F00;">"</span>Bank Arthaya<span style="color: #FE3F00;">"</span>
                            </h3>

                            <p align="center" style="font-size: 11px;">Prama Logistic telah melayani jasa pengiriman
                                logistic di wilayah Jawa, Madura dan Bali
                                Mitra kami tersebar di berbagai wilayah dengan keberagaman jenis komoditas diantaranya alat
                                kontruksi, elektrikal, meubel, konveksi, palawija, es, bahan bangunan, bibit, obat-obatan
                                dll.
                                Kami akan terus menambah jaringan pengiriman kami ke seluruh wilayah di Indonesia </p>
                        </div>
                    </div>
                </div>
        </section><!-- End Pricing Section -->
    </main>
@endsection
