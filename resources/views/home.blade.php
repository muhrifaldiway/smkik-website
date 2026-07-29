@extends('layouts.front')

@section('title', 'SMK Informatika Komputer Ampana Kota - Beranda')

@section('content')

<div class="th-hero-wrapper hero-1" id="hero">
    <div class="swiper th-slider" data-slider-options='{"effect":"fade"}' id="heroSlide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="th-hero-bg">
                        <video autoplay muted loop playsinline class="hero-bg-video">
                            <source src="{{ asset('assets/video/video.mp4') }}" type="video/mp4">
                            Browser Anda tidak mendukung video.
                        </video>
                    </div>
                    <div class="container th-container2">
                        <div class="row gy-60 align-items-center">
                            <div class="col-xxl-6 col-xl-8 col-lg-9">
                                <div class="hero-style1">
                                    <div class="hero-text-wrap">
                                        <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.3s">
                                            Selamat Datang di SMKIK Ampana Kota
                                        </h1>
                                        <p class="hero-text text-white" data-ani="slideinup" data-ani-delay="0.5s">
                                            Mewujudkan lulusan yang cerdas, terampil, dan berakhlak mulia. Kami mendidik generasi muda agar siap menghadapi tantangan dunia usaha dan industri masa depan.
                                        </p>
                                        <div class="btn-wrap justify-content-center justify-content-lg-start" data-ani="slideinup" data-ani-delay="0.8s">
                                            <a class="th-btn white-hover th-icon" href="#ppdb-sec">Info PPDB</a>
                                            <a class="th-btn style-border1 th-icon white-hover" href="#program-sec">Lihat Jurusan</a>
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
</div>

