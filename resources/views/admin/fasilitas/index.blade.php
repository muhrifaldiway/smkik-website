<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Fasilitas Sekolah</h2>
                <p class="text-sm text-gray-500 mt-1">Sarana dan prasarana yang dimiliki sekolah.</p>
            </div>
            <a href="{{ route('fasilitas.create') }}" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white px-4 py-2.5 rounded-xl text-sm font-semibold transition shadow-md">
                <i class="fas fa-plus"></i>
                <span>Tambah Fasilitas</span>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('fasilitas.index') }}" method="GET" class="bg-white rounded-2xl shadow-md border border-green-100 p-4 mb-6">
                <div class="flex flex-col md:flex-row gap-3">
                    <div class="relative flex-1">
                        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input
                            type="text"
                            name="q"
                            value="{{ $q }}"
                            placeholder="Cari nama fasilitas atau deskripsi..."
                            class="w-full pl-11 pr-4 py-2.5 border-gray-300 rounded-xl focus:border-green-500 focus:ring-green-500">
                    </div>
                    <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-6 py-2.5 rounded-xl font-semibold transition">
                        <i class="fas fa-magnifying-glass mr-1"></i> Cari
                    </button>
                    @if($q)
                        <a href="{{ route('fasilitas.index') }}" class="text-gray-500 hover:text-gray-700 px-4 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-50 transition">
                            <i class="fas fa-times"></i>
                        </a>
                    @endif
                </div>
            </form>

            <div class="bg-white rounded-2xl shadow-md border border-green-100 overflow-hidden">

                <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                    <h3 class="text-lg font-bold text-gray-700">
                        <i class="fas fa-building text-green-700 mr-2"></i>
                        Daftar Fasilitas
                    </h3>
                    <span class="text-sm text-gray-500">{{ $fasilitas->total() }} data</span>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-green-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">Gambar</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">Nama Fasilitas</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">Kondisi</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">Deskripsi</th>
                                <th class="px-6 py-3 text-center text-xs font-bold text-green-800 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($fasilitas as $item)
                                <tr class="hover:bg-green-50/50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($item->gambar)
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_fasilitas }}" class="h-12 w-20 object-cover rounded-lg shadow border border-green-100">
                                        @else
                                            <div class="h-12 w-20 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400 text-xs">
                                                No Image
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $item->nama_fasilitas }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2.5 inline-flex text-xs leading-5 font-semibold rounded-full
                                            {{ $item->kondisi == 'Baik' ? 'bg-green-100 text-green-800' : ($item->kondisi == 'Perbaikan' ? 'bg-amber-100 text-amber-800' : 'bg-red-100 text-red-800') }}">
                                            {{ $item->kondisi }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 max-w-xs">
                                        <div class="truncate">{{ $item->deskripsi ?? '-' }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium space-x-2">
                                        <a href="{{ route('fasilitas.edit', $item->id) }}" class="text-amber-600 hover:text-amber-900 bg-amber-50 p-2 rounded-lg transition" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('fasilitas.destroy', $item->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete(this)" data-title="Hapus fasilitas ini?" data-text="Fasilitas '{{ $item->nama_fasilitas }}' akan dihapus permanen!" class="text-red-600 hover:text-red-900 bg-red-50 p-2 rounded-lg transition" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-16 text-center">
                                        <div class="text-gray-300 text-5xl mb-3"><i class="fas fa-building-circle-xmark"></i></div>
                                        @if($q)
                                            <p class="text-gray-500">Tidak ada fasilitas yang cocok dengan pencarian "{{ $q }}".</p>
                                            <a href="{{ route('fasilitas.index') }}" class="text-green-700 hover:text-green-900 font-medium text-sm">Reset pencarian</a>
                                        @else
                                            <p class="text-gray-500 mb-4">Belum ada data fasilitas sekolah.</p>
                                            <a href="{{ route('fasilitas.create') }}" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white px-5 py-2.5 rounded-xl text-sm font-semibold transition">
                                                <i class="fas fa-plus"></i> Tambah Fasilitas
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($fasilitas->hasPages())
                    <div class="px-6 py-4 border-t border-gray-100 bg-green-50/30">
                        {{ $fasilitas->links() }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
