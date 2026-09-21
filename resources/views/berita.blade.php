@extends('layouts.front')

@section('content')

<section class="space">
    <div class="container">

        <div class="title-area text-center">
            <span class="sub-title">
                INFORMASI SEKOLAH
            </span>

            <h2 class="sec-title">
                Berita Terbaru
            </h2>
        </div>

        <div class="row">

            @forelse ($beritas as $berita)

                <div class="col-md-4 mb-4">

                    <div class="blog-card">

                        @if($berita->gambar)
                            <div class="blog-img">
                                <img 
                                    src="{{ asset('storage/' . $berita->gambar) }}"
                                    alt="{{ $berita->judul }}"
                                >
                            </div>
                        @endif

                        <div class="blog-content">

                            <div class="blog-meta">
                                {{ $berita->created_at->format('d M Y') }}
                            </div>

                            <h3 class="box-title">
                                {{ $berita->judul }}
                            </h3>

                            <p>
                                {{ Str::limit($berita->isi, 120) }}
                            </p>

                            <a 
                                href="{{ route('berita.detail', $berita->slug) }}"
                                class="th-btn"
                            >
                                Baca Selengkapnya
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12 text-center">
                    <h4>Belum ada berita.</h4>
                </div>

            @endforelse

        </div>

        <div class="mt-4">
            {{ $beritas->links() }}
        </div>

    </div>
</section>

@endsection