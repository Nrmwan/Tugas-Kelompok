@extends('layouts.user')

@section('home')
    <!-- Menu Selection Start -->
<section id="menu" class="menu">
    <h2><span>Produk</span> Kami</h2>
    <p>Jangan Sampai Ketinggalan Produk Terbaru Kami</p>
    
    <div class="row">
        @foreach ($dtbaju as $item)
        <div class="menu-card">
            <img src="{{ Storage::url($item->gambar) }}" class="menu-card-img">
            <h3 class="menu-card-title">{{ $item->nama }}</h3>
            <p class="menu-card-price">{{ $item->deskripsi }}</p>
            {{-- <p class="menu-card-price"></p> --}}
            <a href="#" class="cta">{{ $item->harga }}</a>
        </div>
        @endforeach
    </div>
        {{-- <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <img src="{{ Storage::url($item->gambar) }}" height="75" width="75" class="card-img-top" alt="" />
            <div class="card-body">
            <h5 class="card-title">{{ $item->nama }}</h5>
            <p class="card-text">{{ $item->deskripsi }}</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div> --}}

</section>
<!-- Menu Selection End -->
@endsection