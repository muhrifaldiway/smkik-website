<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('mitra.index') }}" class="text-green-700 hover:bg-green-50 p-2 rounded-lg transition" title="Kembali">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div class="flex items-center gap-3">
                @if($mitra->logo)
                    <img src="{{ asset('storage/' . $mitra->logo) }}" alt="{{ $mitra->nama_mitra }}" class="h-11 w-16 object-contain bg-green-50 rounded-lg border border-green-100 p-1">
                @else
                    <div class="h-11 w-11 rounded-xl bg-green-100 text-green-700 flex items-center justify-center">
                        <i class="fas fa-handshake"></i>
                    </div>
                @endif
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Mitra Industri</h2>
                    <p class="text-sm text-gray-500 mt-0.5">{{ $mitra->nama_mitra }}</p>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8">

                <form action="{{ route('mitra.update', $mitra->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_mitra" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Perusahaan / Instansi <span class="text-red-500">*</span>
                            </label>
                            <input
                                id="nama_mitra"
                                type="text"
                                name="nama_mitra"
                                value="{{ old('nama_mitra', $mitra->nama_mitra) }}"
                                required
                                autofocus
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
                                value="{{ old('bidang_usaha', $mitra->bidang_usaha) }}"
                                required
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
                                value="{{ old('kontak', $mitra->kontak) }}"
                                placeholder="No telp / email / website"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('kontak') border-red-400 @enderror">
                            @error('kontak')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="logo" class="block text-sm font-semibold text-gray-700 mb-2">
                                Ganti Logo <span class="text-gray-400 font-normal">(kosongkan jika tetap)</span>
                            </label>
                            @if($mitra->logo)
                                <div class="mb-3">
                                    <img src="{{ asset('storage/' . $mitra->logo) }}" alt="Logo saat ini" class="h-14 w-24 object-contain bg-green-50 rounded-lg border border-green-100 p-1.5">
                                </div>
                            @endif
                            <input
                                id="logo"
                                type="file"
                                name="logo"
                                accept="image/*"
                                class="w-full border border-gray-300 rounded-xl p-2.5 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-700 file:text-white hover:file:bg-green-800 file:cursor-pointer">
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
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('alamat') border-red-400 @enderror">{{ old('alamat', $mitra->alamat) }}</textarea>
                        @error('alamat')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                        <button type="submit" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-2.5 rounded-xl transition shadow-md">
                            <i class="fas fa-save"></i> Perbarui
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
