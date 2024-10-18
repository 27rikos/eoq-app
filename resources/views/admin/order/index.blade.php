@extends('template.main')
@section('title', 'Pesanan')
@section('main')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('produk.create') }}" class="btn btn-primary"><i class="ti ti-plus me-1"></i>Tambah</a>
            <a href="{{ route('produk.create') }}" class="btn btn-success"><i
                    class="ti ti-file-spreadsheet me-2"></i>Tambah</a>
        </div>
        <div class="card-body">
            <table id="example" class="table table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No Order</th>
                        <th>Tanggal</th>
                        <th>Customer</th>
                        <th>Total Item</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger</td>
                        <td>Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><span class="bg-light-success text-success px-3 py-1 fw-bold rounded-pill">Edinburgh</span></td>
                        <td>61</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
