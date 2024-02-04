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
                <tbody>
                <tr>
                    <td>RM</td>
                    <td>ROUTE A-1</td>
                    <td>tess</td>
                    <td>25/1/2024</td>
                    <td>123456</td>
                    <td>tess</td>
                    <td>tess</td>
                    <td>ok</td>
                </tr>
                <!-- Tambahkan baris sesuai kebutuhan -->
                </tbody>
            </table>
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
                    <th>PIC1</th>
                    <th>PIC2</th>
                    <th>PIC3</th>
                    <th>PIC4</th>
                    <th>TANGGAL</th>
                    <th>KODE ALAT</th>
                    <th>cleaning</th>
                    <th>visual</th>
                    <th>adjusting</th>
                    <th>repair</th>
                    <th>indikasi</th>
                    <th>kondisi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>RM</td>
                    <td>ROUTE A-1</td>
                    <td>pic1</td>
                    <td>pic2</td>
                    <td>pic3</td>
                    <td>pic4</td>
                    <td>25/1/2024</td>
                    <td>123456</td>
                    <td align="centre" style="font-family: wingdings; font-size:150%;font-weight:bold; font-color:green">&#10004;</TD>
                    <td align="centre" style="font-family: wingdings; font-size:150%;font-weight:bold; font-color:green">&#10004;</TD>
                    <td align="centre" style="font-family: wingdings; font-size:150%;font-weight:bold; font-color:green">&#10004;</TD>
                    <td align="centre" style="font-family: wingdings; font-size:150%;font-weight:bold; font-color:green">&#10004;</TD>
                    <td align="centre" style="font-family: wingdings; font-size:150%;font-weight:bold; font-color:green">&#10004;</TD>
                    <td>ok</td>
                </tr>
                <!-- Tambahkan baris sesuai kebutuhan -->
                </tbody>
            </table>
        </div>

    </div>
    <footer class="py-4 bg-light mt-auto">

    </footer>
@endsection
