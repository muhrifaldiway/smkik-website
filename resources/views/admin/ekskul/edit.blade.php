<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('ekskul.index') }}" class="text-green-700 hover:bg-green-50 p-2 rounded-lg transition" title="Kembali">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Ekstrakurikuler</h2>
                <p class="text-sm text-gray-500 mt-1">{{ $ekskul->nama_ekskul }}</p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8">

                <form action="{{ route('ekskul.update', $ekskul->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_ekskul" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Ekstrakurikuler <span class="text-red-500">*</span>
                            </label>
                            <input
                                id="nama_ekskul"
                                type="text"
                                name="nama_ekskul"
                                value="{{ old('nama_ekskul', $ekskul->nama_ekskul) }}"
                                required
                                autofocus
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
                                value="{{ old('pembina', $ekskul->pembina) }}"
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
                                value="{{ old('jadwal', $ekskul->jadwal) }}"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('jadwal') border-red-400 @enderror">
                            @error('jadwal')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-2">
                                Ganti Foto <span class="text-gray-400 font-normal">(kosongkan jika tetap)</span>
                            </label>
                            @if($ekskul->gambar)
                                <div class="mb-3">
                                    <img src="{{ asset('storage/' . $ekskul->gambar) }}" alt="Foto saat ini" class="h-24 w-40 object-cover rounded-xl shadow border border-green-100">
                                </div>
                            @endif
                            <input
                                id="gambar"
                                type="file"
                                name="gambar"
                                accept="image/*"
                                class="w-full border border-gray-300 rounded-xl p-2.5 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-700 file:text-white hover:file:bg-green-800 file:cursor-pointer">
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
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('deskripsi') border-red-400 @enderror">{{ old('deskripsi', $ekskul->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                        <button type="submit" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-2.5 rounded-xl transition shadow-md">
                            <i class="fas fa-save"></i> Perbarui
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
