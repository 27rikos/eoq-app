@extends('template.main')
@section('title', 'Produk')
@section('main')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('produk.create') }}" class="btn btn-primary"><i class="ti ti-plus me-1"></i>Tambah</a>
            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#import"><i
                    class="ti ti-file-spreadsheet me-2"></i>Import</a>
            <!-- Modal -->
            <div class="modal fade" id="import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Import Produk</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="#" method="post">
                            <div class="modal-body">
                                <input type="file" class="form-control" name="file" accept=".xlsx,.xls,.csv">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Import</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
