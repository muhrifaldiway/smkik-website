<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Pendaftaran PPDB Online</h2>
                <p class="text-sm text-gray-500 mt-1">Seleksi calon siswa baru dari formulir online.</p>
            </div>
            <a href="{{ route('ppdb.export', request()->query()) }}" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2.5 rounded-xl text-sm font-semibold transition shadow-md">
                <i class="fas fa-file-csv"></i>
                <span>Export CSV</span>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Statistik Status -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <a href="{{ route('ppdb.index', array_filter(['q' => $q])) }}" class="bg-white rounded-2xl border {{ !request('status') ? 'border-green-600 ring-2 ring-green-100' : 'border-gray-200' }} shadow-sm p-4 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs text-gray-500 font-semibold uppercase">Semua</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">{{ $counts['semua'] }}</p>
                        </div>
                        <div class="h-11 w-11 rounded-xl bg-green-100 text-green-700 flex items-center justify-center text-lg">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </a>
                <a href="{{ route('ppdb.index', array_filter(['status' => 'pending', 'q' => $q])) }}" class="bg-white rounded-2xl border {{ request('status') == 'pending' ? 'border-amber-500 ring-2 ring-amber-100' : 'border-gray-200' }} shadow-sm p-4 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs text-gray-500 font-semibold uppercase">Pending</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">{{ $counts['pending'] }}</p>
                        </div>
                        <div class="h-11 w-11 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center text-lg">
                            <i class="fas fa-hourglass-half"></i>
                        </div>
                    </div>
                </a>
                <a href="{{ route('ppdb.index', array_filter(['status' => 'diterima', 'q' => $q])) }}" class="bg-white rounded-2xl border {{ request('status') == 'diterima' ? 'border-green-600 ring-2 ring-green-100' : 'border-gray-200' }} shadow-sm p-4 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs text-gray-500 font-semibold uppercase">Diterima</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">{{ $counts['diterima'] }}</p>
                        </div>
                        <div class="h-11 w-11 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center text-lg">
                            <i class="fas fa-circle-check"></i>
                        </div>
                    </div>
                </a>
                <a href="{{ route('ppdb.index', array_filter(['status' => 'ditolak', 'q' => $q])) }}" class="bg-white rounded-2xl border {{ request('status') == 'ditolak' ? 'border-red-500 ring-2 ring-red-100' : 'border-gray-200' }} shadow-sm p-4 hover:shadow-md transition">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-xs text-gray-500 font-semibold uppercase">Ditolak</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">{{ $counts['ditolak'] }}</p>
                        </div>
                        <div class="h-11 w-11 rounded-xl bg-red-100 text-red-700 flex items-center justify-center text-lg">
                            <i class="fas fa-circle-xmark"></i>
                        </div>
                    </div>
                </a>
            </div>

            <form action="{{ route('ppdb.index') }}" method="GET" class="bg-white rounded-2xl shadow-md border border-green-100 p-4 mb-6">
                <div class="flex flex-col md:flex-row gap-3">
                    <div class="relative flex-1">
                        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input
                            type="text"
                            name="q"
                            value="{{ $q }}"
                            placeholder="Cari nama, NISN, no. pendaftaran, atau asal sekolah..."
                            class="w-full pl-11 pr-4 py-2.5 border-gray-300 rounded-xl focus:border-green-500 focus:ring-green-500">
                    </div>
                    <input type="hidden" name="status" value="{{ request('status') }}">
                    <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-6 py-2.5 rounded-xl font-semibold transition">
                        <i class="fas fa-magnifying-glass mr-1"></i> Cari
                    </button>
                    @if($q)
                        <a href="{{ route('ppdb.index', array_filter(['status' => request('status')])) }}" class="text-gray-500 hover:text-gray-700 px-4 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-50 transition">
                            <i class="fas fa-times"></i>
                        </a>
                    @endif
                </div>
            </form>

            <div class="bg-white rounded-2xl shadow-md border border-green-100 overflow-hidden">

                <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
                    <h3 class="text-lg font-bold text-gray-700">
                        <i class="fas fa-user-graduate text-green-700 mr-2"></i>
                        Daftar Calon Siswa Baru
                    </h3>
                    <span class="text-sm text-gray-500">{{ $ppdbs->total() }} pendaftar</span>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-green-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">No. Daftar</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">Nama / NISN</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">Asal Sekolah</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">Pilihan Jurusan</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-green-800 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-center text-xs font-bold text-green-800 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($ppdbs as $item)
                                <tr class="hover:bg-green-50/50 transition">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-green-700">
                                        {{ $item->no_pendaftaran }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $item->nama_lengkap }}</div>
                                        <div class="text-xs text-gray-500">NISN: {{ $item->nisn }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                        {{ $item->asal_sekolah }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                        <span class="bg-green-100 text-green-800 px-2.5 py-1 rounded-lg text-xs font-semibold">{{ $item->jurusan_pilihan }}</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-2.5 inline-flex text-xs leading-5 font-semibold rounded-full
                                            {{ $item->status == 'diterima' ? 'bg-green-100 text-green-800' : ($item->status == 'pending' ? 'bg-amber-100 text-amber-800' : 'bg-red-100 text-red-800') }}">
                                            {{ ucfirst($item->status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium space-x-2">
                                        <a href="{{ route('ppdb.show', $item->id) }}" class="text-green-700 hover:text-green-900 bg-green-50 p-2 rounded-lg transition" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="{{ route('ppdb.destroy', $item->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete(this)" data-title="Hapus data pendaftar?" data-text="Data calon siswa '{{ $item->nama_lengkap }}' akan dihapus permanen!" class="text-red-600 hover:text-red-900 bg-red-50 p-2 rounded-lg transition" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-16 text-center">
                                        <div class="text-gray-300 text-5xl mb-3"><i class="fas fa-user-graduate"></i></div>
                                        @if($q || request('status'))
                                            <p class="text-gray-500">Tidak ada pendaftar yang cocok dengan filter saat ini.</p>
                                            <a href="{{ route('ppdb.index') }}" class="text-green-700 hover:text-green-900 font-medium text-sm">Reset filter</a>
                                        @else
                                            <p class="text-gray-500 mb-4">Belum ada pendaftar PPDB.</p>
                                            <p class="text-sm text-gray-400">Formulir pendaftaran tersedia di halaman publik: <a href="{{ route('ppdb.public.create') }}" class="text-green-700 hover:underline">{{ route('ppdb.public.create') }}</a></p>
                                        @endif
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($ppdbs->hasPages())
                    <div class="px-6 py-4 border-t border-gray-100 bg-green-50/30">
                        {{ $ppdbs->links() }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
