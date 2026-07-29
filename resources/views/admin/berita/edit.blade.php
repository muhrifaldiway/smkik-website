<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') {{-- Wajib ada untuk proses Edit di Laravel --}}
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Judul Berita</label>
                        <input type="text" name="judul" value="{{ $berita->judul }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Isi Berita</label>
                        <textarea name="konten" rows="6" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>{{ $berita->konten }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Upload Foto Baru (Biarkan kosong jika tidak ingin ganti foto)</label>
                        @if($berita->gambar)
                            <div class="mb-2">
                                <img src="{{ asset('storage/'.$berita->gambar) }}" alt="Foto Lama" width="150" class="rounded">
                            </div>
                        @endif
                        <input type="file" name="gambar" class="w-full border border-gray-300 rounded-md p-2">
                    </div>

                    <div class="flex items-center">
                        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">Update Berita</button>
                        <a href="{{ route('berita.index') }}" class="ml-4 text-gray-600 hover:underline">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>