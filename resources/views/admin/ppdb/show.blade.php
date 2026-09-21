<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Pendaftar PPDB') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-6">
                
                <div class="flex justify-between items-center border-b pb-4">
                    <div>
                        <span class="text-xs text-gray-400 uppercase font-bold tracking-wider">No. Pendaftaran</span>
                        <h3 class="text-xl font-black text-blue-600">{{ $ppdb->no_pendaftaran }}</h3>
                    </div>
                    <div>
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full 
                            {{ $ppdb->status == 'diterima' ? 'bg-green-100 text-green-800' : ($ppdb->status == 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-red-100 text-red-800') }}">
                            Status: {{ ucfirst($ppdb->status) }}
                        </span>
                    </div>
                </div>

                <!-- Informasi Biodata -->
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
                        <p class="text-gray-900 font-bold text-base"><span class="bg-blue-50 text-blue-700 px-2 py-1 rounded">{{ $ppdb->jurusan_pilihan }}</span></p>
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

                <!-- Form Ubah Status -->
                <div class="border-t pt-6 bg-slate-50 p-4 rounded-xl">
                    <h4 class="font-bold text-gray-700 mb-3 text-sm uppercase">Ubah Status Kelulusan / Seleksi</h4>
                    <form action="{{ route('ppdb.status', $ppdb->id) }}" method="POST" class="flex items-center space-x-4">
                        @csrf
                        @method('PATCH')

                        <select name="status" class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm">
                            <option value="pending" {{ $ppdb->status == 'pending' ? 'selected' : '' }}>Pending (Menunggu)</option>
                            <option value="diterima" {{ $ppdb->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                            <option value="ditolak" {{ $ppdb->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                        </select>

                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm transition font-semibold shadow">
                            Update Status
                        </button>
                    </form>
                </div>

                <div class="flex justify-end pt-4">
                    <a href="{{ route('ppdb.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg text-sm transition">Kembali ke Daftar</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>