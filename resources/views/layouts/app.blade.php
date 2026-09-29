<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin Panel SMKIK') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Font Awesome 6 CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .sidebar-scroll::-webkit-scrollbar {
                width: 5px;
            }
            .sidebar-scroll::-webkit-scrollbar-track {
                background: #052e16;
            }
            .sidebar-scroll::-webkit-scrollbar-thumb {
                background: #166534;
                border-radius: 4px;
            }
            .sidebar-scroll::-webkit-scrollbar-thumb:hover {
                background: #15803d;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-slate-50 text-gray-900 h-screen overflow-hidden">
        <div class="h-screen md:flex overflow-hidden">

            <!-- OVERLAY MOBILE -->
            <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-30 hidden md:hidden" onclick="toggleSidebar()"></div>

            <!-- SIDEBAR -->
            <aside id="sidebar" class="fixed inset-y-0 left-0 z-40 w-72 -translate-x-full transition-transform duration-200 ease-in-out md:translate-x-0 md:static md:w-64 bg-green-950 text-white flex-shrink-0 shadow-2xl flex flex-col h-screen">
                <!-- Brand Header -->
                <div class="flex items-center justify-between px-6 py-5 border-b border-green-900/80 bg-green-950 flex-shrink-0">
                    <div class="flex items-center space-x-2">
                        <span class="text-xl font-black tracking-wider text-emerald-400">SMKIK</span>
                        <span class="text-xs bg-green-600 text-white font-bold uppercase px-2 py-0.5 rounded">Admin</span>
                    </div>
                    <button type="button" class="md:hidden text-emerald-300 hover:text-white" onclick="toggleSidebar()" aria-label="Tutup menu">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <!-- Navigation Links (Scrollable) -->
                <nav class="flex-1 px-4 py-4 space-y-1 overflow-y-auto sidebar-scroll">

                    <!-- MENU UTAMA -->
                    <p class="px-4 text-[10px] font-bold uppercase tracking-wider text-green-500 mt-2 mb-2">Utama</p>

                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm transition duration-200 {{ request()->routeIs('dashboard') ? 'bg-green-600 text-white font-semibold shadow-md' : 'text-green-200/80 hover:bg-green-900 hover:text-white' }}">
                        <i class="fas fa-tachometer-alt w-5 text-center"></i>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('berita.index') }}" class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm transition duration-200 {{ request()->routeIs('berita.*') ? 'bg-green-600 text-white font-semibold shadow-md' : 'text-green-200/80 hover:bg-green-900 hover:text-white' }}">
                        <i class="fas fa-newspaper w-5 text-center"></i>
                        <span>Kelola Berita</span>
                    </a>

                    <a href="{{ route('pengumuman.index') }}" class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm transition duration-200 {{ request()->routeIs('pengumuman.*') ? 'bg-green-600 text-white font-semibold shadow-md' : 'text-green-200/80 hover:bg-green-900 hover:text-white' }}">
                        <i class="fas fa-bullhorn w-5 text-center"></i>
                        <span>Pengumuman</span>
                    </a>


                    <!-- AKADEMIK & KEJURUAN -->
                    <p class="px-4 text-[10px] font-bold uppercase tracking-wider text-green-500 mt-6 mb-2">Akademik & Kejuruan</p>

                    <a href="{{ route('jurusan.index') }}" class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm transition duration-200 {{ request()->routeIs('jurusan.*') ? 'bg-green-600 text-white font-semibold shadow-md' : 'text-green-200/80 hover:bg-green-900 hover:text-white' }}">
                        <i class="fas fa-school w-5 text-center"></i>
                        <span>Kelola Jurusan</span>
                    </a>

                    <a href="{{ route('guru.index') }}" class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm transition duration-200 {{ request()->routeIs('guru.*') ? 'bg-green-600 text-white font-semibold shadow-md' : 'text-green-200/80 hover:bg-green-900 hover:text-white' }}">
                        <i class="fas fa-chalkboard-teacher w-5 text-center"></i>
                        <span>Guru & Staf</span>
                    </a>

                    <a href="{{ route('mitra.index') }}" class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm transition duration-200 {{ request()->routeIs('mitra.*') ? 'bg-green-600 text-white font-semibold shadow-md' : 'text-green-200/80 hover:bg-green-900 hover:text-white' }}">
                        <i class="fas fa-industry w-5 text-center"></i>
                        <span>Mitra Industri (DUDI)</span>
                    </a>

                    <a href="{{ route('fasilitas.index') }}" class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm transition duration-200 {{ request()->routeIs('fasilitas.*') ? 'bg-green-600 text-white font-semibold shadow-md' : 'text-green-200/80 hover:bg-green-900 hover:text-white' }}">
                        <i class="fas fa-building w-5 text-center"></i>
                        <span>Fasilitas Sekolah</span>
                    </a>


                    <!-- KESISWAAN & PPDB -->
                    <p class="px-4 text-[10px] font-bold uppercase tracking-wider text-green-500 mt-6 mb-2">Kesiswaan & PPDB</p>

                    <a href="{{ route('ppdb.index') }}" class="flex items-center justify-between space-x-3 px-4 py-2.5 rounded-lg text-sm transition duration-200 {{ request()->routeIs('ppdb.*') ? 'bg-green-600 text-white font-semibold shadow-md' : 'text-green-200/80 hover:bg-green-900 hover:text-white' }}">
                        <span class="flex items-center space-x-3">
                            <i class="fas fa-user-graduate w-5 text-center"></i>
                            <span>PPDB Online</span>
                        </span>
                        @php
                            $pendingCount = \App\Models\Ppdb::where('status', 'pending')->count();
                        @endphp
                        @if($pendingCount > 0)
                            <span class="shrink-0 bg-amber-400 text-green-950 text-[10px] font-black px-1.5 py-0.5 rounded-full">{{ $pendingCount }}</span>
                        @endif
                    </a>

                    <a href="{{ route('ekskul.index') }}" class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm transition duration-200 {{ request()->routeIs('ekskul.*') ? 'bg-green-600 text-white font-semibold shadow-md' : 'text-green-200/80 hover:bg-green-900 hover:text-white' }}">
                        <i class="fas fa-futbol w-5 text-center"></i>
                        <span>Ekstrakurikuler</span>
                    </a>

                    <a href="{{ route('galeri.index') }}" class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm transition duration-200 {{ request()->routeIs('galeri.*') ? 'bg-green-600 text-white font-semibold shadow-md' : 'text-green-200/80 hover:bg-green-900 hover:text-white' }}">
                        <i class="fas fa-images w-5 text-center"></i>
                        <span>Galeri Kegiatan</span>
                    </a>


                    <!-- PENGATURAN -->
                    <p class="px-4 text-[10px] font-bold uppercase tracking-wider text-green-500 mt-6 mb-2">Sistem & Pengaturan</p>

                    <a href="{{ url('/') }}" target="_blank" class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm text-green-200/80 hover:bg-green-900 hover:text-white transition duration-200">
                        <i class="fas fa-external-link-alt w-5 text-center"></i>
                        <span>Lihat Website</span>
                    </a>

                    <a href="{{ route('admin.profile.edit') }}" class="flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm transition duration-200 {{ request()->routeIs('admin.profile.*') ? 'bg-green-600 text-white font-semibold shadow-md' : 'text-green-200/80 hover:bg-green-900 hover:text-white' }}">
                        <i class="fas fa-user-cog w-5 text-center"></i>
                        <span>Profil Akun</span>
                    </a>

                    <form method="POST" action="{{ route('logout') }}" id="logout-form" class="w-full pt-2 pb-4">
                        @csrf
                        <button type="button" onclick="confirmLogout()" class="w-full flex items-center space-x-3 px-4 py-2.5 rounded-lg text-sm text-red-300 hover:bg-red-950/60 hover:text-red-200 transition duration-200 text-left">
                            <i class="fas fa-sign-out-alt w-5 text-center"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </nav>
            </aside>

            <!-- MAIN CONTENT AREA -->
            <div class="flex-1 flex flex-col min-w-0 h-screen overflow-y-auto">

                <!-- TOP HEADER -->
                <header class="bg-white shadow-sm border-b border-green-100 z-10 flex items-center justify-between gap-4 px-4 md:px-6 py-4 sticky top-0">
                    <div class="flex items-center min-w-0">
                        <button type="button" class="md:hidden mr-3 text-green-800 hover:bg-green-50 p-2 rounded-lg" onclick="toggleSidebar()" aria-label="Buka menu">
                            <i class="fas fa-bars text-lg"></i>
                        </button>
                        <div class="text-gray-800 font-semibold text-lg">
                            @isset($header)
                                {{ $header }}
                            @endisset
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <a href="{{ route('ppdb.index', ['status' => 'pending']) }}" class="relative text-green-700 hover:bg-green-50 p-2.5 rounded-lg transition" title="{{ $pendingCount }} pendaftar menunggu verifikasi">
                            <i class="fas fa-bell"></i>
                            @if($pendingCount > 0)
                                <span class="absolute -top-1 -right-1 bg-amber-400 text-green-950 text-[10px] font-black min-w-[18px] h-[18px] flex items-center justify-center rounded-full px-1">{{ $pendingCount }}</span>
                            @endif
                        </a>
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-semibold text-gray-700">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-green-600 font-medium">Administrator</p>
                        </div>
                        <div class="h-9 w-9 rounded-full bg-green-100 border border-green-200 flex items-center justify-center text-green-700 font-bold uppercase shadow-inner">
                            {{ substr(Auth::user()->name, 0, 2) }}
                        </div>
                    </div>
                </header>

                <!-- PAGE CONTENT -->
                <main class="flex-1 p-4 md:p-8 bg-slate-50">
                    {{ $slot }}
                </main>

            </div>
        </div>

        <!-- SCRIPT GLOBAL -->
        <script>
            // Sidebar mobile
            function toggleSidebar() {
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('sidebar-overlay');
                sidebar.classList.toggle('-translate-x-full');
                overlay.classList.toggle('hidden');
            }

            // Logout Confirmation
            function confirmLogout() {
                Swal.fire({
                    title: 'Yakin ingin keluar?',
                    text: "Anda akan mengakhiri sesi admin saat ini.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#15803d',
                    cancelButtonColor: '#64748b',
                    confirmButtonText: 'Ya, Keluar',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('logout-form').submit();
                    }
                });
            }

            // Konfirmasi hapus global (dipakai semua halaman admin)
            function confirmDelete(button) {
                const title = button.dataset.title || 'Hapus data ini?';
                const text = button.dataset.text || 'Data yang dihapus tidak dapat dikembalikan!';
                Swal.fire({
                    title: title,
                    text: text,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc2626',
                    cancelButtonColor: '#64748b',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        button.closest('form').submit();
                    }
                });
            }

            // Flash Notification Otomatis
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: "{{ addslashes(session('success')) }}",
                    timer: 3000,
                    showConfirmButton: false
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: "{{ addslashes(session('error')) }}",
                });
            @endif

            // Tampilkan ringkasan error validasi form (jika ada)
            @if($errors->any())
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Periksa kembali formulir',
                        html: '{{ addslashes($errors->first()) }}',
                        confirmButtonColor: '#15803d'
                    });
                });
            @endif
        </script>
    </body>
</html>
