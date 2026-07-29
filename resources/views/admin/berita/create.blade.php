<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tulis Berita Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                {{-- Form harus menggunakan enctype multipart/form-data agar bisa upload file --}}
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Judul Berita</label>
                        <input type="text" name="judul" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" placeholder="Masukkan judul..." required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Isi Berita</label>
                        <textarea name="konten" rows="6" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" placeholder="Tulis deskripsi berita di sini..." required></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Upload Foto (Opsional)</label>
                        <input type="file" name="gambar" class="w-full border border-gray-300 rounded-md p-2">
                        <span class="text-sm text-gray-500">Format: JPG, PNG, JPEG. Maksimal 2MB.</span>
                    </div>

                    <div class="flex items-center">
                        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700">Simpan & Terbitkan</button>
                        <a href="{{ route('berita.index') }}" class="ml-4 text-gray-600 hover:underline">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>