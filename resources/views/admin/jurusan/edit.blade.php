<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('jurusan.index') }}" class="text-green-700 hover:bg-green-50 p-2 rounded-lg transition" title="Kembali">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Data Jurusan</h2>
                <p class="text-sm text-gray-500 mt-1">{{ $jurusan->nama_jurusan }}</p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8">

                <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="nama_jurusan" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama Jurusan (Program Keahlian) <span class="text-red-500">*</span>
                        </label>
                        <input
                            id="nama_jurusan"
                            type="text"
                            name="nama_jurusan"
                            value="{{ old('nama_jurusan', $jurusan->nama_jurusan) }}"
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('nama_jurusan') border-red-400 @enderror"
                            required>
                        @error('nama_jurusan')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="singkatan" class="block text-sm font-semibold text-gray-700 mb-2">
                            Singkatan <span class="text-gray-400 font-normal">(opsional)</span>
                        </label>
                        <input
                            id="singkatan"
                            type="text"
                            name="singkatan"
                            value="{{ old('singkatan', $jurusan->singkatan) }}"
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500">
                        @error('singkatan')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">
                            Deskripsi Jurusan <span class="text-red-500">*</span>
                        </label>
                        <textarea
                            id="deskripsi"
                            name="deskripsi"
                            rows="6"
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('deskripsi') border-red-400 @enderror"
                            required>{{ old('deskripsi', $jurusan->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="gambar" class="block text-sm font-semibold text-gray-700 mb-2">
                                Ganti Foto <span class="text-gray-400 font-normal">(kosongkan jika tetap)</span>
                            </label>
                            @if($jurusan->gambar)
                                <div class="mb-3">
                                    <img src="{{ asset('storage/'.$jurusan->gambar) }}" alt="Foto saat ini" class="w-32 h-32 object-cover rounded-xl shadow border border-green-100">
                                </div>
                            @endif
                            <input
                                id="gambar"
                                type="file"
                                name="gambar"
                                class="w-full border border-gray-300 rounded-xl p-2.5 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-700 file:text-white hover:file:bg-green-800 file:cursor-pointer"
                                accept="image/*">
                            @error('gambar')
                                <p class="text-sm text-red-600 mt-1"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="ikon" class="block text-sm font-semibold text-gray-700 mb-2">
                                Ganti Ikon <span class="text-gray-400 font-normal">(kosongkan jika tetap)</span>
                            </label>
                            @if($jurusan->ikon)
                                <div class="mb-3">
                                    <img src="{{ asset('storage/'.$jurusan->ikon) }}" alt="Ikon saat ini" class="w-20 h-20 object-contain rounded-xl shadow border border-green-100 bg-green-50 p-2">
                                </div>
                            @endif
                            <input
                                id="ikon"
                                type="file"
                                name="ikon"
                                class="w-full border border-gray-300 rounded-xl p-2.5 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-700 file:text-white hover:file:bg-green-800 file:cursor-pointer"
                                accept="image/*">
                            @error('ikon')
                                <p class="text-sm text-red-600 mt-1"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-2.5 rounded-xl transition shadow-md">
                            <i class="fas fa-save"></i> Update Data
                        </button>
                        <a
                            href="{{ route('jurusan.index') }}"
                            class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800 font-semibold px-5 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-50 transition">
                            <i class="fas fa-times"></i> Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
