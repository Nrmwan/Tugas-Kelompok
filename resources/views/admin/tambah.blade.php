@extends('layouts.admin')

@section('contentt')
<div class="content">
    <div class="card card-info card-outlane">
        <div class="card-header">
            <h3>Tambah Data</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('simpan') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Baju">
                </div>
                <div class="form-group">
                    <textarea type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection