@extends('layouts.front')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h1>Struktur Organisasi</h1>
        <p class="text-muted">
           Struktur organisasi SMK Informatika Komputer Ampana Kota.
        </p>
    </div>

    <div class="text-center">
        
        <img 
            src="{{ asset('assets/img/smkik/logo.png') }}"
            alt="Struktur Organisasi SMK Informatika Komputer Ampana Kota"
            class="img-fluid"
        >
    </div>

</div>

@endsection