<footer class="footer-wrapper footer-default footer-overlay" data-bg-src="{{ asset('assets/img/bg/footer-bg-1.jpg') }}">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-40 align-items-center justify-content-between">
                <div class="col-xl-auto">
                    <div class="footer-logo z-index-common" data-cue="slideInLeft">
                        <a href="/"><img alt="Stadum" src="{{ asset('assets/img/logo-white.svg') }}"/></a>
                    </div>
                </div>
                <div class="col-xl-auto">
                    <div class="client-group-wrap z-index-common" data-cue="slideInRight">
                        <img alt="img" src="{{ asset('assets/img/normal/client-group1.png') }}"/>
                        <h4 class="title">Ada Pertanyaan? <a href="#"><img alt="" src="{{ asset('assets/img/icon/chat2.svg') }}"/><span class="text-theme"> Admin</span></a> Tanya Sekarang</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="widget-area">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <h3 class="widget_title">Tentang SMKIK Ampana</h3>
                            <p class="about-text">Berfokus pada pengembangan teknologi terapan dan kompetensi industri. Menciptakan lulusan siap kerja berlandaskan iman dan kedisiplinan tinggi.</p>
                            <div class="footer-info">
                                <a href="#"><span class="footer-info-icon"><i class="fa-solid fa-location-dot"></i></span> Ampana Kota, Sulawesi Tengah</a>
                                <a href="mailto:info@smkik.sch.id"><span class="footer-info-icon"><i class="fa-solid fa-envelope"></i></span> info@smkik.sch.id</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Tautan Penting</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#ppdb-sec">Pendaftaran PPDB Online</a></li>
                                <li><a href="#">Profil Sekolah</a></li>
                                <li><a href="#">Data Guru & Staf</a></li>
                                <li><a href="#">Pusat Bantuan (FAQ)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Jurusan & Layanan</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">Teknik Komputer & Jaringan</a></li>
                                <li><a href="#">Rekayasa Perangkat Lunak</a></li>
                                <li><a href="#">Multimedia (DKV)</a></li>
                                <li><a href="#login-form">Portal E-Learning</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget th-widget-instagram footer-widget">
                        <h3 class="widget_title">Galeri Instagram</h3>
                        <div class="instagram-feeds">
                            <div class="insta-thumb">
                                <img alt="Image" src="{{ asset('assets/img/widget/insta-feed-1-1.jpg') }}"/>
                                <a class="insta-btn popup-image" href="{{ asset('assets/img/widget/insta-feed-1-1.jpg') }}"><i class="fab fa-instagram"></i></a>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap z-index-common">
        <div class="container">
            <div class="row justify-content-center gy-3 align-items-center">
                <div class="col-lg-6">
                    <p class="copyright-text"><i class="fal fa-copyright"></i> Hak Cipta 2026 <a href="/">SMKIK Ampana Kota</a>. Seluruh Hak Dilindungi.</p>
                </div>
                <div class="col-lg-6 text-lg-end text-center">
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Kebijakan Privasi</a></li>
                            <li><a href="#">Syarat Ketentuan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="scroll-top">
    <svg class="progress-circle svg-content" height="100%" viewbox="-1 -1 102 102" width="100%">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

<div class="popup-login-register mfp-hide" id="login-form">
    <ul class="nav" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button aria-controls="pills-home" aria-selected="false" class="nav-menu" data-bs-target="#pills-home" data-bs-toggle="pill" id="pills-home-tab" role="tab" type="button">Masuk</button>
        </li>
        <li class="nav-item" role="presentation">
            <button aria-controls="pills-profile" aria-selected="true" class="nav-menu active" data-bs-target="#pills-profile" data-bs-toggle="pill" id="pills-profile-tab" role="tab" type="button">Daftar E-Learning</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div aria-labelledby="pills-home-tab" class="tab-pane fade" id="pills-home" role="tabpanel">
            <h3 class="box-title mb-30">Masuk ke akun Anda</h3>
            <div class="th-login-form">
                <form action="#" class="login-form" method="POST">
                    <div class="row">
                        <div class="form-group col-12">
                            <label>NISN atau Email</label>
                            <input class="form-control" name="email" required="required" type="text"/>
                        </div>
                        <div class="form-group col-12">
                            <label>Kata Sandi</label>
                            <input class="form-control" name="password" required="required" type="password"/>
                        </div>
                        <div class="form-btn mb-20 col-12">
                            <button class="th-btn btn-fw th-radius2">Masuk Sekarang</button>
                        </div>
                    </div>
                    <div id="forgot_url"><a href="#">Lupa Kata Sandi?</a></div>
                </form>
            </div>
        </div>
        <div aria-labelledby="pills-profile-tab" class="tab-pane fade active show" id="pills-profile" role="tabpanel">
            <h3 class="th-form-title mb-30">Buat Akun Portal Siswa</h3>
            <form action="#" class="login-form" method="POST">
                <div class="row">
                    <div class="form-group col-12">
                        <label>NISN (Nomor Induk Siswa Nasional)*</label>
                        <input class="form-control" name="nisn" required="required" type="text"/>
                    </div>
                    <div class="form-group col-12">
                        <label>Nama Lengkap*</label>
                        <input class="form-control" name="name" required="required" type="text"/>
                    </div>
                    <div class="form-group col-12">
                        <label>Email Aktif*</label>
                        <input class="form-control" name="email" required="required" type="email"/>
                    </div>
                    <div class="statement">
                        <span class="register-notes">Kata sandi akan dikirim ke email terdaftar Anda. Hubungi TU bila ada kendala.</span>
                    </div>
                    <div class="form-btn mt-20 col-12">
                        <button class="th-btn btn-fw th-radius2">Daftarkan Akun</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>