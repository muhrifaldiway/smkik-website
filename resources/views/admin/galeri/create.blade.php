<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('galeri.index') }}" class="text-green-700 hover:bg-green-50 p-2 rounded-lg transition" title="Kembali">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Upload Foto Galeri</h2>
                <p class="text-sm text-gray-500 mt-1">Tambahkan dokumentasi kegiatan sekolah.</p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8">

                <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div>
                        <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-2">
                            Foto <span class="text-red-500">*</span>
                        </label>
                        <div class="border-2 border-dashed border-green-200 rounded-2xl p-8 text-center bg-green-50/40 hover:border-green-400 transition">
                            <i class="fas fa-cloud-arrow-up text-4xl text-green-600 mb-3"></i>
                            <input
                                id="gambar"
                                type="file"
                                name="gambar"
                                accept="image/jpeg,image/png,image/jpg"
                                required
                                class="w-full border border-gray-300 rounded-xl p-2.5 mt-2 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-700 file:text-white hover:file:bg-green-800 file:cursor-pointer">
                            <p class="text-xs text-gray-500 mt-2">JPG atau PNG. Maksimal 2MB.</p>
                        </div>
                        @error('gambar')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">
                            Judul / Keterangan Foto <span class="text-red-500">*</span>
                        </label>
                        <input
                            id="judul"
                            type="text"
                            name="judul"
                            value="{{ old('judul') }}"
                            required
                            autofocus
                            placeholder="Contoh: Latihan Pramuka Garuda Depan"
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('judul') border-red-400 @enderror">
                        @error('judul')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="kategori" class="block text-sm font-semibold text-gray-700 mb-2">
                            Kategori <span class="text-gray-400 font-normal">(opsional)</span>
                        </label>
                        <input
                            id="kategori"
                            type="text"
                            name="kategori"
                            value="{{ old('kategori') }}"
                            list="kategori-list"
                            placeholder="Contoh: Ekstrakurikuler / Akademik / Prestasi"
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('kategori') border-red-400 @enderror">
                        <datalist id="kategori-list">
                            <option value="Kegiatan Sekolah"></option>
                            <option value="Ekstrakurikuler"></option>
                            <option value="Akademik"></option>
                            <option value="Prestasi"></option>
                            <option value="Fasilitas"></option>
                            <option value="Event"></option>
                        </datalist>
                        @error('kategori')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">
                            Deskripsi <span class="text-gray-400 font-normal">(opsional)</span>
                        </label>
                        <textarea
                            id="deskripsi"
                            name="deskripsi"
                            rows="4"
                            placeholder="Ceritakan sedikit tentang kegiatan pada foto ini..."
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('deskripsi') border-red-400 @enderror">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                        <button type="submit" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-2.5 rounded-xl transition shadow-md">
                            <i class="fas fa-cloud-arrow-up"></i> Upload
                        </button>
                        <a href="{{ route('galeri.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800 font-semibold px-5 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-50 transition">
                            <i class="fas fa-times"></i> Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
