<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Galeri Foto</h2>
                <p class="text-sm text-gray-500 mt-1">Dokumentasi kegiatan sekolah yang ditampilkan di website.</p>
            </div>
            <a href="{{ route('galeri.create') }}" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white px-4 py-2.5 rounded-xl text-sm font-semibold transition shadow-md">
                <i class="fas fa-plus"></i>
                <span>Upload Foto</span>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('galeri.index') }}" method="GET" class="bg-white rounded-2xl shadow-md border border-green-100 p-4 mb-6">
                <div class="flex flex-col md:flex-row gap-3">
                    <div class="relative flex-1">
                        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input
                            type="text"
                            name="q"
                            value="{{ $q }}"
                            placeholder="Cari judul atau kategori foto..."
                            class="w-full pl-11 pr-4 py-2.5 border-gray-300 rounded-xl focus:border-green-500 focus:ring-green-500">
                    </div>
                    <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-6 py-2.5 rounded-xl font-semibold transition">
                        <i class="fas fa-magnifying-glass mr-1"></i> Cari
                    </button>
                    @if($q)
                        <a href="{{ route('galeri.index') }}" class="text-gray-500 hover:text-gray-700 px-4 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-50 transition">
                            <i class="fas fa-times"></i>
                        </a>
                    @endif
                </div>
            </form>

            <div class="bg-white rounded-2xl shadow-md border border-green-100 overflow-hidden">

                <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                    <h3 class="text-lg font-bold text-gray-700">
                        <i class="fas fa-images text-green-700 mr-2"></i>
                        Galeri Kegiatan
                    </h3>
                    <span class="text-sm text-gray-500">{{ $galeris->total() }} foto</span>
                </div>

                <div class="p-6">
                    @if($galeris->count())
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                            @foreach($galeris as $item)
                                <div class="group rounded-2xl overflow-hidden border border-green-100 shadow-sm hover:shadow-lg transition bg-white">
                                    <div class="relative h-44 overflow-hidden bg-green-50">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                        @if($item->kategori)
                                            <span class="absolute top-2 left-2 px-2.5 py-1 text-xs font-semibold rounded-full bg-green-900/80 text-white backdrop-blur">
                                                {{ $item->kategori }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="p-4">
                                        <h4 class="font-semibold text-gray-800 text-sm truncate" title="{{ $item->judul }}">{{ $item->judul }}</h4>
                                        @if($item->deskripsi)
                                            <p class="text-xs text-gray-500 mt-1 line-clamp-2">{{ \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 90) }}</p>
                                        @endif
                                        <div class="flex items-center justify-between mt-3">
                                            <span class="text-xs text-gray-400"><i class="fas fa-calendar mr-1"></i>{{ $item->created_at->format('d M Y') }}</span>
                                            <div class="flex items-center gap-2">
                                                <a href="{{ route('galeri.edit', $item->id) }}" class="text-amber-600 hover:text-amber-900 bg-amber-50 p-2 rounded-lg transition" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" onclick="confirmDelete(this)" data-title="Hapus foto ini?" data-text="Foto '{{ $item->judul }}' akan dihapus permanen!" class="text-red-600 hover:text-red-900 bg-red-50 p-2 rounded-lg transition" title="Hapus">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="py-16 text-center">
                            <div class="text-gray-300 text-5xl mb-3"><i class="fas fa-images"></i></div>
                            @if($q)
                                <p class="text-gray-500">Tidak ada foto yang cocok dengan pencarian "{{ $q }}".</p>
                                <a href="{{ route('galeri.index') }}" class="text-green-700 hover:text-green-900 font-medium text-sm">Reset pencarian</a>
                            @else
                                <p class="text-gray-500 mb-4">Galeri masih kosong. Upload foto kegiatan pertama sekolah.</p>
                                <a href="{{ route('galeri.create') }}" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white px-5 py-2.5 rounded-xl text-sm font-semibold transition">
                                    <i class="fas fa-cloud-arrow-up"></i> Upload Foto
                                </a>
                            @endif
                        </div>
                    @endif
                </div>

                @if($galeris->hasPages())
                    <div class="px-6 py-4 border-t border-gray-100 bg-green-50/30">
                        {{ $galeris->links() }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
