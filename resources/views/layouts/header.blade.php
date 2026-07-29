<div class="preloader">
    <button class="th-btn preloaderCls">Batal Preloader</button>
    <div class="preloader-inner">
        <img alt="img" src="{{ asset('assets/img/smkik/logo.png') }}"/>
    </div>
</div>

<div class="sidemenu-wrapper">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget footer-widget">
            <div class="th-widget-about">
                <div class="about-logo">
                    <a href="/"><img alt="Stadum" src="{{ asset('assets/img/smkik/logo.png') }}"/></a>
                </div>
                <p class="about-text">SMKIK Ampana Kota berkomitmen untuk mencetak generasi muda yang inovatif, terampil, berkarakter kuat, dan siap bersaing di Dunia Usaha serta Dunia Industri (DUDI).</p>
                <div class="footer-info">
                    <a href="#"><span class="footer-info-icon"><i class="fa-solid fa-location-dot"></i></span> Ampana Kota, Kab. Tojo Una-Una, Sulteng</a>
                    <a href="mailto:info@smkik.sch.id"><span class="footer-info-icon"><i class="fa-solid fa-envelope"></i></span> info@smkik.sch.id</a>
                </div>
            </div>
        </div>
        <div class="widget footer-widget">
            <h3 class="widget_title">Berita Terbaru</h3>
            <div class="recent-post-wrap">
                
                {{-- Mengambil 3 berita terbaru langsung dari database --}}
                @php
                    $sidebar_berita = \App\Models\Berita::latest()->take(3)->get();
                @endphp

                {{-- Melakukan perulangan untuk menampilkan berita --}}
                @forelse($sidebar_berita as $berita)
                <div class="recent-post">
                    <div class="media-img">
                        {{-- Jika ada gambar tampilkan, jika tidak pakai gambar bawaan --}}
                        <a href="#">
                            <img alt="{{ $berita->judul }}" src="{{ $berita->gambar ? asset('storage/' . $berita->gambar) : asset('assets/img/blog/recent-post-1-1.jpg') }}" style="width: 80px; height: 80px; object-fit: cover;"/>
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="post-title"><a class="text-inherit" href="{{ route('berita.detail', $berita->slug) }}">{{ $berita->judul }}</a></h4>

                        <a href="{{ route('berita.detail', $berita->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
                        <div class="recent-post-meta">
                            <a href="#"><i class="far fa-calendar"></i>{{ $berita->created_at->format('d/m/Y') }}</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="recent-post">
                    <p class="text-white">Belum ada berita yang diterbitkan.</p>
                </div>
                @endforelse

            </div>
        </div>
        <div class="widget footer-widget">
            <h3 class="widget_title">Sosial Media Kami</h3>
            <div class="th-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="popup-search-box">
    <button class="searchClose"><i class="far fa-times"></i></button>
    <form action="#">
        <input placeholder="Apa yang sedang Anda cari?" type="text"/>
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>

<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="/"><img alt="Stadum" src="{{ asset('assets/img/smkik/logo.png') }}"/></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="{{ route('profil') }}">Profil Sekolah</a></li>
                <li><a href="{{ url('/#program-sec') }}">Program Keahlian</a></li>
                <li><a href="{{ url('/#ppdb-sec') }}">Informasi PPDB</a></li>
                <li><a href="">Hubungi Kami</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container th-container4">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul class="header-left-wrap">
                            <li><a href="#">Staf & Guru</a></li>
                            <li><a href="#">Alumni (BKK)</a></li>
                            <li><a href="#">Mitra Industri</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul class="header-right-wrap">
                            <li><i class="fa-solid fa-user"></i> <a href="{{ route('login') }}">Login Admin</a></li>
                            <li><i class="fas fa-comments"></i> <a href="#">Bantuan PPDB</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-info d-none d-sm-block">
        <div class="container th-container2">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="/"><img alt="Stadum" src="{{ asset('assets/img/smkik/logo.png') }}" width="300"/></a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-info-right">
                        <div class="header-info-item">
                            <div class="header-info-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="header-info-content">
                                <span class="header-info-text">Alamat Sekolah</span>
                                <h3 class="header-info-title"><a href="#">Ampana Kota, Sulteng</a></h3>
                            </div>
                        </div>
                        <div class="header-info-item">
                            <div class="header-info-icon"><i class="fa-solid fa-envelope"></i></div>
                            <div class="header-info-content">
                                <span class="header-info-text">Email Resmi</span>
                                <h3 class="header-info-title"><a href="mailto:info@smkik.sch.id">info@smkik.sch.id</a></h3>
                            </div>
                        </div>
                        <div class="header-info-item">
                            <div class="header-info-icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="header-info-content">
                                <span class="header-info-text">Telepon (Admin)</span>
                                <h3 class="header-info-title"><a href="tel:+6281123456789">+62 811 2345 6789</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container th-container2">
                <div class="menu-wrapp">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-left d-flex align-items-center">
                                <div class="header-logo d-block d-sm-none">
                                    <a href="/"><img alt="Stadum" src="{{ asset('assets/img/smkik/logo.png') }}" width="200"/></a>
                                </div>
                                <div class="header-button d-none d-sm-block">
                                    <a class="th-btn" href="#">Hubungi Kami <img alt="icon" class="th-arrow" src="{{ asset('assets/img/icon/right-icon.svg') }}"/></a>
                                </div>
                                <nav class="main-menu d-none d-xl-block">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Beranda</a></li>
                                        <li><a href="{{ route('profil') }}">Profil Sekolah</a></li>
                                        <li><a href="{{ url('/#program-sec') }}">Program Keahlian</a></li>
                                        <li><a href="{{ url('/#ppdb-sec') }}">Informasi PPDB</a></li>
                                        <li><a href="">Hubungi Kami</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-auto ms-lg-auto">
                            <div class="header-button">
                                <form class="search-form">
                                    <input placeholder="Cari info..." type="text"/>
                                    <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                                </form>
                                <a class="icon-btn sideMenuToggler d-none d-xl-block" href="#"><img alt="" src="{{ asset('assets/img/icon/grid2.svg') }}"/></a>
                                <button class="th-menu-toggle d-inline-block d-xl-none" type="button"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>