<!--=================================
    Feature Area
    ==================================-->
    <!--=================================
        Feature Area
        ==================================-->
        <div class="feature-sec-1 smkik-feature-section position-relative overflow-hidden space-bottom">
        
            <div class="container th-container2">
        
                <div class="row gx-4 gy-4">
        
                    <!-- Card 1 -->
                    <div class="col-xl-3 col-md-6 feature-card_wrapp">
        
                        <div class="feature-card wow fadeInUp" data-wow-delay=".2s">
        
                            <div class="box-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
        
                            <h3 class="box-title">
                                Pembelajaran Berbasis Industri
                            </h3>
        
                            <p class="box-text style2">
                                Kurikulum disusun sesuai kebutuhan Dunia Usaha dan Dunia Industri (DUDI) untuk mempersiapkan lulusan yang kompeten dan siap menghadapi tantangan dunia kerja.
                            </p>
        
                        </div>
        
                    </div>
        
                    <!-- Card 2 -->
                    <div class="col-xl-3 col-md-6 feature-card_wrapp">
        
                        <div class="feature-card wow fadeInUp" data-wow-delay=".4s">
        
                            <div class="box-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
        
                            <h3 class="box-title">
                                Praktik Kerja Lapangan
                            </h3>
        
                            <p class="box-text style2">
                                Siswa memperoleh pengalaman kerja nyata melalui program Praktik Kerja Lapangan (PKL) di berbagai perusahaan dan instansi mitra sekolah.
                            </p>
        
                        </div>
        
                    </div>
        
                    <!-- Card 3 -->
                    <div class="col-xl-3 col-md-6 feature-card_wrapp">
        
                        <div class="feature-card wow fadeInUp" data-wow-delay=".6s">
        
                            <div class="box-icon">
                                <i class="fas fa-users"></i>
                            </div>
        
                            <h3 class="box-title">
                                Ekstrakurikuler & Organisasi
                            </h3>
        
                            <p class="box-text style2">
                                Mengembangkan karakter, kepemimpinan, kreativitas, serta kemampuan bekerja sama melalui berbagai kegiatan organisasi dan ekstrakurikuler.
                            </p>
        
                        </div>
        
                    </div>
        
                    <!-- Card 4 -->
                    <div class="col-xl-3 col-md-6 feature-card_wrapp">
        
                        <div class="feature-card wow fadeInUp" data-wow-delay=".8s">
        
                            <div class="box-icon">
                                <i class="fas fa-award"></i>
                            </div>
        
                            <h3 class="box-title">
                                Sertifikasi Kompetensi
                            </h3>
        
                            <p class="box-text style2">
                                Membekali peserta didik dengan sertifikasi kompetensi sebagai nilai tambah untuk melanjutkan pendidikan maupun memasuki dunia kerja.
                            </p>
        
                        </div>
        
                    </div>
        
                </div>
        
            </div>
        
        </div>

    <div class="about1-area position-relative overflow-hidden space-bottom" id="about-sec">
        <div class="container">
    
            <div class="about-wrap1 position-relative z-index-2">
    
                <div class="row gy-60 align-items-center justify-content-center">
    
                    <!-- Gambar -->
                    <div class="col-xl-6">
    
                        <div class="img-box1 smkik-about-image">
    
                            <div class="img1 text-center text-sm-start wow fadeInLeft" data-wow-delay=".2s">
    
                                <img
                                    alt="Tentang SMKIK"
                                    class="rounded-4 shadow-lg"
                                    src="{{ asset('assets/img/sekolah/p1.jpg') }}">
                                    
    
                            </div>
    
                        </div>
    
                    </div>
    
                    <!-- Konten -->
                    <div class="col-xl-6">
    
                        <div class="about-content smkik-about-content ms-xxl-4 ps-xxl-2 ms-xl-2">
    
                            <div class="title-area">
    
                                <span class="sub-title text-anim">
                                    PROFIL SEKOLAH
                                </span>
    
                                <h2 class="sec-title text-anim2">
                                    SMK Informatika Komputer Ampana Kota
                                </h2>
    
                                <p class="sec-text mt-25 wow fadeInUp" data-wow-delay=".2s">
                                    SMK Informatika Komputer Ampana Kota merupakan sekolah vokasi yang berfokus pada pengembangan kompetensi teknologi, keterampilan kerja, dan karakter peserta didik. Kami berkomitmen mencetak lulusan yang siap bekerja, siap melanjutkan pendidikan, dan siap berwirausaha sesuai kebutuhan Dunia Usaha dan Dunia Industri (DUDI).
                                </p>
    
                            </div>
    
                            <!-- Keunggulan -->
                            <div class="mt-4">
    
                                <div class="d-flex align-items-center mb-3 smkik-feature-item">
    
                                    <i class="fas fa-laptop-code me-3 fs-4"></i>
    
                                    <span>
                                        Program Keahlian Berbasis Teknologi dan Industri
                                    </span>
    
                                </div>
    
                                <div class="d-flex align-items-center mb-3 smkik-feature-item">
    
                                    <i class="fas fa-briefcase me-3 fs-4"></i>
    
                                    <span>
                                        Praktik Kerja Lapangan (PKL) di Dunia Industri
                                    </span>
    
                                </div>
    
                                <div class="d-flex align-items-center mb-3 smkik-feature-item">
    
                                    <i class="fas fa-award me-3 fs-4"></i>
    
                                    <span>
                                        Sertifikasi Kompetensi sebagai Bekal Dunia Kerja
                                    </span>
    
                                </div>
    
                                <div class="d-flex align-items-center mb-3 smkik-feature-item">
    
                                    <i class="fas fa-users me-3 fs-4"></i>
    
                                    <span>
                                        Pengembangan Karakter dan Kepemimpinan Peserta Didik
                                    </span>
    
                                </div>
    
                            </div>
    
                            <!-- Statistik -->
                            <div class="row mt-4 g-3">
    
                                <div class="col-4">
    
                                    <div class="text-center p-3 shadow-sm smkik-stat-card">
    
                                        <h3 class="mb-1 smkik-stat-number">
                                            3
                                        </h3>
    
                                        <small>
                                            Program Keahlian
                                        </small>
    
                                    </div>
    
                                </div>
    
                                <div class="col-4">
    
                                    <div class="text-center p-3 shadow-sm smkik-stat-card">
    
                                        <h3 class="mb-1 smkik-stat-number">
                                            100%
                                        </h3>
    
                                        <small>
                                            Berbasis Digital
                                        </small>
    
                                    </div>
    
                                </div>
    
                                <div class="col-4">
    
                                    <div class="text-center p-3 shadow-sm smkik-stat-card">
    
                                        <h3 class="mb-1 smkik-stat-number">
                                            PKL
                                        </h3>
    
                                        <small>
                                            Dunia Industri
                                        </small>
    
                                    </div>
    
                                </div>
    
                            </div>
    
                            <!-- Tombol -->
                            <div class="mt-5 d-flex flex-wrap gap-3">
    
                                <a href="{{ route('profil') }}" class="th-btn">
                                    Profil Lengkap
                                </a>
    
                                <a href="#ppdb-sec" class="th-btn style2">
                                    Informasi PPDB
                                </a>
    
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>
    </div>

    <section class="academic1-area space overflow-hidden" id="program-sec">

        <div class="container">
    
            <div class="row justify-content-lg-between justify-content-center align-items-center">
    
                <div class="col-lg-9 col-12">
    
                    <div class="title-area text-center text-lg-start mb-75">
    
                        <span class="sub-title text-anim">
                            PROGRAM KEAHLIAN (JURUSAN)
                        </span>
    
                        <h2 class="sec-title text-anim2">
                            Jurusan Unggulan yang Menjawab Kebutuhan Industri
                        </h2>
    
                    </div>
    
                </div>
    
            </div>
    
            <div class="academic-wrapp">
    
                <div class="slider-area">
    
                    <div class="swiper th-slider has-shadow"
                        data-slider-options='{
                            "breakpoints":{
                                "0":{"slidesPerView":1},
                                "768":{"slidesPerView":2},
                                "1200":{"slidesPerView":3}
                            },
                            "spaceBetween":24
                        }'>
    
                        <div class="swiper-wrapper">
    
                            <!-- TKJ -->
                            <div class="swiper-slide">
    
                                <div class="academic-card">
    
                                    <div class="academic-img">
    
                                        <a href="{{ route('profil') }}">
                                            <img
                                                alt="Teknik Komputer dan Jaringan"
                                                src="{{ asset('assets/img/academic/academic1-1.jpg') }}">
                                        </a>
    
                                        <div class="academic-tag">
                                            <span>
                                                <i class="fas fa-network-wired me-1"></i>
                                                Teknologi Jaringan
                                            </span>
                                        </div>
    
                                    </div>
    
                                    <div class="academic-content">
    
                                        <h3 class="box-title">
    
                                            <a href="{{ route('profil') }}">
                                                Teknik Komputer dan Jaringan (TKJ)
                                            </a>
    
                                        </h3>
    
                                        <p class="box-text style2">
    
                                            Mempelajari perakitan komputer, administrasi server, jaringan komputer, keamanan jaringan, dan teknologi informasi modern.
    
                                        </p>
    
                                    </div>
    
                                </div>
    
                            </div>
    
                            <!-- RPL -->
                            <div class="swiper-slide">
    
                                <div class="academic-card">
    
                                    <div class="academic-img">
    
                                        <a href="{{ route('profil') }}">
                                            <img
                                                alt="Rekayasa Perangkat Lunak"
                                                src="{{ asset('assets/img/academic/academic1-2.jpg') }}">
                                        </a>
    
                                        <div class="academic-tag">
                                            <span>
                                                <i class="fas fa-code me-1"></i>
                                                Software Development
                                            </span>
                                        </div>
    
                                    </div>
    
                                    <div class="academic-content">
    
                                        <h3 class="box-title">
    
                                            <a href="{{ route('profil') }}">
                                                Rekayasa Perangkat Lunak (RPL)
                                            </a>
    
                                        </h3>
    
                                        <p class="box-text style2">
    
                                            Mengembangkan aplikasi web, mobile, dan desktop menggunakan teknologi pemrograman modern sesuai kebutuhan industri.
    
                                        </p>
    
                                    </div>
    
                                </div>
    
                            </div>
    
                            <!-- DKV -->
                            <div class="swiper-slide">
    
                                <div class="academic-card">
    
                                    <div class="academic-img">
    
                                        <a href="{{ route('profil') }}">
                                            <img
                                                alt="Desain Komunikasi Visual"
                                                src="{{ asset('assets/img/academic/academic1-3.jpg') }}">
                                        </a>
    
                                        <div class="academic-tag">
                                            <span>
                                                <i class="fas fa-palette me-1"></i>
                                                Kreatif Digital
                                            </span>
                                        </div>
    
                                    </div>
    
                                    <div class="academic-content">
    
                                        <h3 class="box-title">
    
                                            <a href="{{ route('profil') }}">
                                                Desain Komunikasi Visual (DKV)
                                            </a>
    
                                        </h3>
    
                                        <p class="box-text style2">
    
                                            Mempelajari desain grafis, fotografi, videografi, animasi, branding, serta produksi konten kreatif digital.
    
                                        </p>
    
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>
    
    </section>

