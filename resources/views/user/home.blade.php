@extends('layouts.user')

@section('home')
    <!-- Hero Selection Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Beli Baju Di Fashion<span>Heaven</span>.</h1>
            <p>Selamat datang di Fashion Heaven, destinasi pilihan untuk mengekspresikan gaya unik Anda! Di sini.</p>
            <a href="{{ route('menu') }}" class="cta">Belanja Sekarang</a>
        </main>
    </section>
    <!-- Hero Selection end -->
@endsection