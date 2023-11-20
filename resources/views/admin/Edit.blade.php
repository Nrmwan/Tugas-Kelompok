@extends('layouts.admin')

@section('contentt')
<div class="content">
    <div class="card card-info card-outlane">
        <div class="card-header">
            <h3>Tambah Data</h3>
        </div>

        <div class="card-body">
            <form action="{{ url('/admin/update', $baj->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{-- <div class="form-group">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Baju">
                </div>
                <div class="form-group">
                    <textarea type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
                </div> --}}
                <label for="nama">Nama Produk :</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Baju" value="{{ $baj->nama }}" required><br><br>

                <label for="deskripsi">Deskripsi :</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control" placeholder="Deskripsi" required>{{ $baj->deskripsi }}</textarea><br><br>

                <label for="ukuran">Ukuran :</label>
                <select name="ukuran" id="ukuran" class="form-control" placeholder="Nama Baju">
                    <option value="{{ $baj->ukuran }}">{{ $baj->ukuran }}</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select><br><br>

                <label for="warna">Warna :</label>
                <input type="text" name="warna" id="warna" class="form-control" placeholder="Warna" value="{{ $baj->warna }}" required><br><br>

                <label for="stok">Stok :</label>
                <input type="number" name="stok" id="stok" class="form-control" placeholder="Stok" value="{{ $baj->stok }}" required><br><br>

                {{-- <label for="gambar">Gambar Produk :</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" required><br><br> --}}

                <label for="harga">Harga (Rupiah):</label>
                <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga" value="{{ $baj->harga }}" required><br><br>

                {{-- <input type="submit" value="Submit"> --}}
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection