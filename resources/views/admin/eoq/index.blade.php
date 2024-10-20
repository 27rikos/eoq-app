@extends('template.main')
@section('title', 'EOQ')
@section('main')
    <div class="card">
        <div class="card-body">
            <table id="example" class="table table-bordered nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#No</th>
                        <th>Kode Produk</th>
                        <th>Stock</th>
                        <th>harga</th>
                        <th>Satuan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger</td>
                        <td>Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
