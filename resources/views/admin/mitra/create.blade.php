<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('mitra.index') }}" class="text-green-700 hover:bg-green-50 p-2 rounded-lg transition" title="Kembali">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Mitra Industri</h2>
                <p class="text-sm text-gray-500 mt-1">Data DUDI yang bekerja sama dengan sekolah.</p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8">

                <form action="{{ route('mitra.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_mitra" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Perusahaan / Instansi <span class="text-red-500">*</span>
                            </label>
                            <input
                                id="nama_mitra"
                                type="text"
                                name="nama_mitra"
                                value="{{ old('nama_mitra') }}"
                                required
                                autofocus
                                placeholder="Contoh: PT Teknologi Nusantara"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('nama_mitra') border-red-400 @enderror">
                            @error('nama_mitra')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="bidang_usaha" class="block text-sm font-semibold text-gray-700 mb-2">
                                Bidang Usaha / Kerjasama <span class="text-red-500">*</span>
                            </label>
                            <input
                                id="bidang_usaha"
                                type="text"
                                name="bidang_usaha"
                                value="{{ old('bidang_usaha') }}"
                                required
                                placeholder="Contoh: IT Software House / Perbankan"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('bidang_usaha') border-red-400 @enderror">
                            @error('bidang_usaha')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="kontak" class="block text-sm font-semibold text-gray-700 mb-2">
                                Kontak <span class="text-gray-400 font-normal">(opsional)</span>
                            </label>
                            <input
                                id="kontak"
                                type="text"
                                name="kontak"
                                value="{{ old('kontak') }}"
                                placeholder="No telp / email / website"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('kontak') border-red-400 @enderror">
                            @error('kontak')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="logo" class="block text-sm font-semibold text-gray-700 mb-2">
                                Logo Perusahaan <span class="text-gray-400 font-normal">(opsional)</span>
                            </label>
                            <input
                                id="logo"
                                type="file"
                                name="logo"
                                accept="image/*"
                                class="w-full border border-gray-300 rounded-xl p-2.5 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-700 file:text-white hover:file:bg-green-800 file:cursor-pointer">
                            <p class="text-xs text-gray-500 mt-2">Disarankan PNG transparan. Maks 2MB.</p>
                            @error('logo')
                                <p class="text-sm text-red-600 mt-1"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="alamat" class="block text-sm font-semibold text-gray-700 mb-2">
                            Alamat Perusahaan <span class="text-gray-400 font-normal">(opsional)</span>
                        </label>
                        <textarea
                            id="alamat"
                            name="alamat"
                            rows="3"
                            placeholder="Alamat lengkap perusahaan..."
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('alamat') border-red-400 @enderror">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                        <button type="submit" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-2.5 rounded-xl transition shadow-md">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                        <a href="{{ route('mitra.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800 font-semibold px-5 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-50 transition">
                            <i class="fas fa-times"></i> Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
