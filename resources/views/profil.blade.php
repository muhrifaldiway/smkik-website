@extends('layouts.front')

@section('title', 'Profil Sekolah - SMKIK Ampana Kota')

@section('content')

    <div class="breadcumb-wrapper position-relative" data-bg-src="{{ asset('assets/img/shape/breadcrumb-shep.png') }}">
        <div class="breadcumb-banner">
            <img src="{{ asset('assets/img/sekolah/S2.jpg') }}" alt="bg-banner" style="width: 100%; height: 400px; object-fit: fill; object-position: center;" />
        </div>
        <div class="breadcumb-shape">
            <img src="{{ asset('assets/img/shape/triangle-light.png') }}" alt="shape" class="jump" />
        </div>
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Profil Sekolah</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Beranda</a></li>
                            <li>Profil Kami</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about1-area position-relative overflow-hidden space" id="about-sec">
        <div class="about-shep-2 shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="0%">
            <img src="{{ asset('assets/img/shape/feature-shep-2-home-1.png') }}" alt="shape" />
        </div>
        <div class="about-shape-right shape-mockup jump-reverse" data-right="3%" data-top="2%">
            <img src="{{ asset('assets/img/shape/shape-7.png') }}" alt="" />
        </div>
        <div class="container th-container4">
            <div class="about-wrap1 position-relative z-index-2">
                <div class="row gy-60 align-items-center justify-content-center">
                    <div class="row g-4 mt-4">

                        <!-- Visi -->
                        <div class="col-md-6">
                    
                            <div class="smkik-about-card wow fadeInUp" data-wow-delay=".2s">
                    
                                <i class="fas fa-eye"></i>
                    
                                <h5>Visi Sekolah</h5>
                    
                                <p>
                                    Terwujudnya sumber daya manusia yang beriman, kreatif, mandiri, serta unggul dalam pemanfaatan Teknologi Informasi.
                                </p>
                    
                            </div>
                    
                        </div>
                    
                        <!-- Kurikulum -->
                        <div class="col-md-6">
                    
                            <div class="smkik-about-card wow fadeInUp" data-wow-delay=".3s">
                    
                                <i class="fas fa-laptop-code"></i>
                    
                                <h5>Kurikulum Berbasis Industri</h5>
                    
                                <p>
                                    Kurikulum Link & Match yang selalu diperbarui sesuai perkembangan Dunia Usaha dan Dunia Industri.
                                </p>
                    
                            </div>
                    
                        </div>
                    
                        <!-- Fasilitas -->
                        <div class="col-md-6">
                    
                            <div class="smkik-about-card wow fadeInUp" data-wow-delay=".4s">
                    
                                <i class="fas fa-building"></i>
                    
                                <h5>Fasilitas Standar DUDI</h5>
                    
                                <p>
                                    Laboratorium dan ruang praktik yang dirancang menyerupai lingkungan kerja sebenarnya.
                                </p>
                    
                            </div>
                    
                        </div>
                    
                        <!-- Bursa Kerja -->
                        <div class="col-md-6">
                    
                            <div class="smkik-about-card wow fadeInUp" data-wow-delay=".5s">
                    
                                <i class="fas fa-briefcase"></i>
                    
                                <h5>Bursa Kerja Khusus (BKK)</h5>
                    
                                <p>
                                    Menyalurkan lulusan SMKIK ke berbagai perusahaan dan mitra industri terpercaya.
                                </p>
                    
                            </div>
                    
                        </div>
                    
                        <!-- Akreditasi -->
                        <div class="col-md-12">
                    
                            <div class="smkik-about-card wow fadeInUp" data-wow-delay=".6s">
                    
                                <i class="fas fa-award"></i>
                    
                                <h5>Akreditasi & Kemitraan</h5>
                    
                                <p>
                                    Terakreditasi A berdasarkan SK BAN-S/M Nomor 1214/BAN-SM/SK/2018 serta menjalin kerja sama dengan berbagai Dunia Usaha dan Dunia Industri (DUDI).
                                </p>
                    
                            </div>
                    
                        </div>
                    
                    </div>
                    <div class="container th-container4">

                        <div class="about-wrap1 position-relative z-index-2">
                    
                            <div class="row gy-60 align-items-center justify-content-center">
                    
                                <!-- =======================
                                    CONTENT
                                ======================== -->
                                <div class="col-xl-5">
                    
                                    <div class="about-content ms-xxl-4 pe-xxl-2 me-xl-2">
                    
                                        <div class="title-area">
                    
                                            <span class="sub-title text-anim">
                                                TENTANG KAMI
                                            </span>
                    
                                            <h2 class="sec-title text-anim2 pe-xl-5 me-xl-5">
                    
                                                SMK Informatika Komputer Ampana Kota
                    
                                            </h2>
                    
                                            <p class="sec-text mt-25 mb-0 wow fadeInUp" data-wow-delay=".2s">
                    
                                                SMK Informatika Komputer Ampana Kota merupakan Sekolah Menengah Kejuruan yang berdiri sejak tahun 2005 dan berkomitmen mencetak lulusan yang kompeten, berkarakter, siap bekerja, siap melanjutkan pendidikan, serta mampu bersaing di era digital.
                    
                                            </p>
                    
                                        </div>
                    
                                        <!-- Info Card -->
                                        <div class="row g-3 mt-4">
                    
                                            <div class="col-6">
                    
                                                <div class="smkik-info-card wow fadeInUp" data-wow-delay=".3s">
                    
                                                    <i class="fas fa-eye"></i>
                    
                                                    <h5>Visi</h5>
                    
                                                    <p>
                    
                                                        Beriman, kreatif, mandiri serta unggul dalam Teknologi Informasi.
                    
                                                    </p>
                    
                                                </div>
                    
                                            </div>
                    
                                            <div class="col-6">
                    
                                                <div class="smkik-info-card wow fadeInUp" data-wow-delay=".4s">
                    
                                                    <i class="fas fa-award"></i>
                    
                                                    <h5>Akreditasi</h5>
                    
                                                    <p>
                    
                                                        Terakreditasi <strong>A</strong> sejak tahun 2018.
                    
                                                    </p>
                    
                                                </div>
                    
                                            </div>
                    
                                            <div class="col-6">
                    
                                                <div class="smkik-info-card wow fadeInUp" data-wow-delay=".5s">
                    
                                                    <i class="fas fa-laptop-code"></i>
                    
                                                    <h5>Jurusan</h5>
                    
                                                    <p>
                    
                                                        TKJ • RPL • DKV
                    
                                                    </p>
                    
                                                </div>
                    
                                            </div>
                    
                                            <div class="col-6">
                    
                                                <div class="smkik-info-card wow fadeInUp" data-wow-delay=".6s">
                    
                                                    <i class="fas fa-school"></i>
                    
                                                    <h5>Berdiri</h5>
                    
                                                    <p>
                    
                                                        Sejak Tahun 2005
                    
                                                    </p>
                    
                                                </div>
                    
                                            </div>
                    
                                        </div>
                    
                                        <!-- Button -->
                                        <div class="mt-4 wow fadeInUp" data-wow-delay=".7s">
                    
                                            <a href="{{ route('profil') }}" class="th-btn">
                    
                                                Selengkapnya Tentang SMKIK
                    
                                            </a>
                    
                                        </div>
                    
                                    </div>
                    
                                </div>
                    
                                <!-- =======================
                                    IMAGE
                                ======================== -->
                    
                                <div class="col-xl-7">
                    
                                    <div class="img-content position-relative">
                    
                                        <div class="img-box4 smkik-about-gallery">
                    
                                            <!-- Gambar Besar -->
                                            <div class="img2 reveal">
                    
                                                <img
                                                    src="{{ asset('assets/img/sekolah/p2.jpg') }}"
                                                    alt="Profil Sekolah 2">
                    
                                            </div>
                    
                                            <!-- Gambar Kecil -->
                                            <div class="img1 reveal">
                    
                                                <img
                                                    src="{{ asset('assets/img/sekolah/p1.jpg') }}"
                                                    alt="Profil Sekolah 1">
                    
                                            </div>
                    
                                            <!-- Counter -->
                                            <div class="counter-card3 wow fadeInUp smkik-about-counter" data-wow-delay=".3s">
                    
                                                <h3 class="box-number text-white">
                    
                                                    <span class="counter-number">850</span>+
                    
                                                </h3>
                    
                                                <p class="box-text text-white">
                    
                                                    Siswa Aktif Saat Ini
                    
                                                </p>
                    
                                            </div>
                    
                                        </div>
                    
                                        <!-- Shape -->
                                        <div class="shape-mockup jump" data-right="26%" data-top="0%">
                    
                                            <img
                                                src="{{ asset('assets/img/shape/about-3-2.png') }}"
                                                alt="Stadum">
                    
                                        </div>
                    
                                    </div>
                    
                                </div>
                    
                            </div>
                    
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-area-1 position-relative overflow-hidden" data-overlay="title" data-opacity="3" data-bg-src="{{ asset('assets/img/sekolah/S2.jpg') }}">
        <div class="video-thumb1-1 video-box-center" style="display: flex; justify-content: center; align-items: center; min-height: 300px;">
            <a href="https://www.youtube.com/watch?v=-Ydebu14QlA" class="video-play-btn popup-video">
                <i class="fa-sharp fa-solid fa-play"></i>
            </a>
        </div>
    </div>

    <section class="testi-area overflow-hidden space">
        <div class="container th-container4">
            <div class="row">
                <div class="col-xl-4">
                    <div class="title-area text-center text-xl-start">
                        <span class="sub-title text-anim">TESTIMONI</span>
                        <h2 class="sec-title text-anim2">Apa kata mereka?</h2>
                        <p class="mt-20 wow fadeInUp" data-wow-delay=".2s">
                            Dengarkan langsung pengalaman dari para siswa berprestasi dan alumni SMKIK Ampana Kota yang telah sukses di dunia kerja.
                        </p>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider testi-slider1" id="testiSlide1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-wrapp">
                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                        <span class="rating">(5.0)</span>
                                    </div>
                                    <div class="quote-icon" data-mask-src="{{ asset('assets/img/icon/quote.svg') }}"></div>
                                </div>
                                <p class="box-text">
                                    "Fasilitas praktik di SMKIK sangat lengkap dan modern. Hal ini sangat membantu saya saat pertama kali masuk ke dunia kerja karena sudah terbiasa menggunakan alat standar industri."
                                </p>
                                <div class="testi-card_profile">
                                    <div>
                                        <h3 class="box-title">Ahmad Dani</h3>
                                        <p class="box-desig">Alumni TKJ - Teknisi Jaringan</p>
                                    </div>
                                    <div class="testi-card-thumb">
                                        <img class="avatar" src="{{ asset('assets/img/testimonial/testi_1_1.jpg') }}" alt="img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-wrapp">
                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                        <span class="rating">(4.9)</span>
                                    </div>
                                    <div class="quote-icon" data-mask-src="{{ asset('assets/img/icon/quote.svg') }}"></div>
                                </div>
                                <p class="box-text">
                                    "Guru-gurunya sangat kompeten dan sabar dalam membimbing. Melalui program BKK sekolah, saya berhasil langsung diterima bekerja sebelum hari kelulusan."
                                </p>
                                <div class="testi-card_profile">
                                    <div>
                                        <h3 class="box-title">Siti Aisyah</h3>
                                        <p class="box-desig">Alumni Akuntansi - Staff Finance</p>
                                    </div>
                                    <div class="testi-card-thumb">
                                        <img class="avatar" src="{{ asset('assets/img/testimonial/testi_1_2.jpg') }}" alt="img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-wrapp">
                                    <div class="testi-card_review">
                                        <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i>
                                        <span class="rating">(5.0)</span>
                                    </div>
                                    <div class="quote-icon" data-mask-src="{{ asset('assets/img/icon/quote.svg') }}"></div>
                                </div>
                                <p class="box-text">
                                    "Sekolah di SMKIK mengajarkan saya banyak hal tentang kedisiplinan dan kepemimpinan, tidak hanya hard skill, tapi soft skill yang sangat berguna di dunia usaha."
                                </p>
                                <div class="testi-card_profile">
                                    <div>
                                        <h3 class="box-title">Rizky Pratama</h3>
                                        <p class="box-desig">Siswa Berprestasi</p>
                                    </div>
                                    <div class="testi-card-thumb">
                                        <img class="avatar" src="{{ asset('assets/img/testimonial/testi_1_3.jpg') }}" alt="img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
        <div class="shape-mockup movingX d-xl-block d-none" data-left="4%" data-bottom="0%">
            <img src="{{ asset('assets/img/shape/shape-8.png') }}" alt="img" />
        </div>
        <div class="shape-mockup shape-ripple d-xl-block d-none" data-right="0%" data-top="0%">
            <div class="ripple-shape">
                <span class="ripple-1"></span> <span class="ripple-2"></span>
                <span class="ripple-3"></span> <span class="ripple-4"></span>
                <span class="ripple-5"></span>
            </div>
        </div>
    </section>

    <div class="counter-area1 overflow-hidden">
        <div class="container th-container2">
            <div class="counter-wrap1">
                <div class="counter-card wow fadeInUp" data-wow-delay=".2s">
                    <div class="box-icon">
                        <img src="{{ asset('assets/img/icon/counter-icon1-1.svg') }}" alt="icon" />
                    </div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">5</span>+</h3>
                        <p class="box-text">Program Keahlian</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".4s">
                    <div class="box-icon">
                        <img src="{{ asset('assets/img/icon/counter-icon1-2.svg') }}" alt="icon" />
                    </div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">45</span></h3>
                        <p class="box-text">Guru & Staf</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".6s">
                    <div class="box-icon">
                        <img src="{{ asset('assets/img/icon/counter-icon1-3.svg') }}" alt="icon" />
                    </div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">1200</span>+</h3>
                        <p class="box-text">Alumni Terserap Kerja</p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card wow fadeInUp" data-wow-delay=".7s">
                    <div class="box-icon">
                        <img src="{{ asset('assets/img/icon/counter-icon1-4.svg') }}" alt="icon" />
                    </div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">850</span>+</h3>
                        <p class="box-text">Siswa Aktif</p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>

    <section class="professor-area-1 position-relative space overflow-hidden" id="professor-sec">
        <div class="shape-mockup" data-top="0%" data-left="0%">
            <img src="{{ asset('assets/img/shape/shape-6.png') }}" alt="Stadum" />
        </div>
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-8 col-12">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title text-anim">TENAGA PENDIDIK</span>
                        <h2 class="sec-title text-anim2">Guru & Pengajar Profesional</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-xl-6">
                    <div class="professor-card wow fadeInLeft" data-wow-delay=".2s">
                        <div class="professor-img global-img">
                            <img src="{{ asset('assets/img/professor/professor-1-1.png') }}" alt="professor image" />
                        </div>
                        <div class="professor-content">
                            <h3 class="box-title"><a href="#">Hj. Maimunah, S.Pd.</a></h3>
                            <p class="box-text">Ketua Program Keahlian TKJ</p>
                            <div class="professor-details">
                                <a href="#" class="professor-contact me-2"><i class="fa-solid fa-envelope"></i> <span>guru@smkik.sch.id</span></a>
                                <a href="#" class="professor-contact"><i class="fa-solid fa-phone-volume"></i> <span>+62 812-3456-7890</span></a>
                            </div>
                            <div class="professor-social-media">
                                <div class="th-social style3">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="professor-card wow fadeInRight" data-wow-delay=".4s">
                        <div class="professor-img global-img">
                            <img src="{{ asset('assets/img/professor/professor-1-2.png') }}" alt="professor image" />
                        </div>
                        <div class="professor-content">
                            <h3 class="box-title"><a href="#">Suryadi Kusuma, M.Kom.</a></h3>
                            <p class="box-text">Guru Kejuruan Rekayasa Perangkat Lunak</p>
                            <div class="professor-details">
                                <a href="#" class="professor-contact me-2"><i class="fa-solid fa-envelope"></i> <span>guru@smkik.sch.id</span></a>
                                <a href="#" class="professor-contact"><i class="fa-solid fa-phone-volume"></i> <span>+62 812-3456-7890</span></a>
                            </div>
                            <div class="professor-social-media">
                                <div class="th-social style3">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="professor-card wow fadeInLeft" data-wow-delay=".6s">
                        <div class="professor-img global-img">
                            <img src="{{ asset('assets/img/professor/professor-1-3.png') }}" alt="professor image" />
                        </div>
                        <div class="professor-content">
                            <h3 class="box-title"><a href="#">Arief Rachman, S.E.</a></h3>
                            <p class="box-text">Guru Pembimbing BKK</p>
                            <div class="professor-details">
                                <a href="#" class="professor-contact me-2"><i class="fa-solid fa-envelope"></i> <span>guru@smkik.sch.id</span></a>
                                <a href="#" class="professor-contact"><i class="fa-solid fa-phone-volume"></i> <span>+62 812-3456-7890</span></a>
                            </div>
                            <div class="professor-social-media">
                                <div class="th-social style3">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="professor-card wow fadeInRight" data-wow-delay=".8s">
                        <div class="professor-img global-img">
                            <img src="{{ asset('assets/img/professor/professor-1-4.png') }}" alt="professor image" />
                        </div>
                        <div class="professor-content">
                            <h3 class="box-title"><a href="#">Dewi Lestari, S.Pd.</a></h3>
                            <p class="box-text">Guru Kejuruan Akuntansi</p>
                            <div class="professor-details">
                                <a href="#" class="professor-contact me-2"><i class="fa-solid fa-envelope"></i> <span>guru@smkik.sch.id</span></a>
                                <a href="#" class="professor-contact"><i class="fa-solid fa-phone-volume"></i> <span>+62 812-3456-7890</span></a>
                            </div>
                            <div class="professor-social-media">
                                <div class="th-social style3">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="professor-shape1 shape-mockup movingX d-none d-xl-inline-block" data-bottom="0%" data-right="2%">
            <img src="{{ asset('assets/img/shape/professor-2-1.png') }}" alt="Stadum" />
        </div>
    </section>

    <section class="campus-area-2 position-relative overflow-hidden space" id="campus-sec">
        <div class="container th-container3">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-8 col-12">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title text-anim">LINGKUNGAN SEKOLAH</span>
                        <h2 class="sec-title text-anim2">Fasilitas Penunjang Pendidikan</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider campus-slider1" id="campusSlider1" data-slider-options='{"breakpoints": {"0":{"slidesPerView": 1},"575":{"slidesPerView": 2},"768": {"slidesPerView":3}, "1199": {"slidesPerView": 4}},"slidesPerView" :"4","loop": "true","autoplay" : "false"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="campus-card style2">
                                <div class="box-thumb">
                                    <img src="{{ asset('assets/img/campus/campus-2-1.jpg') }}" alt="Icon" />
                                </div>
                                <div class="campus-content">
                                    <a href="{{ asset('assets/img/campus/campus-v-2-1.jpg') }}" class="popup-image"><i class="fa-light fa-plus"></i></a>
                                </div>
                                <div class="box-title-wrap">
                                    <h3 class="box-title"><a href="#">Perpustakaan</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="campus-card style2">
                                <div class="box-thumb">
                                    <img src="{{ asset('assets/img/campus/campus-2-2.jpg') }}" alt="Icon" />
                                </div>
                                <div class="campus-content">
                                    <a href="{{ asset('assets/img/campus/campus-v-2-2.jpg') }}" class="popup-image"><i class="fa-light fa-plus"></i></a>
                                </div>
                                <div class="box-title-wrap">
                                    <h3 class="box-title"><a href="#">Lab Komputer</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="campus-card style2">
                                <div class="box-thumb">
                                    <img src="{{ asset('assets/img/campus/campus-2-3.jpg') }}" alt="Icon" />
                                </div>
                                <div class="campus-content">
                                    <a href="{{ asset('assets/img/campus/campus-v-2-3.jpg') }}" class="popup-image"><i class="fa-light fa-plus"></i></a>
                                </div>
                                <div class="box-title-wrap">
                                    <h3 class="box-title"><a href="#">Gedung Olahraga</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="campus-card style2">
                                <div class="box-thumb">
                                    <img src="{{ asset('assets/img/campus/campus-2-4.jpg') }}" alt="Icon" />
                                </div>
                                <div class="campus-content">
                                    <a href="{{ asset('assets/img/campus/campus-v-2-4.jpg') }}" class="popup-image"><i class="fa-light fa-plus"></i></a>
                                </div>
                                <div class="box-title-wrap">
                                    <h3 class="box-title"><a href="#">Ruang Praktik</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button data-slider-prev="#campusSlider1" class="slider-arrow style2 slider-prev">
                    <img src="{{ asset('assets/img/icon/left-icon.svg') }}" alt="Stadum" class="th-arrow" />
                </button>
                <button data-slider-next="#campusSlider1" class="slider-arrow style2 slider-next">
                    <img src="{{ asset('assets/img/icon/right-icon.svg') }}" alt="Stadum" class="th-arrow" />
                </button>
            </div>
        </div>
    </section>

    <section class="alumni-area position-relative space overflow-hidden">
        <div class="container">
            <div class="row align-items-center gy-40">
                <div class="col-xl-6">
                    <div class="alumni-imgbox">
                        <div class="alumni-img global-img"><img src="{{ asset('assets/img/alumni/alumni-1-1.jpg') }}" alt="img" /></div>
                        <div class="alumni-img global-img"><img src="{{ asset('assets/img/alumni/alumni-1-2.jpg') }}" alt="img" /></div>
                        <div class="alumni-img global-img"><img src="{{ asset('assets/img/alumni/alumni-1-3.jpg') }}" alt="img" /></div>
                        <div class="alumni-img global-img"><img src="{{ asset('assets/img/alumni/alumni-1-4.jpg') }}" alt="img" /></div>
                        <div class="alumni-img global-img"><img src="{{ asset('assets/img/alumni/alumni-1-5.jpg') }}" alt="img" /></div>
                        <div class="alumni-img global-img"><img src="{{ asset('assets/img/alumni/alumni-1-6.jpg') }}" alt="img" /></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-5 ms-xl-5 pe-xl-3">
                        <div class="title-area">
                            <span class="sub-title text-anim">ALUMNI KAMI</span>
                            <h2 class="sec-title text-anim2">Jejaring Lulusan yang Sukses Terserap Industri</h2>
                            <p class="sec-text mt-25 wow fadeInUp" data-wow-delay=".4s">
                                Lulusan SMKIK Ampana Kota tersebar di berbagai sektor industri dan dunia usaha ternama. Melalui keaktifan Bursa Kerja Khusus (BKK), jaringan alumni kami terus saling mendukung dan memberikan jalan sukses bagi angkatan-angkatan selanjutnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="marquee-area space-bottom overflow-hidden">
        <div class="container-fluid p-0">
            <div class="swiper th-slider marquee-slider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":0,"disableOnInteraction":false},"noSwiping":"true","speed":10000,"spaceBetween":40}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="{{ asset('assets/img/icon/open-book.svg') }}" alt="icon" /></div>
                            <a target="_blank" href="#">KOMPETEN</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="{{ asset('assets/img/icon/scollarship.svg') }}" alt="icon" /></div>
                            <a target="_blank" href="#">SIAP KERJA</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="{{ asset('assets/img/icon/open-book.svg') }}" alt="icon" /></div>
                            <a target="_blank" href="#">INOVATIF</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="{{ asset('assets/img/icon/open-book.svg') }}" alt="icon" /></div>
                            <a target="_blank" href="#">KREATIF</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="{{ asset('assets/img/icon/scollarship.svg') }}" alt="icon" /></div>
                            <a target="_blank" href="#">BERKARAKTER TERPUJI</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="marquee-card">
                            <div class="color-masking"><img src="{{ asset('assets/img/icon/open-book.svg') }}" alt="icon" /></div>
                            <a target="_blank" href="#">LINK & MATCH</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-area-2 overflow-hidden space-bottom" id="blog-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg-8 col-12">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title text-anim">BERITA & INFORMASI</span>
                        <h2 class="sec-title text-anim2">Kegiatan Sekolah Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-24 gy-30">
                <div class="col-xl-6">
                    <div class="blog-grid style2">
                        <div class="box-content">
                            <div class="blog-meta">
                                <a class="author" href="#"><img src="{{ asset('assets/img/blog/author.png') }}" alt="img" />By Admin</a>
                            </div>
                            <h3 class="box-title"><a href="#">Kunjungan Industri Siswa Kelas XII ke Perusahaan Teknologi Nasional</a></h3>
                            <div class="btn-wrap">
                                <a href="#" class="th-btn th-icon style-border1">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/blog/blog_2_1.jpg') }}" alt="blog image" />
                            <div class="blog-date style2">
                                <h5 class="blog-date-title">24</h5>
                                <p class="blog-date-text">Juni, 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grid style2 mt-30">
                        <div class="box-content">
                            <div class="blog-meta">
                                <a class="author" href="#"><img src="{{ asset('assets/img/blog/author.png') }}" alt="img" />By Admin</a>
                            </div>
                            <h3 class="box-title"><a href="#">Juara 1 Lomba Kompetensi Siswa (LKS) Tingkat Provinsi</a></h3>
                            <div class="btn-wrap">
                                <a href="#" class="th-btn th-icon style-border1">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/blog/blog_2_2.jpg') }}" alt="blog image" />
                            <div class="blog-date style2">
                                <h5 class="blog-date-title">18</h5>
                                <p class="blog-date-text">Juni, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <img src="{{ asset('assets/img/blog/blog_2_3.jpg') }}" alt="blog image" />
                            <div class="blog-date style2">
                                <h5 class="blog-date-title">10</h5>
                                <p class="blog-date-text">Juni, 2025</p>
                            </div>
                        </div>
                        <div class="box-content">
                            <div class="blog-meta">
                                <a class="author" href="#"><img src="{{ asset('assets/img/blog/author.png') }}" alt="img" />By Admin</a>
                            </div>
                            <h3 class="box-title"><a href="#">Penandatanganan MoU Bersama Mitra Industri Baru Tahun Ajaran 2025</a></h3>
                            <div class="btn-wrap">
                                <a href="#" class="th-btn th-icon style-border1">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection