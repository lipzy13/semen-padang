@extends('layouts.main')

@section('container')
    <div class="container-fluid px-4">
        <h1 class="mt-4">History Pemeriksaan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">History Pemeriksaan</li>
        </ol>

    </div>
    <div class="card mb-4">
        <div class="card-header">
            tabel workorder
        </div>
        <div class="container mt-4">
            <table class="table">
                <thead>
                <tr>
                    <th>TANGGAL MULAI</th>
                    <th>TANGGAL SELESAI</th>
                    <th>PIC</th>
                    <th>ALAT</th>
                    <th>ABNORMALITAS</th>
                    <th>ACTION</th>
                    <th>KONDISI</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\workOrder::all() as $worko)
                    <tr>
                        <td>{{$worko->tanggal_mulai}}</td>
                        <td>{{$worko->tanggal_selesai}}</td>
                        <td>
                            <ul>
                                @foreach(\App\Models\pic_workorder::where('work_order_id', $worko->id)->get() as $pic)
                                    <li>{{$pic->nama}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{$worko->alat->kode_alat}}</td>
                        <td>{{$worko->abnormalitas}}</td>
                        <td>{{$worko->action}}</td>
                        <td>{{$worko->kondisi ? 'ok' : 'not ok'}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="/work-order/delete" class="btn-danger btn my-2">Hapus</a>
            <a href="/work-order/download" class="btn-success btn my-2">Download</a>
        </div>

    </div>

    <div class="card mb-4">
        <div class="card-header">
            tabel basic maintance
        </div>
        <div class="container mt-4">
            <table class="table">
                <thead>
                <tr>
                    <th>AREA</th>
                    <th>ROUTE</th>
                    <th>PIC</th>
                    <th>TANGGAL</th>
                    <th>KODE ALAT</th>
                    @foreach(\App\Models\Aksi::all() as $semua_aksi)
                        <th>{{$semua_aksi->nama}}</th>
                    @endforeach
                    <th>kondisi</th>
                </tr>
                </thead>
                <tbody>
                @foreach(\App\Models\basicMaintenance::all() as $data)
                    <tr>
                        <td>{{$data->area->nama_area}}</td>
                        <td>{{$data->route->nama_route}}</td>
                        <td>
                            <ul>
                                @foreach(\App\Models\Pic::where('basic_maintenances_id', $data->id)->get() as $pic)
                                    <li>
                                        {{$pic->nama}}
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{$data->tanggal->format('d/m/Y')}}</td>
                        <td>
                            <ul>
                                    <li>{{\App\Models\Alat::where('id', $data->alat)->value('kode_alat') }}</li>
                            </ul>
                        </td>
                        <?php $aksi_list = \App\Models\AksiList::where('basic_maintenance_id', $data->id)->pluck('aksi_id')->all() ?>
                        @foreach(\App\Models\Aksi::all() as $aksi)
                            @if(in_array($aksi->id, $aksi_list))
                                <td align="center" style="font-family: wingdings; font-size:150%;font-weight:bold; font-color:green">&#10004;</td>
                            @else
                                <td align="center" style="font-family: wingdings; font-size:150%;font-weight:bold; font-color:green"></td>
                            @endif

                        @endforeach
                        <td>
                                    {{$data->kondisi ? 'ok' : 'not ok'}}
                        </td>
                    </tr>
                @endforeach
                <!-- Tambahkan baris sesuai kebutuhan -->
                </tbody>
            </table>
            <a href="/basic-maintenance/delete" class="btn-danger btn my-2">Hapus</a>
            <a href="/basic-maintenance/download" class="btn-success btn my-2">Download</a>
        </div>

    </div>
    <footer class="py-4 bg-light mt-auto">

    </footer>
@endsection
