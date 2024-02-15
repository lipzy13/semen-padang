@extends('layouts.main')
@section('container')
    <div class="container-fluid px-4">
        <h1>Tambah Alat</h1><br>
        <form class="row g-3" id="tambahAlatForm" method="post" action="/tambah-alat">
            @csrf

            <div class="mb-3">
                <label for="kode_alat" class="form-label">Nama Alat</label>
                <input type="text" class="form-control" name="kode_alat" id="kode_alat" placeholder="Masukkan Kode Alat"/>
            </div>
            <div class="">
                <!-- Tombol untuk menambahkan kotak isian PIC baru -->
                <button class="btn btn-primary" type="submit" >Submit</button>
            </div>
        </form>
        <div class="mt-3">
            <a class="btn btn-secondary" href="/">Kembali</a>
        </div>

    </div>
@endsection