<section class="apply-stadum-area bg-title position-relative space overflow-hidden smkik-ppdb" id="ppdb-sec">

    ```
    <div class="container">
    
        <div class="row gy-4 align-items-center justify-content-between">
    
            <!-- Konten -->
            <div class="col-xl-6 order-1 order-xl-0">
    
                <div class="apply-stadum-titlebox title-area">
    
                    <div class="sec-title-wrap">
    
                        <span class="sub-title text-anim">
                            INFORMASI PPDB ONLINE
                        </span>
    
                        <h2 class="sec-title text-white text-anim2">
                            Penerimaan Peserta Didik Baru Telah Dibuka
                        </h2>
    
                    </div>
    
                    <div class="box-text-wrap">
    
                        <p class="box-text text-white mt-25 wow fadeInUp" data-wow-delay=".2s">
    
                            Jadilah bagian dari generasi unggul yang siap menghadapi tantangan dunia kerja, dunia usaha, dan perkembangan teknologi. SMK Informatika Komputer Ampana Kota membuka kesempatan bagi putra-putri terbaik untuk bergabung pada Program Keahlian unggulan yang relevan dengan kebutuhan industri saat ini.
    
                        </p>
    
                    </div>
    
                    <!-- Program Keahlian -->
                    <div class="d-flex flex-wrap gap-2 mt-4 mb-4 wow fadeInUp" data-wow-delay=".3s">

                    <span class="smkik-ppdb-tag">
                        <i class="fas fa-network-wired me-2"></i>
                        TKJ
                    </span>

                    <span class="smkik-ppdb-tag">
                        <i class="fas fa-code me-2"></i>
                        RPL
                    </span>

                    <span class="smkik-ppdb-tag">
                        <i class="fas fa-palette me-2"></i>
                        DKV
                    </span>

                    </div>
                    <!-- Informasi Singkat -->
                    <div class="row g-3 mt-2 wow fadeInUp" data-wow-delay=".4s">
    
                        <div class="col-6">
    
                            <div class="bg-white rounded text-center p-3 h-100 smkik-ppdb-card">
    
                                <h4 class="mb-1 fw-bold text-dark">
                                    3
                                </h4>
    
                                <small>
                                    Program Keahlian
                                </small>
    
                            </div>
    
                        </div>
    
                        <div class="col-6">
    
                            <div class="bg-white rounded text-center p-3 h-100 smkik-ppdb-card">
    
                                <h4 class="mb-1 fw-bold text-dark">
                                    Online
                                </h4>
    
                                <small>
                                    Pendaftaran Mudah
                                </small>
    
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
    
                <!-- Tombol -->
                <div class="apply-stadum-action th-btn-wrap wow fadeInUp mt-4" data-wow-delay=".5s">
    
                    <a class="th-btn th-icon white-hover" href="#">
    
                        <i class="fas fa-user-plus me-2"></i>
                        Daftar PPDB Sekarang
    
                    </a>
    
                    <a class="th-btn style2 ms-2" href="{{ route('profil') }}">
    
                        <i class="fas fa-school me-2"></i>
                        Profil Sekolah
    
                    </a>
    
                </div>
    
            </div>
    
            <!-- Gambar -->
            <div class="col-xl-6 order-0 order-xl-1">
    
                <div class="apply-stadum-thumb smkik-ppdb-thumb reveal">
    
                    <img
                        alt="PPDB SMKIK"
                        src="{{ asset('assets/img/apply-stadum/apply-stadum-home-1.jpg') }}">
    
                </div>
    
            </div>
    
        </div>
    
    </div>
    ```
    
    </section>
    

