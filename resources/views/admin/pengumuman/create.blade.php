<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('pengumuman.index') }}" class="text-green-700 hover:bg-green-50 p-2 rounded-lg transition" title="Kembali">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Pengumuman</h2>
                <p class="text-sm text-gray-500 mt-1">Buat informasi baru untuk ditampilkan di website.</p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-md border border-green-100 p-8">

                <form action="{{ route('pengumuman.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">
                            Judul Pengumuman <span class="text-red-500">*</span>
                        </label>
                        <input
                            id="judul"
                            type="text"
                            name="judul"
                            value="{{ old('judul') }}"
                            required
                            autofocus
                            placeholder="Contoh: Libur Awal Ramadhan"
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('judul') border-red-400 @enderror">
                        @error('judul')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">
                            Status <span class="text-red-500">*</span>
                        </label>
                        <select
                            id="status"
                            name="status"
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('status') border-red-400 @enderror">
                            <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif (tampilkan di website)</option>
                            <option value="nonaktif" {{ old('status') == 'nonaktif' ? 'selected' : '' }}>Nonaktif (sembunyikan)</option>
                        </select>
                        @error('status')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="isi" class="block text-sm font-semibold text-gray-700 mb-2">
                            Isi Pengumuman <span class="text-red-500">*</span>
                        </label>
                        <textarea
                            id="isi"
                            name="isi"
                            rows="7"
                            required
                            placeholder="Tulis isi pengumuman secara lengkap..."
                            class="w-full border-gray-300 rounded-xl shadow-sm focus:border-green-500 focus:ring-green-500 @error('isi') border-red-400 @enderror">{{ old('isi') }}</textarea>
                        @error('isi')
                            <p class="text-sm text-red-600 mt-2"><i class="fas fa-circle-exclamation mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                        <button type="submit" class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white font-semibold px-6 py-2.5 rounded-xl transition shadow-md">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                        <a href="{{ route('pengumuman.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800 font-semibold px-5 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-50 transition">
                            <i class="fas fa-times"></i> Batal
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
