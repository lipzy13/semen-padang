@extends('layouts.main')
@section('container')
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Periksa</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{route('main')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Periksa</li>
                    </ol>
                    <label for="validationDefault04" class="form-label">AREA</label>
                    <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                        <option selected disabled value=""></option>
                        <option value="1">Route A-1</option>
                        <option value="2">Route A-2</option>
                        <option value="3">Route A-3</option>
                        <option value="3">Route A-4</option>
                        <option value="3">Route A-5</option>
                    </select>

                    <label for="validationDefault04" class="form-label">PIC1</label>
                    <select class="form-select form-select-sm " aria-label="Small select example">
                        <option selected disable value></option>
                        <option value="1">Dimas</option>
                        <option value="2">rifqi</option>
                        <option value="3">seto</option>
                    </select>

                    <label for="validationDefault04" class="form-label">PIC2</label>
                    <select class="form-select form-select-sm " aria-label="Small select example">
                        <option selected disable value></option>
                        <option value="1">Dimas</option>
                        <option value="2">rifqi</option>
                        <option value="3">seto</option>
                    </select>

                    <label for="validationDefault04" class="form-label">PIC2</label>
                    <select class="form-select form-select-sm " aria-label="Small select example">
                        <option selected disable value></option>
                        <option value="1">Dimas</option>
                        <option value="2">rifqi</option>
                        <option value="3">seto</option>
                    </select>
                    <p></p>

                    <div class="d-grid gap-2 col-6 mx-auto mb-3">
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>

                    <!-- Logo Kamera dan Tombol Mulai Scanning -->


                        <!-- Form Checkbox Kondisi -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cleaningCheckbox">
                            <label class="form-check-label" for="cleaningCheckbox">
                                Kondisi Cleaning
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="visualCheckbox">
                            <label class="form-check-label" for="visualCheckbox">
                                Kondisi Visual
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="kondisiCheckbox">
                            <label class="form-check-label" for="kondisiCheckbox">
                                Kondisi ok
                            </label>
                        </div>

                        <!-- Tombol Simpan dan Notifikasi -->
                        <button id="simpanBtn" class="btn btn-success mt-3">Simpan</button>
                        <div id="notifSimpan" class="mt-3"></div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">

            </footer>
@endsection
