<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-3">
            <a href="{{ route('berita.index') }}" class="text-green-700 hover:bg-green-50 p-2 rounded-lg transition" title="Kembali">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Berita') }}
            </h2>
        </div>
    </x-slot>

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8 max-w-3xl">

        <form action="{{ route('berita.update', $berita) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Judul Berita <span class="text-red-500">*</span></label>
                <input type="text" name="judul" value="{{ old('judul', $berita->judul) }}" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>
                @error('judul') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Isi Berita <span class="text-red-500">*</span></label>
                <textarea name="konten" rows="10" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500" required>{{ old('konten', $berita->konten) }}</textarea>
                @error('konten') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Foto Saat Ini</label>
                @if($berita->gambar)
                    <img src="{{ asset('storage/'.$berita->gambar) }}" alt="Foto berita" class="h-32 w-auto object-cover rounded-lg border border-gray-200 shadow-sm mb-2">
                @else
                    <p class="text-sm text-gray-400 italic mb-2">Belum ada foto.</p>
                @endif
                <label class="block text-sm font-semibold text-gray-700 mb-2">Ganti Foto (kosongkan jika tidak ingin ganti)</label>
                <input type="file" name="gambar" accept="image/jpeg,image/png,image/jpg" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm text-gray-600 file:mr-3 file:py-1.5 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-green-700 file:text-white hover:file:bg-green-800">
                <p class="text-xs text-gray-400 mt-1">Format: JPG, PNG, JPEG. Maksimal 2MB.</p>
                @error('gambar') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center pt-2 border-t">
                <button type="submit" class="bg-green-700 hover:bg-green-800 text-white px-6 py-2.5 rounded-lg font-semibold text-sm transition shadow-sm">
                    <i class="fas fa-save mr-1"></i> Update Berita
                </button>
                <a href="{{ route('berita.index') }}" class="ml-4 bg-gray-100 hover:bg-gray-200 text-gray-600 px-4 py-2.5 rounded-lg font-semibold text-sm transition">Batal</a>
            </div>
        </form>

    </div>
</x-app-layout>
