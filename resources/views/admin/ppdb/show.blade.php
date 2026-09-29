<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('ppdb.index') }}" class="text-green-700 hover:bg-green-50 p-2 rounded-lg transition" title="Kembali">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Detail Pendaftar PPDB</h2>
                <p class="text-sm text-gray-500 mt-1">{{ $ppdb->nama_lengkap }}</p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-md border border-green-100 overflow-hidden">

                <div class="bg-gradient-to-r from-green-800 to-emerald-700 px-8 py-6 flex justify-between items-center">
                    <div>
                        <span class="text-xs text-green-200 uppercase font-bold tracking-wider">No. Pendaftaran</span>
                        <h3 class="text-2xl font-black text-white">{{ $ppdb->no_pendaftaran }}</h3>
                        <p class="text-green-100 text-sm mt-1">Terdaftar: {{ $ppdb->created_at->format('d F Y, H:i') }} WIB</p>
                    </div>
                    <div>
                        <span class="px-4 py-1.5 inline-flex text-sm leading-6 font-semibold rounded-full
                            {{ $ppdb->status == 'diterima' ? 'bg-green-600 text-white' : ($ppdb->status == 'pending' ? 'bg-amber-500 text-white' : 'bg-red-600 text-white') }}">
                            {{ ucfirst($ppdb->status) }}
                        </span>
                    </div>
                </div>

                <div class="p-8 space-y-8">

                    <!-- Informasi Biodata -->
                    <div>
                        <h4 class="font-bold text-gray-700 mb-4 text-sm uppercase tracking-wider flex items-center gap-2">
                            <i class="fas fa-id-card text-green-700"></i> Informasi Calon Siswa
                        </h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                            <div>
                                <p class="text-gray-500 font-medium">Nama Lengkap</p>
                                <p class="text-gray-900 font-bold text-base">{{ $ppdb->nama_lengkap }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500 font-medium">NISN</p>
                                <p class="text-gray-900 font-bold text-base">{{ $ppdb->nisn }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500 font-medium">Jenis Kelamin</p>
                                <p class="text-gray-900 font-bold text-base">{{ $ppdb->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500 font-medium">Asal Sekolah</p>
                                <p class="text-gray-900 font-bold text-base">{{ $ppdb->asal_sekolah }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500 font-medium">Pilihan Jurusan</p>
                                <p class="text-gray-900 font-bold text-base"><span class="bg-green-100 text-green-800 px-3 py-1 rounded-lg">{{ $ppdb->jurusan_pilihan }}</span></p>
                            </div>
                            <div>
                                <p class="text-gray-500 font-medium">No. Handphone / WhatsApp</p>
                                <p class="text-gray-900 font-bold text-base">{{ $ppdb->no_hp }}</p>
                            </div>
                            <div class="md:col-span-2">
                                <p class="text-gray-500 font-medium">Alamat Lengkap</p>
                                <p class="text-gray-900 font-bold text-base">{{ $ppdb->alamat }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Form Ubah Status -->
                    <div class="border-t border-gray-100 pt-6">
                        <div class="bg-green-50 border border-green-100 p-5 rounded-2xl">
                            <h4 class="font-bold text-gray-700 mb-3 text-sm uppercase tracking-wider flex items-center gap-2">
                                <i class="fas fa-pen-to-square text-green-700"></i> Ubah Status Seleksi
                            </h4>
                            <form action="{{ route('ppdb.status', $ppdb->id) }}" method="POST" class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                                @csrf
                                @method('PATCH')

                                <select name="status" class="rounded-xl border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 text-sm flex-1">
                                    <option value="pending" {{ $ppdb->status == 'pending' ? 'selected' : '' }}>Pending (Menunggu Seleksi)</option>
                                    <option value="diterima" {{ $ppdb->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                                    <option value="ditolak" {{ $ppdb->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                </select>

                                <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-6 py-2.5 rounded-xl text-sm transition font-semibold shadow-md">
                                    <i class="fas fa-check mr-1"></i> Update Status
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="flex justify-between items-center pt-2">
                        <a href="{{ route('ppdb.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800 font-semibold px-5 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-50 transition">
                            <i class="fas fa-arrow-left"></i> Kembali ke Daftar
                        </a>
                        <form action="{{ route('ppdb.destroy', $ppdb->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete(this)" data-title="Hapus data pendaftar?" data-text="Data calon siswa '{{ $ppdb->nama_lengkap }}' akan dihapus permanen!" class="inline-flex items-center gap-2 text-red-600 hover:text-white hover:bg-red-600 font-semibold px-5 py-2.5 rounded-xl border border-red-200 bg-red-50 transition">
                                <i class="fas fa-trash"></i> Hapus Pendaftar
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