<section class="chancellor-area position-relative space">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6">
                <div class="chancellor-thumb">
                    <img alt="image" src="{{ asset('assets/img/chancellor/chancellor-img-home-1.jpg') }}"/>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="chancellor-wrapp">
                    <div class="chancellor-titlebox title-area">
                        <span class="sub-title text-anim">SAMBUTAN KEPALA SEKOLAH</span>
                        <h2 class="sec-title text-anim2">Pesan Kepemimpinan SMKIK Ampana Kota</h2>
                        <p class="box-text mt-25 wow fadeInUp" data-wow-delay=".4s">
                            "Selamat datang di Website Resmi SMKIK Ampana Kota. Pendidikan vokasi adalah urat nadi perekonomian masa depan. Kami menjamin lulusan kami memiliki penguasaan teori yang matang dipadukan dengan keterampilan praktik berstandar profesional. Melalui program Link & Match, kita bersama-sama mewujudkan generasi yang Siap Kerja, Cerdas, dan Mandiri."
                        </p>
                    </div>
                    <div class="chancellor-bottom">
                        <div class="chancellor-signature-box text-sm-center">
                            <p class="box-text fw-bold text-dark">Bpk. Kepala Sekolah, M.Pd</p>
                            <img alt="signature" class="chancellor-signature" src="{{ asset('assets/img/icon/signature.png') }}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection