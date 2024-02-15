@extends('layouts.main')
@section('container')
    <div class="container-fluid px-4">
        <h1>Tambah Area</h1><br>
        <form class="row g-3" id="tambahAreaForm" method="post" action="/tambah-area">
            @csrf

            <div class="mb-3">
                <label for="nama_area" class="form-label">Nama Area</label>
                <input type="text" class="form-control" name="nama_area" id="nama_area" placeholder="Masukkan Nama Area"/>
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
