<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Jurusan Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('jurusan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Nama Jurusan (Program Keahlian)</label>
                        <input type="text" name="nama_jurusan" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200" placeholder="Contoh: Teknik Komputer dan Jaringan" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Singkatan</label>
                        <input type="text" name="singkatan" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200" placeholder="Contoh: TKJ (Opsional)">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Deskripsi Jurusan</label>
                        <textarea name="deskripsi" rows="5" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200" placeholder="Jelaskan secara detail mengenai jurusan ini..." required></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Foto / Gambar Representasi (Opsional)</label>
                        <input type="file" name="gambar" class="w-full border border-gray-300 rounded-md p-2" accept="image/*">
                        <p class="text-sm text-gray-500 mt-1">Format: JPG, JPEG, PNG. Maksimal 2MB.</p>
                    </div>

                    <div class="flex items-center">
                        <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-6 rounded hover:bg-blue-700">Simpan Data</button>
                        <a href="{{ route('jurusan.index') }}" class="ml-4 text-gray-600 hover:underline font-semibold">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>