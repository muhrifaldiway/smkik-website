<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Kelola Berita') }}
            </h2>
            <a href="{{ route('berita.create') }}" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded-lg text-sm font-semibold transition shadow-sm">
                <i class="fas fa-plus"></i>
                <span>Tambah Berita</span>
            </a>
        </div>
    </x-slot>

    <div class="space-y-4">

        {{-- Pencarian --}}
        <form method="GET" action="{{ route('berita.index') }}" class="flex gap-2">
            <div class="relative flex-1 max-w-md">
                <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari judul atau isi berita..." class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-gray-300 focus:border-green-500 focus:ring-green-500 text-sm bg-white shadow-sm">
            </div>
            <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-4 py-2.5 rounded-lg text-sm font-semibold transition shadow-sm">
                <i class="fas fa-search"></i>
            </button>
            @if(request('q'))
                <a href="{{ route('berita.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2.5 rounded-lg text-sm font-semibold transition">
                    <i class="fas fa-times"></i>
                </a>
            @endif
        </form>

        {{-- Tabel --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-green-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase">Gambar</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase">Judul Berita</th>
                            <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase">Tanggal</th>
                            <th class="px-6 py-3 text-center text-xs font-bold text-green-800 uppercase">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($berita as $item)
                            <tr class="hover:bg-green-50/40 transition">
                                <td class="px-6 py-3 whitespace-nowrap">
                                    @if($item->gambar)
                                        <img src="{{ asset('storage/'.$item->gambar) }}" alt="Gambar" class="h-12 w-20 object-cover rounded-lg border border-gray-200">
                                    @else
                                        <div class="h-12 w-20 rounded-lg border border-dashed border-gray-300 bg-gray-50 flex items-center justify-center text-gray-400 text-[10px]">No Foto</div>
                                    @endif
                                </td>
                                <td class="px-6 py-3">
                                    <a href="{{ route('berita.edit', $item) }}" class="font-semibold text-gray-800 hover:text-green-700 hover:underline">{{ $item->judul }}</a>
                                    <p class="text-xs text-gray-400 mt-0.5 line-clamp-1 max-w-md">{{ Str::limit(strip_tags($item->konten), 100) }}</p>
                                </td>
                                <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-500">{{ $item->created_at->format('d M Y') }}</td>
                                <td class="px-6 py-3 whitespace-nowrap text-center">
                                    <div class="flex justify-center items-center gap-2">
                                        <a href="{{ route('berita.edit', $item) }}" class="text-amber-600 hover:text-amber-800 bg-amber-50 border border-amber-200 p-2 rounded-lg transition" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('berita.detail', $item->slug) }}" target="_blank" class="text-green-700 hover:text-green-900 bg-green-50 border border-green-200 p-2 rounded-lg transition" title="Lihat di website">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="{{ route('berita.destroy', $item) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete(this)" data-title="Hapus berita ini?" data-text="Berita '{{ $item->judul }}' akan dihapus permanen!" class="text-red-600 hover:text-red-800 bg-red-50 border border-red-200 p-2 rounded-lg transition" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-12 text-center">
                                    <i class="fas fa-newspaper text-4xl text-gray-200 mb-3"></i>
                                    <p class="text-gray-500 font-medium">{{ request('q') ? 'Tidak ada berita yang cocok dengan pencarian.' : 'Belum ada berita.' }}</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Pagination --}}
        @if($berita->hasPages())
            <div class="bg-white rounded-xl border border-gray-100 px-4 py-3">
                {{ $berita->links() }}
            </div>
        @endif

    </div>
</x-app-layout>
