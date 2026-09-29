<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin SMKIK') }}
        </h2>
    </x-slot>

    <div class="space-y-6">
        <div class="bg-gradient-to-r from-green-800 via-green-700 to-emerald-800 rounded-2xl shadow-lg overflow-hidden">
            <div class="px-6 py-7 text-white flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <p class="text-green-100 text-sm mb-1">{{ now()->translatedFormat('l, d F Y') }}</p>
                    <h1 class="text-2xl md:text-3xl font-bold mb-1">Selamat Datang, {{ Auth::user()->name }}</h1>
                    <p class="text-green-100">Kelola konten website SMK Informatika Komputer Ampana Kota dari satu panel.</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ url('/ppdb-online') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 bg-white/15 hover:bg-white/25 text-white text-sm font-semibold px-4 py-2.5 rounded-lg border border-white/20 transition">
                        <i class="fas fa-file-signature"></i>
                        Formulir PPDB Publik
                    </a>
                    <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 bg-white/15 hover:bg-white/25 text-white text-sm font-semibold px-4 py-2.5 rounded-lg border border-white/20 transition">
                        <i class="fas fa-external-link-alt"></i>
                        Lihat Website
                    </a>
                </div>
            </div>
        </div>

        @if($stats['ppdb_pending'] > 0)
            <a href="{{ route('ppdb.index', ['status' => 'pending']) }}" class="flex items-center justify-between gap-4 bg-amber-50 border border-amber-200 text-amber-800 rounded-xl px-5 py-4 hover:bg-amber-100 transition">
                <div class="flex items-center gap-3">
                    <span class="h-10 w-10 rounded-full bg-amber-100 flex items-center justify-center">
                        <i class="fas fa-user-clock"></i>
                    </span>
                    <div>
                        <p class="font-semibold">{{ $stats['ppdb_pending'] }} pendaftar PPDB menunggu verifikasi</p>
                        <p class="text-sm text-amber-700">Tinjau data calon siswa baru dan perbarui statusnya.</p>
                    </div>
                </div>
                <span class="text-sm font-semibold hidden sm:inline">Lihat data <i class="fas fa-arrow-right ml-1"></i></span>
            </a>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
            <a href="{{ route('berita.index') }}" class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-green-600 flex items-center justify-between hover:shadow-md transition">
                <div>
                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wide mb-1">Total Berita</p>
                    <h3 class="text-2xl font-bold text-gray-800">{{ number_format($stats['berita']) }}</h3>
                </div>
                <div class="p-3 bg-green-100 rounded-full text-green-700">
                    <i class="fas fa-newspaper"></i>
                </div>
            </a>

            <a href="{{ route('pengumuman.index') }}" class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-emerald-600 flex items-center justify-between hover:shadow-md transition">
                <div>
                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wide mb-1">Pengumuman</p>
                    <h3 class="text-2xl font-bold text-gray-800">{{ number_format($stats['pengumuman']) }}</h3>
                </div>
                <div class="p-3 bg-emerald-100 rounded-full text-emerald-700">
                    <i class="fas fa-bullhorn"></i>
                </div>
            </a>

            <a href="{{ route('jurusan.index') }}" class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-teal-600 flex items-center justify-between hover:shadow-md transition">
                <div>
                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wide mb-1">Program Keahlian</p>
                    <h3 class="text-2xl font-bold text-gray-800">{{ number_format($stats['jurusan']) }}</h3>
                </div>
                <div class="p-3 bg-teal-100 rounded-full text-teal-700">
                    <i class="fas fa-school"></i>
                </div>
            </a>

            <a href="{{ route('guru.index') }}" class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-green-500 flex items-center justify-between hover:shadow-md transition">
                <div>
                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wide mb-1">Guru &amp; Staf</p>
                    <h3 class="text-2xl font-bold text-gray-800">{{ number_format($stats['guru']) }}</h3>
                </div>
                <div class="p-3 bg-green-50 rounded-full text-green-600 border border-green-100">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
            </a>

            <a href="{{ route('mitra.index') }}" class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-emerald-500 flex items-center justify-between hover:shadow-md transition">
                <div>
                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wide mb-1">Mitra Industri</p>
                    <h3 class="text-2xl font-bold text-gray-800">{{ number_format($stats['mitra']) }}</h3>
                </div>
                <div class="p-3 bg-emerald-50 rounded-full text-emerald-600 border border-emerald-100">
                    <i class="fas fa-industry"></i>
                </div>
            </a>

            <a href="{{ route('fasilitas.index') }}" class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-teal-500 flex items-center justify-between hover:shadow-md transition">
                <div>
                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wide mb-1">Fasilitas</p>
                    <h3 class="text-2xl font-bold text-gray-800">{{ number_format($stats['fasilitas']) }}</h3>
                </div>
                <div class="p-3 bg-teal-50 rounded-full text-teal-600 border border-teal-100">
                    <i class="fas fa-building"></i>
                </div>
            </a>

            <a href="{{ route('ppdb.index') }}" class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-lime-600 flex items-center justify-between hover:shadow-md transition">
                <div>
                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wide mb-1">Pendaftar PPDB</p>
                    <h3 class="text-2xl font-bold text-gray-800">{{ number_format($stats['ppdb']) }}</h3>
                    <p class="text-xs text-amber-700 mt-1">{{ $stats['ppdb_pending'] }} menunggu verifikasi</p>
                </div>
                <div class="p-3 bg-lime-100 rounded-full text-lime-700">
                    <i class="fas fa-user-graduate"></i>
                </div>
            </a>

            <a href="{{ route('ekskul.index') }}" class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-green-700 flex items-center justify-between hover:shadow-md transition">
                <div>
                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wide mb-1">Ekstrakurikuler</p>
                    <h3 class="text-2xl font-bold text-gray-800">{{ number_format($stats['ekskul']) }}</h3>
                </div>
                <div class="p-3 bg-green-100 rounded-full text-green-700">
                    <i class="fas fa-futbol"></i>
                </div>
            </a>

            <a href="{{ route('galeri.index') }}" class="bg-white rounded-xl shadow-sm p-5 border-l-4 border-emerald-700 flex items-center justify-between hover:shadow-md transition">
                <div>
                    <p class="text-xs text-gray-500 font-semibold uppercase tracking-wide mb-1">Galeri Kegiatan</p>
                    <h3 class="text-2xl font-bold text-gray-800">{{ number_format($stats['galeri']) }}</h3>
                </div>
                <div class="p-3 bg-emerald-100 rounded-full text-emerald-700">
                    <i class="fas fa-images"></i>
                </div>
            </a>
        </div>

        <div class="bg-white overflow-hidden shadow-sm rounded-xl border border-gray-100">
            <div class="p-6">
                <h3 class="text-lg font-bold mb-4 text-gray-800 border-b pb-2">Akses Cepat</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
                    <a href="{{ route('berita.create') }}" class="flex flex-col items-center justify-center p-4 bg-green-50/60 rounded-lg border border-green-100 hover:bg-green-100 hover:border-green-300 transition group">
                        <i class="fas fa-plus text-lg text-green-500 mb-2"></i>
                        <span class="text-sm font-medium text-gray-700 group-hover:text-green-800 text-center">Tulis Berita</span>
                    </a>
                    <a href="{{ route('pengumuman.create') }}" class="flex flex-col items-center justify-center p-4 bg-green-50/60 rounded-lg border border-green-100 hover:bg-green-100 hover:border-green-300 transition group">
                        <i class="fas fa-bullhorn text-lg text-green-500 mb-2"></i>
                        <span class="text-sm font-medium text-gray-700 group-hover:text-green-800 text-center">Tambah Pengumuman</span>
                    </a>
                    <a href="{{ route('jurusan.create') }}" class="flex flex-col items-center justify-center p-4 bg-green-50/60 rounded-lg border border-green-100 hover:bg-green-100 hover:border-green-300 transition group">
                        <i class="fas fa-school text-lg text-green-500 mb-2"></i>
                        <span class="text-sm font-medium text-gray-700 group-hover:text-green-800 text-center">Tambah Jurusan</span>
                    </a>
                    <a href="{{ route('guru.create') }}" class="flex flex-col items-center justify-center p-4 bg-green-50/60 rounded-lg border border-green-100 hover:bg-green-100 hover:border-green-300 transition group">
                        <i class="fas fa-chalkboard-teacher text-lg text-green-500 mb-2"></i>
                        <span class="text-sm font-medium text-gray-700 group-hover:text-green-800 text-center">Tambah Guru</span>
                    </a>
                    <a href="{{ route('mitra.create') }}" class="flex flex-col items-center justify-center p-4 bg-green-50/60 rounded-lg border border-green-100 hover:bg-green-100 hover:border-green-300 transition group">
                        <i class="fas fa-industry text-lg text-green-500 mb-2"></i>
                        <span class="text-sm font-medium text-gray-700 group-hover:text-green-800 text-center">Tambah Mitra</span>
                    </a>
                    <a href="{{ route('fasilitas.create') }}" class="flex flex-col items-center justify-center p-4 bg-green-50/60 rounded-lg border border-green-100 hover:bg-green-100 hover:border-green-300 transition group">
                        <i class="fas fa-building text-lg text-green-500 mb-2"></i>
                        <span class="text-sm font-medium text-gray-700 group-hover:text-green-800 text-center">Tambah Fasilitas</span>
                    </a>
                    <a href="{{ route('ekskul.create') }}" class="flex flex-col items-center justify-center p-4 bg-green-50/60 rounded-lg border border-green-100 hover:bg-green-100 hover:border-green-300 transition group">
                        <i class="fas fa-futbol text-lg text-green-500 mb-2"></i>
                        <span class="text-sm font-medium text-gray-700 group-hover:text-green-800 text-center">Tambah Ekskul</span>
                    </a>
                    <a href="{{ route('galeri.create') }}" class="flex flex-col items-center justify-center p-4 bg-green-50/60 rounded-lg border border-green-100 hover:bg-green-100 hover:border-green-300 transition group">
                        <i class="fas fa-images text-lg text-green-500 mb-2"></i>
                        <span class="text-sm font-medium text-gray-700 group-hover:text-green-800 text-center">Tambah Galeri</span>
                    </a>
                    <a href="{{ route('ppdb.index') }}" class="flex flex-col items-center justify-center p-4 bg-green-50/60 rounded-lg border border-green-100 hover:bg-green-100 hover:border-green-300 transition group">
                        <i class="fas fa-user-graduate text-lg text-green-500 mb-2"></i>
                        <span class="text-sm font-medium text-gray-700 group-hover:text-green-800 text-center">Kelola PPDB</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
            <div class="bg-white overflow-hidden shadow-sm rounded-xl border border-gray-100">
                <div class="px-6 py-4 border-b flex items-center justify-between">
                    <h3 class="font-bold text-gray-800">Berita Terbaru</h3>
                    <a href="{{ route('berita.index') }}" class="text-sm text-green-700 hover:underline font-semibold">Lihat semua</a>
                </div>
                <div class="divide-y">
                    @forelse($beritaTerbaru as $item)
                        <a href="{{ route('berita.edit', $item) }}" class="block px-6 py-3 hover:bg-green-50/50 transition">
                            <p class="text-sm font-semibold text-gray-800 line-clamp-1">{{ $item->judul }}</p>
                            <p class="text-xs text-gray-400 mt-1">{{ $item->created_at->format('d/m/Y') }}</p>
                        </a>
                    @empty
                        <p class="px-6 py-8 text-sm text-gray-500 text-center">Belum ada berita. Tulis berita pertama dari menu akses cepat.</p>
                    @endforelse
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm rounded-xl border border-gray-100">
                <div class="px-6 py-4 border-b flex items-center justify-between">
                    <h3 class="font-bold text-gray-800">Pengumuman Terbaru</h3>
                    <a href="{{ route('pengumuman.index') }}" class="text-sm text-green-700 hover:underline font-semibold">Lihat semua</a>
                </div>
                <div class="divide-y">
                    @forelse($pengumumanTerbaru as $item)
                        <a href="{{ route('pengumuman.edit', $item) }}" class="block px-6 py-3 hover:bg-green-50/50 transition">
                            <div class="flex items-start justify-between gap-3">
                                <p class="text-sm font-semibold text-gray-800 line-clamp-1">{{ $item->judul }}</p>
                                <span class="shrink-0 text-[10px] uppercase font-bold px-2 py-0.5 rounded {{ $item->status === 'aktif' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' }}">
                                    {{ $item->status }}
                                </span>
                            </div>
                            <p class="text-xs text-gray-400 mt-1">{{ $item->created_at->format('d/m/Y') }}</p>
                        </a>
                    @empty
                        <p class="px-6 py-8 text-sm text-gray-500 text-center">Belum ada pengumuman.</p>
                    @endforelse
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm rounded-xl border border-gray-100">
                <div class="px-6 py-4 border-b flex items-center justify-between">
                    <h3 class="font-bold text-gray-800">Pendaftar PPDB</h3>
                    <a href="{{ route('ppdb.index') }}" class="text-sm text-green-700 hover:underline font-semibold">Lihat semua</a>
                </div>
                <div class="divide-y">
                    @forelse($ppdbTerbaru as $item)
                        <a href="{{ route('ppdb.show', $item) }}" class="block px-6 py-3 hover:bg-green-50/50 transition">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">{{ $item->nama_lengkap }}</p>
                                    <p class="text-xs text-gray-400 mt-1">{{ $item->jurusan_pilihan }} · {{ $item->created_at->format('d/m/Y') }}</p>
                                </div>
                                @php
                                    $statusClass = match($item->status) {
                                        'diterima' => 'bg-green-100 text-green-700',
                                        'ditolak' => 'bg-red-100 text-red-700',
                                        default => 'bg-yellow-100 text-yellow-700',
                                    };
                                @endphp
                                <span class="shrink-0 text-[10px] uppercase font-bold px-2 py-0.5 rounded {{ $statusClass }}">
                                    {{ $item->status }}
                                </span>
                            </div>
                        </a>
                    @empty
                        <p class="px-6 py-8 text-sm text-gray-500 text-center">Belum ada pendaftar PPDB.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
