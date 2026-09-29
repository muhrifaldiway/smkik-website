<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('ekskul.index') }}" class="text-green-700 hover:bg-green-50 p-2 rounded-lg transition" title="Kembali">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Ekstrakurikuler</h2>
                <p class="text-sm text-gray-500 mt-1">Kegiatan non-akademik untuk peserta didik.</p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8">

                <form action="{{ route('ekskul.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_ekskul" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Ekstrakurikuler <span class="text-red-500">*</span>
                            </label>
                            <input
                                id="nama_ekskul"
                                type="text"
                                name="nama_ekskul"
                                value="{{ old('nama_ekskul') }}"
                                required
                                autofocus
                                placeholder="Contoh: Pramuka / Paskibra"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('nama_ekskul') border-red-400 @enderror">
                            @error('nama_ekskul')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="pembina" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Pembina <span class="text-gray-400 font-normal">(opsional)</span>
                            </label>
                            <input
                                id="pembina"
                                type="text"
                                name="pembina"
                                value="{{ old('pembina') }}"
                                placeholder="Contoh: Ahmad S.Pd."
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('pembina') border-red-400 @enderror">
                            @error('pembina')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="jadwal" class="block text-sm font-semibold text-gray-700 mb-2">
                                Jadwal Kegiatan <span class="text-gray-400 font-normal">(opsional)</span>
                            </label>
                            <input
                                id="jadwal"
                                type="text"
                                name="jadwal"
                                value="{{ old('jadwal') }}"
                                placeholder="Contoh: Setiap Jumat, 15:30 WIB"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('jadwal') border-red-400 @enderror">
                            @error('jadwal')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-2">
                                Foto Kegiatan <span class="text-gray-400 font-normal">(opsional)</span>
                            </label>
                            <input
                                id="gambar"
                                type="file"
                                name="gambar"
                                accept="image/*"
                                class="w-full border border-gray-300 rounded-xl p-2.5 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-700 file:text-white hover:file:bg-green-800 file:cursor-pointer">
                            <p class="text-xs text-gray-500 mt-2">JPG, JPEG, PNG. Maksimal 2MB.</p>
                            @error('gambar')
                                <p class="text-sm text-red-600 mt-1"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">
                            Deskripsi Ekstrakurikuler <span class="text-gray-400 font-normal">(opsional)</span>
                        </label>
                        <textarea
                            id="deskripsi"
                            name="deskripsi"
                            rows="4"
                            placeholder="Deskripsikan kegiatan, prestasi, atau benefit ekskul ini..."
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('deskripsi') border-red-400 @enderror">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                        <button type="submit" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-2.5 rounded-xl transition shadow-md">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                        <a href="{{ route('ekskul.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800 font-semibold px-5 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-50 transition">
                            <i class="fas fa-times"></i> Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
