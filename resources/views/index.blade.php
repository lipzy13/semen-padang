@extends('layouts.main')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard Pemeliharaan Mesin</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Scan Mesin</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body"> Basic Maintance Ka.ur</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="form-admin.html">view details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-light text-black mb-4">
                        <div class="card-body"> Basic Maintance OutSourcing</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-black stretched-link" href="checklist.html">view details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Workorder</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="form-workorder.html">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">History</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="history.html">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">

                    CHECK LIST <br>PEMERIKSAAN DAN PERBAIKAN
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>AREA</th>
                            <th>ROUTE</th>
                            <th>PIC</th>
                            <th>TANGGAL</th>
                            <th>KODE ALAT</th>
                            <th>ABNORMALITAS</th>
                            <th>ACTION</th>
                            <th>KONDISI</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>AREA</th>
                            <th>ROUTE</th>
                            <th>PIC</th>
                            <th>TANGGAL</th>
                            <th>KODE ALAT</th>
                            <th>ABNORMALITAS</th>
                            <th>ACTION</th>
                            <th>KONDISI</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach(\App\Models\workOrder::all() as $workorder)
                            <tr>
                                <td>{{\App\Models\Area::find($workorder->area_id)->nama_area}}</td>
                                <td>{{\App\Models\Route::find($workorder->route_id)->nama_route}}</td>
                                <td>{{$workorder->pic}}</td>
                                <td>{{$workorder->tanggal->format('d/m/Y')}}</td>
                                <td>{{$workorder->kode_alat}}</td>
                                <td>{{$workorder->abnormalitas}}</td>
                                <td>{{$workorder->action}}</td>
                                <td>{{$workorder->kondisi ? 'OK' : 'Not OK'}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
