<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Data Program Keahlian (Jurusan)') }}
            </h2>
            <a href="{{ route('jurusan.create') }}" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded-lg text-sm font-semibold transition shadow-sm">
                <i class="fas fa-plus"></i>
                <span>Tambah Jurusan</span>
            </a>
        </div>
    </x-slot>

    <div class="space-y-4">

        {{-- Pencarian --}}
        <form method="GET" action="{{ route('jurusan.index') }}" class="flex gap-2">
            <div class="relative flex-1 max-w-md">
                <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari nama jurusan atau singkatan..." class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-gray-300 focus:border-green-500 focus:ring-green-500 text-sm bg-white shadow-sm">
            </div>
            <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-4 py-2.5 rounded-lg text-sm font-semibold transition shadow-sm">
                <i class="fas fa-search"></i>
            </button>
            @if(request('q'))
                <a href="{{ route('jurusan.index') }}" class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2.5 rounded-lg text-sm font-semibold transition">
                    <i class="fas fa-times"></i>
                </a>
            @endif
        </form>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 text-sm text-left text-gray-600">
                    <thead class="bg-green-50 text-xs uppercase">
                        <tr>
                            <th class="px-6 py-3 font-bold text-green-800 text-center w-12">No</th>
                            <th class="px-6 py-3 font-bold text-green-800">Foto</th>
                            <th class="px-6 py-3 font-bold text-green-800">Nama Jurusan</th>
                            <th class="px-6 py-3 font-bold text-green-800">Singkatan</th>
                            <th class="px-6 py-3 font-bold text-green-800 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse($jurusans as $item)
                            <tr class="hover:bg-green-50/40 transition">
                                <td class="px-6 py-3 text-center text-gray-500 font-medium">{{ $loop->iteration + ($jurusans->currentPage() - 1) * $jurusans->perPage() }}</td>
                                <td class="px-6 py-3">
                                    @if($item->gambar)
                                        <img src="{{ asset('storage/'.$item->gambar) }}" alt="Foto" class="w-16 h-16 rounded-lg border border-gray-200 object-cover shadow-sm">
                                    @else
                                        <div class="w-16 h-16 rounded-lg border border-dashed border-gray-300 flex items-center justify-center bg-gray-50 text-gray-400" title="Tidak ada foto">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-3">
                                    <p class="font-bold text-gray-800">{{ $item->nama_jurusan }}</p>
                                    <p class="text-xs text-gray-400 mt-0.5 line-clamp-1 max-w-md">{{ Str::limit(strip_tags($item->deskripsi), 80) }}</p>
                                </td>
                                <td class="px-6 py-3">
                                    @if($item->singkatan)
                                        <span class="bg-green-100 text-green-800 text-xs font-bold px-3 py-1 rounded-full border border-green-200">{{ $item->singkatan }}</span>
                                    @else
                                        <span class="text-gray-400 italic">-</span>
                                    @endif
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <div class="flex justify-center items-center gap-2">
                                        <a href="{{ route('jurusan.edit', $item) }}" class="text-amber-600 hover:text-amber-800 bg-amber-50 border border-amber-200 p-2 rounded-lg transition" title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('jurusan.destroy', $item) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete(this)" data-title="Hapus jurusan ini?" data-text="Jurusan '{{ $item->nama_jurusan }}' akan dihapus permanen!" class="text-red-600 hover:text-red-800 bg-red-50 border border-red-200 p-2 rounded-lg transition" title="Hapus Data">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center">
                                    <i class="fas fa-school text-4xl text-gray-200 mb-3"></i>
                                    <p class="text-gray-500 font-medium">{{ request('q') ? 'Tidak ada jurusan yang cocok dengan pencarian.' : 'Belum ada data jurusan.' }}</p>
                                    @unless(request('q'))
                                        <p class="text-gray-400 text-sm mt-1">Silakan klik tombol "Tambah Jurusan" di sudut kanan atas untuk memulai.</p>
                                    @endunless
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if($jurusans->hasPages())
            <div class="bg-white rounded-xl border border-gray-100 px-4 py-3">
                {{ $jurusans->links() }}
            </div>
        @endif

    </div>
</x-app-layout>
