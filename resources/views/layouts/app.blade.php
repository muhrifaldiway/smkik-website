<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin Panel SMKIK') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100 text-gray-900">
        <div class="min-h-screen flex flex-col md:flex-row">
            
            <aside class="w-full md:w-64 bg-slate-900 text-white flex-shrink-0 shadow-xl z-20">
                <div class="flex items-center justify-between px-6 py-5 border-b border-slate-800 bg-slate-950">
                    <div class="flex items-center space-x-2">
                        <span class="text-xl font-black tracking-wider text-blue-400">SMKIK</span>
                        <span class="text-xs bg-blue-500 text-white font-bold uppercase px-2 py-0.5 rounded">Admin</span>
                    </div>
                </div>

                <nav class="px-4 py-6 space-y-1">
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg transition duration-200 {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white font-semibold shadow-md' : 'text-slate-400 hover:bg-slate-800 hover:text-slate-200' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"></path></svg>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('berita.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg transition duration-200 {{ request()->routeIs('berita.*') ? 'bg-blue-600 text-white font-semibold shadow-md' : 'text-slate-400 hover:bg-slate-800 hover:text-slate-200' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l6 6v10a2 2 0 01-2 2z"></path></svg>
                        <span>Kelola Berita</span>
                    </a>

                    <a href="{{ route('jurusan.index') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg transition duration-200 {{ request()->routeIs('jurusan.*') ? 'bg-blue-600 text-white font-semibold shadow-md' : 'text-slate-400 hover:bg-slate-800 hover:text-slate-200' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <span>Kelola Jurusan</span>
                    </a>

                    <div class="pt-4 border-t border-slate-800 my-4"></div>

                    <a href="{{ url('/') }}" target="_blank" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-slate-400 hover:bg-slate-800 hover:text-slate-200 transition duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        <span>Lihat Website</span>
                    </a>

                    <a href="{{ route('admin.profile.edit') }}" 
                        class="flex items-center space-x-3 px-4 py-3 rounded-lg transition duration-200 
                        {{ request()->routeIs('admin.profile.edit') 
                            ? 'bg-blue-600 text-white font-semibold shadow-md' : 'text-slate-400 hover:bg-slate-800 hover:text-slate-200' }}">
                            
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span>Profil Akun</span>
                        </a>

                        <form method="POST" action="{{ route('logout') }}" id="logout-form" class="w-full pt-2">
                            @csrf
                            <button type="button" onclick="confirmLogout()" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg text-red-400 hover:bg-red-950/50 hover:text-red-300 transition duration-200 text-left">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                <span>Logout</span>
                            </button>
                        </form>
                </nav>
            </aside>

            <div class="flex-1 flex flex-col min-w-0">
                
                <header class="bg-white shadow-sm border-b border-gray-200 z-10 flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        @isset($header)
                            <div class="text-gray-800">
                                {{ $header }}
                            </div>
                        @endisset
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-semibold text-gray-700">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-400">Administrator</p>
                        </div>
                        <div class="h-9 w-9 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold uppercase shadow-inner">
                            {{ substr(Auth::user()->name, 0, 2) }}
                        </div>
                    </div>
                </header>

                <main class="flex-1 overflow-y-auto p-6 md:p-8">
                    {{ $slot }}
                </main>

            </div>
        </div>

        <script>
            function confirmLogout() {
                Swal.fire({
                    title: 'Yakin ingin keluar?',
                    text: "Anda akan mengakhiri sesi admin saat ini.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ef4444', // Merah sesuai tema logout
                    cancelButtonColor: '#64748b',  // Abu-abu
                    confirmButtonText: 'Ya, Keluar',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika user klik 'Ya', submit formnya
                        document.getElementById('logout-form').submit();
                    }
                });
            }
        </script>
    </body>
</html>