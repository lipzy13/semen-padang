@extends('layouts.main')
@section('container')
    <div class="container-fluid px-4">
        <h1>Tambah Route</h1><br>
        <form class="row g-3" id="tambahAreaForm" method="post" action="/tambah-route">
            @csrf

            <div class="mb-3">
                <label for="nama_route" class="form-label">Nama Route</label>
                <input type="text" class="form-control" name="nama_route" id="nama_route" placeholder="Masukkan Nama Route"/>
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
