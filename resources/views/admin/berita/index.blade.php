<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Berita SMKIK') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                {{-- Tombol Tambah Berita --}}
                <a href="{{ route('berita.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-4 inline-block">
                    + Tambah Berita Baru
                </a>

                {{-- Tabel Daftar Berita --}}
                <table class="table-auto w-full mt-4 text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border px-4 py-2">Gambar</th>
                            <th class="border px-4 py-2">Judul Berita</th>
                            <th class="border px-4 py-2">Tanggal</th>
                            <th class="border px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($berita as $item)
                        <tr>
                            <td class="border px-4 py-2">
                                @if($item->gambar)
                                    <img src="{{ asset('storage/'.$item->gambar) }}" alt="Gambar" width="80" class="rounded">
                                @else
                                    <span class="text-gray-400 text-sm">Tidak ada foto</span>
                                @endif
                            </td>
                            <td class="border px-4 py-2 font-semibold">{{ $item->judul }}</td>
                            <td class="border px-4 py-2">{{ $item->created_at->format('d/m/Y') }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('berita.edit', $item->id) }}" class="text-yellow-600 hover:underline">Edit</a> | 
                                <form action="{{ route('berita.destroy', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>