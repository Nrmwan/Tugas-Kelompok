@extends('layouts.admin')

@section('contentt')

<div class="content">
    <div class="card card-info card-outlane">
        <div class="card-header">
            <div class="card-tols">
                <a href="{{ route('tambah') }}">Tambah Data</a>
            </div>
        </div>
    </div>
</div>
<div class="card-body">
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Ukuran</th>
            <th>Warna</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Option</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>
@endsection