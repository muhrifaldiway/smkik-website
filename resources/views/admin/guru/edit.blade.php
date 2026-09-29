<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('guru.index') }}" class="text-green-700 hover:bg-green-50 p-2 rounded-lg transition" title="Kembali">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div class="flex items-center gap-3">
                @if($guru->foto)
                    <img src="{{ asset('storage/' . $guru->foto) }}" alt="{{ $guru->nama }}" class="h-11 w-11 rounded-full object-cover shadow border border-green-100">
                @else
                    <div class="h-11 w-11 rounded-full bg-green-100 text-green-700 flex items-center justify-center font-bold">
                        {{ strtoupper(substr($guru->nama, 0, 2)) }}
                    </div>
                @endif
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Data Guru & Staf</h2>
                    <p class="text-sm text-gray-500 mt-0.5">{{ $guru->nama }}</p>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8">

                <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Lengkap & Gelar <span class="text-red-500">*</span>
                            </label>
                            <input
                                id="nama"
                                type="text"
                                name="nama"
                                value="{{ old('nama', $guru->nama) }}"
                                required
                                autofocus
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('nama') border-red-400 @enderror">
                            @error('nama')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="nip" class="block text-sm font-semibold text-gray-700 mb-2">
                                NIP / NUPTK <span class="text-gray-400 font-normal">(opsional)</span>
                            </label>
                            <input
                                id="nip"
                                type="text"
                                name="nip"
                                value="{{ old('nip', $guru->nip) }}"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('nip') border-red-400 @enderror">
                            @error('nip')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="jabatan" class="block text-sm font-semibold text-gray-700 mb-2">
                                Jabatan <span class="text-red-500">*</span>
                            </label>
                            <input
                                id="jabatan"
                                type="text"
                                name="jabatan"
                                value="{{ old('jabatan', $guru->jabatan) }}"
                                required
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('jabatan') border-red-400 @enderror">
                            @error('jabatan')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="mapel" class="block text-sm font-semibold text-gray-700 mb-2">
                                Mata Pelajaran <span class="text-gray-400 font-normal">(jika guru)</span>
                            </label>
                            <input
                                id="mapel"
                                type="text"
                                name="mapel"
                                value="{{ old('mapel', $guru->mapel) }}"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('mapel') border-red-400 @enderror">
                            @error('mapel')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="kategori" class="block text-sm font-semibold text-gray-700 mb-2">
                                Kategori <span class="text-red-500">*</span>
                            </label>
                            <select
                                id="kategori"
                                name="kategori"
                                class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('kategori') border-red-400 @enderror">
                                <option value="guru" {{ old('kategori', $guru->kategori) == 'guru' ? 'selected' : '' }}>Guru</option>
                                <option value="staf" {{ old('kategori', $guru->kategori) == 'staf' ? 'selected' : '' }}>Staf / Karyawan</option>
                            </select>
                            @error('kategori')
                                <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="foto" class="block text-sm font-semibold text-gray-700 mb-2">
                                Ganti Foto <span class="text-gray-400 font-normal">(kosongkan jika tetap)</span>
                            </label>
                            @if($guru->foto)
                                <div class="mb-3">
                                    <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto saat ini" class="h-20 w-20 rounded-full object-cover shadow border border-green-100">
                                </div>
                            @endif
                            <input
                                id="foto"
                                type="file"
                                name="foto"
                                accept="image/*"
                                class="w-full border border-gray-300 rounded-xl p-2.5 file:mr-3 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-700 file:text-white hover:file:bg-green-800 file:cursor-pointer">
                            @error('foto')
                                <p class="text-sm text-red-600 mt-1"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                        <button type="submit" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-2.5 rounded-xl transition shadow-md">
                            <i class="fas fa-save"></i> Perbarui
                        </button>
                        <a href="{{ route('guru.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800 font-semibold px-5 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-50 transition">
                            <i class="fas fa-times"></i> Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
