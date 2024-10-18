@extends('template.main')
@section('title', 'Dashboard')
@section('main')
    <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row alig n-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-10 fw-semibold">Total Produk</h5>
                                    <h4 class="fw-semibold mb-3">820</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-primary rounded-circle p-7 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-package fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row alig n-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-10 fw-semibold">Total Pesanan</h5>
                                    <h4 class="fw-semibold mb-3">620</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-success rounded-circle p-7 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-truck-delivery fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row alig n-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-10 fw-semibold">Stock</h5>
                                    <h4 class="fw-semibold mb-3">620</h4>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-info rounded-circle p-7 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-building-warehouse fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex mb-4 justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold">Aktivitas Terbaru</h5>
                    </div>

                    <div class="table-responsive" data-simplebar>
                        <table class="table table-bordered align-middle text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Pesanan</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="fs-3 fw-normal mb-0">$150/hour</p>
                                    </td>
                                    <td>
                                        <p class="fs-3 fw-normal mb-0 text-success">
                                            +53
                                        </p>
                                    </td>
                                    <td>
                                        <span
                                            class="badge bg-light-success rounded-pill text-success px-3 py-2 fs-3">Available</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'bar',
                height: 415
            },
            series: [{
                name: 'Penjualan Produk',
                data: [150, 200, 180, 250]
            }],
            xaxis: {
                categories: ['2020', '2021', '2022', '2023'],
                title: {
                    text: 'Tahun'
                }
            },
            yaxis: {
                title: {
                    text: 'Jumlah Penjualan'
                }
            },
            title: {
                text: 'Grafik Penjualan Produk UD.DISON',
                align: 'center'
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endsection
