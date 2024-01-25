@extends('layouts.main')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">History Pemeriksaan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">History Pemeriksaan</li>
            </ol>

        </div>
        <div class="card mb-4">
            <div class="card-header">

                CHECK LIST <br>PEMERIKSAAN DAN PERBAIKAN
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>PEMERIKSA</th>
                        <th>AREA</th>
                        <th>KODE ALAT</th>
                        <th>EQUIPMENT</th>
                        <th>TANGGAL</th>
                        <th>KONDISI</th>
                        <th>ROUTE</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>PEMERIKSA</th>
                        <th>AREA</th>
                        <th>KODE ALAT</th>
                        <th>EQUIPMENT</th>
                        <th>TANGGAL</th>
                        <th>KONDISI</th>
                        <th>ROUTE</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>PEMERIKSA 1</td>
                        <td>ROUTE A-1</td>
                        <td>6C1J01A01</td>
                        <td>Apron Feeder, VFD</td>
                        <td>21/01/2024</td>
                        <td>OK</td>
                        <td>ROUTE A-1</td>
                    </tr>
                    <tr>
                        <td>PEMERIKSA 2</td>
                        <td>ROUTE A-1</td>
                        <td>6C1J01M01</td>
                        <td>Apron Feeder, Motor</td>
                        <td>21/01/2024</td>
                        <td>OK</td>
                        <td>ROUTE A-1</td>
                    </tr>
                    <tr>
                        <td>PEMERIKSA 3</td>
                        <td>ROUTE A-1</td>
                        <td>6C1J01M01</td>
                        <td>Apron Feeder, Motor</td>
                        <td>21/01/2024</td>
                        <td>OK</td>
                        <td>ROUTE A-1</td>
                    </tr>
                    <tr>
                        <td>PEMERIKSA 2</td>
                        <td>ROUTE A-1</td>
                        <td>6C1J01M01</td>
                        <td>Apron Feeder, Motor</td>
                        <td>21/01/2024</td>
                        <td>OK</td>
                        <td>ROUTE A-1</td>
                    </tr>
                    <tr>
                        <td>PEMERIKSA 2</td>
                        <td>ROUTE A-1</td>
                        <td>6C1J01M01</td>
                        <td>Apron Feeder, Motor</td>
                        <td>21/01/2024</td>
                        <td>OK</td>
                        <td>ROUTE A-1</td>
                    </tr>
                    <tr>
                        <td>PEMERIKSA 2</td>
                        <td>ROUTE A-1</td>
                        <td>6C1J01M01</td>
                        <td>Apron Feeder, Motor</td>
                        <td>21/01/2024</td>
                        <td>OK</td>
                        <td>ROUTE A-1</td>
                    </tr>
                    <tr>
                        <td>PEMERIKSA 2</td>
                        <td>ROUTE A-1</td>
                        <td>6C1J01M01</td>
                        <td>Apron Feeder, Motor</td>
                        <td>21/01/2024</td>
                        <td>OK</td>
                        <td>ROUTE A-1</td>
                    </tr>
                    <tr>
                        <td>PEMERIKSA 2</td>
                        <td>ROUTE A-1</td>
                        <td>6C1J01M01</td>
                        <td>Apron Feeder, Motor</td>
                        <td>21/01/2024</td>
                        <td>OK</td>
                        <td>ROUTE A-1</td>
                    </tr>


                    </tbody>
                </table>
                <button id="printPdfButton">Donwload file</button>

            </div>

        </div>
    </main>
@endsection
