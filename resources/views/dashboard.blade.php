<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard Admin SMKIK') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto space-y-6">
        <div class="admin-hero">
            <div class="relative z-10 px-6 py-7 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <p class="text-[var(--gold)] text-sm mb-1 font-semibold">{{ now()->format('d/m/Y') }}</p>
                    <h1 class="text-2xl md:text-3xl font-extrabold mb-1">Selamat Datang, {{ Auth::user()->name }}</h1>
                    <p class="text-[var(--gold-soft)] max-w-xl">Panel hijau, aksi emas, peringatan merah — kelola seluruh konten website SMKIK Ampana Kota dari sini.</p>
                </div>
                <a href="{{ route('home') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 bg-[var(--gold)] hover:bg-[var(--gold-deep)] text-[var(--forest-deep)] text-sm font-bold px-4 py-2.5 rounded-lg transition relative z-10">
                    <i class="fas fa-external-link-alt"></i>
                    Lihat Website
                </a>
            </div>
        </div>

        @if($stats['ppdb_pending'] > 0)
            <a href="{{ route('ppdb.index', ['status' => 'pending']) }}" class="admin-alert-gold flex items-center justify-between gap-4 px-5 py-4">
                <div class="flex items-center gap-3">
                    <span class="h-10 w-10 rounded-full bg-[var(--crimson)] text-white flex items-center justify-center">
                        <i class="fas fa-user-clock"></i>
                    </span>
                    <div>
                        <p class="font-semibold">{{ $stats['ppdb_pending'] }} pendaftar PPDB menunggu verifikasi</p>
                        <p class="text-sm">Tinjau data calon siswa baru dan perbarui statusnya.</p>
                    </div>
                </div>
                <span class="text-sm font-bold hidden sm:inline text-[var(--forest)]">Lihat data</span>
            </a>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
            @php
                $cards = [
                    ['label' => 'Total Berita', 'value' => $stats['berita'], 'route' => 'berita.index', 'icon' => 'fa-newspaper', 'chip' => 'admin-chip-forest'],
                    ['label' => 'Pengumuman', 'value' => $stats['pengumuman'], 'route' => 'pengumuman.index', 'icon' => 'fa-bullhorn', 'chip' => 'admin-chip-crimson'],
                    ['label' => 'Program Keahlian', 'value' => $stats['jurusan'], 'route' => 'jurusan.index', 'icon' => 'fa-school', 'chip' => 'admin-chip-gold'],
                    ['label' => 'Guru & Staf', 'value' => $stats['guru'], 'route' => 'guru.index', 'icon' => 'fa-chalkboard-teacher', 'chip' => 'admin-chip-forest'],
                    ['label' => 'Mitra Industri', 'value' => $stats['mitra'], 'route' => 'mitra.index', 'icon' => 'fa-industry', 'chip' => 'admin-chip-crimson'],
                    ['label' => 'Fasilitas', 'value' => $stats['fasilitas'], 'route' => 'fasilitas.index', 'icon' => 'fa-building', 'chip' => 'admin-chip-gold'],
                    ['label' => 'Pendaftar PPDB', 'value' => $stats['ppdb'], 'route' => 'ppdb.index', 'icon' => 'fa-user-graduate', 'chip' => 'admin-chip-crimson', 'note' => $stats['ppdb_pending'].' menunggu verifikasi'],
                    ['label' => 'Ekstrakurikuler', 'value' => $stats['ekskul'], 'route' => 'ekskul.index', 'icon' => 'fa-futbol', 'chip' => 'admin-chip-forest'],
                ];
            @endphp
            @foreach($cards as $card)
                <a href="{{ route($card['route']) }}" class="admin-stat p-5 flex items-center justify-between">
                    <div>
                        <p class="text-xs text-[var(--muted)] font-semibold uppercase tracking-wide mb-1">{{ $card['label'] }}</p>
                        <h3 class="text-2xl font-extrabold text-[var(--forest)]">{{ number_format($card['value']) }}</h3>
                        @isset($card['note'])
                            <p class="text-xs text-[var(--crimson)] mt-1 font-semibold">{{ $card['note'] }}</p>
                        @endisset
                    </div>
                    <div class="p-3 rounded-full {{ $card['chip'] }}">
                        <i class="fas {{ $card['icon'] }}"></i>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="admin-card overflow-hidden">
            <div class="p-6">
                <h3 class="text-lg font-bold mb-4 text-[var(--forest)] pb-2" style="border-bottom: 2px solid var(--gold);">Akses Cepat</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
                    <a href="{{ route('berita.create') }}" class="admin-quick flex flex-col items-center justify-center p-4">
                        <i class="fas fa-plus text-lg text-[var(--crimson)] mb-2"></i>
                        <span class="text-sm font-semibold text-center">Tulis Berita</span>
                    </a>
                    <a href="{{ route('pengumuman.create') }}" class="admin-quick flex flex-col items-center justify-center p-4">
                        <i class="fas fa-bullhorn text-lg text-[var(--forest)] mb-2"></i>
                        <span class="text-sm font-semibold text-center">Tambah Pengumuman</span>
                    </a>
                    <a href="{{ route('jurusan.create') }}" class="admin-quick flex flex-col items-center justify-center p-4">
                        <i class="fas fa-school text-lg text-[var(--gold-deep)] mb-2"></i>
                        <span class="text-sm font-semibold text-center">Tambah Jurusan</span>
                    </a>
                    <a href="{{ route('guru.create') }}" class="admin-quick flex flex-col items-center justify-center p-4">
                        <i class="fas fa-chalkboard-teacher text-lg text-[var(--crimson)] mb-2"></i>
                        <span class="text-sm font-semibold text-center">Tambah Guru</span>
                    </a>
                    <a href="{{ route('mitra.create') }}" class="admin-quick flex flex-col items-center justify-center p-4">
                        <i class="fas fa-industry text-lg text-[var(--forest)] mb-2"></i>
                        <span class="text-sm font-semibold text-center">Tambah Mitra</span>
                    </a>
                    <a href="{{ route('fasilitas.create') }}" class="admin-quick flex flex-col items-center justify-center p-4">
                        <i class="fas fa-building text-lg text-[var(--gold-deep)] mb-2"></i>
                        <span class="text-sm font-semibold text-center">Tambah Fasilitas</span>
                    </a>
                    <a href="{{ route('ppdb.index') }}" class="admin-quick flex flex-col items-center justify-center p-4">
                        <i class="fas fa-user-graduate text-lg text-[var(--crimson)] mb-2"></i>
                        <span class="text-sm font-semibold text-center">Kelola PPDB</span>
                    </a>
                    <a href="{{ route('ekskul.create') }}" class="admin-quick flex flex-col items-center justify-center p-4">
                        <i class="fas fa-futbol text-lg text-[var(--forest)] mb-2"></i>
                        <span class="text-sm font-semibold text-center">Tambah Ekskul</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
            <div class="admin-card overflow-hidden">
                <div class="px-6 py-4 flex items-center justify-between" style="background: var(--forest);">
                    <h3 class="font-bold text-[var(--gold)]">Berita Terbaru</h3>
                    <a href="{{ route('berita.index') }}" class="text-sm text-white hover:text-[var(--gold)]">Lihat semua</a>
                </div>
                <div class="divide-y divide-[var(--line)]">
                    @forelse($beritaTerbaru as $item)
                        <a href="{{ route('berita.edit', $item) }}" class="block px-6 py-3 hover:bg-[var(--gold-soft)] transition">
                            <p class="text-sm font-semibold text-[var(--forest)] line-clamp-1">{{ $item->judul }}</p>
                            <p class="text-xs text-[var(--muted)] mt-1">{{ $item->created_at->format('d/m/Y') }}</p>
                        </a>
                    @empty
                        <p class="px-6 py-8 text-sm text-[var(--muted)] text-center">Belum ada berita. Tulis berita pertama dari menu akses cepat.</p>
                    @endforelse
                </div>
            </div>

            <div class="admin-card overflow-hidden">
                <div class="px-6 py-4 flex items-center justify-between" style="background: var(--crimson);">
                    <h3 class="font-bold text-white">Pengumuman Terbaru</h3>
                    <a href="{{ route('pengumuman.index') }}" class="text-sm text-[var(--gold-soft)] hover:text-white">Lihat semua</a>
                </div>
                <div class="divide-y divide-[var(--line)]">
                    @forelse($pengumumanTerbaru as $item)
                        <a href="{{ route('pengumuman.edit', $item) }}" class="block px-6 py-3 hover:bg-[var(--gold-soft)] transition">
                            <div class="flex items-start justify-between gap-3">
                                <p class="text-sm font-semibold text-[var(--forest)] line-clamp-1">{{ $item->judul }}</p>
                                <span class="shrink-0 text-[10px] uppercase font-bold px-2 py-0.5 rounded {{ $item->status === 'aktif' ? 'admin-chip-forest' : 'admin-chip-crimson' }}">
                                    {{ $item->status }}
                                </span>
                            </div>
                            <p class="text-xs text-[var(--muted)] mt-1">{{ $item->created_at->format('d/m/Y') }}</p>
                        </a>
                    @empty
                        <p class="px-6 py-8 text-sm text-[var(--muted)] text-center">Belum ada pengumuman.</p>
                    @endforelse
                </div>
            </div>

            <div class="admin-card overflow-hidden">
                <div class="px-6 py-4 flex items-center justify-between" style="background: var(--gold);">
                    <h3 class="font-bold text-[var(--forest-deep)]">Pendaftar PPDB</h3>
                    <a href="{{ route('ppdb.index') }}" class="text-sm font-semibold text-[var(--crimson)] hover:underline">Lihat semua</a>
                </div>
                <div class="divide-y divide-[var(--line)]">
                    @forelse($ppdbTerbaru as $item)
                        <a href="{{ route('ppdb.show', $item) }}" class="block px-6 py-3 hover:bg-[var(--gold-soft)] transition">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <p class="text-sm font-semibold text-[var(--forest)]">{{ $item->nama_lengkap }}</p>
                                    <p class="text-xs text-[var(--muted)] mt-1">{{ $item->jurusan_pilihan }} · {{ $item->created_at->format('d/m/Y') }}</p>
                                </div>
                                @php
                                    $statusClass = match($item->status) {
                                        'diterima' => 'admin-chip-forest',
                                        'ditolak' => 'admin-chip-crimson',
                                        default => 'admin-chip-gold',
                                    };
                                @endphp
                                <span class="shrink-0 text-[10px] uppercase font-bold px-2 py-0.5 rounded {{ $statusClass }}">
                                    {{ $item->status }}
                                </span>
                            </div>
                        </a>
                    @empty
                        <p class="px-6 py-8 text-sm text-[var(--muted)] text-center">Belum ada pendaftar PPDB.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
