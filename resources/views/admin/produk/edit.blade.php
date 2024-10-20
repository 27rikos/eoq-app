@extends('template.main')
@section('title', 'Produk')
@section('main')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h2>Edit Produk</h2>
                <a href="{{ route('produk.index') }}" class="btn btn-info">Kembali</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('produk.update', $data->id) }}" method="post">
                @method('put')
                @csrf
                <div class="form-group mb-3">
                    <label for="" class="mb-2">Kode Produk</label>
                    <input type="text" class="form-control" name="kode_produk" value="{{ $data->kode_produk }}">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2">Produk</label>
                    <input type="text" class="form-control" name="produk" value="{{ $data->produk }}">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah" value="{{ $data->jumlah }}">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2">Satuan Produk</label>
                    <input type="text" class="form-control" name="satuan" value="{{ $data->satuan }}">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2">Harga</label>
                    <input type="number" class="form-control" name="harga" value="{{ $data->harga }}">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
