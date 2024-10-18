@extends('template.main')
@section('title', 'Produk')
@section('main')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h2>Tambah Produk</h2>
                <a href="{{ route('produk.index') }}" class="btn btn-info">Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('produk.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="" class="mb-2">Kode Produk</label>
                    <input type="text" class="form-control" name="kode_produk">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2">Produk</label>
                    <input type="text" class="form-control" name="produk">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2">Satuan Produk</label>
                    <input type="text" class="form-control" name="satuan">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2">harga</label>
                    <input type="number" class="form-control" name="harga">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
