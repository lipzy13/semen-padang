@extends('layouts.main')

@section('container')
    <div class="container-fluid px-4">
        <h1>Basic Maintance</h1><br>
        <form class="row g-3" id="workOrderForm">

            <div class="form-check">
                <label for="validationDefault04" class="form-label"></label>
                <select class="form-select" aria-label="Large select example">
                    <option selected disabled>Area</option>
                    @foreach($area as $are)
                        <option value={{$are->id}}>{{$are->nama_area}}</option>
                    @endforeach
                </select>

                <label for="validationDefault04" class="form-label"></label>
                <select class="form-select" aria-label="Large select example">
                    <option selected disabled>Route</option>
                    @foreach($route as $rout)
                        <option value={{$rout->id}}>{{$rout->nama_route}}</option>
                    @endforeach
                </select>
                <br>
                <!-- Kotak isian PIC pertama -->
                <label for="pic" class="">PIC </label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="masukkan nama pic" required>
                <br>
            </div>

            <div class="form-check">
                <label for="validationDefault04" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="validationDefault04" required>
            </div><br>

            <div class="form-check">
                <label for="validationDefault02" class="form-label">Kode Alat</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="masukkan kode alat" required>
            </div>

            <div class="form-check">
                <input  type="checkbox" value="" id="flexCheckDefault">
                <label  for="flexCheckDefault">
                    cleaning
                </label>
            </div>

            <div class="form-check">
                <input type="checkbox" value="" id="flexCheckDefault">
                <label for="flexCheckDefault">
                    visual
                </label>
            </div>

            <div class="form-check">
                <input type="checkbox" value="" id="flexCheckDefault">
                <label for="flexCheckDefault">
                    Adjusting
                </label>
            </div>

            <div class="form-check">
                <input type="checkbox" id="flexCheckDefault">
                <label for="flexCheckDefault">
                    Repair
                </label>
            </div>

            <div class="form-check">
                <input type="checkbox" value="" id="flexCheckDefault">
                <label for="flexCheckDefault">
                    Indikasi
                </label>
            </div>

            <div class="form-check form-check-inline">
                <input  type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label for="inlineRadio1">ok</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label for="inlineRadio2">not ok</label>
            </div>
            <div class="mb-3">
                <label for="validationTextarea" class="form-label">Abnormalitas</label>
                <textarea class="form-control" id="validationTextarea" placeholder="Masukan teks" ></textarea>
            </div>
            <div class="form-check">
                <!-- Tombol untuk menambahkan kotak isian PIC baru -->
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>

            <div class="form-check">
                <a class="btn btn-secondary" href="/">Kembali</a>
            </div>
        </form>
    </div>
@endsection
