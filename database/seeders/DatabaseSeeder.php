<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Berita;
use App\Models\Jurusan;
use App\Models\Pengumuman;
use App\Models\Guru;
use App\Models\Mitra;
use App\Models\Fasilitas;
use App\Models\Ppdb;
use App\Models\Ekskul;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Admin Default
        User::updateOrCreate(
            ['email' => 'mohrifaldiway@gmail.com'],
            [
                'name' => 'Administrator SMKIK',
                'password' => Hash::make('evb4sweh'),
            ]
        );

        // 2. Seed Data Jurusan (Sesuai kolom: nama_jurusan, singkatan, deskripsi, gambar, ikon)
        $jurusans = [
            [
                'nama_jurusan' => 'Teknik Komputer dan Jaringan',
                'singkatan'    => 'TKJ',
                'deskripsi'    => 'Mempelajari tentang perakitan komputer, instalasi jaringan LAN/WAN, server, dan administrasi jaringan.',
                'gambar'       => null,
                'ikon'         => 'fas fa-network-wired',
            ],
            [
                'nama_jurusan' => 'Rekayasa Perangkat Lunak',
                'singkatan'    => 'RPL',
                'deskripsi'    => 'Mempelajari pembuatan aplikasi berbasis web, mobile, desktop, serta pengelolaan database.',
                'gambar'       => null,
                'ikon'         => 'fas fa-code',
            ],
            [
                'nama_jurusan' => 'Multimedia / Desain Komunikasi Visual',
                'singkatan'    => 'MM / DKV',
                'deskripsi'    => 'Mempelajari desain grafis, editing video, animasi 2D/3D, dan seni fotografi.',
                'gambar'       => null,
                'ikon'         => 'fas fa-paint-brush',
            ],
        ];

        foreach ($jurusans as $j) {
            Jurusan::updateOrCreate(
                ['singkatan' => $j['singkatan']],
                [
                    'nama_jurusan' => $j['nama_jurusan'],
                    'singkatan'    => $j['singkatan'],
                    'deskripsi'    => $j['deskripsi'],
                    'gambar'       => $j['gambar'],
                    'ikon'         => $j['ikon'],
                ]
            );
        }

        // 3. Seed Data Berita (Sesuai kolom: judul, slug, konten, gambar)
        $beritas = [
            [
                'judul'  => 'SMKIK Sukses Gelar Kegiatan Uji Kompetensi Keahlian (UKK)',
                'konten' => 'Siswa-siswi kelas XII SMKIK melaksanakan Uji Kompetensi Keahlian (UKK) dengan menggandeng dunia industri sebagai penguji eksternal secara profesional.',
                'gambar' => null,
            ],
            [
                'judul'  => 'Pendaftaran Peserta Didik Baru (PPDB) Tahun Ajaran Baru Telah Dibuka',
                'konten' => 'SMKIK kembali membuka pendaftaran siswa baru gelombang pertama dengan berbagai fasilitas beasiswa prestasi dan kejuruan unggulan.',
                'gambar' => null,
            ],
        ];

        foreach ($beritas as $b) {
            Berita::updateOrCreate(
                ['slug' => Str::slug($b['judul'])],
                [
                    'judul'  => $b['judul'],
                    'slug'   => Str::slug($b['judul']),
                    'konten' => $b['konten'],
                    'gambar' => $b['gambar'],
                ]
            );
        }

        // 4. Seed Data Pengumuman (Sesuai kolom: judul, slug, isi, status)
        $pengumumans = [
            [
                'judul'  => 'Libur Semester Ganjil dan Jadwal Masuk Sekolah',
                'isi'    => 'Diberitahukan kepada seluruh siswa SMKIK bahwa libur semester ganjil dimulai tanggal 20 Desember hingga 2 Januari. Kegiatan belajar mengajar aktif kembali tanggal 3 Januari.',
                'status' => 'aktif',
            ],
            [
                'judul'  => 'Pembagian Rapor Hasil Belajar Siswa',
                'isi'    => 'Pengambilan rapor semester ganjil akan dilaksanakan pada hari Jumat di ruang kelas masing-masing didampingi oleh wali kelas.',
                'status' => 'aktif',
            ],
        ];

        foreach ($pengumumans as $p) {
            Pengumuman::updateOrCreate(
                ['slug' => Str::slug($p['judul'])],
                [
                    'judul'  => $p['judul'],
                    'slug'   => Str::slug($p['judul']),
                    'isi'    => $p['isi'],
                    'status' => $p['status'],
                ]
            );
        }

        // 5. Data Guru & Staf
        $gurus = [
            [
                'nama'     => 'Budi Santoso, M.Kom',
                'nip'      => '198706122010011002',
                'jabatan'  => 'Kepala Sekolah',
                'mapel'    => null,
                'kategori' => 'guru',
            ],
            [
                'nama'     => 'Siti Aminah, S.Pd',
                'nip'      => '199201012015012003',
                'jabatan'  => 'Guru Produktif',
                'mapel'    => 'Pemrograman Web',
                'kategori' => 'guru',
            ],
            [
                'nama'     => 'Joko Susilo',
                'nip'      => null,
                'jabatan'  => 'Staff Tata Usaha',
                'mapel'    => null,
                'kategori' => 'staf',
            ],
        ];
        foreach ($gurus as $g) {
            Guru::updateOrCreate(['nama' => $g['nama']], $g);
        }

        // 6. Data Mitra Industri
        $mitras = [
            [
                'nama_mitra'   => 'PT. Telkom Indonesia',
                'bidang_usaha' => 'Telekomunikasi',
                'alamat'       => 'Jl. Gatot Subroto, Jakarta',
                'kontak'       => '021-123456',
            ],
            [
                'nama_mitra'   => 'Google Indonesia',
                'bidang_usaha' => 'Teknologi Informasi',
                'alamat'       => 'SCBD, Jakarta',
                'kontak'       => 'hrd@google.co.id',
            ],
        ];
        foreach ($mitras as $m) {
            Mitra::updateOrCreate(['nama_mitra' => $m['nama_mitra']], $m);
        }

        // 7. Data Fasilitas
        $fasilitas = [
            [
                'nama_fasilitas' => 'Laboratorium Komputer TKJ',
                'deskripsi'      => 'Dilengkapi dengan 36 unit komputer high-end dan Cisco Router.',
                'kondisi'        => 'Baik',
            ],
            [
                'nama_fasilitas' => 'Perpustakaan Digital',
                'deskripsi'      => 'Ribuan koleksi buku fisik dan e-book yang dapat diakses online.',
                'kondisi'        => 'Baik',
            ],
        ];
        foreach ($fasilitas as $f) {
            Fasilitas::updateOrCreate(['nama_fasilitas' => $f['nama_fasilitas']], $f);
        }

        // 8. Data PPDB Online (Contoh pendaftar dummy)
        Ppdb::updateOrCreate(
            ['nisn' => '0012345678'],
            [
                'no_pendaftaran'  => 'PPDB-' . date('Y') . '-001',
                'nama_lengkap'    => 'Rizky Pratama',
                'jenis_kelamin'   => 'L',
                'asal_sekolah'    => 'SMP Negeri 1 Jakarta',
                'jurusan_pilihan' => 'RPL',
                'no_hp'           => '081234567890',
                'alamat'          => 'Jl. Mawar No. 12, Jakarta',
                'status'          => 'pending',
            ]
        );

        // 9. Data Ekstrakurikuler
        $ekskuls = [
            [
                'nama_ekskul' => 'Pramuka',
                'pembina'     => 'Kak Darmawan',
                'jadwal'      => 'Sabtu, 08.00 WIB',
                'deskripsi'   => 'Ekskul wajib untuk melatih kedisiplinan dan karakter.',
            ],
            [
                'nama_ekskul' => 'Futsal',
                'pembina'     => 'Coach Aris',
                'jadwal'      => 'Rabu, 16.00 WIB',
                'deskripsi'   => 'Mengembangkan bakat siswa di bidang olahraga sepak bola dalam ruangan.',
            ],
        ];
        foreach ($ekskuls as $e) {
            Ekskul::updateOrCreate(['nama_ekskul' => $e['nama_ekskul']], $e);
        }
    }
}