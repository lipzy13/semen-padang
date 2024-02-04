@extends('layouts.main')

@section('container')
    <div class="container-fluid px-4">
        <h1>Workorder</h1><br>
        <form class="row g-3" id="workOrderForm" method="post" action="/work-order">
            @csrf

            <div class="col-md-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" required>
            </div>
            <div class="form-check col-md-4">
                <label for="validationDefault02" class="form-label">Kode Alat</label>
                <select class="form-select"  name="alat_id" id="alat_id">
                    <option disabled selected value="">Alat</option>
                    @foreach(\App\Models\Alat::all() as $al)
                        <option value="{{$al->id}}">{{$al->kode_alat}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="abnormalitas" class="form-label">Abnormalitas</label>
                <textarea class="form-control" id="abnomralitas" name="abnormalitas" id="abnormalitas" placeholder="Masukkan teks"></textarea>
            </div>
            <div class="mb-3">
                <label for="action" class="form-label">Action</label>
                <textarea class="form-control" id="action" name="action" placeholder="Masukkan teks"></textarea>
            </div>
            <div class="form-check form-check-inline">
                <input  type="radio" name="kondisi" id="inlineRadio1" value=1 id="kondisi">
                <label for="inlineRadio1">ok</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="kondisi" id="inlineRadio2" value=0 id="kondisi">
                <label for="inlineRadio2">not ok</label>
            </div>
            <div class="col-12">
                <!-- Tombol untuk menambahkan kotak isian PIC baru -->
                <button class="btn btn-primary" type="submit" >Submit</button>
            </div>
        </form>
            <div class="mt-3">
                <a class="btn btn-secondary" href="/">Kembali</a>
            </div>

    </div>
@endsection
