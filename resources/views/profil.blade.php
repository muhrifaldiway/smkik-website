@extends('layouts.front')

@section('title', 'Profil Sekolah - SMKIK Ampana Kota')

@push('styles')
<style>
        /* CUSTOM UI/UX UPDATES - THEMA NAVY & BENTO GRID */
        :root {
            --smkik-green: #01420f;
            --smkik-green-light: #0a7511;
        }
        
        .bg-green { background-color: var(--smkik-green) !important; }
        .text-green { color: var(--smkik-green) !important; }
        
        /* Bento Grid Card Style */
        .bento-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
            background: #ffffff;
        }
        .bento-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(10, 37, 64, 0.1) !important;
        }

        /* Jurusan Hover Effect */
        .jurusan-card {
            position: relative;
            z-index: 1;
            transition: all 0.4s ease;
            border: 1px solid #eee;
        }
        .jurusan-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(135deg, var(--smkik-green) 0%, var(--smkik-green-light) 100%);
            z-index: -1;
            transform: scaleY(0);
            transform-origin: bottom;
            transition: transform 0.4s ease cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: inherit;
        }
        .jurusan-card:hover::before {
            transform: scaleY(1);
        }
        .jurusan-card:hover * {
            color: #ffffff !important;
        }
        .jurusan-icon-box {
            transition: all 0.4s ease;
        }
        .jurusan-card:hover .jurusan-icon-box {
            background-color: rgba(255,255,255,0.15) !important;
        }

        /* Dynamic Hero Gradient */
        .hero-gradient-overlay {
            background: linear-gradient(135deg, rgba(10, 37, 64, 0.95) 0%, rgba(10, 37, 64, 0.6) 100%);
        }

        .jurusan-card-modern:hover {
            transform: translateY(-10px) !important;
            box-shadow: 0 20px 40px rgba(10, 64, 22, 0.15) !important;
        }
    </style>
@endpush

@section('content')

{{-- ============================= --}}
{{-- HERO / DYNAMIC HEADER         --}}
{{-- ============================= --}}
<div class="position-relative overflow-hidden" style="min-height: 50vh; background: url('{{ asset('assets/img/sekolah/S2.jpg') }}') center/cover no-repeat fixed;">
    <div class="position-absolute top-0 start-0 w-100 h-100 hero-gradient-overlay"></div>
    <div class="container position-relative z-1 d-flex flex-column justify-content-center align-items-center text-center h-100" style="padding-top: 15vh; padding-bottom: 10vh;">
        <span class="badge bg-primary px-3 py-2 rounded-pill mb-3 wow fadeInDown" data-wow-delay=".2s">SMK Pusat Keunggulan</span>
        <h1 class="text-white display-4 fw-bold mb-3 wow fadeInUp" data-wow-delay=".3s">Profil Sekolah Kami</h1>
        <p class="text-white-50 lead mb-4 wow fadeInUp" data-wow-delay=".4s" style="max-width: 600px;">Mencetak Generasi Kompeten, Inovatif, dan Siap Bersaing di Era Transformasi Digital.</p>
        
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent justify-content-center p-0 mb-0 wow fadeInUp" data-wow-delay=".5s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white-50 text-decoration-none"><i class="fas fa-home me-1"></i> Beranda</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Profil Sekolah</li>
            </ol>
        </nav>
    </div>
</div>

