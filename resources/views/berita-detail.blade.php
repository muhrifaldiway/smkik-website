@extends('layouts.front')

@section('title', $berita->judul . ' - SMKIK Ampana Kota')

@section('content')
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-single">
                    <div class="blog-img mb-40 text-center">
                        @if($berita->gambar)
                            <img src="{{ asset('storage/'.$berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid rounded" style="max-height: 500px; width: 100%; object-fit: cover;">
                        @else
                            <img src="{{ asset('assets/img/blog/blog-s-1-1.jpg') }}" alt="Default Image" class="img-fluid rounded">
                        @endif
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta mb-20">
                            <a href="#"><i class="far fa-calendar"></i> {{ $berita->created_at->format('d F Y') }}</a>
                            <a href="#"><i class="far fa-user"></i> Admin SMKIK</a>
                        </div>
                        <h2 class="blog-title mb-30">{{ $berita->judul }}</h2>
                        
                        <div class="blog-text">
                            {{-- Karena konten mungkin memiliki paragraf (Enter), kita gunakan nl2br agar formatnya rapi --}}
                            <p>{!! nl2br(e($berita->konten)) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection