@extends('layouts.main')

@section('container')
    <div class="container-fluid px-4">
        <h1>Workorder</h1><br>
        <form class="row g-3" id="workOrderForm">

            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="validationDefault04" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Kode Alat</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="masukkan kode alat" required>
            </div>
            <div class="mb-3">
                <label for="validationTextarea" class="form-label">Abnormalitas</label>
                <textarea class="form-control" id="validationTextarea" placeholder="Masukkan teks"></textarea>
            </div>
            <div class="mb-3">
                <label for="validationTextarea" class="form-label">Action</label>
                <textarea class="form-control" id="validationTextarea" placeholder="Masukkan teks"></textarea>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" value="" required>
                <label class="form-check-label" for="validationFormCheck2">OK</label>
            </div>
            <div class="form-check mb-3">
                <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" value="" required>
                <label class="form-check-label" for="validationFormCheck3">Not OK</label>
            </div>

            <div class="col-12">
                <!-- Tombol untuk menambahkan kotak isian PIC baru -->
                <button class="btn btn-primary" type="button" onclick="submitForm()">Submit</button>
            </div>

            <div class="mt-3">
                <a class="btn btn-secondary" href="/">Kembali</a>
            </div>
        </form>
    </div>
@endsection