{{-- ============================= --}}
{{-- SAMBUTAN KEPALA SEKOLAH       --}}
{{-- ============================= --}}
<section class="space" id="sambutan-sec">
    <div class="container th-container4">
        <div class="row align-items-center gy-40">
            <div class="col-lg-5">
                <div class="position-relative wow fadeInLeft" data-wow-delay=".2s">
                    <div class="rounded-4 overflow-hidden shadow-lg position-relative z-1">
                        <img src="{{ asset('assets/img/professor/professor-1-5.png') }}" alt="Kepala Sekolah SMKIK Ampana Kota" class="w-100 object-fit-cover" />
                    </div>
                    <!-- Dekorasi background gambar -->
                    <div class="position-absolute bg-navy rounded-4" style="top: -20px; left: -20px; right: 20px; bottom: 20px; z-index: 0; opacity: 0.1;"></div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ps-xl-5 wow fadeInRight" data-wow-delay=".3s">
                    <div class="title-area mb-4">
                        <span class="sub-title text-navy fw-bold text-anim"><i class="fas fa-quote-left me-2"></i> SAMBUTAN KEPALA SEKOLAH</span>
                        <h2 class="sec-title text-anim2">Selamat Datang di Portal Resmi SMKIK Ampana Kota</h2>
                    </div>
                    <p class="sec-text mt-20 lead text-dark">
                        Assalamu'alaikum Warahmatullahi Wabarakatuh.
                    </p>
                    <p class="sec-text mt-2">
                        Puji syukur kami panjatkan atas kepercayaan Bapak/Ibu dan Ananda sekalian untuk mengenal lebih dekat SMK Informatika Komputer Ampana Kota. Kami berkomitmen mendidik generasi yang tidak hanya unggul secara akademik dan penguasaan <em>software/hardware</em>, tetapi juga berkarakter, mandiri, dan siap menghadapi tantangan dunia industri digital.
                    </p>
                    <p class="sec-text mt-3">
                        Melalui kurikulum <em>Link & Match</em>, tenaga pendidik yang kompeten, serta fasilitas laboratorium berstandar industri, kami memastikan setiap lulusan siap berkarya dan menjadi pribadi yang bermanfaat.
                    </p>
                    <div class="mt-4 pt-3 border-top">
                        <h4 class="fw-bold mb-1 text-navy">Drs. H. Bahtiar, M.Pd.</h4>
                        <p class="text-muted mb-0">Kepala SMK Informatika Komputer Ampana Kota</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================= --}}
{{-- TENTANG & KEUNGGULAN (BENTO)  --}}
{{-- ============================= --}}
<section class="space bg-light" id="about-bento-sec">
    <div class="container th-container4">
        <div class="title-area text-center mb-5">
            <span class="sub-title text-navy fw-bold text-anim">TENTANG KAMI</span>
            <h2 class="sec-title text-anim2">Mengapa Memilih SMKIK?</h2>
        </div>
        
        <!-- BENTO GRID LAYOUT -->
        <div class="row g-4">
            
            <!-- Kotak 1: Sejarah Singkat (Lebar) -->
            <div class="col-lg-8">
                <div class="bento-card rounded-4 p-5 h-100 wow fadeInUp" data-wow-delay=".2s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-navy bg-opacity-10 text-navy rounded-circle p-3 me-3">
                            <i class="fas fa-history fa-2x"></i>
                        </div>
                        <h3 class="fw-bold mb-0">Perjalanan Sejak 2005</h3>
                    </div>
                    <p class="text-muted fs-5">
                        Berdiri sejak tahun 2005 sebagai jawaban atas tingginya kebutuhan masyarakat Kabupaten Tojo Una-Una akan pendidikan kejuruan berbasis Teknologi Informasi. Kini, SMKIK telah berkembang menjadi institusi modern yang melahirkan ribuan talenta digital.
                    </p>
                    <a href="#prestasi-sec" class="btn btn-outline-dark rounded-pill mt-3 px-4">Lihat Prestasi Kami</a>
                </div>
            </div>

            <!-- Kotak 2: Akreditasi (Aksen Navy) -->
            <div class="col-lg-4">
                <div class="rounded-4 p-5 h-100 bg-green text-white d-flex flex-column justify-content-center align-items-center text-center wow fadeInUp" data-wow-delay=".3s" style="box-shadow: 0 10px 30px rgba(10,37,64,0.3);">
                    <i class="fas fa-certificate fa-3x mb-3 text-warning"></i>
                    <h2 class="display-3 fw-bold mb-0">A</h2>
                    <h5 class="mt-2 mb-0">Terakreditasi BAN-S/M</h5>
                    <p class="text-white-50 mt-2 small">Predikat Unggul secara konsisten.</p>
                </div>
            </div>

            <!-- Kotak 3: Visi Misi -->
            <div class="col-lg-5">
                <div class="bento-card rounded-4 p-5 h-100 wow fadeInUp" data-wow-delay=".4s">
                    <h4 class="fw-bold text-navy mb-3"><i class="fas fa-eye me-2"></i>Visi Sekolah</h4>
                    <p class="text-muted fst-italic">"Terwujudnya sumber daya manusia yang beriman, kreatif, mandiri, serta unggul dalam pemanfaatan Teknologi Informasi."</p>
                    <hr class="my-4">
                    <h4 class="fw-bold text-navy mb-3"><i class="fas fa-bullseye me-2"></i>Misi Utama</h4>
                    <ul class="list-unstyled text-muted">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Kurikulum Berbasis Industri (Link & Match)</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Menumbuhkan jiwa wirausaha/Technopreneur</li>
                        <li><i class="fas fa-check text-success me-2"></i> Menyediakan fasilitas standar industri (DUDI)</li>
                    </ul>
                </div>
            </div>

            <!-- Kotak 4: Data Pokok Grid 2x2 -->
            <div class="col-lg-7">
                <div class="row g-4 h-100">
                    <div class="col-sm-6">
                        <div class="bento-card rounded-4 p-4 h-100 wow fadeInUp" data-wow-delay=".5s">
                            <i class="fas fa-id-card text-navy fa-2x mb-3"></i>
                            <h5 class="fw-bold">NPSN</h5>
                            <p class="text-muted mb-0">00000000</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bento-card rounded-4 p-4 h-100 wow fadeInUp" data-wow-delay=".6s">
                            <i class="fas fa-users text-navy fa-2x mb-3"></i>
                            <h5 class="fw-bold">Siswa Aktif</h5>
                            <p class="text-muted mb-0">850+ Siswa</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bento-card rounded-4 p-4 h-100 wow fadeInUp" data-wow-delay=".7s">
                            <i class="fas fa-briefcase text-navy fa-2x mb-3"></i>
                            <h5 class="fw-bold">Bursa Kerja Khusus</h5>
                            <p class="text-muted mb-0">Penyaluran alumni langsung ke DUDI.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bento-card rounded-4 p-4 h-100 wow fadeInUp" data-wow-delay=".8s">
                            <i class="fas fa-map-marker-alt text-navy fa-2x mb-3"></i>
                            <h5 class="fw-bold">Lokasi Strategis</h5>
                            <p class="text-muted mb-0">Ampana Kota, Tojo Una-Una.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================= --}}
    {{-- PROGRAM KEAHLIAN (UPDATED)    --}}
    {{-- ============================= --}}
    <section class="space bg-smooth" id="jurusan-sec">
        <div class="container th-container4">
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center mb-5">
                        <span class="sub-title text-navy fw-bold text-anim">PROGRAM KEAHLIAN</span>
                        <h2 class="sec-title text-anim2">Jurusan yang Kami Tawarkan</h2>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                
                <!-- TKJ -->
                <div class="col-md-6 col-lg-4">
                    <div class="card jurusan-card-modern border-0 rounded-4 h-100 shadow-sm bg-white overflow-hidden wow fadeInUp" data-wow-delay=".2s" style="transition: all 0.3s ease;">
                        <!-- Bagian Header Visual -->
                        <div class="position-relative bg-navy d-flex align-items-center justify-content-center overflow-hidden" style="height: 140px;">
                            <!-- Ikon Background Transparan -->
                            <i class="fas fa-network-wired position-absolute text-white" style="font-size: 8rem; opacity: 0.05; right: -20px; bottom: -20px;"></i>
                        </div>
                        <!-- Bagian Konten -->
                        <div class="card-body px-4 pb-5 pt-0 text-center position-relative">
                            <!-- Floating Icon -->
                            <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center shadow" style="width: 80px; height: 80px; margin-top: -40px; border: 4px solid #fff; position: relative; z-index: 2;">
                                <i class="fas fa-network-wired fa-2x text-navy"></i>
                            </div>
                            <h4 class="fw-bold text-dark mt-4 mb-3">Teknik Komputer & Jaringan (TKJ)</h4>
                            <p class="text-muted small mb-0">
                                Fokus pada perakitan infrastruktur IT, instalasi jaringan, manajemen server, dan <em>troubleshooting</em> perangkat keras.
                            </p>
                        </div>
                        <!-- Hover Border Bottom -->
                        <div class="position-absolute bottom-0 start-0 w-100 bg-primary" style="height: 4px; opacity: 0.8;"></div>
                    </div>
                </div>

                <!-- RPL -->
                <div class="col-md-6 col-lg-4">
                    <div class="card jurusan-card-modern border-0 rounded-4 h-100 shadow-sm bg-white overflow-hidden wow fadeInUp" data-wow-delay=".3s" style="transition: all 0.3s ease;">
                        <div class="position-relative bg-navy d-flex align-items-center justify-content-center overflow-hidden" style="height: 140px;">
                            <i class="fas fa-code position-absolute text-white" style="font-size: 8rem; opacity: 0.05; right: -20px; bottom: -20px;"></i>
                        </div>
                        <div class="card-body px-4 pb-5 pt-0 text-center position-relative">
                            <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center shadow" style="width: 80px; height: 80px; margin-top: -40px; border: 4px solid #fff; position: relative; z-index: 2;">
                                <i class="fas fa-code fa-2x text-navy"></i>
                            </div>
                            <h4 class="fw-bold text-dark mt-4 mb-3">Rekayasa Perangkat Lunak (RPL)</h4>
                            <p class="text-muted small mb-0">
                                Mencetak talenta programmer yang mumpuni di bidang <em>Full-stack Web Development</em>, penguasaan arsitektur MVC, integrasi <em>database MySQL</em>, hingga skrip otomatisasi.
                            </p>
                        </div>
                        <div class="position-absolute bottom-0 start-0 w-100 bg-primary" style="height: 4px; opacity: 0.8;"></div>
                    </div>
                </div>

                <!-- DKV -->
                <div class="col-md-6 col-lg-4">
                    <div class="card jurusan-card-modern border-0 rounded-4 h-100 shadow-sm bg-white overflow-hidden wow fadeInUp" data-wow-delay=".4s" style="transition: all 0.3s ease;">
                        <div class="position-relative bg-navy d-flex align-items-center justify-content-center overflow-hidden" style="height: 140px;">
                            <i class="fas fa-palette position-absolute text-white" style="font-size: 8rem; opacity: 0.05; right: -20px; bottom: -20px;"></i>
                        </div>
                        <div class="card-body px-4 pb-5 pt-0 text-center position-relative">
                            <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center shadow" style="width: 80px; height: 80px; margin-top: -40px; border: 4px solid #fff; position: relative; z-index: 2;">
                                <i class="fas fa-palette fa-2x text-navy"></i>
                            </div>
                            <h4 class="fw-bold text-dark mt-4 mb-3">Desain Komunikasi Visual (DKV)</h4>
                            <p class="text-muted small mb-0">
                                Mengasah kreativitas dari sisi desain grafis, ilustrasi, <em>editing</em> multimedia, hingga produksi klip video untuk kebutuhan industri kreatif.
                            </p>
                        </div>
                        <div class="position-absolute bottom-0 start-0 w-100 bg-primary" style="height: 4px; opacity: 0.8;"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- VIDEO PROFIL SEKOLAH          --}}
    {{-- ============================= --}}
    <section>
        <div class="video-area-1 position-relative overflow-hidden" data-overlay="title" data-opacity="3" data-bg-src="{{ asset('assets/img/sekolah/S2.jpg') }}">
            <div class="video-thumb1-1 video-box-center" style="display: flex; justify-content: center; align-items: center; min-height: 300px;">
                <a href="https://www.youtube.com/watch?v=-Ydebu14QlA" class="video-play-btn popup-video">
                    <i class="fa-sharp fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </section>
    
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

    {{-- ============================= --}}
    {{-- PROGRAM KEAHLIAN (UPDATED)    --}}
    {{-- ============================= --}}
    <section class="space bg-smooth" id="jurusan-sec">
        <div class="container th-container4">
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center mb-5">
                        <span class="sub-title text-navy fw-bold text-anim">PROGRAM KEAHLIAN</span>
                        <h2 class="sec-title text-anim2">Jurusan yang Kami Tawarkan</h2>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                
                <!-- TKJ -->
                <div class="col-md-6 col-lg-4">
                    <div class="card jurusan-card-modern border-0 rounded-4 h-100 shadow-sm bg-white overflow-hidden wow fadeInUp" data-wow-delay=".2s" style="transition: all 0.3s ease;">
                        <!-- Bagian Header Visual -->
                        <div class="position-relative bg-navy d-flex align-items-center justify-content-center overflow-hidden" style="height: 140px;">
                            <!-- Ikon Background Transparan -->
                            <i class="fas fa-network-wired position-absolute text-white" style="font-size: 8rem; opacity: 0.05; right: -20px; bottom: -20px;"></i>
                        </div>
                        <!-- Bagian Konten -->
                        <div class="card-body px-4 pb-5 pt-0 text-center position-relative">
                            <!-- Floating Icon -->
                            <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center shadow" style="width: 80px; height: 80px; margin-top: -40px; border: 4px solid #fff; position: relative; z-index: 2;">
                                <i class="fas fa-network-wired fa-2x text-navy"></i>
                            </div>
                            <h4 class="fw-bold text-dark mt-4 mb-3">Teknik Komputer & Jaringan (TKJ)</h4>
                            <p class="text-muted small mb-0">
                                Fokus pada perakitan infrastruktur IT, instalasi jaringan, manajemen server, dan <em>troubleshooting</em> perangkat keras.
                            </p>
                        </div>
                        <!-- Hover Border Bottom -->
                        <div class="position-absolute bottom-0 start-0 w-100 bg-primary" style="height: 4px; opacity: 0.8;"></div>
                    </div>
                </div>

                <!-- RPL -->
                <div class="col-md-6 col-lg-4">
                    <div class="card jurusan-card-modern border-0 rounded-4 h-100 shadow-sm bg-white overflow-hidden wow fadeInUp" data-wow-delay=".3s" style="transition: all 0.3s ease;">
                        <div class="position-relative bg-navy d-flex align-items-center justify-content-center overflow-hidden" style="height: 140px;">
                            <i class="fas fa-code position-absolute text-white" style="font-size: 8rem; opacity: 0.05; right: -20px; bottom: -20px;"></i>
                        </div>
                        <div class="card-body px-4 pb-5 pt-0 text-center position-relative">
                            <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center shadow" style="width: 80px; height: 80px; margin-top: -40px; border: 4px solid #fff; position: relative; z-index: 2;">
                                <i class="fas fa-code fa-2x text-navy"></i>
                            </div>
                            <h4 class="fw-bold text-dark mt-4 mb-3">Rekayasa Perangkat Lunak (RPL)</h4>
                            <p class="text-muted small mb-0">
                                Mencetak talenta programmer yang mumpuni di bidang <em>Full-stack Web Development</em>, penguasaan arsitektur MVC, integrasi <em>database MySQL</em>, hingga skrip otomatisasi.
                            </p>
                        </div>
                        <div class="position-absolute bottom-0 start-0 w-100 bg-primary" style="height: 4px; opacity: 0.8;"></div>
                    </div>
                </div>

                <!-- DKV -->
                <div class="col-md-6 col-lg-4">
                    <div class="card jurusan-card-modern border-0 rounded-4 h-100 shadow-sm bg-white overflow-hidden wow fadeInUp" data-wow-delay=".4s" style="transition: all 0.3s ease;">
                        <div class="position-relative bg-navy d-flex align-items-center justify-content-center overflow-hidden" style="height: 140px;">
                            <i class="fas fa-palette position-absolute text-white" style="font-size: 8rem; opacity: 0.05; right: -20px; bottom: -20px;"></i>
                        </div>
                        <div class="card-body px-4 pb-5 pt-0 text-center position-relative">
                            <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center shadow" style="width: 80px; height: 80px; margin-top: -40px; border: 4px solid #fff; position: relative; z-index: 2;">
                                <i class="fas fa-palette fa-2x text-navy"></i>
                            </div>
                            <h4 class="fw-bold text-dark mt-4 mb-3">Desain Komunikasi Visual (DKV)</h4>
                            <p class="text-muted small mb-0">
                                Mengasah kreativitas dari sisi desain grafis, ilustrasi, <em>editing</em> multimedia, hingga produksi klip video untuk kebutuhan industri kreatif.
                            </p>
                        </div>
                        <div class="position-absolute bottom-0 start-0 w-100 bg-primary" style="height: 4px; opacity: 0.8;"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

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