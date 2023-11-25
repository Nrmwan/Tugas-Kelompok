@extends('layouts.user')

@section('home')
    <!-- contac selection start -->
    <section id="contact" class="contact">
        <h2><span>contact</span> Kami</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, nostrum?</p>
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.961987148636!2d110.43242587486414!3d-7.245166192761238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7083db82cfbfc5%3A0x36498f800f38f195!2sSop%20Ayam%20Pak%20Marno!5e0!3m2!1sid!2sid!4v1690821138846!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="E-Mail">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="No HP">
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- contac selection end -->
@endsection