<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin Panel SMKIK') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=sora:400,500,600,700,800&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @vite(['resources/css/app.css', 'resources/css/admin.css', 'resources/js/app.js'])
    </head>
    <body class="admin-shell antialiased" x-data="{ sidebarOpen: false }">
        <!-- THESIS: Admin SMKIK as a school ceremony desk, not a SaaS console. OWN-WORLD: forest field, crimson sash, gold braid. STORY: staff scan, act, and leave. FIRST VIEWPORT: green rail, tricolor bar, parchment canvas. FORM: operate / pinned tricolor. FINISH: unreviewed and undocumented is unfinished; this build ends with the finish review, the verdict, DESIGN.md, and every shipping raster carrying its provenance -->
        <div class="min-h-screen flex">
            <div
                class="admin-overlay fixed inset-0 z-30 md:hidden"
                x-show="sidebarOpen"
                x-cloak
                @click="sidebarOpen = false"
            ></div>

            <aside class="admin-sidebar w-64 flex-shrink-0 z-40 flex flex-col h-screen sticky top-0 md:translate-x-0" :class="sidebarOpen ? 'is-open' : ''">
                <div class="admin-sash flex-shrink-0"></div>
                <div class="admin-brand flex items-center justify-between px-5 py-4 flex-shrink-0">
                    <div class="flex items-center gap-2">
                        <span class="text-xl font-extrabold tracking-wider text-[var(--gold)]">SMKIK</span>
                        <span class="text-[10px] bg-[var(--crimson)] text-white font-bold uppercase px-2 py-0.5 rounded">Admin</span>
                    </div>
                    <button type="button" class="md:hidden text-[var(--gold)]" @click="sidebarOpen = false" aria-label="Tutup menu">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <nav class="flex-1 px-3 py-4 space-y-1 overflow-y-auto sidebar-scroll">
                    <p class="admin-nav-label px-3 text-[10px] font-bold uppercase mt-1 mb-2">Utama</p>
                    <a href="{{ route('dashboard') }}" class="admin-nav-link {{ request()->routeIs('dashboard') ? 'is-active' : '' }}">
                        <i class="fas fa-tachometer-alt w-5 text-center"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="{{ Route::has('berita.index') ? route('berita.index') : '#' }}" class="admin-nav-link {{ request()->routeIs('berita.*') ? 'is-active' : '' }}">
                        <i class="fas fa-newspaper w-5 text-center"></i>
                        <span>Kelola Berita</span>
                    </a>
                    <a href="{{ Route::has('pengumuman.index') ? route('pengumuman.index') : '#' }}" class="admin-nav-link {{ request()->routeIs('pengumuman.*') ? 'is-active' : '' }}">
                        <i class="fas fa-bullhorn w-5 text-center"></i>
                        <span>Pengumuman</span>
                    </a>

                    <p class="admin-nav-label px-3 text-[10px] font-bold uppercase mt-6 mb-2">Akademik &amp; Kejuruan</p>
                    <a href="{{ Route::has('jurusan.index') ? route('jurusan.index') : '#' }}" class="admin-nav-link {{ request()->routeIs('jurusan.*') || request()->routeIs('admin.jurusan.*') ? 'is-active' : '' }}">
                        <i class="fas fa-school w-5 text-center"></i>
                        <span>Kelola Jurusan</span>
                    </a>
                    <a href="{{ Route::has('guru.index') ? route('guru.index') : '#' }}" class="admin-nav-link {{ request()->routeIs('guru.*') ? 'is-active' : '' }}">
                        <i class="fas fa-chalkboard-teacher w-5 text-center"></i>
                        <span>Guru &amp; Staf</span>
                    </a>
                    <a href="{{ Route::has('mitra.index') ? route('mitra.index') : '#' }}" class="admin-nav-link {{ request()->routeIs('mitra.*') ? 'is-active' : '' }}">
                        <i class="fas fa-industry w-5 text-center"></i>
                        <span>Mitra Industri (DUDI)</span>
                    </a>
                    <a href="{{ Route::has('fasilitas.index') ? route('fasilitas.index') : '#' }}" class="admin-nav-link {{ request()->routeIs('fasilitas.*') ? 'is-active' : '' }}">
                        <i class="fas fa-building w-5 text-center"></i>
                        <span>Fasilitas Sekolah</span>
                    </a>

                    <p class="admin-nav-label px-3 text-[10px] font-bold uppercase mt-6 mb-2">Kesiswaan &amp; PPDB</p>
                    <a href="{{ Route::has('ppdb.index') ? route('ppdb.index') : '#' }}" class="admin-nav-link {{ request()->routeIs('ppdb.*') ? 'is-active' : '' }}">
                        <i class="fas fa-user-graduate w-5 text-center"></i>
                        <span>PPDB Online</span>
                    </a>
                    <a href="{{ Route::has('ekskul.index') ? route('ekskul.index') : '#' }}" class="admin-nav-link {{ request()->routeIs('ekskul.*') ? 'is-active' : '' }}">
                        <i class="fas fa-futbol w-5 text-center"></i>
                        <span>Ekstrakurikuler</span>
                    </a>
                    <a href="{{ Route::has('galeri.index') ? route('galeri.index') : '#' }}" class="admin-nav-link {{ request()->routeIs('galeri.*') ? 'is-active' : '' }}">
                        <i class="fas fa-images w-5 text-center"></i>
                        <span>Galeri Kegiatan</span>
                    </a>

                    <p class="admin-nav-label px-3 text-[10px] font-bold uppercase mt-6 mb-2">Sistem</p>
                    <a href="{{ url('/') }}" target="_blank" class="admin-nav-link">
                        <i class="fas fa-external-link-alt w-5 text-center"></i>
                        <span>Lihat Website</span>
                    </a>
                    <a href="{{ Route::has('admin.profile.edit') ? route('admin.profile.edit') : (Route::has('profile.edit') ? route('profile.edit') : '#') }}"
                        class="admin-nav-link {{ request()->routeIs('admin.profile.*') || request()->routeIs('profile.*') ? 'is-active' : '' }}">
                        <i class="fas fa-user-cog w-5 text-center"></i>
                        <span>Profil Akun</span>
                    </a>

                    <form method="POST" action="{{ route('logout') }}" id="logout-form" class="w-full pt-2 pb-4">
                        @csrf
                        <button type="button" onclick="confirmLogout()" class="admin-nav-link admin-nav-logout w-full text-left">
                            <i class="fas fa-sign-out-alt w-5 text-center"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </nav>
            </aside>

            <div class="flex-1 flex flex-col min-w-0 overflow-hidden">
                <header class="admin-header z-10">
                    <div class="admin-sash"></div>
                    <div class="flex items-center justify-between px-4 md:px-6 py-3">
                        <div class="flex items-center gap-3 min-w-0">
                            <button type="button" class="md:hidden text-[var(--forest)] text-lg" @click="sidebarOpen = true" aria-label="Buka menu">
                                <i class="fas fa-bars"></i>
                            </button>
                            @isset($header)
                                <div class="text-[var(--forest)] font-semibold text-base md:text-lg truncate">
                                    {{ $header }}
                                </div>
                            @endisset
                        </div>

                        <div class="flex items-center space-x-3">
                            <div class="text-right hidden sm:block">
                                <p class="text-sm font-semibold text-[var(--forest)]">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-[var(--crimson)] font-semibold">Administrator</p>
                            </div>
                            <div class="admin-avatar h-9 w-9 rounded-full flex items-center justify-center font-bold uppercase">
                                {{ substr(Auth::user()->name, 0, 2) }}
                            </div>
                        </div>
                    </div>
                </header>

                <main class="admin-main flex-1 overflow-y-auto p-5 md:p-8">
                    {{ $slot }}
                </main>
            </div>
        </div>

        <style>[x-cloak]{display:none !important;}</style>
        <script>
            function confirmLogout() {
                Swal.fire({
                    title: 'Yakin ingin keluar?',
                    text: "Anda akan mengakhiri sesi admin saat ini.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#b42318',
                    cancelButtonColor: '#123d27',
                    confirmButtonText: 'Ya, Keluar',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('logout-form').submit();
                    }
                });
            }

            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: "{{ session('success') }}",
                    timer: 3000,
                    showConfirmButton: false,
                    confirmButtonColor: '#123d27'
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: "{{ session('error') }}",
                    confirmButtonColor: '#b42318'
                });
            @endif
        </script>
    </body>
</html>
