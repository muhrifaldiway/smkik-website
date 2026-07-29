<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Jurusan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Nama Jurusan (Program Keahlian)</label>
                        <input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Singkatan</label>
                        <input type="text" name="singkatan" value="{{ $jurusan->singkatan }}" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Deskripsi Jurusan</label>
                        <textarea name="deskripsi" rows="5" class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200" required>{{ $jurusan->deskripsi }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2">Ganti Foto (Biarkan kosong jika tidak ingin diubah)</label>
                        @if($jurusan->gambar)
                            <div class="mb-3">
                                <img src="{{ asset('storage/'.$jurusan->gambar) }}" alt="Foto Lama" class="w-32 h-32 object-cover rounded shadow">
                            </div>
                        @endif
                        <input type="file" name="gambar" class="w-full border border-gray-300 rounded-md p-2" accept="image/*">
                    </div>

                    <div class="flex items-center">
                        <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-6 rounded hover:bg-blue-700">Update Data</button>
                        <a href="{{ route('jurusan.index') }}" class="ml-4 text-gray-600 hover:underline font-semibold">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>