<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Pengumuman</h2>
                <p class="text-sm text-gray-500 mt-1">Informasi penting yang ditampilkan di website sekolah.</p>
            </div>
            <a href="{{ route('pengumuman.create') }}" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white px-4 py-2.5 rounded-xl text-sm font-semibold transition shadow-md">
                <i class="fas fa-plus"></i>
                <span>Tambah Pengumuman</span>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('pengumuman.index') }}" method="GET" class="bg-white rounded-2xl shadow-md border border-green-100 p-4 mb-6">
                <div class="flex flex-col md:flex-row gap-3">
                    <div class="relative flex-1">
                        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input
                            type="text"
                            name="q"
                            value="{{ $q }}"
                            placeholder="Cari judul atau isi pengumuman..."
                            class="w-full pl-11 pr-4 py-2.5 border-gray-300 rounded-xl focus:border-green-500 focus:ring-green-500">
                    </div>
                    <select name="status" class="md:w-44 border-gray-300 rounded-xl focus:border-green-500 focus:ring-green-500 py-2.5">
                        <option value="">Semua Status</option>
                        <option value="aktif" {{ $status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="nonaktif" {{ $status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                    <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-6 py-2.5 rounded-xl font-semibold transition">
                        <i class="fas fa-filter mr-1"></i> Filter
                    </button>
                    @if($q || $status)
                        <a href="{{ route('pengumuman.index') }}" class="text-gray-500 hover:text-gray-700 px-4 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-50 transition">
                            <i class="fas fa-times"></i>
                        </a>
                    @endif
                </div>
            </form>

            <div class="bg-white rounded-2xl shadow-md border border-green-100 overflow-hidden">

                <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                    <h3 class="text-lg font-bold text-gray-700">
                        <i class="fas fa-bullhorn text-green-700 mr-2"></i>
                        Daftar Pengumuman
                    </h3>
                    <span class="text-sm text-gray-500">{{ $pengumumans->total() }} data</span>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-green-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">Judul</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">Tanggal</th>
                                <th class="px-6 py-3 text-center text-xs font-bold text-green-800 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($pengumumans as $key => $item)
                                <tr class="hover:bg-green-50/50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $loop->iteration + ($pengumumans->currentPage() - 1) * $pengumumans->perPage() }}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 max-w-md">
                                        <div class="truncate">{{ $item->judul }}</div>
                                        <div class="text-xs text-gray-400 truncate">{{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 70) }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        @if($item->status == 'aktif')
                                            <span class="px-2.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"><i class="fas fa-circle-check mr-1"></i>Aktif</span>
                                        @else
                                            <span class="px-2.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-600"><i class="fas fa-circle-xmark mr-1"></i>Nonaktif</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $item->created_at->format('d M Y') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium space-x-2">
                                        <a href="{{ route('pengumuman.edit', $item->id) }}" class="text-amber-600 hover:text-amber-900 bg-amber-50 p-2 rounded-lg transition" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete(this)" data-title="Hapus pengumuman ini?" data-text="Pengumuman '{{ $item->judul }}' akan dihapus permanen!" class="text-red-600 hover:text-red-900 bg-red-50 p-2 rounded-lg transition" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-16 text-center">
                                        <div class="text-gray-300 text-5xl mb-3"><i class="fas fa-inbox"></i></div>
                                        @if($q || $status)
                                            <p class="text-gray-500">Tidak ada pengumuman yang cocok dengan pencarian "{{ $q }}".</p>
                                            <a href="{{ route('pengumuman.index') }}" class="text-green-700 hover:text-green-900 font-medium text-sm">Reset pencarian</a>
                                        @else
                                            <p class="text-gray-500 mb-4">Belum ada pengumuman. Mulai dengan menambahkan yang pertama.</p>
                                            <a href="{{ route('pengumuman.create') }}" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white px-5 py-2.5 rounded-xl text-sm font-semibold transition">
                                                <i class="fas fa-plus"></i> Tambah Pengumuman
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($pengumumans->hasPages())
                    <div class="px-6 py-4 border-t border-gray-100 bg-green-50/30">
                        {{ $pengumumans->links() }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
