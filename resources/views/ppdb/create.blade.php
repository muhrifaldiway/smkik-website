@extends('layouts.front')

@section('title', 'Penerimaan Peserta Didik Baru (PPDB) - SMK Informatika Komputer Ampana Kota')

@section('content')
    <section class="rs-privacy-privacy pt-50 pb-50 md-pt-30 md-pb-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="content-part p-4 bg-white shadow-sm rounded-4 border">

                        <div class="text-center mb-5 pb-3 border-bottom">
                            <h2 class="title mb-2" style="font-size: 32px; font-weight: 800; color: #0f172a;">
                                Penerimaan Peserta Didik Baru
                            </h2>
                            <h4 class="sub-title mb-2" style="font-weight: 700; color: #15803d;">
                                SMK Informatika Komputer Ampana Kota
                            </h4>
                            <p class="text-muted mb-0">
                                Tahun Ajaran {{ date('Y') }}/{{ date('Y') + 1 }}
                                — Silakan isi formulir pendaftaran di bawah ini dengan data yang sebenar-benarnya.
                            </p>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success border-0 rounded-3 d-flex align-items-center mb-4" role="alert">
                                <i class="fas fa-check-circle me-3 fs-4 text-success"></i>
                                <div>
                                    <h6 class="mb-1 fw-bold text-success">Pendaftaran Berhasil!</h6>
                                    <p class="mb-0">{{ session('success') }}</p>
                                </div>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger border-0 rounded-3 mb-4" role="alert">
                                <h6 class="mb-2 fw-bold text-danger">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    Terdapat kesalahan pada formulir
                                </h6>
                                <ul class="mb-0 ps-3 small">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('ppdb.public.store') }}" method="POST" class="row g-4">
                            @csrf

                            <div class="col-md-12">
                                <div class="p-3 bg-light rounded-3 border-start border-4 border-primary">
                                    <h6 class="fw-bold mb-0 text-primary">
                                        <i class="fas fa-user-graduate me-2"></i>
                                        A. DATA PRIBADI CALON SISWA
                                    </h6>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="nama_lengkap" class="form-label fw-semibold text-dark">
                                    Nama Lengkap <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="nama_lengkap" name="nama_lengkap"
                                       value="{{ old('nama_lengkap') }}"
                                       class="form-control form-control-lg"
                                       placeholder="Contoh: Ahmad Rizki Pratama" required>
                            </div>

                            <div class="col-md-4">
                                <label for="nisn" class="form-label fw-semibold text-dark">
                                    NISN <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="nisn" name="nisn"
                                       value="{{ old('nisn') }}"
                                       class="form-control form-control-lg"
                                       placeholder="10 digit NISN" maxlength="20" required>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label fw-semibold text-dark">
                                    Jenis Kelamin <span class="text-danger">*</span>
                                </label>
                                <div class="d-flex gap-4 pt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                               id="jk_l" value="L" {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }} required>
                                        <label class="form-check-label fw-medium" for="jk_l">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                               id="jk_p" value="P" {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }} required>
                                        <label class="form-check-label fw-medium" for="jk_p">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label for="asal_sekolah" class="form-label fw-semibold text-dark">
                                    Asal Sekolah (SMP/MTs) <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="asal_sekolah" name="asal_sekolah"
                                       value="{{ old('asal_sekolah') }}"
                                       class="form-control form-control-lg"
                                       placeholder="Contoh: SMP Negeri 1 Ampana Kota" required>
                            </div>

                            <div class="col-md-12 mt-4">
                                <div class="p-3 bg-light rounded-3 border-start border-4 border-success">
                                    <h6 class="fw-bold mb-0 text-success">
                                        <i class="fas fa-graduation-cap me-2"></i>
                                        B. PILIHAN PROGRAM KEAHLIAN (JURUSAN)
                                    </h6>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="jurusan_pilihan" class="form-label fw-semibold text-dark">
                                    Pilihan Jurusan <span class="text-danger">*</span>
                                </label>
                                <select id="jurusan_pilihan" name="jurusan_pilihan"
                                        class="form-select form-select-lg" required>
                                    <option value="" disabled selected>-- Pilih Program Keahlian --</option>
                                    @forelse($jurusans as $jurusan)
                                        <option value="{{ $jurusan->nama_jurusan }}"
                                            {{ old('jurusan_pilihan') == $jurusan->nama_jurusan ? 'selected' : '' }}>
                                            {{ $jurusan->nama_jurusan }}
                                            @if($jurusan->singkatan)
                                                ({{ $jurusan->singkatan }})
                                            @endif
                                        </option>
                                    @empty
                                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan (TKJ)</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak (RPL)</option>
                                        <option value="Multimedia">Multimedia (MM)</option>
                                    @endforelse
                                </select>
                                <div class="form-text">
                                    <i class="fas fa-info-circle me-1"></i>
                                    Pilihan jurusan Anda akan menjadi pertimbangan utama dalam proses seleksi.
                                </div>
                            </div>

                            <div class="col-md-12 mt-4">
                                <div class="p-3 bg-light rounded-3 border-start border-4 border-warning">
                                    <h6 class="fw-bold mb-0 text-warning-emphasis">
                                        <i class="fas fa-address-card me-2"></i>
                                        C. KONTAK DAN ALAMAT
                                    </h6>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label for="no_hp" class="form-label fw-semibold text-dark">
                                    No. Handphone / WhatsApp <span class="text-danger">*</span>
                                </label>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text bg-primary text-white">
                                        <i class="fab fa-whatsapp"></i>
                                    </span>
                                    <input type="tel" id="no_hp" name="no_hp"
                                           value="{{ old('no_hp') }}"
                                           class="form-control"
                                           placeholder="Contoh: 081234567890" maxlength="20" required>
                                </div>
                                <div class="form-text">
                                    <i class="fas fa-lightbulb me-1"></i>
                                    Pastikan nomor aktif untuk menerima informasi seleksi.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="alamat" class="form-label fw-semibold text-dark">
                                    Alamat Lengkap <span class="text-danger">*</span>
                                </label>
                                <textarea id="alamat" name="alamat" rows="4"
                                          class="form-control form-control-lg"
                                          placeholder="Nama Jalan, RT/RW, Kelurahan, Kecamatan, Kabupaten/Kota, Provinsi"
                                          required>{{ old('alamat') }}</textarea>
                            </div>

                            <div class="col-12 mt-5">
                                <div class="d-flex flex-wrap gap-3 p-4 bg-light rounded-4 border align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-3 p-3 bg-primary bg-opacity-10 rounded-3">
                                            <i class="fas fa-shield-alt text-primary fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-0 text-dark">Data Anda Aman</h6>
                                            <p class="mb-0 small text-muted">
                                                Seluruh data pribadi Anda hanya digunakan untuk keperluan seleksi PPDB.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('home') }}"
                                           class="btn btn-outline-secondary btn-lg px-4 rounded-3">
                                            <i class="fas fa-arrow-left me-2"></i>
                                            Kembali
                                        </a>
                                        <button type="submit"
                                                class="btn btn-primary btn-lg px-5 rounded-3 fw-semibold shadow-sm">
                                            <i class="fas fa-paper-plane me-2"></i>
                                            Kirim Pendaftaran
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                        <div class="mt-5 pt-4 border-top small text-muted text-center">
                            <p class="mb-2">
                                <i class="fas fa-headset me-2 text-primary"></i>
                                Butuh bantuan? Hubungi Panitia PPDB SMK IK Ampana Kota di nomor yang tertera di halaman kontak.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
